<?PHP
session_start();
function check_login(){
if(strlen($_SESSION['login'])==0){
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
$extra="loginshef.php";
header("location:http://$host$uri/$extra");
}

}

?>
