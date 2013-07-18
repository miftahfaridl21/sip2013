<?php

	class Orang {
		
		public $nama;
		public $umur;
		
		function berbicara() {
			
			echo "Hallo nama saya adalah : $this->nama";
			
		}
		
		function statususia() {
			
			if($this->umur >= 17)
			
				echo $status = "Dewasa";
				else
					echo $status = "Dibawah umur";
			
			return $status;
			
		}
		
	}
	
?>
