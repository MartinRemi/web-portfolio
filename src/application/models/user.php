<?php

class User extends CI_Model
{
	// ----- Static Member(s)
	protected $table = 'user';

	// ----- Method(s)
	public function insert($username, $email, $password)
	{
		//	Set query parameters
		$this->db->set('username',  $username);
		$this->db->set('email',  $email);
		$this->db->set('password',  sha1($password));

		//	Insert
		return $this->db->insert($this->table);
	}

	public function retrieve($id)
	{
		return $this->db
					->select('*')
					->from($this->table)
					->where('id', (int)$id)
					->get()
					->result();
	}

	public function retrieveByEmail($email)
	{
		return $this->db
					->select('*')
					->from($this->table)
					->where('email', $email)
					->get()
					->result();
	}

	public function changePassword($id, $password) 
	{
		return $this->db
					->set('password', sha1($password))
					->where('id', (int)$id)
					->update($this->table);
	}
}