<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Description of GroceryCrud_His_Pangkat_Model
 *
 * @author No-CMS Module Generator
 */
class GroceryCrud_Laporan_Model  extends grocery_CRUD_Model{
	public function __construct(){
		parent::__construct();
	}	

	public function get_laporan($table)
	{
		$pangkat = $this->db->select('*');
		return $this->db->get($table);
	}
}