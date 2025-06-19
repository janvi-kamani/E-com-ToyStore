-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2024 at 12:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1_2024`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `pid`, `quantity`) VALUES
(254, 19, 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `catdescription` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `catname`, `catdescription`, `image`) VALUES
(11, 'Soft Toys', 'this product is best for your kisd', '1728125905_softcat.png'),
(12, 'block puzzle toy', '\r\nA block puzzle toy is a set of interlocking or stackable pieces, often made of wood or plastic, that children can arrange to form shapes, patterns, or complete pictures. It promotes cognitive development, problem-solving, and fine motor skills in a fun and engaging way.', '1728126230_block_puzzle_toy.png'),
(13, 'Car Toys', '\r\nA car toy is a miniature replica of a vehicle, typically made of plastic or metal, designed for children to play with. It may feature movable wheels and realistic details, allowing kids to engage in imaginative play while developing fine motor skills.', '1728126595_car_toy.png'),
(14, 'barbie doll', 'A Barbie doll is a fashion doll characterized by its lifelike features, stylish outfits, and accessories. Made primarily for imaginative play, Barbie dolls allow children to engage in role-playing activities, fostering creativity and storytelling. Barbie is known for her diverse range of careers, themes, and appearances.', '1728126737_barbis.png'),
(15, 'Musical Toys', 'Musical toys are play items designed to introduce children to music and rhythm through sound. They often mimic real instruments like pianos, drums, or guitars, allowing kids to create their own tunes while developing auditory skills and hand-eye coordination.', '1728127090_musical_toy.png'),
(16, 'Board Games', 'Board games are structured games that involve a board as the central playing area, where players use tokens, dice, cards, or other pieces to navigate rules and strategies. They can be competitive or cooperative, and often involve tactics, problem-solving, and social interaction. ', '1728127272_bord_toy.png');

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
(23, 19, 'janvi', 'janvi@123', '123564', 'hello how are you'),
(24, 19, 'janvi', 'janvi@123', '1234567890', 'hii');

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
  `placed_on` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`) VALUES
(24, 19, 'kamani ragvi', '9296281678', 'ragvi@123', 'cash on delivery', 'flat no. panchayt chowck, univercity road,rajkot, panchayt chowck, univercity road,rajkot, rajkot, india - 362220', ', Elephant  soft toy (1) , Plastic Building Blocks (1) ', 309, '11-Oct-2024');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `catid` int(5) NOT NULL,
  `subcatid` int(5) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productdescription` varchar(500) NOT NULL,
  `productprice` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catid`, `subcatid`, `productname`, `productdescription`, `productprice`, `image`) VALUES
(36, 11, 0, 'Elephant  soft toy', '\r\nThis cuddly Elephant soft toy is made from plush, hypoallergenic fabric, perfect for snuggling. Its cute design and gentle texture make it an ideal companion for kids of all ages.', 120, '1728643748_elephant.png'),
(37, 11, 0, 'Unicorn soft toy', 'The Unicorn Soft Toy is a plush, magical creature with a rainbow-colored mane and sparkly horn, perfect for cuddling. Its soft, huggable design makes it an enchanting companion for children of all ages.', 229, '1728643915_unicorn.webp'),
(38, 12, 0, 'Plastic Building Blocks', 'Plastic building blocks are versatile, interlocking toys that allow children to create various structures, encouraging creativity and spatial skills. ', 189, '1728644148_plasticblockpuzzle.png'),
(39, 13, 0, 'Monkey Push Ride On Cars', 'The Monkey Push Ride-On Car is a fun, animal-themed ride for toddlers, featuring sturdy wheels and easy steering. It\'s designed for active play, helping develop motor skills and coordination.', 1850, '1728644424_monkey puch ride.png'),
(40, 13, 0, 'Battery Oprated Ride-on Jeep', 'The Battery Operated Ride-on Jeep is a durable, electric-powered vehicle designed for kids, featuring realistic jeep details, functional headlights, and sound effects. It offers a fun driving experience with easy controls, perfect for outdoor adventures.', 10, '1728644643_jeep.png'),
(41, 11, 0, 'Bunny Soft Toy', '\"Bunny Soft Toy: A cuddly, plush rabbit with soft fur, perfect for snuggles and playtime.\"', 265, '1728707616_Bunny_soft_toy.png'),
(42, 11, 0, 'Teddy Bear ', 'A cuddly, plush teddy bear soft toy, perfect for snuggling and comforting hugs.', 178, '1728707763_Teddy_Bear.png'),
(43, 11, 0, 'Monkey Couple Soft Toy', 'The Monkey Couple Soft Toy is a pair of adorable, huggable plush monkeys, perfect for gifting or cuddling. With their cute outfits and playful expressions, they bring joy to children and collectors alike.', 350, '1728708013_mokey.png'),
(44, 11, 0, 'Banboo Panda', 'The Bamboo Panda Soft Toy is an adorable, cuddly plush designed to resemble a panda, made with soft, high-quality fabric. Its friendly face and gentle texture make it perfect for hugging and comforting children of all ages.', 150, '1728708199_bamboo_panda.png'),
(45, 11, 0, 'Happy Springs Dog Soft Toy', 'The Happy Springs Dog Soft Toy is a cuddly, plush companion with a cheerful face, perfect for snuggling. Its soft, springy design makes it great for kids of all ages.', 450, '1728708362_dog.png'),
(46, 11, 0, 'Doremon', 'Doraemon Soft Toy is a cuddly plush version of the beloved robotic cat from the future, perfect for fans of all ages. Its soft texture and detailed design make it a great companion for playtime or display.', 350, '1728708457_Doreamon.png'),
(47, 11, 0, 'Princess Kitty', 'Princess KittySoft Toy is a cuddly and charming plush cat with a crown, perfect for kids who love magical adventures. Soft and huggable, it brings comfort and joy to little princesses everywhere!', 265, '1728709087_kitti.png'),
(48, 12, 0, 'ShopiMoz Wooden Shape Puzzle', 'A fun and educational puzzle designed to engage young minds with colorful wooden pieces, helping develop fine motor skills and shape recognition. Safe, durable, and perfect for early learning!', 265, '1728709347_shopimoz.png'),
(49, 12, 0, 'Chanak Stick Blocks Puzzle', 'The Chanak Stick Blocks Puzzle is a fun and educational wooden toy that challenges kids to create various shapes and structures by interlocking the colorful blocks. It promotes creativity, problem-solving skills, and hand-eye coordination.', 258, '1728709509_puzzle.png'),
(50, 12, 0, 'Toyshine QIY 3*3 Strickerless Speed Magic Cube Puzzle', 'The Toyshine QIY 3x3 Stickerless Speed Magic Cube is a vibrant, high-performance puzzle designed for smooth, fast turns, making it perfect for both beginners and seasoned cubers.', 150, '1728709687_puxxle1.png'),
(51, 12, 0, 'Russinan Blocks puzzle', 'The Chanak Stick Blocks Puzzle is a fun and educational wooden toy that challenges kids to create various shapes and structures by interlocking the colorful blocks. It promotes creativity, problem-solving skills, and hand-eye coordination.', 178, '1728709955_russian.png'),
(52, 13, 0, 'Monster Car', '\r\nThe Monster Car toy features rugged wheels, vibrant colors, and a sturdy design, perfect for thrilling off-road adventures and imaginative play.', 350, '1728710231_monster.png'),
(53, 13, 0, 'Sports Car ', 'A sleek, vibrant sports car toy designed for high-speed adventures, featuring realistic details and smooth rolling wheels for endless fun!', 265, '1728710406_Sport.png'),
(54, 13, 0, 'Antique Classical vintage Car', '\r\nA beautifully crafted antique classical vintage car toy, capturing the charm and elegance of early automotive design with intricate details and a nostalgic finish.', 589, '1728710514_car5.png'),
(55, 13, 0, 'White Whale RC Car', '\r\nThe White Whale RC Car is a robust and sleek remote-controlled vehicle, designed for thrilling outdoor adventures and high-speed racing fun.', 450, '1728710695_car6.png'),
(56, 14, 0, 'Disney Cinderella', 'A Disney Cinderella toy often features the iconic princess in her signature blue gown, capturing her elegance and magic from the classic fairy tale.', 459, '1728879912_cindrella.png'),
(57, 14, 0, 'Disney Snow White Princess', 'The Disney Snow White Princess toy features a beautifully detailed doll wearing her iconic yellow, blue, and red gown, with a sweet, classic expression and signature hairstyle', 329, '1728880370_snkow_white.png'),
(58, 14, 0, 'Disney Aurora Princess', 'The Disney Princess Aurora toy features the elegant \"Sleeping Beauty\" with her iconic golden gown and crown, capturing her graceful and magical essence.', 329, '1728880624_Aurora.png'),
(59, 14, 0, 'Disney Ariel Princess', 'A Disney Ariel Princess toy typically features the beloved mermaid from The Little Mermaid, showcasing her signature red hair, seashell top, and vibrant tail, often accompanied by undersea accessories or her iconic friends', 687, '1728880860_Ariel.png'),
(60, 14, 0, 'Disney Bella Princess', 'The Disney Belle Princess toy features Belle in her iconic yellow gown, showcasing her elegance and charm from Beauty and the Beast, perfect for imaginative play and storytelling.', 289, '1728881040_bella.png'),
(61, 14, 0, 'Disney Jasmine Princess', 'The Disney Princess Jasmine toy features the adventurous princess from Aladdin, dressed in her signature turquoise outfit with detailed accessories, capturing her bold and free-spirited nature.', 289, '1728881236_jasmine.png'),
(62, 14, 0, 'Disney Rapunzel Princess', 'The Disney Rapunzel Princess toy features the adventurous long-haired princess from Tangled, dressed in her signature purple gown, ready for imaginative play and storytelling.', 526, '1728881454_rapunzel.png'),
(63, 14, 0, 'Disney Elsa Princess', 'The Disney Elsa Princess toy features a detailed figure of Elsa from Frozen, dressed in her signature icy-blue gown with flowing cape, perfect for imaginative play and recreating magical scenes.', 321, '1728881804_elsa.png'),
(64, 15, 0, 'VTech KidiStudio', 'A mini recording studio for kids to create their own music.', 550, '1728882168_VTech.png'),
(65, 15, 0, 'Hape Pound', ' A xylophone and pounding bench that produces musical sounds.', 870, '1728882276_hape_pound.jpg'),
(66, 15, 0, 'Fisher-Price Laugh', 'Plays songs and sounds to encourage learning.', 450, '1728882429_fisher_price.png'),
(67, 15, 0, ' Learn Smart Stages Chair', 'Plays songs and sounds to encourage learning.', 950, '1728882583_categories1727082384_1723285670_chair.png'),
(68, 15, 0, 'Elephant Drummer', 'The Elephant Drummer is a colorful, playful toy featuring an adorable elephant that beats a drum when wound up.', 350, '1728900040_drummer.png'),
(69, 16, 0, 'Ludo King', '\"Ludo King is a fun and colorful board game set that brings the classic strategy game of Ludo to life, perfect for players of all ages.', 450, '1728900196_ludo.png'),
(70, 16, 0, 'Snackes And Ladders', 'Snakes and Ladders is a classic board game where players race to the finish, climbing ladders and avoiding snakes.', 250, '1728900313_snakes.png'),
(71, 16, 0, 'Chess Bord Game', 'Chess Board Game: A classic strategy toy that challenges players to outthink their opponent on an 8x8 grid.', 287, '1728900442_chess.png'),
(72, 16, 0, 'Monopoly', ' A real estate trading game where players buy, sell, and develop properties to bankrupt opponents.', 451, '1728900606_monopoly.png'),
(73, 16, 0, 'Scrabble ', ' A resource-management game where players trade and build to dominate the island of Catan.', 256, '1728900681_Scrabble.png'),
(74, 16, 0, 'Ticket to Ride', 'A railway-building game where players connect cities across a map by claiming train routes.', 321, '1728900765_Ticket to Ride.png'),
(75, 12, 0, 'Wooden Jenga Building Blocks', 'A physical block-stacking game where players take turns removing blocks without toppling the tower.', 562, '1728901049_Jenga.png'),
(76, 12, 0, 'Mindware Qwirkle Travel', ' A tile-matching game where players create lines of matching colors or shapes to score points.', 123, '1728901189_Qwirkle.png'),
(77, 13, 0, 'Hot Wheels', 'Die-cast cars with a wide variety of models and tracks for racing and stunts.', 845, '1728901332_wheels.png'),
(78, 13, 0, 'Tonka Truck', 'Sturdy toy trucks and vehicles built for tough play.', 560, '1728901437_tonka.png'),
(79, 13, 0, 'Disney Pixar Cars', ' Toys modeled after characters from the Cars movie series.', 450, '1728901543_car8.png'),
(80, 13, 0, 'Micro Machines', 'Tiny, detailed cars and playsets for miniature racing and city building.', 542, '1728901619_micro.png');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` int(5) NOT NULL,
  `sitename` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `sitename`, `address`, `phoneno`, `email`, `image`) VALUES
(1, 'Toy Galaxy 123', 'rajkot, india - 362-220 220', ' 333-454-88', 'janvi123@gmail.com', '1727086928_logo2.png');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(5) NOT NULL,
  `catid` int(5) NOT NULL,
  `subcatname` varchar(100) NOT NULL,
  `subcatdescription` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `catid`, `subcatname`, `subcatdescription`, `image`) VALUES
(11, 16, 'hvc', 'shdgf', '1728279198_musical_toy.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

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
(1, 'admin', 'admin02@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(5, 'janvi', 'janvi02@gmail.com', 'janvi', 'user'),
(16, 'JANVI', 'janvi@gmile.com', '86ae96b2ed12c6ed01423bee78a76190', 'user'),
(17, 'janvikamani', 'janvi01@gmail.com', '86ae96b2ed12c6ed01423bee78a76190', 'user'),
(18, 'janvikamani', 'janvi03@gmail.com', 'af31b3318f1c8e8d999f0dd769c940c2', 'user'),
(19, 'janvikamani', 'janvi04@gmail.com', '86ae96b2ed12c6ed01423bee78a76190', 'user'),
(20, 'janvikamani', 'janvi05@gmail.com', '422f172ebb56e468e88d7525e083f9bc', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `pid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `pid`) VALUES
(164, 19, 37);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
