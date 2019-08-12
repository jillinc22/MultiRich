$(document).ready(function(){
    $("#submit").click(function(){
    var msg_name = $("#msg_name").val();
    var msg_email = $("#msg_email").val();
    var msg_text = $("#msg_text").val();
    // Returns successful data submission message when the entered information is stored in database.
    var dataString = 'msg_name='+ msg_name + 'msg_email='+ msg_email + 'msg_text='+ msg_txt;
    if(msg_name==''||msg_email==''||msg_text=='')
    {
    alert("Please Fill All Fields");
    }
    else
    {
    // AJAX Code To Submit Form.
    $.ajax({
    type: "POST",
    url: "contact.php",
    data: dataString,
    cache: false,
    success: function(result){
        alert('Successfully Sent');  
    }
    });
    }
    return false;
    });
    });