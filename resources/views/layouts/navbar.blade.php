<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <div class="left col-5">
            <a class="navbar-brand text-white" href="#">Petrous</a>
        </div>

        <div class="right col-7">
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item mr-5{{ request()->is('/') ? ' active' : '' }}">
                  <a class="nav-link text-white" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-5{{ request()->is('destination') ? ' active' : '' }}">
                  <a class="nav-link text-white" href="/destination">Destination</a>
                </li>
                <li class="nav-item mr-5{{ request()->is('about') ? ' active' : '' }}">
                  <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item mr-5{{ request()->is('contact') ? ' active' : '' }}">
                  <a class="nav-link text-white" href="#">Contact</a>
                </li>
                <li class="nav-item mr-5">
                  <a href="/login" class="btn btn-primary">Login</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>