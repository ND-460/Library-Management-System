
<?php
$localhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "LMS";
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
if(isset($_POST['submit']))
{
    $sr = $_GET['id'];
    $pname = rand(100,1000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];

    $uploads_dir = 'images';

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $sql = "update user set image='$pname' where Rollno='$sr'";
    $result = mysqli_query($conn,$sql);
    header("Location:index.php");
}
?>