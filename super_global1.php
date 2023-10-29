<?php
//get_post_request.php
?>
<!DOCTYPE html>
<html>

<head>
    <title>HTTPS</title>
</head>

<body>
    <form method="POST">
        <fieldset style="width: 20rem;">
            <legend>Personal Details</legend>
            <label>Name</label>
            <input type="text" name="name" id="email"><br><br> 
            <label>Email</label>
            <input type="email" name="email" id="email"><br><br>
            <label>DOB</label>
            <input type="date" name="dob" id="dob"><br><br>
            <input type="submit" name="submit">
        </fieldset>
    </form>
    <div style="display: flex;">
        <fieldset style="width: 20rem;">
            <legend>$_GET Data</legend>
            <?php
            echo "<h3>Name is: " . $_GET['name'] . " </h3>";
            echo "<h3>Email is: " . $_GET['email'] . " </h3>";
            echo "<h3>Date Of Birth is: " . $_GET['dob'] . " </h3>";
            ?>
        </fieldset>
        <fieldset style="width: 20rem;">
            <legend>$_POST Data</legend>
            <?php
            echo "<h3>Name is: " . $_POST['name'] . " </h3>";
            echo "<h3>Email is: " . $_POST['email'] . " </h3>";
            echo "<h3>Date Of Birth is: " . $_POST['dob'] . " </h3>";
            ?>
        </fieldset>
        <fieldset style="width: 20rem;">
            <legend>$_REQUEST Data</legend>
            <?php
            echo "<h3>Name is: " . $_REQUEST['name'] . " </h3>";
            echo "<h3>Email is: " . $_REQUEST['email'] . " </h3>";
            echo "<h3>Date Of Birth is: " . $_REQUEST['dob'] . " </h3>";
            ?>
        </fieldset>
    </div>
</body>

</html>