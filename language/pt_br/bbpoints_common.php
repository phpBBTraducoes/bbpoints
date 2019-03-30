<?php
/**
*
* BBpoints extension for the phpBB Forum Software package.
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.2.1] (https://github.com/phpBBTraducoes)
* @copyright (c) 2015 SiteSplat All rights reserved
* @license Proprietary
* 
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if ( empty($lang) || !is_array($lang) )
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'BBPOINTS'						=> 'BBpoints', // This is the forum point name. You can edit it to reflect your own point name.
	'YOUR_BBPOINTS'					=> 'Seus BBpoints',
	'BB_AMOUNT'			    		=> 'Quantidade',
	'BB_PAID_UP'			    	=> 'Pago',
	'TOPIC_HIDDEN'					=> 'Tópico oculto. Requer um pagamento',
	'WAS_HIDDEN'					=> 'Este é um tópico pago',
	'BBPOINTS_HIDE_TOPIC'	        => 'Pontos mín.',
	'BBPOINTS_HIDE_TOPIC_EXPLAIN'	=> 'Digite os Pontos Mínimos necessários para o próximo usuário ler este tópico. <br />(Os pontos serão transferidos para sua conta)',
	'TRANSFER_NOTI'					=> 'Você recebeu uma doação de %1$s de %2$s',

	'NOTIFICATION_TYPE_SITESPLAT.BBPOINTS.NOTIFICATION.TYPE.TRANSFER' => 'Alguém transferiu Pontos para você',
));
