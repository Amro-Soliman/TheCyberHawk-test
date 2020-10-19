<!DOCTYPE html>
<html>
<head>
<title>CyberHawk Test</title>
<link rel="stylesheet" href="CHtest.css">
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="CHtest.js"></script>
</head>

<body>

<h3 class="disp-cont">
Enter a number within range of 1 to 100 in order to inspect the products.
</h3>

<div id='form-sec'>
<form  id='form'action='CHresult.php' method='get'>

  <label for="fname" ><b>Enter a product number:</b></label><br><br>
  <input type="text" id="productNr" name="productNr" placeholder="Product number">
  <input type="submit" id='sub' name='sub' value="Inspect">
  <p id="result"> </p>

</form>
</div>
</body>
</html>
