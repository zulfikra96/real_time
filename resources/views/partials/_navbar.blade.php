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
      <a class="navbar-brand" href="#">Back Office</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Feed<span class="sr-only">(current)</span></a></li>
        <li><a href="{{route('chat.group')}}">Group Chat</a></li>
        <li><a href="{{route('chat.private')}}">Private Chat</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Photographer</a></li>
            <li><a href="#">HR</a></li>
            <li><a href="#">Technical Support(Pengambilan)</a></li>
            <li><a href="#">Technical Support(Pengiriman)</a></li>
            <li><a href="#">Sales & Costumer Service</a></li>
            <li><a href="#">Accounting</a></li>
            <li><a href="#">Sales Direct & Marketplace</a></li>
            <li><a href="#">Sales Sosial Media</a></li>
            <li><a href="{{url('feed/content-writer')}}">Content Writer</a></li>
            <li><a href="#">JD</a></li>
          </ul>
        </li>
      </ul>
      @if(Auth::check())
         <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->username}} <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="{{route('logout')}}">Log Out</a></li>
          </ul>
        </li>
      </ul> 
      @endif
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>