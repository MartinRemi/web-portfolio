<?php

/**
 *	Model 'User', used to manipulate user related data from the database
 *	TODO: fix eror messages
 */
class NewsModel extends CI_Model
{
	// ----- Static Member(s)
	protected $table = 'news';

	// ----- Method(s)
	/**
	 *	Insert a new row in the database
	 *	@return true if a new row has been added
	 *			else false
	 */
	public function insert($author, $title, $content)
	{
		//	Set query parameters
		$this->db->set('id_author', $author);
		$this->db->set('title', $title);
		$this->db->set('content', $content);
		$this->db->set('date', date('Y-m-d H:i:s')); // Now

		//	Insert
		return $this->db->insert($this->table);
	}

	/**
	 *	Return the user with the id equals to $id
	 */
	public function retrieve($id)
	{
		return $this->db
					->select('*')
					->from($this->table)
					->where('id', (int)$id)
					->get()
					->result();
	}

	public function retrieveAll() {
		return $this->db
					->select('*')
					->from($this->table)
					->get()
					->result();
	}
}
