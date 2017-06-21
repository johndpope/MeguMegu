<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Megu Soundboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery-3.1.1.js"></script>
	<script type="text/javascript">
	
		        $(document).ready( function() {
        			$('.card').click(function(){
            			$('#player').attr('src', $(this).attr('name'));
        			});
    			});

		// $(document).ready( function() {

		// 	$('.card').click(function(){
  //  				$('#wrap').append('<embed id="embed_player" src="'+$(this).attr('name')+'" autostart="true" hidden="true"></embed>');
		// 	});

		// });
	</script>
</head>
<body>

<p><h1>Megu soundboard</h1></p>

	<div id="pictures">
		
		<img name="media/Megu_1.mp3" src="media/Megu_1.gif" class="card" id="sir-finly" alt="" />
		<img name="media/Megu_2.mp3" src="media/Megu_2.gif" class="card" id="shifterzerus" alt="" />
		<audio id="player" src="" autoplay></audio>

		<div id="wrap"></div>


	</div>

	

</body>
</html>	