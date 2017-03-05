@foreach($r as $item)
    <h1>
        {{ $item->name }}
        @if($item->isFromChest())
            (<a href="/g/shop-heroes/db/recipe/{{ $item->recipe_type_slug }}">{{ $item->recipe_type }}</a>)
        @endif
    </h1>
    <h2>{{ ucfirst($item->class) }} Lv.{{ $item->lv }}</h2>
    @if($item->isUnlockable())
        <h3>Unlocked by <a
                    href="/g/shop-heroes/db/item/{{ $item->unlocked_by()->id }}-{{ $item->unlocked_by()->slug }}">{{ $item->unlocked_by()->name  }}</a>
        </h3>
    @endif
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Base Power</th>
            <th>Sale XP</th>
            <th>Sale Price</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $item->base_power }}</td>
            <td>{{ $item->sale_xp }}</td>
            <td>{{ $item->sale_price }}</td>
        </tr>
    </table>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/iron_icon.png" alt="Iron"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/wood_icon.png" alt="Wood"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/leather_icon.png" alt="Leather"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/herb_icon.png" alt="Herb"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/steel_icon.png" alt="Steel"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/hardwood_icon.png" alt="Hardwood"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/fabric_icon.png" alt="Fabric"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/oil_icon.png" alt="Oil"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/mana_icon.png" alt="Mana"></th>
            <th><img src="//cdn.joejiko.com/img/gaming/shop-heroes/jewel_icon.png" alt="Jewels"></th>
        </tr>
        </thead>
        <tr>
            <td>{{ $item->iron }}</td>
            <td>{{ $item->wood }}</td>
            <td>{{ $item->leather }}</td>
            <td>{{ $item->herb }}</td>
            <td>{{ $item->steel }}</td>
            <td>{{ $item->hardwood }}</td>
            <td>{{ $item->fabric }}</td>
            <td>{{ $item->oil }}</td>
            <td>{{ $item->mana }}</td>
            <td>{{ $item->jewels }}</td>
        </tr>
    </table>
    @if($item->components()->count())
        <h3>Components</h3>
        <ul class="list-inline">
            @foreach($item->components() as $component)
                <li class="list-inline-item">{{ $component->component_name }}</li>
            @endforeach
        </ul>
    @endif

    <?php $progression = $item->progressionUnlocks(); ?>
    <h3>Progression unlocks</h3>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $progression->progression_1 }}</td>
            <td>{{ $progression->progression_2 }}</td>
            <td>{{ $progression->progression_3 }}</td>
            <td>{{ $progression->progression_4 }}</td>
            <td>{{ $progression->progression_5 }}</td>
        </tr>
    </table>

    <h3>Related Items</h3>
    <div class="row">
        <div class="col-sm-6">
            <p>By Level:</p>
            <ul class="list-inline">
                @foreach($item->related_level() as $related_item)
                    <li class="list-inline-item"><a
                                href="/g/shop-heroes/db/item/{{ $related_item->id }}-{{ urlencode($related_item->name) }}">{{ $related_item->name }}
                            ({{ $related_item->class }})</a></li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-6">
            <p>By Class:</p>
            <ul class="list-inline">
                @foreach($item->related_class() as $related_item)
                    <li class="list-inline-item"><a
                                href="/g/shop-heroes/db/item/{{ $related_item->id }}-{{ urlencode($related_item->name) }}">{{ $related_item->name }}
                            Lv.{{ $related_item->lv }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endforeach