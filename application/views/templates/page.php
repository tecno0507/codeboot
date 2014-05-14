		<!-- Main content -->
 		<div class="span9">
 			<article>
 				<h2><?php echo e($page->title); ?></h2>
 				<?php echo $page->body; ?> 
 			</article>
 		</div>
 		
 		<!-- Sidebar -->
 		<div class="span3 sidebar">
 			<h3>Nuevas Noticias</h3>
<?php $this->load->view('sidebar'); ?>
 		</div>