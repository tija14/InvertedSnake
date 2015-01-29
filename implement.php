<?php include('header.php'); ?>
<div id="implement">
<a href="index.php"><< Tillbaka</a><br/>
<br/>
<h1>Introduktion</h1>
<p><i>Inverted snake</i> är ett lätt spel att integrera på sin sida. Med lite
ändring i koden kan man <br/>gå in och göra små ändringar och modifiera
spelet till sin sida. Du kan välja att ladda ned alla <br/>filer eller intigrera det på
en redan existerande sida.</p>

 
Du kan klona eller ladda ned spelet från Github: <a href="https://github.com/tija14/InvertedSnake">https://github.com/tija14/InvertedSnake</a> <br/><br/>
eller ladda ned hela spelet här: <a href="projekt.zip" download>Snake</a><br/><br/>

<b>Om du vill implementera spelet på din hemsida följ då dessa steg:</b>
<h2>1</h2><p> Först och främst behöver du jquery-filerna, de finns att hämta här:
</p>
<a href="js.zip" download>JQuery-filerna</a><br />Inkludera dessa sedan genom
följande kod: <code><br/>&lt;script src="js/jquery.js">&lt;/script><br/>
&lt;script src="js/main.js">&lt;/script></code><br/>
<h2>2</h2>
<p>Sen kan du använda din egna stylesheet eller använda min här:</p>
<a href="style.zip" download>Style, bilder och ljud</a><br/> Bilderna och ljuden
från spelet är inluderade också. Glöm inte att inkludera stylesheet genom följande kod
i headern:<br/>
<code>&ltlink rel="stylesheet" type="text/css" href="style/style.css"></code>

</p>
<p>Om du vill ändra farten som ormen har kan du göra det i main.js på linje 215, desto lägre siffra desto snabbare rör sig ormen.</p>
<p>För att ändra backgrundsmusik eller ljudet när man äter en frukt så kan man
lägga in önskat ljud genom att ändra i koden i audio-taggarna i index.php och ändra namnen
till de ljudfiler som önskas istället:</p>

<code>&lt;audio>
        &lt;source src="style/moonlit.mp3" type="audio/mp3">&lt;/source>
        
&lt;/audio></code>
</div>
<?php $path=__DIR__; include('footer.php'); ?>