<?php if (! defined ('BASEPATH')) exit ('No Direct script access allowed');

class Main extends CI_Controller {
	function __construct()
		{
		  parent::__construct();
		   $this -> load -> database();
			$this -> load -> helper ('url');
			$this -> load -> library ('grocery_CRUD');
}
	public function index () 
		{
			echo "<h1> Welcome to UoM alumni Site";
			die();
}
	public function employees()
		{
		  $this -> grocery_crud -> set_theme('datatables');
          $this -> grocery_crud->set_table('batchmates2');
		  $output = $this->grocery_crud-> render();
		  $this -> _example_output($output);
}
	function _example_output($output = null)
		{
          $this-> load-> view ('our_template.php',$output);
}
}
/* Location : ./application/controllers/main.php */
