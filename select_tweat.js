/**/
jQuery(document).ready(function($) {
    // Code that uses jQuery's $ can follow here.
	
	$(document).mouseup(function()
	{
		if(window.getSelection)
		{
			text = window.getSelection().toString();
		}
		else if(document.selection && document.selection.type != "Control")
		{
			text = document.selection.createRange().text;
		}
		if(text != '')
		{
			var tweet = confirm('You want to Tweet It?');
			if(tweet == true)
			{
				window.open('http://twitter.com/share?text='+text);
			}
		}
		else
		{
			$('#tweet').css({'display':'none'});
		}
		
	});
});