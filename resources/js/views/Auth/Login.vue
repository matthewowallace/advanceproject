<template>
    <div>
        <div class="login">
            <div class="login-info">
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
                    <p class="sign-para">Sign in to continue to our application</p>
                    <form class="form-1">
                        <div class="input-form">
                            <input>
                        </div>
                        <div class="input-form">
                            <input>
                        </div>
                       <div class="forgot">
                           <a>Forgot Password</a>
                        </div>
                        <div class="login-btn">
                            <button>Sign in</button>
                        </div>
                         <div class="Signup"><p>Dont have an account</p><a>Sign up</a></div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>
<style scoped>
    .login{
        display: flex;
        flex-wrap: wrap;
        background-color: #fff;
    }
    .login-info{
        display: flex;
        flex-basis: 70%;
        flex-grow: 2;
    }

    .login-form{
        display: flex;
        flex-basis: 30%;
        flex-grow: 1;
        padding: 70px;
        background-image: url('../../../assets/paint.png');
         background-size:cover;
         background-repeat: no-repeat;
    }

    .info{
        margin: 100px;
    }

    .sign--form{
        flex-wrap: wrap;
        flex-basis: 100%;
        background-color: #000;
    }

    .sign-header{
        flex-basis: 100%;
        text-align: center;
        font-size: 50px;
        color: #fff;
        margin: 0 45px;
        margin-top: 30%;

    }

    .sign-para{
        flex-basis: 100%;
        text-align: center;
        font-size: 16px;
        color: #fff;
        margin-top: 10px;
    }

    .form-1{
        flex-basis: 100%;
        text-align: center;
        margin-top: 60px;
    }

    input{
        padding: 10px 40px;
        margin: 10px 0;
        width: 60%;
    }

    .login-btn button{
       padding: 10px 40px;
       width: 60%;
       background-color: #fff;
       transition: 1s ease-in-out;
       color:  #452c63;;
    }

    .login-btn button:hover{
        padding: 10px 55px;
        letter-spacing: 2px;
    }

    .forgot{
        margin: 25px 0;
    }

    .forgot a{
        color: #fff;
    }

    .Signup{
         margin-top:30%;
         color: #fff;
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


</style>
