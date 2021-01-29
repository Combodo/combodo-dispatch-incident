<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Class:Incident/Attribute:status/Value:dispatched' => 'Encaminhado',
	'Class:Incident/Attribute:status/Value:redispatched' => 'Reencaminhado',
	'Class:Incident/Stimulus:ev_dispatch' => 'Encaminhar para uma equipe',
	// Menu entry
	'Menu:Incident:IncidentsDispatchedToMyTeams' => 'Incidentes encaminhados para minhas equipes',	
	'Menu:Incident:IncidentsDispatchedToMyTeams+' => 'Incidentes abertos para alguma de minhas equipes',	
));

//
// Class: Incident
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Incident/Attribute:status' => 'Estado',
	'Class:Incident/Attribute:status+' => '',
	'Class:Incident/Attribute:tto' => 'TTO',
	'Class:Incident/Attribute:tto+' => 'Tempo de atribuição',
	'Class:Incident/Attribute:ttr' => 'TTR',
	'Class:Incident/Attribute:ttr+' => 'Tempo de resolução',
));
