<?php

  use mvc\core\auth\Auth;

  $URI = $_SERVER['REQUEST_URI'];
  $pos = strpos("?", $URI);
  $URI = $pos === FALSE ? $URI : substr($URI, 0, $pos);
  $current_span = 'bg-dark text-light rounded';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
  <a class="navbar-brand nav-link <?php if ($URI == "/") echo $current_span; ?>" href="/">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <?php if(!Auth::checkUser()) { ?>
        <li class="nav-item">
          <a class="nav-link <?php if ($URI == "/login") echo $current_span; ?>" href="/login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($URI == "/sign_up") echo $current_span; ?>" href="/sign_up">Register</a>
        </li>
      <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link <?php if ($URI == "/dashboard") echo $current_span; ?>" href="/dashboard">Dashboard</a>
        </li>
      <?php } ?>
      <li class="nav-item">
        <a class="nav-link <?php if ($URI == "/upload") echo $current_span; ?>" href="/upload">Upload</a>
      </li>
      <?php if(Auth::checkUser()) { ?>
        <li class="nav-item">
          <a class="nav-link bg-danger text-light rounded mx-3" href="/logout">Logout</a>
        </li>
      <?php } ?>
    </ul>
  </div>
</nav>