<style>
    /* Bordered form */
    form {
        border: 3px solid #f1f1f1;
    }

    /* Full-width inputs */
    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    /* Add a hover effect for buttons */
    button:hover {
        opacity: 0.8;
    }

    /* Extra style for the cancel button (red) */
    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
        border-radius: 5px;
    }

    /* Center the avatar image inside this container */
    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    /* Avatar image */
    img.avatar {
        width: 40%;
        border-radius: 50%;
    }

    /* Add padding to containers */
    .container {
        padding: 16px;
    }

    /* The "Forgot password" text */
    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }

        .cancelbtn {
            width: 100%;
        }
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    h5 {
        color: #f44336;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<?php session_start(); ?>
<form action="action_login.php" method="POST">
    <div class="container">
        <center>
            <h1 class="heading">Sign In</h1>
        </center>
        <?php if (isset($_SESSION['status'])) { ?>
            <div class="card text-center">
                <div class="card-body">
                    <?php
                    echo '<h5 class="card-title">' . $_SESSION['status'] . '</h5>';
                    unset($_SESSION['status']);
                    ?>
                </div>

            </div>
        <?php } ?>
        <hr>
        <label for="uname"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" name="signin_button">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="index.php"><button type="button" class="cancelbtn">Sign Up</button></a>
        <span class="psw">Forgot <a href="forget.php">password?</a></span>
    </div>
</form>