<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class price extends Model
{

    protected $primaryKey = 'price_id';
    
    protected $table = 'prices';

    protected $fillable = [
        'fixed_price','sall_price'
    ];

    // self model method
    public function price() {
        return  $this->belongsTo('App\prices'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->belongsTo('App\products');
    }
}
