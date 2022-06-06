<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("1year",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["1year-plan"]))
        {
        setcookie("1year-plan",0);
        }
        

        setcookie("1year-plan",$_COOKIE["1year-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://media.istockphoto.com/photos/number-one-sitting-over-pink-and-blue-background-picture-id1345521494?b=1&k=20&m=1345521494&s=170667a&w=0&h=ls6IDYSsGr0uQpYeEpttgVC9dsXNNFz62e1z3pAzR-A=") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>
    <h1>Save for an year and enjoy International Destinations for 10days.New</h1>
    <?php 
    $productName = 'month1'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   
   </body>
</html>