<?php

/**
 * Implements template_preprocess_html().
 */
function fractal_farm_preprocess_html(&$vars) {
     drupal_add_css('http://fonts.googleapis.com/css?family=Source+Sans+Pro', array('group' => CSS_THEME));
}

/**
 * Implements template_preprocess_page.
 */
function fractal_farm_preprocess_page(&$vars) {
}

/**
 * Implements template_preprocess_node.
 */
function fractal_farm_preprocess_node(&$vars) {
}