<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/12
 * Time: 21:09
 */
//require("LMS_db.php");
$block_B=$_POST['block_B'];
$block_C=$_POST['block_C'];
$block_L=$_POST['block_L'];
$block_W=$_POST['block_W'];
$block_Ml=$_POST['block_Ml'];
$block_type=$_POST['block_type'];
$conn=mysqli_connect("localhost","root","root","hiwin");

$result=mysqli_query($conn,"SELECT * FROM block_parameters");
//while($row = mysqli_fetch_array($result))
//{
//    echo $row['B'] . " " . $row['C'];
//    echo "<br />";
//}
$sql="INSERT INTO block_parameters values ('$block_B','$block_C','$block_L','$block_W','$block_Ml','$block_type')";

$re=mysqli_query($conn,$sql);

if($re==true){
    echo"<script>alert('OK');history.go(-1);</script>";;
}else{
    echo 'no';
}
mysqli_close($conn);


?>