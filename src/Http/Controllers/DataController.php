<?php
namespace Jiko\ShopHeroes\Http\Controllers;

use Jiko\Http\Controllers\Controller;
use Jiko\ShopHeroes\Models\Item;
use Illuminate\Support\Facades\Cache;

class DataController extends Controller
{
  public function all()
  {
//    $r = Cache::remember('shopheroes_all_json', 120, function () {
//      return $r;
//    });
    $r = (object)[];
    $categories = ['items'];
    foreach ($categories as $category) {
      $r->{$category} = (object)[
        'title' => ucwords(str_replace('_', ' ', $category)),
        'href' => route($category . "_index"),
        'items' => []
      ];
    }

    foreach (Item::all() as $row) {
      $r->items->items[] = (object)[
        'n' => $row->name,
        'd' => $row->class . " Lv." . $row->lv,
        'l' => sprintf("/g/shop-heroes/db/item/%d-%s", $row->id, urlencode($row->name))
      ];
    }

    return response()->json($r);
  }
}