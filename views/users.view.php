<?php include "partials/head.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <hr>
            <div class="col-10 offset-1">
                <!-- added a new page for the adding of players -->
                <h1><a class="text-dark" href="userform">Add Player</a></h1>
                <h4>Users</h4>
                <?php
                foreach ($users as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'fname') {
                            echo "<li class='list-group-item'>" . ucfirst($value) . " ";
                        }
                        if ($item == 'email') {
                            echo ($value) . "</li>";
                        }
                    }
                }

                ?>
            </div><!-- End div - user -->
            <hr>
            <div class="col-10 offset-1">

            </div><!-- End div - class Player-->
        </div> <!-- End div row -->
    </div> <!-- End container -->
<?php require 'partials/foot.php'; ?>