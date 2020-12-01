<?php
 	session_start();


?>
<html>
    <head>
        <title> Home Page </title>
             <link rel="stylesheet" type="text/css" href="css/style.css"/>
             <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    </head>
    <body>
         <!-- Nav -->
        <nav class="navbar navbar-expand-lg "style="background-color: black;">
            <a class="navbar-brand" href="home2.php">Home</a>
            <a class="navbar-brand" href="edit.php">Profile</a>
            <a class="navbar-brand" href="Logout.php">Logout</a>
        </nav>
         <div class="container">
            <div class= "login-box">
                <div class="row">
                    <div class ="col-md-12 login-left">
                        <h1>welcome to our ChatBOT</h1>

                    <form style= "text-align: center" action="startchat.php" method="post"><button class="btn btn-primary"  >Start Chat</button></form>

                    </div>
                </div>
            </div>
         </div>
    </body>

</html>