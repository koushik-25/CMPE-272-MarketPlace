<!DOCTYPE html>
<html lang="en">
   <head>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> 
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
   </head>
   <body>
   

      <div class="container sectionSeperator mt-5">
         <h1>Top products in Page</h1>
         <div class="container sectionSeperator mt-3">
        <?php
            $limit= 50;
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
                echo "<table id=\"table_id\" class=\"contactsTbl mt-5\">";
                echo "<thead>";
                echo "<tr>";
                echo '<th style="width:50%">Product name</th>';
                echo "<th>Company</th>";
                echo "<th>Ratings</th>";
                echo "<th>Link</th>";
                echo "</tr>";
                echo "<tbody>";
            
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
                    echo '<a style="color:black" href="https://koushikp25.com/' . $row["product_name"] . '.php" >Click Me</a>';
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }
            mysqli_close($link);
            ?>
      </div>
      </div>
 

   </body>
   <script>
      $(document).ready( function () {
         $('#table_id').DataTable();
      } );
   </script>
</html>