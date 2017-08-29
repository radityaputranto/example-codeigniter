<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function view($halaman = 'test')
	{

		/*if (!file_exists(APPPATH.'views/pages/'.$halaman.'php')) {
			show_404();
		}*/

		if ( !file_exists(APPPATH.'views/pages/'.$halaman.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }


		$data['title']= $halaman;

		$this->load->view('templates/header',$data);	
		$this->load->view('pages/'.$halaman);	
		$this->load->view('templates/footer');	
		
	}
}
