<?php 
namespace App\Models;
use CodeIgniter\Model;

class StudentM extends Model
{
    protected $table = 'student';

    protected $primaryKey = 'student_id';
	
	
	
    
    protected $allowedFields = [
		'student_id',
		'roll',
		'name',
		'mobile',
		'address',
		'class',
	];
}