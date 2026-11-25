<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulärsvar - Mr X Digital Portfolio</title>
    <meta name="description" content="Bekräftelsesida som visar uppgifterna från Mr X:s kontaktformulär.">
    <link rel="stylesheet" href="portfolio/style.css">
    <script src="portfolio/js/script.js" defer></script>
</head>
<body class="page">
     <header class="site-header">
        <nav class="main-nav" aria-label="Huvudmeny">
            <ul class="main-nav__list">
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/index.html">Hem</a></li>
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/kompetenser.html">Kompetenser</a></li>  
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/projekt.html">Projekt</a></li> 
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/utbildning.html">Utbildning</a></li> 
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/kontakt.html">Kontakt</a></li>
                <li class="main-nav__item"><a class="main-nav__link" href="portfolio/referenser.html">Referenser</a></li>  
            </ul>
        </nav>
     </header>
<main class="site-main">
    <section class="contact">
        <h1 class="contact__title">Svar från kontaktformuläret</h1>
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

<p class="contact__text">
    Här är uppgifterna från formuläret.
    Inget mejl har skickats.
</p>

<?php
$fields = [
    'name' => 'Namn',
    'email' => 'E-post',
    'subject' => 'Ämne',
    'sender' => 'Avsändare',
    'message' => 'Meddelande'
];

foreach ($fields as $key => $label) {
    $value = $_POST[$key] ?? '';

    if (!is_string($value)) {
        $value = '';
    }

    echo '<p class="contact__text">';
    echo $label . ': ';
    echo htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    echo '</p>';
}
?>

<?php else: ?>

<p class="contact__text">
    Fyll i kontaktformuläret först.
</p>

<?php endif; ?>

<p class="contact__text">
<a class="contact__link" href="portfolio/kontakt.html">
    Tillbaka till kontaktformuläret
</a>
</p>
        
</section>
</main>

<footer class="site-footer">
    <p class="site-footer__text">&copy; 2026 Mr. X</p>
</footer>
</body>
</html>

    
