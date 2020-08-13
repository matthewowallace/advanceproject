<template>
   <main>
       <MainNav />
       <getStarted />
       <!-- <Body/> -->
          <!-- <canvas class="js-mouse"></canvas> -->
          <div class="logo-title">
               <canvas id="logo-move"></canvas>
          </div>
        <!-- <div class="uk-grid-small uk-child-width-auto uk-margin" uk-grid uk-countdown="date: 2020-08-15T02:07:35+00:00">
            <div>
                <div class="uk-countdown-number uk-countdown-days"></div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-hours"></div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-minutes"></div>
            </div>
            <div class="uk-countdown-separator">:</div>
            <div>
                <div class="uk-countdown-number uk-countdown-seconds"></div>
            </div>
        </div> -->


    <div id="modal-example" uk-modal>
      <div class="uk-modal-dialog uk-modal-body">
        <!-- <img src="../assets/pets-8.jpg"> -->
        <h2 class="uk-modal-title">Dont leave us hanging subscribe for more</h2>
        <p>Subscribe to our newsletter to receive the latest updates and promotions.</p>
        <form class="uk-text-center">
          <div class="uk-margin">
            <div class="uk-inline">
              <span class="uk-form-icon uk-form-icon-flip"  uk-icon="icon: mail"></span>
              <input class="uk-input" type="text" placeholder="Enter e-mail...">
            </div>
          </div>
        </form>

        <p class="uk-text-center sub-btn">
          <button class="uk-button uk-button-default uk-modal-close" type="button">SUBSCRIBE</button>
        </p>
      </div>
    </div>

   </main>
</template>

<script>
import UIkit from 'uikit';
import MainNav from './MainNav';
import Body from "./Body";
import getStarted from "./getStarted";
export default {

      components :{
         MainNav,
         Body,
         getStarted,
      },

      mounted() {
    //   let recaptchaScript = document.createElement('script')
    //   recaptchaScript.setAttribute('src', 'js/js-mouse.js')
    //   document.head.appendChild(recaptchaScript)
        let r = document.createElement('script')
        r.setAttribute('src', 'js/logo.js')
        document.head.appendChild(r)

        // var util = UIkit.util;
        //     util.on(document, 'DOMContentLoaded', function () {
        //     var modalEl = util.$('#modal-example');
        //     UIkit.modal(modalEl).show();
        // });
    },

}
</script>

<style>
    #app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 0px;

}

  html, body{
    background-color: #0B0E13;
    padding: 0;
    margin: 0;
  }

html {
  --scrollbarBG: #CFD8DC;
  --thumbBG: #90A4AE;
}
body::-webkit-scrollbar {
  width: 3px;
}
body::-webkit-scrollbar:hover{
  width: 10px;
}
body {
  scrollbar-width: thin;
  scrollbar-color: var(--thumbBG) var(--scrollbarBG);
}
body::-webkit-scrollbar-track {
  background: var(--scrollbarBG);
  background-color: #0B0E13;
}
body::-webkit-scrollbar-thumb {
  background-color: var(--thumbBG) ;
  background-color: #452c63;
  border-radius: 0px;
  border: 0px solid var(--scrollbarBG);
}
.js-mouse{
  position: absolute;
  top: 0;
  left: 0;
  padding: 0;
  margin: 0;
  z-index: 3;
  pointer-events: none;
  mix-blend-mode: difference;
}

.logo-title{
    width: 100%;
    height: 400px;
    position: relative;
    padding: 400px;
    background-color: #0B0E13;
}

#logo-move{
  position: absolute;
  top: 0;
  left: 0;
  padding: 0;
  margin: 0;
  z-index: 3;
  pointer-events: none;
  mix-blend-mode: difference;
}


/* modal */

.uk-modal-body{
  width: 450px;
  padding: 20px;
  border-radius: 0px;
  background-color: rgba(250,130,70,1) !important;
}

.uk-modal-title{
  text-align: center;
  margin-top: 7px;
  font-weight: 500;
  color: #fff;
}

.uk-modal-body p{
  text-align: center;
  padding: 5px;
  color: #fff;
}

.uk-input, .uk-select, .uk-textarea {
    max-width: 240px !important;
    width: 240px !important;
}

.sub-btn button{
  margin-top: -13px;
  width: 240px;
  background-color: rgba(250,130,70,1) !important;
  color: #fff;
  margin-bottom: 20px;
  font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
  transition: 1s;
}

.sub-btn button:hover{
  margin-top: -13px;
  width: 240px;
  background-color: #fff;
  color:#fff;
  margin-bottom: 20px;
  letter-spacing: 3px;
}

.uk-button-default {
    border: none;
}

/* countdownnumbers */

 .uk-countdown-number{
     color: rgba(150,30,70,1);
     box-shadow: 0 0px 8px rgba(150,30,70,0.3);
     padding: 20px;
 }
</style>
