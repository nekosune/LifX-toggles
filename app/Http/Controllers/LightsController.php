<?php

namespace LifX\Http\Controllers;

use Illuminate\Http\Request;

use LifX\Http\Requests;
use GuzzleHttp\Client;
class LightsController extends Controller
{
    var $key="blank";

    public function __construct()
    {
        $this->key=getenv('LIFX_KEY');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$client=new Client([
		'base_uri'=>'https://api.lifx.com/v1/lights/',
		'auth'=>[$this->key,'']]);
	$response=$client->request('get','all');
	if($response->getStatusCode()==200)
	{
		$body=$response->getBody();
		$lights=json_decode($body);
		return view('lights.index',compact('lights'));
	}
	return $response;
//        return  view('lights.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

	public function toggle($id)
	{
		$client=new Client([
                'auth'=>[$this->key,'']]);
        	$response=$client->request('post',"https://api.lifx.com/v1/lights/id:$id/toggle");
        	if($response->getStatusCode()==207)
        	{
        	        $body=$response->getBody();
        	        $lights=json_decode($body);
//			print_r($lights);
			if($lights->results[0]->status=="ok")
				return redirect('/lights');
			else
			{
				return redirect('/lights')->with('error',$lights->results[0]->status);
			}
        	}
	}

}
