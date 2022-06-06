<!DOCTYPE html>
   
   <html>
      <head>
         <title>Search Results</title>
      </head>
   
      <body style = "font-family: arial, sans-serif" 
         style = "background-color: #F0E68C">
         <?php
            extract( $_POST );
            $user ='koushikp_WPLVQ';
            $pass ='Random@1';
            $db='koushikp_mywebdata';
            $query = "INSERT INTO Details VALUES ( '" . $fname . "', '" . $lname . "','" . $Email . "','" . $HomeAddress . "','" . $CellPhone . "','" . $HomePhone . "');";
            $database = mysqli_connect('localhost:3306',$user,$pass,$db);

            if ( !( $database))                           
               die( "Could not connect to database" );
        
            if ( !mysqli_select_db($database, 'koushikp_mywebdata') )
               die( "Could not open Products database" );

            if ( !( $result = mysqli_query( $database, $query)) ) {
               print( "Could not execute query! <br />" );
               die( mysqli_error($database) );
            }
                echo "Inserted";
            mysqli_close( $database );
         ?>
   
         
   
   
     </body>
   </html>
   
