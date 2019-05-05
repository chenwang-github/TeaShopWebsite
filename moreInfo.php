<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="navBar">
    	<div class="sideNav">
      		<li><a href="index.php">Home</a></li>
      		<li><a href="#CommingSoon">CommingSoon</a></li>
    	</div>
    	<div class="middleNav">
      		<li style="float:initial;"><img class="center" src="imgs/logo1.jpg" alt="logo" width=auto height=100px"></img><li>
    	</div>
    	<div class="sideNav">
    	</div>
  	</div>



	<div class="colum">
		<img id = "photo" src="tea1.jpg" width=100% height=auto>
		<h2>Detailed Intro</h2>
		<p id = "desc">Our classic Red Tea Bag is the base of our drink and very easy to use
		</p>
	</div>


	<?php  

		$photo = $_GET["photo"];
		$desc = $_GET["desc"];
	?>

	<script type="text/javascript">
		var photo = "<?php echo $photo ?>";  
		document.getElementById("photo").src = photo;

		var desc = "<?php echo $desc ?>";
		document.getElementById("desc").innerHTML = desc;
	</script>




	<div class="colum">
		<div class="order">
		
		 <form action="mailto:cwang19@uci.edu" method= "post" enctype="text/plain" name="orderForm">
		    <label for="productId">Product ID</label>
		    <input type="text" id="productId" name="productId" placeholder="id..">

		    <label for="quant">Quanntity</label>
		    <input type="text" id="quant" name="quantity" placeholder="quantity">

		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="firstname" placeholder="Your name..">

		    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

		    <label for="phoneNum">Phone Number</label>
		    <input type="text" id="phoneNum" name="phoneNum" placeholder="phone number..">

		    <label for="address1">Shipping Address Line1</label>
		    <input type="text" id="address1" name="address1" placeholder="address">

		    <label for="address2">Shipping Address Line2</label>
		    <input type="text" id="address2" name="address2" placeholder="address">

		    <label id = "address3" for="address3">State</label>
		    <input type="text" id="state" name="address3" placeholder="State" onkeyup="showHint(this.value)">
		    
		    <label for="address4">ZIP Code</label>
		    <input type="text" id="address4" name="address4" placeholder="ZIPcode">

		    <label for="country">Country</label>
		    <select id="country" name="country">
		      <option value="australia">Australia</option>
		      <option value="canada">Canada</option>
		      <option value="usa">USA</option>
		    </select>
		  

		    <label for="creditCard">Credit Card Number</label>
		    <input type="text" id="creditCard" name="creditCard" placeholder="creditCard">

		    <label for="expirationDate">Expiration Date</label>
		    <input type="text" id="expirationDate" name="expirationDate" placeholder="MM/DD/YY">

		    <label for="securityCode">Security Code</label>
		    <input type="text" id="securityCode" name="securityCode" placeholder="">


		    <label for="shippingMethod">Shipping Method</label>
		    <select id="shippingMethod" name="shippingMethod">
		      <option value="0.5">over night delievery</option>
		      <option value="1 day self-pickup">1 day self-pickup</option>
		      <option value="2 day free shipping">2 day free shipping</option>
		      <option value="7 day standard shipping">7 day standard shipping</option>
		    </select>


		    <input type="submit" value="Submit" onclick="inputCheck()">
		  </form>
		</div>
	</div>

	<script src="external.js"></script>
	<script type="text/javascript">
		function showHint(str) {
		  var xhttp;
		  if (str.length == 0) { 
		    document.getElementById("state").value = "";
		    return;
		  }
		  xhttp = new XMLHttpRequest();
		  xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("state").value = this.responseText;
		    }
		  };
		  xhttp.open("GET", "getState.php?q="+str, true);
		  xhttp.send();   
		}
	</script>




</body>
</html>