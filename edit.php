
<html lang="en-US">
  <head>
  <title></title>
  <link rel="stylesheet" href="libs/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  </head>
  <?php
      include 'connection.php';
      session_start();
      $name=$_SESSION['user'];
      $query=mysqli_query($con,"SELECT * FROM usertable where username='$name'")or die(mysqli_error());
      $row=mysqli_fetch_array($query);
  ?>

    <nav class="navbar navbar-expand-lg "style="background-color: black;">
        <a class="navbar-brand" href="home2.php">Home</a>
        <a class="navbar-brand" href="edit.php">Profile</a>
        <a class="navbar-brand" href="Logout.php">Logout</a>
    </nav>
  <div class="container">
                <div class= "login-box">
                    <div class="row">
                        <div class ="col-md-6 login-left">
                            <h2>Profile</h2>
                            <form method="post" action="#" >
                              <div class="form-group">
                                <label>Fullname</label>
                                <input type="text" class="form-control" name="full"  placeholder="Enter your Fullname" value="<?php echo $row['full']; ?>" required />
                              </div>
                              <div class="form-group">
                                <label>email</label>
                                <input type="email" class="form-control" name="email"  placeholder="Enter your Email" required value="<?php echo $row['email']; ?>" />
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your Password" value="<?php echo $row['password']; ?>">
                              </div>
                              <div class="form-group">
                              <center>
                              <input type="submit" name="submit" class="btn btn-primary" ><br><br>
                                 <a href="home2.php">back</a>
                              </div>
                            </center>
                            </form>
                        </div>
                    </div>
                </div>
      </div>
      </html>
      <?php
      if(isset($_POST['submit'])){
        $fullname = $_POST['full'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      $query = "UPDATE usertable SET full = '$fullname',
                      email = '$email', password = '$password'
                      WHERE username = '$name'";
                    $result = mysqli_query($con, $query) or die(mysqli_error($con));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "home2.php";
        </script>
        <?php
             }
?>
