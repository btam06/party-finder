<?php

	return Affinity\Config::create([
		'connections' => [
			'default' => [
				'driver'   => 'postgresql', // mssql, mysql, postgresql
				'database' => 'party_finder',
				'username' => $app->getEnvironment('DB_USER', 'postgres'),
				'password' => $app->getEnvironment('DB_PASS', NULL),
				'host'     => $app->getEnvironment('DB_HOST', 'localhost')
			]
		]
	]);
