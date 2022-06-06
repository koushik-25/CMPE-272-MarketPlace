<!DOCTYPE html>
<html>
        <?php
      $user ='koushikp_WPLVQ';
      $pass ='Random@1';
      $db='koushikp_mywebdata';
      $db = new mysqli('localhost:3306',$user,$pass,$db) or die("unable to connect");
      ?> 
       <head>
          <title>Sample Database Query</title>
      </head>
   
      <body style = "background-color: #F0E68C">
         <h2 style = "font-family: arial">
            Querying a MySQL database.
         </h2>
   
        <form method = "post" action = "addition.php">
        <label for="fname">FirstName:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">LastName:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="fname">Email:</label>
        <input type="text" id="Email" name="Email"><br><br>
        <label for="lname">HomeAddress:</label>
        <input type="text" id="HomeAddress" name="HomeAddress"><br><br>
        <label for="fname">CellPhone:</label>
        <input type="text" id="CellPhone" name="CellPhone"><br><br>
        <label for="lname">HomePhone:</label>
        <input type="text" id="HomePhone" name="HomePhone"><br><br>
        <input type = "submit" value = "Send Query" 
               style = "background-color: blue; 
               color: yellow; font-weight: bold" />
         </form>
      </body>
   </html>


