<nav class="navbar navbar-default navbar-fixed-top navbar-fixed-top-30">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-left: 109px;">
            <div class="navbar-right">
                <span class="alert alert-danger">If there's something missing let me know &rarr;</span>
                <button id="feedback" data-toggle="modal" data-target="#feedbackModal"
                        class="btn btn-default btn-warning navbar-btn">
                    Feedback <i class="material-icons" style="vertical-align:middle">feedback</i>
                </button>
            </div>
            <ul class="nav navbar-nav" style="text-transform: capitalize">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Items by class <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach(\Jiko\ShopHeroes\Models\Item::select('class')->distinct()->get() as $item)
                            <li><a class=""
                                   href="/g/shop-heroes/db/items/{{ $item->class }}">{{ $item->class }}</a>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Items by level <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class=""
                               href="/g/shop-heroes/db/items/lv/10">1-10</a></li>
                        <li><a class=""
                               href="/g/shop-heroes/db/items/lv/20">11-20</a></li>
                        <li><a class=""
                               href="/g/shop-heroes/db/items/lv/30">21-30</a></li>
                        <li><a class=""
                               href="/g/shop-heroes/db/items/lv/40">31-40</a></li>
                        <li><a class=""
                               href="/g/shop-heroes/db/items/lv/50">41-50</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Chests & Packs <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @foreach(\Jiko\ShopHeroes\Models\Item::select('recipe_type', 'recipe_type_slug')->distinct()->get() as $item)
                            <li>
                                <a class=""
                                   href="/g/shop-heroes/db/recipe/{{ $item->recipe_type_slug }}">{{ $item->recipe_type }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">More <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="" href="/g/shop-heroes/db/heroes">Heroes</a>
                            <a class="" href="/g/shop-heroes/db/quests">Quests</a>
                            <a class="" href="/g/shop-heroes/db/shop-upgrades">Shop Upgrades</a>
                            <a class="" href="/g/shop-heroes/db/workers">Workers</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>