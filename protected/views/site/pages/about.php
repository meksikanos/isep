<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name . ' - O Wydziale Platform Wspierających';
?>
<article>
    <h3>Wprowadzenie</h3>

    <p>
        Pod pojęciem platformy ISeP kryje się szereg aplikacji, których zadaniem jest realizacja usług dla rynku Prepaid/MIX oraz Postpaid. Niektóre aplikacje działają niezależnie, inne są ze sobą powiązane i działają w rozproszonym środowisku. W większości przypadków, jedna aplikacja odpowiada za obsługę jednej usługi.
        Za rozwój platformy odpowiadają pracownicy <b>Wydziału Platform Wspierających</b> Orange Polska (dalej WPW).
    </p>

    <h3>Historia rozwoju</h3>
    
    <p>
        W roku 2002 powstała platforma serwisów interaktywnych. Początkowo zadaniem platformy była realizacja prostych serwisów rozrywkowych typu:
    </p>
    <ul>
        <li><b>Imieniny</b> – gdzie abonent mógł w odpowiedzi na przesłane imię otrzymać daty imienin.</li>
        <li><b>Aktualności</b> – wiadomości otrzymywane w postaci SMS’a zwrotnego z krótkimi informacjami zwrotnymi w kontekście bieżących wydarzeń.</li>
        <li><b>Pogoda</b> – możliwość odpytania o prognozę pogody.</li>
    </ul>
    <p>
        W latach 2003/2004 pojawiła się obsługa pierwszych usług dodanych  (VAS, ang. Value Added Service). Były to usługi realizowane wyłącznie w systemach technicznych, bez interakcji z systemami Aplikacji IT. Usługi te pozwalały np. na ustawienie wybranego numeru F&F .
        Dwa lata później pojawiło się środowisko do przetwarzania rekordów CDR /EDR – tj. zdarzeń generowanych przez platformę sieci inteligentnych (ang. Intelligent Network ) oraz obsługa kanału USSD .
        Od roku 2006 do dnia dzisiejszego platforma przeobraziła się w autonomiczny system, którego zadaniem jest rozszerzenie funkcjonalne platformy IN oraz realizacja usług dla rynku Prepaid/MIX. Aktualnie system jest zintegrowany z wieloma innymi platformami i uczestniczy w procesie provisioningu  (w tym m.in. w zakresie zarządzania usługami, tj.: aktywacji, dezaktywacji oraz modyfikacji usług).
    </p>	

    <h3>Wykorzystywane technologie</h3>
	
    <p>
        Rozwiązania tworzone są w oparciu o następujące technologie:
    </p>

    <ul>
        <li>Java EE  – kod aplikacji.</li>
        <li>Glassfish  – serwer aplikacyjny dla platformy Java EE.</li>
        <li>PL/SQL  – język proceduralny używany w aplikacjach bazodanowych.</li>
        <li>Powłoka systemowa  (ang. shell) – skrypty wspierające pracę aplikacji lub inne dedykowane rozwiązania.</li>
        <li>Spring  – szkielet do tworzenia aplikacji webowych.</li>
    </ul>

    <h3>Warstwa sprzętowa</h3>

    <p>Tworzone oprogramowanie oraz systemy operacyjne zainstalowane są na serwerach SUN. Typowe środowisko złożone jest z następujących elementów:</p>
	<ul>
        <li>RAC (Real Application Cluster)</li>
        <li>Switch</li>
        <li>Balancer</li>
        <li>Macierz</li>
        <li>Serwer SPARC</li>
    </ul>    

    <h3>Rozwijane systemy niezależne</h3>
    
    <p>W ramach rozwijanych rozwiązań informatycznych, możemy wyróżnić następujące systemy tworzone bezpośrednio przez pracowników WPW:</p>
	<ul>
        <li><b>He-Man</b> – system do zarządzania wybranymi aplikacjami dla rynku Prepaid. Z systemu korzystają pracownicy Marketingu Prepaid. Pozwala na definiowanie prostych promocji bazujących na doładowaniach konta bazowego abonenta.</li>
        <li><b>WIA</b> – system do zarządzania wybranymi usługami dla rynku Prepaid i parametrami konta abonentów Prepaid / Mix. Użytkownikami systemu są pracownicy Orange Customer Services  (dalej OCS).</li>
        <li><b>Hybryda</b> – aplikacja przetwarzająca doładowania abonamentowe abonentów MIX oraz usługi cykliczne dla abonentów Prepaid/MIX. System rozwijany przez dostawcę (Oracle).</li>
    </ul>    
</article>