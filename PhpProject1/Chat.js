$(function(){
    $(document).on('submit','#chatForm',function(){
        var message = $.trim($("#message").val());
        var username = $.trim($("#username").val());
        
        if(message !== "" && username !== ""){
            $.post('ChatPoster.php', {message: message, username: username}, function(data){
                $(".chatMessages").append(data);
            });
        }else{
            alert("Data missing");
        
        }
    });
});