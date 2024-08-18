-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2024 at 04:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE `adoption` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`id`, `name`, `gname`, `oprice`, `image`, `description`) VALUES
(6, 'cat', '', 1000, '663b7a05dde6d.jpeg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `adop_massage`
--

CREATE TABLE `adop_massage` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `number` int(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `massage` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adop_massage`
--

INSERT INTO `adop_massage` (`id`, `name`, `number`, `email`, `massage`) VALUES
(6, 'Persian Cat', 2345678, 'anamulhasanv1@gmail.com', 'ytdtdtyf'),
(7, 'fhgfhf', 4544, 'gghgjgg@hgf', 'hggfydhgfchgfdhgd');

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(6, 'Parrots', '', 7000, 7500, '663bbdc225671.jpg', 'Parrots, also known as psittacines, are birds with a strong curved beak, upright stance, and clawed feet. They are conformed by four families that contain roughly 410 species in 101 genera, found mostly in tropical and subtropical regions'),
(7, 'Lovebirds', '', 2000, 2500, '663bbe2958535.jpg', 'Lovebird is the common name for the genus Agapornis, a small group of parrots in the Old World parrot family Psittaculidae. Of the nine species in the genus, all are native to the African continent, with the grey-headed lovebird being native to the African island of Madagascar.'),
(8, 'Moluccan eclectus', '', 6000, 6200, '663bbe71ce3a7.jpg', 'The Moluccan eclectus is a parrot native to the Maluku Islands. It is unusual in the parrot family for its extreme sexual dimorphism of the colours of the plumage; the male having a mostly bright emerald green plumage and the female a mostly bright red and purple/blue plumage.'),
(9, 'Scarlet macaw', '', 11000, 12000, '663bbeb92c628.jpg', 'The scarlet macaw is a large yellow, red and blue Neotropical parrot native to humid evergreen forests of the Americas'),
(10, 'Grey parrot', '', 4500, 6000, '663bbee9c158a.jpg', 'The grey parrot, also known as the Congo grey parrot, Congo African grey parrot or African grey parrot, is an Old World parrot in the family Psittacidae. The Timneh parrot once was identified as a subspecies of the grey parrot, but has since been elevated to a full species');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(109, 6, 'Dachshund', 20000, 1, 'breed-profile-dachshund-1117959-hero-2871a48a9ebf4ab1a19427a8bfd3f1b6.jpeg'),
(110, 6, 'Grey parrot', 4500, 1, '663bbee9c158a.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(6, 'lop-eared or lops', '', 65000, 85000, 'scottish-fold-vertical-near-plant-231665893-bbc04d50e8b149a9b1fa9bfa6b8620d1.jpg', 'The Scottish Fold is a distinctive breed of domestic cat characterised by a natural dominant gene mutation associated with osteochondrodysplasia. This genetic anomaly affects cartilage throughout the body, causing the ears to \"fold\", bending forward and down towards the front of the head.'),
(7, 'Asian leopard cat ', '', 10000, 11000, 'unnamed-4.jpg', 'The Bengal cat is a breed of hybrid cat created from crossing of an Asian leopard cat (Prionailurus bengalensis), with domestic cats, especially the spotted Egyptian Mau. It is then usually bred with a breed that demonstrates a friendlier personality, because after breeding a domesticated cat with a'),
(8, 'Felinae', '', 12000, 12500, '663bb7a682126.jpg', 'The Ashera cat is considered the most expensive cat breed in the world, with prices reaching up to $100,000 or more. This is due to its rarity and the fact that it is a hybrid breed, created by breeding an African serval, an Asian leopard cat, and a domestic house cat. .'),
(9, 'Savannah F1 cats', '', 9300, 10000, 'images.jpeg', 'The Ashera cat is considered the most expensive cat breed in the world, with prices reaching up to $100,000 or more. This is due to its rarity and the fact that it is a hybrid breed, created by breeding an African serval, an Asian leopard cat, and a domestic house cat. .');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(6, 'Dachshund', '', 20000, 22000, 'breed-profile-dachshund-1117959-hero-2871a48a9ebf4ab1a19427a8bfd3f1b6.jpeg', 'The dachshund, also known as the wiener dog or sausage dog, badger dog and doxie, is a short-legged, long-bodied, hound-type dog breed. The dog may be smooth-haired, wire-haired, or long-haired. Coloration varies. The dachshund was bred to scent, chase, and flush out badgers and other burrow-dwellin'),
(8, 'Bulldog', '', 30000, 30500, '663bbb1fbaac1.jpeg', 'The Bulldog is a British breed of dog of mastiff type. It may also be known as the English Bulldog or British Bulldog. It is a medium-sized, muscular dog of around 40–55 lb. They have large heads with thick folds of skin around the face and shoulders and a relatively flat face with a protruding lowe'),
(9, 'Poodle', '', 35000, 40000, '663bbbb16315f.jpg', 'The Poodle, called the Pudel in German and the Caniche in French, is a breed of water dog. The breed is divided into four varieties based on size, the Standard Poodle, Medium Poodle, Miniature Poodle and Toy Poodle, although the Medium Poodle is not universally recognised'),
(10, 'German shepherd', '', 45000, 50000, '663bbbeee2473.jpeg', 'The German Shepherd, also known in Britain as an Alsatian, is a German breed of working dog of medium to large size. The breed was developed by Max von Stephanitz using various traditional German herding dogs from 1899. It was originally bred as a herding dog, for herding sheep'),
(11, 'Golden retriever', '', 33000, 35000, '663bbc7b85d41.jpeg', 'The Golden Retriever is a Scottish breed of retriever dog of medium size. It is characterised by a gentle and affectionate nature and a striking golden coat. It is commonly kept as a pet and is among the most frequently registered breeds in several Western countries'),
(12, 'French Bulldog', '', 55000, 55500, '663bbce7e5c02.jpg', 'The French Bulldog is a French breed of companion dog or toy dog. It appeared in Paris in the mid-nineteenth century, apparently the result of cross-breeding of Toy Bulldogs imported from England and local Parisian ratters');

-- --------------------------------------------------------

--
-- Table structure for table `fishs`
--

CREATE TABLE `fishs` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fishs`
--

INSERT INTO `fishs` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(4, 'platy', '', 280, 300, '663bbfdf0b3ce.jpg', 'The platy  is a freshwater fish in the family Cyprinidae of order Cypriniformes. It is commonly kept as a pet in indoor aquariums, and is one of the most popular aquarium fish.'),
(5, 'rosy', '', 320, 350, 'GettyImages-1465610006-1ef27bb7bf374c5c8fde9c504bd1cefd.jpg', ' Rosy barbs originate in northern India, in the states of West Bengal and Assam. Feral populations are also found in Singapore, Australia, Mexico, Puerto Rico, and Colombia. Rosy barbs natively live in lakes and fast-flowing water in subtropical climates'),
(6, 'angelfish', '', 180, 200, 'JakraphanInchukul-5c3f93b846e0fb0001fe3ebf.jpg', 'Angelfish are a very popular fish because of their long and majestic fins, spirited personalities, and ease of breeding. To learn more about this unique cichlid, we sat down with master breeder Dean, who has successfully kept them for the past 40 to 50 years and produces high-end strains to sell at '),
(7, 'gourami', '', 300, 400, 'GettyImages-522478632-41088690c5d34122831441948a76ba48.jpg', 'Gouramis are a diverse family of medium- to large-sized fish. Most can be kept in community aquariums, but some species do not play well with others, while some are too timid to be kept with larger species of fish.'),
(8, 'gourami', '', 80, 100, 'GettyImages-514967377-48c8f14166144079b11c6e6b074b89a6.jpg', 'Gouramis are a diverse family of medium- to large-sized fish. Most can be kept in community aquariums, but some species do not play well with others, while some are too timid to be kept with larger species of fish.'),
(9, 'gold', '', 200, 220, 'licensed-image.jpeg', 'The goldfish (Carassius auratus) is a freshwater fish in the family Cyprinidae of order Cypriniformes. It is commonly kept as a pet in indoor aquariums, and is one of the most popular aquarium fish.');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `gname` varchar(255) NOT NULL,
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `oprice` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`gname`, `id`, `name`, `oprice`, `image`, `price`, `description`) VALUES
('Cocoa bean', 3, 'Cocoa bean', '1200', '6648d4a542cdd.jpeg', 1250, 'Forms of the cocoa bean during production The cocoa bean or simply cocoa, also called cacao, is the dried and fully fermented seed of Theobroma cacao, the cacao tree, from which cocoa solids and cocoa butter can be extracted. Cocoa trees are native to the Amazon rainforest'),
('Peaches ', 4, 'Peaches ', '1100', '6648d525e4dbf.jpg', 1200, ' peaches can be a good treat for healthy dogs, in moderation. They are high in fiber and low in calories and fat. They are also filled with great antioxidants that help strengthen the immune system, prevent cell damage, and fight against disease.'),
('Friskies', 5, 'Friskies', '800', '6648d657b3ff6.jpg', 1000, 'this is a meat-based food with high protein content, moderate fat, and low carbohydrate content. Friskies Poultry Platter contains 190 calories in each 5.5 oz can or 35 calories per ounce'),
('BLUE Wilderness', 6, 'BLUE Wilderness', '2200', '6648d6ee94a44.jpg', 2500, 'BLUE Wilderness dry dog food recipes contain even more real meat — an excellent source of protein and fat — plus highly digestible carbohydrates from barley, oatmeal, and brown rice to fuel your dog\'s energy. These wholesome grains also include key nutrients like minerals, essential fatty acids, vit'),
('Tunai Rat Food ', 7, 'Tunai Rat Food |500g+20% Extra|', '2000', '6648d85913c67.jpg', 2200, 'SPECIFICALLY FORMULATED FOR WHITE MOUSE - A Variety of ingredient textures encourages chewing and provides tooth wear to help maintain your pet’s dental health. Essential fortified Vitamins A, D & E and key minerals promote overall health and wellness');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(5, 6, 'shanto', 'anamul@gmail.com', '01912345678', 'i need early'),
(6, 6, 'Persian Cat', '1anamul@gmail.com', '01947191000', 'I want to daycare my cat for 7 days.');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(7, 6, 'shanto', '01912345678', 'anamul@gmail.com', 'cash on delivery', 'flat no. shardagong, shardagong, gazipur, bangladesh - 6427', ', Beagle (1) , Parrots (1) , Platy (1) , Goldfish (1) ', 27480, '08-May-2024', 'completed'),
(8, 6, 'Nazmul Hasan siam', '01947191000', 'nazmulhasan@gmail.com', 'cash on delivery', 'flat no. 4 on ward, shardagong,khashimpur, shardagong, gazipur, bangladesh - 1700', ', Goldfish (2) , Persian Cat (4) , Persian  (4) , Scottish Fold (4) , Dachshund (4) , Beagle (2) ', 517780, '12-May-2024', 'pending'),
(9, 6, 'uma', '019999999999', 'uma@gmail.com', 'cash on delivery', 'flat no. bandorbon, bandorbon, bandorbon, bangladesh - 1700', ', Dachshund (1) ', 20000, '12-May-2024', 'completed'),
(10, 6, 'mahanaj', '01572837822', 'mahanaj@gmail.com', 'cash on delivery', 'flat no. dhaka, mirpur, dhaka, Bangladesh - 1700', ', lop-eared or lops (1) , Asian leopard cat  (3) , Bulldog (1) ', 125000, '20-May-2024', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(5, 'Pets Bamboo Slicker Pets Brush', 'Pets Bamboo Slicker Pets Brush', 250, 270, '664ae6fc3a632.jpg', '100% Natural Bamboo, Eco-Friendly - Bamboo, Stainless Steel, M-Pets Bamboo grooming range is made with 100% Eco-Friendly and Natural Bamboo wood, FSC certified.'),
(6, 'Pet Nail Cutter', 'Pet Nail Cutter', 300, 320, '664ae733a2b31.jpg', 'Pet Nail Cutter For Cat Dog'),
(7, 'Double Food Bowls For Cat And Dog', 'Double Food Bowls For Cat And Dog', 150, 200, '664ae766b1130.jpg', 'Double Food Bowls For Cat And Dog are a fantastic solution for pet owners who want to simplify mealtime and maintain harmony in a multi-pet household. These versatile pet accessories ensure that each furry family member gets the meal they need, eliminating mealtime disputes and simplifying your pet '),
(8, 'TaoTaoPets Super Absorbent Quality Pet Towel', 'TaoTaoPets Super Absorbent Quality Pet Towel', 300, 320, '664ae7959d73e.jpg', 'Polyester Polyamide Microfiber\r\nPERFECT TOWEL TO DRY SMALL, MEDIUM, AND LARGE DOGS AND CATS. Bone Dry Pet Towel measures 41x23.5\" and is great for drying dogs and cats of different breeds and sizes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `gname`, `oprice`, `price`, `image`) VALUES
(8, 'british', '', 125764, 1111111, 'British_Shorthair-1024x576.png');

-- --------------------------------------------------------

--
-- Table structure for table `products1`
--

CREATE TABLE `products1` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products1`
--

INSERT INTO `products1` (`id`, `name`, `price`, `image`) VALUES
(4, 'Rezaul Karim', 3, 'AfraMedicalBeauty_SRPackaging.jpg'),
(5, 'Ismail Khan', 1256, '317967404_1267133607187543_4394549876529562280_n.jpg'),
(6, 'user A', 254, '327348654_1352257095312791_3515925743086110929_n.jpg'),
(7, 'hhiyt', 554, 'pexels-julie-viken-593451.jpg'),
(9, 'hgffdhg', 256974, 'Lab-Notebook-Table-of-Contents-TemplateLab.com_.jpg'),
(10, 'kyhryet', 564, 'medical-pills-bottle-aerial-viewwhite-pills-pill-bottlesmedicine-small-bottle_387864-9105.jpg'),
(11, 'tttttt', 546, '06012022_113815.Helena Atik true DSLR - Copy - Copy.jpg'),
(12, 'yyyy', 243, '09012022_170530.Helena Atik true DSLR.PORTRAIT - Copy - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rabbits`
--

CREATE TABLE `rabbits` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rabbits`
--

INSERT INTO `rabbits` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(4, 'English Lop', '', 3000, 3100, '6641ef4448d56.jpg', 'The English Lop has earned it the nickname, \"the Dog of the Rabbit World.\" It also holds the crown for having the longest ears, and it\'s no surprise this distinct feature requires a bit of maintenance.'),
(5, 'Blanc de Hotot', '', 3500, 4000, '6641ef804c542.jpg', 'Originating from France, the Blanc de Hotot can easily be spotted by its \"black eyeliner\" that contrasts the rest of its white body. As a bonus, these bunnies do well with children and other pets as long as they grow up with them'),
(6, 'Belgian Hare', '', 5500, 5600, '6641efbd23cf7.jpg', 'Belgian Hare is one of the oldest breeds. It thrives best outdoors with ample space and hay.');

-- --------------------------------------------------------

--
-- Table structure for table `rets`
--

CREATE TABLE `rets` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rets`
--

INSERT INTO `rets` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(3, 'Zucker Rat', '', 1500, 2000, '6641bc2cdabdd.jpg', 'The strains of rat that have been developed to express human diseases were achieved through a number of different processes. It may be that the strain carrying a particular disease feature occurred spontaneously and the animals were then selectively bred'),
(4, 'Jepoirrier', '', 2200, 2500, '6641bd82cef2e.jpg', 'Genetics and environment can interact, and a change in the rats’ environment can induce disease in susceptible animals.');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(4, 'Basketball Training Toy', '', 700, 750, '6641ed391aa0c.jpg', 'Birds Chew Toy Cage Hanging Toy Parakeet Parrot Balls Toys Birdie Basketball Hoop Props Supplies.Encouraging pet exercises'),
(5, 'Suspension Bridge for Rats', 'Suspension Bridge for Rats', 1700, 2000, '6641edb966d3c.jpg', 'Items included with bridge are a rat, rope ladder, and a rope ring with wooden block; all items are safe toys to chew; they can play, run, jump and chew'),
(6, 'Rabbit Treat Exercise Ball', '', 350, 400, '6641ee01cdf2a.jpg', 'Rabbit treat exercise ball – Colourful and safe rabbit toy provides fun exercise and treats.\r\n\r\nBrightly coloured\r\nEncouraging natural foraging behaviours whilst rewarding with treats\r\nAdjustable hole for treat size and delivery rate\r\nHours of fun and enrichment\r\nApproved by Charlie & Jupiter & May'),
(7, 'Kong Play Spaces Camper Cat Toy', '', 2100, 2200, '6641ee5f02aa4.jpg', 'Kong PlaySpaces Camper features a clever camping enclosure that satisfies a cat\'s natural hiding needs. The window, door and sunroof entice hide-and-seek fun while providing an instinctual outlet.'),
(8, ' Toys for Dogs', '', 280, 300, '6641eeeaa226f.jpg', 'This dog toy adds daily entertainment to your pet\'s routine. This rubber chew toy is known to relieve boredom, and anxiety when your furry friend feels unattended. It also reduces destructive behavior in pets like biting furniture, shoes, etc.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(4, 'Anamul Hasan', 'anamulhasanv1@gmail.com', '42b2e325b730d5fe2216daa9af11e95b', 'user'),
(6, 'shanto', 'anamul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(8, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vitamins`
--

CREATE TABLE `vitamins` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `oprice` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vitamins`
--

INSERT INTO `vitamins` (`id`, `name`, `gname`, `oprice`, `price`, `image`, `description`) VALUES
(4, 'Bioline Probiotics For Cat & Dog 3gX10pcs', 'Bioline Probiotics For Cat & Dog 3gX10pcs', 450, 500, '664ae7dacae61.jpg', 'Use Japanese probiotic technology.\r\n\r\nHigh-vitality bacteria, direct to the intestine.\r\n\r\nHelps the intestinal bacteria to maintain balance and improve constipation and diarrhea.\r\n\r\nImprove appetite, conditions the stomach, helps digestion, reduces bloating.'),
(5, 'Bioline Puppy Training Spray 50ml', 'Bioline Puppy Training Spray 50ml', 120, 150, '664ae807ccb5e.jpg', 'Bioline Puppy Training Aid 50ml\r\nHelps To Train Your Puppy To Urinate In The Proper Area.\r\nScientifically Formulated To Attract Your Pet To The Right Spot. This Training Aid is Best For Indoor & Outdoor Use.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adoption`
--
ALTER TABLE `adoption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adop_massage`
--
ALTER TABLE `adop_massage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fishs`
--
ALTER TABLE `fishs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products1`
--
ALTER TABLE `products1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rabbits`
--
ALTER TABLE `rabbits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rets`
--
ALTER TABLE `rets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitamins`
--
ALTER TABLE `vitamins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adoption`
--
ALTER TABLE `adoption`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `adop_massage`
--
ALTER TABLE `adop_massage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fishs`
--
ALTER TABLE `fishs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products1`
--
ALTER TABLE `products1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rabbits`
--
ALTER TABLE `rabbits`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rets`
--
ALTER TABLE `rets`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vitamins`
--
ALTER TABLE `vitamins`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
