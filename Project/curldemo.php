<!DOCTYPE html>
<html>
    <body>
    <?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL,"https://10samarth.com/cosmocast/contacts.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    
?>
<div>
    <?php
    print $result;
    ?>
</div>
    </body>
    </html>

