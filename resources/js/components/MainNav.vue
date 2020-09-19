<template>
    <div class="nav-section">
      <div class="wrapper">
            <router-view></router-view>
            <!-- OVERLAY
            =============================== -->
            <div class="overlay first"></div>
            <div class="overlay second"></div>
            <div class="overlay third"></div>

            <!-- NAVBAR
            =============================== -->
            <nav class="navbar">
            <div class="menu" type="button" uk-toggle="target: #offcanvas-push">
                    <ion-icon name="ios-menu"></ion-icon>
            </div>
            <router-link to="/login" exact>
                 <div class="lang"><a>Signin /Create Account</a></div>
            </router-link>
            <div class="lang">eng</div>
            <div class="search">
                <ion-icon name="ios-search"></ion-icon>
            </div>
            </nav>


            <div id="offcanvas-push" uk-offcanvas="mode: push; overlay: true">
              <div class="uk-offcanvas-bar">

                  <button class="uk-offcanvas-close" type="button" uk-close></button>

                  <div class="brand-logo"><img src="../../assets/logo/YCv2.png" alt="logo"></div>

                  <h3>YOUTH CREATOR</h3>

                  <p>Young Creators  expects to captivate the interest of young upcoming artiste and creators who are seeking an opportunity to join the Media and Entertainment Economy, interact with senior experts who share the same interest and produce quality content together</p>
                  <div class="nav-menu">
                     <h3>NAVIGATION</h3>
                      <ul>
                         <li>
                             <img  src="../../assets/icons/color-palette-outline.svg" alt="aboutus icon">
                             <a> About Us </a>
                         </li>
                         <li>
                              <img  src="../../assets/icons/call-outline.svg" alt="contact icon">
                             <a> Contact Us </a>
                        </li>
                         <li>
                               <img  src="../../assets/icons/earth-outline.svg" alt="service icon">
                             <a> Services </a>
                        </li>
                      </ul>
                  </div>
                       <div class="nav-menu">
                     <h3>Terms & Policy</h3>
                      <ul>
                         <li class="term">
                             <a> Terms & Conditions </a>
                         </li>
                         <li class="term">
                             <a> Policy </a>
                        </li>
                      </ul>
                  </div>
                   <div class="nav-menu">
                     <p>Copyright @ 2020</p>
                  </div>
              </div>
          </div>


            <!-- SOCIAL MEDIA
            =============================== -->
            <div class="media">
            <ul>
                <li><a>facebook</a></li>
                <li><a>instagram</a></li>
                <li><a>twitter</a></li>
            </ul>
            </div>

            <!-- TEXT
            =============================== -->
            <div class="text">
            <h1>
                <span class="hidetext">Youth</span>
            </h1>
            <h2>Creator</h2>
            <h3>
                <span class="hidetext">2020<br></span>
            </h3>
            <p>
                <span class="hidetext subtext">
                   <blockquote>
                      The Question isn't Who is Going To Let Me; It's Who is Going To Stop Me <br>- Ayn Rand
                   </blockquote>
                </span>
            </p>
            </div>

            <div class="slider">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider="center: true">
                    <ul class="uk-slider-items uk-grid">
                        <li class="uk-width-1-1">
                            <div class="uk-panel">
                                <h1>Create</h1>
                            </div>
                        </li>
                        <li class="uk-width-1-1">
                            <div class="uk-panel">
                                <h1>Innovate</h1>
                            </div>
                        </li>
                        <li class="uk-width-1-1">
                            <div class="uk-panel">
                                <h1>Grow</h1>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                 </div>
                  <router-link to="/login" exact>
                    <div class="getstarted">
                        <a>Get Started</a>
                    </div>
                  </router-link>
            </div>

            <!-- SPONSOR
            =============================== -->
            <div class="sponsor">
            <!-- <img src="./images/sponsor-logo.png" alt=""> -->
            <p>Youth Creator 2020</p>
            </div>

            <!-- DISTORTION
            =============================== -->
            <div class="distortion"></div>

        </div>
    </div>
</template>

<script>

export default {

  mounted: function(){
     TweenMax.to('.first', 1.5, {
              delay: .5,
              top: "-100%",
              ease: Expo.easeInOut
            });

     TweenMax.to('.second', 1.5, {
              delay: .7,
              top: "-100%",
              ease: Expo.easeInOut
            });
      TweenMax.to('.third', 1.5, {
              delay: .9,
              top: "-100%",
              ease: Expo.easeInOut
            });

      TweenMax.from(".slider", 1.5, {
              delay: 2,
              opacity:0,
              x: "-200",
              ease: Expo.easeInOut
        });

      // NAVBAR
            TweenMax.staggerFrom(".navbar div", 1.5, {
              delay: 1.5,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            }, 0.08);

            // MEDIA
            TweenMax.staggerFrom(".media ul li", 1.5, {
              delay: 1.5,
              opacity: 0,
              x: "-20",
              ease: Expo.easeInOut
            }, 0.08);

            // TEXT
            TweenMax.from(".text h1 .hidetext", 1.5, {
              delay: 1,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text h3 .hidetext", 1.5, {
              delay: 1.2,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text p .hidetext", 1.5, {
              delay: 1.3,
              y: "100%",
              ease: Expo.easeInOut
            });

            TweenMax.from(".text h2", 1.5, {
              delay: 1.5,
              opacity: 0,
              x: "-10000",
              ease: Expo.easeInOut
            });

            // SPONSOR
            TweenMax.from(".sponsor img", 1.5, {
              delay: 1.5,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

            TweenMax.from(".sponsor p", 1.5, {
              delay: 1.6,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

            // DISTORTION
            TweenMax.from(".distortion", 1.5, {
              delay: 2,
              opacity: 0,
              y: "20",
              ease: Expo.easeInOut
            });

             TweenMax.staggerFrom(".info img", 1.5, {
              delay: 2,
              opacity: 0,
              y: "50",
              ease: Expo.easeInOut
            });

  },

}
</script>

<style scoped>

.nav-section{
    background-image: url('../../assets/paintbg.png');
    background-size:cover;
    background-color: #f5f6ff;
}

blockquote::before {
  content: open-quote;
}
blockquote::after {
  content: close-quote;
}
blockquote {
  quotes: "“" "”" "‘" "’";
  color: #686868;
  font-size: 14px;
}

/* Nav Menu
=========================== */
.brand-logo{
  max-width: 150px;
  margin-left: 55px;
}

.uk-offcanvas-bar h3{
    text-align: center;
    margin-top: 25px;
}

.uk-offcanvas-bar p{
    text-align: center;
}

.nav-menu{
    margin-top: 70px;
}

.nav-menu ul{
    display: block;
}

.nav-menu ul li{
    margin-top: 25px;
}

.nav-menu ul li img{
    width: 20px;
    height: 20px;
    margin-left: 40px;
}

.nav-menu ul li a{
  margin-left: 20px;
}

.nav-menu ul li a:hover{
    letter-spacing: 2px;
}

.nav-menu .term{
    text-align: center;
}

.nav-menu .term a{
    margin-left: -35px;
}

/* Menu
=========================== */

.menu {
  position: relative;
  display: inline-block;
}


hr{
    margin: 4px 15px;
    opacity: 0.6;
}

button{
    background-color: transparent;
    box-shadow: none;
    border:none;
}

.menu button:hover{

}

.nav-section{
  font-family: 'Poppins';
  width: 100%;
  height: 100vh;
  overflow: hidden;
  color:#686868;
}

ul {
  list-style: none;
}

/* NAVBAR
=========================== */
.navbar {
  display: flex;
  justify-content: space-between;
  height: 80px;
  align-items: center;
}

.navbar > div {
  padding: 0 30px;
  font-size: 20px;
}

.navbar .menu {
  margin-right: auto;
}

.navbar .lang {
  font-size: 10px;
  font-weight: 600;
  text-transform: uppercase;
}

/* SOCIAL MEDIA
=========================== */
.media ul {
  position: absolute;
  bottom: 250px;
  left: -140px;
  transform: rotate(-90deg);
}

.media ul li {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: 2px;
  display: inline-block;
  padding: 0 30px;
}


/* TEXT
=========================== */
.text {
  position: absolute;
  top: 200px;
  left: 100px;
  transform: rotate(-90deg);
}

.subtext{
  transform: rotate(90deg);
  margin-left: 15px;
}

.slider {
    position: absolute;
    top: 600px;
    left: 73%;
    overflow: hidden;
    width: 500px;
    height:200px;
}

.slider h1{
    font-size: 100px;
    text-align: center;
    color:#303030;
}

.text h1 {
  font-size: 120px;
  text-transform: uppercase;
  font-weight: 900;
  letter-spacing: -10px;
  margin-bottom: 20px;
  color: #452c63;
  text-shadow: 0 1px 0 #4c2f6e,
               0 2px 0  #533579,
               0 3px 0 #57387c,
               0 4px 0  #4d3170,
               0 5px 0 #53337a,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);

  position: relative;
  overflow: hidden;
  height: 150px;
  width: 600px;
}
.text h1 .hidetext {
  position: absolute;
}

.text h2 {
  position: absolute;
  top: 40px;
  left: -80px;
  /* color: rgba(150,30,70,0.6); */
    /* background: -webkit-linear-gradient(#eee, #333); */
  background: -webkit-linear-gradient(90deg,#B0C4DE 0%, #5D8AA8 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  z-index: -1;
  font-size: 150px;
  font-weight: 600;
  letter-spacing: 8px;
  text-transform: uppercase;
}

.text h3 {
  font-size: 70px;
  text-transform: uppercase;
  font-weight: 600;
  line-height: 1;
  color: #452c63;
  margin-top: 35px;
   text-shadow: 0 1px 0 #4c2f6e,
               0 2px 0  #533579,
               0 3px 0 #57387c,
               0 4px 0  #4d3170,
               0 5px 0 #53337a,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);


  position: relative;
  overflow: hidden;
  height: 150px;
}
.text h3 .hidetext {
  position: absolute;
}

.text p {
  width: 200px;
  font-size: 12px;
  margin-top: 30px;
  font-weight: 500;
  position: relative;
  height: 210px;
}
.text p .hidetext {
  position: absolute;
}

/* slider */

.getstarted{
    position: relative;
    margin-top: 40px;
    margin-left: 160px;
    z-index: 1;
}

.getstarted a{
    padding: 10px 55px;
    border: 1px solid #452c63;
    transition: 1s ease-in-out;
     animation: hue-rotate 10s linear infinite;
}

.getstarted a:hover{
    padding: 10px 55px;
    background-color: #452c63;
    animation: hue-rotate 10s linear infinite;
}
/* SPONSOR
=========================== */
.sponsor {
  position: absolute;
  right: 2px;
  bottom: 100px;
  text-align: center;
}

.sponsor img {
  width: 200px;
  transform: rotate(-90deg);
}

.sponsor p {
  margin-top: 20px;
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 900;
  transform: rotate(90deg);
}

/* DISTORTION
=========================== */
.distortion {
  width: 580px;
  height: 720px;
  position: absolute;
  right: 300px;
  bottom: 0;
}

/* OVERLAY
=========================== */
.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0%;
  z-index: 99;
   animation: hue-rotate 10s linear infinite;
}

.first {
  background:#452c63;
}

.second {
  background:#452c63;
  left: 33.3%;
}

.third {
  background: #452c63;
  left: 66.6%;
}

a{
    transition: 0.6s ease-in-out;
}

.lang a:hover{
     color: #452c63 !important;

}

.media a:hover{
    color: #452c63;
}


@keyframes hue-rotate {
      from {
        -webkit-filter: hue-rotate(0);
        -moz-filter: hue-rotate(0);
        -ms-filter: hue-rotate(0);
        filter: hue-rotate(0);
      }
      to {
        -webkit-filter: hue-rotate(360deg);
        -moz-filter: hue-rotate(360deg);
        -ms-filter: hue-rotate(360deg);
        filter: hue-rotate(360deg);
      }
}

/* Off Canvas
=========================== */

.uk-offcanvas-bar{
    background-color: #452c63;
    animation: hue-rotate 10s linear infinite;
}

</style>
