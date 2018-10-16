<?php
/**
 * Created by: stephanhoeksema 2018
 * phpoop
 */

class QueryBuilder
{
    protected $pdo;
    /**
     * @inheritDoc
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        /**
         * @var $statement all data for given table
         * @var $intoClass define class for output
         */
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);

    }
    /**
     * Insert a row into a table
     *
     * @param string $table
     * @param array $parameters
     */
    public function insert(string $table, array $parameters)
    {
        $sql = $this->getSqlInsert($table, $parameters);

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $exception) {
            die('Whoops, something went wrong');
        }
    }

    /**
     * Helper method to create an insert statement (excluding parameter values)
     *
     * @param string $table
     * @param array $parameters
     * @return string
     */
    private function getSqlInsert(string $table, array $parameters): string
    {
        //convert an array to a string to get column names
        $columnNames = implode(', ', array_keys($parameters)); //this will output "column1, column2"

        //convert an array to a string where each column will be prefixed by a colon. This will output ":column1, :column2"
        $columnNamesPrefixedWithColon = implode(
            ', ',
            //after the array is converted with a prefix (":"), convert it into a comma separated string
            array_map(function ($column) {
                return ":{$column}"; //convert "column1" into ":column1"
            }, array_keys($parameters))
        );

        //create the sql query
        return sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            $columnNames,
            $columnNamesPrefixedWithColon
        );
    }
}