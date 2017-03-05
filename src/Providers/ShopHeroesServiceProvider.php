<?php namespace Jiko\ShopHeroes\Providers;

use Illuminate\Support\ServiceProvider;

class ShopHeroesServiceProvider extends ServiceProvider {

  public function register() {
    // view()->addNamespace('shopheroes', __DIR__.'/../shopheroes/src/resources/views');

    $this->app->register('Jiko\ShopHeroes\Providers\RouteServiceProvider');
  }

}