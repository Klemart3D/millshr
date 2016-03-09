<?php
/**
 * Created by PhpStorm.
 * User: Klems
 * Date: 08/03/2016
 * Time: 12:25
 */

namespace AppBundle\Api;
class LoremApi
{
	const BASE_URL = 'https://baconipsum.com/api/';
	/**
	 * @param string $type
	 * @param int    $paras
	 *
	 * @return mixed
	 */
	public function generate($type = 'meat-and-filler', $paras = 5) {
		$url = sprintf('%s?%s', self::BASE_URL, htmlspecialchars(http_build_query([
			'type'  => $type,
			'paras' => $paras
		])));
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT, 4);
		$json = curl_exec($ch);
		if(!$json) {
			echo curl_error($ch);
		}
		curl_close($ch);
		return json_decode($json);
	}
}