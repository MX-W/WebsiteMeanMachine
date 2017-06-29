<?php
// Variable zum Projektverzeichnis, welches unter 'htdocs' liegt (Hinweis: falls das Projekt im ROOT-Verzeichnis liegt, einen Leerstring eintragen.)
$projectDir = "/DM1/WebsiteMeanMachine/";

// Pfadvariable, die zur Steuerung der Inhalt verwendet wird
// Der Standardwert ist der Pfad zum Inhalt der Startseite
$pagePath = "includes/pages/start/start.php";

$cssPath = "includes/pages/start/css/start.css";

// Der Name der aktuellen Seite wird in der $page-Variable gespeichert, 
// welche für die Anzeige des aktiven Navigationselementes benötigt wird.
$page = "start";

if (!empty($_GET['page'])) {

    // Standardpfad zum Ordner der übergebenen Unterseite
    $subPageBasepath = "includes/pages/" . $_GET['page'] . "/";

    // Pfad zum Inhalt der in der URL übergebenen Unterseite (der PHP-Datei in dem jeweiligen Unterordner)
    $givenPath = $subPageBasepath . "/" . $_GET['page'] . ".php";

    // Pfad zur alternativen CSS-Datei zur separaten Gestaltung einer Unterseite
    $cssPath = $subPageBasepath . "css/" . $_GET['page'] . ".css";

    if (file_exists($givenPath)) {
        // Sehr einfache Sicherheitsprüfung:
        // Wenn die Datei existiert, wird die §path-Variable mit dem Pfad zur Unterseite überschrieben
        // ansonsten bleibt der Pfad zur Startseite
        $pagePath = $givenPath;

        // Der 'page'-Wert ebenfalls in der $page-Variable gespeichert, um diesen zur Markierung des aktiven Navigationselements zu nutzen
        $page = $_GET['page'];
    }

    if (!file_exists($cssPath)) {
        $cssPath = "";
    }
}

?>
<!DOCTYPE html>
<html>
    <head> 
        <title>WE PLAY HARD'N'HEAVY</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="icon" type="image/png" sizes="32x32" href="img/logo.png">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/responsiveDesign.css">
        <link rel="stylesheet" href="css/screen.css">
        
        

        <?php if ($cssPath != "") : ?>
            <link rel="stylesheet" href="<?php echo $cssPath; ?>">
        <?php endif; ?>
            
        <script type="text/javascript" src="js/active.js"></script>
        <script type="text/javascript" src="js/showLogin.js"></script>

    </head>
    <body>
        <div class="background">
            <div class="col-3"></div>
            <div class="wrapper col-6 col-s-12">
                <div class="row">
                    <?php include("includes/header.php"); ?>
                    <script>setActive();</script>
                </div>
                <div class="row">
                    <main>
                        <?php include ($pagePath); ?>
                    </main>
                </div>
                <div class="row">
                    <?php include("includes/footer.php"); ?>
                </div>            
            </div>
            <div class="col-3"></div>
        </div>
    </body>
</html>