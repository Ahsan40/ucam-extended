<!DOCTYPE html>

<html lang="en">
<?php
    require_once './header.php';
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $student_id = $_POST['student_id'];
    $password = $_POST['passwords'];
    if (strcmp($_POST['operation'], 'signin') == 0) {
        if (!empty($student_id) && !empty($password)) {
            //here we read from database and verify the username and password
            $query = "SELECT * FROM users WHERE student_id = '$student_id' AND password = '$password'";
            $result = mysqli_query($conn, $query);

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $_SESSION['student_id'] = $student_id;
                    header("Location: " . PAGES['home']);
                    die;
                }
            }

            echo "wrong username or password!";
        } else {
            echo "Email or password cannot be empty!";
        }
    } else {
        $student_id = $_POST['student_id2'];
        $password = $_POST['passwords2'];
        $c_password = $_POST['confirm_passwords'];
//        $duplicate = mysqli_num_rows($conn->query("SELECT student_id FROM users WHERE student_id ='$student_id'")) > 0;

        if (empty($student_id) && !empty($password)) {
            $query = "INSERT INTO users(student_id, password) VALUES('$student_id','$password')";
            $result = mysqli_query($conn, $query);
            header("Location: " . PAGES['login']);
            die();
        } else {
            echo "Signup Failed!";
        }
    }
}
?>

<title>Sign In</title>
</head>

    <body>
<!--        --><?php //require_once INCLUDES['nav-main-template']; ?>
<!--        --><?php //require_once INCLUDES['nav-non-logged-template']; ?>

        <div class="wrapper">
            <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
            </div>
            <h1 style="text-align: center;">UCAM Extended</h1>
            <img class="center" src="<?php echo IMG['logo']; ?>" alt="">
            <div class="title-text">
                <div class="title login">Login Form</div>
                <div class="title signup">Registration Form</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Registration</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action="#" method="post" class="login">
                        <div class="field">
                            <input type="text" name="student_id" placeholder="Student ID" required>
                        </div>
                        <div class="field">
                            <input type="password" name="passwords" placeholder="Password" required>
                            <input type="hidden" name="operation" value="signin">
                        </div>
                        <div class="pass-link"><a href="#">Forgot password?</a></div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Login">
                        </div>
                        <div class="signup-link">Not have an account? <a href="">Register now</a></div>
                    </form>
                    <form action="#" method="post" class="signup">
                        <div class="field">
                            <input type="text" name="student_id2" placeholder="Student ID" required>
                        </div>
                        <div class="field">
                            <input type="password" name="passwords2" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <input type="password" name="confirm_passwords" placeholder="Confirm password" required>
                            <input type="hidden" name="operation" value="signup">
                        </div>
                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginBtn = document.querySelector("label.login");
            const signupBtn = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupBtn.onclick = (()=>{
                loginForm.style.marginLeft = "-50%";
                loginText.style.marginLeft = "-50%";
            });
            loginBtn.onclick = (()=>{
                loginForm.style.marginLeft = "0%";
                loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
                signupBtn.click();
                return false;
            });
        </script>

    </body>

</html>