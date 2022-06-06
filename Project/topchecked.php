<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?>
<?php
       echo "<h1> Time ". time()."</h1>";
       $timing =array();
       if(isset($_COOKIE["4Month-plan"]))
       {
        $timing+=["4Month-plan"=>$_COOKIE["4Month-plan"]];
       }
       if(isset($_COOKIE["6Months-plan"]))
       {
        $timing+=["6Months-plan"=>$_COOKIE["6Months-plan"]];
       }

       if(isset($_COOKIE["1year-plan"]))
       {
        $timing+=["1year-plan"=>$_COOKIE["1year-plan"]];
       }
       if(isset($_COOKIE["2year-plan"]))
       {
        $timing+=["2year-plan"=>$_COOKIE["2year-plan"]];
       }
       if(isset($_COOKIE["3year-plan"]))
       {
        $timing+=["3year-plan"=>$_COOKIE["3year-plan"]];
       }
       if(isset($_COOKIE["4year-plan"]))
       {
        $timing+=["4year-plan"=>$_COOKIE["4year-plan"]];
       }
       if(isset($_COOKIE["5year-plan"]))
       {
        $timing+=["5year-plan"=>$_COOKIE["5year-plan"]];
       }
       if(isset($_COOKIE["6year-plan"]))
       {
        $timing+=["6year-plan"=>$_COOKIE["6year-plan"]];
       }
       if(isset($_COOKIE["7year-plan"]))
       {
        $timing+=["7year-plan"=>$_COOKIE["7year-plan"]];
       }
       if(isset($_COOKIE["8year-plan"]))
       {
        $timing+=["8year-plan"=>$_COOKIE["8year-plan"]];
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
    background-color: aliceblue;
}
      </style>
   </head>
   <body>

    <h1>These Are The Most Recently 5 Visited Pages!Have a look</h1>
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