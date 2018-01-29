//Scrollt den Chatverlauf automatisch zur neusten Nachricht
function scrollToBottom (id) {
   var chatWindow = document.getElementById(id);
   chatWindow.scrollTop = chatWindow.scrollHeight - chatWindow.clientHeight;
}

//Loggt den User aus, wenn das Fenster geschlossen wird
$(window).on('unload', function(){
		$.ajax({
		type: 'get',
		async: false,
		url: 'ausloggen.php'

		});
	}); 
		
//https://www.w3schools.com/w3css/w3css_sidebar.asp
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