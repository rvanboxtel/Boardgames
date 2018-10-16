<?php require 'partials/head.php'; ?> <!-- Gets the head -->
<form method="post" action="/add_player">
    <div class="row">
        <label class="offset-1 col-4">First Name *</label>
        <label class="col-4">Last Name *</label>
    </div>
    <div class="row">
        <input class="col-3 offset-1" type="text" required="required" name="fname">
        <input class="col-3 offset-1" type="text" required="required" name="lname">
    </div>
    <div class="row">
        <label class="offset-1 col-4">Email *</label>
    </div>
    <div class="row">
        <input class="col-4 offset-1" type="email" required="required" name="email">
    </div>
    <div class="row">
        <div class="offset-1">
            <button type="submit"> Submit</button>
        </div>
    </div>
</form>

<?php require 'partials/foot.php'; ?> <!-- Gets the footer -->