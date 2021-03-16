@extends('layouts.master')
@section('header')
    Header
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin:0 auto">
            <form action="{{ route('category.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" placeholder="Viet chi vo cho vui" class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control" name="show" id="">
                        <option value="0">Hidden</option>
                        <option value="1" selected>Show</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Send</button>
                </div>

            </form>
        </div>
    </div>
</div>
@section('footer')
    Footer
@endsection
