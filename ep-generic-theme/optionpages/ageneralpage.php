<?php$generalpage = new optionpage;$generalpage->title = 'General';$generalpage->titleprint = ' General Options';$generalpage->slug = 'ageneral';$generalpage->html = array(	'1' => array(	'tagtype' => 'inputradio',	'choices' =>  array(		'enable' => array(			'value' => 'enable',			'label' => 'Enable',			),		'disable' => array(			'value' => 'disable',			'label' => 'Disable',			),	),		'name' => 'toggleengipress',	'class' => 'large-text',	'title' => 'Toggle Developer Credit',	'description' => 'Toggle whether you want the "Theme Developed by Engipress" credit to display across the site in the footer or not.',	),		'2' => array(	'tagtype' => 'inputtext',	'class' => 'large-text',	'size' => '40',	'title' => 'Logo URL',	'description' => 'Type in the logo URL here',	'result' => 'logourl',	),		/*	'23' => array(	'tagtype' => 'textarea',	'class' => 'large-text',	'cols' => '60%',	'rows' => '5',	'title' => 'Display Text',	'description' => 'Display a paragraph or more of text',	'result' => 'displaytext',	),		'24' => array(	'tagtype' => 'inputcolor',	'class' => 'large-text',	'title' => 'Body Color',	'description' => 'Select a color for the &lt;body&gt; element',	'result' => 'bodycolor',	'colorid' => 'bodycolor',	),		'25' => array(	'tagtype' => 'inputcheck',	'class' => 'large-text',	'title' => 'Display Characters',	'description' => 'To test checkmarks.',	'result' => 'displaycharacters',	),		'26' => array(	'tagtype' => 'inputcheck',	'class' => 'large-text',	'description' => 'To test checkmarks.',	'result' => 'displaycharactersb',	),*/);$generalpage->startpage();?>