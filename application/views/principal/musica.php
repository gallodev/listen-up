<?php $this->load->view('/include/header.php'); ?>
	<body>
		<div id="container" class="container box-music">			
			<?php $this->load->view('/include/form/music_form.php'); ?>
			<span class="text-center center"><?php echo $this->session->flashdata('msg') ?></span>			
		</div>
	</body>
<?php $this->load->view('/include/footer.php'); ?>