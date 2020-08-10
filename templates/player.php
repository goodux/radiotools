<div class="radio-tools-player">

	<?php if($stream['image']) { ?>
	<div class="radio-tools-player-image">
		<img src="<?php echo $stream['image']; ?>">
	</div>
	<?php } ?>

	<div class="radio-tools-player-controls">
		
		<?php if($stream['text']) { ?>
		<div class="radio-tools-player-text">
			<p><?php echo $stream['text']; ?></p>
		</div>
		<?php } ?>

		<button id="radio-tools-button-play"><span class="dashicons dashicons-controls-play"></span></button>

		<button id="radio-tools-button-stop"><span class="dashicons dashicons-controls-pause"></span></button>

		<?php if(!$window_player) { ?>
		<button id="radio-tools-button-window-player"><span class="dashicons dashicons-external"></span></button>
		<?php } ?>

	</div>

</div>

<script>
	var radio_tools_button_play = document.getElementById("radio-tools-button-play");
	var radio_tools_button_stop = document.getElementById("radio-tools-button-stop");
	var radio_tools_button_window_player = document.getElementById("radio-tools-button-window-player");
	var radio_stream = new Howl({
		src: "<?php echo $stream['url']; ?>",
		format: ["aac"],
		html5: true
	});
	radio_tools_button_play.onclick = function() {
		radio_stream.play();
	}
	radio_tools_button_stop.onclick = function() {
		radio_stream.stop();
	}
	radio_tools_button_window_player.onclick = function() {
		window.open("<?php echo $stream['window_player']; ?>","targetWindow","toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=150");
	}
</script>

<style type="text/css">
	.radio-tools-player {
		width:100%;
		max-width: 400px;
		border:2px solid black;
		border-radius:6px;
		padding:10px;
		display: flex;
		flex-direction: row;
	}

	.radio-tools-player-image {
		width:100px;
	}

	.radio-tools-player-image img {
		width:auto;
	}

	.radio-tools-player-controls {
		padding: 0 10px;
	}

	.radio-tools-player-text {
	}

	.radio-tools-player-text p {
		margin:0;
		padding: 0;
	}

	.radio-tools-player-controls button {
		margin:0;
	}
</style>