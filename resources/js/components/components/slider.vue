<template>
  <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<h3>DESIGN</h3>
		</div>
		<div class="slide">
			<h3>INNOVATE</h3>
		</div>
		<div class="slide">
			<h3>GROW</h3>
		</div>
        <div class="slide">
			<h3>DESIGN</h3>
		</div>
		<div class="slide">
			<h3>INNOVATE</h3>
		</div>
		<div class="slide">
			<h3>GROW</h3>
		</div>
        <div class="slide">
			<h3>DESIGN</h3>
		</div>
		<div class="slide">
			<h3>INNOVATE</h3>
		</div>
		<div class="slide">
			<h3>GROW</h3>
		</div>
        <div class="slide">
			<h3>MOTIVATE</h3>
		</div>
		<div class="slide">
			<h3>CREATE</h3>
		</div>
		<div class="slide">
			<h3>INSPIRE</h3>
		</div>
	</div>
</div>
</template>

<script>
export default {

}
</script>

<style scoped>


@font-face {
    font-family: FenotypeREG;
    src: url('../../../assets/fonts/FenotypeREG.otf') format("opentype");
}


@-webkit-keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}

@keyframes scroll {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(calc(-250px * 7));
            transform: translateX(calc(-250px * 7));
  }
}
.slider {
  background: whites;
  height: 100px;
  margin: auto;
  overflow: hidden;
  position: relative;
  width: 760px;
}
.slider::before, .slider::after {
  background: -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
  background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
  content: "";
  height: 100px;
  position: absolute;
  width: 200px;
  z-index: 2;
}
.slider::after {
  right: 0;
  top: 0;
  -webkit-transform: rotateZ(180deg);
          transform: rotateZ(180deg);
}
.slider::before {
  left: 0;
  top: 0;
}
.slider .slide-track {
  -webkit-animation: scroll 40s linear infinite;
          animation: scroll 40s linear infinite;
  display: -webkit-box;
  display: flex;
  width: calc(250px * 14);
}
.slider .slide {
  height: 100px;
  width: 230px;
}


  h3{
    font-size: 20px;
    font-family: 'Fenotype',-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
  }



@media only screen and (max-width: 600px) {

        h3{
          font-size: 16px;
        }

        .slider {
            background: white;
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 260px;
            }
    }

    @media only screen
    and (min-width: 1030px)
    and (max-width: 1366px)
    {

         h3{
          font-size: 16px;
        }

    }

    @media only screen
    and (min-device-width : 768px)
    and (max-device-width : 1024px)
    {
          h3{
          font-size: 14px;
        }

           .slider {
            background: white;
            height: 100px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 260px;
            }
    }

</style>
