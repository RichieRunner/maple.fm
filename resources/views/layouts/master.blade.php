<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    Maple.fm | @yield('title', 'MapleStory Free Market')
    </title>
    <meta name="description" content="A glimpse of the MMORPG MapleStory's Free Market and it's economy.">
    @show
    <meta name="keywords" content="MapleStory, maple.fm, maple fm, Free Market, MapleStory Free Market, MapleStory Rankings, Maple, MapleStory population, Maplestory fm">
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Maple.fm | @yield('title', 'Maplestory Free Market')" />
    <meta property="og:description" content="A glimpse of the MMORPG MapleStory's Free Market and it's economy." />
    <meta property="og:image" content="http://dev.maple.fm/img/mascot.png" />
    <link rel="stylesheet" href="/css/app.css">
    @yield('css')
  </head>
    <body>
<header>
<div class="navbar-fixed">
 <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a class="brand-logo" href="/"><img src="/img/logo_transparent.png"/></a>
        <span class="brand-logo hide-on-med-and-down" style="margin-left:70px;">| @yield('title', 'Market')</span>
        <a href="#" data-activates="mobile" class="button-collapse"><i class="fa fa-bars"></i></a>
        <ul id="left" class="right hide-on-med-and-down">
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/statistics">Statistics</a>
          </li>
          <li class="nav-item">
            <a class="waves-effect waves-light" href="#markets">Markets</a>
          </li>
        </ul>
        <ul class="side-nav" id="mobile">
          <li>
            <a class="nav-link" href="/about">About</a>
          </li>
          <li>
            <a class="nav-link" href="/statistics">Statistics</a>
          </li>
          <li><a class="waves-effect waves-light" href="#markets">Markets</a></li>
        </ul>
      </div>
    </div>
  </nav>
</div>
</header>
<main>
  <div class="container content">
    @if(!Auth::check())
      <div class="alert-dev blue white-text center" style="font-size:20px;"><b>Hello mapler!</b> Thank you for testing out our public alpha as we craft a better experience for you. Please report any bugs on our <a href="http://github.com/crrio/maple.fm/issues" class="white-text"><u>Github</u></a>! <i class="fa fa-heart"></i>
      </div>
    @endif
      <div class="row">
          <div class="col s12">
          @if(!empty($message))
            {{ \Core\Corsair::displayMessage($message) }}
          @endif
          @yield('full')
          </div>
          <div class="col s12 m8">
          @yield('content')
          </div>
          <div class="col s12 m4">
          @section('sidebar')

          @show
      </div>
    </div>
</main>
        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col s12 m12">
                <p class="grey-text text-lighten-4 center" style="margin-bottom: 0px;margin-top:20px;">
                  All assets and resources regarding MapleStory thereof are the sole property of <a href="http://nexon.net" class="white-text"><b>NEXON</b></a> and applies to their Terms of Use.<br/>
                <i class="twa twa-heart"></i> We are <i>not an official MapleStory server nor fansite</i>; we merely provide this service for free <i><b>for players, by players.</b></i></p>
              </div>
            </div>
          </div>
        </footer>

      <div id="markets" class="modal bottom-sheet">
        <div class="modal-content">
          <h4>Markets</h4>
          <p>View the entire Free Market of each MapleStory server below. Support for Luna will be added soon.</p>
    <div class="row">
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/scania">
                <div class="card-content blue white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Scania.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-30px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">Scania</p>
                    <p><b><span id="scania"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/windia">
                <div class="card-content purple white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Windia.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-30px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">Windia</p>
                    <p><b><span id="windia"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/bera">
                <div class="card-content red lighten-1 white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Bera.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-30px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">Bera</p>
                    <p><b><span id="bera"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/khroa">
                <div class="card-content green lighten-1 white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Broa.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-20px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">Khroa</p>
                    <p><b><span id="khroa"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/mybckn">
                <div class="card-content orange white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Mardia.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-20px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">MyBckn</p>
                    <p><b><span id="mybckn"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
              <div class="card-stacked">
                <a href="/grazed">
                <div class="card-content grey darken-4 white-text" style="position:relative;overflow:hidden;">
                    <canvas data-url="/img/worlds/Demethos.png" data-scale="10" style="margin-right:5px;position:absolute;right:-20px;top:-20px;opacity:0.5;" data-toggle="tooltip" data-placement="bottom" title="Market" width="80" height="80"></canvas>
                    <p class="flow-text">Grazed</p>
                    <p><b><span id="grazed"></span></b> Items Listed</p>
                </div>
                </a>
              </div>
            </div>
        </div>
    </div>
        </div>
      </div>

      <script src="/js/app.js"></script>
      <script src="/js/codepeg.pixelPerfect.js"></script>
      <script type="text/javascript">
        var Market = {
                servers: {
                    scania: 0,
                    windia: 0,
                    bera: 0,
                    khroa: 0,
                    mybckn: 0,
                    grazed: 0
                },
                count: 0
            };

            function getCount() {
                if (Market.count != 0) {
                    return Market.count;
                } else {
                    $.each(Market.servers, function (server_name, server_item_count) {
                        $.ajax({
                            url: 'http://maplestory.io/api/server/' + Object.keys(Market.servers).indexOf(server_name).toString() + '/market/itemCount',
                            async: false,
                            success: function (data) {
                                var json_data = JSON.parse(data);
                                var priorCount = Market.count;
                                $('#'+ server_name +'').html(json_data);
                                Market.count += json_data;
                                Market.servers[server_name] = json_data;
                                console.log(data + ' items were added to ' + priorCount + ' to become ' + Market.count + ' items.');
                            }
                        });
                    });
                    return Market.count;
                }
            }

          $('#total').html(getCount()).formatNumber();

      </script>
      <script>

      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $('.modal').modal();
      });

      var pixelPerfect = new CodePeg.PixelPerfect(
          $('canvas'), {
              urlTag: 'url', // The name of the data tag for the url
              scaleTag: 'scale', // The data tag for the image's scale factor
              filter: 'nearestneighbor', // The image scaling filter to apply. string or function
          }
      );
      </script>
      @section('js')
      @show
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-46623827-1', 'maple.fm');
          ga('send', 'pageview');
      </script>
    </body>
</html>