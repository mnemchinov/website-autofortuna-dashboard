<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Автофортуна </title>
<meta http-equiv="Content-Language" content="ru" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="main.css" rel="stylesheet" />
<script type="text/javascript" src="http://yandex.st/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</head>
<body>
<br><br>

<?php 
if (isset($_COOKIE['Mortal'])) $cnt=$_COOKIE['Mortal']+1;
else $cnt=0;
setcookie("Mortal",$cnt,0x6FFFFFFF);

if( (isset($_COOKIE['OK'])) & (($_COOKIE['OK']=='GOOD')) ){
//echo '/'.$_COOKIE['OK'].'|'.$_COOKIE['login'].'|'.$_COOKIE['pass'].'/';
 include("menu.html");
echo '<div>';
 include("general.html");
echo '</div>';

}else
 header("Location: index.php");
?>

</body>
</html>