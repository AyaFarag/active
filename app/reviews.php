<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
    protected $primaryKey = 'review_id';
    
    protected $table = 'reviews';

    protected $fillable = [
        'stars','comment','product_id'
    ];

    // self model method
    public function review() {
        return  $this->hasOne('App\reviews'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->belongsTo('App\products' , 'fk_product_id');
    }
}
