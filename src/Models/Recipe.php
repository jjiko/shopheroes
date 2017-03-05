<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $connection = "shopheroes";
  protected $table = "recipe_types";

  public $timestamps = false;

  public function hasImage()
  {
    return count($this->images);
  }

  public function getImagesAttribute($value)
  {
    return json_decode($value);
  }
}