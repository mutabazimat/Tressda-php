
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
	#art{
		background-color: #fff;
		height: 600px;
		width: 100%;
		margin-top: 20px;
		margin-right: 10px;
	}
	.ifoto{
		border-radius: 50%;
		margin: 10px;
		/*height: 30%;
		width: 90%;*/
	}
	
	#art .one{
		/*background-color: #00f;*/
		height: 700px;
		width: 33%;
		float: left;
	}
	#art .two{
		/*background-color: #0ff;*/
		height: 700px;
		width: 32%;
		margin-left: 15px;
		float: left;
	}
	#art .three{
		/*background-color: #f0f;*/
		height: 700px;
		width: 33%;
		float: right;
	}
	a:hover { 
    background-color: #ccc;
	}
	.container{
		background-image:  url(assets/images/home.jpg);
		height: 530px;
		width: 1340px;
		margin-top: 20px;
	}
	.container footer{
		background-color: #ddd;
		height: 50px;
		width: 100%;
		position: absolute;

	}
</style>
<body>
	<header>
		<?php 
			include 'header.php'; 
		?>
	</header>
	<div class="container">
		<nav>
			<?php include 'nav.php'; ?>
		</nav>
		<footer></footer>
	</div>
	<div id="art">
		<div class="one">
			<h2>Small size</h2>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
		</div>
		<div class="two">
		<h2>Medium size</h2>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
		</div>
		<div class="three">
		<h2>Big size</h2>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
			<img src="assets/images/images.png" class="ifoto"><br/>
		</div>
	</div> 
	<footer >
		<?php 
		include 'footer.php';
		?>
	</footer>

</body>
</html>