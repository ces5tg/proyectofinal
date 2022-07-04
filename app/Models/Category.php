<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class Category extends Eloquent

{
    use HasFactory;
    protected $fillable =[
        'name','slug','image'
    ];
    /* ralcion uno a MUCHOS  */
        public function products(){
            return $this->hasMany(Product::class);
        }
        public function homeSliders(){
            return $this->hasMany(HomeSlider::class);
        }
}
