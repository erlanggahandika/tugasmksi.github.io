DROP TABLE IF EXISTS `user`;

CREATE TABLE
    `user` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `username` varchar(255) DEFAULT NULL,
        `password` varchar(255) DEFAULT NULL,
        `email` varchar(255) DEFAULT NULL,
        `fullname` varchar(255) DEFAULT NULL,
        `role` varchar(15) DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

DROP TABLE IF EXISTS `news`;

CREATE TABLE
    `news` (
        `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
        `title` varchar(255) DEFAULT NULL,
        `content` text,
        `category` text,
        `tags` text,
        `author` text,
        `publish` datetime DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

DROP TABLE IF EXISTS `guestbook`;

CREATE TABLE
    `guestbook` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `userid` varchar(255) NOT NULL,
        `comment` text NOT NULL,
        `newsid` text NOT NULL,
        `tanggal` datetime DEFAULT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1 AUTO_INCREMENT = 2;

INSERT INTO
    `guestbook` (
        `id`,
        `tanggal`,
        `nama`,
        `pesan`,
    )
VALUES (
        1,
        '2017-02-10 08:57:42',
        'test',
        'test',
    );