<?php 
  use App\Http\Controllers\ProductController;
  $total = ProductController::cartItem();
?>
<nav class="navbar navbar-fixed-top navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link text-white" href="#">Orders</a>
          <form action="/search" class="form-inline my-2 my-lg-0">
          <input id="navBarSearchForm" class="form-control mr-sm-2" name="query">
          <button class="btn btn-outline-success my-2 my-sm-0 text-white" type="submit">Search</button>
          </form>
      </div>
    </div>
    @if(Session::has('user'))
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Welcome | {{Session::get('user')['name']}}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </li>
          </ul>
        </div>
    <a class="nav-item nav-link align-right text-white" href="/cartlist">Cart ({{$total}})</a>
    @else
    <a class="nav-item nav-link align-right text-white" href="/login">Sign in</a>
    @endif
</nav>
