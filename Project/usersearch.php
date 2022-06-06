<!DOCTYPE html>
<html>
        <?php
      $user ='koushikp_WPLVQ';
      $pass ='Random@1';
      $db='koushikp_mywebdata';
      $db = new mysqli('localhost:3306',$user,$pass,$db) or die("unable to connect");
      echo"Greatwork";
      ?> 
       <head>
          <title>Sample Database Query</title>
      </head>
   
      <body style = "background-color: #F0E68C">
         <h2 style = "font-family: arial">
            Querying a MySQL database.
         </h2>
   
         <form method = "post" action = "search.php">
            <p>Select a field to display:
   
               <!-- add a select box containing options --> 
               <!-- for SELECT query                    -->
                             <select name = "select">                   
                  <option selected = "selected">*</option>
                  <option>FirstName</option>                     
                  <option>LastName</option>                  
                  <option>Email</option>               
                  <option>CellPhone</option>                   
               </select>                                  
            </p>
   
            <input type = "submit" value = "Send Query" 
               style = "background-color: blue; 
               color: yellow; font-weight: bold" />
         </form>
      </body>
   </html>


