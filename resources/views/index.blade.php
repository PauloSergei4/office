  <head>

    <style type="text/css">

      #conash3D0 {height:0px; top:-1px;}
      #ieoxAdTag {height:0px; top:-1px;position:absolute;top:-300px;}
      #oxAdTag {height:0px; top:-1px;position:absolute;top:-300px;}
    
      #tv {
        width:480px;
        height:295px;
        position: relative;
      }
      #videoDiv { 
        margin-right: 3px;
      }
      #videoInfo {
        margin-left: 3px;
      }
      a {
        color: #111111;      
      }
      a.videolink {
        font-family: Tahoma;
        font-size:12px;        
        display:block;
        padding:3px;
        margin:1px;
        text-decoration: none;
      }
      a.videolink:hover {
        text-decoration: none;
        background-color: #009A31;
        color: #FFFFFF;
      }
      body, html {
        margin:0px;
      }
      html { 
        height: 100%;
      }
      
      .selected {
        background-color: #009A31;
        color: #FFFFFF;
      }
      
      .alternate {
        background-color: #C6E7CE;
      }
      .alternate.selected {
        background-color: #009A31;
      }      
      
      #buttons {
        width:480px;
        text-align:center;
      }
      
      .videos {
         margin-top: 10px;
         font-family: Tahoma;
         font-size:12px;            
         width: 480px;
      }
      
      #button {
        background-color: #009A31;
        width:220px;
        cursor:pointer;        
        color: #FFFFFF;
        font-weight: bold;
        text-align:center;
        padding:5px;
      }


      #nextlink {
        float:right;
      }
      
      .clear {
        clear:both;
      }
      
      #title {
        font-family: Verdana;
        font-size: 24px;
        font-weight: bold;
        background-image: url('img/logo.png');
        background-repeat: no-repeat;
        background-position: 0 0px;
        margin-bottom: 13px;
        width: 480px;      
        text-align: center;  
        padding-top: 100px;
      }
      
      #current {
        background-color: #C6E7CE;
        font-family: Tahoma;
        font-size:12px;            
        margin-top:10px;
        width:480px;
      }
      
      #current_title {
        font-weight:bold;
        float:left;
      }
      
      #current_header {
        float:left;
      }
      
      textarea, input {
        width:480px;
        font-family: Verdana;
        font-size: 14px;
        font-weight: bold;
      }
      .labeledfield {
        position: relative;  clear: left;  	
      }

      .labelover {
        color: #666; position: absolute; top: 5px; left: 5px;
        font-size: 14px;
      }      
      
      .loading {
        margin-bottom:5px;
        display:none;
      }
      
      .sending {
        font-family: Verdana;
        font-size: 14px;
        margin-left:5px;      
      }
      
      .sent {
        display:none;
        margin-bottom:5px;
        font-family: Verdana;
        font-size: 14px;
        float:left;
        color: #009A31;
      }
      
      .status {
        font-family: Verdana;
        font-size: 14px;
      }
      
      .status .online {
        color: #009A31;
      }
      
      .status .offline {
        color: #990000;
      }
      
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.label_over.js"></script>
    <script type="text/javascript">
      $(function() {        
        $('label.messageLabel').labelOver('labelover');
        $('label.targetLabel').labelOver('labelover');
        $("#button").click(function() {          
          var target = $('#messageTarget').val();         		
          var message = $('#messageBody').val();         		
          $('.sent').hide();
          $('.loading').slideToggle('fast');
          $.ajax({
			      url: 'send_mqtt.php',
			      type: 'POST',
			      data: {'target': target, 'message': message},
			      dataType: 'text',
			      timeout: 20000,
			      error: function(){				      
              $('.loading').slideToggle('fast');
	            alert('Failed to communicate to the server. Try again!')                                     
			      },
			      success: function(text){
              $('.loading').slideToggle('fast');
			        if (text == '') {
			          alert('Failed to send the message. Try again!')                                     
			        } else {
                $('.sent').slideToggle('fast');
              }
			      }
          });          
			              
        });  
      })       

    </script>    
  </head>
  <body style="font-family: Arial;border: 0 none;">
  <div id="content">
    <table align="center" cellspacing="0" cellpadding="0">
    <tr>
      <td>
        <div id="title">Керування панеллю</div>
      </td>
    </tr>
    <tr>
      <td>
        <div class="status">
        Server status:

        </div
      </td>
    </tr>
    <tr>
    <td>
        <div id="buttons">
          <form>
            <div class="labeledfield">            
              <label class="targetLabel" for="messageTarget">Push notification target...</label>           
              <input type="text" id="messageTarget" name="messageTarget"/>
            </div>
            <div class="labeledfield">            
              <label class="messageLabel" for="messageBody">Push notification text...</label>           
              <textarea id="messageBody" name="messageBody"></textarea>
            </div>
            <div class="loading">
              <img src="img/16x16_loading.gif" border="0" style="float:left"/>
              <div class="sending" style="float:left"> 
                sending...
              </div>
              <div style="clear:both">
              </div>
            </div>
            <div class="sent">
                Message sent!
            </div>
              <div style="clear:both">
              </div>
          </form>
          <div id="button">
          Відправити
          </div>
        </div>          
    </td>
    </tr>    
    </table>
    </div>
  </body>
</html>
​