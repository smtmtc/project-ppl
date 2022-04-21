<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #00FF7F;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Silahkan masukkan data diri anda!</h3></div>
                                    <div class="card-body">
                                    <?php
                                    require('config.php');
                                    // When form submitted, insert values into the database.
                                    if (isset($_REQUEST['username'])) {
                                        // removes backslashes
                                        $nama_lengkap =stripslashes($_REQUEST['nama_lengkap']);
                                        //escapes special characters in a string
                                        $nama_lengkap = mysqli_real_escape_string($con, $nama_lengkap);
                                        $username = stripslashes($_REQUEST['username']);
                                        $username = mysqli_real_escape_string($con, $username);
                                        $email    = stripslashes($_REQUEST['email']);
                                        $email    = mysqli_real_escape_string($con, $email);
                                        $password = stripslashes($_REQUEST['password']);
                                        $password = mysqli_real_escape_string($con, $password);
                                        $level = stripslashes($_REQUEST['level']);
                                        $level = mysqli_real_escape_string($con, $level);
                                        $query    = "INSERT into `user` (nama_lengkap, username, email, password, level)
                                                    VALUES ('$nama_lengkap', '$username', '$email', '$password', '$level')";
                                        $result   = mysqli_query($con, $query);
                                        if ($result) {
                                            echo "<div class='form'>
                                                <h3>You are registered successfully.</h3><br/>
                                                <p class='link'>Click here to <a href='login.php'>Login</a></p>
                                                </div>";
                                            } 
                                            else {
                                            echo "<div class='form'>
                                                <h3>Required fields are missing.</h3><br/>
                                                <p class='link'>Click here to <a href='register.php'>registration</a> again.</p>
                                                </div>";
                                            }
                                        } else {
                                        ?>

                                        <form method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputName" name="nama_lengkap" type="text" placeholder="Enter your name" />
                                                <label for="inputName">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputUsername" name="username" type="text" placeholder="Create Username" />
                                                <label for="inputUsername">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="cpassword" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelect" name="level" aria-label="Floating label select example">
                                                    <option selected>Pilih Level</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Karyawan</option>
                                                    <option value="3">Distributor</option>
                                                </select>
                                                <label for="floatingLabel">Register as</label>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" name="register" class="btn btn-primary btn-block">Create Account</button>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
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