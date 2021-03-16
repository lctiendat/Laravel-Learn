@extends('layouts.master')
<table class="table table-border">
    <tr>
       <th> Name </th>
    </tr>
    @for($i=0; $i < count($catList); $i++)
    {{ "<tr><td>".$catList[$i]->name. "</td></tr>" }} <br/>
@endfor
</table>
