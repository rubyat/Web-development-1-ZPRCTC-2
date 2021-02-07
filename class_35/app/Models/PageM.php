<?php 
namespace App\Models;
use CodeIgniter\Model;

class PageM extends Model
{
    protected $table = 'page';

    protected $primaryKey = 'page_id';
	
	
	
    
    protected $allowedFields = [
		'page_id',
		'title',
		'details',
		'image',
	];
}