<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Salon Appointment</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <!-- <span class="navbar-toggler-icon"></span> -->
      <i class="fa-solid fa-list p-2"></i>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Manage services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Appointments</a>
          </li>
          <form action="./code.php" class="d-bottom" method="POST">
            <li class="nav-item">
              <button name="logout_admin" type="submit" class="btn btn-info">Logout</button>
            </li>
          </form>
        </ul>
      </div>
    </div>
  </div>
</nav>