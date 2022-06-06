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
            
            $query = "SELECT " . $select . " FROM Details";
            $database = mysqli_connect('localhost:3306',$user,$pass,$db);
            
            if ( !( $database)){
               echo "Could not connect to database";
               die(  );
            }                           
               
        
            if ( !mysqli_select_db($database, 'koushikp_mywebdata') )
            {   
               echo "Could not open Products database";
            die( "Could not open Products database" );
            }
            if ( !( $result = mysqli_query( $database, $query) ) ) {
               echo "Could not open Products database";
               print( "Could not execute query! <br />" );
               die( mysqli_error($database) );
            }
         ?>
   
         <h3 style = "color: blue"> 
         Search Results</h3>
   
         <table border = "1" cellpadding = "3" cellspacing = "2"
            style = "background-color: #ADD8E6">
   
            <?php
   
               // fetch each record in result set
               for ( $counter = 0; 
                  $row = mysqli_fetch_row( $result );
                  $counter++ ){                // build table to display results
                  print( "<tr>" );
   
                  foreach ( $row as $key => $value ) 
                     print( "<td>$value</td>" );
   
                  print( "</tr>" );
               }
                  mysqli_close( $database );
            ?>
   
         </table>
   
         <br />Your search yielded <strong>
         <?php print( "$counter" ) ?> results.<br /><br /></strong>
   
     </body>
   </html>
   
