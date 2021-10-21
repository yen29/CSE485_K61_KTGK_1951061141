<?php
if(isset($_GET['bd_id'])){
    $conn = mysqli_connect('localhost', 'root','','mau','3306');
    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
         if(!$conn){
            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
            }
    $id=$_GET['manv'];
    $sql ="delete from BLOOD_DONOR where manv='".$bd_id."'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('location:index.php');
}
?>