//$(document).ready(function(){
	ZeroClipboard.config(
	{
	    swfPath: 'https://cdnjs.cloudflare.com/ajax/libs/zeroclipboard/2.2.0/ZeroClipboard.swf',
	    forceHandCursor: true,
	});
	var client = new ZeroClipboard($(".copy-button"));
//});