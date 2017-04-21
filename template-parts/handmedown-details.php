<section class="hmd-details">
	<dl>
		<!--Handmedown Terms-->
		<dt class="hmd-brand">
			<?php _e( 'Brand', 'saurabh-theme' ); ?>
		</dt>
		<dd class="hmd-brand">
			<?php the_terms($post_id, 'handmedown-brand'); ?>
		</dd>
		<dt class="hmd-model">
			<?php _e( 'Model', 'saurabh-theme' ); ?>
		</dt>
		<dd class="hmd-model">
			<?php the_terms($post_id, 'handmedown-model'); ?>
		</dd>
		<dt class="hmd-size">
			<?php _e( 'Size/ Dimensions', 'saurabh-theme' ); ?>
		</dt>
		<dd class="hmd-size">
			<?php the_terms($post_id, 'handmedown-size'); ?>
		</dd>
		
		<!--Handmedown Meta Data-->
		<dt class="hmd-age">
			<?php _e( 'Age', 'saurabh-theme' ); ?>
		</dt>
		
		<dd class="hmd-age">
			<a href="?age=2"><?php echo get_post_meta($post_id, 'saurabh_theme_age', true); ?></a>
		</dd>
		
		<dt class="hmd-warranty">
			<?php _e( 'Remaining Warranty', 'saurabh-theme' ); ?>
		</dt>
		<dd class="hmd-warranty">
			<a href="#"><?php echo get_post_meta($post_id, 'saurabh_theme_warranty', true); ?></a>
		</dd>
		<dt class="hmd-accessories">
			<?php _e( 'Included Accessories', 'saurabh-theme' ); ?>
		</dt>
		<dd class="hmd-accessories">Polish</dd>
		<dd class="hmd-accessories">Brush</dd>
	</dl>
	<table class="hmd-seller-availability">
		<thead>
			<tr>
				<th>Day</th>
				<th>Timings</th>
			</tr>
		</thead>
		<tbody>
			<tr><meta itemprop="openingHoursSpecification" itemtype="http://schema.org/OpeningHoursSpecification">
		<th><link itemprop="dayOfWeek" href="http://schema.org/Monday" />Mon</th>
		<td><time itemprop="opens" content="09:00:00">9 am</time> to <time itemprop="closes" content="17:00:00">11am</time></td>
		</tr>
		<tr>
			<th>Tue</th>
			<td>9 am to 11am</td>
		</tr>
		<tr>
			<th>Wed</th>
			<td>9 am to 11am</td>
		</tr>
		<tr>
			<th>Thu</th>
			<td>9 am to 11am</td>
		</tr>
		<tr>
			<th>Fri</th>
			<td>9 am to 11am</td>
		</tr>
		<tr class="hmd-weekend">
			<th>Sat</th>
			<td>9 am to 11am, 4pm to 7pm</td>
		</tr>
		<tr class="hmd-weekend">
			<th>Sun</th>
			<td>9 am to 11am, 3pm to 5pm</td>
		</tr>
		</tbody>
	</table>
</section>