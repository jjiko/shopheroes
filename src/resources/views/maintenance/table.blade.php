<!doctype html>
<?php
$data = array_map('str_getcsv', file(base_path($filename)));
$columns = \Illuminate\Support\Facades\DB::connection('shopheroes')->getSchemaBuilder()->getColumnListing(Input::get('table'));
?>
@foreach($csv_columns as $csv_column)
    <select name="csv_column">
        @foreach($columns as $column)
        @endforeach
    </select>
@endforeach
