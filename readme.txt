.htaccess file je konfiguracioni fajl koji se koristi za promenu podesavanja apache servera.
Zavisno od direktorijuma u koji se postavi apache ga detektuje i izvrsava nad tim direktorijumom ili fajlovima.
.htaccess file se koristi da ukljuci ili iskljuci dodatne funkcionalnosti apache web server softvera.
Jedna od tih funckcionalnosti je i redirekcija korisnika na sajtu sa jednog fajla na drugi u okviru sajta ili cak i na potpuno drugu web adresu.Za okvire ove aplikacije koristicemo relativni URL sa kojim cemo biti u mogucnosti skratiti putanju url i promeniti izgled url-a.
Jedna od najvaznijih funkcija .htaccess fajla je zastita fajlova ili direktorijuma na sajtu lozinkom.U ovom slucaju logovanje korisnika se odvija automatski preko browsera i pop-up interface-a.

U slucaju ove aplikacije koristicemo neka podesavanja apache servera:
1.Options +FollowSymLinks
Ova komanda govori serveru da prati takozvane simbolicne linkove koji ukoliko su ukljuceni skracuju putanju trazenja fajlova serveru i povecavaju brzinu rada.
2.RewriteEngine On
Ukljucuje rewriting engine
3.RewriteRule ^([a-zA-Z]*)/?([a-zA-Z]*)?/?([a-zA-Z0-9]*)?/?$ index.php?controller=$1&action=$2&id=$3 [NC,L]
Ovaj deo fajla govori serveru preko regularnih izraza sta sve od upita kroz url se poklapa sa sablonom koji smo zadali.
^ pocetak stringa
a-zA-Z sva slova mala ili velika
* karakter koji prthodi ovom znaku moze se pojaviti nijednom ili vise puta
? karakter koji prethodi znaku
0-9 svi brojevi od 0 do 9

[NC,L] flags (case insensitive,last-stop processing rule)

//za bazu podataka ukoliko je importujete morate prvo napraviti bazu sa imenom calmy