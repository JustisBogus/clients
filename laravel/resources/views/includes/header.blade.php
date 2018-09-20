<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{route('clients') }}">Visma Užduotis</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    <ul class="nav navbar-nav navbar-right">

    <li class="nav-item dropdown">                        
   
    <li><a href="{{route('form') }}">Naujas Klientas</a></li>
    <li><a href="{{route('import') }}">Įkelti iš .csv failo</a></li>
    <li>   <form action="{{ route('search') }}" method="get" class="navbar-form navbar-right" role="search">
  
      <div class="input-group">
          <input type="text" name="search" id="search" class="form-control" placeholder="Paieška">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
            <input type="hidden" value="{{Session::token() }}" name="_token">
      </div> </form></li>
  
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<header>