-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 21 Mars 2016 à 22:30
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `extranet_rubis`
--

-- --------------------------------------------------------

--
-- Structure de la table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `label_department` varchar(64) DEFAULT NULL,
  `creat_at` datetime NOT NULL,
  `edit_at` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `department`
--

INSERT INTO `department` (`id_department`, `label_department`, `creat_at`, `edit_at`, `edit_by`) VALUES
(4, 'Technique', '2016-03-17 09:37:06', '2016-03-17 09:37:06', 1),
(19, 'Marketing', '2016-03-17 11:18:22', '2016-03-17 11:18:22', 1),
(20, 'Revendeurs', '2016-03-17 11:19:27', '2016-03-17 11:19:27', 1),
(22, 'Administration', '2016-03-17 11:21:51', '2016-03-17 11:21:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `id_mail` int(11) NOT NULL,
  `email_emetter` varchar(64) DEFAULT NULL,
  `email_receiver` varchar(64) DEFAULT NULL,
  `subject` varchar(64) DEFAULT NULL,
  `content` text,
  `date_email_sender` datetime DEFAULT NULL,
  `date_email_receiver` datetime DEFAULT NULL,
  `id_user_from` int(11) DEFAULT NULL,
  `id_uder_to` int(11) DEFAULT NULL,
  `del_at_from` datetime DEFAULT NULL,
  `del_at_to` datetime DEFAULT NULL,
  `id_placeholder_senders` int(11) DEFAULT NULL,
  `id_placeholder_receiver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `email_placeholder`
--

CREATE TABLE `email_placeholder` (
  `id_placeholder` int(11) NOT NULL,
  `placeolder` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
  `id_media` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `origin_name` varchar(255) DEFAULT NULL,
  `edit_at` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `del_at` datetime DEFAULT NULL,
  `del_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media_type`
--

CREATE TABLE `media_type` (
  `id_media_type` int(11) NOT NULL,
  `media_type` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id_newsletter` int(11) NOT NULL,
  `content` text,
  `creat_at` datetime DEFAULT NULL,
  `edit_at` datetime DEFAULT NULL,
  `id_status` varchar(32) DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `creat_by` int(11) DEFAULT NULL,
  `del_by` int(11) DEFAULT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id_page` int(11) NOT NULL,
  `content` text,
  `slug` varchar(64) DEFAULT NULL,
  `title` varchar(64) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `creat_at` datetime DEFAULT NULL,
  `creat_by` int(11) DEFAULT NULL,
  `edit_at` datetime DEFAULT NULL,
  `edit_by` int(11) DEFAULT NULL,
  `del_at` datetime DEFAULT NULL,
  `del_by` int(11) DEFAULT NULL,
  `id_media` int(11) DEFAULT NULL,
  `target_id_target` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `status_newsletter`
--

CREATE TABLE `status_newsletter` (
  `id_status` int(11) NOT NULL,
  `label` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `target`
--

CREATE TABLE `target` (
  `id_target` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tchat`
--

CREATE TABLE `tchat` (
  `id_message` int(11) NOT NULL,
  `message` text,
  `datetime` int(11) DEFAULT NULL,
  `id_department` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `login` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `edit_at` datetime DEFAULT NULL,
  `del_at` datetime DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `id_department` int(11) NOT NULL,
  `lastname` varchar(64) DEFAULT NULL,
  `firstname` varchar(64) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `password`, `edit_at`, `del_at`, `online`, `id_department`, `lastname`, `firstname`) VALUES
(1, 'glenn.guegan@gmail.com', 'glenn.guegan@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2016-03-17 11:48:59', NULL, NULL, 4, 'Guegan', 'Glenn');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`);

--
-- Index pour la table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_mail`),
  ADD KEY `fk_email_email_placeholder1_idx` (`id_placeholder_senders`),
  ADD KEY `fk_email_email_placeholder1_idx1` (`id_placeholder_receiver`);

--
-- Index pour la table `email_placeholder`
--
ALTER TABLE `email_placeholder`
  ADD PRIMARY KEY (`id_placeholder`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_media`);

--
-- Index pour la table `media_type`
--
ALTER TABLE `media_type`
  ADD PRIMARY KEY (`id_media_type`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_newsletter`),
  ADD KEY `fk_newsletter_department1_idx` (`id_department`);

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id_page`),
  ADD KEY `fk_pages_target1_idx` (`target_id_target`);

--
-- Index pour la table `status_newsletter`
--
ALTER TABLE `status_newsletter`
  ADD PRIMARY KEY (`id_status`);

--
-- Index pour la table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id_target`);

--
-- Index pour la table `tchat`
--
ALTER TABLE `tchat`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `fk_tchat_department1_idx` (`id_department`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_users_department_idx` (`id_department`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `email`
--
ALTER TABLE `email`
  MODIFY `id_mail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `email_placeholder`
--
ALTER TABLE `email_placeholder`
  MODIFY `id_placeholder` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
  MODIFY `id_media` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `media_type`
--
ALTER TABLE `media_type`
  MODIFY `id_media_type` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id_newsletter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pages`
--
ALTER TABLE `pages`
  MODIFY `id_page` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `status_newsletter`
--
ALTER TABLE `status_newsletter`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `target`
--
ALTER TABLE `target`
  MODIFY `id_target` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tchat`
--
ALTER TABLE `tchat`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `id_placeholder_receiver` FOREIGN KEY (`id_placeholder_receiver`) REFERENCES `email_placeholder` (`id_placeholder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_placeholder_senders` FOREIGN KEY (`id_placeholder_senders`) REFERENCES `email_placeholder` (`id_placeholder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD CONSTRAINT `id_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `id_target` FOREIGN KEY (`target_id_target`) REFERENCES `target` (`id_target`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tchat`
--
ALTER TABLE `tchat`
  ADD CONSTRAINT `id_department_tchat` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`) ON DELETE NO ACTION ON UPDATE NO ACTION;
