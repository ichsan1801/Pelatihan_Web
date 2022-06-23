<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TrOrdersModel extends Model
{
    
	public $id;
	public $created_at;
	public $updated_at;
	public $code_transaction;
	public $total_price;
	public $customers_id;
	public $status;

}