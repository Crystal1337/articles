# articles
Wymagania:
1. XAMPP - https://www.apachefriends.org/pl/index.html

Jak skonfigurować projekt:
1. Po zainstalowaniu oprogramowania XAMPP folder projektu tj. "articles-master" (można zmienić) należy przenieść do folderu xampp/htdocs,
2. Należy włączyć pakiet XAMPP oraz uruchomić serwisy Apache i MySQL,
3. W przeglądarce wpisać adres "localhost",
4. W prawym górnym rogu wybrać w "phpMyAdmin",
5. W panelu po lewej stronie kliknąć "Nowa" w celu stworzenia bazy danych. Wprowadzić "articles" jako nazwę oraz wybrać "utf8_polish_ci" w oknie obok,
6. Na górnym pasku wybrać opcję "Import" następnie wybrać plik "articles.sql" z folderu "database" w projekcie i nacisnąć przycisk "Wykonaj".

Korzystanie z aplikacji:
1. Jeśli wszystko zostało skonfigurowane poprawnie aplikacja jest dostępna w przeglądarce pod adresem "localhost/articles-master" (localhost/nazwa_folderu_projektu jeśli była zmieniona),
2. Strona główna prezentuje karuzele z trzema najnowszymi newsami,
3. Pod karuzela znajduje sie lista wszystkich newsów,
4. Aby dodać/edytować/usunąć artykuł użytkownik musi być zalogowany. Nazwy użytkownika oraz hasła znajdują się celowo niezaszyfrowane (w celu prostszej obsługi zadania) w bazie danych w tabeli "Author", (przykładowym może być username: "michal.nowak" hasło: "123"),
5. Po zalogowaniu przycisk dodania artykułu znajduje się na pasku nawigacyjnym u góry strony, natomiast w celu edycji lub usunięcia artykułu należy przejść bezpośrednio do sjego szczegółowego opisu klikając w obrazek lub tytuł,
6. Lista redaktorów z przyciskami do ich artykułów znajduje się na pasku nawigacyjnym pod "Nasza redakcja", a trzech najczęściej postujących redaktorów pod "Top 3 tygodnia",
7. Lista artykułów danego redaktora zostanie wyświetlona po wybraniu przycisku "Artykuły" lub "Wszystkie artykuły" w zależności, która strona jest wyświetlana.
