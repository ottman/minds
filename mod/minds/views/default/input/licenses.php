<?php echo elgg_view('input/dropdown', array(	'name' => $vars['name'],
																'id' => 'license',
																'options_values' => array(
																	'attribution-cc' => elgg_echo('minds:license:attribution-cc'),
																	'attribution-sharealike-cc' => elgg_echo('minds:license:attribution-sharealike-cc'),
																	'attribution-noderivs-cc' => elgg_echo('minds:license:attribution-noderivs-cc'),
																	'attribution-noncommercial-cc' => elgg_echo('minds:license:attribution-noncommerical-cc'),
																	'attribution-noncommercial-sharealike-cc' => elgg_echo('minds:license:attribution-noncommercial-sharealike-cc'),
																	'attribution-noncommercial-noderivs-cc' => elgg_echo('minds:license:attribution-noncommercial-noderivs-cc'),
																	'publicdomaincco' => elgg_echo('minds:license:publicdomaincco'),
																	'gnuv3' => elgg_echo('minds:license:gnuv3'),
																	'gnuv1.3' => elgg_echo('minds:license:gnuv1.3'),
																	'mozillapublic' => elgg_echo('minds:license:mozillapublic'),
																	'bsd' => elgg_echo('minds:license:bsd'),
																	), 'value' => $vars['value'],
																
																));?>