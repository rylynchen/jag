<?php

/**
 * Form builder; Configure jag settings.
 */
function jag_settings_form() {
  $form = array();
  $styles = array();
  foreach (image_styles() as $key => $style) {
    $styles[$key] = $style['name'];
  }
  $form['jag_style_min'] = array(
    '#type'           => 'select',
    '#title'          => t('底部min图片样式'),
    '#options'        => $styles,
    '#default_value'  => variable_get('jag_style_min', ''),
    '#required'       => TRUE,
  );
  $form['jag_style_show'] = array(
    '#type'           => 'select',
    '#title'          => t('展示图片样式'),
    '#options'        => $styles,
    '#default_value'	=> variable_get('jag_style_show', ''),
    '#required'       => TRUE,
  );
  $form['jag_auto_play_start_label'] = array(
    '#type'           => 'textfield',
    '#title'          => t('自动播放开始文本'),
    '#default_value'  => variable_get('jag_auto_play_start_label', '自动播放'),
    '#required'       => TRUE,
  );
  $form['jag_auto_play_end_label'] = array(
    '#type'           => 'textfield',
    '#title'          => t('自动播放停止文本'),
    '#default_value'  => variable_get('jag_auto_play_end_label', '停止播放'),
    '#required'       => TRUE,
  );
  $form['jag_auto_play_speed'] = array(
    '#type'           => 'textfield',
    '#title'          => t('自动播放速度'),
    '#description'    => t('单位：毫秒'),
    '#default_value'  => variable_get('jag_auto_play_speed', 5000),
    '#required'       => TRUE,
  );
  return system_settings_form($form);
}