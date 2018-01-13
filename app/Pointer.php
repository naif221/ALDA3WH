<?php

namespace App;


// Be Careful With This Class Any Change Could Break The System.
class Pointer{
	
	
	// these are Pointers to the ID's on Tables.
	public static $UnderStudy 				= 1;
	public static $Accepted 				= 2;
	public static $Rejected					= 3;
	
	public static $UnderStudyFromCouncil	= 4;
	public static $AcceptedFromCouncil		= 5;
	public static $RejectedFromCouncil		= 6;

	public static $ToJalyat 				= 7;
	public static $ToIssued					= 8;
	public static $ToLibrary				= 9;
	public static $ToMedia					= 10;
	public static $ToServices				= 11;
	
	// Finance Department 
	public static $UnderStudyFromFinance	= 12;
	public static $AcceptedFromFinance		= 13;
	public static $RejectedFromFinance		= 14;
	
	
	// Department Pointers
	public static $Jalyat 					= 1;
	public static $Issued					= 2;
	public static $Library					= 3;
	public static $Council					= 4;
	public static $Manager					= 5;
	public static $Media					= 6;
	public static $Services					= 7;
	public static $Finance					= 8;
	
	
	
}