<style type="text/css">

{
    box-sizing: border-box;
}



input[name="slider-select-element"] {
    display: none;
}

#slider-arrows {
    margin: -10% auto 0 auto;
    width: 80%;
}

#slider-box {
    -moz-animation: autoSlider 15s infinite linear;
    -o-animation: autoSlider 15s infinite linear;
    -webkit-animation: autoSlider 15s infinite linear;
    animation: autoSlider 15s infinite linear;

    -webkit-transition: all 0.80s ease;
    -moz-transition: all 0.80s ease;
    -ms-transition: all 0.80s ease;
    -o-transition: all 0.80s ease;
    transition: all 0.80s ease;

    height: 100%;
    width: 300%;
}

#slider-container {
    height: 20%;
    margin: 0 auto;
    overflow: hidden;
    text-align: left;
    width: 101%;
    box-shadow: 0px 10px 29px #000000;
}

.element-foto3,
.element-foto2,
.element-foto1 {
    min-height: 400px;
    max-height: 500px;
		min-width: 180px;
		max-width: 800px;



}

.element-foto1 {
    /*background: blue;*/
    background-image: url('../inversiones_emmanuel/app/webroot/img/foto1.jpg');
}

.element-foto2 {
    /*background: green;*/
    background-image: url('../inversiones_emmanuel/app/webroot/img/foto2.jpg');
}

.element-foto3 {
    background-image: url('../inversiones_emmanuel/app/webroot/img/foto1.jpg');
}

.slider-element {
    float: left;
    width: 33.333%;
}

@-moz-keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

@-webkit-keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

@keyframes autoSlider {
    0% {
        margin-left: 0;
    }

    30% {
        margin-left: 0;
    }

    35% {
        margin-left: -100%;
    }

    65% {
        margin-left: -100%;
    }

    70% {
        margin-left: -200%;
    }

    95% {
        margin-left: -200%;
    }

    100% {
        margin-left: 0;
    }
}

</style>


 <marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">

        <Titulo>
            <h3>Sistema Control de Pagos Inversiones Emmanuel</h3><hr>
        </Titulo>
				</marquee>
			 <div id="page">
			            <section>

			                <div id="slider-container">
			                    <div id="slider-box">
			                        <div class="slider-element">
			                            <article class="element-foto1">

			                            </article>
			                        </div>
			                        <div class="slider-element">
			                            <article class="element-foto2">

			                            </article>
			                        </div>
			                        <div class="slider-element">
			                            <article class="element-foto3">


			                            </article>
			                        </div>

			                    </div>
			                </div>

			            </section>
			    </div>
