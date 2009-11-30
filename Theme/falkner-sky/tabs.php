<li id="tabber" class="widget_block tablist">
			<ul class="clearfix">

	
				<li id="mostrated" class="widget">
					<h3 class="tabber-title">Recent Posts</h3>
					<ul>
						 <?php wp_get_archives('type=postbypost&limit=5'); ?>
					</ul>
				</li>
		
				<li id="mostview" class="widget">
					<h3 class="tabber-title">Recent Comments</h3>
					<?php include (TEMPLATEPATH . '/simple_recent_comments.php'); ?>
<?php if (function_exists('src_simple_recent_comments')) {
src_simple_recent_comments(5, 50, '<ul>', '</ul>');
}
?>
				</li>

				<li id="mostcomm" class="widget">
					<h3 class="tabber-title">Others</h3>
					<ul>
<li><a href="#">Just another list</a></li>
<li><a href="#">Just another list</a></li>
<li><a href="#">Just another list</a></li>
					</ul>
				</li>


			</ul>
		</li> 