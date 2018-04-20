<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quantity extends Model
{
    protected $primaryKey = 'quantity_id';
    
    protected $table = 'quantities';

    protected $fillable = [
        'name'
    ];

    // self model method
    public function quantities() {
        return  $this->hasOne('App\quantities'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->hasMany('App\products');
    }
}
