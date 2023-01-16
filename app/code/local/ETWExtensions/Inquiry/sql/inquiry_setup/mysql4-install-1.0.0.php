<?php

$installer = $this;

$installer->startSetup();

$installer->run("

-- DROP TABLE IF EXISTS {$this->getTable('etw_inquiries')};
CREATE TABLE {$this->getTable('etw_inquiries')} (
  `inquiry_id` int(11) unsigned NOT NULL auto_increment,
  `customer_id` int(11) NULL,
  `customer_name` varchar(200) NOT NULL default '',
  `customer_email` varchar(200) NOT NULL default '',
  `sku` varchar(100) NOT NULL,
  `shop_name` varchar(200) NOT NULL default '',
  `shop_url` varchar(200) NOT NULL default '',
  `shop_price` varchar(200) NOT NULL default '',
  `comment` text NOT NULL default '',
  `created_time` datetime NOT NULL default CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL default 'OPEN',
  PRIMARY KEY (`inquiry_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");

$installer->endSetup();
