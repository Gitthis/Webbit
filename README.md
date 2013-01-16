
Webbit, a PHP-based, MVC-inspired CMF
====================================

Webbit är gjort efter Lydia Tutorial. För en fullständig version av Lydia
så klicka på nedan länk.
* https://github.com/mosbth/lydia

Den här guiden förutsätter att du är van vid installationer av ramverk mm. 



Installation
------------

* Klona Webbit från Github via `git clone git://github.com/Gitthis/Webbit.git`
* Editera filen .htaccess så att den pekar på din installationsadress. Vid RewriteBase byter du alltså ut webbadressen `/~dara11/phpmvc/kmom08/webbit/`
  till din egen installations adress/URL.
* Ladda upp ramverket till din webbserver.
* Se till att filen `webbit\site\data` är skrivbar genom `chmod 777 site/data`. I filezilla kan du högerklicka på
`webbit\site\data` och välja filrättigheter och sedan skriva in 777 i fältet för Numeriskt värde.
* Peka din webbläsare till adressen för din installation av webbit och surfa in på sidan.
* Webbit måste sedan initiera moduler. DU gör detta genom att klicka på `module/install` nästan i mitten på sidan.

* Nu är du klar med installationen. Nedan kan du läsa om några enkla saker som du kan ändra så som 
logo, färger, typsnitt mm mm. 



Use of external libraries
-----------------------------------

Lydia uses external libraries for state of the art samples. Any external module can be replaced or
removed for less features but without disturbing the Lydia core functionality.

The following external modules are included in Lydia.

### HTMLPurifier
HTMLPurifier by Edward Z. Yang to filter & format HTML.
* Website: http://htmlpurifier.org/ 
* Version: 4.4.0 (2012-01-18)
* License: LGPL
* Lydia path: `webbit\site\data`
* Used by: `CTextFilter`


### PHP Markdown & PHP Markdown Extra
PHP Markdown by Michel Fortin to filter text to HTML to write for the web. Based on the concept of Markdown by John Gruber.
* Website: PHP markdown: http://michelf.com/projects/php-markdown/
* Website: Markdown: http://daringfireball.net/projects/markdown/
* Version: PHP Markdown: 1.0.1o (2012-01-08)
* Version: PHP Markdown Extra 1.2.5 (2012-01-08)
* License: PHP Markdown & PHP Markdown Extra has BSD-style open source license OR GNU General Public License version 2 or a later version.
* License: Markdown has BSD-style open source license.
* Lydia path: `src/CTextFilter/php-markdown`
* Used by: `CTextFilter`


### PHP SmartyPants & PHP Typographer
PHP SmartyPants and PHP Typographer by Michel Fortin for better typography. Based on the concept of Markdown by John Gruber.
* Website: PHP SmartyPants: http://michelf.com/projects/php-smartypants/
* Website: PHP Typographer: http://michelf.com/projects/php-smartypants/typographer/
* Website: SmartyPants: http://daringfireball.net/projects/smartypants/
* Version: PHP SmartyPants: 1.5.1e (2005-12-09)
* Version: PHP Typographer: 1.0 (2006-06-28)
* License: PHP SmartyPants & PHP Typographer has BSD-style open source license.
* License: SmartyPants has BSD-style open source license.
* Lydia path: `src/CTextFilter/php_smartypants_1.5.1e`
* Lydia path: `src/CTextFilter/php_smartypants_typographer_1.0`
* Used by: `CTextFilter`


### SimplePie
SimplePie by Geoffrey, Ryan P., and Ryan M. to read RSS feeds.
* Website: http://simplepie.org/
* Version: 1.3 (2012-07-07)
* License: BSD license
* Lydia path: `src/CRSSFeed/simplepie`
* Used by: `CRSSFeed`


### lessphp
lessphp by leaf to compile LESS.
* Website: http://leafo.net/lessphp
* Version: 0.3.8 (2012-08-18)
* License: Dual license, MIT LICENSE and GPL VERSION 3
* Lydia path: `themes/grid/lessphp`
* Used by: `themes/grid/style.php`


### The Semantic Grid System
by Tyler Tate/TwigKit to get grid layout through LESS.
* Website: http://semantic.gs/
* Version: 1.2 (2012-01-11)
* License: Apache License
* Lydia path: `themes/grid/semantic.gs`
* Used by: `themes/grid/style.less`


### GeSHi - Generic Syntax Highlighter
by Nigel McNie, Benny Baumann.
* Website: http://qbnz.com/highlighter/
* Version: 1.0.8.10 (2011-02-11)
* License: GNU GPL v2
* Lydia path: `src/CTextFilter/geshi_1.0.8.10`
* Used by: `CTextFilter`


Todo.
-----

Yes, a lot of things to do. Lydia is not very stable and this list is not nere complete,
its more a memory management and wishlist for me when developing.

* Create view-directory and perform alternative load between view and site/view.
* Add tabs to module-manager and enable management of each module.
* Add source.php and enable viewing sourceode of modules.
* Add image.php to enable image-handling.
* Add tab to module-manager to enable translation of each module, with connection to 
external translation service, such as google translate.
