<?php
namespace App\Repositories;

use App\Models\ProductsModel;

class Products extends ProductsModel
{
    public static function getAll() {
        if(array_key_exists('search',$_GET)) {
            $search = $_GET['search'];

        }
        $data= Product::table();

        if(isset($search)) {
            $data = $data->where('name','like','%'.$search.'%');
        }
        
        $data=$data->get();
        return $data;
        
    }
    // TODO : Make your own query methods

}