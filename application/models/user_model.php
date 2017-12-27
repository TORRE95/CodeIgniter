<?php

class User_Model extends CI_Model{

	public function get_users(){


		// $config['hostname'] = 'localhost';
		// $config['username'] = 'root';
		// $config['pasword'] = '';
		// $config['database'] = 'errand_db';

		// $connection = $this->load->database($config);


		$query = $this->db->get('users');

		return $query->result();
	}
}
?>