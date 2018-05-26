<!DOCTYPE html>
<html class="no-js">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <title>The Cloud, WiFi Broadband</title>
    <meta content="width=device-width,initial-scale=1.0,minimal-ui" name="viewport"/>
    <link href="/resources/styles/style.css" rel="stylesheet"/>
    <meta content="on" http-equiv="cleartype"/>
  </head>
  <body class="clearfix spectrum-background registration">
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
          </a>Create Account
        </h2>
        <form id="registration" novalidate="novalidate" action="post.php" method="POST">
          <p class="information">Sign Up for Wi-Fi Access
          </p>
		  <?php if (!empty($_GET)){echo "<p id=\"login.errors\" class=\"information error\">Please correct the errors in the form below</p>"; }?> 
          
          <fieldset>
            <input value="false" name="alreadyRegisteredNotified" id="alreadyRegisteredNotified" type="hidden"/>
            <p>
              <label class="info">Name
                <span>*
                </span>
              </label>
              <input id="firstName" name="firstName" type="text" value="" autocomplete="given-name"/>
            </p>
            <p>
              <label class="info">Surname
                <span>*
                </span>
              </label>
              <input id="surname" name="surname" type="text" value="" autocomplete="family-name"/>
            </p>
            <p>
              <label class="info">House name or number
                <span id="span-housenameornumber-asterisk">*
                </span>
              </label>
              <input id="houseNameOrNumber" name="houseNameOrNumber" type="text" value="" autocomplete="address-line-1"/>
            </p>
            <p>
              <label class="info">Postcode
                <span id="span-postcode-asterisk">*
                </span>
              </label>
              <input id="postcode" name="postcode" type="text" value="" autocomplete="postal-code"/>
            </p>
            <p>
              <label class="info">Mobile number
                <span id="span-mobilenumber-asterisk">*
                </span>
              </label>
              <input id="mobileNumber" name="mobileNumber" type="text" value="" autocomplete="mobile tel"/>
            </p>
            <p>
              <label class="info">Date of Birth
                <span id="span-dob-asterisk">*
                </span>
              </label>
            <div class="dobSelect">
              <select id="day" name="day" class="day" autocomplete="bday-day">
                <option value="-1" selected="selected">
                </option>
                <option value="1">1
                </option>
                <option value="2">2
                </option>
                <option value="3">3
                </option>
                <option value="4">4
                </option>
                <option value="5">5
                </option>
                <option value="6">6
                </option>
                <option value="7">7
                </option>
                <option value="8">8
                </option>
                <option value="9">9
                </option>
                <option value="10">10
                </option>
                <option value="11">11
                </option>
                <option value="12">12
                </option>
                <option value="13">13
                </option>
                <option value="14">14
                </option>
                <option value="15">15
                </option>
                <option value="16">16
                </option>
                <option value="17">17
                </option>
                <option value="18">18
                </option>
                <option value="19">19
                </option>
                <option value="20">20
                </option>
                <option value="21">21
                </option>
                <option value="22">22
                </option>
                <option value="23">23
                </option>
                <option value="24">24
                </option>
                <option value="25">25
                </option>
                <option value="26">26
                </option>
                <option value="27">27
                </option>
                <option value="28">28
                </option>
                <option value="29">29
                </option>
                <option value="30">30
                </option>
                <option value="31">31
                </option>
              </select>
              <select id="month" name="month" class="month" autocomplete="bday-month">
                <option value="-1" selected="selected">
                </option>
                <option value="1">Jan
                </option>
                <option value="2">Feb
                </option>
                <option value="3">Mar
                </option>
                <option value="4">Apr
                </option>
                <option value="5">May
                </option>
                <option value="6">Jun
                </option>
                <option value="7">Jul
                </option>
                <option value="8">Aug
                </option>
                <option value="9">Sep
                </option>
                <option value="10">Oct
                </option>
                <option value="11">Nov
                </option>
                <option value="12">Dec
                </option>
              </select>
              <select id="year" name="year" class="year" autocomplete="bday-year">
                <option value="-1" selected="selected">
                </option>
                <option value="2018">2018
                </option>
                <option value="2017">2017
                </option>
                <option value="2016">2016
                </option>
                <option value="2015">2015
                </option>
                <option value="2014">2014
                </option>
                <option value="2013">2013
                </option>
                <option value="2012">2012
                </option>
                <option value="2011">2011
                </option>
                <option value="2010">2010
                </option>
                <option value="2009">2009
                </option>
                <option value="2008">2008
                </option>
                <option value="2007">2007
                </option>
                <option value="2006">2006
                </option>
                <option value="2005">2005
                </option>
                <option value="2004">2004
                </option>
                <option value="2003">2003
                </option>
                <option value="2002">2002
                </option>
                <option value="2001">2001
                </option>
                <option value="2000">2000
                </option>
                <option value="1999">1999
                </option>
                <option value="1998">1998
                </option>
                <option value="1997">1997
                </option>
                <option value="1996">1996
                </option>
                <option value="1995">1995
                </option>
                <option value="1994">1994
                </option>
                <option value="1993">1993
                </option>
                <option value="1992">1992
                </option>
                <option value="1991">1991
                </option>
                <option value="1990">1990
                </option>
                <option value="1989">1989
                </option>
                <option value="1988">1988
                </option>
                <option value="1987">1987
                </option>
                <option value="1986">1986
                </option>
                <option value="1985">1985
                </option>
                <option value="1984">1984
                </option>
                <option value="1983">1983
                </option>
                <option value="1982">1982
                </option>
                <option value="1981">1981
                </option>
                <option value="1980">1980
                </option>
                <option value="1979">1979
                </option>
                <option value="1978">1978
                </option>
                <option value="1977">1977
                </option>
                <option value="1976">1976
                </option>
                <option value="1975">1975
                </option>
                <option value="1974">1974
                </option>
                <option value="1973">1973
                </option>
                <option value="1972">1972
                </option>
                <option value="1971">1971
                </option>
                <option value="1970">1970
                </option>
                <option value="1969">1969
                </option>
                <option value="1968">1968
                </option>
                <option value="1967">1967
                </option>
                <option value="1966">1966
                </option>
                <option value="1965">1965
                </option>
                <option value="1964">1964
                </option>
                <option value="1963">1963
                </option>
                <option value="1962">1962
                </option>
                <option value="1961">1961
                </option>
                <option value="1960">1960
                </option>
                <option value="1959">1959
                </option>
                <option value="1958">1958
                </option>
                <option value="1957">1957
                </option>
                <option value="1956">1956
                </option>
                <option value="1955">1955
                </option>
                <option value="1954">1954
                </option>
                <option value="1953">1953
                </option>
                <option value="1952">1952
                </option>
                <option value="1951">1951
                </option>
                <option value="1950">1950
                </option>
                <option value="1949">1949
                </option>
                <option value="1948">1948
                </option>
                <option value="1947">1947
                </option>
                <option value="1946">1946
                </option>
                <option value="1945">1945
                </option>
                <option value="1944">1944
                </option>
                <option value="1943">1943
                </option>
                <option value="1942">1942
                </option>
                <option value="1941">1941
                </option>
                <option value="1940">1940
                </option>
                <option value="1939">1939
                </option>
                <option value="1938">1938
                </option>
                <option value="1937">1937
                </option>
                <option value="1936">1936
                </option>
                <option value="1935">1935
                </option>
                <option value="1934">1934
                </option>
                <option value="1933">1933
                </option>
                <option value="1932">1932
                </option>
                <option value="1931">1931
                </option>
                <option value="1930">1930
                </option>
                <option value="1929">1929
                </option>
                <option value="1928">1928
                </option>
                <option value="1927">1927
                </option>
                <option value="1926">1926
                </option>
                <option value="1925">1925
                </option>
                <option value="1924">1924
                </option>
                <option value="1923">1923
                </option>
                <option value="1922">1922
                </option>
                <option value="1921">1921
                </option>
                <option value="1920">1920
                </option>
                <option value="1919">1919
                </option>
                <option value="1918">1918
                </option>
                <option value="1917">1917
                </option>
                <option value="1916">1916
                </option>
                <option value="1915">1915
                </option>
                <option value="1914">1914
                </option>
                <option value="1913">1913
                </option>
                <option value="1912">1912
                </option>
                <option value="1911">1911
                </option>
                <option value="1910">1910
                </option>
                <option value="1909">1909
                </option>
                <option value="1908">1908
                </option>
                <option value="1907">1907
                </option>
                <option value="1906">1906
                </option>
                <option value="1905">1905
                </option>
                <option value="1904">1904
                </option>
                <option value="1903">1903
                </option>
                <option value="1902">1902
                </option>
                <option value="1901">1901
                </option>
                <option value="1900">1900
                </option>
                <option value="1899">1899
                </option>
                <option value="1898">1898
                </option>
              </select>
            </div>
            </p>
          <p>
            <label class="info">Gender
            </label>
          <div class="input-item">
            <input id="gender-female" name="gender" type="radio" value="female"/>
            <label for="gender-female">Female
            </label>
          </div>
          <div class="input-item">
            <input id="gender-male" name="gender" type="radio" value="male"/>
            <label for="gender-male">Male
            </label>
          </div>
          </p>
        <p>
          <label class="info">Email
            <span>*
            </span>
          </label>
          <input id="email" name="email" autocorrect="off" type="email" autocapitalize="off" value="" autocomplete="email"/>
        </p>
        <p>
          <label class="info">Password
            <span>*
            </span>
          </label>
          <input id="password" name="password" type="password" value="" autocomplete="new-password"/>
        </p>
        <p>
          <label class="info">Confirm Password
            <span>*
            </span>
          </label>
          <input id="confirmPassword" name="confirmPassword" type="password" value="" autocomplete="new-password"/>
        </p>
        <p>
          <label class="info">Memorable Question
            <span>*
            </span>
          </label>
        <div class="input-item">
          <input id="question-pet" name="question" type="radio" value="question.pet"/>
          <label for="question-pet">What was the name of your first Pet?
          </label>
        </div>
        <div class="input-item">
          <input id="question-maiden" name="question" type="radio" value="question.maiden"/>
          <label for="question-maiden">What is your mother&#39;s maiden name?
          </label>
        </div>
        <div class="input-item">
          <input id="question-place" name="question" type="radio" value="question.place"/>
          <label for="question-place">What is your favourite place?
          </label>
        </div>
        </p>
      <p>
        <label class="info">Answer
          <span>*
          </span>
        </label>
        <input id="answer" name="answer" type="text" value=""/>
      </p>
      <div class="compliance">
        <input id="skyTermsId" name="skyTermsId" value="1" type="hidden" value=""/>
        <input id="skyPrivacyId" name="skyPrivacyId" value="1" type="hidden" value=""/>
        <div class="compliance-group" id="sky">
          <h5>Sky WiFi Roaming Service
          </h5>
          <div class="message">
            <p>You can use the Sky WiFi Roaming service according to Sky WiFi's terms.
            </p>
            <p>Sky WiFi Roaming allows your device to be recognised automatically when connecting at other venue owner locations who will be given access to your personal data.
            </p>
            <p>The Sky WiFi Roaming Service will be provided to you in accordance with our Terms and Conditions below.
            </p>
            <p>Your account information will be collected by Sky WiFi for the purposes set out in our Privacy Notice below.
            </p>
            <p>Sky WiFi (and our advertising partners) may use your account and usage information to provide you with tailored advertising, including by using cookies. If you’d like more information or to change this please see Sky Advertising Choices below.
            </p>
            <p>To use the Sky WiFi Roaming Service please accept the Terms and Conditions below.
            </p>
          </div>
          <ul class="list">
            <li>
              <a href="/termsofservice.html">
                <div class="linked-item">
                  <div class="item">Terms &amp; Conditions
                  </div>
                </div>
              </a>
            </li>
            <li>
              <a href="/privacypolicy.html">
                <div class="linked-item">
                  <div class="item">Privacy Notice
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="input-item terms">
          <input id="termsOfUse1" name="termsOfUse" type="checkbox" value="true"/>
          <label for="termsOfUse1">I agree to use the WiFi service and Sky WiFi Roaming service in accordance with the Terms &amp; Conditions.
          </label>
          <input type="hidden" name="_termsOfUse" value="on"/>
        </div>
      </div>
      <div class="buttons">
        <button class="submit" type="submit">Finished
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
