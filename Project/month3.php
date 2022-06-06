<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("3year",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["3year-plan"]))
        {
        setcookie("3year-plan",0);
        }
        

        setcookie("3year-plan",$_COOKIE["3year-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://images.unsplash.com/photo-1621440318357-3e3c94221a1c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2067&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>

   <body>
      <h1>Save for 3 years and enjoy International Destinations for 30Days.New</h1>
      <?php 
    $productName = 'month3'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   </body>
</html>