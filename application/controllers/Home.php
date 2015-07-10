<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();
		
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
	
	public $data;
	
	
	
	
	
	public function index(){
		$this->data['tamu'] = $this->m_tamu->get();
		
		$this->load->view('header',$this->data);
		$this->load->view('home');
		$this->load->view('footer');
	}
	
	
	
	
	
	function add(){
		//validate form input
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		if ($this->form_validation->run() == true)
		{
			if( true == $this->m_tamu->insert(array(
				'nama' 		=> $this->input->post('nama'),
				'telp' 		=> $this->input->post('telp'),
				'alamat' 	=> $this->input->post('alamat')
			))){
				redirect('/?input-ok');
			}else{
				redirect('/?input-gagal');
			}
		}
		
		$this->load->view('header');
		$this->load->view('add');
		$this->load->view('footer');
	}
	
	
	
	
	
	function edit($id){
		//validate form input
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		
		if ($this->form_validation->run() == true)
		{
			if( true == $this->m_tamu->update(
				array(
					'nama' 		=> $this->input->post('nama'),
					'telp' 		=> $this->input->post('telp'),
					'alamat' 	=> $this->input->post('alamat')
				),
				$id
			)){
				redirect('/?update-ok');
			}else{
				redirect('/?update-gagal');
			}
		}
		$this->data['tamu'] = $this->m_tamu->getById($id);
		$this->load->view('header',$this->data);
		$this->load->view('edit');
		$this->load->view('footer');
	}
	
	
	
	
	
	
	function delete($id){
		if( true == $this->m_tamu->delete( $id )){
			redirect('/?delete-ok');
		}else{
			redirect('/?delete-gagal');
		}
	}
	
	
	
	
	
	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
}
