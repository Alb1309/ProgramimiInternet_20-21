
<!DOCTYPE html>
<HTML>
    <head>
     
<title>
    Kostrebike 
</title>
<link rel="stylesheet" href="style.css">
<style>
  #text {
  width: 50px;
  font-size: 55px;
  color: black;
  width: 100%;
  text-align: center;
}
#pcrn{
  width: 100%;
  background-color: white;
}
#elements{
  display: inline-flex;

}
#el{
  width: 20%;
  height: 20%;
  margin-left: 4%;
  background-color: #11181f;
  border-radius: 10px;
  cursor: pointer;
}
#mre{
  box-shadow: 5px 5px 5px black;
  border-radius: 5px;
  margin-top: 30px;
  color:white;
  font-size: 25px;
  width: 400px;
  height: 50px;
  margin-left: 36%;
  border-style: solid;
  border-color: white;
  background-color: #11181f;
  border-radius: 3px;
  margin-bottom: 3%;
  text-align: center;
}

.trip{
  border: 1px solid white;

}

  </style>
    </head> 
    <body>
      
    
    <?php include "./mynav.php"; ?>
        <div id="headers" style="display: block; ">
          <div id="nav" >
              <ul id="list" style="display: flex;margin-left: 25%;">
              
              <li id="tps"><a href="discover">Information</a></li>
              <li id="tps"><a href="pcrn">Popular cycle routes nearby</a></li>
              <li id="tps"><a href="pr">Popular regions</a></li>


              </ul>
          </div>
      </div>
      <div >
        <div class="bike"></div>
        <div class=" wheel wheel1"></div>
        <div class="wheel wheel2"></div>
      </div>
      <div class="txt"></div>
      <div class="Local "> NO MORE STRAIGHT ROADS</div>
      <div id="Local">NEW!</div>
      <div id="txt">Have you chacked out our new maps version?</div>
      <div class="trip"><a href="discoverallroutesnearby.php">Go to tour</a></div>
      <div class="tripp"><a   href="exploreallregions.php">Start your ride</a></div>

      <div>
        <img src="media/wave_top.3346a011.svg" class="HomeWaveTop">
      </div>
          
            <div id="content-list">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                      <div class="numbertext">1 / 4</div>
                      <img src="media/bike2.jpeg" style="width:100%; height: 620px; ">
                      <div class="text">Caption Text</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">2 / 4</div>
                      <img src="media/bike1.jpeg" style="width:100%; height: 620px;">
                      <div class="text">Caption Two</div>
                    </div>
                    
                    <div class="mySlides fade">
                      <div class="numbertext">3 / 4</div>
                      <img src="media/bike3.png" style="width:100%;height: 620px; ">
                      <div class="text">Caption Three</div>
                    </div>
                    <div class="mySlides fade">
                      <div class="numbertext">4 / 4</div>
                      <img src="media/bike4.jpeg" style="width:100%;height: 620px; ">
                      <div class="text">Caption Three</div>
                    </div>
                    
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 

                    </div>
                    
                    <script>
                    var slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("dot");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 3000); 
                    }
                    </script>

            </div>
        
        <div id="body">
          
          <div class="HomeMiddle" style="background-image: url('media/element_long.497cfb51.png'); ">
          
            <div style="background-color:  #11181f;"  id="discover">
            <div style="display: inline-block; margin-left: 12%; font-size: 25px" id="dd">
                    7.5M
                    <p>Cycling routes</p>
            </div>
            <div style="display: inline-block;margin-left: 10%; font-size: 25px" id="dd">
            5 M
            <p>Users worldwide</p>
            </div>
            <div style="display: inline-block; margin-left: 10%; font-size: 25px" id="dd">
            548 M
            <p>Total kilometers</p>
            </div>
            <div style="display: inline-block; margin-left: 10%; font-size: 25px" id="dd">
            5 M
            <p>App downloads</p>
            </div>

            </div>
            <hr>
            <div id="pcrn" style="display: inline-block; background-color: white">
                    <div id="text">
                    Popular regions
                    </div>
                    <br>
                    <div id="elements">
                    <a id="el" href="germia.php"> <div >
                        <img src="media/Germia_1.jpeg" style="width: 100%; height:50%">
                        <p style="text-align: center;">Germia 
                        <p>
                        <p style="text-align: center;">Country: Kosove<p>
                        <p style="text-align: center;">City: Prishtine<p>
                        <p style="text-align: center;">Area: 1226ha, Maxpoint: 1090m<p>

                          
                      </div></a>
                      
                      <a id="el" href="pishatsllatine.php"> <div >
                      <img src="media/PishatSllatine.jpg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Pisha Sllatine<p>
                      <p style="text-align: center;">Country: Kosove<p>
                        <p style="text-align: center;">City: Fushe Kosove<p>
                        <p style="text-align: center;">Area: 56ha, Maxpoint: 372m<p>

                      
                      </div></a>
                      <a  id="el" href="liriapark.php"><div >
                      <img src="media/LiriaPark.jpg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Liria Park<p>
                      <p style="text-align: center;">Country: Kosove<p>
                        <p style="text-align: center;">City: Ferizaj<p>
                        <p style="text-align: center;">Area: 653ha, Maxpoint: 546m<p>


                      </div></a>
                      <a id="el" href="blinajapark.php"><div >
                      <img src="media/BlinajaPark.jpg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Blinaja Park<p>
                      <p style="text-align: center;">Country: Kosove<p>
                        <p style="text-align: center;">City: Lipjan<p>
                        <p style="text-align: center;">Area: 853ha, Maxpoint: 790m<p>


                      </div></a>

                    </div>
                    <br>
                    <div ><a id="mre" href="exploreallregions.php">
                    Explore all regions
                    </a>

                    </div>
            </div>
            <hr>
            <div id="pcrn" style="display: inline-block; background-color: white">
                    <div id="text">
                    Popular cycle routes nearby
                    </div>
                    <br>
                    <div id="elements">
                    <a id="el" href="###"> <div >
                        <img src="media/Germia_1.jpeg" style="width: 100%; height:50%">
                        <p style="text-align: center;">Germia to Parku i qytetit<p>
                      </div></a>
                      <a id="el" href="###"> <div >
                      <img src="media/Brezovica-IBNA.jpeg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Brezovica trip<p>

                      </div></a>
                      <a  id="el" href="###"><div >
                      <img src="media/Germia_1.jpeg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Germia to Parku i qytetit<p>

                      </div></a>
                      <a id="el" href="###"><div >
                      <img src="media/Germia_1.jpeg" style="width: 100%; height:50%">
                      <p style="text-align: center;">Germia to Parku i qytetit<p>

                      </div></a>

                    </div>
                    <br>
                    <div ><a id="mre" href="discoverallroutesnearby.php">
                      Discover all routes nearby
                    </a>

                    </div>
            </div>
            </div>
            
            </div>
            <?php include "./footer.php"; ?>

      
    </body>
    

</HTML>
