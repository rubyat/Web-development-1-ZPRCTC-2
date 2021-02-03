<?php 
namespace App\Models;
use CodeIgniter\Model;

class SliderM extends Model
{
    protected $table = 'slider';

    protected $primaryKey = 'slider_id';
	
	
	
    
    protected $allowedFields = [
		'slider_id',
		'title',
		'image',
	];
}