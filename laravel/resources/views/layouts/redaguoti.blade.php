@extends ('layouts.master')

@section('content')

@include('includes.messages')
<form action="{{route('client.edit' ,[ 'clientidnew' => $clients->id ] )}}" method="post"> 

 <div class="form-group {{ $errors->has('newname') ? 'has-error' : ''}}">
            <label for="name" class="control-label col-md-3">Pavardė</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="newname" id="newname"  value="{{ $clients->lastname }}" >
            </div>
          </div>

          

          <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="newemail" class="control-label col-md-3">E-Paštas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="email" id="email" value="{{ $clients->email }}" >
            </div>
          </div>

          <div class="form-group {{ $errors->has('newphone1') ? 'has-error' : ''}}">
            <label for="phone1" class="control-label col-md-3">Mob. Telefonas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="newphone1" id="newphone1" value="{{ $clients->phonenumber1 }}"  >
            </div>
          </div>

          <div class="form-group {{ $errors->has('newphone2') ? 'has-error' : ''}}">
            <label for="phone2" class="control-label col-md-3">Namų Telefonas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="newphone2" id="newphone2" value="{{ $clients->phonenumber2 }}" >
            </div>
          </div>
          <div class="form-group {{ $errors->has('newcomment') ? 'has-error' : ''}}">
            <label for="comment" class="control-label col-md-3">Komentaras</label>
            <div class="col-md-8">
            <textarea class="form-control"  type="text" name="newcomment" id="newcomment" value=""  >{{ $clients->comment }}</textarea>
            </div>
          </div>
          
            
          </div>
          
          </div>
        </div>
        </div>
  <div class="panel-footer">
    <div class="row">
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-offset-3 col-md-6">
            <button type="submit" class="btn btn-primary">Išsaugoti</button>
            <input type="hidden" value="{{Session::token() }}" name="_token">
            <a href="{{route('clients')}}" class="btn btn-default">Atšaukti</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

@endsection