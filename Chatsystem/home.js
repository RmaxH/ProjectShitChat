function scrollToBottom (id) {
   var chatWindow = document.getElementById(id);
   chatWindow.scrollTop = chatWindow.scrollHeight - chatWindow.clientHeight;
}
