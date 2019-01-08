<!--
***************************************************************************
* Thexyz Webmail Login Page
*
* Business class secure email platform with apps
*
*************************************************************************** -->


<!--
***************************************************************************
* Start the HTML page
* WARNING: This is where the code starts… Wahoo.
*************************************************************************** -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <!-- This meta tag forces browsers to use utf-8 character encoding to allow multibyte character support when logging in. -->
<TITLE>Thexyz Premium Webmail Secure Login</TITLE>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="Description"  content="Thexyz Webmail. Get instant access to email,
        calendars, contacts, tasks and notes from your desktop, laptop or mobile phone." />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
    <script type="text/javascript">_wm_redirect = false;</script>
    <script src="js/login.js?2230" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready( function() {
            window._ext_js_path = './';

            //Check for failure due to incorrect username or password
            if (String(document.location).substr(String(document.location).length - 7, 7) == '?fail=1') {
                document.body.className = 'alert';
            } else {
                document.body.className = 'normal';
            }

            //Make sure function exists
            if ($Login && $Login.init) {
                $Login.init();
            }
            if (document.login.user_name.value == 'Email Address') {
                document.login.user_name.value = '';
            }
        });
    </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
<script type="text/javascript" src="https://www.thexyz.com/includes/jquery.ticker.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 $('.ticker').ticker();
});
</script>
    <!--###require_ssl_js###-->

    <!--
    ***************************************************************************
    * Edit the Page Title between the <TITLE> tags below
    * YOU MAY EDIT THIS SECTION
    *************************************************************************** -->
    <title>Thexyz Email & Apps Login</title>
    <link href="https://www.thexyz.com/favicon.ico" rel="shortcut icon" />

    <!--
    ***************************************************************************
    * Edit the Colors and Fonts between the <STYLE> tags below
    * YOU MAY EDIT THIS SECTION
    *************************************************************************** -->


    <style type="text/css">

        body {
            background: #E5ECAB;
            font-size: 11pt;
            font-family: Trebuchet MS,Verdana;
        }

        div.page {
            width: 100%;
            text-align: center;
        }

        input:-webkit-autofill {
            background-color: white !important;
        }

        div.form_wrapper {
            width: 370px;
            margin: auto;
            margin-top: 5px;
            border: 1px solid #999;
            background: #FFF;
            box-shadow: 2px 2px 5px #999;
        }

        div.form {
            text-align: left;
            padding: 30px;
        }

        div.form input {
            font-size: 12pt;
            margin-left: 0px;
        }

        div.form #login {
            width: 82px;
            height: 34px;
			float: right;
        }

        div.form #login {
            cursor:pointer;
            font-family:Trebuchet MS,"Helvetica Neue",Helvetica,sans-serif;
            font-size:15px;
            border-radius:3px;
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            border-width:1px;
            border-style:solid;
            text-shadow:0 -1px 1px rgba(0,0,0,0.4);
            background-color:#FC6700;
            border-color:#FC6700;
            color:#fff;
            background:#F99653;
            background:-moz-linear-gradient(top,#F99653 0,#FC6700 100%);
            background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#F99653),color-stop(100%,#FC6700));
            background:-webkit-linear-gradient(top,#F99653 0,#FC6700 100%);
            background:-o-linear-gradient(top,#F99653 0,#FC6700 100%);
            background:-ms-linear-gradient(top,#F99653 0,#FC6700 100%);
            background:linear-gradient(top,#F99653 0,#FC6700 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#F99653',endColorstr='#FC6700',GradientType=0);
        }

        div.form #login::-moz-focus-inner {
            border:0;
            padding:0
        }

        input.user,
        input.pwd {
            height: 36px;
            border: 1px solid #cacaca;
        }

        input.user {
            margin: 0 0 17px 0;
            padding: 1px 1px 1px 10px;
        }

        input.pwd {
            margin: 2px 0 17px 0;
			width: 204px;
            padding: 1px 1px 1px 10px;
			float: left;
        }

        input.submit {
            margin: 4px 0 15px 0;
			float: right;
        }

		#email_input select {
			width: 170px;
			height: 40px;
			padding: 5px;
			border: 1px solid #cacaca;
			font-size: 12pt;
			margin-bottom: 17px;
			position: absolute;
		}
		
		#email_input {
		    position: relative;
			margin-top: 3px
		}
		
		select {
			margin-bottom: 10px;
		}
		
        #email_label {
           margin-top: 14px;
        }

        #form_title {
            font-size: 18px;
        }

        div#alert {
            display: none;
            color: red;
            font-size: 13px;
        }

        body.alert div#alert { display: block !important; }
        body.normal div#placeholder { display: none !important; }
        body.alert div#placeholder { display: none !important; }

        #ssl {
            margin-top: 4px;
        }

        .header {
             height: 1px;
        }
		
		div, select, label {
			clear: both;
		}
    </style>
</head>

<body>
    <div class="page">
        <div class="header"></div>
        <div class="form_wrapper">
<img src="https://admin.emailsrvr.com/clients/webmail/apps_thexyz_com/images/webmail_logo.png " alt="Thexyz Webmail" width="320" height="220"/>
            <div class="form">
                <div class="left">
                    <form method="post" action="login.php" name="login">
                        <div id="form_title">Enter your email address:</div>
                        <div id="alert">Login failed, <a href="/forgot-password" id="forgot_password">Reset password?</a></div>

                        <div id="email_label"><!--###user_name_label###--></div>
						<div id="email_input">
							<input type="text" tabindex="11" style="width:<!--###user_name_size###-->px;" name="user_name" class="user" value="" />
							<!--###hostname###-->
						</div>
                        <div>Enter your password</div>
						<div><input type="password" tabindex="12" name="password" class="pwd"/>

                        <input type="submit" tabindex="15" id="login" name="submit_btn"
                            class="submit" value="Log In" onclick="$Login.submitForm();"/>
						</div>
                        
						<!--###language###-->						
						
                        <div id="options">
                 
                            <div id="rememberinfo">
                                <input type="checkbox" tabindex="14" name="remember" id="remember" />
                                <label for="remember">Remember me</label>
                            </div>
                            <div id="ssl">
                                <input type="checkbox" tabindex="15" name="usessl" id="usessl" disabled="disabled" checked="checked" />
                                <label for="usessl">
                                    Use encryption

                                </label>
                            </div>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<!--
***************************************************************************
* Insert HTML for the Footer below
* YOU MAY EDIT THIS SECTION
*************************************************************************** -->
<p>
<p>
<p>
<p>
<center>
<div class="ticker">
    <ul>  
<li>There are some improvements to the Group Lists feature</li>
<li>Updates to Webmail on iOS and Android are now available</li>  
 <li>30GB Cloud Drive with Desktop Sync of files is now live</li>  
<li>You can access Cloud with app on Windows, Mac, iOS and Android</li>
 <li>Edit Word and Excel document in Webmail with Cloud Drive</li>  
 <li>We have added some new posts to the Knowledgebase</li>  
 <li>Accidentally deleted an email? No problem, use un-delete to get it back</li>  
 <li>Add your mobile phone number to ensure you never get locked out</li>   
 <li>Name change? You can now rename a mailbox</li>  
<li>Webmail settings can be found at the top right of the screen when logged in</li>   
<li>Remember to type your password without pasting it</li>
 
    </ul>

</div>
<p>
<p style="text-align: center;"><a href="https://webmail.thexyz.com/forgot-password" target="_blank" rel="noopener">Reset Password</a> | <a href="https://www.thexyz.com/webmail.html" target="_blank" rel="noopener">Sign up</a> | <a href="https://www.thexyz.com/support.html" target="_blank" rel="noopener">Help</a></p>
<p>
<p style="text-align: center;">® Thexyz Inc. All Rights Reserved</p></center>
<!--
***************************************************************************
* End the page
* WARNING: do not edit this section unless you know what you are doing
*************************************************************************** -->
<!-- Inserted by control panel -->
<script type="text/javascript">
function onFormSubmit(got_url) {
    var next_month = new Date();
    next_month.setTime(next_month.getTime()+(30*24*60*60*1000));
    next_month = next_month.toGMTString();
    document.cookie = "rsea_cust=1; expires="+next_month+"; path=/; domain=.rackspace.com";

    $Login.submitForm(got_url);
}
</script>

</body>
</html>
