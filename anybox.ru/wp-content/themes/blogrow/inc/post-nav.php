<?php if ( is_single() ): ?>
	<ul class="post-nav group">
		<li class="next"><?php next_post_link('%link', '<i class="fa fa-chevron-right"></i><strong>'.__('Next post', 'blogrow').'</strong> <span>%title</span>'); ?></li>
		<li class="previous"><?php previous_post_link('%link', '<i class="fa fa-chevron-left"></i><strong>'.__('Previous post', 'blogrow').'</strong> <span>%title</span>'); ?></li>
	</ul>
<?php endif; ?>