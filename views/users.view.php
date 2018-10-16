<?php include "partials/head.php"; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="bg-primary text-white ">
                    Welkom ADSD 2018!
                </div>
            </div> <!-- End div greeting -->
            <hr>
            <div class="col-10 offset-1">
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