Lizenz und Disclaimer
Die Software unterliegt der GPLv3. Der Lizenztext liegt dem Paket bei.
Die Software ist ein Hobby-Projekt, das sich zwar im pers�nlichen Einsatz bew�hrt hat - Fehler und deren Folgen k�nnen aber in einem solchen Projekt nicht ausgeschlossen werden; es ist zu bezweifeln, dass der BGH eine Anwaltshaftung durch Vertrauen auf diese Software verneinen w�rde !
Was ist OpenLawyer's ?
OpenLawyer's ist eine sowohl f�r den privaten wie auch gesch�ftlichen Bereich freie Aktenverwaltung, die der Struktur nach auf die Bed�rfnisse von Rechtsanw�lten ausgerichtet ist. OpenLawyer's ist technisch gesehen ein �ber den Web-Browser eines Rechners verwendbares Front-End f�r eine SQL-basierte Datenbank, die mithilfe eines PHP-Scriptes �ber einen WebServer angesprochen wird. Um den Nutzer nicht zu gro�e Installationsschwierigkeiten zu bereiten, nutzt die aktuelle Version die z.T. in PHP (5.0) integrierte oder ggf. als Extension zu ladende SQLite2-Bibliothek.
Sowohl PHP als auch SQLite (Lizenzbedingungen siehe Herstellerseiten) sind frei verwendbar. WebServer gibt es ebenfalls als Freeware/OpenSource.
Wozu gibt es OpenLawyer's ?
In fast jedem Softwarebereich gibt es freie oder OpenSource-Software. Der Autor nutzt selbst ausschlie�lich OpenSource und daf�r gibt�s es eine Dankesch�n an die Community mit diesem Werk.
Was kann OpenLawyer's ?
OpenLawyer's ist dem Minimalismus verschrieben. 
Dies bedeutet, dass die Software nur das anbietet, was sich im Alltag f�r den Autor als zwingend notwendig ergeben hat. F�r die �brigen Bed�rfnisse gibt es in der Regel eine Vielzahl an Software, die aufgrund ihrer Spezialisierung die gew�nschten Aufgaben komfortabler l�sen kann. 
Dar�ber hinaus stehen mit der Entwicklung des Internets reichhaltige Datenbanken, z.B. mit Rechtsprechung oder Gerichtsverzeichnissen, zur Verf�gung.
Folgende, nicht abschlie�ende Liste an Funktionen bietet OpenLawyer's:
* beliebige Nutzerzahl (nur begrenzt durch den Server)
* beliebig gro�e Anzahl an Akten (nur begrenzt durch den Server)
* vielf�ltige Konfigurationsm�glichkeiten f�r den Administrator bis zur �u�eren Erscheinung (Skin)
* Akten anlegen / archivieren / suchen
* Dokumentenverwaltung /-suche
* Aktenspezifische Beteiligtenzuordnung
* Posteingangs- und -ausgangsbuch
* Wiedervorlagen
* Zuordnung von fortlaufenden Rechnungsnummern und Auslagenkontrolle
* Formatvorlagenaufruf
* Erweiterbare Internet-Linkliste
* Statistikfunktionen
Dabei bedarf es lediglich der Einrichtung eines (Web)"Servers". Die Arbeitsplatzrechner greifen mit einem Web-Browser auf die Software zu.
Und welche Nachteile gibt es ?
Aufgrund der Struktur als Web-Frontend gibt es gerade im Bereich der Aktenvita und der Formatvorlagen Funktionseinschr�nkungen. So gibt es bisher (aber in Planung) keine M�glichkeit, dass die aktenspezifischen Daten wie Aktenzeichen, Bearbeiter, Gegner etc. bei Aufruf der Formatvorlage automatisch eingef�gt werden. 
Das Speichern von Dokumenten zur Aktenvita bedarf des Umweges �ber die Upload-Funktion des Browsers, so dass bei Erstellung von Schrifts�tzen der Weg �ber ein lokales Verzeichnis gegangen werden muss. Seit OpenLawyer�s 1.0 gibt es eine Kurzvermerkfunktion, um Vermerke unmittelbar zur Akte zu speichern.
Beteiligte einer Akte k�nnen ausschlie�lich aus dem zentral zu pflegenden Adressbuch zugeordnet werden, um unn�tige Doppeleintr�ge zu vermeiden. Dadurch sind bei der Beteiligtenzuordnung ein paar Schritte mehr, als vielleicht von anderer Software bekannt,n�tig.
Da es sich um freie, unentgeltlich abgegebene Software handelt, h�ngt die Unterst�tzung bei Schwierigkeiten und Problemen ganz von einer Community und der Lust und Zeit des Autors ab.
Wie ist OpenLawyer's abgesichert ?
Jeder Nutzer muss vom Administrator mit Namen und Passwort eingetragen werden. Dar�ber hinaus muss zwingend die IP-Adresse der zum Zugriff zugelassenen Rechner des Intranets freigegeben werden (in Planung, diese Beschr�nkung f�r HomeOffice@Internet aufzuheben). Bei fehlerhaftem Login oder falscher IP-Adresse wird der Zugang gesperrt.
Das Backup der Daten ist durch eine einfache Kopieroperation m�glich, da lediglich die von OpenLawyer's angelegten Verzeichnisse auf ein Sicherungsmedium kopiert werden m�ssen.
S�mtliche Schrifts�tze zu einer Akte werden in separaten Verzeichnissen im Original abgelegt, so dass selbst bei einem Totalausfall der Datenbank ein Zugriff auf die Schrifts�tze m�glich bleibt.
Die Datensicherheit der Software h�ngt im Wesentlichen von einer ordnungsgem��en Konfiguration des als Server einzusetzenden Rechners ab ! Regelm��ige Backups verstehen sich von selbst.
Installation
Eine Installation im herk�mmlichen Sinne, d.h. �ber ein ausf�hrbares Programm, findet nicht statt.
Unerfahrene Nutzer sollten fachm�nnische Hilfe in Anspruch nehmen oder mit entsprechender Einarbeitungszeit rechnen!
Da OpenLawyer's aus HTML-Dateien und einem PHP-Script besteht, m�ssen Sie zur Inbetriebnahme wie folgt vorgehen:
* W�hlen Sie einen Rechner im Intranet
* Installieren Sie PHP (ab 5.0) mit SQLite2-Unterst�tzung
* Installieren Sie einen WebServer mit PHP-Unterst�tzung (empfohlen: Lighttpd)
* Entpacken Sie das gedownloadete OpenLawyer's-Paket in einem frei gew�hlten Verzeichnis
(f�r das stetige Anwachsen der Datenbank sollte eine gro�e Festplatte gew�hlt werden!)
* Konfigurieren Sie den WebServer so, dass das Root-Verzeichnis auf das OpenLawyer's-
Verzeichnis "/www/" verweist
* Rufen Sie �ber den WebBrowser die Adresse 127.0.0.1/olclient.php auf
* OpenLawyer's versucht nun, die notwendigen Verzeichnisse unterhalb des "/www/" Verzeichnisses f�r Akten, Datenbank etc. anzulegen (Beachten Sie die betriebssystemspezifische Rechteverwaltung zum Zugriff; nur der WebServer sollte Zugriff auf das OpenLawyer's-Verzeichnis haben)
* Nach erfolgreicher Initialisierung k�nnen Sie sich unter �127.0.0.1/olclient.php� als Administrator anmelden
Name: Administrator
PW: sysop
�ndern Sie zuerst das Passwort des Administrators !
Konfigurieren Sie sodann IP-Adressen und Benutzer. Die restlichen Konfigurationsm�glichkeiten ergeben sich aus dem Men�.
Allgemeine Sicherheitshinweise
Durch die Verlagerung der Datenbank und der Aktenschrifts�tze unterhalb des Root- Verzeichnisses des WebServers soll verhindert werden, dass unberechtigte Dritte darauf Zugriff erhalten.
Den gleichen Zweck verfolgt die White-List von zugriffberechtigten IP-Adressen.
Die Datensicherheit und die Abwehr unberechtigter Zugriffe kann aber nur durch einen fachm�nnisch abgesicherten Rechner gew�hrleistet werden!
Copyright 2006-2011 LastCoderStanding (lastcoder at users.sourceforge.net)
