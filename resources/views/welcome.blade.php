<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>我的教育荣誉</title>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="css/full-width-pics.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->
      <!--       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">主页</a>
                    @else
                        <a href="{{ route('login') }}">登录</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">注册</a>
                        @endif
                    @endauth
                </div>
            @endif -->

<!-- </div> -->
              <!-- Navigation -->
              <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="#">我的教育荣誉</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="#home">首页
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#services">服务</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#price">价格</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#contact">联系</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">登录</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">注册</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>

            <div class="content">
                  <!-- Header - set the background image for the header in the line below -->
                  <header class="py-5 bg-image-full" style="background-image: url('/images/luke-ellis-craven-yCsk1q2Eq0o-unsplash.jpg');" name="home" id="home">
                    <!-- <img class="img-fluid d-block mx-auto" src="/images/icons8-medal-100.png" alt=""> -->
                    <div style="height: 300px;"></div>
                  </header>

                  <!-- Content section -->
                  <section class="py-5">
                    <div class="container">
                      <h1>我的教育荣誉</h1>
                      <p class="lead">回顾与展望，努力和付出</p>
                      <p>记录并管理我们教育生涯中所获得的荣誉.</p>
                    </div>
                  </section>

                  <!-- Image Section - set the background image for the header in the line below -->
                  <section class="py-5 bg-image-full" style="background-image: url('/images/jess-bailey-q10VITrVYUM-unsplash.jpg');" name="services" id="services">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 400px;"></div>
                  </section>

                  <!-- Content section -->
                  <section class="py-5">
                    <div class="container">
                      <h1>服务</h1>
                      <p class="lead">存储 可视 数据 趋势 故事</p>
                      <p>让你对自己的荣誉管理得心应手</p>
                    </div>
                  </section>

                    <!-- Image Section - set the background image for the header in the line below -->
                  <section class="py-5 bg-image-full" style="background-image: url('/images/kate-trysh-s8u1Gv2uF3o-unsplash.jpg');" name="price" id="price">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 400px;"></div>
                  </section>

                  <!-- Content section -->
                  <section class="py-5">
                    <div class="container">
                      <h1>价格</h1>
                      <p class="lead">为了帮你管理你的荣誉，我付出了很多.</p>
                      <p>基础用户，每人每年50元人民币.</p>
                    </div>
                  </section>

                    <!-- Image Section - set the background image for the header in the line below -->
                  <section class="py-5 bg-image-full" style="background-image: url('/images/adam-solomon-WHUDOzd5IYU-unsplash.jpg');" name="contact" id="contact">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 400px;"></div>
                  </section>

                  <!-- Content section -->
                  <section class="py-5">
                    <div class="container">
                      <h1>联系</h1>
                      <p class="lead">Email:shengling_2005@163.com.</p>
                      <p>我希望得到你的任何反馈.</p>
                    </div>
                  </section>

                  <!-- Footer -->
                  <footer class="py-5 bg-dark">
                    <div class="container">
                      <p class="m-0 text-center text-white">Copyright &copy; My Education Award 2020</p>
                    </div>
                    <!-- /.container -->
                  </footer>
            </div>
        
          <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script>
$(function(){
    //锚点跳转滑动效果  
    $('a[href=#price]').click(function() {  
        console.log(this.pathname)  
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {  
            var $target = $(this.hash);  
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');  
            if ($target.length) {  
                var targetOffset = $target.offset().top-50;  
                $('html,body').animate({  
                            scrollTop: targetOffset  
                        },  
                        1000);  
                return false;  
            }  
        }  
    }); 
})
</script>
    </body>
</html>
