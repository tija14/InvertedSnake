Inverted snake är ett lätt spel att integrera på sin sida. Med lite ändring i koden kan man 
gå in och göra små ändringar och modifiera spelet till sin sida. Du kan välja att ladda ned alla 
filer eller intigrera det på en redan existerande sida.



Om du vill implementera spelet på din hemsida följ då dessa steg:

1

Först och främst behöver du jquery-filerna, de finns att hämta här:

JQuery-filerna
Inkludera dessa sedan genom följande kod: 
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>

2

Sen kan du använda din egna stylesheet eller använda min här:

Style, bilder och ljud
Bilderna och ljuden från spelet är inluderade också. Glöm inte att inkludera stylesheet genom följande kod i headern:
<link rel="stylesheet" type="text/css" href="style/style.css">
Om du vill ändra farten som ormen har kan du göra det i main.js på linje 205 , desto lägre siffra desto snabbare rör sig ormen.

För att ändra backgrundsmusik eller ljudet när man äter en frukt så kan man lägga in önskat ljud genom att ändra i koden i audio-taggarna i index.php och ändra namnen till de ljudfiler som önskas istället.