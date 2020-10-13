<html>
<head>
    <title>
        Sign in
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        overflow-x: hidden;
    }
    .main-content{
        width: 50%;
        height: 40%;
        margin: 10px auto;
        border:2px solid;
        padding: 40px 50px;

    }
    .header{
        border:1px solid;
        margin-bottom: 5px;
    }
    .well{
        background-color: aliceblue;
    }
    #signin{
        width: 30%;
        border-radius: 30px;
    }
    .overlap-text{
        position: relative;
    }
    .overlap-text a{
        position: absolute;
        top: 8px;
        right: 10px;
        font-size: 14px;
        text-decoration: none;
        
    }
</style>
<body>
<div class="row">
    <dir class="col-sm-12">
        <div class="well">
            <center><h1 style="color: darkgray;">Voice</h1></center>
        </div>
    </dir>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="main-content">
            <div class="header">
                <h3 style="text-align: center;"><strong>Create An Account</strong></h3><hr>
            </div>
            <div class="l-part">
                <form action="" method="post">
                    <input type="email" name="email" placeholder="Email" required="required" class="form-control input-md"><br>
                    <div class="overlap-text">
                        <input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
                        <a style="text-decoration: none;" color:"#187FAB"; float:"right"; href="forgot_password.php">Forgot?</a>
                    </div>
                    <a style="text-decoration: none; float: right; color: aqua" href="signin.php">Don't Have an Account</a><br><br>
                    <center><button id="signin" class="btn btn-info btn-lg" name="login" >Login</button>php</center>
                    <?php
                    include ("login.php");
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
