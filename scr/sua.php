<!DOCTYPE html>
<html>
<head>
	<title>Thêm nội dung </title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">

    	img{
    		width: 100px;
    	}
    </style>
</head>
<body>

	
	

	<form method="POST" class="container" enctype="multipart/form-data">
		<div class="form-group">
            <label for="text">Tên:</label>
    		<input type="text" class="form-control" name="ten" value="<?php echo $name?>">
  			</div>
  			<div class="form-group">
    		<label for="email">Email:</label>
    		<input type="email" class="form-control" name ="gmail" value="<?php echo $email?>">
  			</div>
  			<div class="form-group">
            <label for="text">Chức Vụ:</label>
    		<input type="text" class="form-control" name="chucvu" value="<?php echo $chucvu?>">
  			</div>
  			<div class="form-group">
            <label for="text">Tên Đơn Vị:</label>
            <input type="text" class="form-control" name="tendv" value="<?php echo $tendv?>">				
  			</div>
  			
  			<div class="form-group">
  			 <label for="text">Ảnh:</label>
  			 <p style="width: 100px;"><img src="<?php echo $anh;?>"></p>
  			 <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" value="">
  			</div>
  			
  			<div class="form-group">
            <label for="text">Số điện thoại:</label>
    		<input type="text" class="form-control" name="sdt" value="<?php echo $sdt?>">
  			</div>
  			<button type="submit" class="btn btn-default">Submit</button>
	</form>
</body>

</html>