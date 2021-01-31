<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google Adsense Start -->
        <script data-ad-client="ca-pub-2081767757854767" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Google Adsense End -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- BootStrap -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- BootStrap End-->

        <!-- Styles -->
        <style>
            .adsbygoogle {
                width: 100%;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body >
      <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">かんたんWEBツール</a>
            </div>
            </div>
        </header>

        <div class="row mb-2">
            <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-primary">情報取得</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="/your-info"><u>アクセス情報確認</u></a>
                </h3>
                <p class="card-text mb-auto">IPアドレスやUser Agentを確認できるツールです。</p>
                <a href="your-info">ツールへ</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
            </div>
            <div class="col-md-6">
            <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                <strong class="d-inline-block mb-2 text-success">開発ツール</strong>
                <h3 class="mb-0">
                    <a class="text-dark" href="#">JSONツール(開発中)</a>
                </h3>
                <p class="card-text mb-auto">JSONに関する開発ツールです。開発中</a>
                </div>
                <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
            </div>
        </div>


        <div class="container">
            <!-- Google Adsense -->
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                style="display:block"
                data-ad-client="ca-pub-2081767757854767"
                data-ad-slot="4653756802"
                data-ad-format="auto"
                data-full-width-responsive="true"></ins>
            <script>
                window.onload = function() {
                    (adsbygoogle = window.adsbygoogle || []).push({});
                }
            </script>
        </div>
      </div>



    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            当サイトについて
          </h3>

          <div class="blog-post">
            <h2 class="blog-post-title">WEBのツールを提供します</h2>
            <p class="blog-post-meta">2021年01月30日より <a href="https://www.yuulinux.tokyo">優さん</a></p>

            <p>よろしくお願い致します。</p>
            <hr>
          </div><!-- /.blog-post -->

          {{-- <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav> --}}

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p>みなさんが使いやすいツールを目指して開発していきます！</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">管理人について</h4>
            <p>WEB開発者です。</p>
            <ol class="list-unstyled">
              <li><a href="https://www.youtube.com/channel/UCmM3pSzBqUjqNA0MqPPsfxg">YouTube</a></li>
              <li><a href="https://twitter.com/yuu13n6r2">Twitter</a></li>
            </ol>
          </div>
        </aside>
        <!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">
      <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script><script src="/docs/4.3/assets/js/vendor/anchor.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/clipboard.min.js"></script>
    <script src="/docs/4.3/assets/js/vendor/bs-custom-file-input.min.js"></script>
    <script src="/docs/4.3/assets/js/src/application.js"></script>
    <script src="/docs/4.3/assets/js/src/search.js"></script>
    <script src="/docs/4.3/assets/js/src/ie-emulation-modes-warning.js"></script>
      </body>
    </html>

