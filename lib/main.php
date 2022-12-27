<?php
/**
 * 2017-05-13
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.3.9/view/frontend/templates/page/customers.phtml#L32
 */
function df_flag_link():string {return df_link_inline(df_asset_name(null, 'Df_Flag', 'css'));}

/**
 * 2018-09-17
 * Magento 2 core and third-party design themes can add a lot of styles to `span.flag-icon`.
 * In this case I use `div`instead of `span`.
 * @used-by https://github.com/frugue/store/blob/1.0.1/view/frontend/templates/switcher.phtml#L19
 * @used-by https://github.com/frugue/store/blob/1.0.1/view/frontend/templates/switcher.phtml#L29
 * @used-by https://github.com/inkifi/store/blob/0.0.3/view/frontend/templates/switcher.phtml#L19
 * @used-by https://github.com/inkifi/store/blob/0.0.3/view/frontend/templates/switcher.phtml#L29
 * @used-by https://github.com/mage2pro/portal-stripe/blob/0.5.6/view/frontend/templates/page/customers.phtml#L29
 * @param string $iso2
 * @param string $content [optional]
 * @param string $tag [optional]
 */
function df_flag_tag($iso2, $content = null, $tag = 'span'):string {return df_tag(
	$tag, 'flag-icon flag-icon-' . strtolower('uk' === $iso2 ? 'gb' : $iso2), $content
);}