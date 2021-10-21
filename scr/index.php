<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Thông Tin Người Đăng Kí Hiến Máu</title>
    <style type="text/css">
      img{
        width: 200px;
      }
    </style>
</head>
<body>
   <div class="main">
      <div class="container-fluid">
          <div class="row header">
            <div class="col-md-12">
                <br/>
                <br/>
                <img src="image/anh.jpg" alt="" class="img-fluid">
                <br/>
                <br/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col">Sửa</th>
                      <th scope="col">Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        #B1 kết nối với CSDL
                        $conn = mysqli_connect('localhost', 'root','','mau','3306');
                        mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                        if(!$conn){
                            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                        }
                        #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                        $sql = "SELECT * FROM BLOOD_DONOR;";
                        $result = mysqli_query($conn,$sql);
                         #Bước 3: Xử lí kết quả trả về
                        if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                      ?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row['bd_name']; ?></td>                 
                              <td><a href="sua.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-edit"></i> </a></td>
                              <td><a href="xoa.php?bd_id=<?php echo $row['bd_id']; ?>"><i class="fas fa-trash"></i> </a></td>
                            </tr>
                    <?php
                            
                        $i++;
                        }
                       }
                      
                    ?>

                  </tbody>
                </table>
            </div>
          </div>
      </div>
   </div>
</body>
</html>