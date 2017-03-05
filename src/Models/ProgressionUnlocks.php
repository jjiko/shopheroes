<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class ProgressionUnlocks extends Model
{
  protected $connection = "shopheroes";
  protected $table = "item_progression_unlocks";
  public $timestamps = false;
}