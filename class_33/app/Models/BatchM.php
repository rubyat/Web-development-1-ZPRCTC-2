<?php 
namespace App\Models;
use CodeIgniter\Model;

class BatchM extends Model
{
    protected $table = 'batch';

    protected $primaryKey = 'batch_id';
	
	
	
    
    protected $allowedFields = [
		'batch_id',
		'batch_name',
	];
}