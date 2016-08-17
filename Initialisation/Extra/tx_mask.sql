SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `tx_mask_flexbox` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `parenttable` varchar(255) DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `tx_mask_layout` tinytext,
  `tx_mask_title` tinytext,
  `tx_mask_bodytext` text,
  `tx_mask_image` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tx_mask_flexbox` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `parentid`, `parenttable`, `sorting`, `tx_mask_layout`, `tx_mask_title`, `tx_mask_bodytext`, `tx_mask_image`) VALUES
(1, 49, 1471433801, 1471362356, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a383a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31343a2274785f6d61736b5f6c61796f7574223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31363a2274785f6d61736b5f626f647974657874223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 123, 'tt_content', 1, '201', 'Frontend-Entwickler', ' Mit starken Voreinstellungen und Beispielen für die Integration neuer Elemente, bietet Dir Threeme einen schnellen Zugriff auf das Design von Website und Inhaltselementen sowie die Konfiguration von TYPO3.', 1),
(2, 49, 1471433337, 1471362356, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 123, 'tt_content', 2, '201', 'TYPO3 Integrator', 'Das TYPO3 Backend ist nach einer schlauen Struktur optimiert. Das reduzierte Backend ermöglicht es Dir individuelle Anpassungen vorzunehmen und Arbeitserleichterungen für Deine Kunden zu schaffen.', 1),
(3, 49, 1471433337, 1471362356, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 123, 'tt_content', 3, '201', 'Redakteure', ' Durch gezieltes redaktionelles Arbeiten profitierst Du als Redakteur durch veringerte Einstiegshürden, eine flache lernkurve und eine gesteigerte Benutzererfahrung mit dem CMS TYPO3.', 1);

CREATE TABLE `tx_mask_item` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `parenttable` varchar(255) DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `tx_mask_title` tinytext,
  `tx_mask_caption` text,
  `tx_mask_image` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `tx_mask_hide_title` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tx_mask_item` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `parentid`, `parenttable`, `sorting`, `tx_mask_title`, `tx_mask_caption`, `tx_mask_image`, `tx_mask_hide_title`) VALUES
(1, 49, 1470902190, 1470670418, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 4, 'tt_content', 1, 'I have a Threeme', 'Threeme ist die kostenfreie Basisprogrammierung für Dein nächstes Webprojekt. Mit der flexiblen Struktur des vorkonfigurierten TYPO3-Starter-Kits begegnest Du den komplexen Herausfoderungen im Webdesign. Your threeme comes true! ', 1, 0),
(2, 49, 1470906004, 1470670754, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a373a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 4, 'tt_content', 2, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.', 1, 0),
(4, 49, 1470906004, 1470906004, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a373a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 4, 'tt_content', 3, 'Eirmod tempor invidunt!', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. ', 1, 0),
(5, 49, 1470922413, 1470919712, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a383a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31383a2274785f6d61736b5f686964655f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 120, 'tt_content', 1, 'Alles im Griff', 'Alles im Griff. Frontend-Entwickler können ihre Ideen sicher und effizient umsetzen.', 1, 1),
(6, 45, 1470927583, 1470926843, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 121, 'tt_content', 1, 'Philosophie', '', 1, 0),
(7, 28, 1470927617, 1470927593, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a383a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31383a2274785f6d61736b5f686964655f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 122, 'tt_content', 1, 'Styleguide', '', 1, 0),
(8, 33, 1471356201, 1471356201, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a383a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31383a2274785f6d61736b5f686964655f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 104, 'tt_content', 1, 'Nam laoreet, erat ac laoreet euismod', 'Nam aliquam, lorem nec dapibus feugiat, ipsum quam laoreet arcu, sed ullamcorper augue augue vitae magna.', 1, 0),
(9, 33, 1471356201, 1471356201, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a383a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a363a2268696464656e223b4e3b733a31333a2274785f6d61736b5f7469746c65223b4e3b733a31383a2274785f6d61736b5f686964655f7469746c65223b4e3b733a31353a2274785f6d61736b5f63617074696f6e223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b733a393a22737461727474696d65223b4e3b733a373a22656e6474696d65223b4e3b7d, 104, 'tt_content', 2, 'Hambiam est lectus, interdum id', 'Blandit quis, mauris placerat sit amet, nibh. Lacus lectus est mattis vel, pharetra sit amet.', 1, 0);

CREATE TABLE `tx_mask_panel` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `tstamp` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `crdate` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `cruser_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `deleted` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `hidden` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `starttime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `endtime` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `t3ver_oid` int(11) NOT NULL DEFAULT '0',
  `t3ver_id` int(11) NOT NULL DEFAULT '0',
  `t3ver_wsid` int(11) NOT NULL DEFAULT '0',
  `t3ver_label` varchar(255) NOT NULL DEFAULT '',
  `t3ver_state` tinyint(4) NOT NULL DEFAULT '0',
  `t3ver_stage` int(11) NOT NULL DEFAULT '0',
  `t3ver_count` int(11) NOT NULL DEFAULT '0',
  `t3ver_tstamp` int(11) NOT NULL DEFAULT '0',
  `t3ver_move_id` int(11) NOT NULL DEFAULT '0',
  `sys_language_uid` int(11) NOT NULL DEFAULT '0',
  `l10n_parent` int(11) NOT NULL DEFAULT '0',
  `l10n_diffsource` mediumblob,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `parenttable` varchar(255) DEFAULT '',
  `sorting` int(11) NOT NULL DEFAULT '0',
  `tx_mask_title` tinytext,
  `tx_mask_bodytext` text,
  `tx_mask_image` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tx_mask_panel` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `parentid`, `parenttable`, `sorting`, `tx_mask_title`, `tx_mask_bodytext`, `tx_mask_image`) VALUES
(1, 32, 1467986657, 1467986657, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a333a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a383a22706172656e746964223b4e3b733a31333a2274785f6d61736b5f696d616765223b4e3b7d, 105, 'tt_content', 1, 'Curabitur ullamcorper ultricies nisi.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.', 1),
(2, 32, 1467986657, 1467986657, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a323a7b733a31363a227379735f6c616e67756167655f756964223b4e3b733a383a22706172656e746964223b4e3b7d, 105, 'tt_content', 2, 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. ', 'Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. ', 0);


ALTER TABLE `tx_mask_flexbox`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

ALTER TABLE `tx_mask_item`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

ALTER TABLE `tx_mask_panel`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);


ALTER TABLE `tx_mask_flexbox`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `tx_mask_item`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
ALTER TABLE `tx_mask_panel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
