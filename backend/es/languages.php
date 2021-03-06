<?php
/**
 * =======================================
 * ###################################
 * SWIFT Framework
 *
 * @package	SWIFT
 * @author	Kayako Infotech Ltd.
 * @copyright	Copyright (c) 2001-2009, Kayako Infotech Ltd.
 * @license	http://www.kayako.com/license
 * @link		http://www.kayako.com
 * @filesource
 * ###################################
 * =======================================
 */

$__LANG = array (
	// ======= BEGIN V4 LOCALES =======
	'languageisenabled' => 'Activado?',
	'desc_languageisenabled' => 'Si está activado, el idioma será visible en el Centro de Soporte y en las opciones del perfil de usuario.',
	'titlemissingphrases' => 'Faltan frases',
	'msgmissingphrases' => SWIFT_PRODUCT . ' ha detectado que faltan "%d" frases, es recomendable que actualice el idioma seleccionado e inserte las frases inexistentes.',
	'tabimport' => 'Importar',
	'tabexport' => 'Exportar',
	'languagemen' => 'Idioma',
	'export' => 'Exportar',
	'import' => 'Importar',
	'squicksearch' => 'Búsqueda rápida',
	'titleupdatedlangphrases' => 'Frases actualizadas',
	'msgupdatedlangphrases' => 'Se han actualizado las frases del idioma "%s"',
	'titlevcfailed' => 'Error comprobación de versión',
	'msgvcfailed' => 'El paquete de idioma seleccionado se creó usando una versión anterior de '.SWIFT_PRODUCT .'. Puede forzar la importación o fusión estableciendo la opción "Ignorar versión" como "Sí".',
	'titlelangimpfailed' => 'Imposible Importar/Fusionar',
	'msglangimpfailed' => SWIFT_PRODUCT.' no ha podido importar/fusionar el archivo de idioma. Por favor revise que el archivo XML no tenga etiquetas mal formadas o datos corruptos.',
	'tabsearch' => 'Buscar',
	'tabgeneral' => 'General',
	'flagicon' => 'Icono de bandera',
	'desc_flagicon' => 'Especifique la URL de la imagen de icono de bandera. Las banderas por defecto se guardan en el directorio themes/global/flags. Puede usar las siguientes variables:<br><b>{$themepath}</b> - Variable del directorio de temas<br> - Ejemplo: {$themepath}us.gif',
	'wineditlanguage' => 'Editar idioma: %s',
	'phrases' => 'Frases',
	'tabphrases' => 'Frases',
	'insertphrase' => 'Insertar frase',
	'desc_insertphrase' => '',
	'tabgeneral' => 'General',
	'phraselanguage' => 'Idioma de frase',
	'desc_phraselanguage' => 'Especifique el idioma al que se debe añadir la frase',
	'titlemergelang' => 'Fusión de idiomas correcta',
	'msgmergelang' => 'Se ha fusionado correctamente el XML con el idioma "%s".',
	'titleimportlang' => 'Importación de idioma correcta',
	'msgimportlang' => 'Se ha importado el XML de idioma, los detalles del nuevo idioma se muestran a continuación:',
	'titlephraseinsert' => 'Insertada frase de idioma "%s"',
	'msgphraseinsert' => 'Se ha insertado correctamente la frase "%s" en la tabla de idiomas.<br /><b>Idioma: </b>%s<br /><b>Código frase:</b> %s<br /><b>Sección frase:</b> %s<br /><b>Valor frase:</b> %s',
	'titlephrasedel' => 'Eliminada frase de idioma',
	'msgphrasedel' => 'Se ha eliminado correctamente la frase de idioma "%s" desde la tabla de idiomas',
	'titleinsertlang' => 'Insertado idioma: <b>%s</b>',
	'msginsertlang' => 'Se ha insertado correctamente el idioma <b>"%s"</b>, los detalles se muestran a continuación:',
	'titleupdatelang' => 'Actualizado idioma: <b>%s</b>',
	'msgupdatelang' => 'Se ha actualizado correctamente el idioma <b>"%s"</b>, los detalles se muestran a continuación:',
	'titledellang' => 'Eliminado(s) "%d" idioma(s)',
	'msgdellang' => 'Se han eliminado correctamente los siguientes idiomas.<br>',
	'compare' => 'Comparar',
	'restorelanguage' => 'Restaurar idioma',
	'restoreconfirm' => '¿Está seguro de que desea restaurar las frases de este idioma a su valor por defecto??\nLa restauración limpia todas las traducciones de las frases para ese idioma.',
	'titlerestorephrase' => 'Restauradas frases de idioma',
	'msgrestorephrase' => 'Se han restaurado correctamente todas las frases del idioma "%s" a su valor por defecto.',
	'diagnostics' => 'Diagnósticos',
	'tabmissingphrases' => 'Frases que faltan',
	'diagnosticslang1' => 'Idioma',
	'desc_diagnosticslang1' => 'Por favor seleccione el idioma principal para poder realizar la comparación.',
	'diagnosticslang2' => 'Comparar con',
	'desc_diagnosticslang2' => 'Por favor seleccione el idioma con el que se compararán las frases que faltan. '.SWIFT_PRODUCT.' creará un listado de las frases ausentes respecto del idioma principal.',
	'restorephrases' => 'Restaurar frases',
	'desc_restorephrases' => '',
	'tabrestorephrases' => 'Restaurar frases',
	'lookup' => 'Buscar',
	'modified' => 'Modificado',
	'upgraderevert' => 'Necesaria Restauración por actualización',
	'notmodified' => 'No modificado',
	'titlenooptsel' => 'Seleccionado un tipo de frase no válido',
	'msgnooptsel' => 'Es necesario al menos un tipo de frase para filtrar los resultados.',
	'restore' => 'Restaurar',
	'titleunabledelmasterlang' => 'Imposible eliminar',
	'msgunabledelmasterlang' => SWIFT_PRODUCT.' no ha podido eliminar el idioma principal. Puede cambiar el idioma que usa el grupo por defecto, pero no se permite eliminar el idioma principal.',
	'phrasesection' => 'Sección',
	'desc_phrasesection' => 'Introduzca la sección de idioma en la que se guardará la nueva frase. Para más información sobre secciones en paquetes de idioma consulte el <a target="_blank" href="https://support.kayako.com/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=251">artículo de la biblioteca Kayako</a>. Se recomienda que esto se mantenga en la sección global "por defecto" excepto que quiera añadirlo a una plantilla concreta.',
	'phrasestatus' => 'Estado de frase',
	'restorelanguage2' => 'Restaurar frases de idioma: %s',
	'restorelanguage3' => 'Idioma: %s',
	'titlerestorephrases' => 'Restauradas "%d" frases',
	'msgrestorephrases' => 'Se han restaurado correctamente las siguientes frases:',
	'phrasemissing' => '-- FALTA --',
	// ======= END V4 LOCALES =======

	// ======= BEGIN v3 IMPORT =======
	'section' => 'Sección',
	// ======= END v3 IMPORT =======

	'languages' => 'Idiomas',
	'languagedetails' => 'Detalles de idioma',
	'desc_languages' => '',
	'languagelist' => 'Lista de idiomas',
	'languagetitle' => 'Nombre de idioma',
	'desc_languagetitle' => 'Introduzca un nombre para el idioma. <i>Ejemplo: "Inglés (U.S.)"</i>',
	'authorname' => 'Autor',
	'desc_authorname' => 'Introduzca el nombre del autor.',
	'isdefault' => 'Por defecto',
	'desc_isdefault' => 'Si se activa, este idioma será el idioma por defecto',
	'textdirection' => 'Dirección del texto',
	'desc_textdirection' => 'Seleccione la dirección del texto en el idioma.',
	'isocode' => 'Código ISO',
	'desc_isocode' => 'Introduzca el código ISO para el idioma. <a href="http://www.iso.org/iso/english_country_names_and_code_elements" target="_blank">Pulse aquí</a> para ver una lista de códigos ISO.<br><br><b>Ejemplos:</b><br><i>en-us:</i> Inglés (U.S.)<br><i>ru:</i> Russian<br><i>fr:</i> French<br><i>es:</i> Español',
	'languagecharset' => 'Juego de caracteres',
	'desc_languagecharset' => 'Introduzca la codificación HTML por defecto. Use <i>UTF-8</i> para idiomas que requieren Unicode.',
	'rtl' => 'Derecha a izquierda',
	'ltr' => 'Izquierda a derecha',
	'displayorder' => 'Orden de visualización',
	'desc_displayorder' => 'Si hay múltiples idiomas en un área, se ordenarán usando este orden de visualización (ascendente).',
	'insertlanguage' => 'Insertar idioma',
	'phrases' => 'Frases',
	'invalidlanguageid' => 'ID de idioma no válido!',
	'languagedeleteconfirmation' => 'Idioma "%s" eliminado correctamente',
	'languageinsertconfirmation' => 'Idioma "%s" insertado correctamente',
	'languageupdateconfirmation' => 'Idioma "%s" actualizado correctamente',
	'importexport' => 'Importar/Exportar',
	'exportlanguage' => 'Exportar idioma',
	'explanguage' => 'Idioma a exportar',
	'desc_explanguage' => 'Seleccione el idioma que desea exportar.',
	'exportxml' => 'Exportar',
	'importlanguage' => 'Importar idioma',
	'importxml' => 'Importar',
	'languagefile' => 'Archivo XML a importar',
	'desc_languagefile' => 'Seleccione el paquete de idioma que desea importar.',
	'mergewith' => 'Método de importación',
	'desc_mergewith' => '<i>Crear nuevo idioma:</i> Crea un nuevo paquete de idioma basado en el archivo XML.<br><br><i>Seleccionar idioma:</i> Fusiona las frases encontradas en el archivo XML con las del idioma especificado.',
	'ignoreversion' => 'No comprobar versión',
	'desc_ignoreversion' => 'Elija si desea que '. SWIFT_PRODUCT .' ignore la información de versión en el archivo de idioma.  Se recomienda qe no importe archivos de paquete de idioma diseñados para una versión anterior de '. SWIFT_PRODUCT .'.',
	'createnewlanguage' => '-- Crear nuevo idioma --',
	'languageimportconfirmation' => 'Idioma "%s" importado correctamente',
	'managephrases' => 'Administrar frases',
	'code' => 'Identificador',
	'value' => 'Texto',
	'phraseupdateconfirm' => 'Frases actualizadas correctamente',
	'managephrases' => 'Administrar frases',
	'searchphrases' => 'Buscar frases',
	'languagesearching' => 'Búsqueda en curso...',
	'search' => 'Buscar',
	'codetext' => 'Identificador y texto',
	'query' => 'Términos a buscar',
	'desc_query' => 'Introduzca los términos a buscar.',
	'searchtype' => 'Tipo de búsqueda',
	'desc_searchtype' => '<i>Identificador y texto:</i> Busca en el texto de la frase y en el identificador.<br><br><i>Identificador:</i> Busca únicamente en el identificador de la frase.',
	'searchlanguage' => 'Buscar en idioma',
	'desc_searchlanguage' => 'Seleccione el idioma en el que desea buscar.',
	'versioncheckfailed' => 'ERROR: La versión es errónea. El paquete de idioma se creó para una versión anterior de '. SWIFT_PRODUCT,
	'addphrase' => 'Insertar frase',
	'changelanguage' => 'Cambiar idioma',
	'desc_phrasecode' => 'Por favor introduzca un identificador único para la nueva frase. <i>Ejemplo: "minuevafrase"</i>.',
	'desc_phrasevalue' => 'Introduzca el contenido de la frase. Puede usar HTML.',
	'phraseinsertconfirm' => 'Frase "%s" insertada correctamente',
	'languagejump' => 'Cambiar idioma',
	'language' => 'Idioma objetivo',
	'deletephrase' => 'Eliminar frase',
	'phrasedeleteconfirm' => 'Frase "%s" eliminada correctamente',
	'phrasedeletepopup' => '¿Está seguro de que desea eliminar esta frase? Eliminar una frase podría cambiar la forma en que se muestran las plantillas!',
	'phrasedelfailure' => 'ERROR: Imposible eliminar frase',
	'novalue' => '[No hay valor maestro disponible]',
);
?>