 <!DOCTYPE html>
<html>
<head>
	<title>web clone</title>
</head>
<style type="text/css">
	nav{
		float: left;
	}
	article{
		margin-top: 20px;
		float: right;
		margin-right: 20px;

	}
	footer{
		margin-top: 550px;
		height: 50px;
	}
	#art .ifoto{
		float: right;
		height: 120%;
		width: 76%;
		margin-top: 20px;
		margin-right: 10px;
	}
</style>
<body>
<style type="text/css">
	.h1{
		margin: 10px;
	}
	.h1 a{
		text-decoration: none;
		float: right;
		margin: 5px;
		padding: 3px;
	}
	.h2{
		padding-top: 50px;
		margin: 10px;
		text-align: center;
	}
	li{
		margin: 20px;
	}
	.h2 ul{
		list-style-type: none;
		display: inline;

	}
	.h2 ul li{
		list-style-type: none;
		display: inline;
		margin:10px;
		padding: 13px;
		text-decoration: none;
	}
	.h2 ul li a{
		text-decoration: none;
	}
	.free{
		hover:;
	}

</style>
<header>
	 
<!-- //include 'header.php';  -->
	<div class="h1">

		<a href=""> +250 788 335 917 (Toll free)</a>
		<a href="">Contact us</a>
		<a href="">Login</a>
		<!-- //<input type="text" placeholder="Serch"> -->
	</div>
	<div class="h2">
		<hr/>
			<ul>
				<li><a href="index.php">PRODUCTS</a></li>
				<li><a href="mara.php">SOLUTIONS</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">COMMUNITY</a></li>
				<li><a href="#">CUSTOMERS</a></li>
				<li><a href="#">EVENTS</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li  style="background-color: #45ff95; border-radius: 15px;"><a href="#" class="free">Free Trail</a></li>
			</ul>
			<br/>
		<hr/>

	</div>
	
</header>
<nav>
	<?php include 'nav.php'; ?>
</nav>
<div id="art">
	<!-- <img src="aaa.JPG" class="ifoto"> -->
	<?php
 echo "Please enter, so that we provide miltiplication table for It";?>
 <br/><br/>
 <form action="" method="POST">
 <table>
 	<tr>
	 	<td><input type="text" name="num"></td>
	 	<td><input type="submit" name="cal"></td>
 	</tr>
 </table>
 </form>
  
  <br/><br/>
 <?php
	error_reporting(0);//this function hides all the errors.
	$num = $_POST["num"];
    if (isset($_POST['cal'])) {
    	$array_nber =array(1,2,3,4,5,6,7,8,9,10);
		$array_result=array();
		$count=0;
		for($i=0; $i<=9; $i++){
		    $array_result[$i] = $array_nber[$i] *$num;
		}
		foreach($array_result as $value){
		    echo "$num * " .$array_nber[$count] ."= ".$value."<br>";
		    $count++;
		}
    }
?>
</div> 
<footer >
	<?php 
	include 'footer.php';
	?>
</footer>
</body>
</html>
 