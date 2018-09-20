@extends('layouts.master')

@section('title')
    Welcome!
@endsection


@section('content')
@include('includes.messages')
<div class="panel panel-default">
    <table class="table">

@foreach($clients as $client)
      <tr>
        <td class="middle">
          <div class="media">
            <div class="media-left">
              <a href="#">  
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading" id="nametext">{{ $client->lastname }}</h4>
              <address>
                <a href="mailto:{{ $client->email}}" id="emailtext">{{ $client->email }}</a><br>
                <a href="tel:{{ $client->phonenumber1}}" id="phone1text">{{ $client->phonenumber1}}</a><br>
                <a href="tel:{{ $client->phonenumber2}}" id="phone2text">{{ $client->phonenumber2}}</a><br>
              <a target="_blank" href="" id="commenttext">{{ $client->comment}} </a>
              </address>
            </div>
          </div>
        </td>
        <td width="100" class="middle">
          <div class="editdelete">
            <a href="{{ route('edit', ['clientid' =>  $client->id]) }}" class="btn btn-circle btn-default btn-xs" id="edit" title="Edit">
              <i class="glyphicon glyphicon-edit"></i>
            </a>
            <a href="{{ route('delete', ['client_id' => $client->id]) }}" class="btn btn-circle btn-default btn-xs" title="Delete">
              <i class="glyphicon glyphicon-remove"></i>
            </a>
             </a>
          </div>
        </td>
      </tr>
@endforeach

 </table>            
  </div>
<div class="text-center">
    <nav>
    {!! $clients->appends( Request::query() )->render() !!}
    </nav>
</div>

        <script>
    var token = '{{ Session::token() }}';
   
  
    </script>     

   
@endsection
