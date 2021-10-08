<?
$fbp = empty($_COOKIE["FBpixel"]) ? $_GET['fbpixel'] : $_COOKIE["FBpixel"];
$ga1 = empty($_COOKIE["GA1"]) ? $_GET['ga1'] : $_COOKIE["GA1"];
$ga2 = empty($_COOKIE["GA2"]) ? $_GET['ga2'] : $_COOKIE["GA2"];
?>
<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="referrer" content="no-referrer" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Thank You</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="shortcut icon" href="thanks.ico" type="image/x-icon">
    <link href="css/thanks.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$ga1?>"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', '<?=$ga1?>');
    </script>

     
    

  </head>
  <body>
    <header>
      <h1>Your order is accepted!</h1>
    </header>
    <main class="main">
      <section>
        <div>
          <p>
            Our <span>operator will contact you</span> to confirm the order within <span>5-10 minutes</span>.
            <br>
            <br>Delivery is carried out by <span>courier or post</span>. Payment - <span>upon receipt</span>!
          </p>
        </div>
      </section>
    </main>
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '<?=$fbp?>');
			fbq('track', 'PageView');
			fbq('track', 'Lead');
		</script>

    

    <!-- Event snippet for Контакт conversion page -->
    <script>
      
      gtag('event', 'conversion', {'send_to': '<?=$ga1?>/<?=$ga2?>'});
      
      gtag('get', '<?=$ga1?>', "client_id", function(res){
          
          fetch("https://customanalytics.herokuapp.com/api?code=<?=$ga1?>&clientId="+res, {
              method: "GET",
              
              headers:{
                  "Content-Type": "application/json",
                  "Access-Control-Allow-Origin": "*",
                  "Access-Control-Allow-Methods": "POST",
              }
          })
      })
       
    </script>


		<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=<?=$fbp?>&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
		
		
  </body>
</html>