<h1>Workers</h1>
@foreach($collection as $tier)
    <?php $tier_meta = $tier->first(); ?>
    <h2>Tier {{ $tier_meta->tier }}</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Hire Cost</th>
            <th>Max Lv.</th>
            <th>Points/Lv.</th>
            <th>Mastery Base</th>
        </tr>
        </thead>
        <tr>
            <td>{{ $tier_meta->hire_cost }}</td>
            <td>{{ $tier_meta->lv_max }}</td>
            <td>{{ $tier_meta->points_per_lv }}</td>
            <td>{{ $tier_meta->mastery_base }}</td>
        </tr>
    </table>
    <div class="row">
        @foreach($tier as $worker)
            <div class="col-sm-2">
                @if($worker->hasImage())
                    @foreach($worker->images as $image)
                        <img src="//cdn.joejiko.com/img/gaming/shop-heroes/workers/{{ $image }}"
                             alt="{{ $worker->name }}">
                    @endforeach
                @else
                    <img src="//cdn.joejiko.com/img/gaming/shop-heroes/workers/{{ $worker->name }}.png"
                         alt="{{ $worker->name }}">
                @endif
                <h3>{{ $worker->name }}</h3>
                <p><strong>{{ $worker->unlocked_by }}</strong></p>
                <?php $worker_skill = json_decode($worker->skills); ?>
                @if(is_array($worker_skill))
                    <ul>
                        @foreach($worker_skill as $skill)
                            @if(!empty($skill))
                                <li>{{ $skill }}</li>
                            @endif
                        @endforeach
                    </ul>
                @endif
            </div>
        @endforeach
    </div>
@endforeach