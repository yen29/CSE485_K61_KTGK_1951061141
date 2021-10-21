<?php 
  #B1 kết nối với CSDL
	$conn = mysqli_connect('localhost', 'root','','mau','3306');
	mysqli_set_charset($conn,"utf8");//Định dang font chữ 
	if(!$conn){
		die("Không thể kết nối, kiểm tra lại các tham số kết nối");
	}
	$bd_name=$bd_sex=$bd_age=$bd_bgroup=$bd_reg_date=$bd_phno='';
	$bd_id='';
	if(isset($_POST)){
	if(isset($_POST['bd_name'])){
		$name=$_POST['bd_name'];
	}
	if(isset($_POST['bd_sex'])){
		$email=$_POST['bd_sex'];
	}
	if(isset($_POST['bd_age'])){
		$chucvu=$_POST['bd_age'];
	}
	if(isset($_POST['bd_bgroup'])){
		$tendv=$_POST['bd_bgroup'];
	}
	if(isset($_POST['bd_reg_date'])){
		$name=$_POST['bd_reg_date'];
	}
	if(isset($_POST['bd_phno'])){
		$name=$_POST['bd_phno'];
	}
}
