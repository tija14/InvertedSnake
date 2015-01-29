<?php include("header.php"); ?>
<div id="redovisning">
	<a href="index.php"><< Tillbaka</a><br/>
<i><b>Redovisning projektet</b></i><br/><br/>



<p>Jag valde att göra ett snakespel. Inspirationen kom från när jag gjorde
astroidspelet och ville fortsätta med att göra spel i HTML5 canvas. Landade
på att göra ett snakespel då svårighetsgraden kändes lagom.</p>
<p>En liten twist på orginalsnake är att kontrollerna är omvända vilket gör
det lite svårare att spela men samtidigt kan man bara få game-over om ormens
huvud rör vid en svart del av ormens kropp. 
Det finns länkar till spelets regler och en sida som visar hur man gör
om man vill implementera spelet på sin egna hemsida.</p>

<b>Krav k1: </b>
<p>Dokumentering kring hur man implementerar spelet på en hemsida är baserad på
att det redan finns en sida med ett index.php osv. och att användaren har en viss erfarenhet
av att skriva kod. Det finns länkar till Github där det även finns en readme-fil med information.
Om man vill kan man klona hela spelet eller ladda ned det eller så kan man följde de 2 stegen
för att integrera spelet i en sida.</p>
<p>I instruktionerna kan man ladda ned alla jqueryfilerna och stylefilerna (här inkluderas
även ljud). Sedan finns det instruktioner vad för kod som behövs för att koppla dessa till ens sida.
Det finns även instruktioner hur man kan göra om man vill modifiera spelet lite, 
byta ut musiken eller ändra hastigheten på ormen. </p>


<b>Krav k2: </b>
<p>Jag kikade runt lite på andra snakespel och det finns ju en hel del och nästan
alla har olik kod för hur spelet fungerar. Allt från gridssystem till att spara ormens delar i en array.
Men oavsett så är konceptet detsamma. Jag valde
att skapa en ny div för varje ormdel och det är väl inte den bästa koden men för
orginalitetens skull så valde jag att ha min lösning istället för att kopiera. Men en 
del av spelet har förstås inlånats från andra snakespel och jag har studerat deras källkod.
Sen så försökte jag ta de bästa delarna men försökte ändra skriva en så effektiv kod som möjligt
som skulle kunna finnas i en main.js fil och inte bli för stor.

När jag kollade runt så upptäckte jag att det inte finns något snake med omvända kontroller. Det skulle kunna vara en rolig grej
att lura sina kompisar eller träna på omvända kontroller. En liten twist helt enkelt.
</p>

<b>Krav k3: </b>
<p>Spelet är inte särskilt avancerat och kvaliteten på koden är ju inte
så där jättebra om man jämför med andra snakespel men samtidigt så får man gå
från de kunskaper man har. Jag valde snake för att det kändes som lagom svårt
men det var fortfarande kämpigt därför valde jag gå ifrån principerna som vi använde i 
snakespelet och istället för drawfunktioner och att rita genom t.ex. fillRect osv.
så valde jag att skapa divar istället för rita upp ormen. Ett enklare sätt helt enkelt
men kodmässigt så är det väl sisådär. Den har helt klart sina brister. Det blir inte den bästa
koden när man 10 ifstatements som kollar om ormens svans ska vara svart eller grön och sen
samma ifstatements när man kollar kollisioner. Annars har jag försökt skriva så effektiv
och kort kod som möjligt. T.ex. hade jag en renderfunktion som spelet kallar på när ormen
rör sig för att definera dess "left" och "top"-positioner. Så att istället för att ha två funktioner
så kunde jag sätta ihop dem till en funktion. Så att gå igenom koden en gång till efter att
ha skrivit klart och tänka på vad som är bättre leder ofta till att man kan effektivisera eller
göra koden snyggare.
</p>
<p>Det är testat i både Chrome, Firefox och Explorer. I Explorer så var det lite problem
när man rör ormen så rör sig hela skärmen också. Kom ihåg att det fanns en fix för det i 
astroidspelet så jag kopierade in den koden också. Kan vara bra att ha också i Chrome/firefox
ifall sidan blir större och man har text längre ned på sidan så att den inte scrollar
genom knapptryckningar.</p> <br/>

<b>Krav k4: </b>
<p>Lade till bakgrundsmusik och ljud när ormen äter en frukt. Jag använde mig av HTML5-feuturen
audiotaggar och länkade till ljudfilerna för att sedan "hämta" dem i main.js genom följande kod:
<code>var audio = $("audio")[0];</code> Sedan kan man pause och spela upp musiken igenom genom att trycka
på högtalarna. Hade problem med att få klickfunktionen att fungera så att den ska 
switcha mellan 'mute' och 'play'. Hade lite olika lösningar men utan resultat men hittade till slut en lösning
genom att ändra på bildernas källa genom attr. På så sätt: <code>$(this).attr('src', 'style/speaker.png');</code>
Audiotaggarna och musik var inget jag hade hållit på med tidigare så allt var nytt för mig men
inga svårigheter förutom att jag först ville ha båda ljudfilerna i en audiotag men fick dela upp det i två.</p>
<br/>

<b>Tankar om kursen</b>
<p>Kursen har som de tidigare kurserna varit bra. Det var den här kursen jag inte hade nån
erfarenhet alls av något av språken så det var intressant och lärorikt men samtidigt ganska svårt.
Men som vanligt bra instruktioner och det var sällan man inte förstod något så allt gick hyfsat bra ändå.
Även om man är långt ifrån någon javascriptexpert så har det gett en bra grund att stå på.
9/10</p>
<i><b>Redovisning kmom06</b></i><br/><br/>

<b>Vilka möjligheter ser du med HTML5 Websockets?</b>
<p>Svårt att säga, till en början visste jag inte ens vad websockets var för något så det vart att
läsa på en massa om vad det är först och främst. Främst ville man veta till vilken användning websockets
kan komma till för användning och det fick man ju svar på ganska snart i instruktionerna. </p>

<b>Vad tycker du om Node.js och hur känns det att programmera i det?</b>
<p>Har ju ingen erfarenhet av något annat så det är också svårt att säga men det var lätt att
hänga med i instruktionerna. Eftersom det är javascript som används så känns det ju inte främmande. Körde
igenom alla uppgifterna och det kändes logiskt med request, response, hur man kopplar upp sig osv.</p>

<b>Beskriv hur du löste echo-servern och broadcast-servern.</b>
<p>Jag följde Mikaels exempel och det var mest att studera koden och få en uppfattning om hur det fungerar. 
Har en hyfsat bra koll nu på echo- och broadcast-server och hur de skiljer sig åt och hur de fungerar. Om
jag förstår det rätt är en echoserver mest för att kolla om det finns en koppling mellan en klient och en 
server.</p>

<b>Beskriv och berätta om din chatt. Förklara hur du byggde din chatt-server och förklara protokollet.</b>
<p>Det vart inte så stor skillnad från broadcast-servern. Det jag lade till var att man kunna fylla i ett
användarnamn som visas när man kopplar upp sig och skriver ett meddelande. Det var jobb nog att förstå
koden och iöverhuvudtaget få in något vett i skallen. 
Det ska ju gå att koppla upp flera klienter samtidigt och de kan skriva meddelande
till varandra som visas på en server. Jag testade genom att skriva meddelande i chrome och sedan i 
firefox och meddelandet som skrevs i firefox dyker upp i chrome. Till en början fick jag ett fel att
det stod att namnet man fyller i på chrome visades för alla meddelande. Hade ju bara en simpel kod
som var <code>var name = $('#name').val();</code> Fixade det genom att ändra det till websocket.send
och klienten skickar användarnamnet till servern.

Jag hoppas kunna lära mig mera om websockets och node.js, det verkar spännande och det här var en bra början även om jag är ganska förvirrad
just nu. </p>

<i><b>Redovisning kmom05</b></i><br/><br/>

<b>Vilka möjligheter ser du med HTML5 Canvas?</b>
<p>Jodå, det känns som ett bra sätt att programmera spel. Jag har visserligen inte programmerat några spel
i javascript tidigare så det är svårt att säga men det känns ändå bra. Mycket ny syntax att ta in
men ändå inte oöverkomligt. Till en början var det väldigt roligt också att programmera ett spel (innan
alla problem i alla fall). </p>

<b>Hur avancerat gjorde du din spelfysik (om du överhuvudtaget har någon i ditt spel)?</b>
<p>Jag har ju den spelfysik som jag fick från exempelkoden. Jag hängde med ganska väl i den
första versionen av exempelkoden (när det inte var någon vind osv). Men sen när vind och den mer avancerade
koden för acceleration lades till så kändes det lite överkurs minst sagt. Men jag valde att ha
med det ändå (det ser ju häftigt ut och acceleration i den första versionen kändes väldigt hackig). </p>

<b>Beskriv och berätta om ditt spel. Förklara hur du använder objekt och prototyper.</b>
<p>Jag valde att fortsätta på Astroids-spelet. Jag har lagt till en astroid och att så att man kan skjuta.
Men det gick inte så bra som jag hade trott. Först så ville jag lägga både skotten och astroiden i 
player.prototype.draw så att allting ritas ut när player ritas ut. Men det gick inte så bra för 
då fick jag ingen acceleration på astroiden. Så jag valde att skapa en astroid-funktion och skriva ut 
den separat. </p>
<p>När det kom till skotten så gick det bättre. Jag skapade en array(bullets) och en for-loop för att
skriva ut varje bullet och ge den spelarens x och y kordinationer och spelarens riktning. 
Sen kom det svåra, när jag ville att det skulle hända något när spelaren skjuter en astroid eller kolliderar
med den så vart det problem. Eftersom astroid ritas ut separat så är det svårt att gemföra kordinaterna
för skott och astroid i t.ex. update-funktionen. Sen när jag försökte skapa en ifsats för att kolla
om det är en kollision mellan spelaren och en astroid så vart det problem genom att x och y defineras olika
för astroiden och spelaren. Astroidens x och y defineras genom <code>this.position.x += this.velocity.x * this.acceleration * Math.cos(this.direction);</code>
och spelarens genom  <code>this.position.x += this.speed.x * Math.cos(this.direction) * td;</code>. Kollade genom
att debuga och kolla console.log på deras kordinater att något inte stämde och tyvärr så fungerar inte kollosioner.
Om spelarens koordinater är definerat av en interval och astroidens inte är möjligt om jag förstår koden rätt.
Känns så där att det inte fungerade men tiden börjar ta slut så jag valde att gå vidare.
Det här koden för att känna igen en kollision iaf: 
<code>if( astrX <  Math.floor(player.position.x + player.width)  && astrX + astrX.width >  Math.floor(player.position.x + player.width) 
	&& astrY < Math.floor(player.position.y + player.height) && astrY + astrY.height > Math.floor(player.position.y + player.width))</code>
</p>



<i><b>Redovisning kmom04</b></i><br/><br/>
<b>Vad tycker du om Ajax, hur känns det att jobba med?</b>
<p>Det känns helt ok. Lite svårare att dyka in i än jQuery t.ex. men det känns inte överdrivet svårt
efter att ha gjort exempeluppgifterna. Det var en positiv överaskning hur starkt Ajax är och hur stora
möjligheter man har med det.</p>

<b>Vilka är dina erfarenheter av Ajax inför detta kursmoment?</b>
<p>Har ingen erfarenhet i överhuvudtaget. Har bara hört om AJAX tidigare men aldrig jobbat med det.</p>

<b>Berätta om din webbshop på din me-sida, hur gjorde du?</b>
<p>Jag följde exempeluppgiften. Det ända jag gjorde själv var väl att koppla sidan där man lägger till
varor och checkouten. Till en början så tog jag koden från clearfunktionen ("url: no_ajax.php") men 
det vart inte riktigt som jag tänkt mig. Så jag googlade lite och hittade koden <i>window.location.href</i>
som jag använde istället. Sen lade jag till kod så att köpknappen bara syns om man trycker på "buy it"-knappen.</p>


<p>När man trycker på "purchase" så triggas en funktion i main.js som i sin tur länkar till
actionet "add" i shop.php. I shop.php så hämtas informationen om boken genom POST(i main.js är
ajaxs type satt till post) och en session börjar som sparar all data om böckerna (antal, summan och 
titeln). Är det fler än en bok så adderas summan samman och antalet plussas på. 
När man trycker på "checkout" så kommer man till no_ajax.php som använder sig av Cform för att 
skriva ut ett formulär och även validera den. 


</p>
<i><b>Redovisning kmom03</b></i><br/><br/>
<b>Vad tycker du om jQuery, hur känns det?</b>
<p>Jorå det kändes bra. Tyckte det togs upp väldigt mycket bra och nyttigt att ha
funktioner i de 9 paketen. jQuery känns som det har en ganska lätt syntax och att
man kan göra mycket avancerat med hyfsat simpel kod.</p>

<b>Vilka är dina erfarenheter av jQuery inför detta kursmoment?</b>
<p>Bara varit inne och touchat lite på det tidigare. Kollat på några youtube-tutorials men inte
så mycket mera. </p>

<b>Berätta om din plugin.</b>
<p>Ja, jag valde att göra en lightbox eftersom det känns som den mest vanliga och användbara
av de nio "paketen" vi gick igenom. När man klickar på bilden så skapas två nya divar, lighbox och overlay.
Overlay är själva backgrunden med runt bilden och lighbox-diven är själva bilden. Dess höjd och bredd
är hälften av skärmens höjd och bredd.När man klickar på bilden ytterligare en gång så återgår bilden till sin
ursprungliga form.</p>

<p>Lade till en gif med en loading-animation. Den syns visserligen bara ett kort ögonblick om
bilden laddas som den ska.</p>


<i><b>Redovisning kmom02</b></i><br/><br/>
<p>Jag tycker det är kul med javascript. Roligt att man kan få se resultat snabbt.
Försökte göra mycket själv men har kollat i källkoden ganska mycket. Det är mycket syntax man inte 
har lärt sig än bl.a.
Det har generellt gått bra men det var lite grejer jag fastnade på och en del grejer man fick kolla upp.
I uppgiften med bollen som rör sig genom att man klickar på den så var bl.a. event.pageX osv ett frågetecken
men annars ganska glasklart.
</p>

<b>Vilka funktioner har du lagt till i din variant av mos.js?
</b><br/>
<p>Jag la till randomfunktionen och outfunktionen. Dessa finns i tim.js. Tycker dessa funktioner har
varit de mest återkommande och som man kommer behöva använda sig av i framtiden.</p>

<b>Gjorde du något extra arbete på spelplanen med Boulder Dash, eller gjorde du kanske en egen spelvariant?</b><br/>
<p>Nej, jag koncenterade mig på att få det att fungera och förstå koden. Tog bort koden
för &.up, &.down osv i style.less då jag inte såg att den koden gjorde något i spelet. Det 
tog lite tid att förstå hur rörelserna gick till men efter att ha använt Firebug och Chrome
devTools och debuggat koden så hängde jag med i hur det fungerade. Skönt att ha en debugger!

</p>

<b>Gjorde du något extra på Roulettespelet?</b><br/>
<p>Jag gjorde lite på mitt eget vis främst för att kunna lära mig bättre genom att göra större delar själv. 
Kan inte säga att jag tycker koden vart bättre men det vart nog inte sämre i alla fall.
Istället för att ha en array med alla färger och sedan koppla dessa till en siffra i ytterligare en array
så kollade jag istället med hjälp av modulo om värdet i en forloop är jämt eller ojämt och baserat på det
vilken bakgrundsfärg diven skulle få. Tycker det passade bra här då varannat nummer skulle ha en
olik förg till skillnad från när man skulle rita ut bakgrunden i boulderspelet. <br/>
Lärde mig mera om div-klasser och id då jag ville ändra id på det vinnande numret och sedan köra en css3-animation.
Testade först med att lägga till ytterligare ett id-namn men det fungerade inte. Visade sig att det bara
går med flera klassnamn och inte idnamn för divar. </p>

<p>Annars så gick det bra och var mycket lärorikt.</p>


<i><b>Redovisning kmom01</b></i><br/>
<br/>
<b>Vilken utvecklingsmiljö använder du?</b><br/>
<p>Som i tidigare kurser så använder jag WAMP, notepad++, fileZilla och testar i Chrome/Firefox.</p> 
<b>Hur väl känner du till JavaScript?</b><br/>
<p>Har hållit på lite med JavaScript tidigare på amatörnivå. Tittat på youtube-tutorials och testat
lite olika funktioner så jag är bekant med syntaxen men är fortfarande en nybörjare. I den här
första uppgiften kunde jag ändra i divens bredd och höjd men de andra uppgifterna fick jag titta i källkoden
för att klara. </p>
<b>Vilken uppfattning har du av JavaScript så här långt?</b>
<p>Det känns bra hittills. Det lilla jag lärt mig tidigare verkar fortfarande finnas i minnet. Det ska bli
kul att lära sig mera. När man har hållit på med tidigare kurser så har det funnits tillfällen då man har känt
att det vore bra med någon javascriptkod för att förenkla eller helt enkelt för att det är något man inte kan
göra i php. </p>
<b>Berätta vilka exempelprogram du gjorde och länka till dem.</b>
<p>Jag gjorde samma som Mikaels exempel dvs. hello world, ändra storleken på en div, baddien
och css-animationerna. Det gick lätt att göra den första uppgiften med att ändra storleken
på diven och skrev lite annorlunda kod. Tyckte det var en omväg att använde size-diven när man kunde ändra direkt
i flash diven istället. Sen så använde jag mig av getElementById istället och hämtade values på så sätt.
Tyckte det var lite lättare kod.
Sedan vart det lite svårare med animationerna och baddie så fick kolla i källkoden. Det känns bra
att något som är så "avancerat" ändå har en lättförståelig kod. Det som var lite svårförståeligt var i 
animationerna med <code>this.swap++ % 2</code>. Förstod ganska snart att det var för att återställa baddien
ifall den redan har gjort en animation. </p>
<b>Beskriv hur du gjort din baddie och vilka konster den kan.</b>
<p>I baddie-uppgiften så valde jag att ha samma baddie som i Mikaels exempel. Sen i animationerna så hittade
jag min egen baddie och ändrade dess dimensioner i paint så att det passade in på den koden jag redan hade.
Jag gjorde samma animationer som fanns i instruktionerna då jag inte har mycket erfarnhet av CSS3.
Gjorde en extra animation där baddien gjorde en saltomortal(typ). Det gick ju att klura ut med den koden
man redan hade. Så blev koden: <code>{.transform(e('translate(100px, -100px) rotate(360deg) translate(0px, 100px)'));}</code>
Körde rotate i mellan två translatefunktioner för att få det att se upp som baddie gör rotation i mitten av hoppet.


</div>

<?php $path=__DIR__;include("footer.php"); ?>