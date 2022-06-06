<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("6Months",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["6Months-plan"]))
        {
        setcookie("6Months-plan",0);
        }
        

        setcookie("6Months-plan",$_COOKIE["6Months-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://images.unsplash.com/photo-1640684518379-b1cae1002131?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   <button class="home">
    <a href="index.php">Home</a>
  </button>

   </head>

   <body>
      <h1>Save for 6 Months and Fly with-in country.New</h1>
       <?php
         //session_start();
         //$_SESSION['month6name']="please god";
         //require_once('latest.php');
         //reatingdemo("kp");
         
       
      ?>
       <?php 
    $productName = 'month6'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
       
      
      
   </body>
</html>