<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
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
  background-color: aqua;
}
      </style>
   </head>
   <body>
    <h1>These Are The Most Recently 5 Visited Pages!</h1>
   <p>
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
   </p>
   </body>
</html>