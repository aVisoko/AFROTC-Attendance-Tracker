<!doctype html>
<html>

    <head>
<link rel="stylesheet" href="index.css">
    <script src="../jquery-ui-1.11.4/external/jquery/jquery.js"></script>
    <script src="../jquery-ui-1.11.4/jquery-ui.min.js"></script>
 
	 
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="ico"  href="/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
	

    	<script type="text/javascript">
		$(document).ready(function(){
			
			if(window.location.href.indexOf("https://ec2-18-216-228-109.us-east-2.compute.amazonaws.com/index.php?loginFailed=true&reason=passwordusernamecombo") > -1){
				
				document.getElementById('alert').innerHTML += 'Wrong Username or Password!';
				
			}
		});
		</script>	





	 
	 </head>


    
    
    
<body>
   
 
   
    <div class="container">
        <div class="card card-container">
         
            <img id="profile-img" class="profile-img-card" src="static_assets\Det_440.png" />
            
            
            <p id="profile-name" class="profile-name-card"></p>
            
               
               <form action="login.php" method="post" class="form-signin">
                  
                
              
              <input type="hidden" name="action" value="do_login">
               
                <span id="username_span" class="username_entry"></span>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" autofocus>
                
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
  
              <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="submit">Sign in</button>
				   <div ><p id="alert" style="color:red; text-align: center; font-weight: bold; "></p></div>
            	</form>
            	
            	
            	
            	
   

        </div>
    </div>
    
    
    	<script type="text/javascript">
				function();
		</script>	
</body>
    
    
    
    
    
    
</html>
