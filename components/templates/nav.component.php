<?php
    function navHeader($navList){
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
  <div class="container-fluid">
    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">Lasa Local</a>

    <!-- Toggler for mobile -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-warning ms-lg-3 text-white" href="#">View Recipe</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
    }
    //Call the Function
    navHeader([]);
?>