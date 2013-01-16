
Webbit, a PHP-based, MVC-inspired CMF
====================================

Webbit är gjord efter Lydia Tutorial. För en fullständig version av Lydia
så klicka på nedan länk.
* https://github.com/mosbth/lydia

Den här guiden förutsätter att du är van vid installationer av ramverk mm. 



Installation
------------

* Klona Webbit från Github via `git clone git://github.com/Gitthis/Webbit.git` genom programmet Git Bash
* Editera filen .htaccess så att den pekar på din installationsadress. Vid RewriteBase byter du alltså ut webbadressen `/~dara11/phpmvc/kmom08/webbit/`
  till din egen installations adress/URL.
* Ladda upp ramverket till din webbserver.
* Se till att filen `webbit/site/data` är skrivbar genom `chmod 777 site/data`. I filezilla kan du högerklicka på
`webbit\site\data` och välja filrättigheter och sedan skriva in 777 i fältet för Numeriskt värde.
* Peka din webbläsare till adressen för din installation av webbit och surfa in på sidan.
* Webbit måste sedan initiera moduler. Du gör detta genom att klicka på `module/install` nästan i mitten på sidan.

* Nu är du klar med installationen. Nedan kan du läsa om några enkla saker som du kan ändra så som 
logo, färger, typsnitt mm mm. 



Byte av logo, färger Navigeringsmeny mm
---------------------------------------

### Byta ut Logo
Du kanske vill byta logo? Skapa då din egna logo i ett bildprogram och döp den till logo.png.
Förslagsvis ser du till att storleken är 80x80px redan nu. För om bilden är enormt stor så laddas 
nämligen hela dess stolek även fast Webbit sedan "krymper" ner bilden till 80x80 själv. Man slipper
onödig laddningstid alltså.

Placera din egna logo (logo.png) i katalogen `webbit/site/themes/mytheme` så att Webbits logo skrivs över. Klart!


### Byta färger mm
Kul att du vill ändra lite på utseendet. Du gör detta genom css kod i filen `webbit/site/themes/mytheme/style.css`
När du tittar i den filen så finns det redan några exempel på byten som du enkelt kan göra. Men vill du göra andra 
ändringar så behöver du veta vilka färger mm som hör ihop med vad i CSS:n. Öppna då `webbit/themes/grid/style.css` 
och kopiera de bitar du vill ändra till `webbit/site/themes/mytheme/style.css` Du gör sedan ändringarna för de inkopierade koderna
i `webbit/site/themes/mytheme/style.css` och laddar upp den filen på nytt.

Är du inte van att arbeta med CSS så kan du surfa in på http://www.w3schools.com/css/ och gå igenom deras tutorial.
Behöver du hjälp att välja färger och vill prova dig fram så rekommenderar jag http://www.workwithcolor.com/hsl-color-schemer-01.htm


### En ny sida/blogginlägg samt länk från Navigeringsmeny
Klicka på `Content` i menyn på hemsidan för din Webbit.
Scrolla sedan ner och klicka på länken `Create new content`
Här skriver du in titel på sidan/inlägget, ett unikt värde i fältet för `key`, själva innehållet på sidan (eller blogginlägget) i 
den stora rutan under `Content`. Under `Type` skriver du in `page` för sida eller `post` för ett nytt blogginlägg.

Under `filter` kan du välja hur din inksrivna text ska behandlas.
Om du vill veta mer om det så titta gärna på denna länk: http://searchsecurity.techtarget.com/definition/Web-filter

De filter som du kan skriva in är 
* `bbcode` ett antal taggar kan användas för att skriva texten. Använd hakparanteser istället för < >. Läs mer här: http://www.bbcode.org/
* `plain` är ren text. Inga HTML element tillåts. 
* `htmlpurify` Formattering och filtrering av HTML-kod på ett säkert sätt. Läs mer här: http://htmlpurifier.org/

Om du skapade en page, alltså en sida, så kan du se den genom att klicka på `Content` och leta upp den i listan och klicka på `view`
Men vill du ha en egen länk till den i navigeringsmenyn så gör du de ändringarna i filen `webbit/site/config.php`
Leta då reda på `$ly->config['menus']` Den finns på den nedre halvan av sidan. 
Under `'my-navbar'` som du ser några rader ner så har du koderna för länkarna som syns på navigeringsmenyn.

Vill du ta bort en länk från navigeringsmenyn men inte dess innehåll, så kan du enkelt bara bortkommentera raden här.
Lägg annars till en ny rad kod för din nyskapade sida. 

Titta gärna hur jag har gjort för min Testsida som du kan se här: `'test1' => array('label'=>'Testsida', 'url'=>'page/view/9'),`
`'test1'` är min egen beskrivning av länken.
`'Testsida'` är vad jag vill ska synas i navigeringsmenyn som man klickar på.
`'page/view/9'` är själva länken. 

PST: Om du är osäker på länken till din nya sida så klicka på 'Content' för att få upp listan igen på allt som är inlagt. 
Här visas nu alla blogginlägg och sidor. Leta upp din sida och klicka på 'view' vid din sida. Nu ser du länken i adressfältet i din webbläsare. 


### Ändringar i footern
Även footern ändrar du i filen `webbit/site/config.php`
Längst ner på sidan står det `'footer' => '<p>Webbit &copy; by Daniel R</p>',` Men det är bara att byta ut `Webbit &copy; by Daniel R` mot någon annan text
som du vill ha.


### Byta titel och slogan
Detta ändrar du också i `webbit/site/config.php` 
Slogan står nu som `A PHP-based MVC-inspired CMF` men här kan du skriva in valfri text.
Ovanför slogan står det `'header' => 'Webbit',` här skriver du över `Webbit` till den titel du hellre villa ha. 
  



