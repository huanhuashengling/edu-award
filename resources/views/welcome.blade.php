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
                        <a class="nav-link" href="asas">首页
                          <span class="sr-only">(current)</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">服务</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">价格</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">联系</a>
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
                  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
                    <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Award" alt="">
                    <div style="height: 200px;"></div>
                  </header>

                  <!-- Content section -->
                  <section class="py-5" name="asas">
                    <div class="container">
                      <h1>我的教育荣誉</h1>
                      <p class="lead">记录并管理我们教育生涯中所获得的荣誉.</p>
                      <p>记录教育荣誉可以让我们回顾之前的努力和付出，也可以让我们看到未来要去努力和付出的方向.</p>
                    </div>
                  </section>

                  <!-- Image Section - set the background image for the header in the line below -->
                  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 200px;"></div>
                  </section>

                  <!-- Content section -->
                  <section class="py-5">
                    <div class="container">
                      <h1>服务</h1>
                      <p class="lead">让你对自己的荣誉管理得心应手.</p>
                      <p>1. 保存你的荣誉片；2.视觉化你的荣誉文本；3.保存你的荣誉数据；4.可视化你的荣誉趋势；5.记录你的荣誉故事.</p>
                    </div>
                  </section>

                    <!-- Image Section - set the background image for the header in the line below -->
                  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1075');">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 200px;"></div>
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
                  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1077');">
                    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
                    <div style="height: 200px;"></div>
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
                      <p class="m-0 text-center text-white">Copyright &copy; My Award 2020</p>
                    </div>
                    <!-- /.container -->
                  </footer>
            </div>
        
          <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
