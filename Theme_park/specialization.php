<!doctype html>
<html lang="en">
  <head>
   
    <title>Slideshow with Animated Circular </title>
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   
   <style>
      body {
    margin: 0;
    padding: 0;
    
    color: #FFFFFF;
    width: 100%;
    min-height: 100%;
    overflow-x: hidden;
    -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
    
  }
 
   
  body header {
    background-color: transparent;
    font-family: 'Oswald', sans-serif;
    position: fixed;
    display: block;
    width: 100%;
    height: 48px;
    top: 0;
    right: 0;
    left: 0;
    z-index: 90;
  }
  body header .header-inner {
    padding: 12px 1.5%;
  }
   
  body header .header-inner .logo {
    position: relative;
    display: inline;
    width: auto;
    height: auto;
    float: left;
  }
  body header .header-inner .logo a {
    position: relative;
    display: inline;
    width: auto;
    height: auto;
    color: #FFFFFF;
    outline: 0px none;
    outline: 0px;
    text-decoration: none;
    transition: all 0.35s ease-in-out;
    text-transform: uppercase;
  }
  body header .header-inner .logo a:hover {
    color: rgba(255, 255, 255, 0.45);
  }
  body header .header-inner .logo a span {
    font-weight: 700;
  }
  body header .header-inner nav {
    position: relative;
    display: inline;
    margin: 0;
    padding: 0;
    list-type-style: none;
    float: right;
  }
  body header .header-inner nav li {
    position: relative;
    display: inline;
    margin-left: 16px;
  }
 
  body header .header-inner nav li a {
   font-family: 'Oswald', sans-serif;
    position: relative;
    font-size: 13px;
    color: #FFFFFF;
    text-decoration: none;
    line-height: 24px;
    transition: all 0.35s ease-in-out;
  }
  
  body header .header-inner nav li a span {
    position: relative;
    z-index: 2;
  }
  body header .header-inner nav li a:hover {
    color: rgba(255, 255, 255, 0.45);
  }
  body section.slideshow {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
    height: 100vh;
    margin: 0 auto;
    visibility: hidden;
    overflow: hidden;
  }
  body section.slideshow ul.navigation {
    position: absolute;
    display: block;
    width: 640px;
    height: 640px;
    padding: 0;
    margin: 0;
    left: -230px;
    top: 50%;
    margin-top: -320px;
    z-index: 10;
  }
  
  body section.slideshow ul.navigation li.navigation-item {
    position: absolute;
    display: inline-block;
    overflow: hidden;
    width: 120px;
    height: 120px;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    border-radius: 50%;
    transition: border 0.6s ease-in-out;
  }
  
  body section.slideshow ul.navigation li.navigation-item .rotate-holder {
    position: fixed;
    display: block;
    width: 0;
    height: 0;
    left: -9999px;
    top: -9999px;
  }
  body section.slideshow ul.navigation li.navigation-item .background-holder {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 50%;
    background-repeat: no-repeat;
    background-position: center center;    
    background-size: cover;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.6s ease-in-out, visibility 0.6s ease-in-out;
  }
  body section.slideshow ul.navigation li.navigation-item:hover .background-holder {
    opacity: 0.75;
  }
  body section.slideshow ul.navigation li.navigation-item.active .background-holder {
    opacity: 0;
    visibility: hidden;
  }
  body section.slideshow .detail {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 8;
  }
  body section.slideshow .detail .detail-item {
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
  }
  body section.slideshow .detail .detail-item .headline {
    position: absolute;
    display: block;
    width: 100%;
    max-width: calc(100% - 480px);
    height: 126px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    overflow: visible;
    white-space: nowrap;
    box-sizing: border-box;
    z-index: 2;
  }
 
  body section.slideshow .detail .detail-item .headline .letter {
    font-family: 'Oswald', sans-serif;
    position: relative;
    display: inline-block;
    opacity: 0;
    visibility: hidden;
    color: #FFFFFF;
    font-size: 132px;
    line-height: 110px;
    font-weight: 900;
    font-kerning: none;
    white-space: nowrap;
    box-sizing: border-box;
      text-transform: uppercase;
  }
  
  body section.slideshow .detail .detail-item .background {
    position: absolute;
    display: block;
    width: 100%;
    width: calc(100% + 100px);
    height: 100%;
    height: calc(100% + 100px);
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: visible;
    background-repeat: no-repeat;
    background-position: center center;     
    background-size: cover;
    z-index: 1;
  }
  body section.slideshow .detail .detail-item .background::before {
    content: ""; 
    background: linear-gradient(to right, black 0%, rgba(0, 0, 0, 0) 90%);   
    position: absolute;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
      
  }
  body section.slideshow .detail .detail-item.active {
    opacity: 1;
    visibility: visible;
  }
  
   ul a {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  margin-left: -40px;
  margin-top: -17px;
  padding: 14px 171.6px;
  text-decoration: none;
}
  </style>    
  </head>
  
  <body>
    <ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="event.php">Events</a></li>
  <li><a href="specialization.php">Specialization</a></li>
  <li><a  href="ticket.php">Book A Ticket</a></li>
</ul>
 
    <section class="slideshow">
 
      <ul class="navigation">
 
        <li class="navigation-item active">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/FAIRY.jpeg);"></span>
        </li>
        <!-- slideshow:navigation:item END -->

        <!-- slideshow:navigation:item START -->
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/PANORAMA.jpeg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/OLDEST.jpeg);"></span>
        </li>
       
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/FASTEST.jpeg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/BEAUTY.jpeg);"></span>
        </li>
      
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/HEAVEN.jpeg);"></span>
        </li>
        
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/DARK.jpeg);"></span>
        </li>
         
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/DEGREE.jpeg);"></span>
        </li>
         
        <li class="navigation-item">
          <span class="rotate-holder"></span>
          <span class="background-holder" style="background-image: url(assets/img/WATER.jpeg);"></span>
        </li>
       

      </ul>
      
      <div class="detail">
       
        <div class="detail-item active">
          <div class="headline">FAIRYLAND</div>
          <div class="background" style="background-image: url(assets/img/FAIRY.jpeg); height: 100vh;"></div>
          <div class="background" style="background-image: url(assets/img/FAIRY.jpeg); height: 100vh; background-size: cover; background-position: center;"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">PANORAMA</div>
          <div class="background" style="background-image: url(assets/img/PANORAMA.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">THEOLDEST</div>
          <div class="background" style="background-image: url(assets/img/OLDEST.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">HIGHFALL</div>
          <div class="background" style="background-image: url(assets/img/FASTEST.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">BEAUTYFORBEAST</div>
          <div class="background" style="background-image: url(assets/img/BEAUTY.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">HEAVEN</div>
          <div class="background" style="background-image: url(assets/img/HEAVEN.jpeg);"></div> 
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">DARKMAGIC</div>
          <div class="background" style="background-image: url(assets/img/DARK.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">360WORLD</div>
          <div class="background" style="background-image: url(assets/img/DEGREE.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
        <!-- slideshow:details START -->
        <div class="detail-item">
          <div class="headline">WATERWORLD</div>
          <div class="background" style="background-image: url(assets/img/WATER.jpeg);"></div>
        </div>
        <!-- slideshow:details END -->
        
      </div>
      <!-- slideshow:details END -->

    </section>
    <!-- slideshow END -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/TextPlugin.min.js"></script>
    <script src="assets/js/demo.js"></script>

  </body>
</html>