@extends ('layouts.default')

@section('content')

<html>
    <head>
    <title> Kathleen Lita </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Styles -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style media="screen">
 *{
    margin: 0;
    padding: 0;
 }

html {
    scroll-behavior:smooth;
    scroll-direction: vertical;
}

.header {
  margin: 0 auto;
  width: 100%;
  text-align: center;
  background: #1abc9c;
  color: white;
  align-self: center;
  overflow: hidden;
  padding-top: 280px;
  padding-bottom: 280px;
}

.title1{
    font-family: 'Dancing Script', cursive;
    font-size: 60px;
    text-align:center;
    margin-left: 10%;

}

.content{
    font-family: 'Dosis', sans-serif;
    font-size: 20px;
    text-align: center;
}

.title{
    font-family: 'Dosis', sans-serif;
    font-size: 90px;
    color: white;
}

.name{
    font-family: 'Dancing Script', cursive;
    font-size:50px ;
    text-align: center;
    color:white;
}

.title2{
    font-family: 'Dancing Script', cursive;
    font-size: 50px;
    text-align: center;
    color: white;
}

.content1{
    font-family: 'Dosis', sans-serif;
    font-size: 20px;
    text-align:center;
    color: white;
}

.title3{
    font-family: 'Dancing Script', cursive;
    font-size:50px;
    text-align: center;
}

.content2{
    font-family: 'Dosis', sans-serif;
    font-size:30px;
    text-align: center;
}
.title4{
    font-family: 'Dancing Script', cursive;
    font-size:50px;
    text-align: center;
    color: white;
}
.content3{
    font-family: 'Dosis', sans-serif;
    font-size:30px;
    text-align: center;
    color: white;
}

.contact{
    font-family: 'Dosis', sans-serif;
    font-size:30px;
    text-align: center;
}

#First{
    background-color:#FF8BA0;
}

#Second{
    background-color:#E6A2CB;
}
 
#Third{
    background-color:#FE65AC;
}

#Fourth{
    background-color:#F8D1E3;
}

#Fifth{
    background-color:#FE65AC ;
}

#Sixth{
    background-color:#FFCCCB;
}

ul {
    height:100%;
    width:110px;
    position:fixed;
    top: 0; left: 0px;
    list-style:none;
}

ul li {
    margin: 5px;
    padding: 15px;
    margin-top: 75px;
}

ul li a{
    color:white;
    text-decoration: none;
    font-size:20px;
    padding: 5px;
}

ul li a:hover{
    background:white;
    color:black;
}

section{
    height: 100vh;
    width: 99vw;
    display: flex;
    align-items: center;
    justify-content:center;
}
.sub{
    font-family: 'Dosis', sans-serif;
    font-size: 27px;
    text-align: center; 
    color: white;
}

</style>

</head>

<body>
    
    <div class="label">
        <section id="First">
             <h1 class="title"><b>My Laravel Personal Webpage</b><span>
             <p style="text-align:center" class="name">Kathleen Lita<br></span></h1></p>
        </section>
    </div>
        
    <div class="label">
        <section id="Second">
            <h2 class="title1"><b>Load Balancing</b> <br><br><p class="content"> It refers to efficiently distributing incoming network traffic across a group of backend servers, also known as a server farm or server pool. <br> As an organization meets demand for its applications, the load balancer decides which servers can handle that traffic. This maintains a <br> good user experience.
                       Modern high‑traffic websites must serve hundreds of thousands, if not millions, of concurrent requests from users <br> or clients and return the correct text, images, video, or application data, all in a fast and reliable manner. To cost‑effectively scale to meet <br> these high volumes, modern computing best practice generally requires adding more servers. It doesn’t need a clock for integration—rather, it <br> utilizes the parity bits to tell the receiver how to translate the data.  It is straightforward, quick, cost-effective, and doesn’t need 2-way communication <br>to 
                       function. Load balancing is the process of distributing network traffic across multiple servers. This ensures no single server bears too much demand. 
                       <br><br> By spreading the work evenly, load balancing improves application responsiveness. It also increases availability of applications and websites for users.<br> Modern applications cannot run without load balancers. Over time, software load balancers have added additional capabilities including application security.</h2>
        </section>
    </div>
        
    <div class="label">
        <section id="Third">
            <h2 class="title2"> <b>Laravel Topic: Models</b><br><br><p class="sub"> <b>Getting Started with Database in Laravel </b></p><p class="content1"> Almost every modern web application interacts with a database.  Laravel makes interacting with databases extremely simple across a <br>variety of supported databases using raw SQL, a fluent query builder, and the Eloquent ORM.
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
    </div>
        
    <div class="label">
        <section id="Fourth">
            <h2 class="title3"><b>About Me <br><br></b> <p class="content2">  "Don't wish for it. Work for it."<br><br>
                I'am Kathleen Victorio Lita, 21 years of age. I'am currently in 3rd-year college taking up Bachelor of <br> Science in Computer Science at Pamantasan ng Lungsod ng Pasig.  I was a former student at Pasig City Science <br> High School. I'am a hardworking and resposible student that's why I was able to maintain being a consistent Dean's Lister<br> and with a dream of graduating as a Cum Laude. Bachelor of Science in Computer Science at Pamantasan ng Lungsod ng Pasig. <br></h2></p>
        </section>
    </div>

    <div class="label">
        <section id="Fifth">
            <h2 class="title4"><b>Six Years From Now <br><br> </b><p class="content3"> 
                 Six years from now, I can see myself as a successful programmer and business woman also. Aside from <br>working as a programmer, I also want to build my own company or business. <br> 
             <br>Lastly, I want to be a successful person so that I can provide for the needs and wants of my family.</h2></p>
        </section>
    </div>
        
    <div class="label">
        <section id="Sixth">
            <h2 class="contact"><b>Contact Details</b> <br><br> <i class="bi bi-envelope"> Email: lita_kathleen@plpasig.edu.ph </i><br><i class="bi bi-facebook"> Facebook: https://www.facebook.com/litacathleen13 <br> <i class="bi bi-instagram"> Instagram: @kathleen.0513 <br> <i class="bi bi-twitter">Twitter: @kathleen_lita</i> </i></i></i></h2>
        </section>
    </div>

</body>

</html> 

@stop