<template>
   <main>
       <!-- <MainNav /> -->
       <!-- <getStarted /> -->
       <router-view></router-view>
   </main>
</template>

<script>
import UIkit from 'uikit';
import MainNav from './MainNav';
import Body from "./Body";
import getStarted from "./getStarted";
export default {

     name:"App",

      components :{
         MainNav,
         Body,
         getStarted,
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
    background-color:#FFF;
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

::placeholder{
    color:#686868;
}

input{
        padding: 10px 40px;
        margin: 10px 0;
        width: 60%;
        box-shadow: 0px 3px 6px 0px rgba(0, 0, 0, 0.1), 0px 1px 3px 0px rgba(0, 0, 0, 0.08);
        border: 0;
        outline: 0;
        border-radius: 6px;
    }

    input:focus{
        border: 2px solid #303030;
    }

    .input-form{
        position: relative;
    }

    .input-form img{
        position: absolute;
        top: 31%;
        left: 70%;
        max-width: 25px;
    }

    a{
        text-decoration: none;
        list-style: none;
    }

</style>
