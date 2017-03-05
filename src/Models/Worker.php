<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
  protected $connection = "shopheroes";
  protected $table = "workers";

  public $timestamps = false;

  public $guarded = ['id'];

  public function hasImage()
  {
    return count($this->images);
  }

  public function getImagesAttribute($value)
  {
    return json_decode($value);
  }
}