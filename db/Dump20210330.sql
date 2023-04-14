-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: phuongnam
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accesses`
--

DROP TABLE IF EXISTS `accesses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accesses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `roles` json NOT NULL,
  `accessible_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessible_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accesses_accessible_type_accessible_id_index` (`accessible_type`,`accessible_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accesses`
--

LOCK TABLES `accesses` WRITE;
/*!40000 ALTER TABLE `accesses` DISABLE KEYS */;
/*!40000 ALTER TABLE `accesses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `action_events`
--

DROP TABLE IF EXISTS `action_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `action_events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `batch_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint unsigned NOT NULL,
  `target_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned DEFAULT NULL,
  `fields` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `changes` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  KEY `action_events_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `action_events`
--

LOCK TABLES `action_events` WRITE;
/*!40000 ALTER TABLE `action_events` DISABLE KEYS */;
INSERT INTO `action_events` VALUES (1,'92ec141e-11e8-4ea5-b14a-dd60450b4d2a',1,'Create','OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'','finished','','2021-03-11 01:34:34','2021-03-11 01:34:34',NULL,'{\"name\":\"Top menu\",\"slug\":\"header\",\"updated_at\":\"2021-03-11T01:34:34.000000Z\",\"created_at\":\"2021-03-11T01:34:34.000000Z\",\"id\":1}'),(2,'92ec1540-a7f4-4c74-a4d0-fd7ca580588d',1,'Create','App\\Models\\Post',1,'App\\Models\\Post',1,'App\\Models\\Post',1,'','finished','','2021-03-11 01:37:44','2021-03-11 01:37:44',NULL,'{\"title\":\"Tin t\\u1ee9c\",\"slug\":\"tin-tuc\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-11T01:37:44.000000Z\",\"created_at\":\"2021-03-11T01:37:44.000000Z\",\"id\":1}'),(3,'92ec2784-40b0-492d-adb8-89c23fa10ba5',1,'Create','OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'','finished','','2021-03-11 02:28:49','2021-03-11 02:28:49',NULL,'{\"name\":\"Footer Menu\",\"slug\":\"footer\",\"updated_at\":\"2021-03-11T02:28:49.000000Z\",\"created_at\":\"2021-03-11T02:28:49.000000Z\",\"id\":2}'),(4,'92ec27cc-734b-49d2-a394-0dd815e4f70d',1,'Update','OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'','finished','','2021-03-11 02:29:36','2021-03-11 02:29:36','{\"name\":\"Footer Menu\"}','{\"name\":\"Footer Menu1\"}'),(5,'92ecab75-15ce-48e0-bd45-1a28e628ad5a',1,'Create','App\\Models\\Widget',1,'App\\Models\\Widget',1,'App\\Models\\Widget',1,'','finished','','2021-03-11 08:37:45','2021-03-11 08:37:45',NULL,'{\"name\":\"V\\u1edbi Kh\\u00e1ch H\\u00e0ng\",\"items\":[],\"updated_at\":\"2021-03-11T08:37:43.000000Z\",\"created_at\":\"2021-03-11T08:37:43.000000Z\",\"id\":1}'),(6,'92ef6358-7515-4f4d-8016-908909dc650c',1,'Update','OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'','finished','','2021-03-12 17:03:36','2021-03-12 17:03:36','[]','[]'),(7,'92f0a6b0-7bc3-46ea-aded-8f5820245dc7',1,'Create','App\\Models\\Slider',1,'App\\Models\\Slider',1,'App\\Models\\Slider',1,'','finished','','2021-03-13 08:07:43','2021-03-13 08:07:43',NULL,'{\"image\":\"81oF8FpUumJWCDpvxdf69CPSK2efUwOQzrJTDZ4T.jpg\",\"heading\":\"Phuong Nam\",\"description\":\"Pro phuong nam\",\"url\":\"\\/\",\"updated_at\":\"2021-03-13T08:07:43.000000Z\",\"created_at\":\"2021-03-13T08:07:43.000000Z\",\"id\":1}'),(8,'92f0a9c9-c1f4-4311-a098-d750a014e180',1,'Update','App\\Models\\Slider',1,'App\\Models\\Slider',1,'App\\Models\\Slider',1,'','finished','','2021-03-13 08:16:23','2021-03-13 08:16:23','{\"url\":\"\\/\"}','{\"url\":\"\\/gioi-thieu\"}'),(9,'92f0ab30-c8d8-4b04-bce6-96047c117482',1,'Create','App\\Models\\Widget',2,'App\\Models\\Widget',2,'App\\Models\\Widget',2,'','finished','','2021-03-13 08:20:19','2021-03-13 08:20:19',NULL,'{\"name\":\"C\\u00c1C NGUY\\u00caN T\\u1eaeC C\\u1ee6A CH\\u00daNG T\\u00d4I\",\"items\":[{\"layout\":\"html\",\"key\":\"afZWjVq4pBqaRLIX\",\"attributes\":{\"html\":\"V\\u1edbi Kh\\u00e1ch H\\u00e0ng\\nCh\\u1ea5t l\\u01b0\\u1ee3ng, uy t\\u00edn, ti\\u1ebfn \\u0111\\u1ed9.\\nLu\\u00f4n tho\\u1ea3 m\\u00e3n c\\u00e1c nhu c\\u1ea7u c\\u1ee7a t\\u1ea5t c\\u1ea3 c\\u00e1c kh\\u00e1ch h\\u00e0ng v\\u1edbi ch\\u1ea5t l\\u01b0\\u1ee3ng t\\u1ed1t nh\\u1ea5t.\\nC\\u1edfi m\\u1edf, th\\u00e2n thi\\u1ec7n, c\\u1ea7u th\\u1ecb, nhi\\u1ec7t t\\u00ecnh v\\u00e0 tr\\u00e2n tr\\u1ecdng.\\nN\\u1ed7 l\\u1ef1c cao nh\\u1ea5t \\u0111\\u1ec3 c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 lu\\u00f4n ti\\u1ebfn b\\u1ed9 h\\u01a1n, g\\u00f3p ph\\u1ea7n n\\u00e2ng cao ti\\u00eau chu\\u1ea9n cu\\u1ed9c s\\u1ed1ng.\"}},{\"layout\":\"html\",\"key\":\"N0bXNVx5nZ1OL2Ar\",\"attributes\":{\"html\":\"V\\u1edbi Nh\\u00e2n Vi\\u00ean\\nT\\u1ea1o c\\u01a1 h\\u1ed9i h\\u1ecdc t\\u1eadp, n\\u00e2ng cao tr\\u00ecnh \\u0111\\u1ed9 v\\u00e0 t\\u00e1c phong l\\u00e0m vi\\u1ec7c, t\\u1eebng b\\u01b0\\u1edbc \\u0111\\u1ea1t ti\\u00eau chu\\u1ea9n qu\\u1ed1c t\\u1ebf.\\nT\\u1ea1o c\\u01a1 h\\u00f4i th\\u0103ng ti\\u1ebfn tr\\u00ean c\\u01a1 s\\u1edf hi\\u1ec7u qu\\u1ea3 c\\u00f4ng vi\\u1ec7c, t\\u00ednh ch\\u00ednh tr\\u1ef1c v\\u00e0 l\\u00f2ng trung th\\u00e0nh v\\u1edbi c\\u00f4ng ty, nh\\u1eb1m \\u0111\\u1ea3m b\\u1ea3o \\u0111i\\u1ec1u ki\\u1ec7n ng\\u00e0y c\\u00e0ng t\\u1ed1t h\\u01a1n cho cu\\u1ed9c s\\u1ed1ng c\\u1ee7a nh\\u00e2n vi\\u00ean v\\u00e0 s\\u1ef1 ph\\u00e1t tri\\u1ec3n b\\u1ec1n v\\u1eefng c\\u1ee7a c\\u00f4ng ty.\"}}],\"updated_at\":\"2021-03-13T08:20:19.000000Z\",\"created_at\":\"2021-03-13T08:20:19.000000Z\",\"id\":2}'),(10,'92f0ac3f-acee-4a16-bee7-cac6f3ab46e4',1,'Update','App\\Models\\Widget',2,'App\\Models\\Widget',2,'App\\Models\\Widget',2,'','finished','','2021-03-13 08:23:16','2021-03-13 08:23:16','{\"items\":\"[{\\\"key\\\": \\\"afZWjVq4pBqaRLIX\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"V\\u1edbi Kh\\u00e1ch H\\u00e0ng\\\\nCh\\u1ea5t l\\u01b0\\u1ee3ng, uy t\\u00edn, ti\\u1ebfn \\u0111\\u1ed9.\\\\nLu\\u00f4n tho\\u1ea3 m\\u00e3n c\\u00e1c nhu c\\u1ea7u c\\u1ee7a t\\u1ea5t c\\u1ea3 c\\u00e1c kh\\u00e1ch h\\u00e0ng v\\u1edbi ch\\u1ea5t l\\u01b0\\u1ee3ng t\\u1ed1t nh\\u1ea5t.\\\\nC\\u1edfi m\\u1edf, th\\u00e2n thi\\u1ec7n, c\\u1ea7u th\\u1ecb, nhi\\u1ec7t t\\u00ecnh v\\u00e0 tr\\u00e2n tr\\u1ecdng.\\\\nN\\u1ed7 l\\u1ef1c cao nh\\u1ea5t \\u0111\\u1ec3 c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 lu\\u00f4n ti\\u1ebfn b\\u1ed9 h\\u01a1n, g\\u00f3p ph\\u1ea7n n\\u00e2ng cao ti\\u00eau chu\\u1ea9n cu\\u1ed9c s\\u1ed1ng.\\\"}}, {\\\"key\\\": \\\"N0bXNVx5nZ1OL2Ar\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"V\\u1edbi Nh\\u00e2n Vi\\u00ean\\\\nT\\u1ea1o c\\u01a1 h\\u1ed9i h\\u1ecdc t\\u1eadp, n\\u00e2ng cao tr\\u00ecnh \\u0111\\u1ed9 v\\u00e0 t\\u00e1c phong l\\u00e0m vi\\u1ec7c, t\\u1eebng b\\u01b0\\u1edbc \\u0111\\u1ea1t ti\\u00eau chu\\u1ea9n qu\\u1ed1c t\\u1ebf.\\\\nT\\u1ea1o c\\u01a1 h\\u00f4i th\\u0103ng ti\\u1ebfn tr\\u00ean c\\u01a1 s\\u1edf hi\\u1ec7u qu\\u1ea3 c\\u00f4ng vi\\u1ec7c, t\\u00ednh ch\\u00ednh tr\\u1ef1c v\\u00e0 l\\u00f2ng trung th\\u00e0nh v\\u1edbi c\\u00f4ng ty, nh\\u1eb1m \\u0111\\u1ea3m b\\u1ea3o \\u0111i\\u1ec1u ki\\u1ec7n ng\\u00e0y c\\u00e0ng t\\u1ed1t h\\u01a1n cho cu\\u1ed9c s\\u1ed1ng c\\u1ee7a nh\\u00e2n vi\\u00ean v\\u00e0 s\\u1ef1 ph\\u00e1t tri\\u1ec3n b\\u1ec1n v\\u1eefng c\\u1ee7a c\\u00f4ng ty.\\\"}}]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"afZWjVq4pBqaRLIX\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Kh\\\\u00e1ch H\\\\u00e0ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng, uy t\\\\u00edn, ti\\\\u1ebfn \\\\u0111\\\\u1ed9.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\\\u00f4n tho\\\\u1ea3 m\\\\u00e3n c\\\\u00e1c nhu c\\\\u1ea7u c\\\\u1ee7a t\\\\u1ea5t c\\\\u1ea3 c\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng t\\\\u1ed1t nh\\\\u1ea5t.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\\\u1edfi m\\\\u1edf, th\\\\u00e2n thi\\\\u1ec7n, c\\\\u1ea7u th\\\\u1ecb, nhi\\\\u1ec7t t\\\\u00ecnh v\\\\u00e0 tr\\\\u00e2n tr\\\\u1ecdng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\\\u1ed7 l\\\\u1ef1c cao nh\\\\u1ea5t \\\\u0111\\\\u1ec3 c\\\\u00e1c s\\\\u1ea3n ph\\\\u1ea9m v\\\\u00e0 d\\\\u1ecbch v\\\\u1ee5 lu\\\\u00f4n ti\\\\u1ebfn b\\\\u1ed9 h\\\\u01a1n, g\\\\u00f3p ph\\\\u1ea7n n\\\\u00e2ng cao ti\\\\u00eau chu\\\\u1ea9n cu\\\\u1ed9c s\\\\u1ed1ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"N0bXNVx5nZ1OL2Ar\\\",\\\"attributes\\\":{\\\"html\\\":\\\"V\\\\u1edbi Nh\\\\u00e2n Vi\\\\u00ean\\\\nT\\\\u1ea1o c\\\\u01a1 h\\\\u1ed9i h\\\\u1ecdc t\\\\u1eadp, n\\\\u00e2ng cao tr\\\\u00ecnh \\\\u0111\\\\u1ed9 v\\\\u00e0 t\\\\u00e1c phong l\\\\u00e0m vi\\\\u1ec7c, t\\\\u1eebng b\\\\u01b0\\\\u1edbc \\\\u0111\\\\u1ea1t ti\\\\u00eau chu\\\\u1ea9n qu\\\\u1ed1c t\\\\u1ebf.\\\\nT\\\\u1ea1o c\\\\u01a1 h\\\\u00f4i th\\\\u0103ng ti\\\\u1ebfn tr\\\\u00ean c\\\\u01a1 s\\\\u1edf hi\\\\u1ec7u qu\\\\u1ea3 c\\\\u00f4ng vi\\\\u1ec7c, t\\\\u00ednh ch\\\\u00ednh tr\\\\u1ef1c v\\\\u00e0 l\\\\u00f2ng trung th\\\\u00e0nh v\\\\u1edbi c\\\\u00f4ng ty, nh\\\\u1eb1m \\\\u0111\\\\u1ea3m b\\\\u1ea3o \\\\u0111i\\\\u1ec1u ki\\\\u1ec7n ng\\\\u00e0y c\\\\u00e0ng t\\\\u1ed1t h\\\\u01a1n cho cu\\\\u1ed9c s\\\\u1ed1ng c\\\\u1ee7a nh\\\\u00e2n vi\\\\u00ean v\\\\u00e0 s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n b\\\\u1ec1n v\\\\u1eefng c\\\\u1ee7a c\\\\u00f4ng ty.\\\"}}]\"}'),(11,'92f0acc8-5269-41b9-aa79-be7b8d95a04d',1,'Update','App\\Models\\Widget',2,'App\\Models\\Widget',2,'App\\Models\\Widget',2,'','finished','','2021-03-13 08:24:46','2021-03-13 08:24:46','{\"items\":\"[{\\\"key\\\": \\\"afZWjVq4pBqaRLIX\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi Kh\\u00e1ch H\\u00e0ng<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\u1ea5t l\\u01b0\\u1ee3ng, uy t\\u00edn, ti\\u1ebfn \\u0111\\u1ed9.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\u00f4n tho\\u1ea3 m\\u00e3n c\\u00e1c nhu c\\u1ea7u c\\u1ee7a t\\u1ea5t c\\u1ea3 c\\u00e1c kh\\u00e1ch h\\u00e0ng v\\u1edbi ch\\u1ea5t l\\u01b0\\u1ee3ng t\\u1ed1t nh\\u1ea5t.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\u1edfi m\\u1edf, th\\u00e2n thi\\u1ec7n, c\\u1ea7u th\\u1ecb, nhi\\u1ec7t t\\u00ecnh v\\u00e0 tr\\u00e2n tr\\u1ecdng.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\u1ed7 l\\u1ef1c cao nh\\u1ea5t \\u0111\\u1ec3 c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 lu\\u00f4n ti\\u1ebfn b\\u1ed9 h\\u01a1n, g\\u00f3p ph\\u1ea7n n\\u00e2ng cao ti\\u00eau chu\\u1ea9n cu\\u1ed9c s\\u1ed1ng.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}, {\\\"key\\\": \\\"N0bXNVx5nZ1OL2Ar\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"V\\u1edbi Nh\\u00e2n Vi\\u00ean\\\\nT\\u1ea1o c\\u01a1 h\\u1ed9i h\\u1ecdc t\\u1eadp, n\\u00e2ng cao tr\\u00ecnh \\u0111\\u1ed9 v\\u00e0 t\\u00e1c phong l\\u00e0m vi\\u1ec7c, t\\u1eebng b\\u01b0\\u1edbc \\u0111\\u1ea1t ti\\u00eau chu\\u1ea9n qu\\u1ed1c t\\u1ebf.\\\\nT\\u1ea1o c\\u01a1 h\\u00f4i th\\u0103ng ti\\u1ebfn tr\\u00ean c\\u01a1 s\\u1edf hi\\u1ec7u qu\\u1ea3 c\\u00f4ng vi\\u1ec7c, t\\u00ednh ch\\u00ednh tr\\u1ef1c v\\u00e0 l\\u00f2ng trung th\\u00e0nh v\\u1edbi c\\u00f4ng ty, nh\\u1eb1m \\u0111\\u1ea3m b\\u1ea3o \\u0111i\\u1ec1u ki\\u1ec7n ng\\u00e0y c\\u00e0ng t\\u1ed1t h\\u01a1n cho cu\\u1ed9c s\\u1ed1ng c\\u1ee7a nh\\u00e2n vi\\u00ean v\\u00e0 s\\u1ef1 ph\\u00e1t tri\\u1ec3n b\\u1ec1n v\\u1eefng c\\u1ee7a c\\u00f4ng ty.\\\"}}]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"afZWjVq4pBqaRLIX\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/teamwork128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Kh\\\\u00e1ch H\\\\u00e0ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng, uy t\\\\u00edn, ti\\\\u1ebfn \\\\u0111\\\\u1ed9.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\\\u00f4n tho\\\\u1ea3 m\\\\u00e3n c\\\\u00e1c nhu c\\\\u1ea7u c\\\\u1ee7a t\\\\u1ea5t c\\\\u1ea3 c\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng t\\\\u1ed1t nh\\\\u1ea5t.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\\\u1edfi m\\\\u1edf, th\\\\u00e2n thi\\\\u1ec7n, c\\\\u1ea7u th\\\\u1ecb, nhi\\\\u1ec7t t\\\\u00ecnh v\\\\u00e0 tr\\\\u00e2n tr\\\\u1ecdng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\\\u1ed7 l\\\\u1ef1c cao nh\\\\u1ea5t \\\\u0111\\\\u1ec3 c\\\\u00e1c s\\\\u1ea3n ph\\\\u1ea9m v\\\\u00e0 d\\\\u1ecbch v\\\\u1ee5 lu\\\\u00f4n ti\\\\u1ebfn b\\\\u1ed9 h\\\\u01a1n, g\\\\u00f3p ph\\\\u1ea7n n\\\\u00e2ng cao ti\\\\u00eau chu\\\\u1ea9n cu\\\\u1ed9c s\\\\u1ed1ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"N0bXNVx5nZ1OL2Ar\\\",\\\"attributes\\\":{\\\"html\\\":\\\"V\\\\u1edbi Nh\\\\u00e2n Vi\\\\u00ean\\\\nT\\\\u1ea1o c\\\\u01a1 h\\\\u1ed9i h\\\\u1ecdc t\\\\u1eadp, n\\\\u00e2ng cao tr\\\\u00ecnh \\\\u0111\\\\u1ed9 v\\\\u00e0 t\\\\u00e1c phong l\\\\u00e0m vi\\\\u1ec7c, t\\\\u1eebng b\\\\u01b0\\\\u1edbc \\\\u0111\\\\u1ea1t ti\\\\u00eau chu\\\\u1ea9n qu\\\\u1ed1c t\\\\u1ebf.\\\\nT\\\\u1ea1o c\\\\u01a1 h\\\\u00f4i th\\\\u0103ng ti\\\\u1ebfn tr\\\\u00ean c\\\\u01a1 s\\\\u1edf hi\\\\u1ec7u qu\\\\u1ea3 c\\\\u00f4ng vi\\\\u1ec7c, t\\\\u00ednh ch\\\\u00ednh tr\\\\u1ef1c v\\\\u00e0 l\\\\u00f2ng trung th\\\\u00e0nh v\\\\u1edbi c\\\\u00f4ng ty, nh\\\\u1eb1m \\\\u0111\\\\u1ea3m b\\\\u1ea3o \\\\u0111i\\\\u1ec1u ki\\\\u1ec7n ng\\\\u00e0y c\\\\u00e0ng t\\\\u1ed1t h\\\\u01a1n cho cu\\\\u1ed9c s\\\\u1ed1ng c\\\\u1ee7a nh\\\\u00e2n vi\\\\u00ean v\\\\u00e0 s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n b\\\\u1ec1n v\\\\u1eefng c\\\\u1ee7a c\\\\u00f4ng ty.\\\"}}]\"}'),(12,'92f0b3fb-01cf-43dd-98ac-cb7ff124d875',1,'Update','App\\Models\\Widget',2,'App\\Models\\Widget',2,'App\\Models\\Widget',2,'','finished','','2021-03-13 08:44:53','2021-03-13 08:44:53','{\"items\":\"[{\\\"key\\\": \\\"afZWjVq4pBqaRLIX\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\/images\\/teamwork128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\/div>\\\\n<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi Kh\\u00e1ch H\\u00e0ng<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\u1ea5t l\\u01b0\\u1ee3ng, uy t\\u00edn, ti\\u1ebfn \\u0111\\u1ed9.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\u00f4n tho\\u1ea3 m\\u00e3n c\\u00e1c nhu c\\u1ea7u c\\u1ee7a t\\u1ea5t c\\u1ea3 c\\u00e1c kh\\u00e1ch h\\u00e0ng v\\u1edbi ch\\u1ea5t l\\u01b0\\u1ee3ng t\\u1ed1t nh\\u1ea5t.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\u1edfi m\\u1edf, th\\u00e2n thi\\u1ec7n, c\\u1ea7u th\\u1ecb, nhi\\u1ec7t t\\u00ecnh v\\u00e0 tr\\u00e2n tr\\u1ecdng.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\u1ed7 l\\u1ef1c cao nh\\u1ea5t \\u0111\\u1ec3 c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 lu\\u00f4n ti\\u1ebfn b\\u1ed9 h\\u01a1n, g\\u00f3p ph\\u1ea7n n\\u00e2ng cao ti\\u00eau chu\\u1ea9n cu\\u1ed9c s\\u1ed1ng.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}, {\\\"key\\\": \\\"N0bXNVx5nZ1OL2Ar\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"V\\u1edbi Nh\\u00e2n Vi\\u00ean\\\\nT\\u1ea1o c\\u01a1 h\\u1ed9i h\\u1ecdc t\\u1eadp, n\\u00e2ng cao tr\\u00ecnh \\u0111\\u1ed9 v\\u00e0 t\\u00e1c phong l\\u00e0m vi\\u1ec7c, t\\u1eebng b\\u01b0\\u1edbc \\u0111\\u1ea1t ti\\u00eau chu\\u1ea9n qu\\u1ed1c t\\u1ebf.\\\\nT\\u1ea1o c\\u01a1 h\\u00f4i th\\u0103ng ti\\u1ebfn tr\\u00ean c\\u01a1 s\\u1edf hi\\u1ec7u qu\\u1ea3 c\\u00f4ng vi\\u1ec7c, t\\u00ednh ch\\u00ednh tr\\u1ef1c v\\u00e0 l\\u00f2ng trung th\\u00e0nh v\\u1edbi c\\u00f4ng ty, nh\\u1eb1m \\u0111\\u1ea3m b\\u1ea3o \\u0111i\\u1ec1u ki\\u1ec7n ng\\u00e0y c\\u00e0ng t\\u1ed1t h\\u01a1n cho cu\\u1ed9c s\\u1ed1ng c\\u1ee7a nh\\u00e2n vi\\u00ean v\\u00e0 s\\u1ef1 ph\\u00e1t tri\\u1ec3n b\\u1ec1n v\\u1eefng c\\u1ee7a c\\u00f4ng ty.\\\"}}]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"afZWjVq4pBqaRLIX\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/teamwork128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Kh\\\\u00e1ch H\\\\u00e0ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng, uy t\\\\u00edn, ti\\\\u1ebfn \\\\u0111\\\\u1ed9.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\\\u00f4n tho\\\\u1ea3 m\\\\u00e3n c\\\\u00e1c nhu c\\\\u1ea7u c\\\\u1ee7a t\\\\u1ea5t c\\\\u1ea3 c\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng t\\\\u1ed1t nh\\\\u1ea5t.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\\\u1edfi m\\\\u1edf, th\\\\u00e2n thi\\\\u1ec7n, c\\\\u1ea7u th\\\\u1ecb, nhi\\\\u1ec7t t\\\\u00ecnh v\\\\u00e0 tr\\\\u00e2n tr\\\\u1ecdng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\\\u1ed7 l\\\\u1ef1c cao nh\\\\u1ea5t \\\\u0111\\\\u1ec3 c\\\\u00e1c s\\\\u1ea3n ph\\\\u1ea9m v\\\\u00e0 d\\\\u1ecbch v\\\\u1ee5 lu\\\\u00f4n ti\\\\u1ebfn b\\\\u1ed9 h\\\\u01a1n, g\\\\u00f3p ph\\\\u1ea7n n\\\\u00e2ng cao ti\\\\u00eau chu\\\\u1ea9n cu\\\\u1ed9c s\\\\u1ed1ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"N0bXNVx5nZ1OL2Ar\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/team128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Nh\\\\u00e2n Vi\\\\u00ean<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\\\u1ea1o c\\\\u01a1 h\\\\u1ed9i h\\\\u1ecdc t\\\\u1eadp, n\\\\u00e2ng cao tr\\\\u00ecnh \\\\u0111\\\\u1ed9 v\\\\u00e0 t\\\\u00e1c phong l\\\\u00e0m vi\\\\u1ec7c, t\\\\u1eebng b\\\\u01b0\\\\u1edbc \\\\u0111\\\\u1ea1t ti\\\\u00eau chu\\\\u1ea9n qu\\\\u1ed1c t\\\\u1ebf.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\\\u1ea1o c\\\\u01a1 h\\\\u00f4i th\\\\u0103ng ti\\\\u1ebfn tr\\\\u00ean c\\\\u01a1 s\\\\u1edf hi\\\\u1ec7u qu\\\\u1ea3 c\\\\u00f4ng vi\\\\u1ec7c, t\\\\u00ednh ch\\\\u00ednh tr\\\\u1ef1c v\\\\u00e0 l\\\\u00f2ng trung th\\\\u00e0nh v\\\\u1edbi c\\\\u00f4ng ty, nh\\\\u1eb1m \\\\u0111\\\\u1ea3m b\\\\u1ea3o \\\\u0111i\\\\u1ec1u ki\\\\u1ec7n ng\\\\u00e0y c\\\\u00e0ng t\\\\u1ed1t h\\\\u01a1n cho cu\\\\u1ed9c s\\\\u1ed1ng c\\\\u1ee7a nh\\\\u00e2n vi\\\\u00ean v\\\\u00e0 s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n b\\\\u1ec1n v\\\\u1eefng c\\\\u1ee7a c\\\\u00f4ng ty.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"FgpRNgDx35MfCtJi\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/kh128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi \\\\u0110\\\\u1ed1i T\\\\u00e1c<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    X\\\\u00e2y d\\\\u1ef1ng v\\\\u00e0 gi\\\\u1eef g\\\\u00ecn m\\\\u1ed1i quan h\\\\u1ec7 \\\\u0111o\\\\u00e0n k\\\\u1ebft, \\\\u1ed5n \\\\u0111\\\\u1ecbnh, l\\\\u00e2u d\\\\u00e0i v\\\\u00e0 c\\\\u00f9ng c\\\\u00f3 l\\\\u1ee3i tr\\\\u00ean c\\\\u01a1 s\\\\u1edf truy\\\\u1ec1n th\\\\u1ed1ng kinh doanh \\\\u0111\\\\u00e1ng tin c\\\\u1eady, \\\\u0111\\\\u1ea3m b\\\\u1ea3o ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng h\\\\u00e0ng ho\\\\u00e1 v\\\\u00e0 t\\\\u00f4n tr\\\\u1ecdng kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    H\\\\u1ed7 tr\\\\u1ee3 \\\\u0111\\\\u1ec3 c\\\\u00f9ng n\\\\u00e2ng cao ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng kinh doanh nh\\\\u1eb1m tho\\\\u1ea3 m\\\\u00e3n t\\\\u1ed1t h\\\\u01a1n nhu c\\\\u1ea7u c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"dw7xfQ48FEdoDKUo\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/congdong128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi C\\\\u1ed9ng \\\\u0110\\\\u1ed3ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\\\u00f4n vinh v\\\\u00e0 gi\\\\u1eef g\\\\u00ecn nh\\\\u1eefng \\\\u0111\\\\u1ea1o \\\\u0111\\\\u1ee9c kinh doanh.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ho\\\\u00e0n th\\\\u00e0nh tr\\\\u00e1ch nhi\\\\u1ec7m x\\\\u00e3 h\\\\u1ed9i, ch\\\\u1ea5p h\\\\u00e0nh lu\\\\u1eadt ph\\\\u00e1p.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\\\u00edch c\\\\u1ef1c g\\\\u00f3p ph\\\\u1ea7n v\\\\u00e0o s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n chung c\\\\u1ee7a x\\\\u00e3 h\\\\u1ed9i.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    L\\\\u00e0m cho cu\\\\u1ed9c s\\\\u1ed1ng th\\\\u00eam nhi\\\\u1ec1u ti\\\\u1ec7n \\\\u00edch v\\\\u00e0 t\\\\u1ed1t \\\\u0111\\\\u1eb9p h\\\\u01a1n.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}}]\"}'),(13,'92f0b926-62eb-407f-a959-e2962c302660',1,'Delete','App\\Models\\Widget',1,'App\\Models\\Widget',1,'App\\Models\\Widget',1,'','finished','','2021-03-13 08:59:21','2021-03-13 08:59:21',NULL,NULL),(14,'92f0c11e-4a2b-4514-929d-fbf0fff94af3',1,'Update','App\\Models\\Slider',1,'App\\Models\\Slider',1,'App\\Models\\Slider',1,'','finished','','2021-03-13 09:21:37','2021-03-13 09:21:37','{\"heading\":\"Phuong Nam\",\"description\":\"Pro phuong nam\"}','{\"heading\":\"Ph\\u01b0\\u01a1ng Nam JSC\",\"description\":\"PRO PH\\u01af\\u01a0NG NAM - KH\\u1edeI NGU\\u1ed2N C\\u1ee6A S\\u1ef0 TH\\u00c0NH C\\u00d4NG\"}'),(15,'92f0c1ab-af70-4a7e-8204-bfbae8fa7224',1,'Create','App\\Models\\Slider',2,'App\\Models\\Slider',2,'App\\Models\\Slider',2,'','finished','','2021-03-13 09:23:10','2021-03-13 09:23:10',NULL,'{\"image\":\"z12N7RzqJCQ9Jo0hkXOwg9VorbgferDrKIkiEkwl.jpg\",\"heading\":\"Ph\\u01b0\\u01a1ng Nam JSC\",\"description\":\"PRO PH\\u01af\\u01a0NG NAM - KH\\u1edeI NGU\\u1ed2N C\\u1ee6A S\\u1ef0 TH\\u00c0NH C\\u00d4NG\",\"url\":\"\\/gioi-thieu\",\"updated_at\":\"2021-03-13T09:23:10.000000Z\",\"created_at\":\"2021-03-13T09:23:10.000000Z\",\"id\":2}'),(16,'92f0c1cb-221c-464e-a506-e250e5ee5f9f',1,'Create','App\\Models\\Slider',3,'App\\Models\\Slider',3,'App\\Models\\Slider',3,'','finished','','2021-03-13 09:23:31','2021-03-13 09:23:31',NULL,'{\"image\":\"45yI5WFxNRxdrf5UPBpPlGq2FqdEkPPzE8v8DVCP.jpg\",\"heading\":\"Ph\\u01b0\\u01a1ng Nam JSC\",\"description\":\"PRO PH\\u01af\\u01a0NG NAM - KH\\u1edeI NGU\\u1ed2N C\\u1ee6A S\\u1ef0 TH\\u00c0NH C\\u00d4NG\",\"url\":\"\\/gioi-thieu\",\"updated_at\":\"2021-03-13T09:23:31.000000Z\",\"created_at\":\"2021-03-13T09:23:31.000000Z\",\"id\":3}'),(17,'92f0c8f4-da70-4682-9f0e-404727e3d449',1,'Update','OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'','finished','','2021-03-13 09:43:32','2021-03-13 09:43:32','[]','[]'),(18,'92f638c6-3b06-4038-ae0e-a4490835440d',1,'Create','App\\Models\\Widget',3,'App\\Models\\Widget',3,'App\\Models\\Widget',3,'','finished','','2021-03-16 02:35:21','2021-03-16 02:35:21',NULL,'{\"name\":\"Gi\\u1edbi thi\\u1ec7u c\\u00f4ng ty\",\"items\":[],\"updated_at\":\"2021-03-16T02:35:20.000000Z\",\"created_at\":\"2021-03-16T02:35:20.000000Z\",\"id\":3}'),(19,'92f63d5f-4066-42e6-be49-c602b0e3f70b',1,'Delete','App\\Models\\Widget',3,'App\\Models\\Widget',3,'App\\Models\\Widget',3,'','finished','','2021-03-16 02:48:12','2021-03-16 02:48:12',NULL,NULL),(20,'92f8b804-00a5-4e29-939e-bb547e6892bd',1,'Create','App\\Models\\Category',2,'App\\Models\\Category',2,'App\\Models\\Category',2,'','finished','','2021-03-17 08:22:48','2021-03-17 08:22:48',NULL,'{\"name\":\"D\\u1ecbch V\\u1ee5\",\"slug\":\"dich-vu\",\"updated_at\":\"2021-03-17T08:22:47.000000Z\",\"created_at\":\"2021-03-17T08:22:47.000000Z\",\"id\":2}'),(21,'92f8b8d2-6819-47a3-a5ff-f57874285bf6',1,'Create','App\\Models\\Post',2,'App\\Models\\Post',2,'App\\Models\\Post',2,'','finished','','2021-03-17 08:25:03','2021-03-17 08:25:03',NULL,'{\"title\":\"Gi\\u1ea3i ph\\u00e1p ph\\u1ea7n c\\u1ee9ng & ph\\u1ea7n m\\u1ec1m\",\"slug\":\"giai-phap-phan-cung-phan-mem\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:25:03.000000Z\",\"created_at\":\"2021-03-17T08:25:03.000000Z\",\"id\":2}'),(22,'92f8b906-20dc-4336-8cca-345eff52f643',1,'Create','App\\Models\\Post',3,'App\\Models\\Post',3,'App\\Models\\Post',3,'','finished','','2021-03-17 08:25:37','2021-03-17 08:25:37',NULL,'{\"title\":\"Gi\\u1ea3i ph\\u00e1p H\\u1ed9i ngh\\u1ecb truy\\u1ec1n h\\u00ecnh\",\"slug\":\"giai-phap-hoi-nghi-truyen-hinh\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:25:37.000000Z\",\"created_at\":\"2021-03-17T08:25:37.000000Z\",\"id\":3}'),(23,'92f8b91d-2161-402d-a4fe-8351fe2dbcb7',1,'Create','App\\Models\\Post',4,'App\\Models\\Post',4,'App\\Models\\Post',4,'','finished','','2021-03-17 08:25:52','2021-03-17 08:25:52',NULL,'{\"title\":\"Gi\\u1ea3i ph\\u00e1p chuy\\u1ec3n \\u0111\\u1ed5i s\\u1ed1\",\"slug\":\"giai-phap-chuyen-doi-so\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:25:52.000000Z\",\"created_at\":\"2021-03-17T08:25:52.000000Z\",\"id\":4}'),(24,'92f8b974-b910-4bb1-bc2e-af6e56d97bf6',1,'Create','App\\Models\\Post',5,'App\\Models\\Post',5,'App\\Models\\Post',5,'','finished','','2021-03-17 08:26:49','2021-03-17 08:26:49',NULL,'{\"title\":\"Ph\\u00f2ng h\\u1ecdc quan s\\u00e1t ph\\u1ee5c v\\u1ee5 thao gi\\u1ea3ng, d\\u1ef1 gi\\u1edd\",\"slug\":\"phong-hoc-quan-sat-phuc-vu-thao-giang-du-gio\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:26:49.000000Z\",\"created_at\":\"2021-03-17T08:26:49.000000Z\",\"id\":5}'),(25,'92f8b98f-08ef-49e0-a812-0c13d2520b4c',1,'Create','App\\Models\\Post',6,'App\\Models\\Post',6,'App\\Models\\Post',6,'','finished','','2021-03-17 08:27:07','2021-03-17 08:27:07',NULL,'{\"title\":\"Cung c\\u1ea5p thi\\u1ebft b\\u1ecb tr\\u01b0\\u1eddng h\\u1ecdc\",\"slug\":\"cung-cap-thiet-bi-truong-hoc\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:27:07.000000Z\",\"created_at\":\"2021-03-17T08:27:07.000000Z\",\"id\":6}'),(26,'92f8b9b2-58c0-43b4-b872-3a66eaf1d193',1,'Create','App\\Models\\Post',7,'App\\Models\\Post',7,'App\\Models\\Post',7,'','finished','','2021-03-17 08:27:30','2021-03-17 08:27:30',NULL,'{\"title\":\"Trang thi\\u1ebft b\\u1ecb ph\\u00f2ng h\\u1ecdc, khu n\\u1ed9i tr\\u00fa\",\"slug\":\"trang-thiet-bi-phong-hoc-khu-noi-tru\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:27:30.000000Z\",\"created_at\":\"2021-03-17T08:27:30.000000Z\",\"id\":7}'),(27,'92f8b9e6-2a51-4415-99b4-2a86e33f2dfb',1,'Create','App\\Models\\Post',8,'App\\Models\\Post',8,'App\\Models\\Post',8,'','finished','','2021-03-17 08:28:04','2021-03-17 08:28:04',NULL,'{\"title\":\"Thi\\u1ebft b\\u1ecb v\\u0103n ph\\u00f2ng\",\"slug\":\"thiet-bi-van-phong\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:28:04.000000Z\",\"created_at\":\"2021-03-17T08:28:04.000000Z\",\"id\":8}'),(28,'92f8ba06-ab66-4695-ac38-b93fae481715',1,'Create','App\\Models\\Post',9,'App\\Models\\Post',9,'App\\Models\\Post',9,'','finished','','2021-03-17 08:28:25','2021-03-17 08:28:25',NULL,'{\"title\":\"M\\u00f4 h\\u00ecnh th\\u01b0 vi\\u1ec7n s\\u1ed1 tr\\u01b0\\u1eddng h\\u1ecdc, m\\u00f4 h\\u00ecnh STEM\",\"slug\":\"mo-hinh-thu-vien-so-truong-hoc-mo-hinh-stem\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:28:25.000000Z\",\"created_at\":\"2021-03-17T08:28:25.000000Z\",\"id\":9}'),(29,'92f8ba32-96f5-47a8-a825-b09fda9a16df',1,'Create','App\\Models\\Post',10,'App\\Models\\Post',10,'App\\Models\\Post',10,'','finished','','2021-03-17 08:28:54','2021-03-17 08:28:54',NULL,'{\"title\":\"\\u0110\\u00e0o t\\u1ea1o t\\u1eadp hu\\u1ea5n n\\u00e2ng cao n\\u0103ng l\\u1ef1c\",\"slug\":\"dao-tao-tap-huan-nang-cao-nang-luc\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:28:54.000000Z\",\"created_at\":\"2021-03-17T08:28:54.000000Z\",\"id\":10}'),(30,'92f8ba42-9806-49ee-a927-caa573b01539',1,'Create','App\\Models\\Post',11,'App\\Models\\Post',11,'App\\Models\\Post',11,'','finished','','2021-03-17 08:29:04','2021-03-17 08:29:04',NULL,'{\"title\":\"T\\u01b0 v\\u1ea5n\",\"slug\":\"tu-van\",\"excerpt\":null,\"content\":null,\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:29:04.000000Z\",\"created_at\":\"2021-03-17T08:29:04.000000Z\",\"id\":11}'),(31,'92f8bb19-805a-4ef9-828d-b257881ba076',1,'Create','App\\Models\\DocumentCategory',1,'App\\Models\\DocumentCategory',1,'App\\Models\\DocumentCategory',1,'','finished','','2021-03-17 08:31:25','2021-03-17 08:31:25',NULL,'{\"name\":\"Kh\\u00e1ch h\\u00e0ng ti\\u00eau bi\\u1ec3u\",\"slug\":\"khach-hang-tieu-bieu\",\"updated_at\":\"2021-03-17T08:31:25.000000Z\",\"created_at\":\"2021-03-17T08:31:25.000000Z\",\"id\":1}'),(32,'92f8bb41-899a-4e26-a9bc-f9af7977219a',1,'Delete','App\\Models\\DocumentCategory',1,'App\\Models\\DocumentCategory',1,'App\\Models\\DocumentCategory',1,'','finished','','2021-03-17 08:31:51','2021-03-17 08:31:51',NULL,NULL),(33,'92f8bbcd-3237-4a74-801a-432ac53a18a9',1,'Create','App\\Models\\Category',3,'App\\Models\\Category',3,'App\\Models\\Category',3,'','finished','','2021-03-17 08:33:23','2021-03-17 08:33:23',NULL,'{\"name\":\"Kh\\u00e1ch h\\u00e0ng ti\\u00eau bi\\u1ec3u\",\"slug\":\"khach-hang-tieu-bieu\",\"updated_at\":\"2021-03-17T08:33:23.000000Z\",\"created_at\":\"2021-03-17T08:33:23.000000Z\",\"id\":3}'),(34,'92f8bcc2-ec78-4549-bc77-e39af8d10885',1,'Create','App\\Models\\Post',12,'App\\Models\\Post',12,'App\\Models\\Post',12,'','finished','','2021-03-17 08:36:04','2021-03-17 08:36:04',NULL,'{\"title\":\"Ban QLDA H\\u1ed7 tr\\u1ee3 \\u00fd t\\u1ebf v\\u00f9ng Duy\\u00ean h\\u1ea3i Nam Trung B\\u1ed9\",\"slug\":\"ban-qlda-ho-tro-y-te-vung-duyen-hai-nam-trung-bo\",\"excerpt\":null,\"content\":\"<div>G\\u1ed3m c\\u00e1c S\\u1edf Y T\\u1ebf T\\u1ec9nh Kh\\u00e1nh H\\u00f2a, S\\u1edf Y T\\u1ebf Tr\\u00e0 Vinh, S\\u01a1n La, An Giang, Ph\\u00fa Th\\u1ecd. S\\u1edf Y T\\u1ebf Ngh\\u1ec7 An<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:36:04.000000Z\",\"created_at\":\"2021-03-17T08:36:04.000000Z\",\"id\":12}'),(35,'92f8bd09-9541-420e-b590-8bd48813b25a',1,'Create','App\\Models\\Post',13,'App\\Models\\Post',13,'App\\Models\\Post',13,'','finished','','2021-03-17 08:36:50','2021-03-17 08:36:50',NULL,'{\"title\":\"S\\u1edf N\\u1ed9i V\\u1ee5 t\\u1ec9nh B\\u1eafc Ninh\",\"slug\":\"so-noi-vu-tinh-bac-ninh\",\"excerpt\":null,\"content\":\"<div>Ph\\u1ea7n m\\u1ec1m n\\u1ed9i b\\u1ed9, h\\u1ec7 th\\u1ed1ng c\\u01a1 s\\u1edf d\\u1eef li\\u1ec7u c\\u00e1n b\\u1ed9, c\\u00f4ng ch\\u1ee9c, vi\\u00ean ch\\u1ee9c<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:36:50.000000Z\",\"created_at\":\"2021-03-17T08:36:50.000000Z\",\"id\":13}'),(36,'92f8bd3b-48c7-4bed-b99a-aa4d24e8fda5',1,'Create','App\\Models\\Post',14,'App\\Models\\Post',14,'App\\Models\\Post',14,'','finished','','2021-03-17 08:37:23','2021-03-17 08:37:23',NULL,'{\"title\":\"Ban t\\u1ed5 ch\\u1ee9c Trung \\u01af\\u01a1ng\",\"slug\":\"ban-to-chuc-trung-uong\",\"excerpt\":null,\"content\":\"<div>Ph\\u1ea7n m\\u1ec1m qu\\u1ea3n l\\u00fd c\\u00e1n b\\u1ed9 thu\\u1ed9c di\\u1ec7n ban t\\u1ed5 ch\\u1ee9c Trung \\u01af\\u01a1ng theo d\\u00f5i<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:37:23.000000Z\",\"created_at\":\"2021-03-17T08:37:23.000000Z\",\"id\":14}'),(37,'92f8bdd2-63ff-4b62-9447-5ccc89619fc6',1,'Create','App\\Models\\Post',15,'App\\Models\\Post',15,'App\\Models\\Post',15,'','finished','','2021-03-17 08:39:02','2021-03-17 08:39:02',NULL,'{\"title\":\"Ban QLDA Y T\\u1ebf c\\u00e1c t\\u1ec9nh \\u0110\\u1ed3ng B\\u1eb1ng s\\u00f4ng C\\u1eedu Long, Ban QLDA R\\u00e1c th\\u1ea3i Y T\\u1ebf WorldBank\",\"slug\":\"ban-qlda-y-te-cac-tinh-dong-bang-song-cuu-long-ban-qlda-rac-thai-y-te-world-bank\",\"excerpt\":null,\"content\":\"<div>T\\u01b0 v\\u1ea5n tri\\u1ec3n khai d\\u1ef1 \\u00e1n, bi\\u00ean so\\u1ea1n s\\u1ed5 tay giao tr\\u00ecnh t\\u00e0i li\\u1ec7u, t\\u1eadp hu\\u1ea5n n\\u00e2ng cao n\\u0103ng l\\u1ef1c<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:39:02.000000Z\",\"created_at\":\"2021-03-17T08:39:02.000000Z\",\"id\":15}'),(38,'92f8be56-ca47-4669-a98e-95e282bf0afe',1,'Create','App\\Models\\Post',16,'App\\Models\\Post',16,'App\\Models\\Post',16,'','finished','','2021-03-17 08:40:29','2021-03-17 08:40:29',NULL,'{\"title\":\"\\u1ee6y ban D\\u00e2n t\\u1ed9c\",\"slug\":\"uy-ban-dan-toc\",\"excerpt\":null,\"content\":\"<div>X\\u00e2y d\\u1ef1ng ph\\u1ea7n m\\u1ec1m th\\u1ed1ng k\\u00ea, \\u0111i\\u1ec1u tra kinh t\\u1ebf x\\u00e3 h\\u1ed9i 53 d\\u00e2n t\\u1ed9c thi\\u1ec3u s\\u1ed1<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:40:29.000000Z\",\"created_at\":\"2021-03-17T08:40:29.000000Z\",\"id\":16}'),(39,'92f8be90-f27d-4410-9b4f-eb1c9e790e8a',1,'Create','App\\Models\\Post',17,'App\\Models\\Post',17,'App\\Models\\Post',17,'','finished','','2021-03-17 08:41:07','2021-03-17 08:41:07',NULL,'{\"title\":\"B\\u1ec7nh vi\\u1ec7n Vi\\u1ebft \\u0110\\u1ee9c, B\\u1ec7nh vi\\u1ec7n 115\",\"slug\":\"benh-vien-viet-duc-benh-vien-115\",\"excerpt\":null,\"content\":\"<div>Ph\\u1ea7n m\\u1ec1m Qu\\u1ea3n l\\u00fd c\\u00f4ng ch\\u1ee9, vi\\u00ean ch\\u1ee9c<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:41:07.000000Z\",\"created_at\":\"2021-03-17T08:41:07.000000Z\",\"id\":17}'),(40,'92f8beba-c0a6-4951-8174-4c1dcc511c08',1,'Create','App\\Models\\Post',18,'App\\Models\\Post',18,'App\\Models\\Post',18,'','finished','','2021-03-17 08:41:34','2021-03-17 08:41:34',NULL,'{\"title\":\"Ban d\\u00e2n t\\u1ed9c t\\u1ec9nh \\u0110\\u1ed3ng Nai\",\"slug\":\"ban-dan-toc-tinh-dong-nai\",\"excerpt\":null,\"content\":\"<div>Ph\\u1ea7n m\\u1ec1m qu\\u1ea3n l\\u00fd c\\u00f4ng t\\u00e1c d\\u00e2n t\\u1ed9c<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:41:34.000000Z\",\"created_at\":\"2021-03-17T08:41:34.000000Z\",\"id\":18}'),(41,'92f8befb-4534-40c6-a6a8-282735906b4e',1,'Create','App\\Models\\Post',19,'App\\Models\\Post',19,'App\\Models\\Post',19,'','finished','','2021-03-17 08:42:16','2021-03-17 08:42:16',NULL,'{\"title\":\"Ban d\\u00e2n t\\u1ecdc t\\u1ec9nh B\\u00ecnh Ph\\u01b0\\u1edbc, Ban d\\u00e2n t\\u1ed9c t\\u1ec9nh B\\u00e0 R\\u1ecba - V\\u0169ng T\\u00e0u\",\"slug\":\"ban-dan-toc-tinh-binh-phuoc-ban-dan-toc-tinh-ba-ria-vung-tau\",\"excerpt\":null,\"content\":\"<div>X\\u00e2y d\\u1ef1ng ph\\u1ea7n m\\u1ec1m qu\\u1ea3n l\\u00fd c\\u00f4ng t\\u00e1c d\\u00e2n t\\u1ed9c<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:42:16.000000Z\",\"created_at\":\"2021-03-17T08:42:16.000000Z\",\"id\":19}'),(42,'92f8bf39-10a6-4ce5-ae08-cca44ea55c8b',1,'Create','App\\Models\\Post',20,'App\\Models\\Post',20,'App\\Models\\Post',20,'','finished','','2021-03-17 08:42:57','2021-03-17 08:42:57',NULL,'{\"title\":\"Trung t\\u00e2m th\\u00f4ng tin - \\u1ee6y ban D\\u00e2n t\\u1ed9c\",\"slug\":\"trung-tam-thong-tin-uy-ban-dan-toc\",\"excerpt\":null,\"content\":\"<div>Ph\\u1ea7n m\\u1ec1m qu\\u1ea3n l\\u00fd \\u0111i\\u1ec1u h\\u00e0nh trong c\\u01a1 quan tr\\u00ean n\\u1ec1n t\\u1ea3ng IOS<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:42:57.000000Z\",\"created_at\":\"2021-03-17T08:42:57.000000Z\",\"id\":20}'),(43,'92f8bf90-a8e9-4094-ba35-f98f1ed81ec2',1,'Create','App\\Models\\Post',21,'App\\Models\\Post',21,'App\\Models\\Post',21,'','finished','','2021-03-17 08:43:54','2021-03-17 08:43:54',NULL,'{\"title\":\"Ban qu\\u1ea3n l\\u00fd khu di t\\u00edch C\\u1ed5 Loa\",\"slug\":\"ban-quan-ly-khu-di-tich-co-loa\",\"excerpt\":null,\"content\":\"<div>H\\u1ec7 th\\u1ed1ng camera gi\\u00e1m s\\u00e1t, H\\u1ec7 th\\u1ed1ng ph\\u00f2ng ch\\u00e1y ch\\u1eefa ch\\u00e1y, thi\\u1ebft b\\u1ecb v\\u0103n ph\\u00f2ng<\\/div>\",\"seo_title\":null,\"seo_description\":null,\"updated_at\":\"2021-03-17T08:43:54.000000Z\",\"created_at\":\"2021-03-17T08:43:54.000000Z\",\"id\":21}'),(44,'93015ecc-6886-40c0-9859-1bee8a395d3e',1,'Create','App\\Models\\Article',1,'App\\Models\\Article',1,'App\\Models\\Article',1,'','finished','','2021-03-21 15:35:47','2021-03-21 15:35:47',NULL,'{\"title\":\"T\\u01b0 v\\u1ea5n, t\\u1eadp hu\\u1ea5n, \\u0111\\u00e0o t\\u1ea1o n\\u00e2ng cao n\\u0103ng l\\u1ef1c\",\"description\":\"S\\u1edf Y T\\u1ebf H\\u01b0ng Y\\u00ean, S\\u1edf Y T\\u1ebf S\\u00f3c Tr\\u0103ng, Ban QLDA H\\u1ed7 tr\\u1ee3 y t\\u1ebf v\\u00f9ng Duy\\u00ean h\\u1ea3i Nam Trung B\\u1ed9, S\\u1edf Y T\\u1ebf T\\u1ec9nh Kh\\u00e1nh H\\u00f2a, S\\u1edf Y T\\u1ebf Tr\\u00e0 Vinh, S\\u01a1n La, An Giang, Ph\\u00fa Th\\u1ecd, S\\u1edf Y T\\u1ebf Ngh\\u1ec7 An.\",\"url\":\"\\/\",\"updated_at\":\"2021-03-21T15:35:47.000000Z\",\"created_at\":\"2021-03-21T15:35:47.000000Z\",\"id\":1}'),(45,'93015f83-bc8b-4c1d-8a04-e6231feff92e',1,'Create','App\\Models\\Article',1,'App\\Models\\Article',1,'App\\Models\\Article',1,'','finished','','2021-03-21 15:37:47','2021-03-21 15:37:47',NULL,'{\"title\":\"T\\u01b0 v\\u1ea5n, t\\u1eadp hu\\u1ea5n, \\u0111\\u00e0o t\\u1ea1o n\\u00e2ng cao n\\u0103ng l\\u1ef1c\",\"description\":\"Tr\\u0103ng, Ban QLDA H\\u1ed7 tr\\u1ee3 y t\\u1ebf v\\u00f9ng Duy\\u00ean h\\u1ea3i Nam Trung B\\u1ed9, S\\u1edf Y T\\u1ebf T\\u1ec9nh Kh\\u00e1nh H\\u00f2a, S\\u1edf Y T\\u1ebf Tr\\u00e0 Vinh, S\\u01a1n La, An Giang, Ph\\u00fa Th\\u1ecd, S\\u1edf Y T\\u1ebf Ngh\\u1ec7 An. T\\u01b0 v\\u1ea5n, t\\u1eadp hu\\u1ea5n, \\u0111\\u00e0o t\\u1ea1o n\\u00e2ng cao n\\u0103ng l\\u1ef1c\",\"url\":null,\"updated_at\":\"2021-03-21T15:37:47.000000Z\",\"created_at\":\"2021-03-21T15:37:47.000000Z\",\"id\":1}'),(46,'93015fa3-f454-4c4b-a6bc-1925d723fc24',1,'Create','App\\Models\\Article',2,'App\\Models\\Article',2,'App\\Models\\Article',2,'','finished','','2021-03-21 15:38:08','2021-03-21 15:38:08',NULL,'{\"title\":\"Ph\\u1ea7n m\\u1ec1m n\\u1ed9i b\\u1ed9, h\\u1ec7 th\\u1ed1ng c\\u01a1 s\\u1edf d\\u1eef li\\u1ec7u c\\u00e1n b\\u1ed9, c\\u00f4ng ch\\u1ee9c, vi\\u00ean ch\\u1ee9c\",\"description\":\"S\\u1edf N\\u1ed9i v\\u1ee5 t\\u1ec9nh B\\u1eafc Ninh\",\"url\":null,\"updated_at\":\"2021-03-21T15:38:08.000000Z\",\"created_at\":\"2021-03-21T15:38:08.000000Z\",\"id\":2}'),(47,'93015fb8-21dd-4a3d-bc06-c0cf582358d5',1,'Create','App\\Models\\Article',3,'App\\Models\\Article',3,'App\\Models\\Article',3,'','finished','','2021-03-21 15:38:21','2021-03-21 15:38:21',NULL,'{\"title\":\"Ph\\u1ea7n m\\u1ec1m qu\\u1ea3n l\\u00fd c\\u00e1n b\\u1ed9 thu\\u1ed9c di\\u1ec7n ban t\\u1ed5 ch\\u1ee9c Trung \\u01af\\u01a1ng theo d\\u00f5i\",\"description\":\"Ban t\\u1ed5 ch\\u1ee9c Trung \\u01af\\u01a1ng\",\"url\":null,\"updated_at\":\"2021-03-21T15:38:21.000000Z\",\"created_at\":\"2021-03-21T15:38:21.000000Z\",\"id\":3}'),(48,'93015fcf-76fb-494b-a49c-8a3246ee3548',1,'Create','App\\Models\\Article',4,'App\\Models\\Article',4,'App\\Models\\Article',4,'','finished','','2021-03-21 15:38:36','2021-03-21 15:38:36',NULL,'{\"title\":\"T\\u01b0 v\\u1ea5n tri\\u1ec3n khai d\\u1ef1 \\u00e1n, bi\\u00ean so\\u1ea1n s\\u1ed5 tay gi\\u00e1o tr\\u00ecnh t\\u00e0i li\\u1ec7u, t\\u1eadp hu\\u1ea5n n\\u00e2ng cao n\\u0103ng l\\u1ef1c\",\"description\":\"Ban Qu\\u1ea3n l\\u00fd d\\u1ef1 \\u00e1n Y T\\u1ebf c\\u00e1c t\\u1ec9nh \\u0110\\u1ed3ng B\\u1eb1ng S\\u00f4ng C\\u1eedu Long, BQLDA R\\u00e1c th\\u1ea3i Y T\\u1ebf WorldBank\",\"url\":null,\"updated_at\":\"2021-03-21T15:38:36.000000Z\",\"created_at\":\"2021-03-21T15:38:36.000000Z\",\"id\":4}'),(49,'93015fe0-9baf-4466-add7-8ee41e9a41e8',1,'Create','App\\Models\\Article',5,'App\\Models\\Article',5,'App\\Models\\Article',5,'','finished','','2021-03-21 15:38:48','2021-03-21 15:38:48',NULL,'{\"title\":\"X\\u00e2y d\\u1ef1ng ph\\u1ea7n m\\u1ec1m th\\u1ed1ng k\\u00ea, \\u0111i\\u1ec1u tra kinh t\\u1ebf x\\u00e3 h\\u1ed9i 53 d\\u00e2n t\\u1ed9c thi\\u1ec3u s\\u1ed1.\",\"description\":\"\\u1ee6y ban D\\u00e2n t\\u1ed9c\",\"url\":null,\"updated_at\":\"2021-03-21T15:38:48.000000Z\",\"created_at\":\"2021-03-21T15:38:48.000000Z\",\"id\":5}'),(50,'9302dbbe-c540-42b5-a2c3-ac45e6b617d0',1,'Update','App\\Models\\Article',1,'App\\Models\\Article',1,'App\\Models\\Article',1,'','finished','','2021-03-22 09:20:59','2021-03-22 09:20:59','{\"description\":\"Tr\\u0103ng, Ban QLDA H\\u1ed7 tr\\u1ee3 y t\\u1ebf v\\u00f9ng Duy\\u00ean h\\u1ea3i Nam Trung B\\u1ed9, S\\u1edf Y T\\u1ebf T\\u1ec9nh Kh\\u00e1nh H\\u00f2a, S\\u1edf Y T\\u1ebf Tr\\u00e0 Vinh, S\\u01a1n La, An Giang, Ph\\u00fa Th\\u1ecd, S\\u1edf Y T\\u1ebf Ngh\\u1ec7 An. T\\u01b0 v\\u1ea5n, t\\u1eadp hu\\u1ea5n, \\u0111\\u00e0o t\\u1ea1o n\\u00e2ng cao n\\u0103ng l\\u1ef1c\"}','{\"description\":\"Ban QLDA H\\u1ed7 tr\\u1ee3 y t\\u1ebf v\\u00f9ng Duy\\u00ean h\\u1ea3i Nam Trung B\\u1ed9, S\\u1edf Y T\\u1ebf T\\u1ec9nh Kh\\u00e1nh H\\u00f2a, S\\u1edf Y T\\u1ebf Tr\\u00e0 Vinh, S\\u01a1n La, An Giang, Ph\\u00fa Th\\u1ecd, S\\u1edf Y T\\u1ebf Ngh\\u1ec7 An. T\\u01b0 v\\u1ea5n, t\\u1eadp hu\\u1ea5n, \\u0111\\u00e0o t\\u1ea1o n\\u00e2ng cao n\\u0103ng l\\u1ef1c\"}'),(51,'930447b5-3119-4bcf-9a13-fee8fb00e341',1,'Update','App\\Models\\Widget',2,'App\\Models\\Widget',2,'App\\Models\\Widget',2,'','finished','','2021-03-23 02:18:42','2021-03-23 02:18:42','{\"items\":\"[{\\\"key\\\": \\\"afZWjVq4pBqaRLIX\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\/images\\/teamwork128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\/div>\\\\n<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi Kh\\u00e1ch H\\u00e0ng<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ch\\u1ea5t l\\u01b0\\u1ee3ng, uy t\\u00edn, ti\\u1ebfn \\u0111\\u1ed9.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Lu\\u00f4n tho\\u1ea3 m\\u00e3n c\\u00e1c nhu c\\u1ea7u c\\u1ee7a t\\u1ea5t c\\u1ea3 c\\u00e1c kh\\u00e1ch h\\u00e0ng v\\u1edbi ch\\u1ea5t l\\u01b0\\u1ee3ng t\\u1ed1t nh\\u1ea5t.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    C\\u1edfi m\\u1edf, th\\u00e2n thi\\u1ec7n, c\\u1ea7u th\\u1ecb, nhi\\u1ec7t t\\u00ecnh v\\u00e0 tr\\u00e2n tr\\u1ecdng.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    N\\u1ed7 l\\u1ef1c cao nh\\u1ea5t \\u0111\\u1ec3 c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 lu\\u00f4n ti\\u1ebfn b\\u1ed9 h\\u01a1n, g\\u00f3p ph\\u1ea7n n\\u00e2ng cao ti\\u00eau chu\\u1ea9n cu\\u1ed9c s\\u1ed1ng.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}, {\\\"key\\\": \\\"N0bXNVx5nZ1OL2Ar\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\/images\\/team128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi Nh\\u00e2n Vi\\u00ean<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\u1ea1o c\\u01a1 h\\u1ed9i h\\u1ecdc t\\u1eadp, n\\u00e2ng cao tr\\u00ecnh \\u0111\\u1ed9 v\\u00e0 t\\u00e1c phong l\\u00e0m vi\\u1ec7c, t\\u1eebng b\\u01b0\\u1edbc \\u0111\\u1ea1t ti\\u00eau chu\\u1ea9n qu\\u1ed1c t\\u1ebf.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\u1ea1o c\\u01a1 h\\u00f4i th\\u0103ng ti\\u1ebfn tr\\u00ean c\\u01a1 s\\u1edf hi\\u1ec7u qu\\u1ea3 c\\u00f4ng vi\\u1ec7c, t\\u00ednh ch\\u00ednh tr\\u1ef1c v\\u00e0 l\\u00f2ng trung th\\u00e0nh v\\u1edbi c\\u00f4ng ty, nh\\u1eb1m \\u0111\\u1ea3m b\\u1ea3o \\u0111i\\u1ec1u ki\\u1ec7n ng\\u00e0y c\\u00e0ng t\\u1ed1t h\\u01a1n cho cu\\u1ed9c s\\u1ed1ng c\\u1ee7a nh\\u00e2n vi\\u00ean v\\u00e0 s\\u1ef1 ph\\u00e1t tri\\u1ec3n b\\u1ec1n v\\u1eefng c\\u1ee7a c\\u00f4ng ty.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}, {\\\"key\\\": \\\"FgpRNgDx35MfCtJi\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\/images\\/kh128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi \\u0110\\u1ed1i T\\u00e1c<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    X\\u00e2y d\\u1ef1ng v\\u00e0 gi\\u1eef g\\u00ecn m\\u1ed1i quan h\\u1ec7 \\u0111o\\u00e0n k\\u1ebft, \\u1ed5n \\u0111\\u1ecbnh, l\\u00e2u d\\u00e0i v\\u00e0 c\\u00f9ng c\\u00f3 l\\u1ee3i tr\\u00ean c\\u01a1 s\\u1edf truy\\u1ec1n th\\u1ed1ng kinh doanh \\u0111\\u00e1ng tin c\\u1eady, \\u0111\\u1ea3m b\\u1ea3o ch\\u1ea5t l\\u01b0\\u1ee3ng h\\u00e0ng ho\\u00e1 v\\u00e0 t\\u00f4n tr\\u1ecdng kh\\u00e1ch h\\u00e0ng.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    H\\u1ed7 tr\\u1ee3 \\u0111\\u1ec3 c\\u00f9ng n\\u00e2ng cao ch\\u1ea5t l\\u01b0\\u1ee3ng kinh doanh nh\\u1eb1m tho\\u1ea3 m\\u00e3n t\\u1ed1t h\\u01a1n nhu c\\u1ea7u c\\u1ee7a kh\\u00e1ch h\\u00e0ng.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}, {\\\"key\\\": \\\"dw7xfQ48FEdoDKUo\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\/images\\/congdong128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\u1edbi C\\u1ed9ng \\u0110\\u1ed3ng<\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\u00f4n vinh v\\u00e0 gi\\u1eef g\\u00ecn nh\\u1eefng \\u0111\\u1ea1o \\u0111\\u1ee9c kinh doanh.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    Ho\\u00e0n th\\u00e0nh tr\\u00e1ch nhi\\u1ec7m x\\u00e3 h\\u1ed9i, ch\\u1ea5p h\\u00e0nh lu\\u1eadt ph\\u00e1p.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    T\\u00edch c\\u1ef1c g\\u00f3p ph\\u1ea7n v\\u00e0o s\\u1ef1 ph\\u00e1t tri\\u1ec3n chung c\\u1ee7a x\\u00e3 h\\u1ed9i.\\\\n                                <\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-left mb-2\\\\\\\">\\\\n                                    L\\u00e0m cho cu\\u1ed9c s\\u1ed1ng th\\u00eam nhi\\u1ec1u ti\\u1ec7n \\u00edch v\\u00e0 t\\u1ed1t \\u0111\\u1eb9p h\\u01a1n.\\\\n                                <\\/li>\\\\n                            <\\/ul>\\\\n                        <\\/div>\\\"}}]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"afZWjVq4pBqaRLIX\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/teamwork128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n<h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Kh\\\\u00e1ch H\\\\u00e0ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    Ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng, uy t\\\\u00edn, ti\\\\u1ebfn \\\\u0111\\\\u1ed9.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    Lu\\\\u00f4n tho\\\\u1ea3 m\\\\u00e3n c\\\\u00e1c nhu c\\\\u1ea7u c\\\\u1ee7a t\\\\u1ea5t c\\\\u1ea3 c\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng t\\\\u1ed1t nh\\\\u1ea5t.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    C\\\\u1edfi m\\\\u1edf, th\\\\u00e2n thi\\\\u1ec7n, c\\\\u1ea7u th\\\\u1ecb, nhi\\\\u1ec7t t\\\\u00ecnh v\\\\u00e0 tr\\\\u00e2n tr\\\\u1ecdng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    N\\\\u1ed7 l\\\\u1ef1c cao nh\\\\u1ea5t \\\\u0111\\\\u1ec3 c\\\\u00e1c s\\\\u1ea3n ph\\\\u1ea9m v\\\\u00e0 d\\\\u1ecbch v\\\\u1ee5 lu\\\\u00f4n ti\\\\u1ebfn b\\\\u1ed9 h\\\\u01a1n, g\\\\u00f3p ph\\\\u1ea7n n\\\\u00e2ng cao ti\\\\u00eau chu\\\\u1ea9n cu\\\\u1ed9c s\\\\u1ed1ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"N0bXNVx5nZ1OL2Ar\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/team128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi Nh\\\\u00e2n Vi\\\\u00ean<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    T\\\\u1ea1o c\\\\u01a1 h\\\\u1ed9i h\\\\u1ecdc t\\\\u1eadp, n\\\\u00e2ng cao tr\\\\u00ecnh \\\\u0111\\\\u1ed9 v\\\\u00e0 t\\\\u00e1c phong l\\\\u00e0m vi\\\\u1ec7c, t\\\\u1eebng b\\\\u01b0\\\\u1edbc \\\\u0111\\\\u1ea1t ti\\\\u00eau chu\\\\u1ea9n qu\\\\u1ed1c t\\\\u1ebf.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    T\\\\u1ea1o c\\\\u01a1 h\\\\u00f4i th\\\\u0103ng ti\\\\u1ebfn tr\\\\u00ean c\\\\u01a1 s\\\\u1edf hi\\\\u1ec7u qu\\\\u1ea3 c\\\\u00f4ng vi\\\\u1ec7c, t\\\\u00ednh ch\\\\u00ednh tr\\\\u1ef1c v\\\\u00e0 l\\\\u00f2ng trung th\\\\u00e0nh v\\\\u1edbi c\\\\u00f4ng ty, nh\\\\u1eb1m \\\\u0111\\\\u1ea3m b\\\\u1ea3o \\\\u0111i\\\\u1ec1u ki\\\\u1ec7n ng\\\\u00e0y c\\\\u00e0ng t\\\\u1ed1t h\\\\u01a1n cho cu\\\\u1ed9c s\\\\u1ed1ng c\\\\u1ee7a nh\\\\u00e2n vi\\\\u00ean v\\\\u00e0 s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n b\\\\u1ec1n v\\\\u1eefng c\\\\u1ee7a c\\\\u00f4ng ty.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"FgpRNgDx35MfCtJi\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/kh128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi \\\\u0110\\\\u1ed1i T\\\\u00e1c<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    X\\\\u00e2y d\\\\u1ef1ng v\\\\u00e0 gi\\\\u1eef g\\\\u00ecn m\\\\u1ed1i quan h\\\\u1ec7 \\\\u0111o\\\\u00e0n k\\\\u1ebft, \\\\u1ed5n \\\\u0111\\\\u1ecbnh, l\\\\u00e2u d\\\\u00e0i v\\\\u00e0 c\\\\u00f9ng c\\\\u00f3 l\\\\u1ee3i tr\\\\u00ean c\\\\u01a1 s\\\\u1edf truy\\\\u1ec1n th\\\\u1ed1ng kinh doanh \\\\u0111\\\\u00e1ng tin c\\\\u1eady, \\\\u0111\\\\u1ea3m b\\\\u1ea3o ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng h\\\\u00e0ng ho\\\\u00e1 v\\\\u00e0 t\\\\u00f4n tr\\\\u1ecdng kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    H\\\\u1ed7 tr\\\\u1ee3 \\\\u0111\\\\u1ec3 c\\\\u00f9ng n\\\\u00e2ng cao ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng kinh doanh nh\\\\u1eb1m tho\\\\u1ea3 m\\\\u00e3n t\\\\u1ed1t h\\\\u01a1n nhu c\\\\u1ea7u c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"dw7xfQ48FEdoDKUo\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"img-role mb-3\\\\\\\">\\\\n                            <img src=\\\\\\\"\\\\\\/images\\\\\\/congdong128.png\\\\\\\" class=\\\\\\\"mx-auto\\\\\\\" width=\\\\\\\"64px\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                        <\\\\\\/div>\\\\n                        <h3 class=\\\\\\\"font-bold text-black text-lg mb-3\\\\\\\">V\\\\u1edbi C\\\\u1ed9ng \\\\u0110\\\\u1ed3ng<\\\\\\/h3>\\\\n                        <div class=\\\\\\\"text-role\\\\\\\">\\\\n                            <ul class=\\\\\\\"list-disc list-inside\\\\\\\">\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    T\\\\u00f4n vinh v\\\\u00e0 gi\\\\u1eef g\\\\u00ecn nh\\\\u1eefng \\\\u0111\\\\u1ea1o \\\\u0111\\\\u1ee9c kinh doanh.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    Ho\\\\u00e0n th\\\\u00e0nh tr\\\\u00e1ch nhi\\\\u1ec7m x\\\\u00e3 h\\\\u1ed9i, ch\\\\u1ea5p h\\\\u00e0nh lu\\\\u1eadt ph\\\\u00e1p.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    T\\\\u00edch c\\\\u1ef1c g\\\\u00f3p ph\\\\u1ea7n v\\\\u00e0o s\\\\u1ef1 ph\\\\u00e1t tri\\\\u1ec3n chung c\\\\u1ee7a x\\\\u00e3 h\\\\u1ed9i.\\\\n                                <\\\\\\/li>\\\\n                                <li class=\\\\\\\"text-sm text-black text-justify mb-2\\\\\\\">\\\\n                                    L\\\\u00e0m cho cu\\\\u1ed9c s\\\\u1ed1ng th\\\\u00eam nhi\\\\u1ec1u ti\\\\u1ec7n \\\\u00edch v\\\\u00e0 t\\\\u1ed1t \\\\u0111\\\\u1eb9p h\\\\u01a1n.\\\\n                                <\\\\\\/li>\\\\n                            <\\\\\\/ul>\\\\n                        <\\\\\\/div>\\\"}}]\"}'),(52,'9304480f-4a94-42a1-8fb0-1fcf1b0affeb',1,'Create','App\\Models\\Widget',4,'App\\Models\\Widget',4,'App\\Models\\Widget',4,'','finished','','2021-03-23 02:19:41','2021-03-23 02:19:41',NULL,'{\"name\":\"L\\u0129nh v\\u1ef1c c\\u1ee7a ch\\u00fang t\\u00f4i\",\"items\":[],\"updated_at\":\"2021-03-23T02:19:41.000000Z\",\"created_at\":\"2021-03-23T02:19:41.000000Z\",\"id\":4}'),(53,'93044a82-2296-44dd-9c3a-fe9845febaea',1,'Update','App\\Models\\Widget',4,'App\\Models\\Widget',4,'App\\Models\\Widget',4,'','finished','','2021-03-23 02:26:31','2021-03-23 02:26:31','{\"items\":\"[]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"SGGQM7R3BrA4A4FL\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/quality.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-headset mr-2\\\\\\\"><\\\\\\/i> T\\\\u01af V\\\\u1ea4N<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Nh\\\\u1eadn th\\\\u1ea5y ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng v\\\\u00e0 uy t\\\\u00edn l\\\\u00e0 y\\\\u1ebfu t\\\\u1ed1 quy\\\\u1ebft \\\\u0111\\\\u1ecbnh s\\\\u1ef1 th\\\\u00f5a m\\\\u00e3n c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng l\\\\u00e0 ch\\\\u00eca kh\\\\u00f3a c\\\\u1ee7a th\\\\u00e0nh c\\\\u00f4ng, ch\\\\u00fang t\\\\u00f4i xem vi\\\\u1ec7c \\\\u0111\\\\u1ea3m b\\\\u1ea3o ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng l\\\\u00e0 m\\\\u1ee5c ti\\\\u00eau chi\\\\u1ebfn l\\\\u01b0\\\\u1ee3c trong s\\\\u1ef1 nghi\\\\u1ec7p ph\\\\u00e1t tri\\\\u1ec3n c\\\\u1ee7a m\\\\u00ecnh.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"YW8f3qp0C3vj6vsm\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/creative.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-book mr-2\\\\\\\"><\\\\\\/i> \\\\u0110\\\\u00c0O T\\\\u1ea0O<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            T\\\\u1eadp th\\\\u1ec3 ch\\\\u00fang t\\\\u00f4i \\\\u0111\\\\u00e3 kh\\\\u00f4ng ng\\\\u1eebng t\\\\u00ecm t\\\\u00f2i, ph\\\\u00e1t tri\\\\u1ec3n c\\\\u1ea3i ti\\\\u1ebfn, n\\\\u00e2ng cao ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng d\\\\u1ecbch v\\\\u1ee5 c\\\\u0169ng nh\\\\u01b0 \\\\u0111\\\\u1ed5i m\\\\u1edbi kh\\\\u1ea3 n\\\\u0103ng cung \\\\u1ee9ng d\\\\u1ecbch v\\\\u1ee5, kh\\\\u00f4ng c\\\\u00f3 b\\\\u1ea5t k\\\\u1ef3 kh\\\\u00f3 kh\\\\u0103n n\\\\u00e0o c\\\\u00f3 th\\\\u1ec3 ng\\\\u0103n c\\\\u1ea3n ch\\\\u00fang t\\\\u00f4i mang l\\\\u1ea1i nh\\\\u1eefng gi\\\\u00e1 tr\\\\u1ecb ti\\\\u1ec7n \\\\u00edch ph\\\\u00f9 h\\\\u1ee3p nh\\\\u1ea5t v\\\\u1edbi l\\\\u1ee3i \\\\u00edch c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"uNJNtfSt6FzPbiDU\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/professional.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-server mr-2\\\\\\\"><\\\\\\/i> THI\\\\u1ebeT B\\\\u1eca<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            H\\\\u1ec7 th\\\\u1ed1ng d\\\\u1ecbch v\\\\u1ee5 c\\\\u1ee7a C\\\\u00f4ng ty ch\\\\u00fang t\\\\u00f4i \\\\u0111\\\\u01b0\\\\u1ee3c v\\\\u1eadn h\\\\u00e0nh b\\\\u1edfi \\\\u0111\\\\u1ed9i ng\\\\u0169 k\\\\u1ef9 thu\\\\u1eadt chuy\\\\u00ean nghi\\\\u1ec7p v\\\\u1edbi nhi\\\\u1ec1u n\\\\u0103m kinh nghi\\\\u1ec7m, b\\\\u1ed9 ph\\\\u1eadn h\\\\u1ed7 tr\\\\u1ee3 lu\\\\u00f4n nhi\\\\u1ec7t t\\\\u00ecnh gi\\\\u1ea3i \\\\u0111\\\\u00e1p th\\\\u1eafc m\\\\u1eafc cho kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi mong mu\\\\u1ed1n mang \\\\u0111\\\\u1ebfn cho kh\\\\u00e1ch h\\\\u00e0ng ch\\\\u00eca kh\\\\u00f3a c\\\\u1ee7a s\\\\u1ef1 th\\\\u00e0nh c\\\\u00f4ng v\\\\u00e0 \\\\u0111\\\\u1ea1t \\\\u0111\\\\u01b0\\\\u1ee3c nh\\\\u1eefng m\\\\u1ee5c ti\\\\u00eau cao nh\\\\u1ea5t.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"yWJur23qHI5SEEUz\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/effort.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-laptop mr-2\\\\\\\"><\\\\\\/i> C\\\\u00d4NG NGH\\\\u1ec6 TH\\\\u00d4NG TIN<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Ch\\\\u00fang t\\\\u00f4i tin t\\\\u01b0\\\\u1edfng r\\\\u1eb1ng v\\\\u1edbi t\\\\u1eadp th\\\\u1ec3 \\\\u0111o\\\\u00e0n k\\\\u1ebft, v\\\\u1eefng m\\\\u1ea1nh c\\\\u00f9ng s\\\\u1ef1 \\\\u1ee7ng h\\\\u1ed9 c\\\\u1ee7a Qu\\\\u00fd kh\\\\u00e1ch h\\\\u00e0ng, ch\\\\u00fang t\\\\u00f4i ch\\\\u1eafc ch\\\\u1eafn s\\\\u1ebd g\\\\u1eb7t h\\\\u00e1i \\\\u0111\\\\u01b0\\\\u1ee3c nhi\\\\u1ec1u th\\\\u00e0nh c\\\\u00f4ng h\\\\u01a1n n\\\\u1eefa trong t\\\\u01b0\\\\u01a1ng lai \\\\u0111\\\\u1ec3 c\\\\u00f9ng mang \\\\u0111\\\\u1ebfn th\\\\u00e0nh c\\\\u00f4ng cho t\\\\u1ea5t c\\\\u1ea3 \\\\u0111\\\\u1ed1i t\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng c\\\\u00f9ng \\\\u0111\\\\u1ed3ng h\\\\u00e0nh v\\\\u1edbi m\\\\u00ecnh.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}}]\"}'),(54,'93044cf7-36fa-433a-9b41-5bbbfbb040e4',1,'Update','App\\Models\\Widget',4,'App\\Models\\Widget',4,'App\\Models\\Widget',4,'','finished','','2021-03-23 02:33:24','2021-03-23 02:33:24','{\"items\":\"[{\\\"key\\\": \\\"SGGQM7R3BrA4A4FL\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\/images\\/quality.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-headset mr-2\\\\\\\"><\\/i> T\\u01af V\\u1ea4N<\\/h3>\\\\n                        <\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Nh\\u1eadn th\\u1ea5y ch\\u1ea5t l\\u01b0\\u1ee3ng v\\u00e0 uy t\\u00edn l\\u00e0 y\\u1ebfu t\\u1ed1 quy\\u1ebft \\u0111\\u1ecbnh s\\u1ef1 th\\u00f5a m\\u00e3n c\\u1ee7a kh\\u00e1ch h\\u00e0ng l\\u00e0 ch\\u00eca kh\\u00f3a c\\u1ee7a th\\u00e0nh c\\u00f4ng, ch\\u00fang t\\u00f4i xem vi\\u1ec7c \\u0111\\u1ea3m b\\u1ea3o ch\\u1ea5t l\\u01b0\\u1ee3ng l\\u00e0 m\\u1ee5c ti\\u00eau chi\\u1ebfn l\\u01b0\\u1ee3c trong s\\u1ef1 nghi\\u1ec7p ph\\u00e1t tri\\u1ec3n c\\u1ee7a m\\u00ecnh.\\\\n                        <\\/div>\\\\n                    <\\/div>\\\\n                <\\/div>\\\\n            <\\/div>\\\"}}, {\\\"key\\\": \\\"YW8f3qp0C3vj6vsm\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\/images\\/creative.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-book mr-2\\\\\\\"><\\/i> \\u0110\\u00c0O T\\u1ea0O<\\/h3>\\\\n                        <\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            T\\u1eadp th\\u1ec3 ch\\u00fang t\\u00f4i \\u0111\\u00e3 kh\\u00f4ng ng\\u1eebng t\\u00ecm t\\u00f2i, ph\\u00e1t tri\\u1ec3n c\\u1ea3i ti\\u1ebfn, n\\u00e2ng cao ch\\u1ea5t l\\u01b0\\u1ee3ng d\\u1ecbch v\\u1ee5 c\\u0169ng nh\\u01b0 \\u0111\\u1ed5i m\\u1edbi kh\\u1ea3 n\\u0103ng cung \\u1ee9ng d\\u1ecbch v\\u1ee5, kh\\u00f4ng c\\u00f3 b\\u1ea5t k\\u1ef3 kh\\u00f3 kh\\u0103n n\\u00e0o c\\u00f3 th\\u1ec3 ng\\u0103n c\\u1ea3n ch\\u00fang t\\u00f4i mang l\\u1ea1i nh\\u1eefng gi\\u00e1 tr\\u1ecb ti\\u1ec7n \\u00edch ph\\u00f9 h\\u1ee3p nh\\u1ea5t v\\u1edbi l\\u1ee3i \\u00edch c\\u1ee7a kh\\u00e1ch h\\u00e0ng.\\\\n                        <\\/div>\\\\n                    <\\/div>\\\\n                <\\/div>\\\\n            <\\/div>\\\"}}, {\\\"key\\\": \\\"uNJNtfSt6FzPbiDU\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\/images\\/professional.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-server mr-2\\\\\\\"><\\/i> THI\\u1ebeT B\\u1eca<\\/h3>\\\\n                        <\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            H\\u1ec7 th\\u1ed1ng d\\u1ecbch v\\u1ee5 c\\u1ee7a C\\u00f4ng ty ch\\u00fang t\\u00f4i \\u0111\\u01b0\\u1ee3c v\\u1eadn h\\u00e0nh b\\u1edfi \\u0111\\u1ed9i ng\\u0169 k\\u1ef9 thu\\u1eadt chuy\\u00ean nghi\\u1ec7p v\\u1edbi nhi\\u1ec1u n\\u0103m kinh nghi\\u1ec7m, b\\u1ed9 ph\\u1eadn h\\u1ed7 tr\\u1ee3 lu\\u00f4n nhi\\u1ec7t t\\u00ecnh gi\\u1ea3i \\u0111\\u00e1p th\\u1eafc m\\u1eafc cho kh\\u00e1ch h\\u00e0ng v\\u1edbi mong mu\\u1ed1n mang \\u0111\\u1ebfn cho kh\\u00e1ch h\\u00e0ng ch\\u00eca kh\\u00f3a c\\u1ee7a s\\u1ef1 th\\u00e0nh c\\u00f4ng v\\u00e0 \\u0111\\u1ea1t \\u0111\\u01b0\\u1ee3c nh\\u1eefng m\\u1ee5c ti\\u00eau cao nh\\u1ea5t.\\\\n                        <\\/div>\\\\n                    <\\/div>\\\\n                <\\/div>\\\\n            <\\/div>\\\"}}, {\\\"key\\\": \\\"yWJur23qHI5SEEUz\\\", \\\"layout\\\": \\\"html\\\", \\\"attributes\\\": {\\\"html\\\": \\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\/images\\/effort.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-xl\\\\\\\"><i class=\\\\\\\"fas fa-laptop mr-2\\\\\\\"><\\/i> C\\u00d4NG NGH\\u1ec6 TH\\u00d4NG TIN<\\/h3>\\\\n                        <\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Ch\\u00fang t\\u00f4i tin t\\u01b0\\u1edfng r\\u1eb1ng v\\u1edbi t\\u1eadp th\\u1ec3 \\u0111o\\u00e0n k\\u1ebft, v\\u1eefng m\\u1ea1nh c\\u00f9ng s\\u1ef1 \\u1ee7ng h\\u1ed9 c\\u1ee7a Qu\\u00fd kh\\u00e1ch h\\u00e0ng, ch\\u00fang t\\u00f4i ch\\u1eafc ch\\u1eafn s\\u1ebd g\\u1eb7t h\\u00e1i \\u0111\\u01b0\\u1ee3c nhi\\u1ec1u th\\u00e0nh c\\u00f4ng h\\u01a1n n\\u1eefa trong t\\u01b0\\u01a1ng lai \\u0111\\u1ec3 c\\u00f9ng mang \\u0111\\u1ebfn th\\u00e0nh c\\u00f4ng cho t\\u1ea5t c\\u1ea3 \\u0111\\u1ed1i t\\u00e1c kh\\u00e1ch h\\u00e0ng c\\u00f9ng \\u0111\\u1ed3ng h\\u00e0nh v\\u1edbi m\\u00ecnh.\\\\n                        <\\/div>\\\\n                    <\\/div>\\\\n                <\\/div>\\\\n            <\\/div>\\\"}}]\"}','{\"items\":\"[{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"SGGQM7R3BrA4A4FL\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/quality.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-lg\\\\\\\"><i class=\\\\\\\"fas fa-headset mr-2\\\\\\\"><\\\\\\/i> T\\\\u01af V\\\\u1ea4N<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Nh\\\\u1eadn th\\\\u1ea5y ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng v\\\\u00e0 uy t\\\\u00edn l\\\\u00e0 y\\\\u1ebfu t\\\\u1ed1 quy\\\\u1ebft \\\\u0111\\\\u1ecbnh s\\\\u1ef1 th\\\\u00f5a m\\\\u00e3n c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng l\\\\u00e0 ch\\\\u00eca kh\\\\u00f3a c\\\\u1ee7a th\\\\u00e0nh c\\\\u00f4ng, ch\\\\u00fang t\\\\u00f4i xem vi\\\\u1ec7c \\\\u0111\\\\u1ea3m b\\\\u1ea3o ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng l\\\\u00e0 m\\\\u1ee5c ti\\\\u00eau chi\\\\u1ebfn l\\\\u01b0\\\\u1ee3c trong s\\\\u1ef1 nghi\\\\u1ec7p ph\\\\u00e1t tri\\\\u1ec3n c\\\\u1ee7a m\\\\u00ecnh.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"YW8f3qp0C3vj6vsm\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/creative.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-lg\\\\\\\"><i class=\\\\\\\"fas fa-book mr-2\\\\\\\"><\\\\\\/i> \\\\u0110\\\\u00c0O T\\\\u1ea0O<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            T\\\\u1eadp th\\\\u1ec3 ch\\\\u00fang t\\\\u00f4i \\\\u0111\\\\u00e3 kh\\\\u00f4ng ng\\\\u1eebng t\\\\u00ecm t\\\\u00f2i, ph\\\\u00e1t tri\\\\u1ec3n c\\\\u1ea3i ti\\\\u1ebfn, n\\\\u00e2ng cao ch\\\\u1ea5t l\\\\u01b0\\\\u1ee3ng d\\\\u1ecbch v\\\\u1ee5 c\\\\u0169ng nh\\\\u01b0 \\\\u0111\\\\u1ed5i m\\\\u1edbi kh\\\\u1ea3 n\\\\u0103ng cung \\\\u1ee9ng d\\\\u1ecbch v\\\\u1ee5, kh\\\\u00f4ng c\\\\u00f3 b\\\\u1ea5t k\\\\u1ef3 kh\\\\u00f3 kh\\\\u0103n n\\\\u00e0o c\\\\u00f3 th\\\\u1ec3 ng\\\\u0103n c\\\\u1ea3n ch\\\\u00fang t\\\\u00f4i mang l\\\\u1ea1i nh\\\\u1eefng gi\\\\u00e1 tr\\\\u1ecb ti\\\\u1ec7n \\\\u00edch ph\\\\u00f9 h\\\\u1ee3p nh\\\\u1ea5t v\\\\u1edbi l\\\\u1ee3i \\\\u00edch c\\\\u1ee7a kh\\\\u00e1ch h\\\\u00e0ng.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"uNJNtfSt6FzPbiDU\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/professional.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-lg\\\\\\\"><i class=\\\\\\\"fas fa-server mr-2\\\\\\\"><\\\\\\/i> THI\\\\u1ebeT B\\\\u1eca<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            H\\\\u1ec7 th\\\\u1ed1ng d\\\\u1ecbch v\\\\u1ee5 c\\\\u1ee7a C\\\\u00f4ng ty ch\\\\u00fang t\\\\u00f4i \\\\u0111\\\\u01b0\\\\u1ee3c v\\\\u1eadn h\\\\u00e0nh b\\\\u1edfi \\\\u0111\\\\u1ed9i ng\\\\u0169 k\\\\u1ef9 thu\\\\u1eadt chuy\\\\u00ean nghi\\\\u1ec7p v\\\\u1edbi nhi\\\\u1ec1u n\\\\u0103m kinh nghi\\\\u1ec7m, b\\\\u1ed9 ph\\\\u1eadn h\\\\u1ed7 tr\\\\u1ee3 lu\\\\u00f4n nhi\\\\u1ec7t t\\\\u00ecnh gi\\\\u1ea3i \\\\u0111\\\\u00e1p th\\\\u1eafc m\\\\u1eafc cho kh\\\\u00e1ch h\\\\u00e0ng v\\\\u1edbi mong mu\\\\u1ed1n mang \\\\u0111\\\\u1ebfn cho kh\\\\u00e1ch h\\\\u00e0ng ch\\\\u00eca kh\\\\u00f3a c\\\\u1ee7a s\\\\u1ef1 th\\\\u00e0nh c\\\\u00f4ng v\\\\u00e0 \\\\u0111\\\\u1ea1t \\\\u0111\\\\u01b0\\\\u1ee3c nh\\\\u1eefng m\\\\u1ee5c ti\\\\u00eau cao nh\\\\u1ea5t.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}},{\\\"layout\\\":\\\"html\\\",\\\"key\\\":\\\"yWJur23qHI5SEEUz\\\",\\\"attributes\\\":{\\\"html\\\":\\\"<div class=\\\\\\\"col-3 px-2 mx-0\\\\\\\">\\\\n                <div class=\\\\\\\"box-inner relative overflow-hidden\\\\\\\">\\\\n                    <img src=\\\\\\\"\\\\\\/images\\\\\\/effort.jpg\\\\\\\" alt=\\\\\\\"\\\\\\\">\\\\n                    <div class=\\\\\\\"text-inner p-2\\\\\\\">\\\\n                        <div class=\\\\\\\"title-inner my-2 pl-3\\\\\\\">\\\\n                            <h3 class=\\\\\\\"text-white font-bold text-lg\\\\\\\"><i class=\\\\\\\"fas fa-laptop mr-2\\\\\\\"><\\\\\\/i> C\\\\u00d4NG NGH\\\\u1ec6 TH\\\\u00d4NG TIN<\\\\\\/h3>\\\\n                        <\\\\\\/div>\\\\n                        <div class=\\\\\\\"content-inner text-white py-2 px-2.5 text-justify\\\\\\\">\\\\n                            Ch\\\\u00fang t\\\\u00f4i tin t\\\\u01b0\\\\u1edfng r\\\\u1eb1ng v\\\\u1edbi t\\\\u1eadp th\\\\u1ec3 \\\\u0111o\\\\u00e0n k\\\\u1ebft, v\\\\u1eefng m\\\\u1ea1nh c\\\\u00f9ng s\\\\u1ef1 \\\\u1ee7ng h\\\\u1ed9 c\\\\u1ee7a Qu\\\\u00fd kh\\\\u00e1ch h\\\\u00e0ng, ch\\\\u00fang t\\\\u00f4i ch\\\\u1eafc ch\\\\u1eafn s\\\\u1ebd g\\\\u1eb7t h\\\\u00e1i \\\\u0111\\\\u01b0\\\\u1ee3c nhi\\\\u1ec1u th\\\\u00e0nh c\\\\u00f4ng h\\\\u01a1n n\\\\u1eefa trong t\\\\u01b0\\\\u01a1ng lai \\\\u0111\\\\u1ec3 c\\\\u00f9ng mang \\\\u0111\\\\u1ebfn th\\\\u00e0nh c\\\\u00f4ng cho t\\\\u1ea5t c\\\\u1ea3 \\\\u0111\\\\u1ed1i t\\\\u00e1c kh\\\\u00e1ch h\\\\u00e0ng c\\\\u00f9ng \\\\u0111\\\\u1ed3ng h\\\\u00e0nh v\\\\u1edbi m\\\\u00ecnh.\\\\n                        <\\\\\\/div>\\\\n                    <\\\\\\/div>\\\\n                <\\\\\\/div>\\\\n            <\\\\\\/div>\\\"}}]\"}'),(55,'93044f91-60c8-46f4-a7a7-b66d4df693e0',1,'Create','App\\Models\\Widget',5,'App\\Models\\Widget',5,'App\\Models\\Widget',5,'','finished','','2021-03-23 02:40:40','2021-03-23 02:40:40',NULL,'{\"name\":\"Gi\\u1edbi thi\\u1ec7u c\\u00f4ng ty\",\"items\":[{\"layout\":\"html\",\"key\":\"pHYhJH1WEWbl6MaL\",\"attributes\":{\"html\":\"<div class=\\\"text-justify\\\">\\n      C\\u00f4ng ty \\u0111\\u01b0\\u1ee3c x\\u00e2y d\\u1ef1ng, ph\\u00e1t tri\\u1ec3n b\\u1edfi c\\u00e1c chuy\\u00ean gia \\u0111\\u1ea7u ng\\u00e0nh trong c\\u00e1c l\\u0129nh v\\u1ef1c: C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin, \\u0111i\\u1ec7n t\\u1eed, vi\\u1ec5n th\\u00f4ng; \\u0110\\u00e2\\u0301u th\\u00e2\\u0300u, Qua\\u0309n ly\\u0301 x\\u00e2y d\\u1ef1ng, Kinh t\\u1ebf - ta\\u0300i chi\\u0301nh, N\\u00f4ng nghi\\u1ec7p, T\\u00e0i ch\\u00ednh c\\u00f4ng, M\\u00f4i tr\\u01b0\\u1eddng. Ch\\u00fang t\\u00f4i lu\\u00f4n b\\u00e0y t\\u1ecf nguy\\u1ec7n v\\u1ecdng \\u0111\\u01b0\\u1ee3c cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 n\\u00eau tr\\u00ean.\\n      <br>V\\u1edbi ph\\u01b0\\u01a1ng ch\\u00e2m \\u201cNh\\u00e0 cung c\\u1ea5p s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t\\u201d ch\\u00fang t\\u00f4i hi\\u1ec3u r\\u1eb1ng m\\u1ecdi s\\u1ef1 n\\u1ed7 l\\u1ef1c v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng ph\\u1ee5c v\\u1ee5 c\\u1ee7a ch\\u00fang t\\u00f4i s\\u1ebd lu\\u00f4n g\\u00f3p ph\\u1ea7n v\\u00e0o nh\\u1eefng th\\u00e0nh c\\u00f4ng trong t\\u01b0\\u01a1ng lai c\\u1ee7a kh\\u00e1ch h\\u00e0ng.\\n      <br>D\\u1ef1a tr\\u00ean nh\\u1eefng ti\\u1ec1m l\\u1ef1c hi\\u1ec7n c\\u00f3 v\\u1ec1 c\\u01a1 s\\u1edf v\\u1eadt ch\\u1ea5t v\\u00e0 con ng\\u01b0\\u1eddi, PRO PH\\u01af\\u01a0NG NAM tin r\\u1eb1ng ch\\u00fang t\\u00f4i s\\u1ebd mang \\u0111\\u1ebfn cho qu\\u00fd kh\\u00e1ch h\\u00e0ng nh\\u1eefng d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t \\u0111\\u1ec3 qu\\u1ea3ng b\\u00e1 h\\u00ecnh \\u1ea3nh th\\u01b0\\u01a1ng hi\\u1ec7u c\\u1ee7a m\\u00ecnh m\\u1ed9t c\\u00e1ch c\\u00f3 hi\\u1ec7u qu\\u1ea3.\\n      <br>Ch\\u00fang t\\u00f4i hy v\\u1ecdng nh\\u1eadn \\u0111\\u01b0\\u1ee3c s\\u1ef1 h\\u1ee3p t\\u00e1c c\\u1ee7a qu\\u00fd kh\\u00e1ch h\\u00e0ng!\\n      <br>Tr\\u00e2n tr\\u1ecdng!\\n <\\/div>\"}}],\"updated_at\":\"2021-03-23T02:40:40.000000Z\",\"created_at\":\"2021-03-23T02:40:40.000000Z\",\"id\":5}'),(56,'9310ed01-23aa-4d21-9d2d-72af196846b4',1,'Update','App\\Models\\Slider',3,'App\\Models\\Slider',3,'App\\Models\\Slider',3,'','finished','','2021-03-29 09:10:50','2021-03-29 09:10:50','{\"image\":\"45yI5WFxNRxdrf5UPBpPlGq2FqdEkPPzE8v8DVCP.jpg\"}','{\"image\":\"0sn4aA9sxwjc9EaskMEgVyBSSr8fVvsc6fgrQ4W1.jpg\"}'),(57,'9310ed1f-ce83-4c77-8653-48c35adb5770',1,'Update','App\\Models\\Slider',3,'App\\Models\\Slider',3,'App\\Models\\Slider',3,'','finished','','2021-03-29 09:11:10','2021-03-29 09:11:10','{\"image\":\"0sn4aA9sxwjc9EaskMEgVyBSSr8fVvsc6fgrQ4W1.jpg\"}','{\"image\":\"8w1SXr4Pb7xIzr5GHY786zQNgA4X0O2KygdbupaJ.jpg\"}'),(58,'9310ed33-6e67-4760-b8f8-2d5fe0ac24e2',1,'Update','App\\Models\\Slider',2,'App\\Models\\Slider',2,'App\\Models\\Slider',2,'','finished','','2021-03-29 09:11:23','2021-03-29 09:11:23','{\"image\":\"z12N7RzqJCQ9Jo0hkXOwg9VorbgferDrKIkiEkwl.jpg\"}','{\"image\":\"RwWkOTOp5wN6rwiWi1Vmmmkdmb6iMv9ilVn1LGhh.jpg\"}'),(59,'9310ed4c-d2bf-45cd-bec2-3b0979be20f2',1,'Update','App\\Models\\Slider',1,'App\\Models\\Slider',1,'App\\Models\\Slider',1,'','finished','','2021-03-29 09:11:39','2021-03-29 09:11:39','{\"image\":\"81oF8FpUumJWCDpvxdf69CPSK2efUwOQzrJTDZ4T.jpg\"}','{\"image\":\"eWtJrUFAoP5JTP3Kp2JLfQgEVIRVh75O2HjB2KDo.jpg\"}'),(60,'9310eda8-6f0c-41b8-8842-e8dc04bf6fdd',1,'Update','OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'OptimistDigital\\MenuBuilder\\Models\\Menu',1,'','finished','','2021-03-29 09:12:39','2021-03-29 09:12:39','{\"name\":\"Top menu\"}','{\"name\":\"Menu tr\\u00ean c\\u00f9ng\"}'),(61,'9310edbf-c79d-44a5-8ab7-8d95391d1010',1,'Update','OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'OptimistDigital\\MenuBuilder\\Models\\Menu',2,'','finished','','2021-03-29 09:12:55','2021-03-29 09:12:55','{\"name\":\"Footer Menu1\"}','{\"name\":\"Menu d\\u01b0\\u1edbi c\\u00f9ng\"}'),(62,'9310fb1e-e6e4-4e0b-8c00-42d9e77b1af0',1,'Create','App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'','finished','','2021-03-29 09:50:18','2021-03-29 09:50:18',NULL,'{\"image\":\"oSG4Fdgo4sHuisgVlAAWJAnpeWdxxNrr2wvi2LtZ.png\",\"title\":\"qu\\u00fd\",\"content\":\"<div>C\\u00f4ng ty \\u0111\\u01b0\\u1ee3c x\\u00e2y d\\u1ef1ng, ph\\u00e1t tri\\u1ec3n b\\u1edfi c\\u00e1c chuy\\u00ean gia \\u0111\\u1ea7u ng\\u00e0nh trong c\\u00e1c l\\u0129nh v\\u1ef1c: C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin, \\u0111i\\u1ec7n t\\u1eed, vi\\u1ec5n th\\u00f4ng; \\u0110\\u00e2\\u0301u th\\u00e2\\u0300u, Qua\\u0309n ly\\u0301 x\\u00e2y d\\u1ef1ng, Kinh t\\u1ebf - ta\\u0300i chi\\u0301nh, N\\u00f4ng nghi\\u1ec7p, T\\u00e0i ch\\u00ednh c\\u00f4ng, M\\u00f4i tr\\u01b0\\u1eddng. Ch\\u00fang t\\u00f4i lu\\u00f4n b\\u00e0y t\\u1ecf nguy\\u1ec7n v\\u1ecdng \\u0111\\u01b0\\u1ee3c cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 n\\u00eau tr\\u00ean.<br>V\\u1edbi ph\\u01b0\\u01a1ng ch\\u00e2m \\u201cNh\\u00e0 cung c\\u1ea5p s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t\\u201d ch\\u00fang t\\u00f4i hi\\u1ec3u r\\u1eb1ng m\\u1ecdi s\\u1ef1 n\\u1ed7 l\\u1ef1c v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng ph\\u1ee5c v\\u1ee5 c\\u1ee7a ch\\u00fang t\\u00f4i s\\u1ebd lu\\u00f4n g\\u00f3p ph\\u1ea7n v\\u00e0o nh\\u1eefng th\\u00e0nh c\\u00f4ng trong t\\u01b0\\u01a1ng lai c\\u1ee7a kh\\u00e1ch h\\u00e0ng.<br>D\\u1ef1a tr\\u00ean nh\\u1eefng ti\\u1ec1m l\\u1ef1c hi\\u1ec7n c\\u00f3 v\\u1ec1 c\\u01a1 s\\u1edf v\\u1eadt ch\\u1ea5t v\\u00e0 con ng\\u01b0\\u1eddi, PRO PH\\u01af\\u01a0NG NAM tin r\\u1eb1ng ch\\u00fang t\\u00f4i s\\u1ebd mang \\u0111\\u1ebfn cho qu\\u00fd kh\\u00e1ch h\\u00e0ng nh\\u1eefng d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t \\u0111\\u1ec3 qu\\u1ea3ng b\\u00e1 h\\u00ecnh \\u1ea3nh th\\u01b0\\u01a1ng hi\\u1ec7u c\\u1ee7a m\\u00ecnh m\\u1ed9t c\\u00e1ch c\\u00f3 hi\\u1ec7u qu\\u1ea3.<br>Ch\\u00fang t\\u00f4i hy v\\u1ecdng nh\\u1eadn \\u0111\\u01b0\\u1ee3c s\\u1ef1 h\\u1ee3p t\\u00e1c c\\u1ee7a qu\\u00fd kh\\u00e1ch h\\u00e0ng!<br>Tr\\u00e2n tr\\u1ecdng!<\\/div>\",\"updated_at\":\"2021-03-29T09:50:18.000000Z\",\"created_at\":\"2021-03-29T09:50:18.000000Z\",\"id\":1}'),(63,'9310fb5b-85f8-423a-ae8a-cde4a2549c64',1,'Update','App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'','finished','','2021-03-29 09:50:58','2021-03-29 09:50:58','{\"title\":\"qu\\u00fd\"}','{\"title\":\"Qu\\u00fd Kh\\u00e1ch H\\u00e0ng Th\\u00e2n M\\u1ebfn\"}'),(64,'9310fd10-4161-4caa-910f-9bc1f32d3501',1,'Update','App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'','finished','','2021-03-29 09:55:44','2021-03-29 09:55:44','{\"content\":\"<div>C\\u00f4ng ty \\u0111\\u01b0\\u1ee3c x\\u00e2y d\\u1ef1ng, ph\\u00e1t tri\\u1ec3n b\\u1edfi c\\u00e1c chuy\\u00ean gia \\u0111\\u1ea7u ng\\u00e0nh trong c\\u00e1c l\\u0129nh v\\u1ef1c: C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin, \\u0111i\\u1ec7n t\\u1eed, vi\\u1ec5n th\\u00f4ng; \\u0110\\u00e2\\u0301u th\\u00e2\\u0300u, Qua\\u0309n ly\\u0301 x\\u00e2y d\\u1ef1ng, Kinh t\\u1ebf - ta\\u0300i chi\\u0301nh, N\\u00f4ng nghi\\u1ec7p, T\\u00e0i ch\\u00ednh c\\u00f4ng, M\\u00f4i tr\\u01b0\\u1eddng. Ch\\u00fang t\\u00f4i lu\\u00f4n b\\u00e0y t\\u1ecf nguy\\u1ec7n v\\u1ecdng \\u0111\\u01b0\\u1ee3c cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 n\\u00eau tr\\u00ean.<br>V\\u1edbi ph\\u01b0\\u01a1ng ch\\u00e2m \\u201cNh\\u00e0 cung c\\u1ea5p s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t\\u201d ch\\u00fang t\\u00f4i hi\\u1ec3u r\\u1eb1ng m\\u1ecdi s\\u1ef1 n\\u1ed7 l\\u1ef1c v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng ph\\u1ee5c v\\u1ee5 c\\u1ee7a ch\\u00fang t\\u00f4i s\\u1ebd lu\\u00f4n g\\u00f3p ph\\u1ea7n v\\u00e0o nh\\u1eefng th\\u00e0nh c\\u00f4ng trong t\\u01b0\\u01a1ng lai c\\u1ee7a kh\\u00e1ch h\\u00e0ng.<br>D\\u1ef1a tr\\u00ean nh\\u1eefng ti\\u1ec1m l\\u1ef1c hi\\u1ec7n c\\u00f3 v\\u1ec1 c\\u01a1 s\\u1edf v\\u1eadt ch\\u1ea5t v\\u00e0 con ng\\u01b0\\u1eddi, PRO PH\\u01af\\u01a0NG NAM tin r\\u1eb1ng ch\\u00fang t\\u00f4i s\\u1ebd mang \\u0111\\u1ebfn cho qu\\u00fd kh\\u00e1ch h\\u00e0ng nh\\u1eefng d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t \\u0111\\u1ec3 qu\\u1ea3ng b\\u00e1 h\\u00ecnh \\u1ea3nh th\\u01b0\\u01a1ng hi\\u1ec7u c\\u1ee7a m\\u00ecnh m\\u1ed9t c\\u00e1ch c\\u00f3 hi\\u1ec7u qu\\u1ea3.<br>Ch\\u00fang t\\u00f4i hy v\\u1ecdng nh\\u1eadn \\u0111\\u01b0\\u1ee3c s\\u1ef1 h\\u1ee3p t\\u00e1c c\\u1ee7a qu\\u00fd kh\\u00e1ch h\\u00e0ng!<br>Tr\\u00e2n tr\\u1ecdng!<\\/div>\"}','{\"content\":\"<div>C\\u00f4ng ty \\u0111\\u01b0\\u1ee3c x\\u00e2y d\\u1ef1ng, ph\\u00e1t tri\\u1ec3n b\\u1edfi c\\u00e1c chuy\\u00ean gia \\u0111\\u1ea7u ng\\u00e0nh trong c\\u00e1c l\\u0129nh v\\u1ef1c: C\\u00f4ng ngh\\u1ec7 th\\u00f4ng tin, \\u0111i\\u1ec7n t\\u1eed, vi\\u1ec5n th\\u00f4ng; \\u0110\\u00e2\\u0301u th\\u00e2\\u0300u, Qua\\u0309n ly\\u0301 x\\u00e2y d\\u1ef1ng, Kinh t\\u1ebf - ta\\u0300i chi\\u0301nh, N\\u00f4ng nghi\\u1ec7p, T\\u00e0i ch\\u00ednh c\\u00f4ng, M\\u00f4i tr\\u01b0\\u1eddng. Ch\\u00fang t\\u00f4i lu\\u00f4n b\\u00e0y t\\u1ecf nguy\\u1ec7n v\\u1ecdng \\u0111\\u01b0\\u1ee3c cung c\\u1ea5p c\\u00e1c s\\u1ea3n ph\\u1ea9m v\\u00e0 d\\u1ecbch v\\u1ee5 n\\u00eau tr\\u00ean.<br>V\\u1edbi ph\\u01b0\\u01a1ng ch\\u00e2m \\u201cNh\\u00e0 cung c\\u1ea5p s\\u1ea3n ph\\u1ea9m, gi\\u1ea3i ph\\u00e1p d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t\\u201d ch\\u00fang t\\u00f4i hi\\u1ec3u r\\u1eb1ng m\\u1ecdi s\\u1ef1 n\\u1ed7 l\\u1ef1c v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng ph\\u1ee5c v\\u1ee5 c\\u1ee7a ch\\u00fang t\\u00f4i s\\u1ebd lu\\u00f4n g\\u00f3p ph\\u1ea7n v\\u00e0o nh\\u1eefng th\\u00e0nh c\\u00f4ng trong t\\u01b0\\u01a1ng lai c\\u1ee7a kh\\u00e1ch h\\u00e0ng. D\\u1ef1a tr\\u00ean nh\\u1eefng ti\\u1ec1m l\\u1ef1c hi\\u1ec7n c\\u00f3 v\\u1ec1 c\\u01a1 s\\u1edf v\\u1eadt ch\\u1ea5t v\\u00e0 con ng\\u01b0\\u1eddi, PRO PH\\u01af\\u01a0NG NAM tin r\\u1eb1ng ch\\u00fang t\\u00f4i s\\u1ebd mang \\u0111\\u1ebfn cho qu\\u00fd kh\\u00e1ch h\\u00e0ng nh\\u1eefng d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t \\u0111\\u1ec3 qu\\u1ea3ng b\\u00e1 h\\u00ecnh \\u1ea3nh th\\u01b0\\u01a1ng hi\\u1ec7u c\\u1ee7a m\\u00ecnh m\\u1ed9t c\\u00e1ch c\\u00f3 hi\\u1ec7u qu\\u1ea3.<br>Ch\\u00fang t\\u00f4i hy v\\u1ecdng nh\\u1eadn \\u0111\\u01b0\\u1ee3c s\\u1ef1 h\\u1ee3p t\\u00e1c c\\u1ee7a qu\\u00fd kh\\u00e1ch h\\u00e0ng!<br>Tr\\u00e2n tr\\u1ecdng!<\\/div>\"}'),(65,'9311018e-5b47-4724-bff0-206b2659ea27',1,'Create','App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'','finished','','2021-03-29 10:08:18','2021-03-29 10:08:18',NULL,'{\"image\":\"jdROftxQeX1FWBEJXb6dGiqqA9Kys1IeeDT0sDSC.jpg\",\"title\":\"T\\u01b0 V\\u1ea5n\",\"content\":\"<div>Nh\\u1eadn th\\u1ea5y ch\\u1ea5t l\\u01b0\\u1ee3ng v\\u00e0 uy t\\u00edn l\\u00e0 y\\u1ebfu t\\u1ed1 quy\\u1ebft \\u0111\\u1ecbnh s\\u1ef1 th\\u00f5a m\\u00e3n c\\u1ee7a kh\\u00e1ch h\\u00e0ng l\\u00e0 ch\\u00eca kh\\u00f3a c\\u1ee7a th\\u00e0nh c\\u00f4ng, ch\\u00fang t\\u00f4i xem vi\\u1ec7c \\u0111\\u1ea3m b\\u1ea3o ch\\u1ea5t l\\u01b0\\u1ee3ng l\\u00e0 m\\u1ee5c ti\\u00eau chi\\u1ebfn l\\u01b0\\u1ee3c trong s\\u1ef1 nghi\\u1ec7p ph\\u00e1t tri\\u1ec3n c\\u1ee7a m\\u00ecnh.<\\/div>\",\"updated_at\":\"2021-03-29T10:08:18.000000Z\",\"created_at\":\"2021-03-29T10:08:18.000000Z\",\"id\":1}'),(66,'931101b6-6d62-4fd8-8f0a-6c074721f11e',1,'Create','App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'','finished','','2021-03-29 10:08:44','2021-03-29 10:08:44',NULL,'{\"image\":\"OfP2jbJW25lpUtt69gpLH09VPlV56HlpVBFobPdn.jpg\",\"title\":\"\\u0110\\u00e0o T\\u1ea1o\",\"content\":\"<div>T\\u1eadp th\\u1ec3 ch\\u00fang t\\u00f4i \\u0111\\u00e3 kh\\u00f4ng ng\\u1eebng t\\u00ecm t\\u00f2i, ph\\u00e1t tri\\u1ec3n c\\u1ea3i ti\\u1ebfn, n\\u00e2ng cao ch\\u1ea5t l\\u01b0\\u1ee3ng d\\u1ecbch v\\u1ee5 c\\u0169ng nh\\u01b0 \\u0111\\u1ed5i m\\u1edbi kh\\u1ea3 n\\u0103ng cung \\u1ee9ng d\\u1ecbch v\\u1ee5, kh\\u00f4ng c\\u00f3 b\\u1ea5t k\\u1ef3 kh\\u00f3 kh\\u0103n n\\u00e0o c\\u00f3 th\\u1ec3 ng\\u0103n c\\u1ea3n ch\\u00fang t\\u00f4i mang l\\u1ea1i nh\\u1eefng gi\\u00e1 tr\\u1ecb ti\\u1ec7n \\u00edch ph\\u00f9 h\\u1ee3p nh\\u1ea5t v\\u1edbi l\\u1ee3i \\u00edch c\\u1ee7a kh\\u00e1ch h\\u00e0ng.<\\/div>\",\"updated_at\":\"2021-03-29T10:08:44.000000Z\",\"created_at\":\"2021-03-29T10:08:44.000000Z\",\"id\":2}'),(67,'931101d9-0253-47a9-bc3f-53cfeb3cc052',1,'Create','App\\Models\\Linhvuc',3,'App\\Models\\Linhvuc',3,'App\\Models\\Linhvuc',3,'','finished','','2021-03-29 10:09:07','2021-03-29 10:09:07',NULL,'{\"image\":\"Mih67CusENSWeabyMzV7vFgmwkv3y49ndIsj1bPX.jpg\",\"title\":\"Thi\\u1ebft B\\u1ecb\",\"content\":\"<div>H\\u1ec7 th\\u1ed1ng d\\u1ecbch v\\u1ee5 c\\u1ee7a C\\u00f4ng ty ch\\u00fang t\\u00f4i \\u0111\\u01b0\\u1ee3c v\\u1eadn h\\u00e0nh b\\u1edfi \\u0111\\u1ed9i ng\\u0169 k\\u1ef9 thu\\u1eadt chuy\\u00ean nghi\\u1ec7p v\\u1edbi nhi\\u1ec1u n\\u0103m kinh nghi\\u1ec7m, b\\u1ed9 ph\\u1eadn h\\u1ed7 tr\\u1ee3 lu\\u00f4n nhi\\u1ec7t t\\u00ecnh gi\\u1ea3i \\u0111\\u00e1p th\\u1eafc m\\u1eafc cho kh\\u00e1ch h\\u00e0ng v\\u1edbi mong mu\\u1ed1n mang \\u0111\\u1ebfn cho kh\\u00e1ch h\\u00e0ng ch\\u00eca kh\\u00f3a c\\u1ee7a s\\u1ef1 th\\u00e0nh c\\u00f4ng v\\u00e0 \\u0111\\u1ea1t \\u0111\\u01b0\\u1ee3c nh\\u1eefng m\\u1ee5c ti\\u00eau cao nh\\u1ea5t.<\\/div>\",\"updated_at\":\"2021-03-29T10:09:07.000000Z\",\"created_at\":\"2021-03-29T10:09:07.000000Z\",\"id\":3}'),(68,'93110200-2141-44ec-9327-1e1c8e6492cc',1,'Create','App\\Models\\Linhvuc',4,'App\\Models\\Linhvuc',4,'App\\Models\\Linhvuc',4,'','finished','','2021-03-29 10:09:32','2021-03-29 10:09:32',NULL,'{\"image\":\"h5qYj0qX4nAjzRUFCQIbyB02vgjJt6ACfXObKQ2d.jpg\",\"title\":\"C\\u00f4ng Ngh\\u1ec7 Th\\u00f4ng Tin\",\"content\":\"<div>Ch\\u00fang t\\u00f4i tin t\\u01b0\\u1edfng r\\u1eb1ng v\\u1edbi t\\u1eadp th\\u1ec3 \\u0111o\\u00e0n k\\u1ebft, v\\u1eefng m\\u1ea1nh c\\u00f9ng s\\u1ef1 \\u1ee7ng h\\u1ed9 c\\u1ee7a Qu\\u00fd kh\\u00e1ch h\\u00e0ng, ch\\u00fang t\\u00f4i ch\\u1eafc ch\\u1eafn s\\u1ebd g\\u1eb7t h\\u00e1i \\u0111\\u01b0\\u1ee3c nhi\\u1ec1u th\\u00e0nh c\\u00f4ng h\\u01a1n n\\u1eefa trong t\\u01b0\\u01a1ng lai \\u0111\\u1ec3 c\\u00f9ng mang \\u0111\\u1ebfn th\\u00e0nh c\\u00f4ng cho t\\u1ea5t c\\u1ea3 \\u0111\\u1ed1i t\\u00e1c kh\\u00e1ch h\\u00e0ng c\\u00f9ng \\u0111\\u1ed3ng h\\u00e0nh v\\u1edbi m\\u00ecnh.<\\/div>\",\"updated_at\":\"2021-03-29T10:09:32.000000Z\",\"created_at\":\"2021-03-29T10:09:32.000000Z\",\"id\":4}'),(69,'93110352-0705-4937-90a1-626d79d318f0',1,'Update','App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'','finished','','2021-03-29 10:13:14','2021-03-29 10:13:14','[]','[]'),(70,'931161b0-876a-4803-8571-130680195215',1,'Update','App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'','finished','','2021-03-29 14:37:06','2021-03-29 14:37:06','[]','[]'),(71,'931161d2-d8db-4daf-94b6-db9de2cf6a8e',1,'Update','App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'','finished','','2021-03-29 14:37:29','2021-03-29 14:37:29','[]','[]'),(72,'931161ea-8402-4dfb-b271-5d200b3e0479',1,'Update','App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'App\\Models\\Linhvuc',2,'','finished','','2021-03-29 14:37:44','2021-03-29 14:37:44','{\"image\":\"OfP2jbJW25lpUtt69gpLH09VPlV56HlpVBFobPdn.jpg\"}','{\"image\":\"mNpIh71szEuOgMLg9r1ybuS9rBxF182NUbE1tThk.jpg\"}'),(73,'931273c7-956a-472e-80c7-4a6ee49313b6',1,'Create','App\\Models\\BaiViet',1,'App\\Models\\BaiViet',1,'App\\Models\\BaiViet',1,'','finished','','2021-03-30 03:23:31','2021-03-30 03:23:31',NULL,'{\"image\":\"zXTudz2quIdVsPLrAR2RvnTmBlXnTBS58IrbsWZq.jpg\",\"title\":\"Cung c\\u1ea5p thi\\u1ebft b\\u1ecb\",\"description\":\"Chuy\\u00ean cung c\\u1ea5p thi\\u1ebft b\\u1ecb tr\\u01b0\\u1eddng h\\u1ecdc c\\u00e1c th\\u1ee9\",\"content\":\"<div>\\u0110\\u1ea5y l\\u00e0 nh\\u1eefng g\\u00ec m\\u00ecnh mu\\u1ed1n n\\u00f3i :))<\\/div>\",\"updated_at\":\"2021-03-30T03:23:31.000000Z\",\"created_at\":\"2021-03-30T03:23:31.000000Z\",\"id\":1}'),(74,'93127de5-9a07-4017-a423-5a1775a52de5',1,'Create','App\\Models\\BaiViet',2,'App\\Models\\BaiViet',2,'App\\Models\\BaiViet',2,'','finished','','2021-03-30 03:51:48','2021-03-30 03:51:48',NULL,'{\"image\":\"dHOlNoQweQzupYKxl2oyaH7OPsSjwz7IDqwzDoH9.jpg\",\"title\":\"Ti\\u00eau \\u0111\\u1ec1 b\\u00e0i 2\",\"description\":\"\\u0110\\u00e2y l\\u00e0 b\\u00e0i vi\\u1ebft t2 th\\u1eed\",\"content\":\"<div>C\\u0169ng ch\\u1ec9 l\\u00e0 b\\u00e0i vi\\u1ebft th\\u1ee9 2 m\\u00e0 th\\u00f4i<\\/div>\",\"updated_at\":\"2021-03-30T03:51:48.000000Z\",\"created_at\":\"2021-03-30T03:51:48.000000Z\",\"id\":2}'),(75,'9312b5bb-aa41-40c3-9767-76328f18c9b4',1,'Update','App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'App\\Models\\GioithieuIndex',1,'','finished','','2021-03-30 06:27:56','2021-03-30 06:27:56','[]','[]'),(76,'9312b610-4c26-4ab4-ab00-25273808b4fa',1,'Update','App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'App\\Models\\Linhvuc',1,'','finished','','2021-03-30 06:28:52','2021-03-30 06:28:52','{\"image\":\"jdROftxQeX1FWBEJXb6dGiqqA9Kys1IeeDT0sDSC.jpg\",\"title\":\"T\\u01b0 V\\u1ea5n\"}','{\"image\":\"w6lNmaXrspdkY776xVVNuuqNWjIEoH8LzQA1pzxT.jpg\",\"title\":\"T\\u01b0 V\\u1ea5n ABC\"}'),(77,'9312b697-092f-4bb2-adf8-1882e5bf3864',1,'Create','App\\Models\\BaiViet',3,'App\\Models\\BaiViet',3,'App\\Models\\BaiViet',3,'','finished','','2021-03-30 06:30:20','2021-03-30 06:30:20',NULL,'{\"image\":\"FvciGKrzlkvdusLWsqRRnVr2RYdLX14zzooT2OwT.jpg\",\"title\":\"b\\u00e0i vi\\u00eat ABC\",\"description\":\"\\u0110\\u00e2y l\\u00e0 \\u0111o\\u1ea1n gi\\u1edbi thi\\u1ec7u ng\\u1eafn\",\"content\":\"<div>abc \\u0111\\u1ea5y l\\u00e0 n\\u1ed9i dung ch\\u00ednh khi xem<\\/div>\",\"updated_at\":\"2021-03-30T06:30:20.000000Z\",\"created_at\":\"2021-03-30T06:30:20.000000Z\",\"id\":3}'),(78,'9312b731-682f-42ee-9b4e-3824e77f1154',1,'Create','App\\Models\\Slider',4,'App\\Models\\Slider',4,'App\\Models\\Slider',4,'','finished','','2021-03-30 06:32:01','2021-03-30 06:32:01',NULL,'{\"image\":\"MV1cGSeBWIknPwvEtggZTO7rDlBTiFRsrVgu488T.jpg\",\"heading\":\"Ph\\u01b0\\u01a1ng Nam ch\\u00ednh\",\"description\":\"Slogan\",\"url\":\"\\/gioi-thieu\",\"updated_at\":\"2021-03-30T06:32:01.000000Z\",\"created_at\":\"2021-03-30T06:32:01.000000Z\",\"id\":4}');
/*!40000 ALTER TABLE `action_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bai_viets`
--

DROP TABLE IF EXISTS `bai_viets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bai_viets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bai_viets`
--

LOCK TABLES `bai_viets` WRITE;
/*!40000 ALTER TABLE `bai_viets` DISABLE KEYS */;
INSERT INTO `bai_viets` VALUES (1,'zXTudz2quIdVsPLrAR2RvnTmBlXnTBS58IrbsWZq.jpg','Cung cấp thiết bị','Chuyên cung cấp thiết bị trường học các thứ','<div>Đấy là những gì mình muốn nói :))</div>','2021-03-30 03:23:31','2021-03-30 03:23:31'),(2,'dHOlNoQweQzupYKxl2oyaH7OPsSjwz7IDqwzDoH9.jpg','Tiêu đề bài 2','Đây là bài viết t2 thử','<div>Cũng chỉ là bài viết thứ 2 mà thôi</div>','2021-03-30 03:51:48','2021-03-30 03:51:48'),(3,'FvciGKrzlkvdusLWsqRRnVr2RYdLX14zzooT2OwT.jpg','bài viêt ABC','Đây là đoạn giới thiệu ngắn','<div>abc đấy là nội dung chính khi xem</div>','2021-03-30 06:30:20','2021-03-30 06:30:20');
/*!40000 ALTER TABLE `bai_viets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Chưa phân loại','chua-phan-loai',NULL,NULL),(2,'Dịch Vụ','dich-vu','2021-03-17 08:22:47','2021-03-17 08:22:47'),(3,'Khách hàng tiêu biểu','khach-hang-tieu-bieu','2021-03-17 08:33:23','2021-03-17 08:33:23');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `post_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  UNIQUE KEY `category_post_post_id_category_id_unique` (`post_id`,`category_id`),
  KEY `category_post_category_id_foreign` (`category_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
INSERT INTO `category_post` VALUES (1,1),(2,2),(3,2),(4,2),(5,2),(6,2),(7,2),(8,2),(9,2),(10,2),(11,2),(12,3),(13,3),(14,3),(15,3),(16,3),(17,3),(18,3),(19,3),(20,3),(21,3);
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_categories`
--

DROP TABLE IF EXISTS `document_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `document_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `document_categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_categories`
--

LOCK TABLES `document_categories` WRITE;
/*!40000 ALTER TABLE `document_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_types`
--

DROP TABLE IF EXISTS `document_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `document_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `document_types_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_types`
--

LOCK TABLES `document_types` WRITE;
/*!40000 ALTER TABLE `document_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `document_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `document_category_id` bigint unsigned NOT NULL,
  `document_type_id` bigint unsigned NOT NULL,
  `sokyhieu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `trichyeu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaybanhanh` timestamp NOT NULL,
  `ngayhethan` timestamp NULL DEFAULT NULL,
  `nguoiky` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coquanbanhanh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinhkem` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `el_albums`
--

DROP TABLE IF EXISTS `el_albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `el_albums` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `el_albums`
--

LOCK TABLES `el_albums` WRITE;
/*!40000 ALTER TABLE `el_albums` DISABLE KEYS */;
/*!40000 ALTER TABLE `el_albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `el_photos`
--

DROP TABLE IF EXISTS `el_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `el_photos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `album_id` int unsigned NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `el_photos_album_id_index` (`album_id`),
  CONSTRAINT `el_photos_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `el_albums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `el_photos`
--

LOCK TABLES `el_photos` WRITE;
/*!40000 ALTER TABLE `el_photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `el_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gioithieu_indices`
--

DROP TABLE IF EXISTS `gioithieu_indices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gioithieu_indices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gioithieu_indices`
--

LOCK TABLES `gioithieu_indices` WRITE;
/*!40000 ALTER TABLE `gioithieu_indices` DISABLE KEYS */;
INSERT INTO `gioithieu_indices` VALUES (1,'oSG4Fdgo4sHuisgVlAAWJAnpeWdxxNrr2wvi2LtZ.png','Quý Khách Hàng Thân Mến','<div>Công ty được xây dựng, phát triển bởi các chuyên gia đầu ngành trong các lĩnh vực: Công nghệ thông tin, điện tử, viễn thông; Đấu thầu, Quản lý xây dựng, Kinh tế - tài chính, Nông nghiệp, Tài chính công, Môi trường. Chúng tôi luôn bày tỏ nguyện vọng được cung cấp các sản phẩm và dịch vụ nêu trên.<br>Với phương châm “Nhà cung cấp sản phẩm, giải pháp dịch vụ tốt nhất” chúng tôi hiểu rằng mọi sự nỗ lực về chất lượng phục vụ của chúng tôi sẽ luôn góp phần vào những thành công trong tương lai của khách hàng. Dựa trên những tiềm lực hiện có về cơ sở vật chất và con người, PRO PHƯƠNG NAM tin rằng chúng tôi sẽ mang đến cho quý khách hàng những dịch vụ tốt nhất để quảng bá hình ảnh thương hiệu của mình một cách có hiệu quả.<br>Chúng tôi hy vọng nhận được sự hợp tác của quý khách hàng!<br>Trân trọng!</div>','2021-03-29 09:50:18','2021-03-29 09:55:44');
/*!40000 ALTER TABLE `gioithieu_indices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linhvucs`
--

DROP TABLE IF EXISTS `linhvucs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `linhvucs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linhvucs`
--

LOCK TABLES `linhvucs` WRITE;
/*!40000 ALTER TABLE `linhvucs` DISABLE KEYS */;
INSERT INTO `linhvucs` VALUES (1,'w6lNmaXrspdkY776xVVNuuqNWjIEoH8LzQA1pzxT.jpg','Tư Vấn ABC','<div>Nhận thấy chất lượng và uy tín là yếu tố quyết định sự thõa mãn của khách hàng là chìa khóa của thành công, chúng tôi xem việc đảm bảo chất lượng là mục tiêu chiến lược trong sự nghiệp phát triển của mình.</div>','2021-03-29 10:08:18','2021-03-30 06:28:52'),(2,'mNpIh71szEuOgMLg9r1ybuS9rBxF182NUbE1tThk.jpg','Đào Tạo','<div>Tập thể chúng tôi đã không ngừng tìm tòi, phát triển cải tiến, nâng cao chất lượng dịch vụ cũng như đổi mới khả năng cung ứng dịch vụ, không có bất kỳ khó khăn nào có thể ngăn cản chúng tôi mang lại những giá trị tiện ích phù hợp nhất với lợi ích của khách hàng.</div>','2021-03-29 10:08:44','2021-03-29 14:37:44'),(3,'Mih67CusENSWeabyMzV7vFgmwkv3y49ndIsj1bPX.jpg','Thiết Bị','<div>Hệ thống dịch vụ của Công ty chúng tôi được vận hành bởi đội ngũ kỹ thuật chuyên nghiệp với nhiều năm kinh nghiệm, bộ phận hỗ trợ luôn nhiệt tình giải đáp thắc mắc cho khách hàng với mong muốn mang đến cho khách hàng chìa khóa của sự thành công và đạt được những mục tiêu cao nhất.</div>','2021-03-29 10:09:07','2021-03-29 10:09:07'),(4,'h5qYj0qX4nAjzRUFCQIbyB02vgjJt6ACfXObKQ2d.jpg','Công Nghệ Thông Tin','<div>Chúng tôi tin tưởng rằng với tập thể đoàn kết, vững mạnh cùng sự ủng hộ của Quý khách hàng, chúng tôi chắc chắn sẽ gặt hái được nhiều thành công hơn nữa trong tương lai để cùng mang đến thành công cho tất cả đối tác khách hàng cùng đồng hành với mình.</div>','2021-03-29 10:09:32','2021-03-29 10:09:32');
/*!40000 ALTER TABLE `linhvucs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_05_28_115649_create_gates_table',1),(4,'2018_01_01_000000_create_action_events_table',1),(5,'2019_05_10_000000_add_fields_to_action_events_table',1),(6,'2019_08_19_000000_create_failed_jobs_table',1),(7,'2019_10_09_143453_create_accesses_table',1),(8,'2019_11_08_000000_create_menus_table',1),(9,'2019_11_08_000001_add_locale_parent_id_to_table',1),(10,'2020_08_18_000001_add_data_column_to_table',1),(11,'2020_09_15_000000_rework_locale_handling',1),(12,'2021_02_05_000000_drop_slug_unique_constraint',1),(13,'2021_03_02_102102_create_categories_table',1),(14,'2021_03_02_102228_create_tags_table',1),(15,'2021_03_02_102256_create_posts_table',1),(16,'2021_03_02_103548_create_category_post_table',1),(17,'2021_03_02_103607_create_post_tag_table',1),(18,'2021_03_02_124313_create_pages_table',1),(19,'2021_03_02_132326_create_document_categories_table',1),(20,'2021_03_02_133741_create_document_types_table',1),(21,'2021_03_02_133949_create_documents_table',1),(22,'2021_03_10_152206_create_widgets_table',1),(23,'2021_03_10_153439_create_videos_table',1),(24,'2021_03_10_153450_create_video_categories_table',1),(25,'2021_03_10_154543_create_albums_table',1),(27,'2021_03_13_145443_create_sliders_table',2),(32,'2021_03_21_220512_create_articles_table',3),(33,'2021_03_29_161522_create_gioithieu_indices_table',3),(34,'2021_03_29_170040_create_linhvucs_table',4),(35,'2021_03_30_094228_create_bai_viets_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nova_menu_menu_items`
--

DROP TABLE IF EXISTS `nova_menu_menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nova_menu_menu_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data` json DEFAULT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nova_menu_menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `nova_menu_menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `nova_menu_menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nova_menu_menu_items`
--

LOCK TABLES `nova_menu_menu_items` WRITE;
/*!40000 ALTER TABLE `nova_menu_menu_items` DISABLE KEYS */;
INSERT INTO `nova_menu_menu_items` VALUES (2,1,'GIỚI THIỆU','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/gioi-thieu','_self',NULL,1,1,'2021-03-11 01:35:14','2021-03-13 07:45:59','[]','en_US'),(5,1,'các dịch vụ của chúng tôi','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/dich-vu','_self',NULL,2,1,'2021-03-11 02:16:59','2021-03-13 07:48:24','[]','en_US'),(7,1,'Liên hệ','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/lien-he','_self',NULL,3,1,'2021-03-11 02:17:18','2021-03-13 09:42:44','[]','en_US'),(8,2,'Trang Chủ','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/','_self',NULL,8,1,'2021-03-11 02:29:28','2021-03-14 05:24:13','[]','en_US'),(9,2,'Giới Thiệu','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/gioi-thieu','_self',NULL,9,1,'2021-03-11 02:30:39','2021-03-13 09:45:26','[]','en_US'),(10,2,'Dịch Vụ','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/dich-vu','_self',NULL,10,1,'2021-03-11 02:30:47','2021-03-13 09:45:53','[]','en_US'),(12,2,'Liên Hệ','OptimistDigital\\MenuBuilder\\MenuItemTypes\\MenuItemStaticURLType','/lien-he','_self',NULL,12,1,'2021-03-11 02:31:18','2021-03-13 09:46:16','[]','en_US');
/*!40000 ALTER TABLE `nova_menu_menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nova_menu_menus`
--

DROP TABLE IF EXISTS `nova_menu_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nova_menu_menus` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nova_menu_menus`
--

LOCK TABLES `nova_menu_menus` WRITE;
/*!40000 ALTER TABLE `nova_menu_menus` DISABLE KEYS */;
INSERT INTO `nova_menu_menus` VALUES (1,'Menu trên cùng','header','2021-03-11 01:34:34','2021-03-29 09:12:39'),(2,'Menu dưới cùng','footer','2021-03-11 02:28:49','2021-03-29 09:12:55');
/*!40000 ALTER TABLE `nova_menu_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_tag` (
  `post_id` bigint unsigned NOT NULL,
  `tag_id` bigint unsigned NOT NULL,
  UNIQUE KEY `post_tag_post_id_tag_id_unique` (`post_id`,`tag_id`),
  KEY `post_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tag`
--

LOCK TABLES `post_tag` WRITE;
/*!40000 ALTER TABLE `post_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `post_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `excerpt` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `seo_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `published_by` bigint unsigned DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,NULL,'Tin tức','tin-tuc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-11 01:37:44','2021-03-11 01:37:44'),(2,NULL,'Giải pháp phần cứng & phần mềm','giai-phap-phan-cung-phan-mem',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:25:03','2021-03-17 08:25:03'),(3,NULL,'Giải pháp Hội nghị truyền hình','giai-phap-hoi-nghi-truyen-hinh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:25:37','2021-03-17 08:25:37'),(4,NULL,'Giải pháp chuyển đổi số','giai-phap-chuyen-doi-so',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:25:52','2021-03-17 08:25:52'),(5,NULL,'Phòng học quan sát phục vụ thao giảng, dự giờ','phong-hoc-quan-sat-phuc-vu-thao-giang-du-gio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:26:49','2021-03-17 08:26:49'),(6,NULL,'Cung cấp thiết bị trường học','cung-cap-thiet-bi-truong-hoc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:27:07','2021-03-17 08:27:07'),(7,NULL,'Trang thiết bị phòng học, khu nội trú','trang-thiet-bi-phong-hoc-khu-noi-tru',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:27:30','2021-03-17 08:27:30'),(8,NULL,'Thiết bị văn phòng','thiet-bi-van-phong',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:28:04','2021-03-17 08:28:04'),(9,NULL,'Mô hình thư viện số trường học, mô hình STEM','mo-hinh-thu-vien-so-truong-hoc-mo-hinh-stem',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:28:25','2021-03-17 08:28:25'),(10,NULL,'Đào tạo tập huấn nâng cao năng lực','dao-tao-tap-huan-nang-cao-nang-luc',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:28:54','2021-03-17 08:28:54'),(11,NULL,'Tư vấn','tu-van',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:29:04','2021-03-17 08:29:04'),(12,NULL,'Ban QLDA Hỗ trợ ý tế vùng Duyên hải Nam Trung Bộ','ban-qlda-ho-tro-y-te-vung-duyen-hai-nam-trung-bo','<div>Gồm các Sở Y Tế Tỉnh Khánh Hòa, Sở Y Tế Trà Vinh, Sơn La, An Giang, Phú Thọ. Sở Y Tế Nghệ An</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:36:04','2021-03-17 08:36:04'),(13,NULL,'Sở Nội Vụ tỉnh Bắc Ninh','so-noi-vu-tinh-bac-ninh','<div>Phần mềm nội bộ, hệ thống cơ sở dữ liệu cán bộ, công chức, viên chức</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:36:50','2021-03-17 08:36:50'),(14,NULL,'Ban tổ chức Trung Ương','ban-to-chuc-trung-uong','<div>Phần mềm quản lý cán bộ thuộc diện ban tổ chức Trung Ương theo dõi</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:37:23','2021-03-17 08:37:23'),(15,NULL,'Ban QLDA Y Tế các tỉnh Đồng Bằng sông Cửu Long, Ban QLDA Rác thải Y Tế WorldBank','ban-qlda-y-te-cac-tinh-dong-bang-song-cuu-long-ban-qlda-rac-thai-y-te-world-bank','<div>Tư vấn triển khai dự án, biên soạn sổ tay giao trình tài liệu, tập huấn nâng cao năng lực</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:39:02','2021-03-17 08:39:02'),(16,NULL,'Ủy ban Dân tộc','uy-ban-dan-toc','<div>Xây dựng phần mềm thống kê, điều tra kinh tế xã hội 53 dân tộc thiểu số</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:40:29','2021-03-17 08:40:29'),(17,NULL,'Bệnh viện Viết Đức, Bệnh viện 115','benh-vien-viet-duc-benh-vien-115','<div>Phần mềm Quản lý công chứ, viên chức</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:41:07','2021-03-17 08:41:07'),(18,NULL,'Ban dân tộc tỉnh Đồng Nai','ban-dan-toc-tinh-dong-nai','<div>Phần mềm quản lý công tác dân tộc</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:41:34','2021-03-17 08:41:34'),(19,NULL,'Ban dân tọc tỉnh Bình Phước, Ban dân tộc tỉnh Bà Rịa - Vũng Tàu','ban-dan-toc-tinh-binh-phuoc-ban-dan-toc-tinh-ba-ria-vung-tau','<div>Xây dựng phần mềm quản lý công tác dân tộc</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:42:16','2021-03-17 08:42:16'),(20,NULL,'Trung tâm thông tin - Ủy ban Dân tộc','trung-tam-thong-tin-uy-ban-dan-toc','<div>Phần mềm quản lý điều hành trong cơ quan trên nền tảng IOS</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:42:57','2021-03-17 08:42:57'),(21,NULL,'Ban quản lý khu di tích Cổ Loa','ban-quan-ly-khu-di-tich-co-loa','<div>Hệ thống camera giám sát, Hệ thống phòng cháy chữa cháy, thiết bị văn phòng</div>',NULL,NULL,NULL,NULL,NULL,NULL,'2021-03-17 08:43:54','2021-03-17 08:43:54');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permission`
--

DROP TABLE IF EXISTS `role_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_permission` (
  `role_id` int unsigned NOT NULL,
  `permission_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`,`permission_slug`),
  CONSTRAINT `role_permission_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permission`
--

LOCK TABLES `role_permission` WRITE;
/*!40000 ALTER TABLE `role_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_user` (
  `role_id` int unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'eWtJrUFAoP5JTP3Kp2JLfQgEVIRVh75O2HjB2KDo.jpg','Phương Nam JSC','PRO PHƯƠNG NAM - KHỞI NGUỒN CỦA SỰ THÀNH CÔNG','/gioi-thieu','2021-03-13 08:07:43','2021-03-29 09:11:39'),(2,'RwWkOTOp5wN6rwiWi1Vmmmkdmb6iMv9ilVn1LGhh.jpg','Phương Nam JSC','PRO PHƯƠNG NAM - KHỞI NGUỒN CỦA SỰ THÀNH CÔNG','/gioi-thieu','2021-03-13 09:23:10','2021-03-29 09:11:23'),(3,'8w1SXr4Pb7xIzr5GHY786zQNgA4X0O2KygdbupaJ.jpg','Phương Nam JSC','PRO PHƯƠNG NAM - KHỞI NGUỒN CỦA SỰ THÀNH CÔNG','/gioi-thieu','2021-03-13 09:23:31','2021-03-29 09:11:10'),(4,'MV1cGSeBWIknPwvEtggZTO7rDlBTiFRsrVgu488T.jpg','Phương Nam chính','Slogan','/gioi-thieu','2021-03-30 06:32:01','2021-03-30 06:32:01');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@mayviet.net',NULL,'$2y$10$rILHL3G4DRhXZaPEdF67lOaEWhk8Xg5CgAClZmv6aliTiO.XRvSi.',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_categories`
--

DROP TABLE IF EXISTS `video_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `video_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `video_categories_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_categories`
--

LOCK TABLES `video_categories` WRITE;
/*!40000 ALTER TABLE `video_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `video_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `video_category_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `youtube_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `videos_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `widgets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `widgets`
--

LOCK TABLES `widgets` WRITE;
/*!40000 ALTER TABLE `widgets` DISABLE KEYS */;
INSERT INTO `widgets` VALUES (2,'CÁC NGUYÊN TẮC CỦA CHÚNG TÔI','[{\"key\": \"afZWjVq4pBqaRLIX\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"img-role mb-3\\\">\\n                            <img src=\\\"/images/teamwork128.png\\\" class=\\\"mx-auto\\\" width=\\\"64px\\\" alt=\\\"\\\">\\n                        </div>\\n<h3 class=\\\"font-bold text-black text-lg mb-3\\\">Với Khách Hàng</h3>\\n                        <div class=\\\"text-role\\\">\\n                            <ul class=\\\"list-disc list-inside\\\">\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Chất lượng, uy tín, tiến độ.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Luôn thoả mãn các nhu cầu của tất cả các khách hàng với chất lượng tốt nhất.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Cởi mở, thân thiện, cầu thị, nhiệt tình và trân trọng.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Nỗ lực cao nhất để các sản phẩm và dịch vụ luôn tiến bộ hơn, góp phần nâng cao tiêu chuẩn cuộc sống.\\n                                </li>\\n                            </ul>\\n                        </div>\"}}, {\"key\": \"N0bXNVx5nZ1OL2Ar\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"img-role mb-3\\\">\\n                            <img src=\\\"/images/team128.png\\\" class=\\\"mx-auto\\\" width=\\\"64px\\\" alt=\\\"\\\">\\n                        </div>\\n                        <h3 class=\\\"font-bold text-black text-lg mb-3\\\">Với Nhân Viên</h3>\\n                        <div class=\\\"text-role\\\">\\n                            <ul class=\\\"list-disc list-inside\\\">\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Tạo cơ hội học tập, nâng cao trình độ và tác phong làm việc, từng bước đạt tiêu chuẩn quốc tế.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Tạo cơ hôi thăng tiến trên cơ sở hiệu quả công việc, tính chính trực và lòng trung thành với công ty, nhằm đảm bảo điều kiện ngày càng tốt hơn cho cuộc sống của nhân viên và sự phát triển bền vững của công ty.\\n                                </li>\\n                            </ul>\\n                        </div>\"}}, {\"key\": \"FgpRNgDx35MfCtJi\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"img-role mb-3\\\">\\n                            <img src=\\\"/images/kh128.png\\\" class=\\\"mx-auto\\\" width=\\\"64px\\\" alt=\\\"\\\">\\n                        </div>\\n                        <h3 class=\\\"font-bold text-black text-lg mb-3\\\">Với Đối Tác</h3>\\n                        <div class=\\\"text-role\\\">\\n                            <ul class=\\\"list-disc list-inside\\\">\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Xây dựng và giữ gìn mối quan hệ đoàn kết, ổn định, lâu dài và cùng có lợi trên cơ sở truyền thống kinh doanh đáng tin cậy, đảm bảo chất lượng hàng hoá và tôn trọng khách hàng.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Hỗ trợ để cùng nâng cao chất lượng kinh doanh nhằm thoả mãn tốt hơn nhu cầu của khách hàng.\\n                                </li>\\n                            </ul>\\n                        </div>\"}}, {\"key\": \"dw7xfQ48FEdoDKUo\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"img-role mb-3\\\">\\n                            <img src=\\\"/images/congdong128.png\\\" class=\\\"mx-auto\\\" width=\\\"64px\\\" alt=\\\"\\\">\\n                        </div>\\n                        <h3 class=\\\"font-bold text-black text-lg mb-3\\\">Với Cộng Đồng</h3>\\n                        <div class=\\\"text-role\\\">\\n                            <ul class=\\\"list-disc list-inside\\\">\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Tôn vinh và giữ gìn những đạo đức kinh doanh.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Hoàn thành trách nhiệm xã hội, chấp hành luật pháp.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Tích cực góp phần vào sự phát triển chung của xã hội.\\n                                </li>\\n                                <li class=\\\"text-sm text-black text-justify mb-2\\\">\\n                                    Làm cho cuộc sống thêm nhiều tiện ích và tốt đẹp hơn.\\n                                </li>\\n                            </ul>\\n                        </div>\"}}]','2021-03-13 08:20:19','2021-03-23 02:18:42'),(4,'Lĩnh vực của chúng tôi','[{\"key\": \"SGGQM7R3BrA4A4FL\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"col-3 px-2 mx-0\\\">\\n                <div class=\\\"box-inner relative overflow-hidden\\\">\\n                    <img src=\\\"/images/quality.jpg\\\" alt=\\\"\\\">\\n                    <div class=\\\"text-inner p-2\\\">\\n                        <div class=\\\"title-inner my-2 pl-3\\\">\\n                            <h3 class=\\\"text-white font-bold text-lg\\\"><i class=\\\"fas fa-headset mr-2\\\"></i> TƯ VẤN</h3>\\n                        </div>\\n                        <div class=\\\"content-inner text-white py-2 px-2.5 text-justify\\\">\\n                            Nhận thấy chất lượng và uy tín là yếu tố quyết định sự thõa mãn của khách hàng là chìa khóa của thành công, chúng tôi xem việc đảm bảo chất lượng là mục tiêu chiến lược trong sự nghiệp phát triển của mình.\\n                        </div>\\n                    </div>\\n                </div>\\n            </div>\"}}, {\"key\": \"YW8f3qp0C3vj6vsm\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"col-3 px-2 mx-0\\\">\\n                <div class=\\\"box-inner relative overflow-hidden\\\">\\n                    <img src=\\\"/images/creative.jpg\\\" alt=\\\"\\\">\\n                    <div class=\\\"text-inner p-2\\\">\\n                        <div class=\\\"title-inner my-2 pl-3\\\">\\n                            <h3 class=\\\"text-white font-bold text-lg\\\"><i class=\\\"fas fa-book mr-2\\\"></i> ĐÀO TẠO</h3>\\n                        </div>\\n                        <div class=\\\"content-inner text-white py-2 px-2.5 text-justify\\\">\\n                            Tập thể chúng tôi đã không ngừng tìm tòi, phát triển cải tiến, nâng cao chất lượng dịch vụ cũng như đổi mới khả năng cung ứng dịch vụ, không có bất kỳ khó khăn nào có thể ngăn cản chúng tôi mang lại những giá trị tiện ích phù hợp nhất với lợi ích của khách hàng.\\n                        </div>\\n                    </div>\\n                </div>\\n            </div>\"}}, {\"key\": \"uNJNtfSt6FzPbiDU\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"col-3 px-2 mx-0\\\">\\n                <div class=\\\"box-inner relative overflow-hidden\\\">\\n                    <img src=\\\"/images/professional.jpg\\\" alt=\\\"\\\">\\n                    <div class=\\\"text-inner p-2\\\">\\n                        <div class=\\\"title-inner my-2 pl-3\\\">\\n                            <h3 class=\\\"text-white font-bold text-lg\\\"><i class=\\\"fas fa-server mr-2\\\"></i> THIẾT BỊ</h3>\\n                        </div>\\n                        <div class=\\\"content-inner text-white py-2 px-2.5 text-justify\\\">\\n                            Hệ thống dịch vụ của Công ty chúng tôi được vận hành bởi đội ngũ kỹ thuật chuyên nghiệp với nhiều năm kinh nghiệm, bộ phận hỗ trợ luôn nhiệt tình giải đáp thắc mắc cho khách hàng với mong muốn mang đến cho khách hàng chìa khóa của sự thành công và đạt được những mục tiêu cao nhất.\\n                        </div>\\n                    </div>\\n                </div>\\n            </div>\"}}, {\"key\": \"yWJur23qHI5SEEUz\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"col-3 px-2 mx-0\\\">\\n                <div class=\\\"box-inner relative overflow-hidden\\\">\\n                    <img src=\\\"/images/effort.jpg\\\" alt=\\\"\\\">\\n                    <div class=\\\"text-inner p-2\\\">\\n                        <div class=\\\"title-inner my-2 pl-3\\\">\\n                            <h3 class=\\\"text-white font-bold text-lg\\\"><i class=\\\"fas fa-laptop mr-2\\\"></i> CÔNG NGHỆ THÔNG TIN</h3>\\n                        </div>\\n                        <div class=\\\"content-inner text-white py-2 px-2.5 text-justify\\\">\\n                            Chúng tôi tin tưởng rằng với tập thể đoàn kết, vững mạnh cùng sự ủng hộ của Quý khách hàng, chúng tôi chắc chắn sẽ gặt hái được nhiều thành công hơn nữa trong tương lai để cùng mang đến thành công cho tất cả đối tác khách hàng cùng đồng hành với mình.\\n                        </div>\\n                    </div>\\n                </div>\\n            </div>\"}}]','2021-03-23 02:19:41','2021-03-23 02:33:24'),(5,'Giới thiệu công ty','[{\"key\": \"pHYhJH1WEWbl6MaL\", \"layout\": \"html\", \"attributes\": {\"html\": \"<div class=\\\"text-justify\\\">\\n      Công ty được xây dựng, phát triển bởi các chuyên gia đầu ngành trong các lĩnh vực: Công nghệ thông tin, điện tử, viễn thông; Đấu thầu, Quản lý xây dựng, Kinh tế - tài chính, Nông nghiệp, Tài chính công, Môi trường. Chúng tôi luôn bày tỏ nguyện vọng được cung cấp các sản phẩm và dịch vụ nêu trên.\\n      <br>Với phương châm “Nhà cung cấp sản phẩm, giải pháp dịch vụ tốt nhất” chúng tôi hiểu rằng mọi sự nỗ lực về chất lượng phục vụ của chúng tôi sẽ luôn góp phần vào những thành công trong tương lai của khách hàng.\\n      <br>Dựa trên những tiềm lực hiện có về cơ sở vật chất và con người, PRO PHƯƠNG NAM tin rằng chúng tôi sẽ mang đến cho quý khách hàng những dịch vụ tốt nhất để quảng bá hình ảnh thương hiệu của mình một cách có hiệu quả.\\n      <br>Chúng tôi hy vọng nhận được sự hợp tác của quý khách hàng!\\n      <br>Trân trọng!\\n </div>\"}}]','2021-03-23 02:40:40','2021-03-23 02:40:40');
/*!40000 ALTER TABLE `widgets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-30 13:34:59
