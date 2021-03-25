@section('title')
    New phone
@endsection

@extends('layouts.master')

@section('main')
    <h1 class="display-5 m-3">Add new phone</h1> <br>
    <div class="col-6 offset-2">
        <form action="/phones" method="POST">
            @csrf
            
        <input type="text" name="name" class="form-control" placeholder="Unesite ime" /> <br> <br>
        <input type="text" name="brand" class="form-control" placeholder="Unesite brand" /> <br> <br>
        <input type="number" name="price" class="form-control" placeholder="Unesite cenu" /> <br> <br>
        <button type="submit" class="form-control btn btn-primary">Save</button>

        
        </form>
    </div>
@endsection