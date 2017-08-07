<?php
	
	namespace Handle;

	class ViewFunctions {

		public function url(String $path = ''){
			return 'http://'.$_SERVER['HTTP_HOST'].'/'.$path;
		}

	}