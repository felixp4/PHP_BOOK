<?php

$find = array('fuck', 'idiot', 'bitch');
$replace = array('f**k', 'id**t', 'bi**h');
$ui_new = 'fuck !!!';

if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $ui = $_POST['user_input'];
    $ui_new = str_ireplace($find, $replace, $ui);
    // echo $ui_new;
    // var_dump($ui_new);
}
?>

<html>
<head></head>

<body>
<form action="censor.php" method="POST">
    <textarea name = "user_input" rows = "6" cols = "30"> <?php echo $ui_new ?> </textarea>
    <input type="submit" value="Submit!">
</form>
</body>

</html>