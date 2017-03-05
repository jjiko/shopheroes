<?php
namespace Jiko\ShopHeroes\Http\Controllers;

use Illuminate\Database\Eloquent\Model;

interface ShopHeroesPageControllerInterface {
  public function index();
  public function show($model);
}