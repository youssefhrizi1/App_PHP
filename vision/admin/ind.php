<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style/style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>



</head>

<body>

 
<!--<div  id="clocks" style="margin: 15px 0px 0px; display: inline-block; text-align: center; width: 120px;"><div style="display: inline-block; padding: 2px 4px; margin: 0px 0px 5px; border: 1px solid rgb(204, 204, 204); text-align: center; background-color: rgb(249, 249, 253);"><a href="" style="text-decoration: none; font-size: 13px; color: rgb(108, 208, 127);"> </a></div><script type="text/javascript" src="http://localtimes.info/clock.php?&cp1_Hex=6cd07f&cp2_Hex=f9f9fd&cp3_Hex=fbfafa&fwdt=120&ham=0&hbg=0&hfg=0&sid=0&mon=0&wek=0&wkf=0&sep=0&widget_number=121"></script></div>-->

<div id="document">



<div id="container">

      <div id="left">
      <?php include('Affiche_Agents.php'); ?>
     
 
      </div>
      <div id="right">
      
        <?php 
if (isset($_GET['page'])){
$page=$_GET['page'];
if($page==1){include('afftravail.php');}
}



?>
 



</div>
</div>

</div>


</body>
</html>