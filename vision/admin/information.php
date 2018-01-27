<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
#info{margin:0px auto;width:1100px; height:1000px; background-color:;}
#header{width:1100px; height:70px; background-color:#666;}
#cont{width:1100px; height:1030; background-color:#96F;} 



ul
{
	margin:0px;
	padding:0px;
 }
ul li
{ background-color: #9C0;
width:155px;
height:35px;
line-height:35px;
float:left; 
border:1px solid black;
text-align:center; list-style:none;
font-family:'Francois One ', sans-serif ; 
}  
ul li a
{ text-decoration: none;
 color:white;
  display:block;
	}
ul li a:hover
{ background-color:#7FFF00; 
} 
</style>
</head>

<body>
<div id="info">
<div id="header"><header>
<nav>
<ul>
<li id="cart">CarthageWeb</li>
<li><a href="information.php?info=1">Affiche Personne</a></li>
<li><a href="information.php?info=2">Affiche Travail</a></li>
</ul>




</nav>
</header>
</div>
<div id="cont">
<section>
 <?php 
if (isset($_GET['info'])){
$info=$_GET['info'];

if($info==1){include('affpersonne.php');}
if($info==2){include('afftravail.php');}
}
?>
</section>
</div>

</div>

</body>
</html>