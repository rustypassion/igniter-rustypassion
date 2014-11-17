<?php
class Topic_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function gets() {
	return $this->db->query('SELECT * FROM topic')->result();
	}

	public function get($topic_id) {
		$this->db->select('id');
		$this->db->select('title');
		$this->db->select('description');
		$this->db->select('UNIX_TIMESTAMP(created) AS created');
		return $this->db->get_where('topic', array('id'=>$topic_id))->row(); 
		//active record사용 return $this->db->query('SELECT * FROM topic WHERE id='.$topic_id)

	}
	function add($title, $description) {
		$this->db->set('created', 'NOW()', false);
		$this->db->insert('topic', array(
			'title'=>$title,
			'description'=>$description,
			
			));
		return $this->db->insert_id(); // 추가된 행에 대한 id값을 리턴해 줌.
		
		echo $this->db->last_query();
		echo $title;
	}

}