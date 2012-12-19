<?php

// Beteiligte

function BetArt()
{
		global $sDatabase;
		$hDatabase = secure_sqlite_open($sDatabase);
		
		$aParam['_error_']   = '';
		$aParam['_display_'] = 'none';
		
		// will jemand Eintr�ge l�schen ?
		
		if (isset($_POST['loeschen'])) {
				if (isset($_POST['eintraege'])) {
						$aQuery = secure_sqlite_array_query($hDatabase, "SELECT COUNT(*) FROM beteiligtenart");
						if ($aQuery[0]['COUNT(*)'] > sizeof($_POST['eintraege'])) {
								foreach ($_POST['eintraege'] as $iSelected) {
										$aQuery = secure_sqlite_array_query($hDatabase, "SELECT azID FROM beteiligte WHERE beteiligtenartID='" . (int) $iSelected . "' LIMIT 1");
										if (empty($aQuery)) {
												secure_sqlite_query($hDatabase, "DELETE FROM beteiligtenart WHERE id='" . (int) $iSelected . "'");
										} else {
												$aParam['_error_']   = "Beteiligter ist einer Akte zugeordnet !";
												$aParam['_display_'] = 'block';
										}
								}
						} else {
								$aParam['_error_']   = "Es d�rfen nicht alle Beteiligtenarten gel�scht werden !";
								$aParam['_display_'] = 'block';
						}
				} else {
						$aParam['_error_']   = "W�hlen Sie zu l�schende Beteiligte aus !";
						$aParam['_display_'] = 'block';
				}
		}
		
		// will jemand Beteiligten hinzuf�gen ?
		
		if (isset($_POST['hinzufuegen'])) {
				$sGebiet = $_POST['betname'];
				if ($sGebiet != "") {
						$aQuery = secure_sqlite_array_query($hDatabase, "SELECT arten FROM beteiligtenart WHERE arten='" . $sGebiet . "'");
						if (empty($aQuery)) {
								secure_sqlite_query($hDatabase, "INSERT INTO beteiligtenart (arten) VALUES ('" . $sGebiet . "')");
						} else {
								$aParam['_error_']   = "Beteiligter existiert bereits !";
								$aParam['_display_'] = 'block';
						}
				} else {
						$aParam['_error_']   = "Bitte geben Sie eine Bezeichnung an !";
						$aParam['_display_'] = 'block';
				}
		}
		
		$aLogs = secure_sqlite_array_query($hDatabase, "SELECT * FROM beteiligtenart ORDER BY arten");
		secure_sqlite_close($hDatabase);
		
		if (!sizeof($aLogs) == 0) {
				// gibt es �berhaupt Eintr�ge ?
				for ($t = 0; $t < sizeof($aLogs); $t++) {
						$aNr[$t]      = $aLogs[$t]['id'];
						$aEintrag[$t] = $aLogs[$t]['arten'];
				}
				$aParam['_id_']     = $aNr;
				$aParam['_bettyp_'] = $aEintrag;
				if (sizeof($aNr) > 30) {
						$aParam['_max_'] = 30;
				} else {
						$aParam['_max_'] = sizeof($aNr);
				}
		} else {
				$aParam['_id_']     = null;
				$aParam['_bettyp_'] = 'Keine Eintr�ge vorhanden !';
				$aParam['_max_']    = 1;
		}
		
		ShowGui('betart.html', $aParam);
}
