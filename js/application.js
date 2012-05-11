
function forceNewWindow()
{
	$('a').on('click', function(event)
	{
		event.preventDefault();
		event.stopPropagation();
		window.open(this.href, '_blank');
	});
	
}