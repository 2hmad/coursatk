<!DOCTYPE html>
<html>

<head>
    <title>Create an Account | Coursatk - Growth Platform for Arab</title>
    <?php include('links.php') ?>
    <style>
        .create-account {
            width: 350px;
            margin-left: auto;
            margin-right: auto;
        }

        .email,
        .password,
        .name {
            display: block;
            width: 100%;
            margin-bottom: 2%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #CCC;
            outline: none;
            font-family: 'Cairo';
        }

        input[name="register"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #0f7c90;
            background: #0f7c90;
            color: white;
            margin-top: 5%;
        }

        input[name="register"]:hover {
            border: 1px solid #0c6a7b;
            background: #0c6a7b;
        }

        button[name="register-facebook"] {
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

        button[name="register-facebook"]:hover {
            background: #174877;
            border: 1px solid #174877;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        button[name="register-google"] {
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

        button[name="register-google"]:hover {
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
        <form method="POST" class="create-account">
            <span style="font-size: 13px;margin-bottom:5%;display:block">Create your Coursatk Account</span>
            <input type="text" class="name" name="name" placeholder="Your Name">
            <input type="email" class="email" name="email" placeholder="Your Email">
            <input type="password" class="password" name="password" placeholder="Your Password">
            <input type="submit" name="register" value="Create your Account">
            <span style="color: #4e4e4e;font-family: 'Cairo';font-size: 13px;">By signing up, you agree to our
                <a href="#" style="color: #4e4e4e !important;text-decoration:underline !important">Terms of Use</a> and
                <a href="#" style="color: #4e4e4e !important;text-decoration:underline !important">Privacy Policy</a>.
            </span>

            <h6><span>OR</span></h6>

            <button type="submit" name="register-facebook"><i class="fab fa-facebook-f icon"></i>Continue With Facebook</button>
            <button type="submit" name="register-google"><i class="fab fa-google icon"></i>Continue With Google</button>
            <span style="font-size:15px;text-align:center;display:block;margin-top:5%">Already have an account? <a href="login.php" style="color: #232388 !important">Log In</a></span>
        </form>
    </div>

    <?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>

</html>