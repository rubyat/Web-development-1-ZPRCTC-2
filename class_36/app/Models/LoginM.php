<?php 
namespace App\Models;
use CodeIgniter\Model;

class LoginM extends Model
{
    protected $table = 'user';

    protected $primaryKey = 'user_id';
	
    protected $allowedFields = [
		'user_id',
		'user_name',
		'password',
		'status',
	];
}