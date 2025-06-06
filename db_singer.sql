-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table db_singer.cache: ~2 rows (approximately)
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('sistem_manajemen_produk_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1749179551),
	('sistem_manajemen_produk_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1749179551;', 1749179551);

-- Dumping data for table db_singer.cache_locks: ~0 rows (approximately)

-- Dumping data for table db_singer.categories: ~3 rows (approximately)
INSERT INTO `categories` (`idcategories`, `category_name`, `created_at`, `updated_at`) VALUES
	(1, 'Jasa', '2025-06-05 06:48:19', '2025-06-05 06:48:19'),
	(2, 'Barang', '2025-06-05 18:26:02', '2025-06-05 18:26:02'),
	(3, 'Gudang Barang', '2025-06-05 18:32:01', '2025-06-05 18:54:18');

-- Dumping data for table db_singer.failed_jobs: ~0 rows (approximately)

-- Dumping data for table db_singer.jobs: ~0 rows (approximately)

-- Dumping data for table db_singer.job_batches: ~0 rows (approximately)

-- Dumping data for table db_singer.migrations: ~5 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '0001_01_01_000000_create_users_table', 1),
	(14, '0001_01_01_000001_create_cache_table', 1),
	(15, '0001_01_01_000002_create_jobs_table', 1),
	(16, '2025_06_05_125330_create_categories_table', 1),
	(17, '2025_06_05_125347_create_products_table', 1);

-- Dumping data for table db_singer.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table db_singer.products: ~1 rows (approximately)
INSERT INTO `products` (`idproduct`, `idcategories`, `product_name`, `price`, `stock`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Oreo', 5000, 10000, '2025-06-05 19:28:55', '2025-06-05 19:28:55');

-- Dumping data for table db_singer.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('WY5HI86rycVJWyCV0DQG7UydnAdHh2XyJ8AcyuBZ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaHgzdExrOXhaTkdEV2Q5RHZMNERIclkzUlhSZzRQWWpXQ1BKMVVvQyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6ODoiZmlsYW1lbnQiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRDdjk1aFRNNEloNHR5WDcxQlNEUlRPYmFuYVg0QXkwLjA3T0dHSEU0Rnd2MmE3Zm9INzA1SyI7fQ==', 1749179875);

-- Dumping data for table db_singer.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$Cv95hTM4Ih4tyX71BSDRTObanaX4Ay0.07OGGHE4Fwv2a7foH705K', NULL, '2025-06-05 06:18:23', '2025-06-05 06:18:23');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
