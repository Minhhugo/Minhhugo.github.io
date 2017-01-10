<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form </title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>


        body{
            background-color: ghostwhite;
        }
        form{
            margin: 50px auto;
            width: 500px;
            height: auto;
        }
        .lbl{
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="#" method="post" role="form">
                <legend> Đăng kí thành viên</legend>

                <div class="form-group">
                    <label for="name"> Tên dăng nhập </label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="nhập tên đăng nhập" min="6" max="15" autofocus>
                </div>
                <div class="form-group">
                    <label for="hoten"> Họ và tên </label>
                    <input type="text" class="form-control" name="hoten" id="hoten" placeholder="nhập họ và tên">
                </div>
                <div class="form-group">
                    <label for="ngaysinh">  Ngày sinh</label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="nhập ngày sinh">
                </div>
                <div class="form-group">
                    <label for=""> Giới tính </label>

                </div>
                <div  class="form-group">
                    <label class="lbl" for="optionRadios1">
                        <input type="radio" name="optionsRadio" id="optionRadios" value="option1"  checkd=""> Nam</label>
                </div>
                <div  class="form-group">
                    <label class="lbl" for="optionRadios2">
                        <input type="radio" name="optionsRadio" id="optionRadios" value="option1" checkd=""> Nữ</label>
                </div>
                <div class="form-group">
                    <label for="mail">  Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="nhập địa chỉ email" required>
                </div>
                <div class="form-group">
                    <label for="txtarea"> Địa chỉ</label>
                    <textarea id="txtarea" name="address" class="form-control" cols="30" rows="10" placeholder="input"></textarea>
                </div>



                <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
<?php

if(isset($_POST["btn-submit"])){
    echo "<pre>";
    var_dump($_POST);

}


?>
</body>
</html>