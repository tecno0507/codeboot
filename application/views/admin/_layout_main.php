<?php $this->load->view('admin/components/page_head'); ?>
<body>
    <div class="navbar navbar-static-top navbar-inverse">
	    <div class="navbar-inner">
		    <a class="brand" href="<?php echo site_url('admin/dashboard'); ?>"><?php echo $meta_title; ?></a>
		    <ul class="nav">
			    <li class="active"><a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a></li>
			    <li><?php echo anchor('admin/page', 'Paginas'); ?></li>
			    <li><?php echo anchor('admin/page/order', 'Ordenar Paginas'); ?></li>
			    <li><?php echo anchor('admin/article', 'Articulos'); ?></li>
			    <li><?php echo anchor('admin/user', 'Usuarios'); ?></li>
		    </ul>
	    </div>
    </div>

	<div class="container">
		<div class="row">
			<!-- Main column -->
			<div class="span9">
<?php $this->load->view($subview); ?>
			</div>
			<!-- Sidebar -->
			<div class="span3">
				<section>
					<?php echo mailto('joost@codeigniter.tv', '<i class="icon-user"></i> webmaster@cclaunion.com'); ?><br>
					<?php echo anchor('admin/user/logout', '<i class="icon-off"></i> logout'); ?>
				</section>
			</div>
		</div>
	</div>

<?php $this->load->view('admin/components/page_tail'); ?>