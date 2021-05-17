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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    
   
}
.navbar-brand
{
    font-style: bold;
    color : blue;
    text-align: center;
    font-size:65px

}


.navbar
{
	display: flex;
justify-content: center;
	list-style: none;
	margin-top: 	0px;
	
	text-align: center;
	padding-top: 50px;
   
    background: tomato;

}


.navbar li
{
	display: inline-block;
    text-align: center;
    padding:-10px;
}


.navbar li a
{
	color: blue;
	text-decoration: none;
	padding: 2px ;
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
 
}

.display_table
{
    width:100vw;
    height:100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
    background:tomato;
}

.center_div
{
    width:90vw;
    height:80vh;
    background:tomato;
    background-repeat:no-repeat;
    background-size:100%;
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,1,0,0.1);
    border-radius:10px;
    margin-left:30px;
    border-color:cyan;
}
h1
{
    font-size:18px;
    color:#000;
    text-align:center;
    margin-top:-20px;
    margin-bottom:20px;
}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px 0 rgba(1,1,0,0.03);
    border-radius: 30px;
    border-collapse:collapse;
    table-layout:fixed;
    opacity:0.7;
    color:#FFD700
    font-weight:bold;
    margin:auto;
    background:tomato;
}
th,td
{
  border:1px solid #f2f2f2;
   padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:snow; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:15px;
}

</style>
</head>
<body>
<div class="main_div">
 
     <div class="navbar navbar-expand-md">
   
      <a href="#" class="navbar-brand">SORA BANK</a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsenavbar">
      <span class="navbar-toggler-icon" style="background:white;"></span>
      </button>
     
       <div class="collapse navbar-collapse " id="collapsenavbar">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link ">HOME</a></li>
              <li class="nav-item">
                  <a href="viewcustomers.php" class="nav-link ">VIEW CUSTOMER</a></li>
           
               </ul>
        </div>
     </div>

      
           
          <div class="display_table">
                 <h1>Customer Details</h1>
                 <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
                     <tr>
                     <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                       <th>Amount</th>
                    
                      <th colspan="2">operation</th>
                    </tr>
                    </thead>
                   <tbody>
                  </div>
          <?php
          include 'connection.php';
          $selectquery = "select * from users";
          $query = mysqli_query($con,$selectquery);
          $numofrows = mysqli_num_rows($query);

           while($res = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php  echo $res['id']; ?></td>
               <td><?php echo $res['name']; ?></td>
               <td><?php echo $res['email']; ?></td>
               <td><?php echo $res['balance']; ?></td>
              <td><a href="transfermoney.php?idtransfer=<?php  echo $res['id']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:blue;"></i></a></td>
               </tr>
             <?php
          }
           ?>


</tbody>
</table>
</div>

</div>

</div>
 </div>

</body>
</html>


    



















