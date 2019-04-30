<meta charset='utf-8'/>
<meta content='IE=edge' http-equiv='X-UA-Compatible'/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

<meta name="description" content="<?= $settings['desc'] ?>"/>
<meta name="author" content="<?= $settings['recode'] ?>"/>
<link rel="base" href="<?= $baseurl ?>"/>
<link rel="canonical" href="<?= $baseurl ?>"/>
<link href='<?= $baseurl ?>assets/img/favicon.png' rel='icon' type='image/x-icon'/>
<!-- <meta rel="sitemap" type="application/xml" content="http://meusite.com.br/sitemap.xml"/> -->
<meta name="robots" content="index/follow"/>
<meta name="googlebot" content="index/follow"/>
<meta name="theme-color" content="#FF4455"/>
<meta name="msapplication-navbutton-color" content="#FF4455"/>
<meta name="apple-mobile-web-app-status-bar-style" content="#FF4455"/>
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?= $title ?>"/>
<meta itemprop="description" content="<?= $settings['desc'] ?>"/>
<meta itemprop="image" content="<?= $baseurl ?>assets/img/images.png"/>
<!-- markup for facebook -->
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?= $title ?>"/>
<meta property="og:url" content="<?= $baseurl ?>"/>
<meta property="og:site_name" content="<?= $settings['title'] ?>"/>
<meta property="og:image" content="<?= $baseurl ?>assets/img/images.png"/>
<meta property="og:description" content="<?= $settings['desc'] ?>"/>
<meta property="og:locale" content="en_US"/>
<!-- <meta property="fb:app_id" content="5349"/>
<meta property="fb:admins" content="123456789"/> -->
<!-- markup for twitter -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="<?= $title ?>"/>
<meta name="twitter:description" content="<?= $settings['desc'] ?>"/>
<meta name="twitter:creator" content="<?= $settings['author'] ?>"/>
<meta name="twitter:image" content="<?= $baseurl ?>assets/img/images.png"/>

<!-- JSON-LD - structured data markup Google Search -->
<script type="application/ld+json">{
"@context": "http://schema.org",
"@type": "WebSite",
"name": "<?= $settings['title'] ?>",
"alternateName": "<?= $settings['title'] ?>",
"url": "<?= $baseurl ?>"}
</script>