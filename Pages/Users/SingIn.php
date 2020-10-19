<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sing In</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="../../Css/SingInStyle.css">
    <link rel="shortcut icon" href="../../img/Logo.png" type="image/x-icon">
</head>
<body>

<div class="container">
    <?php
    if(isset($_GET["response"]))
    {
        $response =$_GET["response"];
        echo "<h2 class=' w3-container w3-teal singIng' style='display: inline-block'>$response</h2>";
    }
    ?>
<div class="w3-container w3-teal singIng">
    <h2>Sing In</h2>
</div>

<form class="w3-container" method="post" action="SingInController.php">
    <label class="w3-text-teal label"><b>User</b></label>
    <input type="text" name="user" required=" "  class="w3-input w3-border w3-light-grey" >

    <label class="w3-text-teal label"><b>Password</b></label>
    <input type="password" name="password" required=" " class="w3-input w3-border w3-light-grey" >

    <input type="submit" class="w3-btn w3-blue-grey register" value="Register">
    <button  class="w3-btn w3-blue-grey register"><a href="../../index.php" style="text-decoration: none">Home</a></button>
</form>
</div>

</body>
</html>