<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/test.ctp on line 22
/* BannedEmails Test cases generated on: 2010-07-24 02:07:00 : 1279952940*/
App::import('Controller', 'BannedEmails');

class TestBannedEmailsController extends BannedEmailsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BannedEmailsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.banned_email');

	function startTest() {
		$this->BannedEmails =& new TestBannedEmailsController();
		$this->BannedEmails->constructClasses();
	}

	function endTest() {
		unset($this->BannedEmails);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>