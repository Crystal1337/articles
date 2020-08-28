-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Sie 2020, 16:14
-- Wersja serwera: 10.4.6-MariaDB
-- Wersja PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `articles`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author`
--

CREATE TABLE `author` (
  `AuthorID` int(11) NOT NULL,
  `Name` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `Surname` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `Username` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `Password` varchar(60) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `author`
--

INSERT INTO `author` (`AuthorID`, `Name`, `Surname`, `Username`, `Password`) VALUES
(1, 'Michal', 'Nowak', 'michal.nowak', '123'),
(2, 'Pawel', 'Kowalski', 'pawel.kowalski', '123'),
(3, 'Mateusz', 'Kowalczyk', 'mateusz.kowalczyk', '123'),
(4, 'Anna', 'Marciniak', 'anna.marciniak', '123'),
(5, 'Edyta', 'Pawlik', 'edyta.pawlik', '123'),
(6, 'Grazyna', 'Mirul', 'grazyna.mirul', '123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `author_news`
--

CREATE TABLE `author_news` (
  `Author_News_ID` int(11) NOT NULL,
  `AuthorID` int(11) NOT NULL,
  `NewsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `author_news`
--

INSERT INTO `author_news` (`Author_News_ID`, `AuthorID`, `NewsID`) VALUES
(32, 1, 18),
(33, 3, 18),
(34, 1, 19),
(35, 2, 19),
(36, 4, 19),
(37, 1, 20),
(38, 2, 20),
(39, 3, 20),
(40, 1, 21),
(41, 2, 21),
(42, 4, 21),
(43, 1, 22),
(44, 2, 22),
(45, 3, 22),
(46, 4, 22),
(47, 1, 23),
(48, 3, 23),
(55, 6, 26),
(56, 4, 26),
(57, 5, 26),
(58, 6, 27),
(59, 2, 27),
(60, 6, 28),
(61, 1, 28),
(62, 6, 29),
(63, 3, 29);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `Title` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `Description` longtext COLLATE utf8_polish_ci NOT NULL,
  `Creation_Date` date NOT NULL,
  `tmp_img_src` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`NewsID`, `Title`, `Description`, `Creation_Date`, `tmp_img_src`) VALUES
(18, ' Core i9-10850K juÅ¼ w Polsce - ten procesor moÅ¼e mocno namieszaÄ‡ w komputerach do gier', ' DuÅ¼o taÅ„szy i niewiele gorszy? AÅ¼ trudno uwierzyÄ‡, Å¼e Intel zdecydowaÅ‚ siÄ™ na wprowadzenie procesora Core i9-10850K â€“ ten model moÅ¼e okazaÄ‡ siÄ™ hitem topowych komputerÃ³w do grania.\r\n\r\nW koÅ„cu jest! Na polskim rynku pojawiÅ‚ siÄ™ procesor Intel Core i9-10850K â€“ jeden z najwydajniejszych modeli pod LGA 1200, ktÃ³ry moÅ¼e byÄ‡ dobrÄ… alternatywÄ… dla testowanego przez nas modelu Intel Core i9-10900K.\r\n\r\nIntel Core i9-10850K â€“ prawie jak topowy Core i9-10900K\r\nJeÅ¼eli Å›ledzicie nasze newsy, to specyfikacja procesora nie powinna byÄ‡ dla Was zaskoczeniem. Jednostka zostaÅ‚a wyposaÅ¼ona w 10 rdzeni i 20 wÄ…tkÃ³w, 20 MB pamiÄ™ci podrÄ™cznej trzeciego poziomu, dwukanaÅ‚owy kontroler pamiÄ™ci DDR4 z natywnym wsparciem dla moduÅ‚Ã³w 2933 MHz. Jest teÅ¼ zintegrowana grafika â€“ UHD Graphics 630.\r\n\r\nPodobnie jak inne modele z dopiskiem K, ukÅ‚ad cechuje siÄ™ odblokowanym mnoÅ¼nikiem, wiÄ™c moÅ¼na go dodatkowo podkrÄ™ciÄ‡. Warto jednak zaopatrzyÄ‡ siÄ™ w dobre chÅ‚odzenie, bo wspÃ³Å‚czynnik TDP wynosi 125 W (limit mocy PL2 to z kolei 250 W).\r\nW porÃ³wnaniu do modelu Core i9-10900K, nowy procesor rÃ³Å¼ni siÄ™â€¦ nieco niÅ¼szym taktowaniem â€“ bazowy i przyspieszony zegar obniÅ¼ono o 100 MHz. Aha, no i nie ma fajnego pudeÅ‚ka (ale to chyba nie bÄ™dzie wielkÄ… stratÄ…).\r\n\r\nCore i9-10850K to krÃ³l opÅ‚acalnoÅ›ci?\r\nMogÅ‚oby siÄ™ wydawaÄ‡, Å¼e Core i9-10850K to po prostu kolejny maÅ‚o interesujÄ…cy procesor pod LGA 1200. No nie do koÅ„ca. SprawdziliÅ›my ceny nowego modelu â€“ w sklepie Komputronik kosztuje on 2299 zÅ‚otych, wiÄ™c o 400 zÅ‚otych mniej niÅ¼ minimalnie wydajniejszy Core i9-10900K (inna sprawa to to, Å¼e flagowca obecnie praktycznie nie da siÄ™ kupiÄ‡ na naszym rynku). MaÅ‚o tego! To 250 zÅ‚otych mniej niÅ¼ Core i9-10900KF (bez zintegrowanej grafiki), ktÃ³ry miaÅ‚ byÄ‡ krÃ³lem opÅ‚acalnoÅ›ci w tym segmencie.\r\n\r\nCzy nowy procesor okaÅ¼e siÄ™ hitem? Trudno powiedzieÄ‡. Na pewno jest duÅ¼o bardziej opÅ‚acalny od topowego Core i9-10900K czy Core i9-10900KF (szczegÃ³lnie, Å¼e 10850K teÅ¼ da siÄ™ podkrÄ™ciÄ‡) â€“ taka propozycja mogÅ‚aby zainteresowaÄ‡ bezkompromisowych graczy. Nie naleÅ¼y jednak zapominaÄ‡ o ofercie konkurencji â€“ taniej znajdziemy 12-rdzeniowe/24-wÄ…tkowe modele AMD Ryzen 9 3900X i Ryzen 9 3900XT, ktÃ³re w typowo procesorowych zastosowaniach na pewno bÄ™dÄ… znacznie wydajniejsze. Do tego wielkimi krokami zbliÅ¼a siÄ™ premiera nowej generacji RyzenÃ³w.', '2020-06-25', 'img/news2.jpg'),
(19, 'Microsoft jak mBank - uÅ¼ytkownicy TeamsÃ³w zaskoczeni dziwnymi komunikatami', 'WidzieliÅ›cie testowe komunikaty na Microsoft Teams? Sprawa wydaje siÄ™ zabawna, ale moÅ¼e byÄ‡ powaÅ¼niejsza niÅ¼ to siÄ™ wydaje.\r\n\r\nPamiÄ™tacie sytuacjÄ™ z dziwnymi wiadomoÅ›ciami w aplikacji mBanku? ProgramiÅ›ci nie zauwaÅ¼yli, Å¼e testujÄ… komunikaty push â€žna produkcjiâ€. Okazuje siÄ™, Å¼e teraz podobna sytuacja zaskoczyÅ‚a uÅ¼ytkownikÃ³w narzÄ™dzia Microsoft Teams. W tym przypadku jednak sprawa moÅ¼e byÄ‡ powaÅ¼niejsza.\r\n\r\nDziwne komunikaty w Microsoft Teams\r\nJak donosi serwis Sekurak, od rana uÅ¼ytkownicy TeamsÃ³w informujÄ… o dziwnych komunikatach â€žFCM Messages Test Notification!!!!â€\r\n\r\nWiemy, Å¼e problem testowych komunikatÃ³w dotyczy uÅ¼ytkownikÃ³w praktycznie z caÅ‚ego Å›wiata (w tym rÃ³wnieÅ¼ z Polski).\r\n\r\nTestowe wiadomoÅ›ci w Teams - Microsoft nie wie skÄ…d problem\r\nMicrosoft wydaÅ‚ oficjalny komunikat, w ktÃ³rym potwierdza wysÅ‚anie testowych wiadomoÅ›ci (podobno dotarÅ‚y one tylko do niektÃ³rych uÅ¼ytkownikÃ³w platformy). Problem jednak w tym, Å¼e jeszcze nie rozpoznano przyczyny problemu. Warto dodaÄ‡, Å¼e jakiÅ› czas temu Teams teÅ¼ zmagaÅ‚ siÄ™ z awariÄ….\r\n\r\nCzÄ™Å›Ä‡ uÅ¼ytkownikÃ³w sugeruje, Å¼e komunikat FCM (Firebase Cloud Messaging) byÅ‚ spowodowany wÅ‚amaniem do bazy. Wprawdzie jak na razie sÄ… to niepotwierdzone informacje, ale mogÄ… zwiastowaÄ‡ powaÅ¼niejszy problem niÅ¼ w przypadku testÃ³w â€žna produkcjiâ€ (jak w przypadku mBanku).', '2020-06-28', 'img/news4.jpg'),
(20, '  Windows Terminal - i wywoÅ‚ywanie komend wreszcie jest Å‚atwe', '  Paleta komend i uÅ‚atwione przeÅ‚Ä…czanie miÄ™dzy kartami to najwaÅ¼niejsze nowoÅ›ci wprowadzane w Windows Terminal 1.3 â€“ najnowszej wersji jednej z najlepszych aplikacji stworzonych przez Microsoft w ostatnim czasie.\r\n\r\nWindows Terminal 1.3 wreszcie z paletÄ… komend\r\nWindows Terminal 1.3 zostaÅ‚ wÅ‚aÅ›nie udostÄ™pniony w wersji poglÄ…dowej. W nim zaÅ› pojawiÅ‚o siÄ™ wreszcie rozwiÄ…zanie, na ktÃ³re dÅ‚ugo czekaliÅ›my. To paleta komend, ktÃ³rÄ… doskonale moÅ¼ecie kojarzyÄ‡ z Visual Studio Code. Po wciÅ›niÄ™ciu kombinacji Ctrl+Shift+P na ekranie pojawi siÄ™ panel szybkiego wywoÅ‚ywania najrÃ³Å¼niejszych komend, co znacznie przyspiesza i uÅ‚atwia korzystanie z nich. \r\n\r\nCo poza tym? Przede wszystkim Å‚atwiej jest przeÅ‚Ä…czaÄ‡ siÄ™ miÄ™dzy kolejnymi kartami â€“ sÅ‚uÅ¼Ä… do tego skrÃ³ty Ctrl+Tab (w prawo) i Ctrl+Shift+Tab (w lewo). Istnieje rÃ³wnieÅ¼ moÅ¼liwoÅ›Ä‡ przypisania koloru karty do profilu.\r\n\r\nDynamiczny rozwÃ³j Å›wietnej aplikacji\r\nAktualnie najnowsza wersja to Windows Terminal 1.2. Microsoft dodaÅ‚ w niej tryb skupienia (ukrywajÄ…cy karty i pasek tytuÅ‚u), moÅ¼liwoÅ›Ä‡ przypisania aplikacji priorytetowej pozycji na pulpicie, odÅ›wieÅ¼yÅ‚ panel ustawieÅ„ oraz wprowadziÅ‚ kilka nowych komend (w tym: setTabColor, openTabColorPicker i renameTab). WczeÅ›niejsza aktualizacja 1.1 pozwoliÅ‚a na szybkie otwieranie folderÃ³w w terminalu z poziomu Eksploratora plikÃ³w, dodawanie programu do autostartu czy teÅ¼ aktywowanie trybu kompaktowego (w ktÃ³rym karty nie majÄ… tytuÅ‚Ã³w, lecz same ikonki). \r\n\r\nWszystkie te nowinki wzbogacajÄ… juÅ¼ i tak Å›wietnie wyposaÅ¼ony Windows Terminal, a wiÄ™c jeden program, w ktÃ³rym moÅ¼emy korzystaÄ‡ z klasycznego wiersza poleceÅ„ (CMD), PowerShella i linuksowego subsystemu (WSL). ObsÅ‚uguje znaki Unicode i UTF-8, uÅ‚atwia wielozadaniowoÅ›Ä‡ poprzez system kart, zapewnia wysokÄ… wydajnoÅ›Ä‡ dziÄ™ki renderowaniu wspomaganemu przez GPU i jest podatny na najrÃ³Å¼niejsze modyfikacje wizualne. ', '2020-07-13', 'img/news3.jpg'),
(21, 'Kto jest najwiÄ™kszym graczem na rynku kart graficznych? Nowe statystyki mogÄ… Was zdziwiÄ‡', '\r\nKto jest najwiÄ™kszym producentem kart graficznych? Wyniki mogÄ… Was zdziwiÄ‡! SzczegÃ³lnie, Å¼e ostatnie miesiÄ…ce pokazaÅ‚y postÄ™pujÄ…ce zmiany na rynku GPU.\r\n\r\nCiÄ…gle zmagamy siÄ™ ze skutkami pandemii, ktÃ³ra miaÅ‚a ogromny wpÅ‚yw na branÅ¼Ä™ IT. WedÅ‚ug raportu Jon Peddie Research, Å›wiatowy kryzys wpÅ‚ynÄ…Å‚ takÅ¼e na rynek kart graficznych i namieszaÅ‚ w zamÃ³wieniach producentÃ³w sprzÄ™tu.\r\n\r\nKto jest najwiÄ™kszym producentem ukÅ‚adÃ³w graficznych?\r\nWedÅ‚ug raportu JPR, w ostatnim kwartale dostawy ukÅ‚adÃ³w graficznych wzrosÅ‚y o 2,5%. Powody do zadowolenia ma jednak tylko Nvidia i AMD â€“ tutaj zamÃ³wienia wzrosÅ‚y odpowiednio o 17,8% i 8,4%. W przypadku Intela odnotowano spadek o 2,7%.\r\n\r\nEfekt byÅ‚ Å‚atwy do przewidzenia â€“ Intel, choÄ‡ nadal jest liderem branÅ¼y (jeÅ¼eli bierzemy pod uwagÄ™ wszystkie ukÅ‚ady graficzne, takÅ¼e zintegrowane w procesorach), w ostatnich kwartaÅ‚ach coraz bardziej traci na znaczeniu. Zyskuje oczywiÅ›cie Nvidia i AMD.\r\n\r\nNvidia vs AMD â€“ kto produkuje wiÄ™cej kart graficznych?\r\nInaczej wyglÄ…da kwestia samodzielnych kart graficznych dla komputerÃ³w â€“ tutaj obecnie liczy siÄ™ tylko Nvidia i AMD (chociaÅ¼ w przyszÅ‚ym roku spodziewamy siÄ™ premiery kart Intela, co moÅ¼e mocno namieszaÄ‡ w statystykach).Dostawy kart graficznych w porÃ³wnaniu z pierwszym kwartaÅ‚em wzrosÅ‚y o 6,55%. NajwiÄ™cej zyskuje Nvidia, ktÃ³ra coraz bardziej powiÄ™ksza swoje udziaÅ‚y na rynku dGPU â€“ w poprzednim kwartale juÅ¼ 4 na 5 sprzedawanych kart graficznych korzystaÅ‚o z ukÅ‚adÃ³w â€žzielonychâ€.\r\n\r\nRynek kart graficznych jest na fali\r\nAnalitycy zauwaÅ¼yli teÅ¼ ciekawe zmiany na rynku ukÅ‚adÃ³w graficznych. Zazwyczaj drugi kwartaÅ‚ jest gorszy wzglÄ™dem pierwszego kwartaÅ‚u, ale w tym roku te statystyki wyglÄ…daÅ‚y inaczej.\r\n\r\nZmiany na rynku majÄ… byÄ‡ efektem pandemii, ktÃ³ra miaÅ‚a wpÅ‚yw na decyzje zakupowe klientÃ³w. CzÄ™Å›Ä‡ inwestycji zostaÅ‚a przeniesiona z trzeciego na drugi kwartaÅ‚ (analitycy wymieniajÄ… tutaj chociaÅ¼by laptopy do nauki). Kryzys miaÅ‚ teÅ¼ wpÅ‚ynÄ…Ä‡ na rozwÃ³j branÅ¼y.', '2020-07-15', 'img/news1.jpg'),
(22, 'be quiet! wprowadza zasilacze Dark Power Pro 12 - jakoÅ›Ä‡ zaskakuje, ale cena moÅ¼e powaliÄ‡', 'Firma be quiet! wraca na rynek zasilaczy i od razu prezentuje sprzÄ™t z gÃ³rnej pÃ³ki. Producent wprowadziÅ‚ do oferty zapowiadane modele Dark Power Pro 12, ktÃ³re majÄ… byÄ‡ wzorem wydajnoÅ›ci i stabilnoÅ›ci.\r\n\r\nJakiÅ› czas temu zapowiadaliÅ›my zasilacze be quiet! Dark Power Pro 12, ktÃ³re spotkaÅ‚y siÄ™ ze sporym zainteresowaniem entuzjastÃ³w. Producent dÅ‚ugo zwlekaÅ‚ z premierÄ… jednostek, ale w koÅ„cu siÄ™ doczekaliÅ›my â€“ na rynku debiutujÄ… dwa najmocniejsze modele z nowej serii.\r\n\r\nbe quiet! Dark Power Pro 12 â€“ zasilacze dla najbardziej wymagajÄ…cych klientÃ³wW ofercie be quiet! poczÄ…tkowo pojawiÅ‚y siÄ™ modele Dark Power Pro 12 o mocy 1500 W (szczytowo 1600 W i 1200 W (szczytowo 1300 W) â€“ to topowe jednostki, ktÃ³re sprawdzÄ… siÄ™ w najwydajniejszych komputerach do grania i stacjach roboczych. Wiemy jednak, Å¼e w planach producenta sÄ… teÅ¼ sÅ‚absze warianty o mocy 1000 W, 850 W i 750 W.\r\n\r\nJednostki wyrÃ³Å¼niajÄ… siÄ™ caÅ‚kowicie modularnym okablowaniem. Co waÅ¼ne, dÅ‚ugoÅ›Ä‡ wiÄ…zek i liczba wtyczek jest dostosowana do najbardziej zÅ‚oÅ¼onych konfiguracji â€“ nie bÄ™dzie problemÃ³w, by podÅ‚Ä…czyÄ‡ topowe pÅ‚yty gÅ‚Ã³wne, kilka kart graficznych i kilkanaÅ›cie dyskÃ³w. Nowe Dark Powery wykorzystujÄ… szeÅ›Ä‡ linii 12 V (Å‚Ä…czna obciÄ…Å¼alnoÅ›Ä‡ jest rÃ³wna maksymalnej mocy zasilaczy). EntuzjaÅ›ci mogÄ… jednak skorzystaÄ‡ z zewnÄ™trznego przeÅ‚Ä…cznika Overclocking Key, ktÃ³ry pozwala poÅ‚Ä…czyÄ‡ wszystkie linie w jednÄ… mocnÄ… szynÄ™.\r\n\r\nGÅ‚Ã³wnym atutem nowych zasilaczy jest bardzo dobra jakoÅ›Ä‡ wykonania. Modele Dark Power Pro 12 korzystajÄ… z japoÅ„skich kondensatorÃ³w o wytrzymaÅ‚oÅ›ci termicznej do 105 stopni Celsjusza i bazujÄ… na konstrukcji caÅ‚ego mostu (full bridge) z ukÅ‚adem rezonansowym LLC, synchronicznym prostownikiem (SR) i konwersjÄ… DC-DC. MoÅ¼emy wiÄ™c liczyÄ‡ na bardzo wysokÄ… sprawnoÅ›Ä‡ energetycznÄ… â€“ do 94,9% (certyfikat 80 PLUS Titanium), a takÅ¼e ulepszonÄ… regulacjÄ™ napiÄ™Ä‡ i niÅ¼sze tÄ™tnienia.\r\nGdyby tego byÅ‚o maÅ‚o, inÅ¼ynierowie zwiÄ™kszyli moc wyjÅ›ciowÄ… kondensatorÃ³w na linii 12 V, co powinno minimalizowaÄ‡ dÅºwiÄ™ki sprzÄ™Å¼enia zwrotnego kart graficznych. Producent chwali siÄ™ rÃ³wnieÅ¼ zastosowaniem najlepszych zabezpieczeÅ„, chroniÄ…cych przed przepiÄ™ciami i spadkami napiÄ™cia, zwarciami, przegrzaniem, przeciÄ…Å¼eniami i skokami napiÄ™cia po stronie wejÅ›ciowej.\r\n\r\nNie bez znaczenia jest teÅ¼ udoskonalony system chÅ‚odzenia. Modele Dark Power Pro 12 wykorzystujÄ… bezramkowy wentylator Silent Wings 135 z Å‚oÅ¼yskiem FDB, ktÃ³ry zainstalowano w specjalnie uksztaÅ‚towany lejku â€“ takie rozwiÄ…zanie nie tylko zwiÄ™ksza przepÅ‚yw powietrza, ale jednoczeÅ›nie zmniejsza niepoÅ¼Ä…dane turbulencje.', '2020-08-21', 'img/news5.jpg'),
(23, 'Jaki laptop do 2500 zÅ‚? TOP 5', 'WÅ›rÃ³d laptopÃ³w do 2500 zÅ‚ znajdziemy wiele ciekawych propozycji do biura i domu. SÄ… to doÅ›Ä‡ tanie komputery przenoÅ›ne, ktÃ³re cieszÄ… siÄ™ ogromnym zainteresowaniem w Polsce. Dobry laptop do 2500 zÅ‚ moÅ¼e byÄ‡ szybki, mieÄ‡ dobry ekran i dysk SSD, ale raczej nie nadaje siÄ™ do gier.\r\n\r\nLaptopy za okoÅ‚o 2500 zÅ‚ cieszÄ… siÄ™ duÅ¼ym powodzeniem w Polsce. Jest to klasa cenowa, w ktÃ³rej wciÄ…Å¼ moÅ¼na znaleÅºÄ‡ dobre i szybko dziaÅ‚ajÄ…ce komputery, ktÃ³re nadajÄ… siÄ™ zarÃ³wno do uÅ¼ytku domowego, jak i sÅ‚uÅ¼bowego.\r\n\r\nWarto jednak mieÄ‡ Å›wiadomoÅ›Ä‡ tego, Å¼e 2500 zÅ‚ jest cenÄ… na tyle niskÄ…, iÅ¼ nie powinniÅ›my oczekiwaÄ‡ od takiego laptopa cudÃ³w. Owszem sÄ… tu juÅ¼ modele, ktÃ³re sÄ… wyposaÅ¼one w dobre procesory (przy czym warto zauwaÅ¼yÄ‡, Å¼e w podanym budÅ¼ecie gÅ‚Ã³wnie sÄ… to konstrukcje napÄ™dzane procesorami AMD Ryzen 3000U - Intel pÃ³ki co nie ma zbyt wiele do zaoferowania), szybkie dyski SSD i wystarczajÄ…cÄ… pojemnoÅ›Ä‡ pamiÄ™ci RAM, ale trafiÄ‡ moÅ¼na teÅ¼ na notebooki, ktÃ³rych specyfikacja nie jest optymalna. W oddzielnych poradnikach opisujemy siÄ™ czy warto kupiÄ‡ laptop z dyskiem SSD.\r\n\r\nJeÅ›li szukacie lepszego, szybszego i wydajniejszego laptopa, lub takiego, ktÃ³ry bÄ™dzie miaÅ‚ wiÄ™kszy dysk, to sprawdÅºcie nasze zestawienia laptopÃ³w do 4000 zÅ‚ oraz do 3000 zÅ‚. Jesli wolicie coÅ› taÅ„szego to zapoznajcie siÄ™ z laptopami do 2000 zÅ‚.\r\n\r\nJaki laptop do 2500 zÅ‚ - podstawowe cechy\r\nW naszych zestawieniach droÅ¼szych laptopÃ³w nie opisywaliÅ›my wielu cech, ktÃ³re w wyÅ¼szej klasie cenowej sÄ… oczywiste. Sytuacja zmienia siÄ™ jednak, gdy wybieramy relatywnie tanie modele.\r\n\r\nPodstawowe zasady sÄ… takie same. JeÅ›li zaleÅ¼y Wam na tym, by laptop dziaÅ‚aÅ‚ szybko to upewnijcie siÄ™, Å¼e jest on wyposaÅ¼ony w dysk SSD. Jest to noÅ›nik typu â€žflashâ€, ktÃ³ry dziaÅ‚a o wiele sprawniej od dysku starszego typu, czyli HDD. SzybkoÅ›Ä‡ zapisu i odczytu danych, a takÅ¼e czas dostÄ™pu sÄ… o wiele lepsze. W praktyce oznacza to, Å¼e system i programy bÄ™dÄ… â€žotwieraÅ‚y siÄ™â€ w krÃ³tszym czasie, nawet po miesiÄ…cach, czy latach uÅ¼ywania laptopa. WiÄ™kszoÅ›Ä‡ tanich modeli oferuje noÅ›nik o pojemnoÅ›ci 240 - 256 GB, ale moÅ¼na znaleÅºÄ‡ dobre konfiguracje z pojemniejszym dyskiem - 480 - 512 GB (taki model moÅ¼e juÅ¼ zastÄ…piÄ‡ tradycyjny, pojemny HDD).\r\n\r\nKolejnÄ… niezmiernie istotnÄ… kwestiÄ… jest pamiÄ™Ä‡ RAM. Im wiÄ™cej tym lepiej, ale w cenie do 2500 zÅ‚ powinniÅ›my realnie oczekiwaÄ‡ 8 GB RAM. Konfiguracje z 4 GB RAM mogÄ… wystarczyÄ‡ do codziennych zadaÅ„, ale nie sÄ… przyszÅ‚oÅ›ciowym rozwiÄ…zaniem - z biegiem czasu bÄ™dziemy odczuwaÄ‡ coraz gorszy komfort pracy z komputerem. Szerzej tÄ™ kwestiÄ™ opisujemy w artykule ile pamiÄ™ci RAM w laptopie.\r\n\r\nW cenie do 2500 zÅ‚ warto zwracaÄ‡ tez uwagÄ™ na rozdzielczoÅ›Ä‡ wyÅ›wietlacza. Najbardziej godna polecenia jest 1920x1080 px, czyli Full HD. Za te pieniÄ…dze nie dostaniemy dobrej zewnÄ™trznej karty graficznej w laptopie - ale zintegrowane z Ryzenami Radeony Vega (zwÅ‚aszcza Vega 8) oferujÄ… caÅ‚kiem ciekawÄ… wydajnoÅ›Ä‡. Nie jest to sprzÄ™t stricte nadajÄ…cy siÄ™ do grania, ale powinien udÅºwignÄ…Ä‡ starsze, mniej wymagajÄ…ce tytuÅ‚y.\r\n\r\nPozostaÅ‚e cechy, takie jak wyglÄ…d, typ i podÅ›wietlanie klawiatury, przekÄ…tna ekranu, materiaÅ‚y obudowy to juÅ¼ rzecz gustu. JeÅ¼eli chodzi o laptopy do 2500 zÅ‚otych, wiÄ™kszoÅ›Ä‡ modeli jest wykonana z tworzyw sztucznych. Informacji o czasie pracy na baterii naleÅ¼y szukaÄ‡ w recenzjach laptopÃ³w.\r\n\r\n\r\nWAÅ»NE! Niebawem na rynku pojawiÄ… siÄ™ nowe generacje laptopÃ³w z procesorami Intel Core 11. generacji oraz taÅ„sze konfiguracje z nowymi ukÅ‚adami AMD Ryzen 4000U - takie modele rÃ³wnieÅ¼ mogÄ… byÄ‡ ciekawÄ… propozycjÄ… w podanym budÅ¼ecie (w chwili pisania artykuÅ‚u jeszcze nie byÅ‚y one dostÄ™pne w sprzedaÅ¼y, wiÄ™c trudno byÅ‚o nam je poleciÄ‡).\r\n\r\nPamiÄ™tajmy, Å¼e w wielu laptopach moÅ¼emy wymieniÄ‡ dysk na inny (np. z HDD na SSD), albo doÅ‚oÅ¼yÄ‡ wiÄ™cej pamiÄ™ci RAM. Warto zapoznaÄ‡ siÄ™ z dokÅ‚adnÄ… specyfikacjÄ… danego modelu lub zapytaÄ‡ sprzedawcÄ™ w sklepie. MoÅ¼liwoÅ›Ä‡ wymiany podzespoÅ‚Ã³w na lepsze moÅ¼e znaczÄ…co wpÅ‚ynÄ…Ä‡ na poprawÄ™ szybkoÅ›ci dziaÅ‚ania komputera. Zazwyczaj lepiej jest wybraÄ‡ laptop, ktÃ³ry ma wiÄ™cej RAMu, a mniejszy dysk, niÅ¼ odwrotnie, gdyÅ¼ czÄ™sto wymiana dysku na lepszy jest Å‚atwiejsza (szczegÃ³Å‚owe informacje znajdziecie w instrukcji, recenzjach lub u sprzedawcy).', '2020-08-22', 'img/news1.jpg'),
(26, 'Cyberpunk naszych czasÃ³w. Neuralink pokaÅ¼e dziÅ› interfejs mÃ³zg-komputer', 'PrzyszÅ‚oÅ›Ä‡, ktÃ³ra zaczyna siÄ™ na naszych oczach, a moÅ¼e jedynie przechwaÅ‚ki Elona Muska? Przekonamy siÄ™ juÅ¼ za kilka godzin.\r\n\r\nElona Muska zapewne przedstawiaÄ‡ Wam nie trzeba, ale jeÅ›li jak dotÄ…d nie sÅ‚yszeliÅ›cie o Neuralink, to powinniÅ›cie wiedzieÄ‡, Å¼e zgodnie z zapowiedziami juÅ¼ wspomnianego, juÅ¼ za kilka godzin odbÄ™dzie siÄ™ prezentacja interfejsu, ktÃ³ry poÅ‚Ä…czy mÃ³zg czÅ‚owieka z komputerem. Cyberpunk peÅ‚nÄ… gÄ™bÄ… i nawet jeÅ›li caÅ‚oÅ›Ä‡ powstaje z myÅ›lÄ… o osobach, ktÃ³re z rozmaitych przyczyn majÄ… ograniczenia funkcji motorycznych, tak sam implant od Neuralink ma zapewniÄ‡ zdrowym uÅ¼ytkownikom szereg moÅ¼liwoÅ›ci rodem z gatunku science-fiction. Uda siÄ™? ByÄ‡ moÅ¼e dowiemy siÄ™ tego juÅ¼ za kilka godzin.\r\nZapowiedziana przez Muska prezentacja odbÄ™dzie siÄ™ o pÃ³Å‚nocy z dziÅ› na jutro, a podczas niej zobaczymy â€ždziaÅ‚ajÄ…ce urzÄ…dzenie od Neuralinkâ€. JeÅ›li Å›miaÅ‚e deklaracje jednego z najpopularniejszych wizjonerÃ³w siÄ™ sprawdzÄ…, to zainteresowani bÄ™dÄ… mogli korzystaÄ‡ z urzÄ…dzeÅ„ elektronicznych bez Å¼adnych poÅ›rednikÃ³w â€“ sterowanie smartfonem myÅ›lami, streamowanie muzyki bezpoÅ›rednio w mÃ³zgu, ale teÅ¼ duÅ¼o szybciej identyfikowaÄ‡ wszelkie zaburzenia dziaÅ‚ania organizmu.\r\n\r\nJednym sÅ‚owem gratka dla transhumanistÃ³w i szczypta kontrowersji dla wszystkich, ktÃ³rzy nie darzÄ… Muska zbytnim zaufaniem. Jednak jeÅ›li spojrzymy na Neuralink jedynie z punktu widzenia osÃ³b, ktÃ³re zostaÅ‚y sparaliÅ¼owane przy jednoczesnym braku uszczerbku dla mÃ³zgu, taki implant moÅ¼e byÄ‡ dla nich przepustkÄ… do zupeÅ‚nie innego Å¼ycia. CÃ³Å¼, czekamy, czekamy.', '2020-08-23', 'img/news4.jpg'),
(27, 'Zwiastun Blood Bowl 3, kolejnej czÄ™Å›ci brutalnego futbolu amerykaÅ„skiego', 'Deweloperzy podzielili siÄ™ rÃ³wnieÅ¼ pierwszymi szczegÃ³Å‚ami. Znamy takÅ¼e przybliÅ¼onÄ… datÄ™ premiery i platformy.\r\n\r\nTargi gamescom 2020 rozpoczÄ™Å‚y siÄ™ na dobre. Wczorajsza konferencja gamescom Opening Night Live to dopiero poczÄ…tek emocji. Deweloperzy korzystajÄ… z okazji i prezentujÄ… graczom swoje najnowsze projekty. Obok trwajÄ…cego wydarzenia obojÄ™tnie nie mogÅ‚o przejÅ›Ä‡ studio Cyanide, ktÃ³re zaprezentowaÅ‚o zwiastun Blood Bowl 3, czyli kolejnej czÄ™Å›Ä‡ serii, przedstawiajÄ…cej futbol amerykaÅ„ski w nieco bardziej brutalnym, warhammerowym wydaniu.\r\nDeweloperzy ujawnili rÃ³wnieÅ¼ kilka informacji na temat kolejnej odsÅ‚ony serii Blood Bowl. â€žTrÃ³jkaâ€ zaoferuje graczom 12 grywalnych ras, a kaÅ¼da z nich bÄ™dzie posiadaÄ‡ wÅ‚asnÄ… arenÄ™ i cheerleaderki. Podobnie jak miaÅ‚o to miejsce w poprzednich czÄ™Å›ciach, rozgrywka w Blood Bowl 3 oparta jest o system turowy.\r\n\r\nGracze muszÄ… wiÄ™c wydawaÄ‡ polecenia swoim podopiecznym, aby zyskaÄ‡ przewagÄ™ na boisku. TÄ™ moÅ¼na osiÄ…gnÄ…Ä‡ na dwa sposoby â€“ przez tradycyjne zdobywanie punktÃ³w lub poprzez eliminowanie czÅ‚onkÃ³w wrogiej druÅ¼yny. Deweloperzy poinformowali rÃ³wnieÅ¼, Å¼e pomiÄ™dzy spotkaniami bÄ™dziemy mogli poprawiÄ‡ umiejÄ™tnoÅ›ci naszych zawodnikÃ³w.\r\n\r\nTrzecia odsÅ‚ona serii Blood Bowl ma zaoferowaÄ‡ zarÃ³wno kampaniÄ™ dla jednego gracza, jak i tryb multiplayer. TwÃ³rcy zapowiedzieli rÃ³wnieÅ¼, Å¼e zamierzajÄ… rozwijaÄ‡ swojÄ… produkcjÄ™ po jej premierze.\r\n\r\nBlood Bowl 3 zmierza na komputery osobiste, a takÅ¼e konsole PlayStation 4, PlayStation 5, Xbox One, Xbox Series X i Nintendo Switch. Premiera gry w 2021 roku.\r\n\r\n', '2020-08-25', 'img/news4.jpg'),
(28, 'Zapowiedziano Aragami 2, ktÃ³re zaoferuje tryb kooperacji i wiÄ™cej walki', 'Zapowiedzi towarzyszyÅ‚ rÃ³wnieÅ¼ zwiastun, na ktÃ³rym mogliÅ›my zerknÄ…Ä‡ na nowoÅ›ci, zmierzajÄ…ce do gry.\r\n\r\nPo zakoÅ„czeniu transmisji gamescom Opening Night Live przyszedÅ‚ moment, w ktÃ³rym do gÅ‚osu dopuszczeni zostali mniejsi deweloperzy. Z tej okazji skorzystaÅ‚o studio Lince Works, ktÃ³re zapowiedziaÅ‚o Aragami 2. Kontynuacja wydanej w 2016 roku pierwszej czÄ™Å›ci znacznie rozbuduje formuÅ‚Ä™ znanÄ… z pierwowzoru. Sequel pozwoli m.in. na rozegranie kampanii w towarzystwie drugiego gracza oraz poÅ‚oÅ¼y wiÄ™kszy nacisk na walkÄ™ z oponentami.Kontynuacja pozwoli wiÄ™c na stawienie czoÅ‚a przeciwnikom i stoczenie pojedynkÃ³w twarzÄ… w twarz. Na pewno ucieszy to graczy, ktÃ³rzy w razie wykrycia, nie lubiÄ… rozpoczynaÄ‡ poziomu od poczÄ…tku lub po prostu uciekaÄ‡ przed wrogami w nadziei, Å¼e Ci stracÄ… nas z oczu.\r\n\r\nPonadto nadchodzÄ…ca produkcja studia Lince Works zaoferuje system craftingu i modyfikacji posiadanych przedmiotÃ³w. RÃ³Å¼ne stroje i pancerze pozwolÄ… nie tylko na zmianÄ™ wyglÄ…du bohatera, ale bÄ™dÄ… takÅ¼e wpÅ‚ywaÄ‡ na jego statystyki.\r\n\r\nAragami 2 zmierza na komputery osobiste oraz konsole PlayStation 4, PlayStation 5, Xbox One, i Xbox Series X. Premiera gry w 2021 roku.', '2020-08-27', 'img/news4.jpg'),
(29, 'Pumpkin Jack to wspÃ³Å‚czesny MediEvil. Pierwszy gameplay z atrakcyjnej platformÃ³wki', 'Na trwajÄ…cym Gamescomie zaprezentowano fragmenty rozgrywki z platformÃ³wki, ktÃ³ra odwoÅ‚uje siÄ™ do klasyki gatunku, jak MediEvil.\r\n\r\nFani klasycznych trÃ³jwymiarowych platformÃ³wek majÄ… powody do radoÅ›ci. Podczas Gamescomu studio Nicolas Meyssonnier zaprezentowaÅ‚o w akcji swojÄ… debiutanckÄ… produkcjÄ™, ktÃ³ra odwoÅ‚uje siÄ™ do takich klasykÃ³w jak MediEvil i Jak & Daxter. Pumpkin Jack to trÃ³jwymiarowa platformÃ³wka akcji, w ktÃ³rej kierujemy Jackiem, legendarnym Dyniowym KrÃ³lem. Na 8-minutowym gameplayu twÃ³rcy pokazujÄ… nie tylko etapy platformowe, ale rÃ³wnieÅ¼ widowiskowÄ… i efektownÄ… walkÄ™ z wrogami, a takÅ¼e dynamiczne etapy zrÄ™cznoÅ›ciowe z kierowaniem wagonikiem.Pumpkin Jack zabierze nas w podrÃ³Å¼ do KrÃ³lestwa Nudy, fantastycznej krainy, w ktÃ³rej mieszkaÅ„cy Å¼yjÄ… w zgodzie, spokoju i nieustannej nudzie. SprzeciwiajÄ…cy siÄ™ rutynie DiabeÅ‚ zamierza poÅ‚oÅ¼yÄ‡ kres harmonii i rzuca klÄ…twÄ™, sprowadzajÄ…c na ziemie wszelkiej maÅ›ci potwory. Ludzie nie pozostajÄ… mu dÅ‚uÅ¼ni i wzywajÄ… na pomoc potÄ™Å¼nego czarodzieja. DiabeÅ‚ ma jeszcze jednego asa w rÄ™kawie â€“ Dyniowego KrÃ³la, ktÃ³ry trafia w sam Å›rodek wojny miÄ™dzy siÅ‚ami dobra i zÅ‚a. Jego zadaniem jest powstrzymanie maga, nim ten przywrÃ³ci w krÃ³lestwie dawny Å‚ad i porzÄ…dek, a przy okazji nudÄ™.\r\n\r\nZ okazji prezentacji gameplaya, twÃ³rcy udostÄ™pnili na Steamie demo gry do pobrania dla kaÅ¼dego chÄ™tnego. Pumpkin Jack pojawi siÄ™ na PC, Xbox One, PlayStation 4 oraz Nintendo Switch. Premiera gry zostaÅ‚a wyznaczona na ostatni kwartaÅ‚ tego roku.', '2020-08-28', 'img/news3.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AuthorID`);

--
-- Indeksy dla tabeli `author_news`
--
ALTER TABLE `author_news`
  ADD PRIMARY KEY (`Author_News_ID`),
  ADD KEY `AuthorID` (`AuthorID`),
  ADD KEY `NewsID` (`NewsID`);

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `author`
--
ALTER TABLE `author`
  MODIFY `AuthorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `author_news`
--
ALTER TABLE `author_news`
  MODIFY `Author_News_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `author_news`
--
ALTER TABLE `author_news`
  ADD CONSTRAINT `author_news_ibfk_1` FOREIGN KEY (`AuthorID`) REFERENCES `author` (`AuthorID`),
  ADD CONSTRAINT `author_news_ibfk_2` FOREIGN KEY (`NewsID`) REFERENCES `news` (`NewsID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
