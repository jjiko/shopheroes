<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
  protected $connection = "shopheroes";
  protected $table = "quests";

  public $timestamps = false;

  public function getAnchorAttribute() {
    return str_replace(' ', '', ucwords($this->name));
  }

  public function tiers()
  {
    return QuestInfo::where('name', $this->name)->get();
  }
}