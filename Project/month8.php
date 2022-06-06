<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("8year",time());
        #echo $_COOKIE["1year"];
        echo "<h1> Time ". time()."</h1>";
        if(!isset($_COOKIE["8year-plan"]))
        {
        setcookie("8year-plan",0);
        }
        

        setcookie("8year-plan",$_COOKIE["8year-plan"]+1);
        echo "<h1> Time ". time()."</h1>";
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background-color: antiquewhite;
}
      </style>
   </head>

   <body>
      <h1>Savings plan with added benifits and cashbacks.Hello friends.How are you doing.New</h1>
      
                         <p>
                         <button type="button"onclick ='location.href="latest.php"'>MoreInfo</button>
                         </p>
         
    <?php 
    $productName = 'month8'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   </body>
</html>