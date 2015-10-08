<?php
    //One example of a transposition cipher, is to reverse the order of the letters in a plaintext.
    class TranspositionCipher{
		public function encrypt($text) {
			$lastIndex = strlen($text)-1;
			$result = "";
			for($i=$lastIndex;$i>-1;$i--){
				$result.=$text[$i];
			}
			return $result;
		}
		public function decrypt($text) {
			
			return $this->encrypt($text);
		}
	}
?>
