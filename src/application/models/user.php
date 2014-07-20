<?php

class User extends CI_Model
{
	// ----- Static Member(s)
	protected $table = 'user';

	// ----- Method(s)
	public function insert($username)
	{
		//	Ces données seront automatiquement échappées
		$this->db->set('username',  $username);

		//	Une fois que tous les champs ont bien été définis, on "insert" le tout
		return $this->db->insert($this->table);
	}
}