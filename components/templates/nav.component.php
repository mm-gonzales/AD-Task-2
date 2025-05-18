<?php
    function navHeader($navList){
?>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent py-3 px-5" style="position: absolute; top: 0; width: 100%; z-index: 1000;">
  <a class="navbar-brand fw-bold text-white pe-4" href="#">Lasa Local</a>
  <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
      <li class="nav-item">
        <a class="nav-link active text-white px-3" href="#">Home</a>
      </li>
    </ul>
    <a href="#" class="btn btn-warning text-white fw-semibold px-4">View Recipe</a>
  </div>
</nav>

<?php
    }
    //Call the Function
    navHeader([]);
?>