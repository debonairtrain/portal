<div class="header">
<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/images/logo.png" alt="Logo">
</a>
<a href="dashboard" class="logo logo-small">
<img src="assets/images/logo.png" alt="Logo" width="30" height="30">
</a>
</div>
<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>
<div class="top-nav-search">
<form>
<input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><?php echo $admin_images; ?></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
  <?php echo $admin_images; ?>
</div>
<div class="user-text">
<h6><?php echo $admin_full_name; ?></h6>
<p class="text-muted mb-0"><?php echo $designation; ?></p>
</div>
</div>
<a class="dropdown-item" href="dashboard?hubs=profile">My Profile</a>
<a class="dropdown-item" href="logout">Logout</a>
</div>
</li>

</ul>

</div>
