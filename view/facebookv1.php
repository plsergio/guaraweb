<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>facebook</title>
  </head>
  <body>
    <!-- https://www.facebook.com/dialog/feed?app_id=145634995501895
    &amp;display=popup&amp;caption=An%20example%20caption
    &amp;link=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2F
    &amp;redirect_uri=https://developers.facebook.com/tools/explore -->


<!-- User Token
EAAFhTDVlNcoBADF6p5GQKtmVeUZBy1Nkh4bPJdsmkT7Bgfc56ZCAqeR69ICZBYEyOPSbb9qYITtleJUfdFSnXbbeLWBRyt2NZCGmVaZAayZCWVNciGWmZAb6fDlhYRmgCcbCZBAXBZBml6VaBKOlIUg7kSFY8EskZBgTtN1XbXqXK2pwZDZD
App Token
388454917944778|-G8CsvasZ2dRLf_OLZeSxbw4nkQ -->



    <?php

    /* INCLUDE NO AUTOLOAD E CHAMA AS CLASSES NECESSÁRIAS */
    // require 'facebook/autoload.php';
    require_once __DIR__ . '/php-graph-sdk-5.0.0/src/Facebook/autoload.php';
    use Facebook\FacebookSession;
    use Facebook\FacebookJavaScriptLoginHelper;
    use Facebook\FacebookRequest;
    use Facebook\GraphUser;

    // FacebookSession::setDefaultApplication('388454917944778', '57835eb9beb5748e4732bd25710b91fd');

    /* VERIFICA SE ESTA LOGADO */
    // $helper = new FacebookJavaScriptLoginHelper();
    // try {
    //   $session = new FacebookSession($_COOKIE['meuapp_token']);
    // }catch(FacebookRequestException $ex) {
    //   // When Facebook returns an error
    // }catch(\Exception $ex) {
    //   // When validation fails or other local issues
    // }
    //
    // // caso não esteja logado
    // if (!$session) exit('Usuário não logado ou token expirado.');

    /* PEGA OS DADOS DO USUÁRIO */
    try {
    	$response = (new FacebookRequest($session, 'GET', '/me'))->execute();
    	$object = $response->getGraphObject();

    	$fbid = $object->getProperty('id');
    	$fbname = $object->getProperty('name');
    	$fbgender = $object->getProperty('gender');

    } catch (FacebookRequestException $ex) {
      // echo $ex->getMessage();
    } catch (\Exception $ex) {
      // echo $ex->getMessage();
    }


    /* PEGA OS ALBUNS */
    $response = (new FacebookRequest($session, 'GET', '/me/albums'))->execute();
    $graphObject = $response->getGraphObject()->asArray();
    $albuns = array();
    foreach($graphObject['data'] as $v) $albuns[] = $v->id;

    /* PEGA AS FOTOS */
    // $x = 0;
    foreach($albuns as $v){
    	$response = (new FacebookRequest($session, 'GET', "/$v/photos"))->execute()->getGraphObject()->asArray();

    	foreach($response['data'] as $fotos){
    		echo '<img src="'.$fotos->picture . '" data-source="'.$fotos->source.'"><br>';
    		// if (++$x === 50) break;
    	}
    }
     ?>

    <div
      class="fb-like"
      data-share="true"
      data-width="450"
      data-show-faces="true">
    </div>

  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '388454917944778',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

   FB.login(function(){
  // Note: The call will only work if you accept the permission request
  FB.api('/me/feed', 'post', {message: 'Hello, world!'});
}, {scope: 'publish_actions'});


</script>
  </body>
</html>
