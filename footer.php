
<script>$('#messages').scrollTop($('#messages')[0].scrollHeight);</script>

<script>

function chatContains() {
	
	var userID = <?php echo $_SESSION['uxs_user']['id'] ?>;
	var catID = <?php echo mysqli_real_escape_string($connection, $_GET['cat']) ?>;
	var chatID = <?php echo mysqli_real_escape_string($connection, $_GET['chat']) ?>;
    $.post( './connection/obtend_dates.php', { user : userID, cat : catID, idchat : chatID }, 
       function( response ) {
		
		document.getElementById("leet").innerHTML = response;

       }
    );
}
function updateLastMsg() {
	var catID = <?php echo mysqli_real_escape_string($connection, $_GET['cat']) ?>;
	var chatID = <?php echo mysqli_real_escape_string($connection, $_GET['chat']) ?>;
    $.post( './connection/update_last_message.php', { cat : catID, idchat : chatID }, 
       function( response ) {
		
		document.getElementById("lastupdatemsg").innerHTML = response;

       }
    );
}

window.onload = function() {
  setInterval(chatContains, 1000);
  setInterval(updateLastMsg, 1000);
}



 function send_message(catID, chatID) {
	var userIDs = <?php echo $_SESSION['uxs_user']['id'] ?>;
	var message = document.getElementById("idobtend").value;
    $.post( './connection/send_message_chat.php' , { userID : userIDs, chatmsg : message, cat : catID, idchat : chatID }, 
       function( response ) {
		document.getElementById("idobtend").value = '';
       }
    );
 }

 function delete_message(message) {
    $.post( './connection/delete_message_chat.php' , { id : message }, 
       function( response ) {
		alertify.success('Has deleted the message.');
		document.getElementById("idobtend").value = '';
       }
    );
 }
</script>

<style>
body{background:#313338;}

.reply-form {
    background: #2b2d31;
    border:1px solid #2b2d31;
	border-radius: 5px 15px 5px 15px;
    padding: 30px;
}
.bg-card-ticket-info {
    background: #2b2d31;
    border:1px solid #2b2d31;
	border-radius: 5px 15px 5px 15px;
    padding: 2px;
	color: #fff;
}


.textInput {
    border-radius: 0;
    height: 45px;
    margin: 0 !important;
}
.border-radius-0{
    border-radius:0;
}
.textInput:focus {
    box-shadow: none;
    outline: none
}
.commentBox ul li .profileBox {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    background-color: #002247;
    color: #fff;
    font-weight: 700;
}
.commentBox .profileBox {
    background-color: #ccc;
}
.commentBoxs ul li .profileBox {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    background-color: #002247;
    color: #fff;
    font-weight: 700;
}
.commentBoxs .profileBox {
    background-color: #ccc;
}

.profileText {
    border-radius: 7px;
    padding: 10px;
    position: relative;
    background-color: #e0efff;
    display: inline-block;
    margin-left: 15px;
    width: 50%;
	word-wrap: break-word;
}
.profileText::before {
    content: '';
    position: absolute;
    left: -9px;
    top: 50%;
    transform: translateY(-50%);
    width: 0px;
    height: 0px;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-right: 10px solid #e0efff;
    z-index: 1;
}
.commentBox ul li {
    display: flex;
    align-items: center;
}
.commentBoxs .profileText::before {
    left: unset;
    right: -9px;
    transform: translateY(-50%) rotate(180deg);
	
}
.commentBoxs .profileText {
    text-align: left;
}
div#div_id_username {
    margin-top: 5%;
}
.commentBoxs .profileText {
    margin-left: 0;
    margin-right: 15px;
}
.commentBoxs   {
    text-align: right;
    margin: 20px 0;
    justify-content: flex-end;
}
.card h4 {
	border-radius: 10px;
    background-color: #2b2d31;
    padding: 15px;
    font-size: 18px
}
.card ul li {
    border-bottom: 1px solid #313338;
}
.card ul li {
    padding: 10px 15px
}
.card ul li p {
    margin: 0
}
</style>
</body>
</html>