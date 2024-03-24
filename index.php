<?php 
  include 'validate.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validations</title>
</head>

<body>
    <form action="#" method="POST">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname"><span><?=$error_message?></span><br><br>



        <label for="lname">Last name:</label>
        <input type="text" id="lname" name="lname"><span><?=$error_message?></span><br><br>


        <label for="adress">Adress</label>
        <input type="text" id="adress" name="adress"><br><br>

        
        <label for="number">Number</label>
        <input type="number" id="number" name="number"><br><br>
        <input type="submit">
    </form>
</body>

</html>