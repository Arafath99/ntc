<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NTC | INSCRIPTION</title>
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    /*basic reset*/
    * {margin: 0; padding: 0;}

    html {
        height: 100%;
        /*Image only BG fallback*/
        background: #e9e9e9;
    }

    body {
        font-family: montserrat, arial, verdana;
        width: 100%;
        overflow-x: hidden;
    }
    /*form styles*/
    .steps {
        width: 675px;
        margin: 50px auto;
        position: relative;
    }

    .steps fieldset {
        background: white;
        border: 0 none;
        border-radius: 3px;
        box-shadow: 0 17px 41px -21px rgb(0, 0, 0);
        padding: 20px 30px;
        border-top: 9px solid #166d95;
        box-sizing: border-box;
        width: 80%;
        margin: 0 10%;

        /*stacking fieldsets above each other*/
        position: absolute;
    }
    /*Hide all except first fieldset*/
    .steps fieldset:not(:first-of-type) {
        display: none;
    }
    /*inputs*/
    .steps label{
        color: #333333;
        text-align: left !important;
        font-size: 15px;
        font-weight: 200;
        padding-bottom: 7px;
        padding-top: 12px;
        display: inline-block;
    }


    .steps input, .steps textarea {
        outline: none;
        display: block;
        width: 100%;
        margin: 0 0 20px;
        padding: 10px 15px;
        border: 1px solid #d9d9d9;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        color: #837E7E;
        font-family: "Roboto";
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-size: 14px;
        font-wieght: 400;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
    }

    .steps input:focus, .steps textarea:focus{
        color: #333333;
        border: 1px solid #166d95;
    }

    .error1{
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -moz-box-shadow: 0 0 0 transparent;
        -webkit-box-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        position: absolute;
        left: 525px;
        margin-top: -58px;
        padding: 0 10px;
        height: 39px;
        display: block;
        color: #ffffff;
        background: #e62163;
        border: 0;
        font: 14px Corbel, "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", "Bitstream Vera Sans", "Liberation Sans", Verdana, "Verdana Ref", sans-serif;
        line-height: 39px;
        white-space: nowrap;

    }

    .error1:before{
        width: 0;
        height: 0;
        left: -8px;
        top: 14px;
        content: '';
        position: absolute;
        border-top: 6px solid transparent;
        border-right: 8px solid #e62163;
        border-bottom: 6px solid transparent;
    }

    .error-log{
        margin: 5px 5px 5px 0;
        font-size: 19px;
        position: relative;
        bottom: -2px;
    }

    .question-log {
        margin: 5px 1px 5px 0;
        font-size: 15px;
        position: relative;
        bottom: -2px;
    }

    /*buttons*/
    .steps .action-button, .action-button {
        width: 100px !important;
        background: #166d95;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 1px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px auto;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
        display: block;
    }

    .steps .next, .steps .submit{
        float: right;
    }

    .steps .previous{
        float:left;
    }

    .steps .action-button:hover, .steps .action-button:focus, .action-button:hover, .action-button:focus {
        background:#3cb42d;;
    }

    .steps .explanation{
        display: block;
        clear: both;
        width: 540px;
        background: #f2f2f2;
        position: relative;
        margin-left: -30px;
        padding: 22px 0px;
        margin-bottom: -10px;
        border-bottom-left-radius: 3px;
        border-bottom-right-radius: 3px;
        top: 10px;
        text-align: center;
        color: #333333;
        font-size: 12px;
        font-weight: 200;
        cursor:pointer;
    }


    /*headings*/
    .fs-title {
        text-transform: uppercase;
        margin: 0 0 5px;
        line-height: 1;
        color: #166d95;
        font-size: 18px;
        font-weight: 400;
        text-align:center;
    }
    .fs-subtitle {
        font-weight: normal;
        font-size: 13px;
        color: #837E7E;
        margin-bottom: 20px;
        text-align: center;
    }
    /*progressbar*/
    #progressbar {
        margin-bottom: 30px;
        margin-left: 20%;
        overflow: hidden;
        /*CSS counters to number the steps*/
        counter-reset: step;
        width:100%;
        text-align: center;
    }
    #progressbar li {
        list-style-type: none;
        color: rgb(51, 51, 51);
        text-transform: uppercase;
        font-size: 9px;
        width: 20%;
        float: left;
        position: relative;
    }
    #progressbar li:before {
        content: counter(step);
        counter-increment: step;
        width: 20px;
        line-height: 20px;
        display: block;
        font-size: 10px;
        color: #333;
        background: white;
        border-radius: 3px;
        margin: 0 auto 5px auto;
    }
    /*progressbar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: white;
        position: absolute;
        left: -50%;
        top: 9px;
        z-index: -1; /*put it behind the numbers*/
    }
    #progressbar li:first-child:after {
        /*connector not needed before the first step*/
        content: none;
    }
    /*marking active/completed steps green*/
    /*The number of the step and the connector before it = green*/
    #progressbar li.active:before,  #progressbar li.active:after{
        background: #166d95;
        color: white;
    }


    /* my modal */

    .modal p{
        font-size: 15px;
        font-weight: 100;
        font-family: sans-serif;
        color: #3C3B3B;
        line-height: 21px;
    }

    .modal {
        position: fixed;
        top: 50%;
        left: 50%;
        width: 50%;
        max-width: 630px;
        min-width: 320px;
        height: auto;
        z-index: 2000;
        visibility: hidden;
        -moz-backface-visibility: hidden;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    .modal.modal-show {
        visibility: visible;
    }
    .lt-ie9 .modal {
        top: 0;
        margin-left: -315px;
    }

    .modal-content {
        background: #ffffff;
        position: relative;
        margin: 0 auto;
        padding: 40px;
        border-radius: 3px;
    }

    .modal-overlay {
        background: #000000;
        position: fixed;
        visibility: hidden;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        -moz-transition-property: visibility, opacity;
        -o-transition-property: visibility, opacity;
        -webkit-transition-property: visibility, opacity;
        transition-property: visibility, opacity;
        -moz-transition-delay: 0.5s, 0.1s;
        -o-transition-delay: 0.5s, 0.1s;
        -webkit-transition-delay: 0.5s, 0.1s;
        transition-delay: 0.5s, 0.1s;
        -moz-transition-duration: 0, 0.5s;
        -o-transition-duration: 0, 0.5s;
        -webkit-transition-duration: 0, 0.5s;
        transition-duration: 0, 0.5s;
    }
    .modal-show .modal-overlay {
        visibility: visible;
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
        opacity: 0.6;
        -moz-transition: opacity 0.5s;
        -o-transition: opacity 0.5s;
        -webkit-transition: opacity 0.5s;
        transition: opacity 0.5s;
    }

    /*slide*/
    .modal[data-modal-effect|=slide] .modal-content {
        filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
        opacity: 0;
        -moz-transition: all 0.5s 0;
        -o-transition: all 0.5s 0;
        -webkit-transition: all 0.5s 0;
        transition: all 0.5s 0;
    }
    .modal[data-modal-effect|=slide].modal-show .modal-content {
        filter: progid:DXImageTransform.Microsoft.Alpha(enabled=false);
        opacity: 1;
        -moz-transition: all 0.5s 0.1s;
        -o-transition: all 0.5s 0.1s;
        -webkit-transition: all 0.5s;
        -webkit-transition-delay: 0.1s;
        transition: all 0.5s 0.1s;
    }
    .modal[data-modal-effect=slide-top] .modal-content {
        -moz-transform: translateY(-300%);
        -ms-transform: translateY(-300%);
        -webkit-transform: translateY(-300%);
        transform: translateY(-300%);
    }
    .modal[data-modal-effect=slide-top].modal-show .modal-content {
        -moz-transform: translateY(0);
        -ms-transform: translateY(0);
        -webkit-transform: translateY(0);
        transform: translateY(0);
    }


    /* RESPONSIVE */

    /* moves error logs in tablet/smaller screens */

    @media (max-width:1000px){

        /*brings inputs down in size */
        .steps input, .steps textarea {
            outline: none;
            display: block;
            width: 100% !important;
        }

        /*brings errors in */
        .error1 {
            left: 345px;
            margin-top: -58px;
        }




    }


    @media (max-width:675px){
        /*mobile phone: uncollapse all fields: remove progress bar*/

        .steps {
            width: 100%;
            margin: 50px auto;
            position: relative;
        }

        #progressbar{
            display:none;
        }

        /*move error logs */
        .error1 {
            position: relative;
            left: 0 !important;
            margin-top: 24px;
            top: -11px;
        }

        .error1:before {
            width: 0;
            height: 0;
            left: 14px;
            top: -14px;
            content: '';
            position: absolute;
            border-left: 6px solid transparent;
            border-bottom: 8px solid #e62163;
            border-right: 6px solid transparent;
        }

        /*show hidden fieldsets
        .steps fieldset:not(:first-of-type) {
            display: block;
        } */

        .steps fieldset{
            position:relative;
            width: 100%;
            margin:0 auto;
            margin-top: 45px;
        }

        /*.steps .next, .steps .previous{
            display:none;
        }*/

        .steps .explanation{
            display:none;
        }

        .steps .submit {
            float: right;
            margin: 28px auto 10px;
            width: 100% !important;
        }

    }



    /* Info */
    .info {
        width: 300px;
        margin: 35px auto;
        text-align: center;
        font-family: 'roboto', sans-serif;
    }

    .info h1 {
        margin: 0;
        padding: 0;
        font-size: 28px;
        font-weight: 400;
        color: #333333;
        padding-bottom: 5px;

    }
    .info span {
        color:#666666;
        font-size: 13px;
        margin-top:20px;
    }
    .info span a {
        color: #666666;
        text-decoration: none;
    }
    .info span .fa {
        color: rgb(226, 168, 16);
        font-size: 19px;
        position: relative;
        left: -2px;
    }

    .info span .spoilers {
        color: #999999;
        margin-top: 5px;
        font-size: 10px;
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a style="color:#166D95;font-weight: bold" class="navbar-brand" href="{{ url('/') }}">
                   Accueil NTC
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="color: #FFF;border-radius:0;"  class="nav-link btn btn-primary" href="{{ route('voyager.login') }}">   Connexion</a>
                            </li>
                         {{--   @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Inscription</a>
                                </li>
                            @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
<script>
    /* Fundraising Grader
    *
    * Generic Copyright, yadda yadd yadda
    *
    * Plug-ins: jQuery Validate, jQuery
    * Easing
    */

    $(document).ready(function() {
        var current_fs, next_fs, previous_fs;
        var left, opacity, scale;
        var animating;
        $(".steps").validate({
            errorClass: 'invalid',
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.insertAfter(element.next('span').children());
            },
            highlight: function(element) {
                $(element).next('span').show();
            },
            unhighlight: function(element) {
                $(element).next('span').hide();
            }
        });
        $(".next").click(function() {
            $(".steps").validate({
                errorClass: 'invalid',
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.next('span').children());
                },
                highlight: function(element) {
                    $(element).next('span').show();
                },
                unhighlight: function(element) {
                    $(element).next('span').hide();
                }
            });
            if ((!$('.steps').valid())) {
                return true;
            }
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
        $(".submit").click(function() {
            $(".steps").validate({
                errorClass: 'invalid',
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.insertAfter(element.next('span').children());
                },
                highlight: function(element) {
                    $(element).next('span').show();
                },
                unhighlight: function(element) {
                    $(element).next('span').hide();
                }
            });
            if ((!$('.steps').valid())) {
                return false;
            }
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 1 - (1 - now) * 0.2;
                    left = (now * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
        $(".previous").click(function() {
            if (animating) return false;
            animating = true;
            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            previous_fs.show();
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now, mx) {
                    scale = 0.8 + (1 - now) * 0.2;
                    left = ((1 - now) * 50) + "%";
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                easing: 'easeInOutExpo'
            });
        });
    });
    jQuery(document).ready(function() {
        jQuery("#edit-submitted-acquisition-amount-1,#edit-submitted-acquisition-amount-2,#edit-submitted-cultivation-amount-1,#edit-submitted-cultivation-amount-2,#edit-submitted-cultivation-amount-3,#edit-submitted-cultivation-amount-4,#edit-submitted-retention-amount-1,#edit-submitted-retention-amount-2,#edit-submitted-constituent-base-total-constituents").keyup(function() {
            calcTotal();
        });
    });

    function calcTotal() {
        var grade = 0;
        var donorTotal = Number(jQuery("#edit-submitted-constituent-base-total-constituents").val().replace(/,/g, ""));
        if (donorTotal) {
            donorTotal = parseFloat(donorTotal);
        } else {
            donorTotal = 0;
        }
        grade += getBonusDonorPoints(donorTotal);
        var acqAmount1 = Number(jQuery("#edit-submitted-acquisition-amount-1").val().replace(/,/g, ""));
        var acqAmount2 = Number(jQuery("#edit-submitted-acquisition-amount-2").val().replace(/,/g, ""));
        var acqTotal = 0;
        if (acqAmount1) {
            acqAmount1 = parseFloat(acqAmount1);
        } else {
            acqAmount1 = 0;
        }
        if (acqAmount2) {
            acqAmount2 = parseFloat(acqAmount2);
        } else {
            acqAmount2 = 0;
        }
        if (acqAmount1 > 0 && acqAmount2 > 0) {
            acqTotal = ((acqAmount2 - acqAmount1) / acqAmount1 * 100).toFixed(2);
        } else {
            acqTotal = 0;
        }
        jQuery("#edit-submitted-acquisition-percent-change").val(acqTotal + '%');
        grade += getAcquisitionPoints(acqTotal);
        console.log(grade);
        var cultAmount1 = Number(jQuery("#edit-submitted-cultivation-amount-1").val().replace(/,/g, ""));
        var cultAmount2 = Number(jQuery("#edit-submitted-cultivation-amount-2").val().replace(/,/g, ""));
        var cultTotal = 0;
        if (cultAmount1) {
            cultAmount1 = parseFloat(cultAmount1);
        } else {
            cultAmount1 = 0;
        }
        if (cultAmount2) {
            cultAmount2 = parseFloat(cultAmount2);
        } else {
            cultAmount2 = 0;
        }
        if (cultAmount1 > 0 && cultAmount2 > 0) {
            cultTotal = ((cultAmount2 - cultAmount1) / cultAmount1 * 100).toFixed(2);
        } else {
            cultTotal = 0;
        }
        jQuery("#edit-submitted-cultivation-percent-change1").val(cultTotal + '%');
        grade += getAcquisitionPoints(cultTotal);
        var cultAmount3 = Number(jQuery("#edit-submitted-cultivation-amount-3").val().replace(/,/g, ""));
        var cultAmount4 = Number(jQuery("#edit-submitted-cultivation-amount-4").val().replace(/,/g, ""));
        if (cultAmount3) {
            cultAmount3 = parseFloat(cultAmount3);
        } else {
            cultAmount3 = 0;
        }
        if (cultAmount4) {
            cultAmount4 = parseFloat(cultAmount4);
        } else {
            cultAmount4 = 0;
        }
        if (cultAmount3 > 0 && cultAmount4 > 0) {
            cultTotal2 = ((cultAmount4 - cultAmount3) / cultAmount3 * 100).toFixed(2);
        } else {
            cultTotal2 = 0;
        }
        jQuery("#edit-submitted-cultivation-percent-change2").val(cultTotal2 + '%');
        grade += getAcquisitionPoints(cultTotal2);
        var retAmount1 = Number(jQuery("#edit-submitted-retention-amount-1").val().replace(/,/g, ""));
        var retAmount2 = Number(jQuery("#edit-submitted-retention-amount-2").val().replace(/,/g, ""));
        var retTotal = 0;
        if (retAmount1) {
            retAmount1 = parseFloat(retAmount1);
        } else {
            retAmount1 = 0;
        }
        if (retAmount2) {
            retAmount2 = parseFloat(retAmount2);
        } else {
            retAmount2 = 0;
        }
        if (retAmount1 > 0 && retAmount2 > 0) {
            retTotal = (retAmount2 / retAmount1 * 100).toFixed(2);
        } else {
            retTotal = 0;
        }
        jQuery("#edit-submitted-retention-percent-change").val(retTotal + '%');
        grade += getAcquisitionPoints(retTotal);
        jQuery("#edit-submitted-final-grade-grade").val(grade + ' / 400');
    }

    function getAcquisitionPoints(val) {
        if (val < 1) {
            return 0;
        } else if (val >= 1 && val < 6) {
            return 50;
        } else if (val >= 6 && val < 11) {
            return 60;
        } else if (val >= 11 && val < 16) {
            return 70;
        } else if (val >= 16 && val < 21) {
            return 75;
        } else if (val >= 21 && val < 26) {
            return 80;
        } else if (val >= 26 && val < 31) {
            return 85;
        } else if (val >= 31 && val < 36) {
            return 90;
        } else if (val >= 36 && val < 41) {
            return 95;
        } else if (val >= 41) {
            return 100;
        }
    }

    function getCultivationGiftPoints(val) {
        if (val < 1) {
            return 0;
        } else if (val >= 1 && val < 4) {
            return 50;
        } else if (val >= 4 && val < 7) {
            return 60;
        } else if (val >= 7 && val < 10) {
            return 70;
        } else if (val >= 10 && val < 13) {
            return 75;
        } else if (val >= 13 && val < 16) {
            return 80;
        } else if (val >= 16 && val < 21) {
            return 85;
        } else if (val >= 21 && val < 26) {
            return 90;
        } else if (val >= 26 && val < 51) {
            return 95;
        } else if (val >= 51) {
            return 100;
        }
    }

    function getCultivationDonationPoints(val) {
        if (val < 1) {
            return 0;
        } else if (val >= 1 && val < 6) {
            return 50;
        } else if (val >= 6 && val < 11) {
            return 60;
        } else if (val >= 11 && val < 16) {
            return 70;
        } else if (val >= 16 && val < 21) {
            return 75;
        } else if (val >= 21 && val < 26) {
            return 80;
        } else if (val >= 26 && val < 31) {
            return 85;
        } else if (val >= 31 && val < 36) {
            return 90;
        } else if (val >= 36 && val < 41) {
            return 95;
        } else if (val >= 41) {
            return 100;
        }
    }

    function getRetentionPoints(val) {
        if (val < 1) {
            return 0;
        } else if (val >= 1 && val < 51) {
            return 50;
        } else if (val >= 51 && val < 56) {
            return 60;
        } else if (val >= 56 && val < 61) {
            return 70;
        } else if (val >= 61 && val < 66) {
            return 75;
        } else if (val >= 66 && val < 71) {
            return 80;
        } else if (val >= 71 && val < 76) {
            return 85;
        } else if (val >= 76 && val < 81) {
            return 90;
        } else if (val >= 81 && val < 91) {
            return 95;
        } else if (val >= 91) {
            return 100;
        }
    }

    function getBonusDonorPoints(val) {
        if (val < 10001) {
            return 0;
        } else if (val >= 10001 && val < 25001) {
            return 10;
        } else if (val >= 25001 && val < 50000) {
            return 15;
        } else if (val >= 50000) {
            return 20;
        }
    }
    var modules = {
        $window: $(window),
        $html: $('html'),
        $body: $('body'),
        $container: $('.container'),
        init: function() {
            $(function() {
                modules.modals.init();
            });
        },
        modals: {
            trigger: $('.explanation'),
            modal: $('.modal'),
            scrollTopPosition: null,
            init: function() {
                var self = this;
                if (self.trigger.length > 0 && self.modal.length > 0) {
                    modules.$body.append('<div class="modal-overlay"></div>');
                    self.triggers();
                }
            },
            triggers: function() {
                var self = this;
                self.trigger.on('click', function(e) {
                    e.preventDefault();
                    var $trigger = $(this);
                    self.openModal($trigger, $trigger.data('modalId'));
                });
                $('.modal-overlay').on('click', function(e) {
                    e.preventDefault();
                    self.closeModal();
                });
                modules.$body.on('keydown', function(e) {
                    if (e.keyCode === 27) {
                        self.closeModal();
                    }
                });
                $('.modal-close').on('click', function(e) {
                    e.preventDefault();
                    self.closeModal();
                });
            },
            openModal: function(_trigger, _modalId) {
                var self = this,
                    scrollTopPosition = modules.$window.scrollTop(),
                    $targetModal = $('#' + _modalId);
                self.scrollTopPosition = scrollTopPosition;
                modules.$html.addClass('modal-show').attr('data-modal-effect', $targetModal.data('modal-effect'));
                $targetModal.addClass('modal-show');
                modules.$container.scrollTop(scrollTopPosition);
            },
            closeModal: function() {
                var self = this;
                $('.modal-show').removeClass('modal-show');
                modules.$html.removeClass('modal-show').removeAttr('data-modal-effect');
                modules.$window.scrollTop(self.scrollTopPosition);
            }
        }
    }
    modules.init();
</script>
@yield('js')
</html>
