<html>
<head>
    <style >
        body{
            overflow-x: hidden;

        }
        #centered1{
            position: absolute;
            font-size: 10vw;
            top: 30%;
            left: 30%;
            transform: translate(-50%,-50%);
        }

        #signup{
            width: 50%;
            border-radius: 30px;
        }
        #Login{
            width: 50%;
            border-radius: 30px;
            background-color: aqua;
            border 1px solid;
        }
        .well{
            background-color: aliceblue;
        }


    </style>
<title>
    Voice Login and Signup
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
<div class="row">
    <dir class="col-sm-12">
        <div class="well">
            <center><h1 style="color: darkgray;">Voice</h1></center>
        </div>
    </dir>
</div>
<dir class="row">
    <div class="col-sm-6" style="left: 0.5%;">
        <img src="voice.jpg" class="img-rounded" title="Voice" width="650px" height="565px">
    </div>
    <div id="centered1" class="centerde"><h3 style="color: darkgray;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Raising Your Voice In Front Of The Word</strong></h3></div>
     <div class="row-sm-6" style="left: 8px">
         <img src="logo.png" class="img-rounded" title="Voice" width="80px" height="80px">
         <h2><strong>Reach TO Millions By Your Voice </strong></h2>
         <h4><strong>Join Voice Today</strong></h4>
         <form method="post" action="">
              <button id="signup" class="btn btn-info btn-ig" name="signup" onclick="Signup.php">signup</button><br> <br></a>
             
         </form>
     </div>
</dir>

</body>
</head>
</html>
