<?php
	
	namespace Handle;

	use \Twig_Loader_Filesystem;
	use \Twig_Environment;
	use \Twig_Filter;
	use \Twig_Function;

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

			$classes = (object) [
				'filters' => "\\Handle\\ViewFilters",
				'functions' => "\\Handle\\ViewFunctions",
			];

			foreach (get_class_methods($classes->filters) as $value) {
				$twig->addFilter((
					new Twig_Filter($value, [new $classes->filters, $value])
				));
			}

			foreach (get_class_methods($classes->functions) as $value) {
				$twig->addFunction((
					new Twig_Function($value, [new $classes->functions, $value])
				));
			}

			$this->twig = $twig;

		}

		public function render(String $template, Array $data = []){
			return $this->twig->render($template.'.twig', $data);
		}

	}