<?php

	//$uname = $_POST['uname'];
	//$pass = $_POST['pass'];
	
	if( isset($_POST['uname']) )
	{
		echo "Welcome <b>{$_POST['uname']}</b>! <br/><br/>";
	}
?>
<html>	
<head>
<link rel="stylesheet" type="text/css" href="tableStyle.css">
</head>
<body>

<form action="encrypt.php" method="post">
  <table>	
  <tr>
	<td>enter text to encrypt</td>
	<td><input type="text" name="inputTxt"></td>
  </tr>
  <tr>  
     <td>select encryption method</td>  
     <td><input type="radio" name="encryptionMethod" value="caesar" checked> caesar cipher
         <br/>
         <input type="radio" name="encryptionMethod" value="transposition"> transposition
         <br/>
         <input type="radio" name="encryptionMethod" value="rot1"> ROT1
     </td>
   </tr>
   <tr>
	<td colspan="2"><input type="submit">&nbsp;&nbsp;&nbsp;
		<button  type="reset" onclick="location.href='/loginform.php'">logout</button>
	</td>
  </tr>
  
  </table>
</form> 

</body>
</html>
