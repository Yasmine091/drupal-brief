<?php

/**
 * @file
 * Theme settings form for Drudrupalpal theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function drudrupalpal_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['drudrupalpal'] = [
    '#type' => 'details',
    '#title' => t('Drudrupalpal'),
    '#open' => TRUE,
  ];

  $form['drudrupalpal']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
