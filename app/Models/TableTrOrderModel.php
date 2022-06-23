<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class TableTrOrderModel extends Model
{
    
	public $id;
	public $created_at;
	public $updated_at;
	public $code_transaction;
	public $total_price;
	public $customer_id;
	public $status;

}