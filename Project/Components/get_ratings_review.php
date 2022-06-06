<head>

    <title>Users</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div class="container">
 <?php
$User = 'koushikp_WPLVQ';
$Password = 'Random@1';
$DBName = 'koushikp_mywebdata';
$Host = 'localhost:3306';

 $link = mysqli_connect( $Host, $User, $Password, $DBName);

 // Check connection
 if ($link === false) {
     die("ERROR: Could not connect. " . mysqli_connect_error());
 }

 $searchData = 'product_name' . " = '" . $productName . "';";

 $sql = "SELECT ratings,remark  FROM tbl_users_ratings WHERE " . $searchData;
 
 $result = mysqli_query($link, $sql);
 if (!$result) {
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
 }

 $length = mysqli_num_rows($result);

 if ($length == 0) {
     echo "No results found";
 } else {
     echo "<table class=\"contactsTbl\">";

     echo '<th style="width:60%">Review</th>';
     echo "<th>Ratings</th>";


     while ($row = mysqli_fetch_array($result)) {
         echo "<tr>";
         echo "<td>";
         echo $row["remark"] . " ";
         echo "</td>";

         echo "<td>";
         echo $row["ratings"] . " stars";
         echo "</td>";

         echo "<td>";
         echo $row["name"] . " ";
         echo "</td>";
         echo "</tr>";
     }
     echo "</table>";
 }
 mysqli_close($link);
 ?>
    </div>
</html>