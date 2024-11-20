<?php
/**
 * Plugin Name:     Template selection fix
 * Description:     Temporary fix to allow selection of where to apply a template
 * Author:          Wulpi
 * Version:         1.0.0
 *
 */

if (!defined('ABSPATH')) {
	die;
}

include_once __DIR__ . '/WFPCore/WordPressContext.php';


include_once 'snippets/template_selection_fix_inline_css.php';
// Snippets will go before this line, do not edit
