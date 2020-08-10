<script>
	var sound = new Howl({
		src: "<?php echo $stream['url']; ?>",
		format: ["aac"],
		html5: true
	});
</script>
<div class="radio-tools-player">

	<?php if($stream['image']) { ?>
	<div class="radio-tools-player-image">
		<img src="<?php echo $stream['image']; ?>">
	</div>
	<?php } ?>

	<?php if($stream['text']) { ?>
	<div class="radio-tools-player-text">
		<p><?php echo $stream['text']; ?></p>
	</div>
	<?php } ?>
	
	<button onclick="sound.play();"><span class="dashicons dashicons-controls-play"></span></button>
	<button onclick="sound.stop();"><span class="dashicons dashicons-controls-pause"></span></button>
</div>