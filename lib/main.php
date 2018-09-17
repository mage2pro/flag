<?php
/**
 * 2017-05-13
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.3.9/view/frontend/templates/page/customers.phtml#L32
 * @return string
 */
function df_flag_link() {return df_link_inline(df_asset_name(null, 'Df_Flag', 'css'));}

/**
 * 2017-05-13
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.3.9/view/frontend/templates/page/customers.phtml#L27
 * @used-by https://github.com/frugue/store/blob/1.0.0/view/frontend/templates/switcher.phtml#L19
 * @used-by https://github.com/frugue/store/blob/1.0.0/view/frontend/templates/switcher.phtml#L29
 * @param string $iso2
 * @param string $content [optional]
 * @return string
 */
function df_flag_span($iso2, $content = null) {return df_tag(
	'span', 'flag-icon flag-icon-' . strtolower('uk' === $iso2 ? 'gb' : $iso2), $content
);}