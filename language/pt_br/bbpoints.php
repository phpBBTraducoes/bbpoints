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
	'UCP_BBPOINTS_EXPLAIN'					=> 'Visão geral das transações de seus pontos ganhos',
	'BB_DONATION'							=> 'Doação de',
	'BB_TRANSFER'							=> 'Transferir para',
    'BBPOINTS_LOG'							=> 'BBpoints Log',
	'BBPOINTS_TRANSFER_AMT'					=> 'Valor da transferência',
	'TRANSFER_DESCR'						=> 'Comentário',  
	'BBPOINTS_COMMENT_PLACEHOLDER'			=> 'Comentário opcional sobre a transação',
	'BBPOINTS_NO_RECORDS'			        => 'Desculpe, não há registros ainda!',
	
	'BBPOINTS_STATS'						=> 'Estatisticas',
	'BBPOINTS_STATS_BAR'					=> 'e objetivo geral de progresso',
	'BBPOINTS_GOAL'							=> 'Meta de pontos',
	'BBPOINTS_GOAL_TO_GO'					=> 'mais para ir!',

	'EARN_PER_TOPIC'						=> 'Você pode ganhar <strong>%1$s</strong> por tópico',
	'EARN_PER_POST'							=> 'Você pode ganhar <strong>%1$s</strong> por post',
	'EARN_PER_WORD'							=> 'Você pode ganhar <strong>%1$s</strong> por palavra',
	
	'TRANSFER_TO'							=> 'Aqui você pode transferir/doar pontos para outro usuário - Não pode ser revertido!',
	'TRANSFER_SUCCESS'						=> 'A transferência foi bem sucedida.',
	'TRANSFER_TO_HIDDEN_TOPIC'				=> 'Para ler e reagir a este tópico você tem que doar: <span class="label label-primary">%1$s</span> <br />Esta é uma taxa única para o autor do tópico<br />**Observe que essa taxa pode ser solicitada novamente se o tópico for editado',
	'NO_USER_SELECTED'						=> 'Você não selecionou nenhum usuário',
	'NO_AMOUNT_SELECTED'					=> 'Você não selecionou nenhum valor ou a quantia é < 5',           
	'TRANSFER_NOT_ENOUGH_POINTS'			=> 'Você não tem pontos suficientes para transferir.',

	'POINTS_RETURN_POST'				 	 => 'Retornar ao tópico',
	'POINTS_RETURN_INDEX'				 	 => 'Retornar ao índice',
	'POINTS_RETURN_TRANSFER'		 		 => 'Retornar para a transferência',
	'POINTS_MAIN'						     => '%s overwiev',
	'POINTS_MODIFY'						     => 'Modificar',
	'POINTS_DONATE'						     => 'Doar',	
	'POINTS_DISABLED'            			 => 'BBpoints está desativado no momento',
	
	'POINTS_RECEIVED_POST_MESSAGE'			 => 'Você recebeu <strong>%1$s %2$s</strong> para este tópico',
	'POINTS_RECEIVED_REPLY_MESSAGE'		     => 'Você recebeu <strong>%1$s %2$s</strong> para este post',
	'POINTS_RECEIVED_POST_MOD_MESSAGE'		 => 'Você receberá <strong>%1$s %2$s</strong> para este tópico quando será aprovado',
	'POINTS_RECEIVED_REPLY_MOD_MESSAGE'		 => 'Você receberá <strong>%1$s %2$s</strong> para este post quando será aprovado',
	'POINTS_POST_REMOVED'		             => 'Você perdeu <strong>%1$s %2$s</strong> para excluir este post',
	
	'TRANSFER_DISABLED'						 => 'Transferência está desativada',
	'TRANSFER_USERNAME_NOT_EXIST' 			 => 'Não há usuário com este nome de usuário.',
	'TRANSFER_PM_SUBJECT'				     => 'Você recebeu uma doação!',
	'TRANSFER_PM_BODY'					     => 'Você recebeu uma doação de %1$s %2$s.',
	'TRANSFER_PM_BODY_COMMENT'	             => 'Você recebeu uma doação de %1$s %2$s com o seguinte comentário: <br />%3$s',
	'TRANSFER_POINTS_TITLE'				     => 'Transferir %s',
	'TRANSFER_POINTS'						 => 'Transferir %s',   
	'TRANSFER_AMOUNT'						 => 'Quantidade',
	'TRANSFER_COMMENT'						 => 'Comentário',
	'BBPOINT_LOG'						     => 'Log de transferência',
	
	
	'CHANGE_NO_USER_SELECTED'			     => 'Nenhum usuário selecionado',
	'CHANGE_SUCCESS'					     => 'O usuário foi atualizado.',
	'CHANGE_POINTS'						     => 'Alterar %s',
	'CHANGE_AMOUNT'						     => 'Novo valor',
	
	'MAIN_HELLO'				             => 'Olá %s !',
	'MAIN_TEXT'				                 => 'Você tem %1$s %2$s.<br /><br />%2$s por novo tópico: %3$s<br />%2$s por novo post: %4$s<br />%2$s por palavra: %5$s',
));
