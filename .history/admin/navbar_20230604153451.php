<?php if ($_SESSION['login_type'] == 1) ?>
<nav id="sidebar" class='mx-lt-5'>
	<div class="sidebar-list">

		<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i
					class="fa fa-home"></i></span> Home</a>

		<a href="index.php?page=applications" class="nav-item nav-applications"><span class='icon-field'><i
					class="fa fa-user-tie"></i></span> Applications</a>

		<a href="index.php?page=vacancy" class="nav-item nav-vacancy"><span class='icon-field'><i
					class="fa fa-list-alt"></i></span> Vacancy</a>

		<a href="index.php?page=recruitment_status" class="nav-item nav-recruitment_status"><span class='icon-field'><i
					class="fa fa-th-list"></i></span> Status Category</a>

		<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i
					class="fa fa-users"></i></span> Users</a>

		<a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i
					class="fa fa-cogs"></i></span> Settings</a>

		<a href="index.php?page=banner" class="nav-item nav-banner"><span class='icon-field'><i
					class="fa-solid fa-rectangle-history-circle-plus"></i></span>Add Slider</a>

		<a href="index.php?page=list_banner" class="nav-item nav-list_banner"><span class='icon-field'><i
					class="fa-solid fa-image"></i></span>Manage Slider</a>
		<a href="index.php?page=add_testimonial" class="nav-item nav-add_testimonial"><span class='icon-field'><i
					class="fa fa-keyboard"></i></span>Add Testimonial</a>
		<a href="index.php?page=list_testimonial" class="nav-item nav-list_testimonial"><span class='icon-field'><i
					class="fa-solid fa-users"></i></span>Manage Testimonial</a>


	</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>