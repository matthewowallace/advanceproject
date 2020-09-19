
import Vue from 'vue';
import App from './components/App.vue';
import router from './router';


import { gsap, TweenMax } from "gsap";
import { ExpoScaleEase, RoughEase, SlowMo } from "gsap/EasePack";
import { Draggable } from "gsap/Draggable";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(Draggable, ScrollToPlugin, ScrollTrigger, ExpoScaleEase, RoughEase, SlowMo);


new Vue({
    el: '#app',
    router,
    render: home => home(App)
});
