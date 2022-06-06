<?php
function passwordcheck()
{
$password = $_GET['password'];
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
}else{
    echo 'Strong password.';
}
}
?>
<html>
<style>
    .align {
        display: grid;
        place-items: center;
    }

    .grid {
        inline-size: 90%;
        max-inline-size: 20rem;
    }

    .hidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }


    .icons {
        display: none;
    }

    .icon {
        block-size: 1em;
        display: inline-block;
        inline-size: 1em;
        vertical-align: middle;
    }

    html {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-block-size: 100vh;
    }

    input {
        background-image: none;
        border: 0;
        color: inherit;
        font: inherit;
        margin: 0;
        outline: 0;
        padding: 0;
    }

    input[type="submit"] {
        cursor: pointer;
    }

    .form {
        display: grid;
    }

    .form input[type="password"],
    .form input[type="text"],
    .form input[type="submit"] {
        inline-size: 100%;
    }

    .formfield {
        display: flex;
        margin-top: 10px;
    }

    .forminput {
        border-style: solid;
        border-color: black;
        border-style: solid;
        border-width: 1px;
        flex: 1;
    }

    label{
        border-style: solid;
        border-color: black;
        border-style: solid;
        border-width: 1px;
    }

    .login {
        color: black;
    }

    .login label,
    .login input[type="text"],
    .login input[type="password"],
    .login input[type="submit"] {
        padding: 1rem;
    }

    .login label {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
        padding-inline: 1.25rem;
    }

    .login input[type="password"],
    .login input[type="text"] {

        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
    }

    .login input[type="password"]:focus,
    .login input[type="password"]:hover,
    .login input[type="text"]:focus,
    .login input[type="text"]:hover {
        background-color:  lightblue
    }

    .login input[type="submit"] {

        font-weight: 700;
        text-transform: uppercase;
    }

    .login input[type="submit"]:focus,
    .login input[type="submit"]:hover {
        background-color: pink
    }

    p {
        margin-block: 1.5rem;
    }

</style>

<head>
    <link rel="stylesheet" href=
"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  
    <script src=
        "http://code.jquery.com/jquery-1.11.1.min.js">
    </script>
  
    <script src=
"http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js">
    </script>
</head>

<body>

    <body class="align">
    <div data-role="footer">
      <h1>Header</h1>
      </div>
        <div class="grid">
                        

            <form action="password.php" method="POST" class="form login">
                <div class="formfield">
                    <label for="username"><svg class="icon">
                            <use xlink:href="#icon-user"></use>
                        </svg><span class="hidden">Username</span></label>
                    <input id="username" placeholder="Username" type="text" name="Loginname" class="forminput" required>
                </div>

                <div class="formfield">
                    <label for="loginPassword"><svg class="icon">
                            <use xlink:href="#icon-lock"></use>
                        </svg><span class="hidden">Password</span></label>
                    <input id="loginPassword" placeholder="Password"  type="password" name="password" class="forminput" required>
                </div>

                <div class="formfield">
                <button type="button" onclick="removeday()">LogIn</button>
                    
                </div>
            </form>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
            <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                <path
                    d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
            </symbol>
            <symbol id="icon-lock" viewBox="0 0 1792 1792">
                <path
                    d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
            </symbol>
            <symbol id="icon-user" viewBox="0 0 1792 1792">
                <path
                    d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
            </symbol>
        </svg>

      <div data-role="footer">
      <h1>Footer</h1>
      </div>
   
    </body>
    
</body>

</html>
