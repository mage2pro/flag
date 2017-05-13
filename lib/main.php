<?php
/**
 * 2017-05-13
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.3.9/view/frontend/templates/page/customers.phtml#L32
 * @return string
 */
function df_flag_link() {return df_link_inline(df_asset_name('main', 'Df_Flag', 'css'));}

/**
 * 2017-05-13
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.3.9/view/frontend/templates/page/customers.phtml#L27
 * @param string $country
 * @param string $content [optional]
 * @return string
 */
function df_flag_span($country, $content = null) {return df_tag(
	'span', 'flag-icon flag-icon-' . strtolower($country), $content
);}