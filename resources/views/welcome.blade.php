<!DOCTYPE html>
<html class="sticky-header-reveal">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Article Web - Sitti Wafiq Asyisyah</title>

  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Porto - Responsive HTML5 Template">
  <meta name="author" content="okler.net">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

  <!-- Web Fonts  -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/vendor/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/vendor/animate/animate.min.css">

  <!-- Theme CSS -->
  <link rel="stylesheet" href="/css/theme.css">
  <link rel="stylesheet" href="/css/theme-elements.css">
  <link rel="stylesheet" href="/css/theme-blog.css">
  <link rel="stylesheet" href="/css/theme-shop.css">

  <!-- Demo CSS -->
  <link rel="stylesheet" href="/css/demo-gym.css">

  <!-- Skin CSS -->
  <link rel="stylesheet" href="/css/skin-gym.css">

</head>

<body>

  <div class="body">
    <header id="header" class="header-floating-bar header-floating-bar-static-sticky"
      data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'reveal', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0px', 'stickyChangeLogo': false}">
      <div class="header-body bg-color-dark box-shadow-none">
        <div class="header-container header-container-height-sm container">
          <div class="header-row">
            <div class="header-column">
              <div class="header-row">
                <div class="header-logo">
                  <a href="/">
                    <img alt="Wafiqh" src="/img/logo.png">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div role="main" class="main">

      <section class="section section-no-border section-light custom-padding-top-1 mb-0">
        <div class="container">
          <div class="row mt-4">
            <div class="col">
              <h1 class="font-weight-bold text-color-primary mb-0">Mini Artikel</h1>
              <h4 class="font-weight-bold text-color-quaternary">Artikel untuk kamu</h4>
              <p>Baca artikel di sini, artikelnya keren, asik, teman gabut, buang suntuk, kocak, dan
                aktual pastinya. TTD Wafiqh cantik dan manis :).</p>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-quaternary section-center section-no-border m-0">
        <div class="container">
          <div class="row justify-content-center mb-4 mb-md-0 mb-lg-5">
            @foreach ($blogs as $item)
            <div class="col-md-8 col-lg-4 mb-4">
              <span class="thumb-info custom-thumb-info-2 thumb-info-hide-wrapper-bg">
                <span class="thumb-info-wrapper m-0">
                  <img src="/storage/img/{{$item->gambar}}" class="img-fluid" alt="">
                </span>
                <span class="thumb-info-caption bg-color-light text-center p-5">
                  <h4 class="font-weight-bold text-color-quaternary mb-3">{{$item->judul}}</h4>
                  <p class="text-color-dark p-0">{{$item->isi}}</p>
                  <a class="btn btn-primary custom-btn-style-1 text-uppercase text-color-light custom-font-weight-medium"
                    href="/detail/{{$item->id}}" title="Learn More">Lanjut Baca</a>
                </span>
              </span>
            </div>
            @endforeach
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          {{$blogs->links()}}
        </div>
      </section>

    </div>

    <footer id="footer" class="bg-color-quaternary">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <ul class="social-icons custom-social-icons">
              <li class="social-icons-instagram"><a href="http://www.instagram.com/" target="_blank"
                  title="Instagram"><i class="fab fa-instagram"></i></a></li>
              <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i
                    class="fab fa-twitter"></i></a></li>
              <li class="social-icons-googleplus"><a href="http://www.google.com/" target="_blank"
                  title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-lg-12 text-center">
            <p>2022 ?? Wafiqh <strong class="text-color-light font-weight-normal">Manis</strong> Copyright
              All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>

  </div>

  <!-- Vendor -->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>