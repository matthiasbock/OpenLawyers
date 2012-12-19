<?php

// Vorpr�fungen bei erstmaligem Aufruf

function CheckIntegrity()
{
		global $sGuipath;
		global $sDatabase;
		
		// PHP5 
		
		$sVersion = phpversion();
		if ((int) $sVersion[0] < 5) {
				Error("Fehler: OpenLawyer\'s ben�tigt mindestens PHP5 !");
				die;
		}
		
		// SQlite2
/*		if (phpversion('sqlite') == '') {
				Error("Fehler: PHP-Bibliothek f�r SQLite fehlt !");
				die;
		}
*/		
		// Ohne Oberfl�che l�uft nichts
		
		if (!file_exists($sGuipath)) {
				Error("Fehler: Oberfl�chendateien (GUI) nicht verf�gbar.");
				die;
		}

		// Existiert �berhaupt eine Datenbank ? Wenn nicht, wohl erster Start
		
		if (!file_exists($sDatabase)) {
				InitDB();
		}
		
		// Datenbank existiert - geht Zugriff ?
		
		$hTestHandle = secure_sqlite_open($sDatabase, $sError);
		if ($hTestHandle == false) {
				Error("Fehler bei Datenbankzugriff: " . $sError);
				die;
		}
		secure_sqlite_close($hTestHandle);
		
		IPSperre();
}
