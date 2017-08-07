<div id="<?php esc_attr_e($attributes['id']); ?>" style="position:relative;width:<?php esc_attr_e($attributes['width']); ?>;height:<?php esc_attr_e($attributes['height']); ?>;">
<script>
	jQuery(document).ready(function() {
		jQuery('#<?php esc_attr_e($attributes['id']); ?>').get_cube_content({
			url: '<?php esc_attr_e($attributes['left_url']); ?>',
			top_url: '<?php esc_attr_e($attributes['top_url']); ?>',
			right_url: '<?php esc_attr_e($attributes['right_url']); ?>',
			square: false,
			bgOnOff: '<?php esc_attr_e($attributes['bg_on']); ?>',
			planeColor: '<?php esc_attr_e($attributes['plane_color']); ?>',
			cubePos: '<?php esc_attr_e($attributes['cube_pos']); ?>',
			animation: '<?php esc_attr_e($attributes['animation']); ?>'
		});
	});
</script>
</div>
