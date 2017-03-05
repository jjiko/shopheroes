<h1>{{ ucwords($category_name) }}</h1>
<div class="row">
    <div class="col-md-12">
        <ul>
            @foreach($collection as $r)
                <li>
                    <a href="/g/shop-heroes/db/item/{{ $r->id }}-{{ $r->name }}">{{ $r->name }}</a> Lv.{{ $r->lv }}
                    @if($r->isFromChest())
                        (<a href="/g/shop-heroes/db/recipe/{{ $r->recipe_type_slug }}">{{ $r->recipe_type }}</a>)
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>