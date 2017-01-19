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
        button{
            width: 300px;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="uploadfile.php" method="post" enctype="multipart/form-data" role="form">
             <div>

                 <input type="file" class="form-control" name="img" required>
             </div>
                <button class="btn btn-primary btn-block" type="submit"> upload file</button>

            </form>


        </div>
    </div>
</div>
<div class="col-md-8 col-md-offset-2">
    <?php
    echo "<pre class='text-left'>";
    var_dump($_FILES);
    echo "</pre>";
    ?>
</div>



</body>
</html>