<?php

namespace Jiko\ShopHeroes\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
  protected $connection = "shopheroes";
  protected $table = "item";

  public $timestamps = false;

  public function isFromChest()
  {
    return is_null($this->recipe_type) ? false : true;
  }

  public function crafts()
  {
    return Crafts::where('name', $this->name)->first();
  }

  public function isUnlockable()
  {
    return $this::where('name', Crafts::where('name', $this->name)->first()->unlock_name)->first();
  }

  public function unlocked_by()
  {
    return $this::where('name', Crafts::where('name', $this->name)->first()->unlock_name)->first();
  }

  public function progressionUnlocks()
  {
    return ProgressionUnlocks::where('item_name', $this->name)->first();
  }

  public function related_level()
  {
    return Item::where('lv', $this->lv)->where('name', '<>', $this->name)->get();
  }

  public function related_class()
  {
    return Item::where('lv', '>', $this->lv)->where('class', $this->class)->limit(5)->get();
  }

  public function components()
  {
    return ItemComponent::where('item_name', $this->name)->get();
  }
}