<!DOCTYPE html>
<html lang="">
<head>
    <?php
    require_once 'connec.php';

    $pdo = new PDO(DSN, USERNAME, PASSWORD);

    ?>
    <title></title>
<body>

<h1>Add to our F R I E N D S database</h1>

<form name="myForm" action="/submit.php" method="post">
    <label for="firstname">First name:</label>
    <input type="text" id="firstname" name="firstname"><br><br>
    <label for="lastname">Last name:</label>
    <input type="text" id="lastname" name="lastname"><br><br>
    <input type="submit" value="Send">
</form>

<form name="DumpData" action="/dump.php" method="post">
    <input type="submit" name="dump" value="Show all Friends" >
</form>

</body>
</html>
