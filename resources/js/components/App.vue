<template>
   <main>
       <MainNav />
       <getStarted />
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

</style>
