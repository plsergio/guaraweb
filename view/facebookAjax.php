<!DOCTYPE html>
<html>
<head>
<title>Facebook Login JavaScript Example</title>
<meta charset="UTF-8">
</head>
<body>
<!-- <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    // appId      : '145634995501895',
    appId      : '308520936166469',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script> -->

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<!-- <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button> -->

<div id="status"></div>
<!-- <img src="" alt="" /> -->
<script src="https://code.jquery.com/jquery.js"></script>
<script type="text/javascript">
  // $.ajax({
  //   url: 'https://graph.facebook.com/v2.7/me/feed?message=teste&access_token=EAACEdEose0cBAOvLgSomBK1s5BlWOZCBb0Q5NeOX0TjcWXglZChTBcCmXCE4OQZADtM3fH5I1FJHqZC4TbuvGBRfgmN7qtGEZBQZBZAHt7uQd8drB4zsc2ZBczBUnnSFZCr5isYrWHfTj85tc2ygwWU7wtjhSZCC9AhjTAVoVpzWMsmciWnG1kU6aj',
  //   method: 'get',
  //   success: function(data){
  //     $("#status").html(data);
  //   }
  // });

  $.ajax({
    url: "https://graph.facebook.com/v2.7/me/feed?fields=link%2Cfull_picture%2Cmessage&access_token=EAACEdEose0cBAKVVZAU5QxYjkUMvp9dXFahaHW885ZCncOpRZAqqfZBIyeGofTr3sPxiS37L4xzDsLjtlhQ8dg08vRvc7hd07fXd9UY3bzDfo92fbUS7WRbD7JGMiHBjZCq9lKo1aC8ZBOgWEkujkf7dPwdJcvT0utAu6HPwMFjkxfXbazZBC4L",
    method: 'get',
    success: function(data){
      // var face = JSON.parse(data);
      console.log(data['data']['0']);
      console.log(data['data']['0']['message']);
      $("#status").html(
        // "<img src='"+data['data']['0']['full_picture']+"' alt='' />"
        // data['data']['0']['full_picture']
        // data['data']['0']['message']
      );

      // for (i = 0; i <= data.; i++) {
      //   console.log(i);
      // // var elementToAdd = "<li> Linha " + i + "</li>";
      // // $("#status").append(elementToAdd);
      // }
      // console.log(data["id"]);
      // console.log(face);
      // alert(data);
    }
  });
</script>

</body>
</html>
