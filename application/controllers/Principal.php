<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{			        		
		$this->load->model('Song_model');

		$data['music'] = $this->Song_model->get_song(false,true);
		$data['is_list_music'] = false;

		$this->load->view('principal/index.php',$data);
	}

	public function musica(){
		$this->load->model('Genero_model');

		$data['generos'] = $this->Genero_model->get_generos();		

		$this->load->view('principal/musica.php',$data);
	}

	public function search(){
		echo "teste";
	}

	public function todas_musicas($filter = false){
		$this->load->model('Song_model');

		$data['music'] = $this->Song_model->get_song($filter,false);
		$data['is_list_music'] = true;

		$this->load->view('principal/index.php',$data);
	}

	public function update_qtde($id){
		$this->load->model('Song_model');

		$data['qtde'] = $this->Song_model->update_qtde_clique($id);

		return $data['qtde'];
	}

	public function upload(){

	if(isset($_FILES['file-upload'])){

		$this->load->model('Song_model');

		date_default_timezone_set("Brazil/East");	
		$new_name = $this->input->post('inputNome');	
		$ext = strtolower(substr($_FILES['file-upload']['name'],-4)); 
		$dir = 'upload/'; 
		move_uploaded_file($_FILES['file-upload']['tmp_name'], $dir.$new_name.$ext);

		$_POST['local_file'] = $dir.$new_name.$ext;

		$save = $this->Song_model->save();

		if($save){
			$this->session->set_flashdata('msg', 'Upload de arquivo realizado com sucesso!');
		}else{
			$this->session->set_flashdata('msg', 'Ocorreu um erro!');
		}

		redirect(base_url('index.php/musica'));

   	}

	}

}
