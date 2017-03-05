<?php
namespace Jiko\ShopHeroes\Http\Controllers;

use Jiko\ShopHeroes\Models\Item;
use Jiko\ShopHeroes\Models\Recipe;

class ItemController extends ShopHeroesDbController
{
  public function show($model)
  {
    $model = Item::where('id', $model)->get();
    $unlocked_by = [];
    if ($unlock = $model->first()->crafts()) {
      $unlocked_by[] = $unlock->unlock_name;
    }
    $this->page->title = sprintf("%s - Shop Heroes Items", $model->first()->name);
    $this->setContent('shopheroes::item.show', ['r' => $model]);
  }

  public function category_lv($range)
  {
    $collection = Item::where('lv', '<=', (int)$range)
      ->where('lv', '>=', (int)$range - 9)
      ->orderBy('class', 'asc')
      ->orderBy('lv', 'asc')
      ->get();
    if ($collection->count()) {
      $this->setContent('shopheroes::item.category-grouped', [
        'category_name' => 'Items Lv.' . ((int)$range - 9) . ' - ' . $range,
        'collection' => $collection->groupBy('class')
      ]);
    } else {
      abort(404);
    }
  }

  public function category_class($class)
  {
    if ($collection = Item::where('class', $class)->get()) {
      $this->setContent('shopheroes::item.category', [
        'category_name' => $class,
        'collection' => $collection
      ]);
    } else {
      abort(404);
    }
  }

  public function category_recipe($recipe_slug)
  {
    if ($collection = Item::where('recipe_type_slug', $recipe_slug)->orderBy('lv', 'asc')->get()) {
      $this->setContent('shopheroes::item.recipe', [
        'category' => Recipe::where('name', $collection->first()->recipe_type)->first(),
        'collection' => $collection
      ]);
    } else {
      abort(404);
    }
  }

  public function index()
  {
    $this->page->title = "Items - Shop Heroes Database";
  }
}