# articles

Jak skonfigurować projekt:
1. Potrzebny jest na komputerze pakiet XAMPP,
2. Po zainstalowaniu oprogramowania folder projektu tj. "articles" należy wrzucić do folderu xampp/htdocs,
2. Następnie należy włączyć pakiet XAMPP oraz uruchomić serwisy Apache i MySQL,
4. W przeglądarce wpisać adres "localhost",
5. W prawym górnym rogu wejść w "phpMyAdmin",
6. W panelu po lewej stronie kliknąć "Nowa" w celu stworzenia bazy danych. Wprowadzić "articles" jako nazwę oraz wybrać "utf8_polish_ci" w oknie obok,
7. Na górnym pasku wejśc w opcję "Import" następnie wybrać plik "articles.sql" z folderu "database" w projekcie i nacisnąć przycisk "Wykonaj",

Korzystanie z aplikacji:
1. Jeśli wszystko zostało skonfigurowane poprawnie aplikacja jest dostępna w przeglądarce pod adresem "localhost/articles",
2. Strona główna prezentuje karuzele z 3-ema najnowszymi newsami
3. Pod karuzela znajduje sie lista wszystkich newsów
4. Aby dodać/edytować/usunąć artykuł użytkownik musi być zalogowany. Nazwy użytkownika oraz hasła znajdują się niezakodowane w bazie danych w tabeli "Author", (przykładowym może być username: "michal.nowak" hasło: "123")
5. Po zalogowaniu przycisk dodania artykułu znajduje się na pasku nawigacyjnym u góry strony, natomiast w celu edycji lub usunięcia artykułu należy przejść bezpośrednio do szczegółowego jego opisu klikając w obrazek lub tytuł,
6. Lista redaktorów z przyciskami do ich artykułów znajduje się na pasku nawigacyjnym pod "Nasza redakcja", a 3 najczęściej postujących redaktorów pod "Top 3 tygodnia"
7. Lista artykułów danego redaktora zostanie wyświetlona po naciśnięciu przycisku "Artykuły" lub "Wszystkie artykuły" w zależności, która strona jest wyświetlana.
