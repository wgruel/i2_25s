<?php
include("config.php");

$oldEmail = $_GET['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Address Manager</title>
</head>
<body >
    <h1>Email Address Manager - Edit Email</h1>
    <!-- Edit form -->
    <form method="post" action="edit.php">
        <input type="hidden" name="oldEmail" value="<?php echo $oldEmail ?>">
        <input type="email" name="newEmail" value="<?php echo trim($oldEmail) ?>" required>
        <button type="submit" name="btn-save">Update</button>
    </form>
</body>
</html>
