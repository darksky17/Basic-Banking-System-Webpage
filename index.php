<html>
<head>
<title></title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100;400&display=swap" rel="stylesheet">
<style>

body{
    background:tomato;
}
  *{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

.navbar-brand
{
    font-style: bold;
    font-size:65px; 
    color : blue;
    text-align: center;

}

.navbar
{
	display: flex;
justify-content: center;
	list-style: none;
	margin-top: 	0px;
	margin-left: 100px;
	text-align: center;
	padding-top: 50px;

}

.navbar li
{
	display: inline-block;
    text-align: center;
}


.navbar li a
{
	color: blue;
	text-decoration: none;
	padding: 5px ;
    margin-right: 180px  ;
	font-family: "Roboto", sans-serif;
	font-size: 15px;
    text-align: center;
}
 
.navbar li.nav-item a
{
	border: 1px solid white;
}

.navbar li a:hover 
{
	border: 1px solid yellow;
}


.main_div
{
    width:100%;
    height:100vh;
    b5ackground-image:linear-gradient(rgba(0,0,0,1),rgba(0,1,0,0.6)),url(images/banking.jpg);
    clip-path: polygon(0% 0%,100% 0%,100% 100%,0% 100%);
}
.main_text
{
    font-family: "JetBrains Mono", cursive, sans-serif; 
font-style: bold;
	text-transform: uppercase;
    color:cyan;
    font-size:50px;
    margin-top:250px;
    margin-left:100px;
    padding-left: 30px;
    width:200%;
}
.big-text
{
    font-family: 'JetBrains Mono', monospace;
    color:cyan;
    font-style: italic;
	text-transform: uppercase;
	font-size: 15px;
	text-align: center;
    padding-top: 20px;
    margin:20px 0;
    padding-left: 150px;
    
    
}
.contactus{
    width:100%;
    height: 100vh;
    padding: 80px 0;
    position: relative;
}
.contactus:before{
    content:"";
    position: absolute;
    top:0;
    left:0;
    bottom: 0;
    right:0;
    background-image:linear-gradient(rgba(0,0,0,0.1),rgba(0,1,0,0.3)),url(images/contact.jpg);
    z-index: -1;
}
.formbutton button{
    border:1px solid #50d1c0;
    border-radius:100px;
    margin:0 50px;
    padding: 2px 35px;
    outline:none;
    columns: #50d1c0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
    text-align: center;
    background:transparent;
    color:#fff;
   
}
form:hover .formbutton button{
background: white;
color:#5E11A3 ;
box-shadow: 0 0 20px 0 rgba(0,0,0,0.3);

}
@media(min-width:400px)
{
    .main_div
    {
        max-height:1000px;
    }
}
</style>
</head>

<body>
<header>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
   
      <a href="#" class="navbar-brand ">SORA BANK</a>
      <button class="navbar-toggler text-white " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse text-center" id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link "><span ">ABOUT</span></a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link ">VIEW CUSTOMER</a></li>
             
               </ul>
        </div>
     </div>

     <div class="container">
        <div class="row">

          <div class="col-sm-6">
            <h1 class="main_text">Powered by The Sparks Foundation </h1>

          </div>

         <!-- <div class="col-sm-6"> 
            
            <img src="system.jpg" class="img-fluid" width="260" height="305" style="margin-top:20px;">
           
          </div>
-->
       </div>
       
    </div>

</div>

</div>


  <!--contact starts-->
  <section class="contactus" id="contact" >
        <div class="container headings text-center">
            <h1 class="center" style="font-weight: bold;text-align: center;">CONTACT US</h1>
            <p>We're Here To Help And Answer Any Questions You Might Have.We Look Forward To Hearing From You</p>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offet-md-2-col col-1">
                    <form action="/action_page.php">
                        <div class="form-group">
                          
                          <input type="text" class="form-control" placeholder="Enter name" id="username" required autocomplete="off">
                        </div>
                        <form action="/action_page.php">
                            <div class="form-group">
                              
                              <input type="email" class="form-control" placeholder="Enter email" id="email" required autocomplete="off">
                            </div>
                            <form action="/action_page.php">
                                <div class="form-group">
                                  
                                  <input type="number" class="form-control" placeholder="Enter mobile number" id="mobile" required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Comment:</label>
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Your Comments"></textarea>
                                  </div>
                                  <div class="formbutton" style="display: flex;justify-content: center;">
                        <button type="submit" >Submit</button></div>
                      </form>
                </div>
            </div>
        </div>
       </section>
       <header>
</body>
</html>