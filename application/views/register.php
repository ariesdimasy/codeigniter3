<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="<?=base_url("assets/plugins/bootstrap-4.0.0/dist/css/bootstrap.css")?>">
		<script src="<?=base_url("assets/plugins/js/jquery.min.js")?>"></script>
		<script src="<?=base_url("assets/plugins/bootstrap-4.0.0/dist/js/bootstrap.min.js")?>"></script>
    
        <style>
            body{
                background-color:#8FBC8F;
            }
            .container{
                height:100%;
                width:100%;
            }
            .card{
                margin-right:auto;
                margin-left:auto;
            }
            .header-text{
                margin:100px 0 30px 0;
                color:white;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <div class="header-text">
                <h1 align="center">PT. Alam Semesta Jaya</h1>
            </div>

            <div class="card col-md-5">
                <div class="card-body">
                    <?php
                        if(isset($_SESSION["msg"]))
                        {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>
                <form class="form" action="" method="post">
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Register</button>                    
                </form>
                </div>
            </div>
        </div>
    </body>
</html>    
        