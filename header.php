<div class="logo">
   <h1><a href="index.html"><i><img src="images/cell.png" alt=" " /></i>Easy Recharge</a></h1>
</div>
<div class="top-nav">
	<span class="menu"><img src="images/menu.png" alt=" " /></span>
	<ul class="nav1">
		<li><a href="#" data-toggle="modal" data-target="#myModal">Mobile</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal2">datacard</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal1">DTH</a></li>
		<li><a href="#" data-toggle="modal" data-target="#myModal3">landline</a></li>
		<?php
			include 'login_header.php';
		?>
	</ul>
			<!-- script-for-menu -->
			 <script>
			   $( "span.menu" ).click(function() {
				 $( "ul.nav1" ).slideToggle( 300, function() {
				 // Animation complete.
				  });
				 });
			</script>
			<!-- /script-for-menu -->
</div>