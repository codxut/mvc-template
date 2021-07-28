<?php 
	class Home extends Controllers {

		function __construct()
		{
			parent::__construct();
		}

		public function home($params)
		{
			//enviando información a las vistas
			$data = [
				'page_tag' => "Home",
				'page_title' => "Página principal",
				'page_name' => "home",
				'page_id' => 1,
				'page_content' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut dolorum voluptas ea doloribus quod praesentium temporibus ab placeat, est nemo amet tenetur autem repellendus, quo maiores itaque culpa fugit ad?"
			];
			//comunicación entre controlador y la vista
			$this->views->getView($this, "home", $data);
		}

		public function datos($params)
		{
			echo "El dato ha sido recibido: $params";
		}

		public function carrito($params)
		{
			//comunicación entre controlador y el modelo
			$carrito = $this->model->getCarrito($params);
			echo $carrito;
		}
	}
?>