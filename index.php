<style>
    * {
        box-sizing: border-box
    }

    /* Full-width input fields */
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

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }


    /* Float cancel and signup buttons and add an equal width */
    .signin,
    .signupbtn {
        margin: auto;
        font-size: 15px;
        text-align: center;
        width: auto;
        border: none;
        padding: 15px 32px;
        text-decoration: none;
        display: inline-block;
        border-radius: 5px;
    }

    .signin {
        background-color: #f44336;
    }

    .heading {
        color: #04AA6D;
    }

    /* Add padding to container elements */
    .container {
        margin: 20px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {

        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>
<form action="action_signup.php"  method="post" style="border:1px solid #ccc">
    <div class="container">
        <center>
            <h1 class="heading">Sign Up</h1>
        </center>
        <hr>

        <label for="email"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <div class="clearfix">
            <button type="submit" name="signup_button" class="signupbtn">Sign Up</button>
            <a href="login.php"><button type="button" class="signin">Sign in</button></a>
        </div>
    </div>
</form>