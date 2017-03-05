<!doctype html>
<h1>Select Table</h1>
<?php
$tables_list = \Illuminate\Support\Facades\DB::connection('shopheroes')->select('SHOW TABLES');
$tables = [];
foreach ($tables_list as $table) {
    $tables[] = $table->Tables_in_sheroes;
}
?>
<form method="post" action="maintenance/table">
    <select name="table">
        @foreach($tables as $table)
            <option>{{ $table }}</option>
        @endforeach
    </select>
    <button type="submit">Next</button>
</form>

