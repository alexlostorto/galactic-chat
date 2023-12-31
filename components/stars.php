<!-- Star background animation: https://codepen.io/MestreALMO/pen/LYEwBQN -->

<style>
    @keyframes move-twink-back {
        from {background-position: 0 0;}
        to {background-position: -10000px 5000px;}
    }

    .stars, .twinkling {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        display: block;
    }

    .stars {
        background: #000 url(images/stars.png) repeat top center;
        z-index: 0;
    }

    .twinkling{
        background: transparent url(images/twinkling.png) repeat top center;
        z-index: 1;
        animation: move-twink-back 200s linear infinite;
    }
</style>

<div class="stars"></div>
<div class="twinkling"></div>