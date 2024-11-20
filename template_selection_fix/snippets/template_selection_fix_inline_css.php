<?php if(!defined('ABSPATH')) { die(); }  

add_action('admin_head', function() {

        
	// Condition Builder helper class
	$wpContext = new \WFPCore\WordPressContext();

	// Condition Builder generated Conditions
	if( !( ( !$wpContext->is_frontend() ) )) {
		return false;
	}
        ?>
        <style wpcb-ids='10' class='wpcb2-inline-style'>

        .accordion-section-content {display: block !important;}
        </style>

    <?php
    }, 10);

