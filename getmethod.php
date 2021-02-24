


<html>
<form action="" method="REQUEST">
name <input type="text" name="name">
age <input type="text" name="age">
<input type="submit" name="submit">
</form></html>


<?php

if($_REQUEST['name'] ||$_REQUEST['age']){
    echo $_REQUEST['name'];
    exit;
}
?>