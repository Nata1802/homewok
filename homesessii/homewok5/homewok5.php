<?php
session_start();
//$_SESSION['text']='тест';
//if (!isset($_SESSION['text']))
//{
//    $text = $_SESSION['text'];
//    echo $_SESSION['text'];
//}

?>
<form action="homework51.php" method="GET">
    <input type="text" name="name" placeholder="Ведите имя">
    <input type="submit" name="submit" >

</form>
<?php
if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;
echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
//echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить";

    //if (empty($_SESSION['time'])) {
//    $_SESSION['time'] = time();
//}
//
//echo time() - $_SESSION['time'];



