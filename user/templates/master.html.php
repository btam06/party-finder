<?php namespace Inkwell\HTML; ?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?= $this('title') ?: 'lookingfor.party' ?></title>
		<link rel="stylesheet" href="/css/foundation.min.css" type="text/css" />
	</head>
	<body>
		<?php $this->insert('content') ?>
	</body>
</html>
