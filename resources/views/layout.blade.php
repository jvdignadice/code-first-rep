<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href='<?php echo asset("storage/css/styles.css")?>'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<style>
.sidenav {
  height: 110%;
  width: 250px;
  position: fixed;
  margin-top: 3%;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: salmon;
  overflow-x: hidden;
  padding-top: 20px;
  opacity: .5:
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('about') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('home') }}">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route ('db') }}">LOGIN</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('db') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Drop
          </a>
          
        </li> -->
        <li class="nav-item">

        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div>
@yield('content')
</div>



<div class="sidenav">
  <a href="#about">Dashboard</a>
  <a href="#services">Services</a>
  <a href="#clients">Clients</a>
  <a href="#contact">Contact</a>
</div>
<div>
@yield('sidenav')
</div>

</body>

</html>