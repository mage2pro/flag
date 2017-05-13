<?php
/**
 * 2017-05-13
 * @return string
 */
function df_flag_css() {return df_link_inline(df_asset_name('main', 'Df_Flag', 'css'));}

/**
 * 2017-05-13
 * @param string $country
 * @return string
 */
function df_flag_span($country) {return df_tag('span', 'flag-icon flag-icon-' . strtolower($country));}