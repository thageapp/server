<?php

	/*
		GitHubUser class
	*/

	class GitHubUser {
	
		private $login;
		private $id;
		private $avatar;
		private $url;
		private $name;
		private $bio;
		private $followers;
		const userUrl="https://api.github.com/users/";

		//constructor

		public function __construct($userID) {
			$temp= urlencode(userUrl+$userID);
			$ris= json_decode(file_get_contents($temp),true);
			if (isset($ris['login'])) $this->login= $ris['login'];
			if (isset($ris['id'])) $this->id= $ris['id'];
			if (isset($ris['avatar'])) $this->avatar= $ris['avatar'];
			if (isset($ris['url'])) $this->url= $ris['url'];
			if (isset($ris['name'])) $this->name= $ris['name'];
			if (isset($ris['bio'])) $this->login= $ris['bio'];
			if (isset($ris['followers'])) $this->followers= $ris['followers'];
		}

	}

?>
