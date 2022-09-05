
<nav class="navbar navbar-expand-lg navbar-success border border-light bg-success">
  <div class="container-fluid">
    <a class="navbar-brand px-2 text-light" href="#">Resume Builder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item   text-center px-2">
          <a class="nav-link text-light" href="#" id="navbarDropdownMenuLink" role="button" >
            Home
          </a>
        </li>
        <li class="nav-item  text-center px-2">
          <a class="nav-link text-light" href="#" id="navbarDropdownMenuLink" role="button" >
          
    Hello <?php 
session_start();echo $_SESSION["fname"]; ?> 
</a>
        </li>
        <li class="nav-item  text-center px-2">
    <a href="logout.php"  class="text-light nav-link text-success fw-bolder" id="navbarDropdownMenuLink" role="button" >Logout</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
