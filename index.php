<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #00FF7F;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-3">Selamat Datang!</h3>
                                        <h4 class="text-center font-weight-light my-3">Silahkan login untuk melanjutkan</h4>
                                    </div>
                                    <div class="card-body">
                                    <?php
                                        require('config.php');
                                        session_start();
                                        // When form submitted, check and create user session.
                                        if (isset($_POST['login'])) {
                                            $username = stripslashes($_REQUEST['username']);    // removes backslashes
                                            $username = mysqli_real_escape_string($con, $username);
                                            $password = stripslashes($_REQUEST['password']);
                                            $password = mysqli_real_escape_string($con, $password);
                                            $level = stripslashes($_REQUEST['level']);
                                            $level = mysqli_real_escape_string($con, $level);
                                            // Check user is exist in the database
                                            $query    = "SELECT * FROM `user` WHERE username='$username'
                                                         AND password='$password'";
                                            $result = mysqli_query($con, $query);
                                            $rows = mysqli_num_rows($result);
                                            if ($rows == 1) {
                                                $data = mysqli_fetch_assoc($result);
                                                if ($data['level'] == "Admin"){
                                                    $_SESSION['username'] = $username;
                                                    $_SESSION['level'] = "Admin";
                                                    // Redirect to user dashboard page
                                                    header("Location: admin.php");
                                                } else if($data['level'] == "Karyawan"){
                                                    $_SESSION['username'] = $username;
                                                    $_SESSION['level'] = "Karyawan";
                                                    // Redirect to user dashboard page
                                                    header("Location: karyawan.php");
                                                } else if($data['level'] == "Distributor"){
                                                    $_SESSION['username'] = $username;
                                                    $_SESSION['level'] = "Distributor";
                                                    // Redirect to user dashboard page
                                                    header("Location: distributor.php"); 
                                                } else {
                                                    echo "<div class='form'>
                                                      <h3>Silahkan isi level anda dengan benar!.</h3><br/>
                                                      <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                                                      </div>";
                                                }   
                                            } else {
                                                echo "<div class='form'>
                                                      <h3>Incorrect Username/password.</h3><br/>
                                                      <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                                                      </div>";
                                            }
                                        } else {
                                    ?>
                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="username" type="text" placeholder="example@email.com" required/>
                                                <label for="inputEmail">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password" required/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                        <?php 
                                    }
                                     ?>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>