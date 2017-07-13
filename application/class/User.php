<?php

/**
 * @author Philippe
 * 
 * class User
 * définition du User, ses attributs et ses méthodes
 *
 */
class User{
	
	// variables du user
	private $User_ID;
	private $User_AdrMail;
	private $User_MdP;
	private $User_Camps_ID;
	private $User_Etat_ID;
	private $User__CreaDate;
	
	// getters
	
	public function getUser_ID(){return $this->User_ID;}
	public function getUser_AdrMail(){return $this->User_AdrMail;}
	public function getUser_MdP(){return $this->User_MdP;}
	public function getUser_Camp_ID(){return $this->User_Camp_ID;}
	public function getUser_Etat_ID(){return $this->User_Etat_ID;}
	public function getUser_CreaDate(){return $this->User_CreaDate;}
	
	// setters
	
	public function setUser_ID(){$this->User_ID = $User_ID;}
	public function setUser_AdrMail(){$this->User_AdrMail = $User_AdrMail;}
	public function setUser_MdP(){$this->User_MdP = $User_MdP;}
	public function setUser_Camp_ID(){$this->User_Camp_ID = $User_Camp_ID;}
	public function setUser_Etat_ID(){$this->User_Etat_ID = $User_Etat_ID;}
	public function setUser_CreaDate(){$this->User_CreaDate = $User_CreaDate;}
	
}