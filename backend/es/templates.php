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
	// ======= BEGIN v4 LOCALES =======
	'titlepersonalization' => 'Información actualizada',
	'msgpersonalization' => SWIFT_PRODUCT . ' ha actualizado la información de personalización. Deberá recargar la página para ver los cambios en el logotipo de la cabecera del panel de control (si ha habido alguno).',
	'tabpersonalize' => 'Personalizar',
	'generalinformation' => 'Información general',
	'companyname' => 'Nombre de organización',
	'desc_companyname' => 'Este es el nombre que se usará como marca en el centro de soporte de usuarios y en los emails salientes.',
	'defaultreturnemail' => 'Dirección email de retorno por defecto',
	'desc_defaultreturnemail' => 'Esta es la dirección de email que se usará como remitente por defecto en el correo saliente. Esta dirección debe corresponder a una cola de email activa para poder aceptar respuestas de usuarios.',
	'logoimages' => 'Imágenes de cabecera',
	'supportcenterlogo' => 'Cabecera de centro de soporte',
	'desc_supportcenterlogo' => 'Puede actualizar la imagen de la cabecera del centro de soporte seleccionando una nueva imagen (gif/jpeg/png). Altura máxima: 70 px',
	'stafflogo' => 'Cabecera del panel de control de operadores/Admin/PDA',
	'desc_stafflogo' => 'Puede personalizar la imagen de la cabecera del panel de control de operadores/administradores/PDA que verán los operadores seleccionando un nuevo archivo (gif/jpeg/png). Altura máxima de la imagen: 70 px<br /><br /><i>NOTA: Necesitará forzar la recarga de la página (Ctrl+F5 o Comando+R) para ver los resultados.</i>',
	'personalize' => 'Personalizar',
	'changegroup' => 'Cambiar grupo',
	'desc_importexport' => '',
	'tabexport' => 'Exportar',
	'export' => 'Exportar',
	'tabimport' => 'Importar',
	'import' => 'Importar',
	'result' => 'Resultado',
	'titleisenabledprob' => 'Imposible continuar',
	'msgisenabledprob' => 'No puede deshabilitar el grupo de plantillas por defecto.',
	'useloginshare' => 'Usar LoginShare',
	'desc_useloginshare' => 'Si está habilitado, las credenciales de los usuarios que intenten iniciar sesión en este grupo de plantillas se comprobarán usando la API de LoginShare.',
	'exporthistory' => 'Exportar historial de plantillas',
	'desc_exporthistory' => 'Si está activado, '. SWIFT_PRODUCT.' exporta el historial de plantillas completo junto con el contenido de las plantillas originales.',
	'mergeoptions' => 'Opciones de fusión',
	'addtohistory' => 'Añadir al historial',
	'desc_addtohistory' => 'Si se activa, las plantillas antiguas se guardarán en el historial como referencia del grupo de plantillas fusionado.',
	'titleversioncheckfail' => 'La comprobación de versión ha fallado',
	'msgversioncheckfail' => SWIFT_PRODUCT. ' no puede importar el paquete de plantillas porque fue creado usando una versión antigua de '.SWIFT_PRODUCT,
	'desc_restoretemplates' => '',
	'tabgeneral' => 'General',
	'restoretemplatestatus' => 'Estado de plantilla',
	'restoretgroup' => 'Grupo de plantillas: %s',
	'tabrestore' => 'Restaurar plantillas',
	'restoresubmitquestion' => 'Está seguro de que desea restaurar las plantillas seleccionadas a su estado original?\nEsta acción es irreversible; perderá todas las modificaciones realizadas en las mismas.',
	'titlerestoretemplates' => 'Restauradas "%d" plantillas',
	'msgrestoretemplates' => 'Se han restaurado correctamente las siguientes plantillas:',
	'desc_diagnostics' => '',
	'tabdiagnostics' => 'Diagnósticos',
	'desc_search' => '',
	'tabsearch' => 'Buscar plantillas',
	'tabplugins' => 'Plugins',
	'ls_module' => 'Plugins LoginShare',
	'wineditls' => 'Editar plugin LoginShare: %s',
	'tabsettings' => 'Configuración',
	'invalidloginshareplugin' => 'Plugin LoginShare no válido. Por favor, asegúrese de que el plugin existe en la base de datos.',
	'lsnotitle' => 'No hay opciones disponibles',
	'lsnomsg' => 'No hay configuración disponible para el plugin LoginShare <b>"%s"</b>.',
	'loginsharefile' => 'Archivo XML LoginShare',
	'desc_loginsharefile' => 'Seleccione el archivo XML LoginShare',
	'titlenoelevatedls' => 'Imposible importar el XML LoginShare',
	'msgnoelevatedls' => SWIFT_PRODUCT.' no puede importar el archivo XML LoginShare ya que es necesario iniciar sesión con una cuenta de operador con privilegios especiales. Puede añadir su usuario a la lista de usuarios con privilegios especiales en el archivo config/config.php del paquete.',
	'titlelsversioncheckfail' => 'La comprobación de versión ha fallado',
	'msglsversioncheckfail' => SWIFT_PRODUCT. ' no ha podido importar el plugin LoginShare Plugin porque fue creado para una versión anterior de '.SWIFT_PRODUCT,
	'titlelsinvaliduniqueid' => 'Error de ID único duplicado',
	'msglsinvaliduniqueid' => SWIFT_PRODUCT .' no puede importar el plugin LoginShare debido a un conflicto de ID único. Esto habitualmente significa que el plugin ya ha sido importado a la base de datos.',
	'titlelsinvalidxml' => 'Archivo XML no válido',
	'msglsinvalidxml' => SWIFT_PRODUCT .' no puede importar el plugin LoginShare porque el archivo XML está corrupto o contiene datos no válidos.',
	'titlelsimported' => 'Plugin LoginShare importado correctamente',
	'msglsimported' => SWIFT_PRODUCT .' ha importado correctamente el plugin LoginShare %s.',
	'titlelsdeleted' => 'Eliminado plugin LoginShare',
	'msglsdeleted' => 'Se ha eliminado correctamente el Plugin LoginShare "%s" de la base de datos.',
	'groupusername' => 'Nombre de usuario',
	'desc_groupusername' => 'Introduzca el nombre de usuario de este grupo de plantillas. Esto es necesario únicamente si se habilita la protección con contraseña.',
	'isenabled' => 'Está activado?',
	'desc_isenabled' => 'Active o desactive el uso de este grupo de plantillas activando o desactivando esta opción.',
	'titlepwnomatch' => 'Contraseña no válida',
	'msgpwnomatch' => 'La contraseña especificada para el grupo de plantillas no coincide.',
	'titleinvalidgrouptitle' => 'Nombre de grupo de plantillas no válido',
	'msginvalidgrouptitle' => 'Sólo se permiten caracteres alfanuméricos en el nombre de los grupos de plantillas',
	'titlegrouptitleexists' => 'Nombre de grupo no válido',
	'msggrouptitleexists' => 'Hay otro grupo de plantillas con el mismo nombre; por favor, seleccione un nombre diferente.',
	'winedittemplategroup' => 'Editar grupo de plantillas: %s',
	'tabpermissions' => 'Permisos',
	'titletgroupupdate' => 'Actualizado el grupo de plantillas "%s"',
	'msgtgroupupdate' => 'Se ha actualizado correctamente el grupo de plantillas "%s".',
	'titletgroupinsert' => 'Insertado el grupo de plantillas "%s"',
	'msgtgroupinsert' => 'Se ha insertado correctamente el grupo de plantillas "%s" en la base de datos.',
	'titletgroupnodel' => 'Imposible eliminar el/los grupo(s) de plantillas',
	'msgtgroupnodel' => SWIFT_PRODUCT . ' no puede eliminar el/los siguiente(s) grupo(s) de plantillas maestro(s) de la base de datos:',
	'titletgroupdel' => 'Eliminados "%d" grupos de plantillas',
	'msgtgroupdel' => 'Se han eliminado correctamente los siguientes grupos de plantillas.',
	'titletgrouprestorecat' => 'Restaurada la categoría de grupo de plantillas',
	'msgtgrouprestorecat' => 'Se ha restaurado correctamente la categoría "%s" del grupo de plantillas "%s" (%s)',
	'titletgrouprestore' => 'Restaurados "%d" grupos de plantillas',
	'msgtgrouprestore' => 'Se han restaurado correctamente los siguientes grupos de plantillas.',
	'expandcontract' => 'Expandir/Contraer',
	'tgroupjump' => 'Grupo de plantillas: %s',
	'tabhistory' => 'Historial',
	'templateversion' => 'Versión de plantilla',
	'desc_templateversion' => '',
	'saveasnewversion' => 'Guardar como nueva versión',
	'titletemplaterestore' => 'Plantilla "%s" restaurada',
	'msgtemplaterestore' => 'Se ha restaurado correctamente la plantilla "%s" a su contenido por defecto.',
	'titletemplateupdate' => 'Plantilla "%s" actualizada',
	'msgtemplateupdate' => 'Se ha actualizado correctamente la plantilla "%s"',
	'tabedittemplate' => 'Plantilla: %s (%s)',
	'titlenohistory' => 'No hay historial disponible',
	'msgnohistory' => SWIFT_PRODUCT.' no dispone de registro de historial para la plantilla "%s".',
	'historydescription' => 'Descripción del historial',
	'historyitemlist' => '%s: %s (%s) Notas: <i>%s</i>',
	'system' => '(Sistema)',
	'historyitemcurrent' => '%s: <i><b>Actual</b></i> (%s)',
	'compare' => 'Comparar',
	'current' => 'Actual',
	'notcurrenttemp' => 'Versión antigua',
	'exportdiff' => 'Exportar Diff (Formato unificado)',
	'tabcomparison' => 'Comparación',
	'changelognotes' => 'Notas de cambios',
	'desc_changelognotes' => '',
	'none' => 'Ninguno',
	'inserttemplate' => 'Insertar plantilla',
	'inserttgroup' => 'Grupo de plantillas',
	'desc_inserttgroup' => 'Por favor, seleccione el grupo de plantillas para esta plantilla.',
	'restoreconfirmaskcat' => 'Está seguro de que desea restaurar las plantillas de esta categoría?\nEsta acción es irreversible; la restauración de las plantillas podría provocar la péridida de todos los cambios hechos en el interfaz de usuario!',
	'inserttemplatetgroup' => 'Grupo de plantillas',
	'inserttemplatetcategory' => 'Categoría de plantillas',
	'inserttemplatename' => 'Nombre de plantilla',
	'desc_inserttemplatename' => 'Introduzca el nombre de la plantilla. No se permiten caracteres especiales.',
	'titleinserttemplatedupe' => 'Conflicto de nombre de plantilla',
	'msginserttemplatedupe' => 'Por favor, especifique un nombre de plantilla diferente, ya que existe otra plantilla en el grupo con ese nombre.',
	'titleinserttemplatechar' => 'Nombre de plantilla no válido',
	'msginserttemplatechar' => 'Por favor, especifique un nombre de plantilla sin caracteres especiales ni espacios para poder continuar.',
	'titleinserttemplate' => 'Insertada plantilla "%s"',
	'msginserttemplate' => 'Se ha insertado correctamente la plantilla "%s" en el grupo de plantilla "%s"',
	'titletemplatedel' => 'Plantilla eliminada',
	'msgtemplatedel' => 'Se ha eliminado correctamente la plantilla "%s" de la base de datos.',
	'titletemplateimportfailed' => 'Imposible importar las plantillas',
	'msgtemplateimportfailed' => SWIFT_PRODUCT . ' no ha podido importar las plantillas del paquete %s. Por favor, revise la integridad del archivo del paquete.',
	'titlelsupdate' => 'Actualización LoginShare',
	'msglsupdate' => 'Se ha actualizado la configuración LoginShare "%s"',
	'titletgroupmerge' => 'Grupo de plantillas "%s" fusionado con el archivo importado',
	'msgtgroupmerge' => SWIFT_PRODUCT . ' ha fusionado las actualizaciones del archivo de plantillas "%s" con el grupo de plantillas "%s"',
	'titletgroupimport' => 'Importado grupo de plantillas "%s"',
	'msgtgroupimport' => SWIFT_PRODUCT . ' ha importado las plantillas del archivo de plantillas "%s" al grupo de plantillas "%s"',
	'tabsettings_tickets' => 'Configuración: Tickets',
	'tabsettings_livechat' => 'Configuración: Chat',
	// ======= END v4 LOCALES =======

	'templates' => 'Plantillas',

	// ======= IMPORT/EXPORT =======
	'importexport' => 'Importar/Exportar',
	'exporttemplates' => 'Exportar plantillas',
	'exporttgroup' => 'Grupo de plantillas',
	'desc_exporttgroup' => 'Seleccione el grupo desde el que se exportarán las plantillas.',
	'exportxml' => 'Exportar XML',
	'filename' => 'Nombre de archivo',
	'desc_filename' => 'Especifique el nombre de archivo de exportación.',
	'exportoptions' => 'Opciones de exportación',
	'desc_exportoptions' => 'Seleccione las opciones de exportación. Si selecciona "Exportar sólo modificaciones", sólo se exportarán las plantillas modificadas o que necesiten un reseteo por actualización.',
	'exportalltemplates' => 'Exportar todas las plantillas',
	'exportmodifications' => 'Exportar sólo modificaciones',
	'importtemplates' => 'Importar plantillas',
	'templatefile' => 'Archivo XML de plantilla',
	'desc_templatefile' => 'Upload the Import XML File.',
	'createnewgroup' => '-- Create New Template Group --',
	'mergewith' => 'Merge With',
	'desc_mergewith' => 'You can merge changes from the import file with an Existing Group or Create a New Template Group.',
	'ignoreversion' => 'Ignore Version',
	'desc_ignoreversion' => 'If selected, the import file version will be ignored. It is recommended that you do not enable this option as it can result in problems in the Client Support Center.',
	'importxml' => 'Import XML',
	'tgroupmergeconfirm' => 'Template Group "%s" merged with import file',
	'versioncheckfailed' => 'Version Check Failed: The uploaded template pack was created using older version of '.SWIFT_PRODUCT,
	'tgroupnewimportconfirm' => 'Template Group "%s" imported successfully',

	// ======= INSERT GROUP =======
	'insertemplategroup' => 'Insert Template Group',
	'templategroupdetails' => 'Template Group Details',
	'tgrouptitle' => 'Template Group Title',
	'desc_tgrouptitle' => 'Enter the Template Group Title. The Title may not contain symbols or spaces.',
	'companyname' => 'Company Name',
	'desc_companyname' => 'Enter the default Company Name to associate with this Template Group.',
	'generaloptions' => 'General Options',
	'defaultlanguage' => 'Default Language',
	'desc_defaultlanguage' => 'Select the default language for this Template Group. Clients will be presented with an option to select their own language.',
	'usergroups' => 'Default User Groups',
	'guestusergroup' => 'Guest User Group',
	'desc_guestusergroup' => 'Specify the default Guest User Group. Permissions from this Group will apply to all visitors.',
	'regusergroup' => 'Registered User Group',
	'desc_regusergroup' => 'Select the registered User Group. Permissions from this Group will apply to all registered users.',
	'passwordprotection' => 'Password Protection',
	'enablepassword' => 'Enable Password Protection',
	'desc_enablepassword' => 'Toggle Password Protection for this Group. '.SWIFT_PRODUCT. ' uses the HTTP Authentication method if Password Protection is enabled.',
	'password' => 'Password',
	'desc_password' => 'Enter the Password for this Template Group. This is only required if Password Protection is enabled above.',
	'passwordconfirm' => 'Password (Confirm)',
	'desc_passwordconfirm' => 'Enter Password to Confirm',
	'restrictgroups' => 'Restrict Users Group',
	'desc_restrictgroups' => 'If enabled, only the Users under the specified Registered User Group will be able to login into the Support Center for this Template Group.',
	'passworddontmatch' => 'ERROR: Passwords don\'t match',
	'invalidgrouptitle' => 'ERROR: Only alphanumeric characters can be used in the Template Group Title',
	'copyfrom' => 'Copy Templates From',
	'desc_copyfrom' => 'Select the Template Group from which '.SWIFT_PRODUCT.' will copy the Templates.',
	'grouptitleexists' => 'ERROR: Invalid Group Title. There is another Template Group with the same title; please choose a different title.',
	'promptticketpriority' => 'Prompt for Ticket Priority?',
	'desc_promptticketpriority' => 'If enabled, the user will be prompted to select a priority during ticket creation.',
	'prompttickettype' => 'Prompt for Ticket Type?',
	'desc_prompttickettype' => 'If enabled, the user will be prompted to select a ticket type during the creation.',
	'tickettype' => 'Default Ticket Type',
	'desc_tickettype' => 'Select the Default Ticket Type for this Template Group. All Tickets created will have their type set to the selected value.',
	'ticketstatus' => 'Default Ticket Status',
	'desc_ticketstatus' => 'Select the Default Ticket Status for this Template Group. All Tickets created will have their status set to the selected value. Additionally, any Client Replies will result in the status being reset to the default status for the Template Group.',
	'ticketpriority' => 'Default Ticket Priority',
	'desc_ticketpriority' => 'Select the Default Ticket Priority for this Template Group.',
	'ticketdep' => 'Default Department',
	'desc_ticketdep' => 'Select the Default Department. This Department is selected by default in the Submit Ticket page.',
	'livechatdep' => 'Default Department',
	'desc_livechatdep' => 'Select the Default Department. This Department is selected by default when a user requests a chat.',
	'ticketsdeptitle' => '%s (Tickets)',
	'livesupportdeptitle' => '%s (Live Support)',
	'isdefault' => 'Is Default Template Group',
	'desc_isdefault' => '',
	'loginshare' => 'LoginShare Module',
	'desc_loginshare' => 'Specify the LoginShare Module to use to authenticate the visitors under this Template Group. Make sure you have updated the settings for this module under Templates &gt; LoginShare.',

	// ======= MANAGE TEMPLATE GROUPS =======
	'grouptitle' => 'Group Title',
	'glanguage' => 'Language',
	'managegroups' => 'Manage Groups',
	'templategroups' => 'Template Groups',
	'desc_templategroups' => '',
	'grouplist' => 'Group List',
	'restore' => 'Restore',
	'export' => 'Export XML',
	'groupinsertconfirm' => 'Template Group "%s" inserted successfully',
	'groupdelconfirm' => 'Template Group "%s" deleted successfully',
	'restoreconfirmask' => 'Are you sure you wish to restore the Templates in this Group?\nYou cannot reverse this action; restoring the Templates might result in the loss of all UI changes you have made to existing Templates!',
	'restoreconfirm' => 'Template Group "%s" restored to Original Templates',
	'inserttemplategroup' => 'Insert Group',
	'edittemplategroup' => 'Edit Group',
	'invalidgroup' => 'Invalid Template Group',
	'groupupdateconfirm' => 'Template Group "%s" updated successfully',

	// ======= MANAGE TEMPLATES =======
	'desc_templates' => '',
	'managetemplates' => 'Manage Templates',
	'templatetitle' => 'Templates: %s',
	'templatecategories' => 'Template Categories',
	'expand' => 'Expand',
	'groupjump' => 'Group Jump',
	'legend' => 'Legend: ',
	'notmodified' => 'Not Modified',
	'modified' => 'Modified',
	'upgrade' => 'Upgrade Revert Required',
	'expandall' => 'Expand All',
	'jump' => 'Jump',
	'templategroup' => 'Template Group',
	'desc_templategroup' => '',
	'invalidtemplate' => 'Invalid Template',
	'edittemplate' => 'Edit Template',
	'edittemplatetitle' => 'Template: %s (Group: %s)',
	'generalinfo' => 'General Information',
	'templatedata' => 'Template Data',
	'savetemplate' => 'Save',
	'saveandreload' => 'Save &amp; Reload',
	'preview' => 'Preview',
	'restore' => 'Restore',
	'copyclipboard' => 'Copy to Clipboard',
	'templatestatus' => 'Status',
	'desc_templatestatus' => '',
	'tstatus' => '<img src="%s" align="absmiddle" border="0" /> %s', // Switch position for RTL language
	'dateadded' => 'Date Added/Modified',
	'desc_dateadded' => '',
	'contents' => '',
	'desc_contents' => '',
	'templateupdateconfirm' => 'Template "%s" updated successfully',
	'templaterestoreconfirm' => 'Templates "%s" restored to original contents',
	'templatesrestoreconfirm' => '%s Templates restored to original contents',
	'restoretemplates' => 'Restore Templates',
	'clipboardconfirm' => 'The Template contents have been copied to your clipboard. You can now paste the contents in your favorite HTML editor.',
	'clipboardconfirmmoz' => 'The text to be copied has been selected. Press Ctrl+C to copy the text to the clipboard.',

	// Diagnostics
	'diagnostics' => 'Diagnostics',
	'listmodified' => 'List Modified Templates',
	'listtorestore' => 'List Templates to Restore',
	'moditgroup' => 'Template Group',
	'desc_moditgroup' => '',
	'list' => 'List',
	'diagnosesmarty' => 'Diagnose Smarty Template Engine Errors',
	'diagtgroup' => 'Template Group',
	'desc_diagtgroup' => '',
	'diagnose' => 'Diagnose',
	'modifiedtemplates' => 'Modified Templates (Group: %s)',
	'listtemplates' => 'List of Templates (Group: %s)',
	'templatename' => 'Template Name',
	'status' => 'Status',
	'diagnoseerrors' => 'Diagnose Errors (Group: %s)',
	'compiletime' => 'Compile Time',

	// Search
	'search' => 'Search',
	'searchtemplates' => 'Search Templates',
	'query' => 'Search Query',
	'desc_query' => 'Enter the Text you wish to search for',
	'searchtgroup' => 'Search In',
	'desc_searchtgroup' => 'Select the Template Group to search in',
	'searchqueryd' => 'Search Query: %s',

	// LoginShare
	'loginshare' => 'LoginShare',
	'ls_module' => 'LoginShare Plugin',
	'pluginlist' => 'Plugin List',
	'hostname' => 'Hostname',
	'dbname' => 'DB Name',
	'dbuser' => 'DB User',
	'dbpass' => 'DB Password',
	'tableprefix' => 'Tabe Prefix',
	'ldaphostname' => 'Active Directory Host',
	'ldapport' => 'Port (Default: 389)',
	'ldapbasedn' => 'Base DN',
	'ldaprdn' => 'RDN',
	'ldappassword' => 'Password',

	// H-Sphere
	'hsphostserver' => 'Server Hostname',
	'hspport' => 'Server Port',
	'hspurl' => 'XML API URL',
	'hspconnectfail' => 'Could not connect to server. Try again later.',

	// ======= Category List =======
	'template_general' => 'General',
	'template_chat' => 'Live Support',
	'template_troubleshooter' => 'Troubleshooter',
	'template_news' => 'News',
	'template_downloads' => 'Downloads',
	'template_knowledgebase' => 'Knowledgebase',
	'template_tickets' => 'Tickets',
	'template_parser' => 'Mail Parser',
	'template_purchase' => 'Ticket Purchaser',

	// ======= LOGINSHARE =======
	'loginapi_modernbill' => 'ModernBill',
	'loginapi_ipb' => 'Invision Power Board',
	'loginapi_vb' => 'vBulletin',
	'loginapi_osc' => 'osCommerce',
	'loginapi_iono' => 'IONO License Manager',
	'loginapi_plexum' => 'Plexum',
	'loginapi_awbs' => 'AWBS',
	'loginapi_phpaudit' => 'PHPAudit v2',
	'loginapi_whmautopilot' => 'WHMAP v3',
	'loginapi_activedirectory' => 'Active Directory/LDAP',
	'loginapi_activedirectoryssl' => 'Active Directory/LDAP (SSL)',
	'loginapi_ticketpurchaser' => 'Ticker Purchaser',
	'loginapi_xcart' => 'X-Cart',
	'loginapi_phpbb' => 'PHPBB',
	'loginapi_smf' => 'Simple Machines Forum',
	'loginapi_mybb' => 'MyBB',
	'loginapi_xmb' => 'XMB',
	'loginapi_clientexec' => 'Clientexec',
	'loginapi_joomla' => 'Joomla CMS',
	'loginapi_hsphere' => 'H-Sphere XML-API',
	'loginapi_phpprobid' => 'PHPProBid',
	'loginapi_cubecart' => 'CubeCart',
	'loginapi_modernbillv5' => 'ModernBill v5',
	'loginapi_cscart' => 'CS-Cart',
	'loginapi_fsr' => 'FSRevolution',
	'loginapi_viper' => 'Viper Cart',
	'loginapi_xoops' => 'XOOPS',
	'loginapi_whmcsintegration' => 'WHMCS - Integration Placeholder Only (Not for direct logins)',
);

?>