<?php

namespace Jiko\ShopHeroes\Http\Controllers;

use Jiko\Http\Controllers\Controller;
use Jiko\ShopHeroes\Models\Worker;
use Jiko\ShopHeroes\Models\Quest;

class ShopHeroesDbController extends Controller implements ShopHeroesPageControllerInterface
{
  protected $layout = "shopheroes::layout";

  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->page->title = "Shop Heroes Database";
  }

  public function show($model)
  {
    $this->page->title = "{$model->name} - Shop Heroes";
  }

  public function workers()
  {
    $collection = Worker::all()->groupBy('tier');
    $this->setContent('shopheroes::workers', [
      'collection' => $collection
    ]);
  }

  public function quests()
  {
    $collection = Quest::all();
    $this->setContent('shopheroes::quests', [
      'collection' => $collection
    ]);
  }
}