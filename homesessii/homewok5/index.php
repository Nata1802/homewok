<?php

session_start();

if (isset($_REQUEST['submit']))
{
    $_SESSION['name'] = $_REQUEST['name'];
    $_SESSION['surname'] = $_REQUEST['surname'];

}
?>
<form action="" method="GET">
    <input name="name">
    <input name="surname">
    <input type="submit" name="submit">
</form>