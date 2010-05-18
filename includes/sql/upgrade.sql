UPDATE `%PRE%config` SET `value` = '1.2.2' WHERE `%PRE%config`.`name` = 'version' AND `%PRE%config`.`value` = '1.2.1' LIMIT 1 ;
UPDATE `%PRE%navbar` SET `visual` = 'Knowledge Base' WHERE `%PRE%navbar`.`link` = 'support' LIMIT 1 ;
UPDATE `%PRE%navbar` SET `icon` = 'report_magnify.png' WHERE `%PRE%navbar`.`icon` = 'monitor.png' LIMIT 1 ;
ALTER TABLE `%PRE%packages` ADD `is_hidden` INT( 1 ) NOT NULL DEFAULT '0';
ALTER TABLE `%PRE%packages` ADD `is_disabled` INT( 1 ) NOT NULL DEFAULT '0';
ALTER TABLE `%PRE%users` ADD `firstname` varchar(50) NOT NULL,
ALTER TABLE `%PRE%users` ADD `lastname` varchar(50) NOT NULL,
ALTER TABLE `%PRE%users` ADD `address` varchar(50) NOT NULL,
ALTER TABLE `%PRE%users` ADD `city` varchar(50) NOT NULL,
ALTER TABLE `%PRE%users` ADD `zip` varchar(7) NOT NULL,
ALTER TABLE `%PRE%users` ADD `state` varchar(55) NOT NULL,
ALTER TABLE `%PRE%users` ADD `country` varchar(2) NOT NULL,
ALTER TABLE `%PRE%users` ADD `phone` varchar(15) NOT NULL,
ALTER TABLE `%PRE%users` ADD `status` INT( 1 ) NOT NULL DEFAULT '0'
INSERT INTO `%PRE%clientnav` (`id`, `visual`, `icon`, `link`) VALUES (8, 'Tickets', 'page_white_text.png', 'tickets');
INSERT INTO `%PRE%templates` (`id`, `name`, `acpvisual`, `subject`, `content`, `description`) VALUES (17, 'cancelacc', 'Account Cancelled', 'Cancelled', '<p><span style="font-weight: bold;">Your account has been cancelled!<br /><span style="font-weight: normal;">This now means that your client username and password no longer work and your web hosting package no longer exists. All your files, databases, records have been removed and aren''t retrievable.<br /><br /><span style="font-weight: bold;">Reason for termination: </span>%REASON%</span></span></p>', 'This is the email the client recives when their account has been cancelled by admin or when they manually deleted it in the client control panel.<br /><br />\r\n\r\nEmail Variables:<br />\r\n%REASON% - The reason why their account has been terminated');
CREATE TABLE IF NOT EXISTS `%PRE%users_bak` ( `id` mediumint(9) NOT NULL auto_increment, `user` varchar(50) NOT NULL, `email` varchar(50) NOT NULL, `password` varchar(50) NOT NULL, `salt` varchar(50) NOT NULL, `signup` varchar(20) NOT NULL, `ip` text NOT NULL, `address` varchar(50) NOT NULL, `city` varchar(50) NOT NULL, `zip` varchar(7) NOT NULL,  `state` varchar(55) NOT NULL, `country` varchar(2) NOT NULL, `phone` varchar(15) NOT NULL, `status` varchar(1) NOT NULL default '0', PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
CREATE TABLE IF NOT EXISTS `%PRE%user_packs_bak` (`id` mediumint(9) NOT NULL auto_increment, `userid` varchar(5) NOT NULL, `domain` varchar(50) NOT NULL, `pid` varchar(5) NOT NULL, `signup` varchar(20) NOT NULL, `status` varchar(1) NOT NULL, `additional` text NOT NULL, PRIMARY KEY  (`id`)) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;