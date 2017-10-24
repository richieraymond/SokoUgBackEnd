<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function admin() {
      return $this->belongsTo('App\Admin');
    }

    public function subcategories() {
      return $this->hasMany('App\Subcategory');
    }

    public function products() {
      return $this->hasManyThrough('App\Product', 'App\Subcategory');
    }
}
