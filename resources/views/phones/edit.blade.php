@section('title')
Edit phone    
@endsection

@extends('layouts.master')

@section('main')

<h1 class="display-5 m-3">Edit phone</h1>
<div class="col-6 offset-2">
    <form action="/phones/{{$phone->id}}" method="POST">
        @csrf
        @method('put')

        <input type="text" name="name" class="form-control" value="{{$phone->name}}" /> <br> <br>
        <input type="text" name="brand" class="form-control" value="{{$phone->brand}}" /> <br> <br>
        <input type="number" name="price" class="form-control" value="{{$phone->price}}" /> <br> <br>
        <button type="submit"  class="form-control btn btn-primary">Save</button>

    </form>
</div>
    
@endsection