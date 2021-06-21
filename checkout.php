<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="flood.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  } 
}
body { margin:20px; background:hsl(70, 31%, 85%); text-align:center; }

.balloon {
  display:inline-block;
   width:120px;
  height:145px;
  background:hsl(215,50%,65%);
  border-radius:80%;
  position:relative;
  box-shadow:inset -10px -10px 0 rgba(0,0,0,0.07);
  margin:20px 30px;
  transition:transform 0.5s ease;
  z-index:10;
  animation:balloons 4s ease-in-out infinite;
  transform-origin:bottom center;
}

@keyframes balloons {
  0%,100%{ transform:translateY(0) rotate(-4deg); }
  50%{ transform:translateY(-25px) rotate(4deg); }
}


.balloon:before {
  content:"▲";
  font-size:20px;
  color:hsl(215,30%,50%);
  display:block;
  text-align:center;
  width:100%;
  position:absolute;
  bottom:-12px;
  z-index:-100;
}

.balloon:after {
 display:inline-block; top:153px;
  position:absolute;
  height:250px;
  width:1px;
  margin:0 auto;
  content:"";
  background:rgba(0,0,0,0.2); 
}

.balloon:nth-child(2){ background:orange; animation-duration:3.5s; }
.balloon:nth-child(2):before { color:hsl(245,40%,65%);  }

.balloon:nth-child(3){ background:green; animation-duration:3s; }
.balloon:nth-child(3):before { color:hsl(139,30%,50%);  }

.balloon:nth-child(4){ background:hsl(59,50%,58%); animation-duration:4.5s; }
.balloon:nth-child(4):before { color:hsl(59,30%,52%);  }

.balloon:nth-child(5){ background:hsl(23,55%,57%); animation-duration:5s; }
.balloon:nth-child(5):before { color:hsl(23,44%,46%);  }
</style>
</head>
<body>
<div class="style" >
            
        
            
            <div class="nav" width='600px'>
                <nav>
                    
                    <ul>
                        
                        <li><a href="index.html">Home</a></li>
                        
     
                    </ul>
                </nav>
            </div>
        </div>


<div class="row"  style="padding:100px 300px;">
  <div class="col-50">
    <div class="container" >
      <form  action="payscript.php" method="post" style="padding: 25px;">
      
        <div class="row" >
          <div class="col-25">
            <h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>
          

            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Ujjwal kumar">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="ujjwal@example.com">
            <input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
            <input type="hidden" value="<?php echo 1;?>" name="amount">
            <label for="city"><i class="fa fa-mobile"></i> Mobile</label>
            <input type="text" id="city" name="mobile" placeholder="Mobile Number">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Shyam nagar">


          
        </div>
       
        <input type="submit" value="Pay Now" class="btn">
      </form>
    </div>
  </div>
 
</div>
<div class="balloon"></div>
<div class="balloon"></div>
<!-- <div class="balloon"></div> -->
<!-- <div class="balloon"></div>
<div class="balloon"></div> -->
</body>
</html>
