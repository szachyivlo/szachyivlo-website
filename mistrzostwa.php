<html>
	<head>
		<meta charset="UTF-8">
		<title>Mistrzostwa :: Koło szachowe — IV Liceum Ogólnokształcące im. Tadeusza Kościuszki w Toruniu</title>
		<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="news.css">
<?php include "manageicons.html"; ?>
		<script type="application/ld+json">
{
	  "@context": "http://schema.org",
	    "@type": "BreadcrumbList",
	      "itemListElement": [{
		          "@type": "ListItem",
			      "position": 1,
			          "item": {
					        "@id": "http://archiet.platinum.edu.pl/szachy/mistrzostwa.php",
						      "name": "Mistrzostwa"
							          }
			    }]
}
</script>
	</head>
	<body bgcolor="#FFEFDD">
		<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KP8WW2"
		    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		    })(window,document,'script','dataLayer','GTM-KP8WW2');</script>
		    <!-- End Google Tag Manager -->
<div class="ogol">
<?php 
include_once 'markdown.php';
include "menu.html"; 
$ourtext = file_get_contents('mistrzostwa.md');
$ourcontent = Markdown($ourtext);
echo $ourcontent;
?>
<script type="text/javascript">aktywuj("mistmen");</script>

		<br></div>
<?php include "footer.html";?>
	</body>
</html>
