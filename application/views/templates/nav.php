<!-- Navbar View -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-5">
  <div class="pr-5 mr-5">
  <!-- Brand with svg logos links back to homepage -->
  <a class="navbar-brand perm-marker" href="<?= base_url() ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
      <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
    Recipe Book
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
      <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
    </svg>
  </a>
  </div>
  <!-- bootstrap burger -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Main nav for favorites/insert/modify -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo (uri_string() == 'favorites') ? 'active-link': '';?>">
        <a class="nav-link hotlink" href="<?= site_url('favorites') ?>">Favorites</a>
      </li>
      <!-- insert and modify are only visible to admin  -->
      <!-- TODO:: limit insert and modify for database is_admin -->
      <?php if($this->session->userdata('authenticated') == '1'): ?>
      <li class="nav-item <?php echo (uri_string() == 'add_recipe') ? 'active-link': '';?>">
        <a class="nav-link hotlink" href="<?= site_url('add_recipe') ?>">Add Recipe</a>
      </li>
      <li class="nav-item <?php echo (uri_string() == 'edit_recipe') ? 'active-link': '';?>">
        <a class="nav-link hotlink" href="<?= site_url('edit_recipe') ?>">Edit Recipe</a>
      </li>
      <?php endif; ?>
    </ul>
    <!-- Display session status message for successful log out -->
    <ul class="navbar-nav pr-5">
      <li class="nav-item text-info"><?= $this->session->flashdata('status') ?></li>
    </ul>
    <!-- Show user name dropdown instead of login/register if user is logged in -->
    <?php if($this->session->userdata('authenticated') == '1'): ?>
    <ul class="navbar-nav pr-5">
      <li class="nav-item dropdown px-2">
        <a class="nav-link dropdown-toggle" href="<?= site_url('login') ?>" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          <?= $this->session->userdata['auth_user'] ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
        </div>
      </li>
    </ul>
    <?php else: ?>
    <ul class="navbar-nav">
      <li class="nav-item active">
      <a href="<?= site_url('login') ?>" class="nav-link hotlink">Login</a> 
      </li>
      <li class="nav-item active">
        <a href="<?= site_url('register') ?>" class="nav-link hotlink">Register</a> 
      </li>
    </ul>
    <?php endif ?>
    
  </div>
</nav>