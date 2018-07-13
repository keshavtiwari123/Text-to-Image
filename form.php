<html>
<head>
<title>TEXT->IMAGE</title>
<style>
	#text, #text-color{
		color: black;
		font-size: 25px;
		font-weight: bold;
	}
	#img{
		transform: scale(2);
		position: absolute;
		left: 30%;
		top: 50%;
		border: 1px solid red;
		border-radius: 2px;
		min-width: 200px;
		min-height: 30px;
	}
	input[name=text]{
		width: 80%;
		height: 30px;
		font-size: 20px;
		border-radius: 3px;
	}
	input[name=r], input[name=g], input[name=b]{
		width: 80px;
		height: 30px;
		font-size: 20px;
		border-radius: 3px;
	}
</style>
</head>
<form action='image2.php' method='GET'>
<label id="text">Text: </label> <input type='text' name='text'  placeholder='PLEASE ENTER SOME TEXT'> <br><br>
<span id='text-color'>Text-Color  rgb(</span>
<input type='number' name='r' placeholder='red'> <input type='number' name='g' placeholder='green'> <input type='number' name='b' placeholder='blue'><span id='text-color'>);</span><br><br>
<input type='submit' value='submit' id='submit'>
</form>
<a href='https://www.w3schools.com/colors/colors_rgb.asp'>What is rgb()?</a><br><br>
Your image will be in red box</br>
<image src='' id='img'></img>
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript'>
	$('#submit').click(function(e){
		e.preventDefault();
		var text = $('input[name=text]').val();
		if($('input[name=r]').val()){var r = $('input[name=r]').val();}else{var r = 0;}
		if($('input[name=g]').val()){var g = $('input[name=g]').val();}else{var g = 0;}
		if($('input[name=b]').val()){var b = $('input[name=b]').val();}else{var b = 0;}
		var src = 'image.php?text='+text+'&r='+r+'&g='+g+'&b='+b;
		console.log(src);
		$('#img').attr('src', src);
	});
</script>