<?php
class Students_model extends CI_Model {
	
	private $table = "students";
	
	//Constructor
	public function __construct()
	{
		parent::__construct();
	}
	
	//Create
	public function create()
	{
		
	}	
	
	//Read
	public function read()
	{
		$this->db->select("*");
		$this->db->from($this->table);

		if(isset($where))
			$this->db->where($where);
		$query=$this->db->get();

		return $query->result_array();
	}	
	
	//UPDATE
	public function update(){
		
	}
	
	//DELETE
	public function delete_record(){
		
	}
}
?>