@extends ('layouts.default')

@section('content')

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
	<title>Kathleen Lita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Dosis', sans-serif;
    background-color:#FF8BA0;
}

.wrapper{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    width: 50vw;
    position: relative;
}

.vertical{
    height: 50px;
    width: 1px;
    background: #f0f0f0;
}
.text{
    padding: 50px 0;
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
    font-family: 'Dosis', sans-serif;
   
}
.text h2{
    text-transform: uppercase;
    font-size: 80px;
    padding-bottom: 10px;
   font-family: 'Dosis', sans-serif;
}
.text p{
    padding-top: 10px;
    font-weight: 300;
    line-height: 1.8;
    font-family: 'Dancing Script', cursive;
    font-size:50px ;
}
nav ul{
    list-style: none;
    display: flex;
}
nav ul a{
    text-decoration-color: none;
    color: #f0f0f0;
    font-family: 'Dosis', sans-serif;
    font-size: 16px;
    font-weight: 300;
    text-transform: uppercase;
}
nav{
    border: 1px solid #f0f0f0;
    border-radius: 5px;
}
nav ul li{
    display: block;
    padding: 12px 0;
    width: 120px;
    border-right: 1px solid #f0f0f0;
    transition: background 0.5s ease;
}
nav ul li:last-child{
    border: none;
}
nav ul li:hover{
    background: rgba(255, 255, 255, 0.2);
}
header{
    color: #f0f0f0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    width: 100%;
}


.page{
    width: 60vw;
    position: absolute;
    margin: 38px auto;
    background-color:#FE65AC;
    color: #fff;
    line-height: 1.7;
    padding: 35px;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    display: none;
}

.page span{
    display: block;
    font-size: 26px;
    text-align: right;
}
.page span i{
    cursor: pointer;
}
.page .title{
    font-weight: 500;
    text-transform: uppercase;
    border-bottom: 2px solid #fff;
    width: 120px;
    margin: 20px 0;
}
.page p{
    padding: 15px 0;
    font-size: 15px;
    font-weight: 300;
}


/* media queries */

@media screen and (max-width: 560px){
    nav ul li{
        width: 70px;
        padding: 7px 0;
    }
    nav ul a{
        font-size: 14px;
    }
}

@media screen and (max-width: 768px){
    .wrapper{
        width: 90vw;
    }
    .page{
        width: 90vw;
    }
}

@media screen and (max-width: 1170px){
    .page{
        width: 80vw;
    }
}
</style>
</head>
    <body>
        
        <header>
            <div class = "wrapper">
                <div class = "vertical"></div>
                <div class = "text">
                    <h2>Kathleen Lita</h2>
                    <p>My Laravel Personal Webpage</p>
                </div>
                <div class = "vert-line"></div>
                <nav>
                    <ul>
                        <li><a href = "#">About Me</a></li>
                        <li><a href = "#">CS202 Favorite Topic</a></li>
                        <li><a href = "#">Laravel Topic</a></li>
			<li><a href = "#">Six Years From Now</a></li>
                        <li><a href = "#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

    <section id="About Me" class="page">
	<span class ="close-btn">
		<i class="fas fa-times"></i>
	</span>
             <p style="text-align:center"><h2><b>About Me</b> <br><br>"Don't wish for it. Work for it."<br><br>
                I'am Kathleen Victorio Lita, 21 years of age. I'am currently in 3rd-year college taking up Bachelor of <br> Science in Computer Science at Pamantasan ng Lungsod ng Pasig.  I was a former student at Pasig City Science <br> High School. I'am a hardworking and resposible student that's why I was able to maintain being a consistent Dean's Lister<br> and with a dream of graduating as a Cum Laude. Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig.</h2> </p>
        </section>
  
 <section id="CS202 Favorite Topic" class="page">
	<span class ="close-btn">
		<i class="fas fa-times"></i>
	</span>
             <h2><b>Load Balancing</b> <br><br><p> It refers to efficiently distributing incoming network traffic across a group of backend servers, also known as a server farm or server pool. <br> As an organization meets demand for its applications, the load balancer decides which servers can handle that traffic. This maintains a <br> good user experience.
                       Modern high‑traffic websites must serve hundreds of thousands, if not millions, of concurrent requests from users <br> or clients and return the correct text, images, video, or application data, all in a fast and reliable manner. To cost‑effectively scale to meet <br> these high volumes, modern computing best practice generally requires adding more servers. It doesn’t need a clock for integration—rather, it <br> utilizes the parity bits to tell the receiver how to translate the data.  It is straightforward, quick, cost-effective, and doesn’t need 2-way communication <br>to 
                       function. Load balancing is the process of distributing network traffic across multiple servers. This ensures no single server bears too much demand. 
                       <br><br> By spreading the work evenly, load balancing improves application responsiveness. It also increases availability of applications and websites for users.<br> Modern applications cannot run without load balancers. Over time, software load balancers have added additional capabilities including application security.</h2>
        </section>
 
   <section id="Laravel Topic" class="page">
	<span class ="close-btn">
		<i class="fas fa-times"></i>
	</span>
                <h2> <b>Laravel Topic: Models</b><br><br><p> <b>Getting Started with Database in Laravel </b></p><p class="content1"> Almost every modern web application interacts with a database.  Laravel makes interacting with databases extremely simple across a <br>variety of supported databases using raw SQL, a fluent query builder, and the Eloquent ORM.
                     Laravel provides first-party support for four databases:<br>
                    
                     MySQL 5.7+ (Version Policy)<br>
                     PostgreSQL 9.6+ (Version Policy)<br>
                     SQLite 3.8.8+<br>
                     SQL Server 2017+ (Version Policy)

                    <br><p class="sub"> <b>Database Configuration</b></p><p class="content1">The configuration for Laravel's database services is located in your application's config/database.php configuration file. 
                        In this file, you may <br>define all of your database connections, as well as specify which connection should be used by default. 
                        Most of the configuration options within this file <br>are driven by  the values of your application's environment variables. 

                    <br><p class="sub"> <b>DB Configuration Using URLs</b></p><p class="content1">Typically, database connections are configured using multiple configuration values <br>
                        - host <br>
                        - database<br>
                        - username & password <br>
                        - port, etc. <br>
                        Each of these configuration values has its own corresponding environment variable. This means that when configuring your database connection information<br> on a production server, you need to manage several environment variables. </h2></p>
        </section>

    <section id="Six Years from Now" class="page">
	<span class ="close-btn">
		<i class="fas fa-times"></i>
	</span>
		<h2><b>Six Years From Now <br><br> </b><p> 
                 Six years from now, I can see myself as a successful programmer and business woman also. Aside from <br>working as a programmer, I also want to build my own company or business. <br> 
             <br>Lastly, I want to be a successful person so that I can provide for the needs and wants of my family.</h2></p>
   </section>

   <section id="Six Years from Now" class="page">
	<span class ="close-btn">
		<i class="fas fa-times"></i>
	</span>
 <h2><b>Contact Details</b> <br><br> <i class="bi bi-envelope"> Email: lita_kathleen@plpasig.edu.ph </i><br><i class="bi bi-facebook"> Facebook: https://www.facebook.com/litacathleen13 <br> <i class="bi bi-instagram"> Instagram: @kathleen.0513 <br> <i class="bi bi-twitter">Twitter: @kathleen_lita</i> </i></i></i></h2>
 </section>
<script>
const links = document.querySelectorAll('ul li');
const pages = document.querySelectorAll('.page');
const allBtns = document.querySelectorAll('.close-btn');

let selectedPageBtn = "";
for(let i = 0; i < links.length; i++){
    links[i].addEventListener('click', function(event){
        event.preventDefault();
        for(let i = 0; i < pages.length; i++){
            pages[i].style.display = "none";
        }
        pages[i].style.display = "block";
        selectedPageBtn = i;
        document.querySelector('header').style.filter = "blur(2px)";
    });
}

for(let i = 0; i < allBtns.length; i++){
    allBtns[i].addEventListener('click', function(){
        allBtns[i].parentElement.style.display = "none";
        document.querySelector('header').style.filter = "blur(0px)";
    });
}
</script>
</body>
</html>
@stop
