<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategory;


class PageController extends Controller
{
    public function getSubcategory($id)
    {
      $subcategories = Subcategory::where('category_id', '=', $id)->first();
      return $subcategories;
      # code...
    }
}
