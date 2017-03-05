<h1>{{ ucwords($category_name) }}</h1>
<div class="row">
    <div class="col-md-12">
        <?php $i = 1; ?>
        @foreach($collection as $group_name => $group)
            <?php if(($i % 3) == 0 || $i == 1) { ?>
            <div class="row">
                <?php } ?>
                <div class="col-md-4">
                    {{ ucfirst($group_name) }}
                    <ul>
                        @foreach($group as $r)
                            <li>
                                <a href="/g/shop-heroes/db/item/{{ $r->id }}-{{ $r->name }}">{{ $r->name }}</a>
                                Lv.{{ $r->lv }}
                                @if($r->isFromChest())
                                    (
                                    <a href="/g/shop-heroes/db/recipe/{{ $r->recipe_type_slug }}">{{ $r->recipe_type }}</a>
                                    )
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>
                <?php if($i !==1 && ($i % 3) == 0) { ?>
            </div>
            <?php } ?>
            <?php $i++; ?>
        @endforeach
    </div>
</div>