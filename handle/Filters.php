<?php
	
	namespace Handle;

	class Filters {

		public function url(String $path = ''){
			return 'http://'.$_SERVER['HTTP_HOST'].'/'.$path;
		}

	}