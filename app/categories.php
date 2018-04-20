<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'category_id';
    
    protected $table = 'categories';

    protected $fillable = [
        'name'
    ];

    // self relation method
    public function categories() {
        return  $this->hasMany('App\categories');
    }    

    // relashion methods
    public function products() {
        return  $this->hasMany('App\products'); 
    }
}
