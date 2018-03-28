<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Free Web tutorials on HTML and CSS">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200" rel="stylesheet">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/css/jquery-ui.css">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <meta name="google-site-verification" content="Ntwq6xf3DmQB-uhEShIp81qV-BmgFPqj_Ru12cJynyk" />
  <title>CoinPaper</title>
  <style>
    footer{
      float: left;
      padding: 20px 0;
    }
  </style>
</head>
<body>
  <div class='overlay'></div>
  <div class="wrap" style="float: left; height: auto; min-height:-moz-calc(100vh - 60px); min-height: -webkit-calc(100vh - 60px); width: 100%;">
    <nav>
      <div class="nav-header">CoinPaper</div>
      <ul class="links">
        <li class="navlink"><a href="mailto:support@coinpaper.io">Contact Us</a></li>
        <li class="navlink"><a href="#">FAQ</a></li>
        <li class="navlink"><a href="#">Newsletter</a></li>
      </ul>

      <div class="form-inline my-2 my-lg-0">
        <a href=""><button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
        <a href=""><button class="btn btn-outline-success my-2 my-sm-0">Signup</button></a>
      </div>
       <!-- <button type="button" id="hamburgerToggle" class="btn btn-default" aria-label="">
        <span class="fa fa-bars" aria-hidden="true"></span>
      </button> -->
    </nav>
    <div class="hero-wrap container">
      <h1 class="hero-heading">Buy & Sell Cryptocurrency</h1>
      <div class="feature-hero">
        <div class="row">
          <div class="col-lg-5 col-lg-offset-1">
            <div class="input-group">
              <input type="number" min="0" class="form-control" id="replyNumber" aria-label="..."  data-bind="value:replyNumber">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">USD </a></li>
                  <li><a href="#">BTC </a></li>
                  <li><a href="#">ETH </a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
          <div class="col-lg-5">
            <div class="input-group">
              <input type="number" min="0" class="form-control" id="replyNumber" aria-label="..."  data-bind="value:replyNumber">
              <div class="input-group-btn">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BTC <span class="caret"></span></button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">BTC</a></li>
                  <li><a href="#">USD</a></li>
                  <li><a href="#">ETH</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div>
      <div class="btn-ctn">
        <a href="#"><button id="getstarted" class="main-btn">Get Start</button></a>
      </div>
      <div class="moreinfo">
        <div class="center-txt">
          <h4 class="priceupdateheader">Current Price Of BitCoin</h4>
          <p class="getappnow">Updated Every Minute - <span id="timer"></span></p>
        </div>
        <div class="center-txt links-ctn">
          <h2 id="bitcoinPrice"></h2>
        </div>
      </div>
      <div class="row trading-section">
        <div class="col-md-6">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Cryptocurrency Markets</span> by TradingView</a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
            {
              "width": "100%",
              "height": "100%",
              "defaultColumn": "overview",
              "screener_type": "crypto_mkt",
              "displayCurrency": "USD",
              "locale": "en"
            }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-6">
          <div class="trading-title">
            <h2><b>Real-Time Updates So You Don't Miss Out</b></h2>  
          </div>
          
          <div class="trading-text col-md-10">
            <p>Quickly exchange your money into alt coins without any hidden fees.</p>
            <p>Buying with a Credit Card or ACH is probably the fastest and most conveniently option on the market</p>
            <p>Recurring buys allows you to constantly add to your positions on auto-pilot.</p>
          </div>
        </div>
      </div>
      <div class="row text-center">
        <h3><b>The Most Customer Centric Digital Currency</b></h3><br>
        <p>Here are a few reasons why you should choose coinpaper</p>
        <br>
        <div class="col-md-3 text-left">
          <div class="section-title">
            <!-- <span><i class="fa fa-dollar"></i></span> -->
            <h3> Flat to Digital</h3>
          </div>
          <div class="section-content">
            <p>One of the few places on the Internet where you can exchange USD for Digital Currency. Nased in the USA, provinding transparency and trust.</p>
          </div>
        </div>
        <div class="col-md-3 text-left">
          <div class="section-title">
            <!-- <span><i class="fa fa-gear"></i></span> -->
            <h3> Easy, Hassle Free</h3>
          </div>
          <div class="section-content">
            <p>After registration, give us a call and we'll help guid you through the exchanging process.</p>
          </div>
        </div>
        <div class="col-md-3 text-left">
          <div class="section-title">
            <!-- <span><i class="fa fa-gear"></i></span> -->
            <h3> Fast & Secure</h3>
          </div>
          <div class="section-content">
            <p>Receive your exchanged cryptocurrency almost instantly! Our card processing service provider specializes in price & purchase protection.</p>
          </div>
        </div>
        <div class="col-md-3 text-left">
          <div class="section-title">
            <!-- <span><i class="fa fa-gear"></i></span> -->
            <h3> Flexible</h3>
          </div>
          <div class="section-content">
            <p>Purchase as much as you want, when you want! There is no base limit.</p>
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
              <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
              <!-- Quote 1 -->
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12">
                    <h2><i class="fa fa-quote-right"></i></h2><br>
                    <p style="font-size: 18px;">I can't beleive they actually talk to you on the phone! They helped me get in at just the right time! I can't speak enough about their customer service and transaction support. Just AMAZING!</p><br>
                    <p><strong>James Grant</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="span12">
          <div class="thumbnail center well well-small text-center">
            <h2>Make Your First Digital Currency Purchase Today</h2><br>
            <form action="" method="post">
              <input type="text" id="subscription_email" name="" placeholder="Email">
              <input type="submit" value="Get Started" class="btn btn-large btn-success" />
            </form>
          </div>    
        </div>
      </div>
    </div>

  </div>
  <footer>
    <div class="col-md-6">
      <div class="col-md-3">
        <img src="">
      </div>
      <div class="col-md-6">
        <ul>
          <li><a href="">How Does It Work?</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="">FAQ</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="footer-social">
        
      </div>
      <div class="footer-auth">
        <a href=""><button class="btn btn-outline-success my-2 my-sm-0">Login</button></a>
        <a href=""><button class="btn btn-outline-success my-2 my-sm-0">Signup</button></a>
      </div>
    </div>
  </footer>
  <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/jquery.js"></script>
  <!-- <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/jquery-ui.js"></script> -->
  <!-- <script src="https://s3-us-west-1.amazonaws.com/firstplace-4545/coinpaper/js/bootstrap.min.js" type="text/javascript"></script> -->
  <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  

</body>
</html>
