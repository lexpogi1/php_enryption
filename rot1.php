<?php
//ROT stands for ROTation - meaning to rotate letters of the alphabet forward. 
//The alphabet wraps around, so ROT-1 would mean that a=b, b=c, c=d.....x=y, y=z, z=a. 


   class Rot1
   {
	   
	   private $key = 1;
	   private $let = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	   
	   public function decrypt($pass){
	   $passLength = strlen($pass);
	    $encrypted = "";
	   for($i=0;$i<$passLength;$i++){
		 $charPosInLetter = strripos($this->let, $pass[$i]);
		 
         if(!$charPosInLetter && $charPosInLetter!==0){
			 $encrypted.=$pass[$i];
			 continue;
		 }
		 $shift = $charPosInLetter - $this->key;
		 
		 if($shift < 0)
		 {
			  $shift= $shift + strlen($this->let);
		 }
		 
		 if(ctype_lower($pass[$i])){	
				$encrypted.=strtolower($this->let[$shift]);
		 } else {
			$encrypted.=$this->let[$shift];
		 }
	   }
	   
	   return $encrypted;
	}
      
	  public function encrypt($encrypted){
	   $letLastIndex=strlen($this->let)-1;
	   $decrypted = "";
	   $passLength = strlen($encrypted);
	
	   for($i=0;$i<$passLength;$i++){
		 $charPosInLetter = strripos($this->let, $encrypted[$i]); 
		 if(!$charPosInLetter && $charPosInLetter!==0){
			 $decrypted.=$encrypted[$i];
			 continue;
		 }
		 $shift = $charPosInLetter + $this->key;
		 if($shift > $letLastIndex)
		 {
			  $shift= $shift - $letLastIndex - 1;
		 }
		 
		 if(ctype_lower($encrypted[$i])){	
				$decrypted.=strtolower($this->let[$shift]);
		 } else {
			$decrypted.=$this->let[$shift];
		 }
	   }
	   return $decrypted;
	}
	
	
   }



?>
