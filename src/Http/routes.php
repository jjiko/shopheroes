<?php
Route::bind('shdb_category', function($value){
  return \Jiko\ShopHeroes\Models\Item::where('class', $value)->get();
});

Route::group(['prefix' => '/g/shop-heroes/db'], function () {
  Route::group(['prefix' => 'maintenance'], function(){
    Route::get('item-ids', function(){
      $items = Item::all();
      foreach($items as $item) {

      }
    });
    Route::get('workers', function(){
      return 'disabled';

      $data = array_map('str_getcsv', file(__DIR__ . '/../storage/data/workers.csv'));
      $columns = $data[0];
      unset($data[0]);

      $formatted = [];
      foreach ($data as $idx => $row) {
        $formatted[] = [
          'name' => $row[5],
          'tier' => $row[0],
          'hire_cost' => $row[1],
          'lv_max' => $row[2],
          'points_per_lv' => $row[3],
          'mastery_base' => $row[4],
          'skills' => json_encode([$row[6],$row[7],$row[8],$row[9]]),
          'unlocked_by' => $row[10]
        ];
      }
      foreach($formatted as $worker) {
        \Jiko\ShopHeroes\Models\Worker::create($worker);
      }
      return 'complete';
    });
    Route::post('table', function(){
      return view('shopheroes::maintenance.table');
    });
    Route::get('/', function(){
      return view('shopheroes::maintenance.index');
    });
  });
  Route::get('all.json', 'DataController@all');

  Route::get('workers', ['as' => 'workers_index', 'uses' => 'ShopHeroesDbController@workers']);
  Route::get('quests', ['as' => 'quests_index', 'uses' => 'ShopHeroesDbController@quests']);

  Route::get('items/{shdb_class}', ['as' => 'items_category_index', 'uses' => 'ItemController@category_class']);
  Route::get('recipe/{shdb_recipe}', ['as' => 'items_recipe_index', 'uses' => 'ItemController@category_recipe']);
  Route::get('items', ['as' => 'items_index', 'uses' => 'ItemController@index']);
  Route::get('items/lv/{range}', ['as' => 'items_lv_range', 'uses' => 'ItemController@category_lv']);
  Route::get('item/{item_id}-{slug}', 'ItemController@show');

  Route::get('components', ['as' => 'components_index'], function () {
    return '';
  });

  Route::get('crafts', ['as' => 'crafts_index'], function () {
    return '';
  });

  Route::get('recipes', ['as' => 'recipes_index'], function () {
    return '';
  });

  Route::get('/', ['as' => 'shopheroesdb', 'uses' => 'ShopHeroesDbController@index']);
});