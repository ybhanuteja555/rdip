<!--get details page-->


<!DOCTYPE html>
<html>
<title>Home Page</title>
<style>

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  width: 100%;
}

li{
	float:left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



</style>

<body>

<fieldset>
	
	<a  href="https://www.iiit.ac.in/ "><img src="https://www.iiit.ac.in/img/iiit-new.png" style="float:top-left" width="150" height="100">
	</a>

	<a href="https://serc.iiit.ac.in/rdip" style="float:right; text-align: center; font-weight:bold;font-size: 30px;">RDIP
	</a>

	<ul>
		<li style=""><a href="homepage.html">Home</a></li>
		<li style=""><a :href="registration.html">Registration Form</a></li>
	</ul>

	<p>
		First Name &emsp; : <?php echo $_GET["Name"]; ?>

	</p>	
	<p>
		Email	&emsp;&emsp;&emsp;&emsp;:  <?php echo $_GET["emailID"]; ?>

	</p>	
	<p>
		Phone No&emsp;&emsp;  :  <?php echo $_GET["Phone"]; ?>

	</p>	
	<p>
		Gender  &emsp;&emsp;&emsp;:  <?php echo $_GET["gender"]; ?>

	</p>	
		<?php
		$arr_prgs = $_GET["progrms"];
		$result = implode("  ",$arr_prgs);
		?>

		Reason &emsp;&emsp;&emsp; :  <?php echo $result; ?>

	</p>	
	<p>
		College &emsp;&emsp;&emsp; :  <?php echo $_GET["clg"]; ?>

	</p>	




	<br><br><br>


</fieldset>

</body>

</html>