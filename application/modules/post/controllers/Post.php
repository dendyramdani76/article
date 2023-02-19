<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load-> model('post/mpost', 'post');

		$this->data['title'] = 'ARTICLE';
		$this->data['postPublish'] = $this->post->getPostPublish();
		$this->data['postDraft'] = $this->post->getPostDraft();
		$this->data['postTrash'] = $this->post->getPostTrash();
	}

// ========================= index ===========================
	public function index(){
		$this->load->view('post/index', $this->data);
	}
	
	public function preview(){
		$this->load->view('post/preview', $this->data);
	}
	
	public function read($id){
		$this->data['post'] = $this->post->readPostById($id);
		$this->load->view('post/read_post', $this->data);
	}
	
	public function add(){
		$this->load->view('post/add', $this->data);
	}
	
	public function edit($id){
		$this->data['post'] = $this->post->readPostById($id); 
		$this->load->view('post/update', $this->data);
	}
	
// ========================== insert =========================
	function insert(){
		echo $this->post->insert();
	}

// ========================= update ==========================

	function update($id){
		echo $this->post->update($id);
	}

// ========================= delete ==========================
	function delete($id){
		$this->post->delete($id); 
		redirect(base_url());
	}
}