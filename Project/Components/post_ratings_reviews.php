<?php

    extract($_POST);
    $User = 'koushikp_WPLVQ';
    $Password = 'Random@1';
    $DBName = 'koushikp_mywebdata';
    $Host = 'localhost:3306';
    echo $Host;
    $link = mysqli_connect( $Host, $User, $Password, $DBName);

    // Check connection
    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $user_review_rating_data =
        "'" .
        $productName .
        "', '" .
        $product_company .
        "', '" .
        $ratings .
        "', '" .
        $user_id .
        "', '" .
        $remark .
        "'" ;

    
    echo $ratings;
    $sql =
        'INSERT INTO tbl_users_ratings (product_name, product_company, ratings, user_id,remark) 
    VALUES (' .
        $user_review_rating_data .
        ")";
    
    

    if (mysqli_query($link, $sql)) {
        echo "Records inserted successfully.";
        echo "<script>
                    window.location.href='/".$productName.".php';
                </script>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
    ?>

