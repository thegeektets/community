<?php
class products_model extends CI_Model {
	private $product_id;
 	private $developer_id;
 
	
public function __construct(){
$this->load->database();     }

public function get_products(){
$query = $this->db->get('portfolio');
return $query->row_array();}

public function get_product(){
$query = $this->db->query('select * from portfolio,developer_details where developer_details.developer_id = portfolio.developer_id');
return $query->result_array();}

public function get_newproducts(){
$query = $this->db->query('select * from portfolio,developer_details where developer_details.developer_id = portfolio.developer_id
	ORDER BY `date_time` DESC
    LIMIT 0 , 5');
return $query->result_array();}

public function get_oneproduct($product_id){
$query = $this->db->query('select * from portfolio,developer_details where developer_details.developer_id =
 portfolio.developer_id and portfolio.product_id ='.$product_id);
return $query->result_array();}

public function get_tools($product_id){
$query = $this->db->query('select * from tools where product_id ='.$product_id);
return $query->result_array();}

public function get_developer($product_id){
$query = $this->db->query('select developer_id from portfolio where product_id ='.$product_id);
$query->result();
foreach ($query->result() as $row)
{
   return $row->developer_id;
}



}
public function get_developerdetails($product_id){
$developer_id = $this->get_developer($product_id);
$query = $this->db->query('select * from developer_details where developer_id ='.$developer_id);
return $query->result_array();




}

public function get_others($product_id){
$developer_id = $this->get_developer($product_id);
$query = $this->db->query('select * from portfolio,developer_details where  developer_details.developer_id =
 portfolio.developer_id and developer_details.developer_id ='.$developer_id);

return $query->result_array();}


}