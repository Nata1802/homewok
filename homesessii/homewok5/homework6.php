<?php
if (isset($_REQUEST['submit'])) {
    $name = $_REQUEST['name'];
    echo 'меня зовут  '. $name;
}