<?php

/*
 * Squelette : ../prive/objets/editer/traductions.html
 * Date :      Mon, 08 Apr 2019 18:48:14 GMT
 * Compile :   Mon, 16 Sep 2019 10:26:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/objets/editer/traductions.html
// Temps de compilation total: 0.638 ms
//

function html_484d5e2cfd156e7d79246e4b2698af7b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
vide($Pile['vars'][$_zzz=(string)'table'] = interdire_scripts(table_objet_sql(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)))) .
(((in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('multi_objets',null,false):''),',')))) OR (in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),',')))))  ?
		(' ' . (	'
<div class="ajax">
	' .
	executer_balise_dynamique('FORMULAIRE_TRADUIRE',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'retour', null), ''),true)),in_any(table_valeur($Pile["vars"], (string)'table', null),interdire_scripts(filtre_explode_dist((include_spip('inc/config')?lire_config('gerer_trad_objets',null,false):''),',')))),
	array('../prive/objets/editer/traductions.html','html_484d5e2cfd156e7d79246e4b2698af7b','',5,$GLOBALS['spip_lang'])) .
	'</div>
')) :
		'') .
'
');

	return analyse_resultat_skel('html_484d5e2cfd156e7d79246e4b2698af7b', $Cache, $page, '../prive/objets/editer/traductions.html');
}
?>