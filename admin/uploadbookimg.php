<?php
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "LMS";
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
if(isset($_POST['submit']))
{
    $pname = rand(100,1000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];

    $uploads_dir = 'images';
    $x = $_GET['id'];
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $sql = "update book set image='$pname' where BookId='$x'";
    $result = mysqli_query($conn,$sql);
    header("Location:index.php");
}
?>