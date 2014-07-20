<?php

/**
 *	Model 'User', used to manipulate user related data from the database
 */
class UserModel extends CI_Model
{
	// ----- Static Member(s)
	protected $table = 'user';

	// ----- Method(s)
	/**
	 *	Insert a new row in the database
	 *	@return true if a new row has been added
	 *			else false
	 */
	public function insert($username, $email, $password)
	{
		//	Set query parameters
		$this->db->set('username',  $username);
		$this->db->set('email',  $email);
		$this->db->set('password',  sha1($password));

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

	/**
	 *	Return the user with the email equals to $email
	 */
	public function retrieveByEmail($email)
	{
		return $this->db
					->select('*')
					->from($this->table)
					->where('email', $email)
					->get()
					->result();
	}

	/**
	 *	Return the user with the username equals to $username
	 */
	public function retrieveByUsername($username)
	{
		return $this->db
					->select('*')
					->from($this->table)
					->where('username', $username)
					->get()
					->result();
	}

	/**
	 *	Change the password of the user
	 */
	public function changePassword($id, $password) 
	{
		return $this->db
					->set('password', sha1($password))
					->where('id', (int)$id)
					->update($this->table);
	}
}
