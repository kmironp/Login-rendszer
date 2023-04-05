# Login-rendszer
Egy projekt során készült

A hack.php a PHP kód egy egyszerű titkosítást old fel.
A program először beolvassa a "password.txt" állomány tartalmát a "file_get_contents" függvénnyel. Ezután definiál egy eltolási kulcsot, amelyet a $key tömbben tárol. A kulcsot egy 5 hosszú tömbben adták meg, amelynek minden elemét az adott karakter ASCII kódjának az eltolására használják.
Ezután a program végig megy a beolvasott fájl összes során a "foreach" ciklussal. Minden sort külön-külön dolgoz fel a sorvégjel karakteren ("\n") elválasztva.
Majd minden karaktert visszafejtenek a kulcs segítségével az "ord" és "chr" függvényeket használva. Az "ord" függvény visszaadja a karakter ASCII kódját, a "chr" pedig az adott ASCII kódnak megfelelő karaktert adja vissza. Az eltolást a kulcs aktuális elemének az indexe alapján számítják ki az adott iterációban.


Au index.php egy HTML és PHP kód, amely egy bejelentkezési felületet tartalmaz. Az oldal háttérszíne egy radikális gradiens, a szöveg fehér színű. A fejléc tartalmazza a fejlesztő nevét és az osztályát.
A bejelentkezési űrlap két beviteli mezőt tartalmaz a felhasználónév és a jelszó megadásához, valamint egy Belépés gombot. Az űrlap elküldése POST-módban történik.
Az űrlap ellenőrzése a PHP kód része, amely ellenőrzi, hogy a felhasználói adatok megfelelőek-e. A felhasználónév adatbázisban a jelszó .txt adatfájlban kerül tárolásra. A PHP kód ellenőrzi, hogy a felhasználónév és a jelszó helyesek-e, és ha igen, sikeres bejelentkezési értesítést jelenít meg. A PHP kód kapcsolódik egy adatbázishoz is (localhost), és lekéri az adatokat a felhasználónév alapján, ahol a felhasználó neve megegyezik a táblázatban tárolt felhasználóval, akkor a titkos mezőben szereplő színűra színezi a hátteret.

A CSS kód stílusokat állít be az elemekhez, például a háttérszínhez, a margóhoz, a betűmérethez, a színhez és a kiemeléshez. A stílusok között szerepel a responszivitás is, hogy az oldal megfelelően jelenjen meg különböző képernyőméreteken. A CSS kód tartalmaz sikertelen bejelentkezést. A sikertelen bejelentkezési értesítés piros színű és átírányít a police.hu-ra.
