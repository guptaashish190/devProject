<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"  type = "text/css" href = "Style.css"/>
<script type = "text/javascript">
</script>

</head>
<body>

<!--Title Logo -->
<img src= "images/logo.png" id="titleImg"/>

<!--Social Icons-->
<!--Background Work -->
<div id= "backContainer">
<img src="images/backgroundBlur.jpg" id="back"/>
</div>
<img src="images/background.jpg" id="backB"/>

<!--Menu-->
<div id="menu">
<div class = "linkButtons" id = "home">
<a href = "#" class="buttonText">Home	</a>
<img src = "images/home.png" style = "width:30px;height:30px;">
</div>

<div class = "linkButtons" id = "Register">
<a href = "#" class="buttonText">Register	</a>    
<img src = "images/reg.png" style = "width:30px;height:30px;">
</div>

<div class = "linkButtons" id = "Gravitas">
<a href = "#" class="buttonText" >Gravitas	</a>
<img src = "images/grav.png" style = "width:30px;height:30px;">
</div>

<div class = "linkButtons" id = "Codespace">
<a href = "#" class="buttonText">Codespace	</a>
<img src = "images/cs.png" style = "width:30px;height:30px;">
</div>
</div>

<div id= "homeContent">

<ul id="homeContentMenu">
<a href="?page=content1" class="homeMenuClass">Content1</a>
<a href="?page=content2" class="homeMenuClass">Content2</a>
<a href="?page=content3" class="homeMenuClass">Content3</a>
<a href="?page=content4" class="homeMenuClass">Content4</a>
</ul>

<div class="menuResp">

<a href="?page=content1" class="navMenuRespE1">Content1</a>
<div class="dropDownElements">
<a href="?page=content2">Content2</a>
<a href="?page=content3">Content3</a>
<a href="?page=content4">Content4</a>
</div>
</div>
<?php
	
	if(isset($_GET['page'])){
		$page = $_GET["page"];
		include("includes/" . $page . '.php');
	}else{
		include("includes/content1.php");
	}
?>


</div>
</body>
</html>
