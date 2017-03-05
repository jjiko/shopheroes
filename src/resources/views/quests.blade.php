<ul class="nav nav-pills">
    <li role="presentation" class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
           aria-expanded="false">
            Quests <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            @foreach($collection as $quest)
                <li><a href="#{{ $quest->anchor }}">{{ ucwords($quest->name) }}</a></li>
            @endforeach
        </ul>
    </li>
</ul>
<div class="col-md-8">
    @foreach($collection as $quest)
        <a id="{{ $quest->anchor }}"></a>

        <h2>{{ ucwords($quest->name) }}</h2>
        <ul class="list-inline">
            <li>Time: {{ $quest->quest_time }}</li>
            <li>Required Group Power: {{ $quest->req_group_power }}</li>
            <li>Reward type: {{ ucfirst($quest->reward_type) }}</li>
        </ul>

        <table class="table table-condensed">
            <thead>
            <tr>
                <td>Tier</td>
                <td>Loot Reward</td>
                <td>Recommended Power</td>
                <td>Explorations</td>
                <td>XP Reward</td>
                <td>Boss Power</td>
                <td>Boss XP</td>
            </tr>
            </thead>
            @foreach($quest->tiers() as $tier)
                <tr>
                    <td>{{ $tier->tier }}</td>
                    <td>{{ $tier->loot_reward }}</td>
                    <td>{{ $tier->rec_power }}</td>
                    <td>{{ $tier->explorations }}</td>
                    <td>{{ $tier->xp }}</td>
                    <td>{{ $tier->boss_power }}</td>
                    <td>{{ $tier->boss_xp }}</td>
                </tr>
            @endforeach
        </table>
    @endforeach
</div>
<div class="col-md-4">
    <h2>Special Loot</h2>
    <table class="table table-compact">
        <thead>
        <tr>
            <th>Loot Type</th>
            <th>Party Size</th>
        </tr>
        </thead>
        <tr>
            <td>Gold</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Chests</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Equipment</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Bags</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Double XP</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Gems</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Blueprint Fragments</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Repair All</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Heal All</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Keys</td>
            <td>6</td>
        </tr>
    </table>

    <h2>Loot bags</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Bag Type</th>
            <th>Quest Tier</th>
        </tr>
        </thead>
        <tr>
            <td>Treasure Pouch</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Mysterious bag</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Wondrous bag</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Champion bag</td>
            <td>Arena only</td>
        </tr>
    </table>
</div>