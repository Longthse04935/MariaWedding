<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 650px; overflow: hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
    </div>

    <!-- Slides Container -->
    <div data-u="slides" style="position: absolute; left: 0px; top: 0px; width: 1140px; height: 650px;
    overflow: hidden;">
        <div>
            <img data-u="image" src="<?php echo base_url()?>public/img/photo1.jpg" />
        </div>
        <div>
            <img data-u="image" src="<?php echo base_url()?>public/img/photo2.jpg" />
        </div>
        <div>
            <img data-u="image" src="<?php echo base_url()?>public/img/photo3.jpg" />
        </div>
        <div>
            <img data-u="image" src="<?php echo base_url()?>public/img/photo1.jpg" />
        </div>
    </div>
    
    

    <style>
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.5;stroke:#fff;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.3;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:.7;stroke:#000;stroke-opacity:.5;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;fill-opacity:1;}
        .jssorb031 .i.idn {opacity:.3;}
    </style>
    <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>

    <style>
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        .thumbnail {
            width: 163px;
            height:auto;
            position: relative;
            transition: 0.3s ease;
            cursor: pointer;
            display:inline-block;
            box-shadow: 0 1px 5px rgba(0,0,0,.25);
            margin-right:13px;
            padding:7px;
            margin-bottom:0px;
            
        }
        .imga > div {
            position: relative;
            float: left;
            /* background: #fff;
            border: 1px solid #ddd;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out; */
        }
        .imga {
            margin-bottom:11px;
        }
        .imga > div:before {
            position: absolute;
            width: 80%;
            height: 34%;
            left: 6%;
            border-radius: 50%;
            /* z-index: 0; */
            bottom: 0;
            content: '';
            -webkit-box-shadow: 0 7px 16px rgba(0,0,0,.4);
            -moz-box-shadow: 0 7px 16px rgba(0,0,0,.4);
            box-shadow: 0 7px 16px rgba(0,0,0,.4);
        }
        .imga img.last {
            margin-right: 0px;
        }
        .thumbnail:hover {
            transform: scale(1.05, 1.05);
        }
      
        /* .thumbnail:not(:last-child):after{
            margin-right: 20px;
        } */
    </style>
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<div class="line"></div>
<div>
    <div class="imga">
        <div>
            <img class="thumbnail" src="../public/img/pa1.jpg" />
        </div>
        <div>
            <img class="thumbnail" src="../public/img/pa2.jpg" />
        </div>
        <div>
            <img class="thumbnail" src="../public/img/pa3.jpg" />
        </div>
        <div>
            <img class="thumbnail last" src="../public/img/pa4.jpg" />
        </div>
        <p class="clear"></p>
    </div>
    <div class="imga">
        <div>
            <img class="thumbnail" src="../public/img/pa5.jpg" />
        </div>
        <div>
            <img class="thumbnail" src="../public/img/pa6.jpg" />
        </div>
        <div>
            <img class="thumbnail" src="../public/img/pa7.jpg" />
        </div>
        <div>
            <img class="thumbnail last" src="../public/img/pa8.jpg" />
        </div>
        <p class="clear"></p>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>public/js/jssor.slider.min.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = {
            $AutoPlay: 1,                                       //[Optional] Auto play or not, to enable slideshow, this option must be set to greater than 0. Default value is 0. 0: no auto play, 1: continuously, 2: stop at last slide, 4: stop on click, 8: stop on user navigation (by arrow/bullet/thumbnail/drag/arrow key navigation)
            $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
            $Idle: 2000,                                        //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
            $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

            $ArrowKeyNavigation: 1,   			                //[Optional] Steps to go for each navigation request by pressing arrow key, default value is 1.
            $SlideEasing: $Jease$.$OutQuint,                    //[Optional] Specifies easing for right to left animation, default value is $Jease$.$OutQuad
            $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
            $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide, default value is 20
            //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
            //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
            $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
            $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
            $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            },

            $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                $SpacingX: 12,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
            }
        };

        var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        //responsive code begin
        //you can remove responsive code if you don't want the slider scales while window resizing
        function ScaleSlider() {
            var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
            if (parentWidth) {
                jssor_slider1.$ScaleWidth(parentWidth - 30);
            }
            else
                window.setTimeout(ScaleSlider, 30);
        }
        ScaleSlider();

        $(window).bind("load", ScaleSlider);
        $(window).bind("resize", ScaleSlider);
        $(window).bind("orientationchange", ScaleSlider);
        //responsive code end
    });
</script>
