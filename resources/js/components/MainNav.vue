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
            <div class="Header-Text">
                <h1>
                    learn the art & business<br> of web design
                </h1>
            </div>
            <div class="Slider">
                <Slider />
            </div>
            <div class="land-img">
                <div class="overflow-img">
                </div>
            </div>

            <div class="Subheader-Text">
             <div>
                <p class="subtitle">
                   You bring the creativity and passion.
                   We teach you the skills you need to succeed as a freelance web designer.
                   It all happens online, no matter where you are.
                </p>
             </div>
             <router-link to="/login" exact>
                 <div class="getstarted">
                     <a>getstarted</a>
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

import Slider from '../components/components/slider'

export default {

   components :{
         Slider,
      },

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
     TweenMax.from(".Header-Text h1", 1.5, {
              delay: 1.5,
              opacity:0,
              y: "100%",
              ease: Expo.easeInOut
            });

     TweenMax.from(".text h3 .hidetext", 1.5, {
              delay: 1.2,
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
  },

}
</script>

<style scoped>

@font-face {
    font-family: Fenotype;
    src: url('../../assets/fonts/FenotypeBlack.otf') format("opentype");
}

.Subheader-Text{
    position: absolute;
    top:40%;
    left:11%;
}

.subtitle{
    max-width: 300px;
}

.land-img{
    position: absolute;
    top:30%;
    left:55%;
    overflow: hidden;
}

.overflow-img{
    height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-image: url('../../assets/3d.png');
    padding: 350px 350px;
    transition: 8s ease-in-out;
}

.overflow-img:hover{
    transform: scale(7.0);
   background-position: 0% 90%;
}

.Header-Text{
    position:absolute;
    top:10%;
    left: 10%;
}

.Header-Text h1{
    text-transform: uppercase;
    font-family: 'Fenotype' !important;
    font-size: 6vw;
}

.Slider{
    position: absolute;
     top:90%;
     left: 10%;
}


.nav-section{
    /* background-image: url('../../assets/inspire.jpg');
    background-size:cover;
    background-position: 550px 30%;
    background-repeat: no-repeat; */
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
    z-index: 1;
}

.getstarted a{
    padding: 10px 55px;
    border: 1px solid #452c63;
    transition: 1s ease-in-out;
    animation: hue-rotate 10s linear infinite;
    font-family: 'Fenotype' !important;
    font-size: 24px;
    text-transform: uppercase;
    text-decoration: none;
    list-style: none;
}

.getstarted a:hover{
    padding: 10px 55px;
    background-color: #452c63;
    animation: hue-rotate 10s linear infinite;
    text-decoration: none;
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
