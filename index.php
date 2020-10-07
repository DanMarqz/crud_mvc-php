<?php

	// vincula los archivos usando la función require_once
	require_once('controllers/template.controller.php');
	require_once('controllers/forms.controller.php');

	// Instacia la clase
	$template = new TemplateController();

	// ejecuta los métodos de la clase
	$template -> ctrGetTemplate();