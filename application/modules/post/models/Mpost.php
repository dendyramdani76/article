<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mpost extends CI_Model {
// ============================= get data ==============================
// post publish
	public function getPostPublish(){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('status', 'Publish');
		$this->db->order_by('id', 'DESC');
		
		$query = $this->db->get();
		return $query->result();
	}

// post draft
	public function getPostDraft(){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('status', 'Draft');
		$this->db->order_by('id', 'DESC');
		
		$query = $this->db->get();
		return $query->result();
	}

// post trash
	public function getPostTrash(){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('status', 'Trash');
		$this->db->order_by('id', 'DESC');
		
		$query = $this->db->get();
		return $query->result();
	}

// read post by id
	public function readPostById($id){
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where('id', $id);
		
		$query = $this->db->get();
		return $query->row();
	}

// ============================= insert ================================
	function insert(){
		$data = array(
			'title' => $this->input->post('title'), 
			'content' => $this->input->post('content'), 
			'category' => $this->input->post('category'), 
			'status' => $this->input->post('status')
		);
		$this->db->insert('post', $data); 
		return TRUE;
	}

// =============================== update ==============================
	function update($id){
		$data = array(
			'title' => $this->input->post('title'), 
			'content' => $this->input->post('content'), 
			'category' => $this->input->post('category'), 
			'status' => $this->input->post('status')
		);
		$this->db->where('id', $id);
		$this->db->update('post', $data); 
		return TRUE;
	}

// =============================== delete ==============================
	function delete($id){
		$data['status'] = 'Trash';
		$this->db->where('id', $id);
		$this->db->update('post', $data); 
		return TRUE;
	}

}