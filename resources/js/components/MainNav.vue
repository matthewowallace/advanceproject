<template>
  <nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left logo">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Youth Creator</a></li>
        </ul>

    </div>

    <div class="uk-navbar-right nav--right">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>

</nav>
</template>

<script>

export default {

}
</script>

<style>
    .uk-navbar-container:not(.uk-navbar-transparent) {
    background: #0B0E13 !important;
}

.logo li a{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif !important;
    color: rgba(150,30,70,1) !important;
    font-size: 16px !important;
    margin-left: 30px;
}

.nav--right{
    margin-right: 100px !important;
}

.nav--right li a{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif !important;
    color: rgba(250,130,70,1) !important;
    font-size: 16px !important;
    transition: 1s;
}

.nav--right li a:hover{
    color: rgba(150,30,70,1) !important;
    letter-spacing: 2px;
}

.uk-navbar-dropdown {
    display: none;
    position: absolute;
    z-index: 1020;
    box-sizing: border-box;
    width: 200px;
    padding: 25px;
    /* background: #0b0e13d0 !important; */
    background-color: rgba(250,130,70,0.7) !important;
    color: #fff !important;
    box-shadow: 0 0px 4px rgba(150,30,70,0.5);
}

.uk-navbar-dropdown li a {
    color: #fff !important;
}

.uk-navbar-container{
    padding: 0 15%;
}

</style>
