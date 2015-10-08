<?php
	include 'caesarCipher.php';
	include 'transpositionCipher.php';
	include 'rot1.php';
	
	$encryptionMethod = $_POST['encryptionMethod'];
	$inputTxt = $_POST['inputTxt'];
	
	$cipherObj =  new stdClass();
	$encryptedTxt = ""; 
	$encryptionDesc = "";
	if($encryptionMethod == 'caesar') {
		$cipherObj = new CaesarCipher();
		$encryptionDesc = "Letter in the plain text is replaced by a letter some fixed number of positions down the alphabet. This example has a left shift of 3.";
	} else if($encryptionMethod == 'transposition'){
		$cipherObj = new TranspositionCipher();
		$encryptionDesc = "The letters or words of the plain text are reordered in some way, fixed by a given rule. This example reverses the order of the letters in a plain text.";
	} else {
		$encryptionDesc = "Rotate 1 letter forward through the alphabet.";
		$cipherObj = new Rot1();
	}
	$encryptedTxt = $cipherObj->encrypt($inputTxt);
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>
<table>
  <tr>
    <td>encryption method</td>
    <td><?=$encryptionMethod?></td>		
  </tr>
  <tr>
    <td>encryption description</td>
    <td><?=$encryptionDesc?></td>		
  </tr>
  <tr>
    <td>input text</td>
    <td><?=$inputTxt?></td>		
  </tr>
  <tr>
    <td>encryption result</td>
    <td><?=$encryptedTxt?></td>		
  </tr>
  <tr>
    <td colspan="2"><button  type="reset" onclick="location.href='/loginform.php'">logout</button>&nbsp;&nbsp;&nbsp;
	<button  type="reset" onclick="location.href='decrypt.php?encryptedTxt=<?=$encryptedTxt?>&encryptionMethod=<?=$encryptionMethod?>'">decrypt</button>
	&nbsp;&nbsp;&nbsp;<button  type="reset" onclick="location.href='main.php'">home</button>
	</td>
  </tr>
  
</table>

</body>
</html>
