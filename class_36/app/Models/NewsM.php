<?php 
namespace App\Models;
use CodeIgniter\Model;

class NewsM extends Model
{
    protected $table = 'news';

    protected $primaryKey = 'news_id';
	
    protected $allowedFields = [
		'news_id',
		'title',
		'details',
		'image',
		'side_image',
	];
}