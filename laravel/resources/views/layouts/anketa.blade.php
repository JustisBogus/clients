@extends ('layouts.master')

@section('content')
@include('includes.messages')
<form action="{{ route('client.create') }}" method="post"> 
 <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
            <label for="name" class="control-label col-md-3">Pavardė</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="name" id="name" value="{{ Request::old('name') }}">
            </div>
          </div>

          

          <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
            <label for="email" class="control-label col-md-3">E-Paštas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="email" id="email" value="{{ Request::old('email') }}"  >
            </div>
          </div>

          <div class="form-group {{ $errors->has('phone1') ? 'has-error' : ''}}">
            <label for="phone1" class="control-label col-md-3">Mob. Telefonas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="phone1" id="phone1" value="{{ Request::old('phone1') }}" >
            </div>
          </div>

          <div class="form-group {{ $errors->has('phone2') ? 'has-error' : ''}}">
            <label for="phone2" class="control-label col-md-3">Namų Telefonas</label>
            <div class="col-md-8">
            <input class="form-control"  type="text" name="phone2" id="phone2" value="{{ Request::old('phone2') }}" >
            </div>
          </div>
          <div class="form-group {{ $errors->has('comment') ? 'has-error' : ''}}">
            <label for="comment" class="control-label col-md-3">Komentarai</label>
            <div class="col-md-8">
            <textarea class="form-control"  type="text" name="comment" id="comment"  >{{ Request::old('comment') }}</textarea>
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