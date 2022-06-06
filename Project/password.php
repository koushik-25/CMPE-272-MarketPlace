<!DOCTYPE html>
<html>
<head>

</head>
    <?php
    extract($_POST);

        $authenticated= 0;
        if (!($file = fopen("password.txt", "r"))) {
            print "<title>Error</title></head>
            <body>Could not open password file
            </body></html>";
            die();
        }
      
        while (!feof($file) && !$authenticated) {
            $line = fgets($file, 255);
            $line = chop($line);
            $field = explode(",", $line, 2);
            if ($Loginname == $field[0]) {
                $authenticated = 1;
                if (checkpassword($password, $field) == true) {
                    validUser($Loginname);
                } else {
                    echo '<script>alert("Wrong password")</script>';
                }
            }
        }
        fclose($file);

        if (!$authenticated) {
            Denied();
        }


    function checkpassword($userpassword, $filedata)
    {
        if ($userpassword == $filedata[1]) {
            return true;
        } else {
            return false;
        }
    }

    function validUser($name)
    {
        echo "<script>
                    alert('Permission granted');
                </script>";
                $txt_file = fopen('details.txt', 'r');
                while ($line = fgets($txt_file)) {
                    echo (" " . $line) . "<br>";
                }
                fclose($txt_file);
                
    }

    function wrongpassword()
    {
        echo '<script>alert("Check Your password")</script>';
    }

    function Denied()
    {
        echo '<script>alert("Access Denied")</script>';
    }
    ?>
</html>
