<?php

return array(

	/*
    |--------------------------------------------------------------------------
    | Enable switch
    |--------------------------------------------------------------------------
    */
	'enabled' => true,

	/*
    |--------------------------------------------------------------------------
    | Hipchat settings
    |--------------------------------------------------------------------------
	|
	| Overwrite some hipchat settings here.
    |
    */

	'room' => null,

	'color' => null,

	/*
    |--------------------------------------------------------------------------
    | Message
    |--------------------------------------------------------------------------
    |
    | 1: User deploying
    | 2: Branch
    | 3: Connection and stage
    | 4: Host
    |
    */
    
	'message' => '<strong>{1}</strong> just <strong>deployed</strong> branch "{2}" on "<strong>{3}</strong>" ({4})',

);