<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class ItemComponent extends Model
{
  protected $connection = "shopheroes";
  protected $table = "item_components";

  public $timestamps = false;
}