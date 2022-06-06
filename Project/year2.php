<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("2year",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["2year-plan"]))
        {
        setcookie("2year-plan",0);
        }
        

        setcookie("2year-plan",$_COOKIE["2year-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://images.unsplash.com/photo-1621440318431-b720cd358375?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2934&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>

   <body>
      <h1>Save for 2 years and enjoy International Destinations for 20days.New.</h1>
      <?php 
    $productName = 'year2'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   </body>
</html>