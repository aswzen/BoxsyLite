<?php include('header.php'); ?>
		
	<!-- Scrollable page content -->
	<div class="page-content">

	    <div class="page login-screen-page">
	      <!-- page-content has additional login-screen content -->
	      <div class="page-content login-screen-content">
	        <div class="login-screen-title">Boxsy Lite Login</div>
	        <!-- Login form -->
	        <form>
	          <div class="list">
	            <ul>
	              <li class="item-content item-input">
	                <div class="item-inner">
	                  <div class="item-title item-label">Username</div>
	                  <div class="item-input-wrap">
	                    <input type="text" name="username" id="username" placeholder="Username">
	                    <span class="input-clear-button"></span>
	                  </div>
	                </div>
	              </li>
	              <li class="item-content item-input">
	                <div class="item-inner">
	                  <div class="item-title item-label">Password</div>
	                  <div class="item-input-wrap">
	                    <input type="password" name="password" id="password" placeholder="Password">
	                    <span class="input-clear-button"></span>
	                  </div>
	                </div>
	              </li>
	            </ul>
	          </div>
	          <div class="list">
	            <ul>
	              <li>
	                <a href="#" class="list-button" onClick="doLogin()">Sign In</a>
	              </li>
	            </ul>
	          </div>
	        </form>
	      </div>
	    </div>
	</div>

	<?php include('footer.php'); ?>

	<script type="text/javascript">
	function doLogin(){
		app.request.post('<?php echo BASE_URL; ?>user/login', { 
	    	username : $('#username').val(),
	    	password : $('#password').val()
        }, function (data) {
        	if(data == true){
	       		return app.views.main.router.navigate('/main/', {reloadCurrent: true});
	       	} else {
	       		app.dialog.alert('Wrong username or password');
	       	}
        }, function (error) {
            app.dialog.alert('Internal error');
        });

		// $.ajax({
		//     async : true,
		//     type : 'POST',
		//     url : '<?php echo BASE_URL; ?>user/login',
		//     cache : false,
		//     data : {
		//     	username : $('#username').val(),
		//     	password : $('#password').val()
		//     },
		//     dataType : 'json',
		//     success : function(data){
		//        	if(data == true){
		//        		return app.views.main.router.navigate('/main/', {reloadCurrent: true});
		//        	} else {
		//        		app.dialog.alert('Wrong username or password');
		//        	}
		//     },      
		//     error : function(jqXHR, textStatus, errorThrown){
		//         app.dialog.alert('Internal error');
		//     }
		// });
	}
	</script>

	</body>
</html>