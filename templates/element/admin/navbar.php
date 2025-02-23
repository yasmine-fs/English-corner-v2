  <!--Main Navigation-->
  <header>
      <!-- Sidenav -->
      <div id="sidenav-1" class="sidenav" role="navigation" data-hidden="false" data-accordion="true">

          <a class="ripple d-flex py-4 custom-header-logo justify-content-center" href="#!" data-ripple-color="primary">
              <span style="color: #0088ff; font-family: 'Arial', sans-serif;">Up</span>Learn.
          </a>

          <ul class="sidenav-menu">
              <li class="sidenav-item">
                  <a class="sidenav-link" href="">
                      <i class="fas fa-chart-area pr-3"></i><span>Dashboard</span></a>
              </li>
              <li class="sidenav-item">
                  <a class="sidenav-link"><i class="fas fa-user pr-3"></i><span>Users</span></a>
                  <ul class="sidenav-collapse">
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Users List', ['controller' => 'Users', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New User', ['controller' => 'Users', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                  </ul>
              </li>
              <li class="sidenav-item">
                  <a class="sidenav-link"><i class="fas fa-book pr-3"></i><span>Courses</span></a>
                  <ul class="sidenav-collapse">
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Courses List', ['controller' => 'Courses', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New Course', ['controller' => 'Courses', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Categories List', ['controller' => 'Coursecategories', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New Category', ['controller' => 'Coursecategories', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                  </ul>
              </li>
              <li class="sidenav-item">
                  <a class="sidenav-link"><i class="fas fa-question pr-3"></i><span>Quizz</span></a>
                  <ul class="sidenav-collapse">
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Quizz List', ['controller' => 'Quizzes', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New Quizz', ['controller' => 'Quizzes', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                  </ul>
              </li>
              <li class="sidenav-item">
                  <a class="sidenav-link"><i class="fas fa-star pr-3"></i><span>Reviews</span></a>
                  <ul class="sidenav-collapse">
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Reviews List', ['controller' => 'Reviews', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New Review', ['controller' => 'Reviews', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                  </ul>
              </li>
              <li class="sidenav-item">
                  <a class="sidenav-link"><i class="fas fa- pr-3"></i><span>Progress</span></a>
                  <ul class="sidenav-collapse">
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Progress List', ['controller' => 'Progress', 'action' => 'index'],['class'=>'sidenav-link']); ?>
                      </li>
                      <li class="sidenav-item">
                          <?php echo $this->Html->link('Add New Progress', ['controller' => 'Progress', 'action' => 'add'],['class'=>'sidenav-link']); ?>
                      </li>
                  </ul>
              </li>

      <!-- Sidenav -->

      <!-- Navbar -->
      <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <!-- Container wrapper -->
          <div class="container-fluid">
              <!-- Toggler -->
              <button data-toggle="sidenav" data-target="#sidenav-1" class="btn shadow-0 p-0 mr-3 d-block d-xxl-none"
                  aria-controls="#sidenav-1" aria-haspopup="true">
                  <i class="fas fa-bars fa-lg"></i>
              </button>

              <!-- Search form -->
              <form class="d-none d-md-flex input-group w-auto my-auto">
                  <input autocomplete="off" type="search" class="form-control rounded"
                      placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
                  <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
              </form>

              <!-- Right links -->
              <ul class="navbar-nav ml-auto d-flex flex-row">
                  <!-- Avatar -->
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                          id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                          <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle"
                              height="22" alt="" loading="lazy" />
                      </a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <li><a class="dropdown-item" href="#">My profile</a></li>
                          <li><?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'],['class'=>'dropdown-item']); ?>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
          <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
  </header>
  <!--Main Navigation-->




  <style>
.custom-header-logo {
    color: black;
    font-size: 28px;
    font-weight: 700;
}
  </style>