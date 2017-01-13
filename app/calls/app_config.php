<?php

//application details
	$apps[$x]['name'] = "Calls";
	$apps[$x]['uuid'] = "19806921-e8ed-dcff-b325-dd3e5da4959d";
	$apps[$x]['category'] = "Switch";
	$apps[$x]['subcategory'] = "";
	$apps[$x]['version'] = "";
	$apps[$x]['license'] = "Mozilla Public License 1.1";
	$apps[$x]['url'] = "http://www.fusionpbx.com";
	$apps[$x]['description']['en-us'] = "Call Forward, Follow Me and Do Not Disturb.";
	$apps[$x]['description']['es-cl'] = "Reenvio de llamada, Sígueme y No Molestar.";
	$apps[$x]['description']['de-de'] = "";
	$apps[$x]['description']['de-ch'] = "";
	$apps[$x]['description']['de-at'] = "";
	$apps[$x]['description']['fr-fr'] = "Renvoi d'appel, Follow Me et ne pas deranger.";
	$apps[$x]['description']['fr-ca'] = "";
	$apps[$x]['description']['fr-ch'] = "";
	$apps[$x]['description']['pt-pt'] = "Desvio de Chamadas, Seguir-me e Não Perturbar.";
	$apps[$x]['description']['pt-br'] = "Desvio de chamadas, Siga-me e Não perturbe (DND).";

//permission details
	$apps[$x]['permissions'][$y]['name'] = "follow_me";
	$apps[$x]['permissions'][$y]['groups'][] = "user";
	$apps[$x]['permissions'][$y]['groups'][] = "admin";
	$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
	$y++;
	$apps[$x]['permissions'][$y]['name'] = "call_forward";
	$apps[$x]['permissions'][$y]['groups'][] = "user";
	$apps[$x]['permissions'][$y]['groups'][] = "admin";
	$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
	$y++;
	$apps[$x]['permissions'][$y]['name'] = "do_not_disturb";
	$apps[$x]['permissions'][$y]['groups'][] = "user";
	$apps[$x]['permissions'][$y]['groups'][] = "admin";
	$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

//default settings
	$y = 0;
	$apps[$x]['default_settings'][$y]['default_setting_category'] = 'follow_me';
	$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'max_destinations';
	$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
	$apps[$x]['default_settings'][$y]['default_setting_value'] = '5';
	$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
	$apps[$x]['default_settings'][$y]['default_setting_order'] = '0';
	$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the maximum number of Follow Me Destinations.';
	$y++;
	$apps[$x]['default_settings'][$y]['default_setting_category'] = 'follow_me';
	$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = 'timeout';
	$apps[$x]['default_settings'][$y]['default_setting_name'] = 'numeric';
	$apps[$x]['default_settings'][$y]['default_setting_value'] = '30';
	$apps[$x]['default_settings'][$y]['default_setting_enabled'] = 'false';
	$apps[$x]['default_settings'][$y]['default_setting_order'] = '0';
	$apps[$x]['default_settings'][$y]['default_setting_description'] = 'Set the default Follow Me Timeout value.';
	$y++;

?>
