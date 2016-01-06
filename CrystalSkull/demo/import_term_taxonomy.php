<?php
$wpdb->query("DROP TABLE IF EXISTS {$table_prefix}term_taxonomy");
$wpdb->query("CREATE TABLE IF NOT EXISTS `{$table_prefix}term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=87 ;");
$wpdb->query("
INSERT INTO `{$table_prefix}term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'product_type', '', 0, 21),
(3, 3, 'product_type', '', 0, 0),
(4, 4, 'product_type', '', 0, 2),
(5, 5, 'product_type', '', 0, 0),
(6, 6, 'pa_color', '', 0, 2),
(7, 7, 'pa_color', '', 0, 1),
(8, 8, 'pa_color', '', 0, 1),
(85, 85, 'product_cat', '', 81, 4),
(84, 84, 'product_cat', '', 79, 6),
(83, 83, 'product_cat', '', 81, 2),
(79, 79, 'product_cat', '', 0, 12),
(80, 80, 'product_cat', '', 79, 6),
(81, 81, 'product_cat', '', 0, 6),
(82, 82, 'product_cat', '', 0, 5),
(17, 17, 'category', '', 0, 8),
(19, 19, 'post_tag', '', 0, 14),
(21, 21, 'post_tag', '', 0, 14),
(22, 22, 'category', '', 0, 5),
(23, 23, 'category', '', 0, 5),
(24, 24, 'post_tag', '', 0, 22),
(25, 25, 'post_tag', '', 0, 21),
(26, 26, 'category', '', 0, 6),
(27, 27, 'post_tag', '', 0, 22),
(28, 28, 'post_tag', '', 0, 1),
(29, 29, 'post_tag', '', 0, 1),
(30, 30, 'post_tag', '', 0, 1),
(31, 31, 'post_tag', '', 0, 6),
(32, 32, 'post_tag', '', 0, 12),
(36, 36, 'post_tag', '', 0, 0),
(37, 37, 'post_tag', '', 0, 0),
(38, 38, 'post_tag', '', 0, 0),
(40, 40, 'category', '', 0, 5),
(41, 41, 'post_tag', '', 0, 0),
(42, 42, 'post_tag', '', 0, 0),
(77, 77, 'nav_menu', '', 0, 5),
(43, 43, 'post_tag', '', 0, 0),
(44, 44, 'post_tag', '', 0, 0),
(45, 45, 'post_tag', '', 0, 0),
(76, 76, 'nav_menu', '', 0, 57),
(48, 48, 'post_tag', '', 0, 0),
(78, 78, 'topic-tag', '', 0, 4),
(75, 75, 'Carousel', '', 0, 1),
(51, 51, 'post_tag', '', 0, 0),
(53, 53, 'post_tag', '', 0, 0);");
?>