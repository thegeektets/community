<?php
class products extends CI_Controller {
	private $product_id;
 	
 	public function __construct()
	{
		parent::__construct();
		$this->load->model('products_model');
	}

	public function index()
	{
	 $data['portfolio'] = $this->products_model->get_product();
     $data['title'] = 'Products';

	//$this->load->view('includes/header', $data);
	$this->load->view('products', $data);
	}

	public function reviewproduct($product_id){

      $data['portfolio'] = $this->products_model->get_oneproduct($product_id);
      $data['tools'] = $this->products_model->get_tools($product_id);
      $data['others'] =$this->products_model->get_others($product_id);
      $data['developer']=$this->products_model->get_developerdetails($product_id);
      
      $data['title'] = 'Product:';
    //this->load->view('includes/header', $data);
	$this->load->view('review', $data);
	
	}
}