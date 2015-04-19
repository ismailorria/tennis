<?php

class player_model extends CI_model{
	public function index(){

	}
	public function getallplayers(){
		return $this->db->query('select * from players')->result_array();
	}

	public function getplayerbynum($playerno){
		return $this->db->query("select * from players where playerno='".$playerno."';")->row_array();
	}

	public function edit($playerno){
		$data=array(
 			'playerno'=>$this->input->post('p_no'),
 			'name'=>$this->input->post('p_name'),
 			'initials'=>$this->input->post('p_ini'),
 			'birth_date'=>$this->input->post('p_birthdate'),
 			'sex'=>$this->input->post('p_sex'),
 			'joined'=>$this->input->post('p_join'),
 			'street'=>$this->input->post('p_street'),
 			'postcode'=>$this->input->post('p_post'),
 			'town'=>$this->input->post('p_town'),
 			'phoneno'=>$this->input->post('p_phone'),
 			'leagueno'=>$this->input->post('p_league'),
 			'houseno'=>$this->input->post('p_house')




			);

		$this->db->where('playerno',$playerno);
		$this->db->update('players',$data);

	}

	public function delete($playerno){
		$this->db->query("delete from players where playerno='".$playerno."';");
	}


	public function add(){
		$this->db->insert('players',array(
			'playerno'=>$this->input->post('p_no'),
 			'name'=>$this->input->post('p_name'),
 			'initials'=>$this->input->post('p_ini'),
 			'birth_date'=>$this->input->post('p_birthdate'),
 			'sex'=>$this->input->post('p_sex'),
 			'joined'=>$this->input->post('p_join'),
 			'street'=>$this->input->post('p_street'),
 			'postcode'=>$this->input->post('p_post'),
 			'town'=>$this->input->post('p_town'),
 			'phoneno'=>$this->input->post('p_phone'),
 			'leagueno'=>$this->input->post('p_league'),
 			'houseno'=>$this->input->post('p_house')






			));
	}
}



?>
