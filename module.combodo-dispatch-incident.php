<?php

//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-dispatch-incident/1.2.3',
	[
		// Identification
		//
		'label' => 'Dispatch of Incidents',
		'category' => 'business',

		// Setup
		//
		'dependencies' => [
			'itop-incident-mgmt-itil/3.0.0',
			'itop-profiles-itil/3.0.0',
		],
		'mandatory' => false,
		'visible' => true,
		'uninstallable' => 'no',

		// Components
		//
		'datamodel' => [
			'model.combodo-dispatch-incident.php',
		],
		'webservice' => [

		],
		'data.struct' => [
			// add your 'structure' definition XML files here,
		],
		'data.sample' => [
			// add your sample data XML files here,
		],

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => [
			// Module specific settings go here, if any
		],
	]
);
