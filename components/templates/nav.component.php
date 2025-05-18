<?php
    function navHeader($navList){
?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3 px-5" style="position: absolute; top: 0; width: 100%; z-index: 1000;">
  <a class="navbar-brand fw-bold text-white pe-4" href="#">Lasa Local</a>

  <!-- Toggler for Offcanvas -->
  <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Normal Nav (Desktop Only) -->
  <div class="d-none d-lg-flex ms-auto align-items-center">
    <ul class="navbar-nav mb-0 me-3">
      <li class="nav-item">
        <a class="nav-link active text-white px-3" href="#">Home</a>
      </li>
    </ul>
    <a href="#" class="btn btn-warning text-white fw-semibold px-4">View Recipe</a>
  </div>
</nav>

<!-- Offcanvas Sidebar (Mobile Only) -->
<div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasNavbar">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title fw-bold" id="offcanvasNavbarLabel">Menu</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active text-white" href="#">Home</a>
      </li>
    </ul>
    <a href="#" class="btn btn-warning text-white fw-semibold mt-3 px-4">View Recipe</a>
  </div>
</div>



<?php
    }
    //Call the Function
    navHeader([]);
?>