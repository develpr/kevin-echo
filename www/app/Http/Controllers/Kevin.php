<?php  namespace Kevin\Http\Controllers;

use Develpr\AlexaApp\Http\Routing\AlexaRouter;
use Kevin\Contracts\Sensor;
use Kevin\Contracts\Repositories\SensorRepository;
use Kevin\Device;
use Illuminate\Routing\Controller as BaseController;
use \Alexa;

class Kevin extends  BaseController{

	const AUDIO_DING_URI = 'https://s3-us-west-2.amazonaws.com/alexaappstore/audio/carcooker/ding.mp3';
	const AUDIO_TICKTOCK_URI = 'https://s3-us-west-2.amazonaws.com/alexaappstore/audio/carcooker/ticktock.mp3';

	/**
	 * Handle the launch event for the app
	 */
	public function handleLaunch(){
		return Alexa::playAudio('https://s3-us-west-2.amazonaws.com/alexaappstore/audio/kevin/howareyou_1.mp3')->endSession();
	}

	/**
	 * Handle the launch event for the app
	 */
	public function handleSessionEnded(){
		return Alexa::playAudio('https://s3-us-west-2.amazonaws.com/alexaappstore/audio/kevin/sessionEnd_1.mp3')->endSession();
	}

	public function howAreYou(){
		return Alexa::playAudio('https://s3-us-west-2.amazonaws.com/alexaappstore/audio/kevin/howareyou_1.mp3');
	}

	/**
	 * @return \Develpr\AlexaApp\Contracts\AmazonEchoDevice|Device|null
	 */
	private function retrieveOrCreateDevice(){
		$device = Alexa::device();

		if( ! $device ){
			$device = new Device;
			$device->setDeviceId(\Alexa::request()->getUserId());
			$device->save();
		}

		return $device;
	}


} 