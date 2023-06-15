<!DOCTYPE html>
<html>
<head>

	<title>Venus Korean Food House Ordering Page</title>
	<!-- favicon -->
	<link rel="icon" type="image/png" href="./image/logo1.png" sizes="16x16"/>

	<!-- Bootstrap Link css1 js1 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


	<!-- fontawesome css1 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');


*{
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}



/*Start Header Section*/
/*Start navbar Section*/
.knav{
	background: linear-gradient(
		#fff3b1,#fff6c9);

}

.navf{
	font-family: 'Dancing Script', cursive;
}

.navs{
		border-right: solid 3px #cd961b;
		height: 30px;
		transform: translate(100px);
		display: flex;
		justify-content: center;
		align-items: center;
}

.navs:hover{
	color: #8e5a16;
	font-size: 20px;
	border-right: solid 5px #cd961b;
	transition: all 0.7s;
	transition-timing-function: ease-in;
}

.login{
	margin-left: 150px;
	border:  solid 1px black;
}

.singup{
	margin-left: 20px;
	border:  solid 1px black;
}

.login:hover{
	font-size: 18px;
	border:  solid 1px black;
	transition: all 0.7s;
	transition-timing-function: ease-in;
}

.singup:hover{
	font-size: 18px;
	border:  solid 1px black;
	transition: all 0.7s;
	transition-timing-function: ease-in;
}

/*End navbar Section*/


/*Start Banner Section*/
.banner{
	height: 100vh;
	width: 100%;
	background-image: url("./image/banner/banner02.jpg");
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
}

.kf1{
	color:  #fff7ca;
	text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}

.kf{
	color: #edcb32;
	text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}

.kf2{
	color: #edcb32;
	text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5) ;
	font-weight: bold;
}


@keyframes bot {

100% { left:0px; top:0px;
     opacity: 1;
	}
	0%   { left:2000px; top:0px;
     opacity: 0;
	}
}


.frombot {
  width: 100px;
  height: 100px;
  position: relative;
animation-name: bot;
animation-duration: 4s;
/*animation-timing-function: linear;*/
}

@keyframes top {

100% { left:0px; top:0px;
     opacity: 1;
	}
	0%   { left:2000px; top:0px;
     opacity: 0;
	}
}

.fromtop {
  width: 100px;
  height: 100px;
  position: relative;
animation-name: top;
animation-duration: 1s;
/*animation-timing-function: linear;*/
}

@keyframes tops {

100% { left:0px; top:0px;
     opacity: 1;
	}

0%   {  left:2000px; top:0px;
     opacity: 0;
	}
}

.fromtop .kf1 {
  width: 100px;
  height: 100px;
  position: relative;
animation-name: tops;
animation-duration: 3s;
}
/*End Banner Section*/

/*Start Order Section*/
.works2{
	color:#e1c23b ;
	font-weight: bold;
	font-size: 35px;
	letter-spacing: 1px;
	position: relative;
	cursor: pointer;

}


.works2::before{
	content: "";
	width: 170px;
	height: 19px;
	display: inline-block;
	position: absolute;
	top: -5px;
	right: -40px;
	border-top: 3px solid #cd961b;
	transition: all .5s;

}

.works2::after{
	content: "";
	width: 170px;
	height: 19px;
	display: inline-block;
	position: absolute;
	bottom: -10px;
	left: -31px;
	border-bottom: 3px solid #cd961b;
	transition: all .5s;

}


.works2:hover::before{
	top: -15px;
	right: +40px;
	
}

.works2:hover::after{
	 bottom: -20px;
	 left: +30px;
	
}

.bb{
	width:230px;
}

.ood{
 	background: linear-gradient(80deg,rgba(255, 235, 122, 0.3) 55%,
  rgba(255, 235, 122, 0.5) 40%,
  transparent 70%)
 	;
 	background-repeat: no-repeat;
 	transition: all .8s;
 }

 .bg1{
 	width: 700px; height: 400px;
 	border: 0px solid white;
 	transition: all .7s;

 }

 .bg1:hover{

 	transform: scale(1.1);
 	
 }

 .oo .inputs{
 	background: transparent;
 	border-color: transparent;
 	border-bottom: 3px solid #ccc;
 	box-shadow: none;
 }

 .oo .inputs:focus{
 	border-bottom: 3px solid #cd961b;
 }

 .bb .submit-btn, .bb .reset-btn {
   background: linear-gradient(-90deg,white,#cd961b);
   border: none;
   box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
   transition: all .8s;
 }

 .bb .submit-btn:hover,  .bb .reset-btn:hover{
  	background: linear-gradient(90deg,white,#cd961b);
  	box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
  }

  
/*End Order Secton*/

/* stard read page */

  .read1{
     background-image: url("./image/banner4.jpg");
     background-repeat: no-repeat;
     background-size: cover;
  }

/* end read page */

@media(max-width: 768px){

/*Start navbar section*/
	.navs{
		border-right: solid 3px #cd961b;
		height: 30px;
		transform: translate(100px);
		display: flex;
		justify-content: start;
		align-items: center;
	}

	.login{
	margin-left: 115px;
	margin-top: 20px;
	border:  solid 1px black;
}

.singup{
	margin-left: 20px;
	margin-top: 20px;
	border:  solid 1px black;
}

/*End Navbar Section*/
}

/*Start order section*/

.bg1{
	width: 600px; height: 400px;
}
.bb{
	margin-left: 410px;
}
	
/*end order section*/


    </style>


</head>	
<body>

	<!-- Start Header Section -->
		
		<header>

		<!-- Start navbar Section -->
		<nav class="navbar navbar-expand-md fixed-top knav">
			<a href="./index.php" class="navbar-brand mx-3">
				<img src="./image/logo1.png" width="80px"/>
				<span class="text-uppercase fw-bold navf"><span class="h2 navf">V</span><span class="h4 navf">enus Korean Food House</span></span>
			</a>

			<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
				<i class="fas fa-bars"></i>
				
			</button>

			<div class="navbar-collapse collapse justify-content-center text-uppercase fw-bold text-dark" id="nav" >
				<ul class="navbar-nav">
					<li class="nav-item"><a href="./index.php" class="nav-link px-4  navs">Order</a></li>
					<li class="nav-item"><a href="./read.php" class="nav-link px-4 navs">Read</a></li>
				</ul>
				
			</div>	
		</nav>
		<!-- End navbar Section -->