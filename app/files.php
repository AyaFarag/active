<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    protected $primaryKey = 'file_id';
    
    protected $table = 'files';

    protected $fillable = [
        'file_path','type','size','product_id'
    ];

    // self model method
    public function file() {
        return  $this->hasOne('App\files'); 
    }
    
    // relashion methods
    public function products() {
        return  $this->belongsTo('App\products');
    }
}
