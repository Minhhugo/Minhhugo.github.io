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
        .cl{
            margin-left:41%;
            padding: 10px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form method="post" role="form">
                <legend style="text-align: center"> Đăng kí thành viên</legend>

                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="First  and last name"  autofocus>
                </div>
                <div class="form-group">
                    <label for="mail">  Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="example@domain.com" required>
                </div>
                <div class="form-group">
                    <label for="hoten"> Create a username </label>
                    <input type="text" class="form-control" name="hoten" id="hoten" placeholder="username">
                </div>
                <div class="form-group">
                    <label for="password"> Create a password </label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="">
                </div>
                <div class="form-group">
                    <label for="password"> Confirm your password </label>
                    <input type="password" class="form-control" name="pass" id="pass" placeholder="">
                </div>

                <div class="form-group">
                    <label for="ngaysinh">  Birthday </label>
                    <input type="date" class="form-control" name="date" id="date" placeholder="">
                </div>

                <div class="form-group">
<!--                    <label for="select"> Select gender...</label>-->
                    <select name="selectfield" id="select" class="form-control" >
                        <option value=""> Select gender...</option>
                        <option value="Male" > Male</option>
                        <option value="Female"> Female</option>

                    </select>
                </div>


                <div class="form-group">
                    <label for=""> Account type </label>

                </div>
                <div  class="form-group">
                    <label class="lbl" for="optionRadios1">
                        <input type="radio" name="optionsRadio" id="optionRadios" value="Free"  checkd=""> Free</label>
<!--                </div>-->
<!--                <div  class="form-group">-->
<!--                    <label class="lbl" for="optionRadios2">-->
                        <input type="radio" name="optionsRadio" id="optionRadios" value="Vip 1" checkd=""> Vip1</label>
<!--                </div>-->
<!--                <div  class="form-group">-->
                    <label class="lbl" for="optionRadios3">
                        <input type="radio" name="optionsRadio" id="optionRadios" value="Vip 2" checkd=""> Vip2</label>
<!--                </div>-->
<!--                <div  class="form-group">-->
                    <label class="lbl" for="optionRadios4">
                        <input type="radio" name="optionsRadio" id="optionRadios" value="Vip 3" checkd="" > Vip3</label>
                </div>

                <div class="form-group">
                    <label for="num"> Mobile phone </label>
                    <input id="num" name="num" class="form-control"  placeholder="phone number">
                </div>



                <button type="submit" name="btn-submit" class="btn btn-primary" style="background-color: aqua;color: white">Sigin me up </button>
            </form>


        </div>
    </div>
</div>

<p style="text-align: center"> <?php echo 'Chào bạn, bạn đã đăng kí thành công, thông tin tài khoản vừa đăng kí';   ?> </p>
<div class="cl"> <p><?php echo 'Name:'.$_POST['name']; ?> </p> </div>
<div class="cl"> <p> <?php echo 'Email:'.$_POST['email'];   ?> </p></div>
<div class="cl"><p> <?php  echo 'Usename:'.$_POST['hoten'];  ?> </p></div>
<div class="cl"><p> <?php  echo 'Password:'.$_POST['pass'];       ?> </p></div>
<div class="cl"><p> <?php   echo 'Birthday:'.$_POST['date'];            ?> </p></div>
<div class="cl"><p> <?php   echo 'Gender:'.$_POST['selectfield'];            ?> </p></div>
<div class="cl"><p> <?php   echo 'Account type:'.$_POST['optionsRadio'];           ?> </p></div>
<div class="cl"><p> <?php    echo 'Moblie phone:'.$_POST['num'];        ?> </p></div>


</body>
</html>