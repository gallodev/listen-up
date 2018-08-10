<?php $this->load->view('/include/header.php'); ?>
	<body>
		<div id="container">
			<?php if(!$is_list_music){ ?>
				<?php $this->load->view('/include/genero_thumb.php'); ?>
			<?php } ?>	
			<div class="row"></div>
			<span class="separator"></span>
			<?php $this->load->view('include/music_thumb.php'); ?>
		</div>
	</body>
<?php $this->load->view('/include/footer.php'); ?>