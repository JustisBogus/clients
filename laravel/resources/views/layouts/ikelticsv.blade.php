@extends('layouts.master')

@section('title')
    Welcome!
@endsection


@section('content')
@include('includes.messages')
<div class="form-group">
    <form action="{{route('client.import')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
    <label for="file">Pasirinkite failą</label>
    <input type="file" name="file" id="file" class="form-group">
    </div>
    
   

    <div class="form-group">
        <button class="btn btn-primary"><i class="fa fa-upload"></i>Įkelti</button>
    </div>
    </form>
</div>
@endsection