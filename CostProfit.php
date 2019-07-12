 <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Меню</title>
<meta http-equiv="Content-Language" content="ru" />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
 <link href="main.css" rel="stylesheet" />

<script type="text/javascript" src="http://yandex.st/jquery/1.7.2/jquery.min.js"></script>
 <script type="text/javascript" src="main.js"></script>
 
</head>
<body>
<br><br>
<?php if( (isset($_COOKIE['OK'])) & (($_COOKIE['OK']=='GOOD')) ){
 include("menu.html");
 echo '<div>';
 include("CostProfit.html");
  echo '</div>';
  }else
   header("Location: index.php");
?>
<br><br>
<img src="img/prognosis.png">
</body>
</html>