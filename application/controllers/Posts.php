<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	// public function index_json()
	// {
	// 	$this->load->model('Quote');
	// 	$daya = array();
	// 	$data['quotes'] = $this->Quote->all();
	// 	echo json_encode($data);
	// }
	public function index_html()
	{
		$this->load->model('Post');
		$data['posts'] = $this->Post->all();
		$this->load->view('partials/posts', $data);
	}
	public function create()
	{
		$this->load->model('Post');
		$new_post = $this->input->post();
		$this->Post->create($new_post);
		$data['posts'] = $this->Post->all();
		$this->load->view('partials/posts', $data);
	}
	public function index()
	{
		$this->load->view('index');
	}
}

