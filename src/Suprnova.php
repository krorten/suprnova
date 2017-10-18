<?php
namespace Krorten\Suprnova;

use GuzzleHttp\Client;

class Suprnova {

	const API = "suprnova.cc/?page=api";

	protected $type = 'zec';

	private $apikey;

	public function setType($type = 'zec')
	{
		$this->type = $type;

		return $this;
	}

	public function setApiKey($apikey = '')
	{
		$this->apikey = $apikey;

		return $this;
	}
	/**
	 * Get a summary of current address
	 * @param  [type] $user [description]
	 * @return [type]       [description]
	 */
	public function user()
	{
		return $this->request('getuserstatus');
	}
	/**
	 * Get workers from current adress
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function workers()
	{
		return $this->request('getcurrentworkers');
	}
	/**
	 * Get current balance
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function balance()
	{
		return $this->request('getuserbalance');
	}
	/**
	 * Getting curring Hashrate in Mh/s
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function hashrate()
	{
		return $this->request('getusersharerate');
	}	
	/**
	 * Get Dashboarddata
	 * @param  [type] $adress [description]
	 * @return [type]         [description]
	 */
	public function dashboard()
	{
		return $this->request('getdashboarddata');
	}
	/**
	 * Get user transactions
	 * @param  [type] $hashrate [description]
	 * @return [type]           [description]
	 */
	public function transactions()
	{
		return $this->request('getusertransactions');
	}

	private function request($endpoint, $params = array())
	{
		$client = new Client();
		
		$params = http_build_query($params);
		$params .= '&api_key=' . $this->apikey;

		$request = $client->request('GET', 'https://' . $this->type . '.' . self::API  . '/index.php?action=' . $endpoint . $params);
		$response = $request->getBody();
		return json_decode($response->getContents());
	}
}