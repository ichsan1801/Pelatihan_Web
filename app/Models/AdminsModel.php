<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class AdminsModel extends Model
{
    
	public $id;
	public $created_at;
	public $updated_at;
	public $nama;
	public $photo;
	public $email;
	public $password;

}