function scrollToBottom (id) {
   var chatWindow = document.getElementById(id);
   chatWindow.scrollTop = chatWindow.scrollHeight - chatWindow.clientHeight;
}

	$(window).bind('unload', function(){
            $.ajax({
            type: 'get',
            async: false,
            url: 'ausloggen.php'

            });
        }); 
		
function toggleSidebar(){
	document.getElementById("sidebar").classList.toggle('active');
}

		
	$(document).ready( function(){
		$('#chatr').load('inhalt.php');
		refresh();
		});
		 
		function refresh()
		{
			setTimeout( function() {
			  $('#chatr').load('inhalt.php');
			  refresh();
			}, 3000);
		}
		
		
		$(document).ready( function(){
		$('#chatg').load('inhaltGuests.php');
		refreshG();
		});
		 
		function refreshG()
		{
			setTimeout( function() {
			  $('#chatg').load('inhaltGuests.php');
			  refreshG();
			}, 3000);
		}