
<?php
    require "src/app/router.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <meta name="google-site-verification" content="VE95V-I6uGio8trZj_By6WpoEdaiZSjWtAzQIf9b1_c" />

    <title>Robin Everaert - Développeur Web Freelance - Alpes de haute Provence 04</title> 
    
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="Développeur web dans les Alpes de haute Provence 04. Création de site internet : site vitrine, e-commerce, développement spécifique, wordpress">
	<meta name="og:description" content="Développeur web dans les Alpes de haute Provence 04. Création de site internet : site vitrine, e-commerce, développement spécifique, wordpress">
	<meta name="robots" content="follow, index, noarchive, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
	<link rel="canonical" href="https://robin-everaert.fr/"/>
	<meta name="author" content="Robin Everaert">
	<meta property="og:locale" content="fr_FR">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://robin-everaert.fr/">
	<meta property="og:site_name" content="Robin Everaert">
	<meta property="og:title" content="Robin Everaert - Développeur Web Freelance - Alpes de haute Provence 04">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" type="image/png" href="public/assets/img/logo.png"/>

    <title><?= $title; ?></title>

    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@graph":[{
        "@type":"Place","@id":"https://robin-everaert.fr/#place",
        "address":
            {
            "@type":"PostalAddress",
            "addressLocality":"Greoux les Bains",
            "addressRegion":"PACA",
            "postalCode":"0800",
            "addressCountry":"France"}},

        {"@type":["LocalBusiness","Organization"],
        "@id":"https://robin-everaert.fr/#organization",
        "name":"Robin Everaert","url":"https://robin-everaert.fr",
        "email":"https://robin-everaert.fr",
        "address":{
        "@type":"PostalAddress",
        "addressLocality":"Greoux les Bains",
        "addressRegion":"PACA",
        "postalCode":"04800",
        "addressCountry":"France"},

        "logo":{
        "@type":"ImageObject",
        "@id":"https://robin-everaert.fr/#logo",
        "url":"https://robin-everaert.fr/img/logo.png",
        "caption":"Robin Everaert","inLanguage":"fr-FR","width":"592","height":"387"},
        
        "openingHours":["Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday 08:00 - 21:00"],
        "location":{"@id":"https://robin-everaert.fr/#place"},
        "image":{"@id":"https://robin-everaert.fr/#logo"},"telephone":"+330614297881"},

        {"@type":"WebSite","@id":"https://robin-everaert.fr/#website",
        "url":"https://robin-everaert.fr",
        "name":"Robin Everaert",
        "publisher":{
        "@id":"https://robin-everaert.fr/#organization"},
        "inLanguage":"fr-FR",

        "potentialAction":{
        "@type":"SearchAction",
        "target":"https://robin-everaert.fr/?s={search_term_string}","query-input":"required name=search_term_string"}},

        {"@type":"Person",
        "name":"Robin Everaert",
        "@id":"https://robin-everaert.fr/author/robin-everaert/"
        },

        {"@type":"WebPage",
        "@id":"https://robin-everaert.fr/#webpage",
        "url":"https://robin-everaert.fr/",
        "name":"Robin Everaert - Développeur Web Freelance - 04 Alpes de Haute Provence",
        "datePublished":"2021-05-20T22:27:19+01:00","dateModified":"2021-06-01T21:09:39+01:00",
        "author":{"@id":"https://robin-everaert.fr/author/robin-everaert/"},
        "isPartOf":{"@id":"https://robin-everaert.fr/#website"},
        "inLanguage":"fr-FR"}]}
    </script>
</head>
<body>
    <div id="wrapper">

        <?php require "src/views/includes/header.php"; ?>

        <main>
            <?= $content; ?>
        </main>

        <?php require "src/views/includes/footer.php"; ?>

    </div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="public/assets/js/app.js"></script>

</body>
</html>