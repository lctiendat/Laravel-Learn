@extends('layouts.master')
<table class="table table-border text-center">

    <tr>
        <th>#ID </th>
        <th>{{ trans('language.category.index.name') }} </th>
        <th>{{ trans('language.category.index.action') }} </th>
    </th>
    </tr>
    @foreach ($catList as $cat)
        <tr>
            <td>
                {{ $cat->id }}
            </td>
            <td>
                <a class="nav-link" href="/category/{{ $cat->id }}"> {{ $cat->name }}</a>
            </td>
            <td>
                {{-- <form action="{{ route('category.destroy', ['id' => $catList->id ])}}" method="POST">
                    @csrf
                    @method('DELETE');
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                  </form> --}}
                {{-- <a href="{{ route('category.edit',['id' => $catList->id]) }}"> <button class="btn btn-success">Update</button> </a> --}}
            </td>
        </tr>
    @endforeach


</table>
