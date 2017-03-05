<h1>{{ ucwords($category->name) }}</h1>
@if($category->hasImage())
    @foreach($category->images as $image)
        <img src="//cdn.joejiko.com/img/gaming/shop-heroes/recipe-types/{{ $image }}">
    @endforeach
@endif
<div class="row">
    <div class="col-md-12">
        <ul>
            @foreach($collection as $r)
                <li>
                    <a href="/g/shop-heroes/db/item/{{ $r->id }}-{{ $r->name }}">{{ $r->name }}</a> Lv.{{ $r->lv }}
                </li>
            @endforeach
        </ul>
    </div>
</div>