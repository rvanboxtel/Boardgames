<?php require 'partials/head.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="bg-primary text-white ">
                    Welkom ADSD 2018!
                </div>
            </div> <!-- End div greeting -->
            <hr>
            <div class="col-10 offset-1">
                <h4>Games</h4>
                <?php
                foreach ($games as $items) {
                    foreach ($items as $item => $value) {
                        if ($item == 'name') {
                            echo "<li class='list-group-item'>" . ucfirst($value) . "</li>";
                        }
                    }
                }

                ?>
            </div><!-- End div - Games -->
            <hr>
            <div class="col-10 offset-1">

            </div><!-- End div - class Player-->
        </div> <!-- End div row -->

<?php require 'partials/foot.php'; ?>