<?php

/*
 * Squelette : ../plugins-dist/mots/prive/style_prive_plugin_mots.html
 * Date :      Mon, 08 Apr 2019 18:58:26 GMT
 * Compile :   Mon, 16 Sep 2019 10:25:25 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/mots/prive/style_prive_plugin_mots.html
// Temps de compilation total: 0.098 ms
//

function html_5f480e6d7d32d925994928bcb5a313c4($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
'<'.'?php header("X-Spip-Cache: 360000"); ?'.'>'.'<'.'?php header("Cache-Control: max-age=360000"); ?'.'>'.'<'.'?php header("X-Spip-Statique: oui"); ?'.'>' .
'<'.'?php header(' . _q('Content-Type: text/css; charset=iso-8859-15') . '); ?'.'>' .
'<'.'?php header(' . _q('Vary: Accept-Encoding') . '); ?'.'>.mots .groupe_mots .groupe_mots-edit-24 { margin-' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'left', null),true)) .
': 30px; }
.mots .groupe_mots #wysiwyg { clear: none; }');

	return analyse_resultat_skel('html_5f480e6d7d32d925994928bcb5a313c4', $Cache, $page, '../plugins-dist/mots/prive/style_prive_plugin_mots.html');
}
?>