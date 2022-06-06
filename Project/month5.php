<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("5year",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["5year-plan"]))
        {
        setcookie("5year-plan",0);
        }
        

        setcookie("5year-plan",$_COOKIE["5year-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://cb2.scene7.com/is/image/CB2/AureleMttBlk4inHsNmbr5SHF18/$web_pdp_main_carousel_sm$/190905023440/aurele-4-matte-black-house-number-5.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>

   <body>
      <h1>Gift your children local travel.New</h1>
      <?php 
    $productName = 'month5'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   </body>
</html>