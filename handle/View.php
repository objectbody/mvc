<?php
	
	namespace Handle;

	use \Twig_Loader_Filesystem;
	use \Twig_Environment;
	use \TwigFilter;

	class View {

		public $twig;
		
		public function boot(){
			
			$staticData = __DIR__.'/../app/data_static.php';
			
			$loader = new Twig_Loader_Filesystem(__DIR__.'/../app/view');
			$twig = new Twig_Environment($loader);
			
			if(file_exists($staticData)){
				foreach (require($staticData) as $key => $data) {
					$twig->addGlobal($key, $data);
				}
			}

			$this->twig = $twig;

		}

		public function render(String $template, Array $data = []){
			return $this->twig->render($template.'.twig', $data);
		}

	}