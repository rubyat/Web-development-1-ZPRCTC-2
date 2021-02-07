<?php 
namespace App\Models;
use CodeIgniter\Model;

class ProductM extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'product_id';
	
	
	
    
    protected $allowedFields = [
		'product_id',
		'title',
		'details',
		'image',
		'icon',
	];
}