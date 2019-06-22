<?php
    $sectioArr = array(
        "home" => "",
        "chi-siamo" => "Chi siamo |",
        "corsi" => "Corsi |",
        "eventi" => "Eventi |",
        "foto" => "Foto |",
        "contatti" => "Dove siamo - Contatti |"
    );
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $sectioArr[$_GET['page']]; ?>Centro Cinofilo Smiling Dog - Bologna</title>

<!-- meta og -->
<meta name="keyowords" content="educazione cinofila bologna, educatore cinofilo bologna, educazione cani bologna, educatrice cinofila, cristina collina, marina flammini, obedience bologna, agility bologna, rally obedience bologna, puppy class bologna, cae-1 enci bologna, enci bologna, problemi comportamentali bologna, preparazione cani disabili bologna, centro cinofilo bologna, cani bologna, educazione cinofila, educatore cinofilo, educazione cani, educatrice cinofila, obedience, agility, rally obedience, puppy class, cae-1 enci bologna, enci, problemi comportamentali, preparazione cani disabili, centro cinofilo, cane, cani">
<meta name="description" content="Il Centro Cinofilo Smiling Dog Bologna promuove lo sviluppo di una corretta relazione tra uomo e cane basata sul rispetto e sulla collaborazione.">
<meta name="viewport" content="width=device-width, initial-scale=1, initial-scale=1, user-scalable=no">
<link rel="canonical" href="http://www.smilingdogbologna.it/">
<link rel="image_src" type="image/jpeg" href="http://www.smilingdogbologna.it/img/logo_smilingdog-bologna.jpg">
<!-- end meta -->

<!-- meta og -->
<meta property="og:image" content="http://www.smilingdogbologna.it/img/logo_smilingdog-bologna.jpg">
<meta property="og:description" content="Il Centro Cinofilo Smiling Dog Bologna promuove lo sviluppo di una corretta relazione tra uomo e cane basata sul rispetto e sulla collaborazione.">
<meta property="og:type" content="article">
<meta property="og:title" content="Smiling Dog Bologna">
<meta property="og:url" content="http://www.smilingdogbologna.it/">
<!-- end meta og -->

<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400|Quicksand:400,700">

<?php
    if ($_GET['dynamic'] == true) {
        echo '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>';
        echo '<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>';
    }
?>

<!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
<![endif]-->



<?php  if($_GET['page'] == "home") : ?>
<script type="application/ld+json">
  { 
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Centro Cinofilo Smiling Dog - Bologna",
    "url": "http://www.smilingdogbologna.it/",
    "logo": "https://www.smilingdogbologna.it/img/smiling-dog_isologo.png",
    "foundingDate": "2016",
    "founders": [
      {
        "@type": "Person",
        "name": "Cristina Collina"
      },
      {
        "@type": "Person",
        "name": "Marina Flammini"
      } 
    ],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Via San Donato 3/2 - 40055 Castenaso (BO)",
      "addressLocality": "Bologna",
      "addressRegion": "Bologna",
      "addressCountry": "IT"
    },
    "contactPoint": [
        { 
          "@type": "ContactPoint",
          "telephone": "+393472108031",
          "contactType": "customer service",  
          "email": "smilingdogbologna@gmail.com"
        }
    ],
    "sameAs": [ 
      "https://www.facebook.com/smilingdogbologna"
    ]
  }
  </script>
<?php endif; ?>

<?php  if($_GET['page'] == "contatti") : ?>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "url": "http://www.smilingdogbologna.it/",
      "name": "Smiling Dog - Bologna",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+393472108031",
        "contactType": "customer service",  
        "email": "smilingdogbologna@gmail.com"    
      }
    }
  </script>
<?php endif; ?>