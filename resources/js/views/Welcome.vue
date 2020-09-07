<template>
    <div class="logo-title">
        <div class="whoweare">
            <canvas id="logo-move"></canvas>
        </div>
    </div>
</template>

<script>
export default {

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
    .logo-title{
        width: 100%;
        height: 100vh;
        position: relative;
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

    .whoweare{
        background-color: #0B0E13;
        margin-top: 20px;
        padding: 300px 50px;
    }
</style>
