<!DOCTYPE html>
<html lang="en">
   <body>
        <?php
            $limit= 5;
            if(isset($_POST["limit"])){
                $limit=$_POST["limit"];
            }
        ?>

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
            
            
            $sql = "SELECT distinct product_name,product_company,ratings  FROM tbl_users_ratings order by ratings desc limit {$limit}";
            
            $result = mysqli_query($link, $sql);
            if (!$result) {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
            
            $length = mysqli_num_rows($result);
            
            if ($length == 0) {
                echo "No results found";
            } else {
            
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["product_name"] . " ";
                    echo "</td>";
            
                    echo "<td>";
                    echo $row["product_company"];
                    echo "</td>";

                    echo "<td>";
                    echo $row["ratings"] . " stars";
                    echo "</td>";

                    echo "<td>";
                    echo '<a style="color:white" href="https://koushikp25.com/' . $row["product_name"] . '.php" >Click Me</a>';
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            mysqli_close($link);
            ?>

   </body>
</html>