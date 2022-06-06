<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
        setcookie("7year",time());
        #echo $_COOKIE["1year"];
        echo "<h1> Time ". time()."</h1>";
        if(!isset($_COOKIE["7year-plan"]))
        {
        setcookie("7year-plan",0);
        }
        

        setcookie("7year-plan",$_COOKIE["7year-plan"]+1);
        echo "<h1> Time ". time()."</h1>";
?>
<?php
       echo "<h1> Time ". time()."</h1>";
       $timing =array();
       if(isset($_COOKIE["4Month"]))
       {
        $timing+=["4Month"=>$_COOKIE["4Month"]];
       }
       
       if(isset($_COOKIE["6Months"]))
       {
        $timing+=["6Months"=>$_COOKIE["6Months"]];
       }

       if(isset($_COOKIE["1year"]))
       {
        $timing+=["1year"=>$_COOKIE["1year"]];
       }
       if(isset($_COOKIE["2year"]))
       {
        $timing+=["2year"=>$_COOKIE["2year"]];
       }
       if(isset($_COOKIE["3year"]))
       {
        $timing+=["3year"=>$_COOKIE["3year"]];
       }
       if(isset($_COOKIE["4year"]))
       {
        $timing+=["4year"=>$_COOKIE["4year"]];
       }
       if(isset($_COOKIE["5year"]))
       {
        $timing+=["5year"=>$_COOKIE["5year"]];
       }
       if(isset($_COOKIE["6year"]))
       {
        $timing+=["6year"=>$_COOKIE["6year"]];
       }
       if(isset($_COOKIE["7year"]))
       {
        $timing+=["7year"=>$_COOKIE["7year"]];
       }
       if(isset($_COOKIE["8year"]))
       {
        $timing+=["8year"=>$_COOKIE["8year"]];
       }

       arsort($timing);
       
       $newtiming = array_slice($timing, 0, 5, true);
       echo "<h1> Time ". time()."</h1>";
      


?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://images.unsplash.com/photo-1570521095994-5856fd6c76c9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>

   <body>
      <h1>Low savings plan for 7 years for international destination.Hello friends.New Pages</h1>
      <?php
   foreach($newtiming as $x=>$x_value)
       {
       echo '<div>
       <p>'.
        $x
       .'</p>
       </div>';
       }
       
       ?>
             <?php 
    $productName = 'month7'; #keep it same as url for ex: http://localhost:8009/cosmocast/Services/product1.php use product name as product1
    include('./Components/ratings.php');
    ?>
   </body>
</html>