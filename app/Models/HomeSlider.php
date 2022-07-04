<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
class HomeSlider extends Eloquent

{
    use HasFactory;

    protected $fillable =[
        'title','subtitle','description','image','status','category_id'
    ];
    /* relacion uno a muchos inversa */
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
