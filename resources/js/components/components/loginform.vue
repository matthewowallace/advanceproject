<template>
  <form class="form-1" @submit="checkForm" action="/" method="post" novalidate="true">
         <div class="input-form">
             <input placeholder="Enter your email address">
              <img src="../../../assets/icons/person-circle-outline.svg" alt="user-icon">
          </div>
          <div class="input-form">
              <input placeholder="Enter your Password" type="password" name="email" id="email" v-model="email">
              <img src="../../../assets/icons/eye-outline.svg" alt="user-icon">
         </div>
         <div class="forgot">
             <a>Forgot Password ?</a>
        </div>
            <p>
                <ul>
                  <!-- <li v-for="error in errors">{{ error }}</li> -->
                </ul>
            </p>
        <div class="login-btn">
            <button type="submit" value="Submit">Sign in</button>
        </div>
        <div class="Signup">
             <p>Dont have an account
                <router-link to="/registration" exact>
                    <a>Sign up</a>
                </router-link>
            </p>
        </div>
  </form>
</template>

<script>

export default {

name: "loginform",

}
</script>

<style>

</style>
