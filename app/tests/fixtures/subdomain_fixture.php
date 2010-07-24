<?php
/* Subdomain Fixture generated on: 
Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'America/New_York' for 'EDT/-4.0/DST' instead in /Applications/MAMP/htdocs/TheHostingTool/branches/2.0/cake/console/templates/default/classes/fixture.ctp on line 24
2010-07-24 02:07:45 : 1279951965 */
class SubdomainFixture extends CakeTestFixture {
	var $name = 'Subdomain';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'domain' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50),
		'server_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'available' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'domain' => 'Lorem ipsum dolor sit amet',
			'server_id' => 1,
			'available' => 1
		),
	);
}
?>