<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class QuestInfo extends Model
{
  protected $connection = "shopheroes";
  protected $table = "quest_info";

  public $timestamps = false;
}