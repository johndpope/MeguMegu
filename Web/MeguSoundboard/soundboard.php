<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Soundboard</title>
	<script>
		function play(element){
			var audio = document.getElementById(element);

			if(audio.paused){
				audio.loop = true;
				audio.play();
			} else {
				audio.pause();
				audio.currentTime = 0;
			}
		}

	</script>
</head>
<body>
	<div>
	<img name="sir-finly" src="media/Sir finly.gif" width="230" height="318" border="0"  onclick="play('audio_1')" >
	</div>


	<div>
	<audio id="audio_1"><source src="media/Sir-finly.mp3" type="audio/mp3"></audio>
	</div>
</body> 
</html>