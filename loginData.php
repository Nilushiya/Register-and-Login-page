<?php 
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "aaaa";
 
$connect ="";

$connect = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['login'])){
    $username = $_POST['FullName'];
    $password = $_POST['password'];

    $sql = "select * from bbbb where user = '$username'";

    $result = mysqli_query($connect,$sql);
    $fetchRow = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $fetchRow['password']){
            header("location:welcome.html");
        }
        else{
            echo "username or password wrong";
        }
    }
    else{
        echo "username or password wrong";
    }
}
else{
    echo "something wrong";
}

?>