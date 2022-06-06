<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: ".gmdate("D, d M Y H:i:s",time()+(-1*60))." GMT");
?> 
<?php
        setcookie("4Month",time());
        #echo $_COOKIE["1year"];
        if(!isset($_COOKIE["4Month-plan"]))
        {
        setcookie("4Month-plan",0);
        }
        

        setcookie("4Month-plan",$_COOKIE["4Month-plan"]+1);
?>
<!DOCTYPE html>
<html>
   <head>
      <style>
html { 
  background: url("https://images.unsplash.com/photo-1610072947120-8736bbfc56e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1030&q=80") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
      </style>
   </head>

   <body>
      <h1>Save for 4 Months and Fly upto Local Places.New</h1>
   </body>
</html>