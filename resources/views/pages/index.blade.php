@extends('layouts.default')

@section('title')
    NTC - Nouveau Type de Citoyens | Accueil
    @stop
@section('css')
    <style>
        .service-block{
            margin: 20px;
        }
        .service-block .inner-box{
            height: 250px;
        }

        @media screen and (max-width: 992px) {
            .service-block{
                margin: 10px;
            }
        }
        .sec-title h2{
            font-size: 18pt;
        }
        .valeurs li{
            margin-bottom: 25px;
        }
        .valeurs li h3 a{
            color: #086399;
            font-weight: lighter;
        }
        .valeurs-item{
            font-size: 18pt;
        }
    </style>
    @stop
@section('content')
    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-2.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('images/main-slider/slide1.jpg')}}">
                    </li>
                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-8.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="{{asset('images/main-slider/slide3.jpg')}}">
                    </li>
                    <!-- Slide 3 -->
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->

    <!-- Who We Are -->
    <section class="who-we-are" >
        <div class="inner-container">
            <!-- Packeges Tabs -->
            <div class="services-tabs tabs-box clearfix">

                <ul class="tab-buttons">
                    <li data-tab="#service-ntc" class="tab-btn active-btn"><i class="fa fa-angle-right"></i> Qu’est-ce que le Mouvement NTC ?</li>
                    <li data-tab="#service-mot" class="tab-btn"><i class="fa fa-angle-right"></i> Mot du Fondateur</li>
                    <li data-tab="#service-1" class="tab-btn "><i class="fa fa-angle-right"></i> Vision</li>
                    <li data-tab="#service-2" class="tab-btn "><i class="fa fa-angle-right"></i> Mission</li>
                    <li data-tab="#service-3" class="tab-btn "><i class="fa fa-angle-right"></i> Objectifs</li>
                    <li data-tab="#service-4" class="tab-btn "><i class="fa fa-angle-right"></i> Valeurs</li>
                    <li data-tab="#service-5" class="tab-btn "><i class="fa fa-angle-right"></i>Le Temps</li>
                </ul>

                <!--Tabs Container-->
                <div class="tabs-content" style="margin-top: 5%">

                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="service-ntc">
                        <div class="outer-box clearfix col-md-12">
                            <!-- Content Column -->
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h2>Qu’est-ce que le Mouvement NTC?</h2>
                                    <div class="text">
                                        Le Mouvement Nouveau Type de Citoyens (NTC) est un mouvement qui vise à former les citoyens sur
                                        la citoyenneté et le changement de mentalité. Le Mouvement NTC propose cinq programmes distincts,
                                        qui permettront aux citoyens d’être épanouis dans leur vie individuelle et collective, de connaître
                                        les lois régissant leur pays, de mener ou participer à des actions pour le développement de leurs
                                        communautés, et de faire entendre leurs voix afin d’aider les institutions à mieux servir le peuple.<br><br>
                                        <strong>Les cinq programmes distincts qu’offre NTC sont :</strong>                                    </div>
                                </div>

                                <div class="services">
                                    <div class="service-block">
                                        <div class="container-fluid" >
                                            <div class="row clearfix" style="margin: auto">
                                                <!-- Services Block -->
                                                <div class="service-block col-md-5 col-sm-12 col-xs-12 wow fadeIn"  >
                                                    <div class="inner-box">
                                                        <span class="icon flaticon-system"></span>
                                                        <div class="text">
                                                            <a href="{{route('become')}}">Le programme « Devenir un Nouveau Type de Citoyen » (DNTC)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Services Block -->
                                                <div class="text-center service-block col-md-5 col-sm-12 col-xs-12 wow fadeIn" s data-wow-delay="400ms">
                                                    <div class="inner-box" >
                                                        <span class="icon flaticon-teamwork"></span>
                                                        <div class="text">
                                                            <a href="{{route('cj')}}">Le programme « Cercle des Jeunes » (CJ)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Services Block -->
                                                <div class="service-block col-md-5 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="800ms">
                                                    <div class="inner-box">
                                                        <span class="icon flaticon-unity"></span>
                                                        <div class="text">
                                                            <a href="{{route('take')}}">Le programme « Participation Citoyenne » (PC)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Services Block -->
                                                <div class="service-block col-md-5 col-sm-12 col-xs-12 wow fadeIn"  data-wow-delay="1200ms">
                                                    <div class="inner-box">
                                                        <span class="icon flaticon-book"></span>
                                                        <div class="text"><a href="{{route('empower')}}">Le programme « Education Communautaire » (EduCom)</a></div>
                                                    </div>
                                                </div>
                                                <!-- Services Block -->
                                                <div class="service-block col-md-5 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1200ms">
                                                    <div class="inner-box">
                                                        <span class="icon flaticon-care"></span>
                                                        <div class="text"><a href="{{route('hero')}}">Le programme « Héros d’un Village » (HeroV)</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="tab" id="service-mot">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-8 col-sm-12">
                                <div class="sec-title">
                                    <h2> Mot du Fondateur</h2>
                                    <div class="text">
                                            <p class="text">
                                                Madame, Monsieur <br/>
                                                C’est un plaisir pour moi de vous retrouver sur la plateforme NTC. Soyez bienvenu(e).
                                                Le monde a connu une évolution fulgurante avec des progrès qui ont révolutionné la
                                                vie des humains sur la terre et développé des continents entiers. Cependant, depuis
                                                1960 à nos jours, les pays africains ne sont pas encore arrivés à prendre l’envol
                                                définitif du développement pour le bonheur de leurs populations. Pourtant, le constat
                                                qui ressort de l’étude de l’histoire du continent africain révèle que l’Afrique et les
                                                peuples africains ont connu des passés glorieux avant l’arrivée sur le continent de
                                                l’esclavage, de la colonisation, et de la mondialisation économique et culturelle.
                                                <span id="remain-director-word" style="display: none">
                                       Malheureusement, les pays africains continuent de peiner à éduquer, nourrir, soigner,
                                        vêtir, et offrir du travail et des cadres épanouissants aux filles et fils d’Afrique.
                                        Comment faire pour relever l’Afrique et contribuer à procurer aux populations l’épanouissement tant recherché ?
                                        C’est en réfléchissant à cette question pour ce qui concerne le cas de mon pays le
                                        Bénin, qu’est née en moi l’idée de créer un mouvement apolitique et laïc qui se focalise
                                        sur l’éducation du citoyen. Il sera outillé à devenir un acteur intégral du développement
                                        de sa communauté à la base, et de son pays d’une manière générale. J’ai la ferme conviction
                                        que le développement de nos pays et de notre continent passe par l’émergence d’un nouveau type
                                        de citoyens, qui pratiquent pleinement leur citoyenneté, vivent avec une nouvelle mentalité de
                                        manière individuelle et collective, et s’impliquent spontanément dans la recherche des solutions
                                        aux problèmes de leurs communautés. La citoyenneté s’apprend, s’améliore et se perfectionne et tout
                                        citoyen, digne de ce nom, a l’obligation d’apprendre et de perfectionner sa citoyenneté afin de
                                        s’impliquer de manière proactive dans la gestion de son pays, afin de contribuer à son développement.
                                        Plus qu’une conviction, c’est une vision. C’est ce qui justifie la naissance du Mouvement Nouveau Type
                                        de Citoyens (NTC) en vue de contribuer à l’accomplissement de cette vision au Bénin et en Afrique.
                                        Je vous encourage à devenir un Nouveau Type de Citoyens, à incarner cette vision,
                                        et à la propager jusqu’à ce que nous écrivions ensemble une nouvelle page de l’histoire
                                        de nos pays et de notre continent.</span>
                                                <br><a id="read-all" href="#">Lire plus <i class="fa fa-chevron-down"></i></a>
                                            </p>
                                            <div class="info">
                                                <span class="name">Romaric MOUFTAOU</span>
                                                <span class="designation">Directeur</span>
                                                <span class="sign"><img src="images/resource/sign.png" alt=""></span>
                                            </div>
                                    </div>
                                </div>

                                <div class="services">
                                    <div class="service-block-two">

                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <figure class=" col-md-4 col-sm-12" >
                                <img  style="width: 100%" src="{{asset('images/president.jpg')}}" alt="Image directeur">
                            </figure>
                        </div>
                    </div>

                    <!--Tab / Active Tab-->
                    <div class="tab" id="service-1">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h2>Vision du Mouvement NTC</h2>
                                        <div class="text">
                                            La vision du Mouvement NTC est de construire un pays où les citoyens sont de type nouveau en ce sens qu’ils se prennent en charge et s’occupent spontanément de leur pays.
                                        </div>
                                    </div>

                                <div class="services">
                                    <div class="service-block-two">

                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-md-8 col-sm-12 text-center" style="width: 100%;">
                                <div class="image"><img src="{{asset('images/vision.jpg')}}" alt="visions"></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab / -->
                    <div class="tab" id="service-2">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-12">
                                <div class="sec-title">
                                    <h2>Mission du Mouvement NTC</h2>
                                        <div class="text">
                                            La mission du Mouvement NTC est d’éduquer les citoyens à un changement de mentalité et d’attitude pour réaliser une meilleure vie personnelle et collective.                                         </div>
                                    </div>

                                <div class="services">
                                    <div class="service-block-two">

                                    </div>
                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-md-8 col-sm-12" style="width: 100%">
                                <div class="image"><img src="{{asset('images/mission.jpg')}}" alt="visions"></div>
                            </div>
                        </div>
                    </div>

                      <!--Tab / Active Tab-->
                    <div class="tab " id="service-3">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-6">
                                <div class="sec-title">
                                    <h2>Objectifs du Mouvement NTC</h2>
                                        <div class="text">
                                                  Le Mouvement NTC poursuit plusieurs objectifs. <br> Il s’agit essentiellement de :
                                        </div>
                                    </div>

                                <div class="services">
                                    <div class="service-block-two">
                                        <ol class="valeurs">
                                            <li>
                                                <div class="text" onclick="return false;"> <strong><span class="valeur-item">1.</span></strong> Organiser des programmes de formations pour le changement de mentalité dans les 77 communes du Bénin.</div>
                                            </li>
                                            <li>
                                                <div class="text" onclick="return false;"> <strong><span class="valeur-item">2.</span></strong> Mettre en place un réseau de Cercles de Jeunes dans les 5290 villages et quartiers de villes du Bénin.</div>
                                            </li>
                                            <li>
                                                <div class="text" onclick="return false;"> <strong><span class="valeur-item">3.</span></strong> Éduquer les citoyens à la participation citoyenne dans la gouvernance publique au sein des 77 communes du Bénin.</div>
                                            </li>
                                            <li>
                                                <div class="text" onclick="return false;"> <strong><span class="valeur-item">4.</span></strong> Amener un ou plusieurs citoyens à investir dans le développement d’un village.</div>
                                            </li>
                                        </ol>
                                    </div>


                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-md-6 col-sm-12" >
                                <div class="image"><img style="width: 100%" src="{{asset('images/goal.png')}}" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="service-4">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-8">
                                <div class="sec-title">
                                    <h2>Valeurs du Mouvement NTC</h2>
                                    <div class="text">
                                        Le Nouveau Type de Citoyen fonde sa démarche de vie sur plusieurs valeurs qu’il incarne. Il s’agit de :                                    </div>
                                </div>
                                <div class="services" style="margin-top: -4%">
                                    <div class="service-block-two">
                                            <ul class="list-unstyled valeurs row">
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> la foi en l’impossible </div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> la discipline</div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> le travail bien fait</div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> la pensée Positive </div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> l’abnégation</div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> la diligence </div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> l’auto assistance </div></li>
                                                <li class="col-md-6"><div class="text"><i class="fa fa-chevron-right"></i> la collaboration </div></li>
                                            </ul>

                                    </div>


                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-md-4">
                                <div class="image"><img style="width: 100%" src="{{asset('images/nkawame-min.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="service-5">
                        <div class="outer-box clearfix">
                            <!-- Content Column -->
                            <div class="col-md-6">
                                <div class="sec-title">
                                    <h2>Le Temps dans le Mouvement NTC</h2>
                                    <div class="text">
                                        Le Mouvement NTC se donne du temps pour l’atteinte de ses objectifs.
                                    </div>
                                </div>

                                <div class="services">
                                        <div class="service-block-two">
                                            <ul class="list-unstyled valeurs">
                                                <li><div class="text"><i class="fa fa-chevron-right"></i> Court terme : 10 ans  </></li>
                                                <li><div class="text"><i class="fa fa-chevron-right"></i> Moyen terme : 20 ans </></li>
                                                <li><div class="text"><i class="fa fa-chevron-right"></i> Long terme : 50 ans</></li>
                                            </ul>

                                        </div>


                                </div>
                            </div>

                            <!-- Image Column -->
                            <div class="col-md-6">
                                <div class="image"><img style="width: 100%" src="{{asset('images/timeline.png')}}" alt=""></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--End Who We Are -->


    <!-- Team members Section -->
   {{-- <section class="causes-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Les équipes du Mouvement NTC</h2>
                <div class="text">
                    Les organes dirigeants du Mouvement NTC sont composés s’un Conseil d’Administration de quinze membres,
                    d’un Conseil de Surveillance de cinq membres, et d’un Conseiller Juridique. Dans le souci de promouvoir
                    le leadership féminin, les deux organes dirigeants du Mouvement NTC sont composés de 70% de femmes et de 30%
                    d’hommes. Les organes d’exécution sont des équipes de volontaires constituées par programme et soutenant
                    chaque Directeur ou Directrice de Programmes.
                </div>
            </div>
            @include('pages.partials.members')

        </div>
    </section>--}}
    <!--End Team members Section -->

    <!-- Event Section Two -->
    <section class="event-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Evenements à venir</h2>
            </div>

            @include('pages.partials.events')
        </div>
    </section>
    <!--End Event Section Two -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Actualités & Blog</h2>
            </div>

            <div class="row clearfix">
                <div class="column col-md-8 col-sm-12 col-xs-12">
                    <div class="news-block wow fadeIn">
                        <div class="inner-box">
                            <div class="image-box"><a href="{{route('blog.detail',$lastPost->slug)}}"><img src="{{asset('storage/'.$lastPost->image)}}" alt="{{$lastPost->title}}"></a></div>
                            <div class="lower-content">
                                <span class="date" style="font-size: 15pt">{{\Carbon\Carbon::parse($lastPost->created_at)->format('d M Y')}}</span>
                                <h3><a href="{{route('blog.detail',$lastPost->slug)}}">{{$lastPost->title}}</a></h3>
                                <div>{!! \Illuminate\Support\Str::limit($lastPost->body ,200)!!}</div>
                                <div class=""><a href="{{route('blog.detail',$lastPost->slug)}}" style="font-weight: bold;font-size: 14pt">Lire plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column col-md-4 col-sm-12 col-xs-12">
                  @foreach($posts as $post)
                    <!-- Single blog -->
                    <div class="news-block-two wow fadeInRight">
                        <div class="inner-box">
                            <div class="image-box"><a href="{{route('blog.detail',$post->slug)}}"><img src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}"></a></div>
                            <span class="date">{{\Carbon\Carbon::parse($post->created_at)->format('d M Y')}}</span>
                            <h4><a href="{{route('blog.detail',$post->slug)}}">{{$post->title}}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="text-center col-md-12">
            <div class="col-md-12 text-center"><a href="{{route('blog')}}" class="theme-btn btn-style-one" style="border-radius: 0">Consulter tous les articles</a></div>
        </div>
    </section>
    <!--End News Section -->
    @endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            let seeAll = false;
            let directorWordContainer = $('#remain-director-word');
            $(document).on("click","#read-all",function (e) {
                e.preventDefault();
                if (seeAll){
                    directorWordContainer.slideUp();
                    $("#read-all").html(`Lire plus <i class="fa fa-chevron-down"></i>`);
                    seeAll = false;
                } else {

                    directorWordContainer.slideDown();
                    $("#read-all").html(`Lire moins <i class="fa fa-chevron-up"></i>`);
                    seeAll = true;
                }
            });
        });
    </script>
    @stop
