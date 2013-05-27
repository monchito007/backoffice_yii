<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
Yii::setPathOfAlias('chartjs', dirname(__FILE__).'/../extensions/yii-chartjs');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
        'name'=>'Panell Administració LocalitzadorWEB',
	'language'=>'es',
	//'sourceLanguage'=>'en',
	//'sourceLanguage'=>'00',
	'charset'=>'utf-8',
	//'name'=>'My Web Application',
    /*
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=localitzador',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'latin1_swedish_ci',
        ),
    */
    
	// preloading 'log' component
	'preload'=>array(
                'log',
                'chartjs',
                    ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
                'application.extensions.jqBarGraph.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'123456',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
                'importcsv'=>array(
                    'path'=>'upload/importCsv/', // path to folder for saving csv file and file with import params
                ),
               // 'Estadistiques',//View Estadístiques.
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>false,
                        #'urlSuffix'=>'.asp',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
                    'connectionString' => 'mysql:host=localhost;dbname=localitzador',
                    'emulatePrepare' => true,
                    'username' => 'monchito007',
                    'password' => 'password',
                    'charset' => 'utf8',
                ),
                'coreMessages'=>array(
                    
                    'basePath'=>'protected/messages',
                    
                ),
                    'messages'=>array(
                    'onMissingTranslation'=>array('GMensajes','getNecesitoTraduccion')
                ),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
            /*
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
            */
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);