<?php 
	class Views
	{
		function getView($controller, $view, $data="")
		{
			$controller = get_class($controller); //Home
			if ($controller == "Home") {
				$view = VIEWS."$view.php";
			} else {
				$view = VIEWS."$controller/$view.php";
			}
			require_once($view);
		}
	}
?>