<?php

/*
========================================================
設定サイドバー
=========================================================*/

use PHP_CodeSniffer\Standards\Squiz\Sniffs\Debug\JavaScriptLintSniff;

register_block_style(
	'core/heading',
	array(
		'name'         => 'design01',
		'label'        => 'デザイン01',
		'inline_style' => '.is-style-design01 { 
            border-left: solid 8px orange; 
            padding-left: 12px;
        }',
	)
);

register_block_style(
	'core/heading',
	array(
		'name'         => 'design02',
		'label'        => 'デザイン02',
		'inline_style' => '.is-style-design02 { 
            padding: 20px 10px 15px;
            border-radius: 10px;
            background: #f5d742;
        }
        .is-style-design02::before {
            content: "●";
            color: #ffffff;
            margin-right: 10px;
        }',
	)
);

register_block_style(
	'core/heading',
	array(
		'name'         => 'design01',
		'label'        => 'デザイン01',
		'inline_style' => '.is-style-design01 { 
            border-left: solid 8px orange; 
            padding-left: 12px;
        }',
	)
);

register_block_style(
	'core/heading',
	array(
		'name'         => 'design02',
		'label'        => 'デザイン02',
		'inline_style' => '.is-style-design02 { 
            padding: 20px 10px 15px;
            border-radius: 10px;
            background: #f5d742;
        }
        .is-style-design02::before {
            content: "●";
            color: #ffffff;
            margin-right: 10px;
        }',
	)
);
