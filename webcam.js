(function(){
	var video = document.getElementById('video'),
			canvas = document.getElementById('canvas'),
			downloadLink =  document.getElementById('download'),
			context = canvas.getContext('2d'),
			photo = document.getElementById('photo'),
				vendorUrl = window.URL || window.webkitURL;
	
	navigator.getMedia = navigator.getUserMedia ||
						navigator.webkitGetUserMedia||
						navigator.mozGetUserMedia||
						navigator.msGetUserMedia;
	navigator.getMedia({
		video:true,
		audio:false
	}, function(stream){
		video.src = vendorUrl.createObjectURL(stream);
		video.play();
	}, function(error){
		
	});
	document.getElementById('capture').addEventListener('click', function(){
		context.drawImage(video, 0, 0, 400, 300 );
		var DataUrl = canvas.toDataURL('image/png');
		downloadLink.href = DataUrl;
		downloadLink.setAttribute('download','file-name.png')
		//photo.setAttribute('src', canvas.toDataURL('image/png'));
	});
})();

