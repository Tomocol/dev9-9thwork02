<?php 
session_start();
echo session_id();

$_SESSION["name"]="YAMAZAKI";
$_SESSION["tel"]="090-000-000";
$_SESSION["e-mail"]="aaihi@yahoo";

echo $_SESSION["tel"];
echo "古いセッション:$old_session<br/>";
echo "古いセッション:$new_session<br/>";
?>