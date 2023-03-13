@extends('themes::default.layout')


@section('content')
@include('themes::default.nav')
 <!-- END HOME -->
 <section class="bg-home bg-light" id="home">
    <div class="container">
        <div class="row justify-content-md-center text-center">
          <div class="col-md-auto content-col-center">
            <h1 class="home-title">@lang('Skapa ett professionellt CV helt gratis')</h1>
            <p>@lang('Kom närmare din dröm genom att skapa ett snyggt CV kostnadsfritt online på bara några minuter')</p>
            <a href="{{ route('templates') }}" class="btn btn-primary">@lang('Skapa CV')</a>
            <div class="mt-5 img-home-page">
                <img src="{{ asset('img/resume_home-page.png')}}" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    
</section>

<!-- END HOME -->


    <!-- START HOW IT WORK -->
    <section class="section pt-5" id="how-it-work">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2 class="mb-0">@lang('Hur skapar jag ett CV helt kostnadsfritt?')</h2>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="{{ Module::asset('themes:default/images/arrow-1.png') }}" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">1</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-file"></i>
                        </div>
                        <h5 class="mt-4">@lang('Välj en CV-mall')</h5>
                        <p class="text-muted mt-3">
                           @lang('Välj en mall från listan där alla våra CV-mallar finns, alla mallar är gratis. Vi publicerar ständigt nya fräscha mallar')
                        </p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="arrow">
                            <img src="{{ Module::asset('themes:default/images/arrow-2.png') }}" alt="">
                        </div>
                        <div class="work-count">
                            <p class="mb-0">2</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-pen"></i>
                        </div>
                        <h5 class="mt-4">@lang('Redigera utan begränsningar')</h5>
                        <p class="text-muted mt-3">
                            @lang('Du har möjligheten att skriva ditt CV, ladda upp bild, ändra färger, ändra typsnitt och mycket annat helt gratis online.')
                        </p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="work-box text-center p-3">
                        <div class="work-count">
                            <p class="mb-0">3</p>
                        </div>
                        <div class="work-icon">
                            <i class="pe-7s-user"></i>
                        </div>
                        <h5 class="mt-4">@lang('Skriv ut eller spara ditt CV')</h5>
                        <p class="text-muted mt-3">
                            @lang('Du har möjlighet att spara och skriva ut ditt CV när du vill, den kommer alltid finnas tillgänglig på ditt konto.')
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- END HOW IT WORK -->
    
    <!-- START WHY -->
    <section class="section bg-light" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h2 class="mb-0">@lang('Varför ska jag använda mig av verktyget') {{ config('app.name')}}?</h2>
                    </div>
                </div>
            </div>


            <div class="row align-items-center mt-5">
                <div class="col-lg-6">
                    <div class="nav flex-column nav-pills mt-4">
                        <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-note2"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 f-18 services-title mt-2">@lang('Skapa ett CV eller personligt brev')</h5>
                                        <p class="mb-0">@lang('Här kan du skapa ditt nya CV eller personligt brev utifrån dina önskemål.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-paper-plane"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 f-18 services-title mt-2">@lang('Du har alltid tillgång till ditt CV eller personligt brev')</h5>
                                        <p class="mb-0">@lang('Nya erfaranheter? Nytt mobilnummer? Ny adress? Du kan när som helst gå in och göra justeringar i ditt CV.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 services-title mt-2">@lang('Vi finns här för dig')</h5>
                                        <p class="mb-0">@lang('Du når oss alltid per mejl eller via kontaktformuläret, vi svarar så fort som möjligt.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nav flex-column nav-pills mt-4">
                        <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-safe"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 services-title mt-2">@lang('Din personliga integritet är viktig för oss')</h5>
                                        <p class="mb-0">@lang('Vi arbetar systematiskt med informationssäkerhet och dataskydd för att säkerställa en säker hantering av information och personuppgifter.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                         <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-cloud-download"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 services-title mt-2">@lang('Skriv ut eller spara ditt CV')</h5>
                                        <p class="mb-0">@lang('Du har dessutom alltid tillgång till ditt CV för framtida ändringar.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="nav-link">
                            <div class="p-3">
                                <div class="media">
                                    <div class="services-title">
                                        <i class="pe-7s-rocket"></i>
                                    </div>
                                    <div class="media-body pl-4">
                                        <h5 class="mb-2 services-title mt-2">@lang('Vi hjälper dig att skapa ett perfekt CV')</h5>
                                        <p class="mb-0">@lang('Vi på Skapa CV ger dig de bästa tipsen för ett professionellt CV.')</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
               
            </div>

        </div>
    </section>
    <!-- END WHY -->

     <!-- START COUNTER -->
    <section class="section pt-5">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-5">
                    <div class="counter-info mt-4">
                        <h3>@lang('Över 10 000 nöjda medlemmar')</h3>
                        <p class="text-muted mt-4">@lang('Kom ett steg närmare ditt drömjobb med verktyget') {{ __(config('app.name')) }}.</p>
                        <div class="mt-4">
                            <a href="{{ route('login') }}" class="btn btn-primary">@lang('Login Now')  <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="media box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon mr-3">
                                        <i class="mdi mdi-emoticon-outline text-primary h2"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="10000">0</span>
                                            +</h3>
                                        <h5 class="mt-2 mb-0 f-17">@lang('Användare')</h5>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="media box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon mr-3">
                                        <i class="mdi mdi-flag text-primary h2"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="2">0</span>
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">@lang('Språk')</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-1">
                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="media box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon mr-3">
                                        <i class="pe-7s-note2 text-primary h2"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="counter-count"> <span class="counter-value"
                                                data-count="10">0</span> +
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">@lang('CV-mallar')</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="counter-box mt-4">
                                <div class="media box-shadow bg-white p-4 rounded">
                                    <div class="counter-icon mr-3">
                                        <i class="mdi mdi-timer text-primary h2"></i>
                                    </div>
                                    <div class="media-body pl-2">
                                        <h3 class="counter-count"> <span class="counter-value" data-count="5">0</span> +
                                        </h3>
                                        <h5 class="mt-2 mb-0 f-17">@lang('Years of expe') </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END COUNTER -->
    
@stop
