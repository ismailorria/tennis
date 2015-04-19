<?php
class player extends CI_controller{
	public function index(){
		$this->load->model('player_model');
		$data['players']=$this->player_model->getallplayers();
		$data['title']="player index page!";
		$data['view']="player/index";

		$this->load->view('layout/admin',$data);
	}

	public function detail(){
		$playerno=$this->uri->segment(3);
		$this->load->model('player_model');
		$data['player']=$this->player_model->getplayerbynum($playerno);
		$data['title']='detailed page!';
		$data['view']='player/detail';
		$this->load->view('layout/admin',$data);
	}

	public function edit(){
		$playerno=$this->uri->segment(3);
		$this->load->helper('form');
		$this->load->model('player_model');
		$data['player']=$this->player_model->getplayerbynum($playerno);
		


		if($this->input->post('submit')){
			$this->player_model->edit($this->input->post('p_no'));
			redirect('player/index');
		}
		else{
			$data['view']='player/edit';
		$this->load->view('layout/admin',$data);
		}
	}

	public function delete(){
		$playerno=$this->uri->segment(3);
		$this->load->model('player_model');
		$this->player_model->delete($playerno);

		redirect('player/index');
	}

	public function add(){
		$this->load->helper('form');
		$data['title']='registration form!';
		

		if($this->input->post('submit')){
			$this->load->model('player_model');
			$this->player_model->add();

			redirect('player/index');
		}else{
			$data['view']='player/add';
		$this->load->view('layout/admin',$data);
		}
	}
}



?>
