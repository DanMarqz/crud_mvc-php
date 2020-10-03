<?php

	// vinculamos los archivos usando la función predeteminada require_once
	require_once('controllers/template.controller.php');
	require_once('controllers/forms.controller.php');

	// instanciamos la clase
	$template = new TemplateController();

	// ejecuto los métodos de la clase
	$template -> ctrGetTemplate();