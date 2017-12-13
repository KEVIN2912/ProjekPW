<!DOCTYPE html>
<html lang="en">
<?php
if(!isset($this->session->userdata['logged_in'])){header('location:login');}
else {
 $username = ($this->session->userdata['logged_in']['username']);
 }
?>
<head>
	<meta charset="UTF-8">
	<title>Photo</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/simple-grid.min.css">
</head>
<body class="detail">
	<header class="navbar">
	
			<ul>
			<a href="<?php echo base_url(); ?>SS/home"><h3>Stalk Shoot</h3></a>
			<a class="menu right" href="<?php echo base_url(); ?>SS/profile"> <img class="profile-icon right" src="<?php echo base_url(); ?>static/img/profile.png" alt="Profile" width="20px"></a>

			<a class="menu right" href="<?php echo base_url(); ?>SS/logout"><img class="profile-icon right" src="<?php echo base_url(); ?>static/img/logout.png" alt="Profile" width="20px"></a>
			<center>
				<form method="post" action="<?php echo base_url(); ?>SS/user_search">
					<input class="search-box" type="input" name="search" placeholder="Search">
					<input type="submit" name="submit" value="Find" /></center>
				</form>
			</center>
		</ul>
	</header>
	
	<center>
		<div class="container">
			<div class="post">
				<?php foreach($pp->result() as $data) {} ?>
				<img class="detail-profil" src="<?php echo base_url(); ?>static/img/<?php echo $data->photo_id ?>" width="20%" height="20%">
				
				<?php foreach($response->result() as $row) { ?>
				<p class="friends-name"><?php echo $row->username ?></p>
				<div class="profile-gallery row">
						<img class="gallery-photo col-6" src="<?php echo $row->path.$row->img ?>" alt="">
				<?php } ?>
				</div>

		</div>	
	</center>	

</body>
</html>
