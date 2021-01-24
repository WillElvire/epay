-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 22 jan. 2021 à 23:32
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `epay`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `historiques`
--

CREATE TABLE `historiques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2011_01_22_105001_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_01_11_081453_create_money_table', 1),
(6, '2021_01_11_081519_create_historiques_table', 1),
(7, '2021_01_11_082152_create_contacts_table', 1),
(8, '2021_01_20_122737_create_trasactions_table', 1),
(9, '2021_01_20_123055_create_retraits_table', 1),
(10, '2021_01_22_202858_create_retraits_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `money`
--

CREATE TABLE `money` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `retraits`
--

CREATE TABLE `retraits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `money` int(11) NOT NULL,
  `payement_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `number_of_payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `retraits`
--

INSERT INTO `retraits` (`id`, `money`, `payement_type`, `user_id`, `number_of_payment`, `created_at`, `updated_at`) VALUES
(1, 1000, 'orange', 1, '77889999', '2021-01-22 20:58:31', '2021-01-22 20:58:31');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-01-22 11:15:46', '2021-01-22 11:15:46'),
(2, 'user', '2021-01-22 11:15:46', '2021-01-22 11:15:46');

-- --------------------------------------------------------

--
-- Structure de la table `trasactions`
--

CREATE TABLE `trasactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pack` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `payment_type` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `retour_sur_investissement` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trasactions`
--

INSERT INTO `trasactions` (`id`, `pack`, `money`, `payment_type`, `retour_sur_investissement`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 2000, 1080000, 'Orange Money', 0, 1, '2021-01-22 19:00:09', '2021-01-22 19:00:09');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profit_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `user_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parrain_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification` tinyint(1) NOT NULL DEFAULT 0,
  `validation` tinyint(1) NOT NULL DEFAULT 0,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `sexe`, `profit_avatar`, `user_code`, `parrain_code`, `country`, `verification`, `validation`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'username0', 'userlastname0', 'XXXXXXXX', 'M', 'prfit.jpg', '1yyIppEBOoSrZ7TgxQYC', NULL, 'Country0', 1, 1, 2, 'user_0@epay.com', NULL, '$2y$10$Ny0DUxMltrtTF.XfHYvxzu/t4.Hg8EoHPKcZ6/410yMXftavg97JG', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(2, 'username1', 'userlastname1', 'XXXXXXXX', 'M', 'prfit.jpg', 'HfC0Qi6Y9RZOsr9rQ3nI', '1yyIppEBOoSrZ7TgxQYC', 'Country1', 1, 1, 2, 'user_1@epay.com', NULL, '$2y$10$B2/DPAfYyhbMFzqsKed1G.ZL1I0xgR2uPRX8n0Zyp6U0S8vpe7U..', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(3, 'username2', 'userlastname2', 'XXXXXXXX', 'M', 'prfit.jpg', 'tkZ31MU0sCWvjmdmnUrv', '1yyIppEBOoSrZ7TgxQYC', 'Country2', 1, 1, 2, 'user_2@epay.com', NULL, '$2y$10$wsGM3RMfmQ9nRScF4lq8ZO9nI9wqOu9San8ThmmB2rviF2VqwzjEy', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(4, 'username3', 'userlastname3', 'XXXXXXXX', 'M', 'prfit.jpg', '8YLfamUGWpAtRuGWqZa5', '1yyIppEBOoSrZ7TgxQYC', 'Country3', 1, 1, 2, 'user_3@epay.com', NULL, '$2y$10$3484bLzJFWKUQQpLF15w8uar10GxnPyebxFqlPoym3paWCy0STYNa', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(5, 'username4', 'userlastname4', 'XXXXXXXX', 'M', 'prfit.jpg', 'oCz6YV5UVsgvohgRvBlE', '1yyIppEBOoSrZ7TgxQYC', 'Country4', 1, 1, 2, 'user_4@epay.com', NULL, '$2y$10$bAdaHuJhbGFk.2aXuO3kpu0IjPCWmxi/sZOe3PYyvoMOS0LEQp2Oe', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(6, 'username5', 'userlastname5', 'XXXXXXXX', 'M', 'prfit.jpg', 'kfg5VDDVC8Ss2lWYev7Z', NULL, 'Country5', 1, 1, 2, 'user_5@epay.com', NULL, '$2y$10$oOfiX73pSZu4cDg3LT98jueDyZwjPf5jWD0Q2PwBciUCdY891cNwK', NULL, '2021-01-22 11:17:23', '2021-01-22 11:17:23'),
(7, 'username6', 'userlastname6', 'XXXXXXXX', 'M', 'prfit.jpg', '7GXwSGl9mSxS8pCbMfZo', NULL, 'Country6', 1, 1, 2, 'user_6@epay.com', NULL, '$2y$10$n4i3hOUub20gTxdSNNKIWemqM62akUCCgrr7LN6Y/MWgt74VG0M7G', NULL, '2021-01-22 11:17:24', '2021-01-22 11:17:24'),
(8, 'username7', 'userlastname7', 'XXXXXXXX', 'M', 'prfit.jpg', 'tDbmJJe6b6lu97StcJB1', NULL, 'Country7', 1, 1, 2, 'user_7@epay.com', NULL, '$2y$10$B0rWI1ErGhjEXkcsFByLHebSkuGgnrz.io5ifE.eiXyEr.H9uc.GC', NULL, '2021-01-22 11:17:24', '2021-01-22 11:17:24'),
(9, 'username8', 'userlastname8', 'XXXXXXXX', 'M', 'prfit.jpg', 'UGh2CYxGI9pBBd8a2Zwd', NULL, 'Country8', 1, 1, 2, 'user_8@epay.com', NULL, '$2y$10$Loc2ZtaSFUzhX/Me4xgpY.LaJG8YFhXzZ3K6upwgZqkQz4ZXQHlyC', NULL, '2021-01-22 11:17:24', '2021-01-22 11:17:24'),
(10, 'username9', 'userlastname9', 'XXXXXXXX', 'M', 'prfit.jpg', 'ZAtRqyROL8QG0gl5YSHV', NULL, 'Country9', 1, 1, 2, 'user_9@epay.com', NULL, '$2y$10$RQ3rLZhJw6A489JLHuV7eOCjd0Y.wZBbVYlufKS6RnYusbdzuoNhy', NULL, '2021-01-22 11:17:24', '2021-01-22 11:17:24'),
(11, 'username10', 'userlastname10', 'XXXXXXXX', 'M', 'prfit.jpg', 'hCSfiyhcgAwqhUDWaGss', NULL, 'Country10', 1, 1, 2, 'user_10@epay.com', NULL, '$2y$10$oH25r1UB8roR2RAQObHsWuk5sInqxgfkYP5kfGftmucXauT4RImqW', NULL, '2021-01-22 11:17:24', '2021-01-22 11:17:24'),
(12, 'DA', 'SIE ROGER', 'XXXXXXXX', 'M', 'prfit.jpg', 's2pss19B8ZJZF9cahffc', NULL, 'Abidjan', 1, 1, 1, 'dsieroger@gmail.com', NULL, '$2y$10$AMAfQcwj6Ms3wt4lrDD40u1QwwI4gbeK1b6v7tngbYvE22M7rye/y', NULL, '2021-01-22 11:19:36', '2021-01-22 11:19:36');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historiques_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`),
  ADD KEY `money_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `retraits`
--
ALTER TABLE `retraits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `retraits_user_id_foreign` (`user_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trasactions`
--
ALTER TABLE `trasactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trasactions_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `historiques`
--
ALTER TABLE `historiques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `money`
--
ALTER TABLE `money`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `retraits`
--
ALTER TABLE `retraits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `trasactions`
--
ALTER TABLE `trasactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `historiques`
--
ALTER TABLE `historiques`
  ADD CONSTRAINT `historiques_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `money`
--
ALTER TABLE `money`
  ADD CONSTRAINT `money_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `retraits`
--
ALTER TABLE `retraits`
  ADD CONSTRAINT `retraits_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `trasactions`
--
ALTER TABLE `trasactions`
  ADD CONSTRAINT `trasactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
