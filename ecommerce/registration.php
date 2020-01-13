<?PHP

session_start();
header('location:login.php');

$con = mysqli_connect("localhost","root");

if($con){
    echo"connection succed";
}else{
    echo"failed";
}
mysqli_select_db($con,'login');

$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = "select * from login where name = '$name' && password = '$pass' ";

$result = mysqli_query($con, $q);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" duplicate data ";
}else{

    $qy = " insert into login(name , email , password) values ('$name' , '$email' , '$pass') ";
    mysqli_query($con, $qy);
}








?>