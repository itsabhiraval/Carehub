<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Name:  Twilio
	*
	* Author: Ben Edmunds
	*		  ben.edmunds@gmail.com
	*         @benedmunds
	*
	* Location:
	*
	* Created:  03.29.2011
	*
	* Description:  Twilio configuration settings.
	*
	*
	*/

	/**
	 * Mode ("sandbox" or "prod")
	 **/
	$config['mode']   = 'sandbox';

	/**
	 * Account SID
	 **/
	//$config['account_sid']   = 'ACc6ff56271cb78d6d36cc889e426b8b1d';
	$config['account_sid']   = 'ACc6ff56271cb78d6d36cc889e426b8b1d';
	/**
	 * Auth Token
	 **/
	//$config['auth_token']    = '6d55641e534c780ffa844f8f45415358';
	$config['auth_token']    = '6d55641e534c780ffa844f8f45415358';
	/**
	 * API Version
	 **/
	$config['api_version']   = '2010-04-01';

	/**
	 * Twilio Phone Number
	 **/
	$config['number']        = '(201) 885-6452';


/* End of file twilio.php */