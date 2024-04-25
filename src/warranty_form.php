<!DOCTYPE html>
<html>

<head>
<title>Warranty form - GreyDay</title>
<?php include "header.php";?>

<style>
	.text {
		font-size:18px;
		color:white;
	}
	
	.textbox {
		margin-left:200px;
		margin-right:200px;
	}
	
	textarea {
		resize:none;
		outline:none;
		background-color:transparent;
		width:100%;
		height:120px;
		overflow:auto;
	}
	
	textarea:focus {
		outline:solid #44a69b;
	}
	
	.button {
		font-size:18px;
		border:3px solid white;
		cursor:pointer;
		width:140px;
		height:40px;
		background-color:transparent;
		color:white;
		box-shadow:5px 5px 3px 0px;
	}
	
	.button:hover {
		box-shadow:5px 5px 3px 0px green;
	}
	
</style>
</head>

<body>

<div class="page-title background-overlay" style="text-align:center;padding-top: 140px;padding-bottom: 140px">
<h1 style="font-weight:bold">Warranty Form</h1>
<p class="text">GreyDay / Warranty Form</p>
</div>

<div class="textbox">
	<br><br>
	<form method="post">
	<table class="text">
		<tr>
			<td>Email:</td>
		</tr>
		<tr>
			<td><input class="text" type="email" name="email" required="required" placeholder="Example : ana123@mail.com"></input></td>
		</tr>
		<tr>
			<td>Full name:</td>
		</tr>
		<tr>
			<td><input class="text" name="name" required="required" placeholder="Example : Ana Popescu"></input></td>
		</tr>
		<tr>
			<td>Address:</td>
		</tr>
		<tr>
			<td><textarea class="text" name="address" required="required" placeholder="Example : 13, Vasile Parvan 5, Timisoara, 53100, Timis, Romania"></textarea></td>
		</tr>
		<tr>
			<td>Contact Number</td>
		</tr>
		<tr>
			<td><input class="text" type="tel" name="contact" required="required" placeholder="Example : 0744 444 444"></input></td>
		</tr>
		<tr>
			<td>Product name:</td>
		</tr>
		<tr>
			<td><input class="text" type="text" name="product_name" required="required" placeholder="Example : Crocs Echo Clog Shoes"></input></td>
		</tr>
		<tr>
			<td>Problems that you are facing:</td>
		</tr>
		<tr>
			<td><textarea class="text" name="problem_statement" required="required" placeholder="Example : Shoes don't fit properly"></textarea></td>
		</tr>
		<tr>
			<td><input class="button" type="submit" name="submit" value="Submit form"></input></td>
		</tr>
	</table>
	</form>
</div>

<?php include "footer.php";?>
</body>

</html>