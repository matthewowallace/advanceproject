<template>
    <div class="wrapper">

          <!-- OVERLAY
            =============================== -->
         <div class="overlay first-1"></div>
         <div class="overlay second-1"></div>
         <div class="overlay third-1"></div>

        <div class="login">
            <div class="login-info">
                 <router-link to="/" exact>
                <div class="brand-logo"><img src="../../../assets/logo/YCv2.png" alt="logo"></div>
                 </router-link>
                <div class="info">
                    <h3 class="info-1">LET GET:</h3>
                    <h3 class="info-2">CONNECTED</h3>
                    <h3 class="info-3">ACROSS THE ISLAND</h3>
                    <div class="line"></div>
                    <p>Social media is the ultimate equaliser. It guves a voice and a platform to anyone willing to engage.
                         <a>Learn more >></a>
                    </p>

                    <img  src="../../../assets/1.png" alt="aboutus icon">
                    <img  src="../../../assets/2.png" alt="aboutus icon">
                    <img  src="../../../assets/3.png" alt="aboutus icon">
                </div>
            </div>
            <div class="login-form">
                <div class="sign--form">
                    <h3 class="sign-header">Welcome</h3>
                    <div class="line"></div>
                    <p class="sign-para">Sign in to continue to our application</p>
                    <form class="form-1">
                        <div class="input-form">
                            <input placeholder="Enter your email address">
                            <img src="../../../assets/icons/person-circle-outline.svg" alt="user-icon">
                        </div>
                        <div class="input-form">
                            <input placeholder="Enter your Password" type="password">
                            <img src="../../../assets/icons/eye-outline.svg" alt="user-icon">
                        </div>
                       <div class="forgot">
                           <a>Forgot Password ?</a>
                        </div>
                        <div class="login-btn">
                            <button>Sign in</button>
                        </div>
                         <div class="Signup"><p>Dont have an account <a>Sign up</a> </p></div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
     mounted: function(){

            TweenMax.to(".first-1", 1.5, {
              delay: .5,
              left: "-100%",
              ease: Expo.easeInOut
            });

            TweenMax.to(".second-1", 1.5, {
              delay: .7,
              left: "-100%",
              ease: Expo.easeInOut
            });

            TweenMax.to(".third-1", 1.5, {
              delay: .9,
              left: "-100%",
              ease: Expo.easeInOut
            });

     },
}
</script>
<style scoped>
    .login{
        display: flex;
        flex-wrap: wrap;
        background-color: #f5f6ff;
    }
    .login-info{
        display: flex;
        flex-basis: 70%;
        flex-grow: 2;
        position: relative;
    }

    .login-form{
        display: flex;
        flex-basis: 30%;
        flex-grow: 1;
        padding: 70px;
        /* background-image: url('../../../assets/paint.png');
         background-size:cover;
         background-repeat: no-repeat; */
    }

    .info{
        margin: 100px;
    }

    .sign--form{
        flex-wrap: wrap;
        flex-basis: 100%;
        border: 5px solid #303030;
    }

    .sign-header{
        flex-basis: 100%;
        text-align: center;
        font-size: 50px;
        color: #303030;
        margin: 0 45px;
        margin-top: 30%;

    }

    .sign-para{
        flex-basis: 100%;
        text-align: center;
        font-size: 16px;
        color: #686868;
        margin-top: 10px;
    }

    .form-1{
        flex-basis: 100%;
        text-align: center;
        margin-top: 60px;
    }

    .login-btn button{
       padding: 10px 40px;
       width: 60%;
       background-color:#303030;
       transition: 1s ease-in-out;
       color:  #fff;
       font-weight: 500;
       border-radius: 6px;
    }

    .login-btn button:hover{
        letter-spacing: 2px;
        transform: translateY(-3px);
        box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
    }

    .forgot{
        margin: 25px 0;
        margin-left: 30%;
    }

    .forgot a{
        color: #686868;
    }

    .Signup{
         margin-top:30%;
         color: #a73a3a;
    }
    .Signup p{
        color:#686868;
    }
    .Signup p a{
        color: #a73a3a;
        font-size: 20px;
    }

    .info-1{
        font-size: 40px;
         color: #686868;
    }
    .info-2{
        font-size: 40px;
         color: #686868;
    }

    .info-3{
        font-size: 75px;
        color: #303030;
        margin-bottom: 10px;
    }

    .info img{
        max-width: 350px;
        margin-right: 2px;
        margin-top: 15px;
    }

    .info p{
        max-width: 300px;
    }

    .line{
        padding:5px 30px;
        background-color: #303030;
        width: 15%;
        margin-left: 2px;
         margin-bottom: 35px;
    }

    .info a{
        color: #a73a3a;
        font-weight: bold;
        font-size: 15px;
        transition: 1s;
    }

    .info a:hover{
        letter-spacing: 1px;
    }

    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0%;
        z-index: 99;
        animation: hue-rotate 10s linear infinite;
    }

    .first-1 {
        background:#452c63;
    }

    .second-1 {
        background:#452c63;
        left: 33.3%;
    }

    .third-1 {
        background: #452c63;
        left: 66.6%;
    }

    .brand-logo{
        max-width: 50px;
        position: absolute;
        top: 3%;
        left: 7%;
        animation: hue-rotate 10s linear infinite;
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

</style>
