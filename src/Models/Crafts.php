<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class Crafts extends Model
{
  protected $connection = "shopheroes";
  protected $table = "item_crafts";

  public $timestamps = false;
}