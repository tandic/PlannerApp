<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Meni planer</title>
    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap css -->
   <link href="/css/app.css"  rel="stylesheet">
    <!-- MDB css -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
    <!-- Custom css -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!-- Tab Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}" />

</head>

<body>
 
    <div id="intro" class="view">
      <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent z-depth-0">
          <!--<a class="navbar-brand" href="#">Ime</a>-->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#features">SAVJETI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">O NAMA</a>
              </li>
            </ul>
          
          </div>
        </nav>
        <!-- Nav -->
        <!--Mask -->
        <div class="container-fluid full-bg-img fill-height d-flex align-items-center justify-content-center">
            <div class="row d-flex justify-content-center">
              <div class="col-md-8 text-center">
                <h2 class="display-3 font-bold white-text mb-2 caption-header">Meni planer</h2>
                <hr class="hr-light">
                <h4 class="white-text my-4 caption-text">Pravilna prehrana je ona prehrana koja tijelu osigurava optimalan unos hranjivih tvari koje su potrebne za rast, razvoj te održavanje normalne funkcije tkiva i organa. Ona je jedan od važnih čimbenika za održavanje i poboljšanje zdravlja. Pravilnu prehranu odlikuju umjerenost, raznolikost i uravnoteženost :)  </h4>

                <button type="button" id="prijava" class="btn btn-outline-white" data-toggle="modal" data-target=".bd-example-modal-lg">Prijava</button>
                <button id="registracija" type="button" class="btn btn-outline-white" data-toggle="modal" data-target=".bd-example-modal-lg">Registracija</button>
              
              </div>
            </div>
          <div class="pic-container">
            <img class="logo pull-right" src="{{URL::asset('/img/logo.png')}}" alt="Logo">
          </div> 
        </div>
    </div>
  <!--Mask -->
    <!-- Main -->
<main class="mt-5">
  

    <section id="features" class="text-center">
        <div class="container pb-5 pt-5 ">
            <h2 class="mb-4 font-weight-bold">Savjeti</h2>

            <div class="row d-flex justify-content-center mb-4">

               <div class="col-md-8">
                  <hr>
                <p class="grey-text pt-4">Želite se hraniti zdravo, ali ne znate koji je režim prehrane najbolji? Zaboravite na složene programe i nemoguće zahtjeve, donosimo vam tri ključna pravila koja ste već znali, ali ste zaboravili na njih :)
                 </p>

               </div>

            </div>

            <div class="row mt-5">

          <div class="col-md-4 mb-4">
            <i class="fa fa-calculator fa-2x green-text" aria-hidden="true"></i>
              <h4 class="my-4">Kuhinja</h4>
              <p>Izbacite iz kuhinje sve što nije hranjivo. Takve stvari u pravilu debljaju i vode u bolesti. Slatkiši, šećeri, konzervirana hrana, brašna, proizvodi od brašna, gazirana pića, umjetni sokovi, namazi... Potrudite se i pronađite u okolici ljude od kojih možete kupiti lokalne namirnice ili otiđite do tržnice. </p>
          </div>

          <div class="col-md-4 mb-4">
             <i class="fa fa-calculator fa-2x green-text" aria-hidden="true"></i>
              <h4 class="my-4">Motivacija</h4>
              <p>Mislite na sutra. Tijelo treba njegu i kvalitetno gorivo baš kao i automobil kako bi vas još dugo služilo. Budete li već danas počeli paziti na to čime se hranite, višestruko će vam tijelo vratiti kada budete u poznim godinama.</p>
          </div>

          <div class="col-md-4 mb-4">
             <i class="fa fa-calculator fa-2x green-text" aria-hidden="true"></i>
            <h4 class="my-4">Rekreacija</h4>
              <p>Što kvalitetnije budete jeli, imat ćete više energije. Iskoristite je za vlastito dobro. Možda ste posljednji put vježbali na satu tjelesnog prije nekoliko desteljeća. Nema veze - obujte tenisice, odjenite se u nešto udobno i izađite iz kuće. </p>
          </div>

      </div>

        </div>
    </section>

    <section id="examples" class="text-center">
      <div class="container-fluid ontop">

        <div class="row d-flex justify-content-center mb-4">

          <div class="col-md-8">

            <h3 class="grey-text mt-4">Zdrava prehrana nije stroga prehrana koja ograničava određene namirnice. Umjesto toga, riječ je o tome da se dobro osjećate, imate više energije i budete zdravi :)
            </h3>

          </div>

        </div>

      <div class="row mt-5 text-center">
        

          <div class="col-lg-4 col-md-4 mb-4">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">Raznolikost</h5>
              <p class="card-text">Ne postoji čudotvorna hrana, svaka daje neke određene tvari. Na primjer, naranče sadrže vitamin C i ugljikohidrate, ali ne i željezo i proteine. Meso sadrži proteine i željezo no ne sadrži vitamin C i ugljikohidrate. Najviše benefita izvlačimo ako se hranimo raznoliko.</p>
            </div>
          
          </div>

         <div class="col-lg-4 col-md-4 mb-4">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">Umjerenost</h5>
              <p class="card-text">Čak i čokolada i čips mogu naći mjesto u pravilnoj uravnoteženoj prehrani, ali u umjerenim količinama. Pokušajte rafinirani šećer i masti zamijeniti vrjednijim sastojcima. Umjesto masne kobasice i keksa, odaberite niskokalorični sendvič od tune bez tartara i sl.</p>
            </div>
          
          </div>


         <div class="col-lg-4 col-md-4 mb-4">
            <div class="card-body text-white bg-dark">
              <h5 class="card-title">Potpunost</h5>
              <p class="card-text">Birajte prirodne ili lagano prerađene proizvode kad god možete. Umjesto bijelog kruha jedite integralni, svježe jabuke umjesto kompota od jabuka u konzervi, a kuhani krumpir umjesto čipsa. Prirodna hrana obično ima veću prehrambenu vrijednost i manje sumnjivih dodataka.</p>
            </div>
          </div>
      </div>

    </div>
    </section>

<section id="about" class="text-center pb-5">
  <div class="container pb-5 pt-5 ">
        <h2 class="mb-4 font-weight-bold">O nama</h2>

      <div class="row d-flex justify-content-center mb-4">

        <div class="col-md-10">
              <hr>
            <p class="grey-text pt-4">Ova aplikacija, naziva "Meni planner", je namjenjena za sve osobe koje žele pratiti svoje zdravlje. Ista je prvenstveno bazirana na praćenju nutritivnih vrijednosti (sadržaj namirnica). Također, ona omogućuje pregled vježbi za gornji te donji dio tijela, te sadrži, dodatno, pregled savjeta glede zdravlja. Konkretno, ona omogućuje korisniku odabir odgovarajućeg jelovnika (primjerice, vegetarijanskog) te odabir odgovarajućeg dana (ili pak svih dana u tjednu) koje želi pratiti. Osim toga, ona omogućuje i izračun kalorija za osobe koje žele pratiti koliko su kalorija unijele tokom dana. Prije nego možete vidjeti taj glavni meni, potrebno se registrirati, tj.prijaviti se. Nadamo se da ćete uživati koristeći ovu aplikaciju :)
          </p>

        </div>

      </div>

      <div class="row pt-5">
        <div class="offset-md-1"></div>
        <div class="col-sm-3">
          <img src="img/p1.png">
        </div>
        <div class="col-sm-3">
          <img src="img/p2.png">
        </div>
        <div class="col-sm-3">
          <img src="img/p3.png">
        </div>
      </div>
       <div class="row">
        <div class="offset-sm-2"></div>
        <div class="col-sm-3">
          <img src="img/p4.png">
        </div>
        <div class="col-sm-3">
          <img src="img/p5.png">
        </div>
        <div class="col-sm-3">
          <img src="img/p6.png">
        </div>
      </div>
    </div>
</section>


 <!-- Modal -->

 <!-- Registracija/Prijava -->

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" >
          <div class="row no-gutters">
                <div class="col-md-5"><img class="form-pic" src="img/f1.jpg"></div>
                <div class="col-md-7 justify-content-start">
                   <div class="btn-group x btn-group-toggle" data-toggle="buttons">
                        <label  id = "1option" class="btn form-selector btn-secondary">
                          <input type="radio" name="options" id="option1" autocomplete="off">Prijava
                            </label> 
                            <label  id="2option" class="btn form-selector btn-secondary">
                          <input type="radio" name="options" id="option2" autocomplete="off"> Registracija
                        </label>
                   </div>
                    <div id="form" class="form-content d-flex justify-content-center mt-2 pt-2">
                       <div class="container forma" id="pr">
                           <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group">
                                <i class="fa ml-1 fa-user" aria-hidden="true"></i>
                                  <small for="exampleInputEmail1">Email</small>
                                  <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required autofocus>
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                              </div>
                              <div class="form-group">
                                <i class="fa ml-1 fa-lock" aria-hidden="true"></i>
                                  <small for="exampleInputPassword1">Lozinka</small>
                                  <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Lozinka" required>
                              </div>
                               <div class="form-group form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <small class="form-check-label grey-text" for="exampleCheck1">Remember Me</small>
                              </div>
                               <button type="submit" class="btn submit form-button btn-success btn-rounded waves-effect">Prijava</button>
                        </form>
                           </div>
                      <div class="container forma" id="re">

                        <form method="POST" action="{{ route('register') }}" onSubmit="return myF()" name="registerModal">
                              @csrf
                            <div class="row">
                              <div class="col">
                                <i class="fa ml-1 fa-address-card" aria-hidden="true"></i>
                                <small for="exampleFormControlInput1">Ime</small>
                                <input id="name" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Ime" required autofocus>
                
                              </div>
                              <div class="col">
                                <i class="fa ml-1 fa-address-card" aria-hidden="true"></i>
                                <small for="exampleFormControlInput1">Prezime</small>
                                <input id="surname" name="surname" type="text" class="form-control" placeholder="Prezime" required>
                              </div>
                              </div>
                              <div class="form-group mt-2">
                              <i class="fa ml-1 fa-user" aria-hidden="true"></i>
                              <small for="exampleFormControlInput1">Nadimak</small>
                              <input id="username" name="username" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Username" required>
                               @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                              </div>

                             <div class="form-group mt-2">
                              <i class="fa fa-envelope ml-1" aria-hidden="true"></i>
                              <small for="exampleFormControlInput1">Email</small>
                              <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleFormControlInput1" placeholder="name@example.com" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                  
                              <div class="row">
                              <div class="col">
                              <i class="fa ml-1 fa-lock" aria-hidden="true"></i>
                                  <small for="exampleInputPassword1">Lozinka</small>
                                  <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="exampleInputPassword1" placeholder="Lozinka" min="6" required>
                                  <small id="passHelp" class="form-text text-danger"></small>
                              </div>
                              <div class="col">
                                <i class="fa ml-1 fa-lock" aria-hidden="true"></i>
                                <small for="exampleInputPassword1">Potvrdi lozinku</small>
                                  <input type="password" class="form-control" id="password_confirmation" placeholder="Lozinka" name="password_confirmation" required>
                              </div>
                            </div>
                              <button id ="sub" name="submit" value="submit" type="submit" class="btn form-button btn-success btn-rounded waves-effect">Registracija</button>
                        </form>

                      </div>
                    </div>
               </div>    
            </div>
         </div>
      </div>
    </div>
</main>
  <!-- Main -->

  
  <!-- Footer -->
<footer class="page-footer font-small" style="background-color: #1ca86a;">

    <div style="background-color: #1ca86a;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 class="mb-0">Get connected with us on social networks!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fa fa-facebook white-text mr-4"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fa fa-twitter white-text mr-4"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fa fa-google-plus white-text mr-4"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fa fa-linkedin white-text mr-4"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fa fa-instagram white-text"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Company name</h6>
          <hr class="accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #6351ce;">
          <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Products</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">MDBootstrap</a>
          </p>
          <p>
            <a href="#!">MDWordPress</a>
          </p>
          <p>
            <a href="#!">BrandFlow</a>
          </p>
          <p>
            <a href="#!">Bootstrap Angular</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Useful links</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Your Account</a>
          </p>
          <p>
            <a href="#!">Become an Affiliate</a>
          </p>
          <p>
            <a href="#!">Shipping Rates</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@example.com</p>
          <p>
            <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
          <p>
            <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/"></a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Custom JS -->
  <script type="text/javascript" src="{{ asset('js/wscript.js') }}"></script>
  
</body>

</html>