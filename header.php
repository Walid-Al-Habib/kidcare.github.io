<!DOCTYPE html>
<html>
    <head>
        <title> KID's Care </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="index.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">                                                                                                                                  
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
            <script>(function(w, d) { w.CollectId = "61ce14feb104f43d8bab2e78"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
        </head>
    <body>
        <!----NavigationBar---->
        <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index2.php"><img src="logo.png"></a>
                <body onload="startTime()">   
                 <div id="txt"></div> 
                    <script>
                    function startTime() {
                      const today = new Date();
                      let h = today.getHours();
                      let m = today.getMinutes();
                      let s = today.getSeconds();
                      m = checkTime(m);
                      s = checkTime(s);
                      document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
                      setTimeout(startTime, 1000);
                    }
                    
                    function checkTime(i) {
                      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                      return i;
                    }
                    </script>
                    
                    </body>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION['username']))
                    
					{
					?>
                    <li class="nav-item">
                        <a class="nav-link" href="searchdata.php">SEARCH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index2.php#about">ABOUT US</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="review.php">REVIEW</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="blogs.php">BLOGS</a>
                    </li>
                        <li class="nav-item">
                        <a class="nav-link" href="FAQ.php">FAQ</a>
                    </li>
                    <li class="nav-item">
					<a class="nav-link"> Hi <?php echo $_SESSION['username']; ?> </a> &nbsp;&nbsp; 
                    <a class="nav-link" href="signout.php">LogOut</a>
					<?php	
					}
					else
					{?>
					<a class="nav-link" href="signup.php">New User?</a>&nbsp;&nbsp;<a class="nav-link" href="signinp.php">Login</a><?php
					}?>
                    </li>
                    </ul>
                </div>
            </nav>
        </section> 