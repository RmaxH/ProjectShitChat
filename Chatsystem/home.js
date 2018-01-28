function scrollToBottom (id) {
   var chatWindow = document.getElementById(id);
   chatWindow.scrollTop = chatWindow.scrollHeight - chatWindow.clientHeight;
}
/*	$(window).bind('unload', function(){
            $.ajax({
            type: 'get',
            async: false,
            url: 'ausloggen.php'

            });
        }); */