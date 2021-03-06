<?php

	#doc
	#	classname:	BrowserConstants
	#	scope:		PUBLIC
	#
	#/doc
	
	class BrowserConstants 
	{
	
		private $FIREFOX3 = "Firefox/3.";
		private $FIREFOX2 = "Firefox/2.";
		private $IE = "MSIE";
		private $SAFARI = "Safari";
		private $OPERA = "Opera";
		
		
		public function Firefox3 ()
		{
			return $this->FIREFOX3;
		}
		
		public function Firefox2 ()
		{
			return $this->FIREFOX2;
		}
		
		public function IE ()
		{
			return $this->IE;
		}
		
		public function SAFARI ()
		{
			return $this->SAFARI;
		}
		
		public function OPERA ()
		{
			return $this->OPERA;
		}
	}

?>