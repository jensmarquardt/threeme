SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `tx_mask_carousel` (
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
  `tx_mask_image` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tx_mask_carousel` (`uid`, `pid`, `tstamp`, `crdate`, `cruser_id`, `deleted`, `hidden`, `starttime`, `endtime`, `t3ver_oid`, `t3ver_id`, `t3ver_wsid`, `t3ver_label`, `t3ver_state`, `t3ver_stage`, `t3ver_count`, `t3ver_tstamp`, `t3ver_move_id`, `sys_language_uid`, `l10n_parent`, `l10n_diffsource`, `parentid`, `parenttable`, `sorting`, `tx_mask_title`, `tx_mask_caption`, `tx_mask_image`) VALUES
(1, 33, 1467362563, 1467287972, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 4, 'tt_content', 3, 'Motive 3', '', 1),
(2, 33, 1467362563, 1467287972, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 4, 'tt_content', 2, 'Motive 2', '', 1),
(3, 33, 1467362563, 1467287972, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 4, 'tt_content', 1, 'Motive 1', '', 1),
(4, 34, 1467902815, 1467361538, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 124, 'tt_content', 1, 'Motive 1', '', 1),
(5, 34, 1467902815, 1467361538, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 124, 'tt_content', 2, 'Motive 2', '', 1),
(6, 34, 1467902815, 1467361538, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 124, 'tt_content', 3, 'Motive 3', '', 1);

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
(1, 24, 1467362710, 1467287972, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 98, 'tt_content', 2, 'Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. ', 'Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. ', 0),
(2, 24, 1467902829, 1467287972, 1, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, -1, 0, 0x613a313a7b733a363a2268696464656e223b4e3b7d, 98, 'tt_content', 1, 'Curabitur ullamcorper ultricies nisi.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.', 1);


ALTER TABLE `tx_mask_carousel`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);

ALTER TABLE `tx_mask_panel`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `parent` (`pid`),
  ADD KEY `t3ver_oid` (`t3ver_oid`,`t3ver_wsid`),
  ADD KEY `language` (`l10n_parent`,`sys_language_uid`);


ALTER TABLE `tx_mask_carousel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
ALTER TABLE `tx_mask_panel`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
