<?php
$user=$_POSt['un'];
$pass=$_POST['pwd'];
if($user=="admin" && $pass=='nopass')
{
    echo "Welcome Admin";
}
else
{
    echo "Wrong User Id or Password";
}
?>