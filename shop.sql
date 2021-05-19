DROP TABLE IF EXISTS 'staff';
CREATE TABLE `staff` (
  `code` int(11) NOT NULL AUTO_INCREMENT COMMENT 'スタッフコード',
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'スタッフ名',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'パスワード',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;