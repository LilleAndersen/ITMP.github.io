<!DOCTYPE html> <!-- Holder med referanse i hht HTML5 standard -->
<meta charset="UTF-8"> <!-- Tagg for å bruke æ,ø og å-->
<html lang="nb-NO"> <!-- Definerer norsk som språk - en del av universell utforming-->

<head> <!-- Hode, naturlig del av HTML, standarden. Brukes til overordnet informasjon, koblinger mm -->

<title>Startsiden - ITM - konseptutvikling og programmering </title> <!-- Tittel på HTML filen min i nettleservinduet-->

<!-- Koblingen til .css filen (stilarket) mitt, og andre stilark, eksterne bibliotek, script, mm. - for at siden skal være mest mulig fleksibel og brukervennlig -->
<link href="CSS/minstil.css" rel="stylesheet" type="text/css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
</head>

<body> <!-- Hode, naturlig del av HTML, standarden. Brukes til overordnet informasjon, koblinger mm -->
  <div class="main"> <!-- Hovedklasse, den som definerer overordnet for bruk av struktur på siden - hvordan feks grids er brukt på mine sider -->
    <div class="meny-topp"> <!-- Toppmenyen min -->
        &#128279; <a href="http://www.youtube.com/channel/UCFB7G96aSKQjiRxnOyjffuQ"target="_blank">Youtube</a>
        &#128279; <a href="https://www.w3schools.com/html/default.asp"target="_blank">HTML</a>
        &#128279; <a href="https://www.w3schools.com/css/default.asp"target="_blank">CSS</a>
        &#128279; <a href="https://www.w3schools.com/js/default.asp" target="_blank">JavaScript</a>
        &#128279; <a href="https://www.w3schools.com/Php/default.asp" target="_blank">PHP</a>
        &#128279; <a href="https://microbit.org"target="_blank">Microbit</a>
        &#128279; <a href="https://scratch.mit.edu"target="_blank">Scratch</a>
        &#128279; <a href="https://ff.ndla.no/subjects/subject:f248e20c-3131-495e-a759-c71678430d5f?fbclid=IwAR2hesczpV9Ul4mkZcQBlXHamfPphH17lub0oDktza0VXdWvw1VwNJTG-9I" target="_blank">NDLA</a>
      </div>
        <div id="nedtelling"> <!-- Script for nedtelling av tid. Varier på de ulike siden i forhold til de uliuke ferien i løpet av et skoleår-->
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jun 18, 2021 12:00:00").getTime();
                
                // Update the count down every 1 second
                var x = setInterval(function() {
                
                  // Get today's date and time
                  var now = new Date().getTime();
                    
                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;
                    
                  // Time calculations for days, hours, minutes and seconds
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                  // Output the result in an element with id="demo"
                  document.getElementById("nedtelling").innerHTML = "Antall dager til sommerferien: "+ days + "d " + hours + "h "
                  + minutes + "m " + seconds + "s ";
                    
                  // If the count down is over, write some text 
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("nedtelling").innerHTML = "EXPIRED";
                  }
                }, 1000);
                </script>
           </div>       
       

    <div class="header">
        <h1>Konseptutvikling og programmering </h1>
        </div>
    

<div class="meny-venstre">
 
  <div class="panel-group" id="accordion">
    
      <!--meny del 10-->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"> <a href="index.html">ITM</a></a>
          </h4>
        </div>
          <div id="collapse10" class="panel-collapse collapse in">
            <div class="panel-body">
               <ul><a href="PHP/Kildeoversikt.php" target="blank" >Oversikt over kilder</a></ul>
               <ul><a href="HTML/Om_sidene.html">Bildekarusell</a></ul>
               <ul>Lærebedrifter</ul>    
            </div>
        </div>
      </div>

    <!--meny del 1-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Programvare</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <ul><a href="HTML/Programvare.html">Programvare</a></ul>
        </div>
      </div>
    </div>

     <!--meny del 2-->
   
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Oppgaver</a>
        </h4>
      </div>

      
      <div id="collapse1" class="panel-collapse collapse ">

        
        <div class="panel-body">
             <ul><a href="HTML/Oppgave_intro_nett.html">Nettside</a></ul>
             
             <ul>App</ul>
            <ul>Databaser</ul>
            
            <ul>Escaperoom</ul>
            
           
    </div>
    
      </div>
    </div>

    
     <!--meny del 3-->
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Fagstoff</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <ul><a href="HTML/Filmer.html">Instruksjonsfilmer</a></ul>
          <ul><a href="HTML/Nettkilder.html">Lærestoff</a></ul>
          <ul><a href="PHP/Kildeoversikt.php">Kildeoversikt</a></ul>
          
      
      </div>
      </div>
    </div>

     <!--meny del 4-->

    
<!--Utgår-->



  </div> 
  </div>
      

  
    <div class="hovedvindu">
      
<h1>Legge inn kilder i databasen</h1>
<?php
   
   
   include 'PHP/database.php';
   include 'PHP/kobling.php';
   include 'PHP/SELECT_Oversikt1.php';
   include 'Delete.php';
   
   
   ?>
    </div>
   
     
    <div class="footer">
     
            <p>Copyright &copy; 2020 </p>
            <script>
              document.write(Year());
              </script>
                Dagens dato: <script>
                    document.write(Date());
                    </script>
                    
    </div>
  </div>

<!-- Slutt på body og HTML -->
</body>
</html>
