<?php
	include 'caesarCipher.php';
	include 'transpositionCipher.php';
	include 'rot1.php';
	
	$encryptedTxt = $_GET['encryptedTxt'];
	$encryptionMethod = $_GET['encryptionMethod'];
	$cipherObj =  new stdClass();
	 
	if($encryptionMethod == 'caesar') {
		$cipherObj = new CaesarCipher();
	} else if($encryptionMethod == 'transposition'){
		$cipherObj = new TranspositionCipher();
	} else {
		$cipherObj = new Rot1();
	}
	
	$decryptedTxt = $cipherObj->decrypt($encryptedTxt);
	
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
<table>
  <tr>
    <td>decryption method</td>
    <td><?=$encryptionMethod?></td>		
  </tr>
  <tr>
    <td>encrypted text</td>
    <td><?=$encryptedTxt?></td>		
  </tr>
  <tr>
    <td>decryption result</td>
    <td><?=$decryptedTxt?></td>		
  </tr>
   <tr>
    <td colspan="2"><button  type="reset" onclick="location.href='/loginform.php'">logout</button>&nbsp;&nbsp;&nbsp;
	<button  type="reset" onclick="location.href='main.php'">home</button>
	</td>
  </tr>
</table>

</body>
</html>
