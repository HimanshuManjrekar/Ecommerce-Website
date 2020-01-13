<?PHP

session_start();
// header('location:signin.php');

$con = mysqli_connect("localhost","root");

if($con){
    echo"connection succed";
}else{
    echo"failed";
}
mysqli_select_db($con,'login');

$name = $_POST['user'];
// $email = $_POST['email'];
$pass = $_POST['password'];

$q = "select * from login where name = '$name'  && password = '$pass'";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1){
    // this is used for declaring a sesion for further fetching purpose of username 
    $_SESSION['username'] = $name;
    header('location:index.php');

}else{
    header('location:login.php');
    // $qy = "insert into signin(name , email , password) values ('$name' , '$email' , '$pass')";
    // mysqli_query($con,$qy);


}








?>