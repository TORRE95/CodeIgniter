<?php

class Users extends CI_Controller{

	public function show(){
		//$this->load->model('user_model'); //Model autoloades in autoload.php
		
		$data['results'] = $this->user_model->get_users();

		$this->load->view('user_view', $data);

		// foreach ($result as $object) {
			
		// 	echo $object->id . "<br>";
		// }
		
	}
}
?>