<?php

namespace App\Models;

use CodeIgniter\Model;

class Book extends Model
{
    protected $table = 'book';
	protected $allowedFields=['name','email','address','phone'];
	

	//show all data
	public function getdata($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
		
	
	
}