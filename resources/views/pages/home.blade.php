@extends ('layouts.default')

@section('content')

<html>
<head>
	<title>Kathleen Lita</title>
	

	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  	
	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
*{
	padding: 0;
	margin: 0;
	font-family: 'Dosis', sans-serif;
	box-sizing: border-box;
	background-color:#FE65AC;
}
.label{
	height: 100vh;
	width: 100%;
	background-size: cover;
	background-position: center;
}

.content{
	position: absolute;
	top: 50%;
	left:8%;
	transform: translateY(-50%);
	
}
h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 75px;
}
h3{
	color: white;
	font-size: 25px;
	margin-bottom: 50px;
	font-family: 'Dancing Script', cursive;
}
h4{
	color: #fcfc;
	letter-spacing: 2px;
	font-size: 20px;
}

.about{
	width: 100%;
	padding: 100px 0px;
	background-color: #feb1b7;
}

.about-text{
	width: 550px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.about-text h2{
	color: white;
	font-size: 75px;
	text-transform: capitalize;
	margin-bottom: 20px;
}
.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}

.CS202{
	background-color:#febecc;
	width: 100%;
	padding: 100px 0px;
}
.title h2{
	color: white;
	font-size: 50px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.box{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}


.laravel{
	background-color:#f99dbc;
	width: 100%;
	padding: 100px 0px;
	text-align:center;
}
.title1 h2{
	color: white;
	font-size: 75px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.title1 p{
	font-size: 30px;
	text-align: center;
}
.contact{
	background-color:#fec206;
	width: 100%;
        height:10px;
	padding: 100px 0px;
	text-align:center;
}
.six{
font-family: 'Dosis', sans-serif;
color: white;
font-size: 20px;
}
</style>
</head>
<body>

	<div class="label">

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Kathleen <span>Lita</span></h1>
			<h3>And this is my personal laravel webpage.</h3><br><br><br>
			<p class="six"> 
                 Six years from now, I can see myself as a successful programmer and business woman also. Aside from <br>working as a programmer, I also want to build my own company or business. <br> 
             <br>Lastly, I want to be a successful person so that I can provide for the needs and wants of my family.</h2></p>
			</div>
		</div>

	<section class="about">
		<div class="main">
			<div class="about-text">
				<h2>About Me</h2>
				<p>"Don't wish for it. Work for it."<br><br>
                I'am Kathleen Victorio Lita, 21 years of age. I'am currently in 3rd-year college taking up Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig.  I was a former student at Pasig City Science High School. I'am a hardworking and resposible student that's why I was able to maintain being a consistent Dean's Lister and with a dream of graduating as a Cum Laude. Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig.</p>
			</div>
		</div>
	</section>

	<div class="CS202">
		<div class="title">
			<h2>CS202 Favorite Lesson</h2>
			<h2>Load Balancing</h2>
		</div>
		<div class="box">			
					<p> It refers to efficiently distributing incoming network traffic across a group of backend servers, also known as a server farm or server pool. <br> As an organization meets demand for its applications, the load balancer decides which servers can handle that traffic. This maintains a <br> good user experience.
                       Modern high‑traffic websites must serve hundreds of thousands, if not millions, of concurrent requests from users <br> or clients and return the correct text, images, video, or application data, all in a fast and reliable manner. To cost‑effectively scale to meet <br> these high volumes, modern computing best practice generally requires adding more servers. It doesn’t need a clock for integration—rather, it <br> utilizes the parity bits to tell the receiver how to translate the data.  It is straightforward, quick, cost-effective, and doesn’t need 2-way communication <br>to 
                       function. Load balancing is the process of distributing network traffic across multiple servers. This ensures no single server bears too much demand. 
                       <br><br> By spreading the work evenly, load balancing improves application responsiveness. It also increases availability of applications and websites for users.<br> Modern applications cannot run without load balancers. Over time, software load balancers have added additional capabilities including application security</p>
				</div>
			
		</div>

	<section class="laravel">
		<div class="title1">
				<h2>Laravel Topic: Models</h2>
</div>
				<p><b>Getting Started with Database in Laravel </b></p><p> Almost every modern web application interacts with a database.  Laravel makes interacting with databases extremely simple across a <br>variety of supported databases using raw SQL, a fluent query builder, and the Eloquent ORM.
                     Laravel provides first-party support for four databases:<br>
                    
                     MySQL 5.7+ (Version Policy)<br>
                     PostgreSQL 9.6+ (Version Policy)<br>
                     SQLite 3.8.8+<br>
                     SQL Server 2017+ (Version Policy)

                    <br><p> <b>Database Configuration</b></p><p class="content1">The configuration for Laravel's database services is located in your application's config/database.php configuration file. 
                        In this file, you may <br>define all of your database connections, as well as specify which connection should be used by default. 
                        Most of the configuration options within this file <br>are driven by  the values of your application's environment variables. 

                    <br><p> <b>DB Configuration Using URLs</b></p><p class="content1">Typically, database connections are configured using multiple configuration values <br>
                        - host <br>
                        - database<br>
                        - username & password <br>
                        - port, etc. <br>
                        Each of these configuration values has its own corresponding environment variable. This means that when configuring your database connection information<br> on a production server, you need to manage several environment variables.</p>
			</div>
		</div>
	</section>
	
	<section class="about">
		<div class="main">
			<div class="about-text">
				<h2>Contact Details</h2>
				
              <br> <i class="bi bi-envelope"> Email: lita_kathleen@plpasig.edu.ph </i><br><i class="bi bi-facebook"> Facebook: https://www.facebook.com/litacathleen13 <br> <i class="bi bi-instagram"> Instagram: @kathleen.0513 <br> <i class="bi bi-twitter">Twitter: @kathleen_lita</i> </i></i></i>
			</div>
		</div>
	</section>
		
</body>
</html>
@stop
