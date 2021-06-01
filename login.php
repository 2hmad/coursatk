<!DOCTYPE html>
<html>

<head>
    <title>Login | Coursatk - Growth Platform for Arab</title>
    <?php include('links.php') ?>
    <style>
        .form-login {
            width: 350px;
            margin-left: auto;
            margin-right: auto;
        }

        .email,
        .password {
            display: block;
            width: 100%;
            margin-bottom: 2%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
            outline: none;
            font-family: 'Cairo';
        }

        input[name="login"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #0f7c90;
            background: #0f7c90;
            color: white;
            margin-top: 5%;
        }

        input[name="login"]:hover {
            border: 1px solid #0c6a7b;
            background: #0c6a7b;
        }

        button[name="login-facebook"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #1a538a;
            background: #1a538a;
            color: white;
            margin-top: 5%;
            box-shadow: 0 2px 2px 0 rgb(41 48 59 / 24%), 0 0 2px 0 rgb(41 48 59 / 12%);
            position: relative;
            outline: none;
        }

        button[name="login-facebook"]:hover {
            background: #174877;
            border: 1px solid #174877;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        button[name="login-google"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #dedfe0;
            background: #ffffff;
            color: black;
            margin-top: 5%;
            box-shadow: 0 2px 2px 0 rgb(41 48 59 / 24%), 0 0 2px 0 rgb(41 48 59 / 12%);
            position: relative;
            outline: none;
        }

        button[name="login-google"]:hover {
            background: #dedfe0;
            border: 1px solid #dedfe0;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .icon {
            position: absolute;
            left: 15px;
            top: 10px;
            font-size: 25px;
        }

        h6 {
            width: 100%;
            text-align: center;
            line-height: 0.1em;
            margin: 10px 0 20px;
            margin-top: 10%;
            color: #9e9e9e;
            border-bottom: 1px solid #9e9e9e;
            font-size: 15px;
        }

        h6 span {
            background: #fff;
            padding: 0 10px;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php include('navbar.php') ?>

    <div class="container" style="margin-top: 5%;margin-bottom:10%;display: block;">
        <form method="POST" class="form-login">
            <span style="font-size: 13px;margin-bottom:5%;display:block">Log In to Your Coursatk Account</span>
            <input type="email" class="email" name="email" placeholder="Your Email">
            <input type="password" class="password" name="password" placeholder="Your Password">
            <a href="#" style="color: #232388 !important;font-size: 13px;">Forgot Password</a>
            <input type="submit" name="login" value="Log In">

            <h6><span>OR</span></h6>

            <button type="submit" name="login-facebook"><i class="fab fa-facebook-f icon"></i>Login With Facebook</button>
            <button type="submit" name="login-google"><i class="fab fa-google icon"></i>Login With Google</button>
            <span style="font-size:15px;text-align:center;display:block;margin-top:5%">Don't have an account? <a href="register.php" style="color: #232388 !important">Sign up</a></span>
        </form>
    </div>

    <?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>

</html>