-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2022-04-25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `table`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurant`;


-- 資料表結構 `Person`
--

CREATE TABLE `Worker` (
  `wid` varchar(12) NOT NULL DEFAULT '',
  `wname` varchar(12) NOT NULL DEFAULT '',
  `wpassword` varchar(12) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `phone` varchar(12) NOT NULL DEFAULT '',
  `email` varchar(12) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `Chief`
--
INSERT INTO `Worker` (`wid`,`wname`,`wpassword`,`phone`,`email`) VALUES
('W01','Winnie','A12345678','68860000','bb90123@um.edu.mo'),
('W02','Estelle','A12345678','68866111','bb90234@um.edu.mo'),
('W03','Horatio','A12345678','68866222','bb90345@um.edu.mo'),
('W04','Vivian','A12345678', '68866333','bb90456@um.edu.mo'),
('W05','Karson', 'A12345678','68866444','bb90567@um.edu.mo');


-- 資料表結構 `Person`
--

CREATE TABLE `Person` (
  `pid` varchar(12) NOT NULL DEFAULT '',
  `pname` varchar(12) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `phoneno` varchar(12) NOT NULL DEFAULT '',
  `emailno` varchar(12) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 資料表結構 `room`
--

CREATE TABLE `room` (
  `rid` varchar(10) NOT NULL DEFAULT '',
  `max_size`varchar(10) NOT NULL DEFAULT '',
  `description` varchar(10) NOT NULL DEFAULT '',
  `remaining_no` varchar(10) NOT NULL DEFAULT '',
  `total_no` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `room`
--
INSERT INTO `room` (`rid`,`max_size`,`description`,`remaining_no`,`total_no`) VALUES
('R0S','5','noktv','15','50'),
('R0M','8','ktv','10','30'),
('R0L','12','ktv','5','20');

-- 資料表結構 `Preference`
--

CREATE TABLE `Chef&Cuisine` (
  `pid` varchar(12) NOT NULL DEFAULT '',
  `pname` varchar(12) NOT NULL DEFAULT '',
  `cid` varchar(10) NOT NULL DEFAULT '',
  `cname` varchar(10) NOT NULL DEFAULT '',
  `sex` varchar(10) NOT NULL DEFAULT '',
  `award` varchar(50) NOT NULL DEFAULT '',
  `age` varchar(5) NOT NULL DEFAULT '',
  `cuisine` varchar(50) NOT NULL DEFAULT '',
  `fid` varchar(12) NOT NULL DEFAULT '',
  `fname` varchar(50) NOT NULL DEFAULT '',
  `description` varchar(10000) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `Preference`
--
INSERT INTO `Chef&Cuisine` (`cid`,`cname`,`sex`,`award`,`age`,`cuisine`,`fid`,`fname`,`description`) VALUES
('C05','Gloria', 'Female','6','40','Japanese_Food','F01','Sukiyaki','Famous Japanese cuisine, made of beef slices, onion, chrysanthemum, Chinese cabbage, and other ingredients. Generally, sukiyaki is eaten at happy parties or celebrations.'),
('C06','Jock', 'Male','7','50','Japanese_Food','F02','Ramen','A popular Japanese noodle dish that originated in China. The early ramen was seasoned with char siew, bamboo shoots and soy sauce, and now the flavors of ramen are becoming more and more diverse. Authentic Japanese ramen consists of a bowl of fresh soup, tendon noodles, slices of smoked char siew, slices of pickled bamboo shoots and a handful of chives.'),
('C05','Gloria', 'Female','6','40','Japanese_Food','F03','Tempura','Introduced to Japan by Portuguese missionaries in the 16th century, it gradually became popular in Japan. Traditional Japanese tempura is fried in a starchy paste of seafood or vegetables. General tempura is a Japanese dish in which fish, shellfish, shrimp, or vegetables are wrapped in wheat flour and egg sauce and fried.'),
('C06','Jock', 'Male','7','50','Japanese_Food','F04','Sushi','The main material is vinegar rice cooked with vinegar, sugar, and salt, and made of Japanese pearl rice with a small fat and a little sweetness. After cooling, fish, seafood, vegetables, eggs, or other meats are added as ingredients.'),
('C05','Gloria', 'Female','6','40','Japanese_Food','F05','Kanto Cooking', 'It is a popular Japanese dish. The ingredients include boiled eggs, radishes, konjac, kelp knots, konjac silk, etc. These ingredients will be boiled in kelp or bonito soup. It can be eaten with rice or as a snack.'),
('C06','Jock', 'Male','7','50','Japanese_Food','F06','Curry','Japanese curries, which usually contain beef, pork, and chicken as well as onions, carrots, and potatoes, serve as a sauce for ramen and udon noodles in addition to rice.'),
('C09','Pauline', 'Female','4','25','Western_Food','F07','Steak','One of the most common foods in Western food. The cooking methods of steak are mainly frying and grilling. It is usually not cooked through, but you can adjust the doneness to personal preference.'),
('C010','Daniel', 'Male','7','45','Western_Food','F08','Burger','Now recognized as the representative of American fast food. The filling is mainly hamburger steak, with several ingredients and seasonings attached, and the filling can be changed according to your own taste.'),
('C09','Pauline', 'Female','4','25','Western_Food','F09','Carbonara Spaghetti','A must-have spaghetti in western restaurants, the taste is smooth and rich, accompanied by a rich eggy taste.'),
('C010','Daniel', 'Male','7','45','Western_Food','F10','Spanish seafood paella','The basic ingredients are rice, olive oil and saffron, accompanied by a variety of seafood or meat. You can add lemon juice when eating. Serve directly from the pot with a spoon. Rich in flavor and rich in aroma.'),
('C09','Pauline', 'Female','4','25','Western_Food','F11','Tuscan Salmon','Tuscany, the central region of Italy known as the gorgeous capital, uses local recipes for creamy salmon dishes. Milky aroma and unique taste.'),
('C010','Daniel', 'Male','7','45','Western_Food','F12','Garlic Creamy Lemon Shrimp','The dishes are refreshing, but have a rich aroma of garlic cream, which goes well with white wine.'),
('C03','Evelyn','Female','3','36','Korean_Food','F13','Stone-grilled Rice','The stone pot is made of pottery. The thick black pottery pot can be directly brought to the stove for cooking, and the heat preservation effect is good. The main ingredients are rice, meat, eggs, as well as soybean sprouts, mushrooms and various wild vegetables.'),
('C04','Willis','Male', '4','33','Korean_Food','F14','Soy Sauce Crab','One of the five famous Korean dishes, uncooked raw crab is marinated in soy sauce. The local people like to add rice directly into the crab lid and eat it together with crab yellow, so this dish is also known as "rice thief".'),
('C03','Evelyn','Female','3','36','Korean_Food','F15','Korean Hot Pot','Korean thick soup hotpot like Western-style Zapot. Sausages, canned ham, luncheon meat, cheese and other ingredients are used with a spicy bitter pepper sauce as a base and boiled into a pot of soup.'),
('C04','Willis','Male', '4','33','Korean_Food','F16','Kimchi','A traditional fermented food of the Korean people, it can be used as a side dish or as an ingredient for cooking. In 2012, it was rated as one of the top five healthiest foods in the world.'),
('C03','Evelyn','Female','3','36','Korean_Food','F17','Korean Fried Chicken','There are many flavors of Korean fried chicken, including original, spicy sauce, soy sauce, barbecue, garlic, scallion, and honey cream. The method is different from ordinary fried chicken. It needs to be fried twice, so it is crisper and lower in oil content than ordinary fried chicken.'),
('C04','Willis','Male', '4','33','Korean_Food','F18','Korean barbecue','Grilled on a copper pot or iron plate, the ingredients are mostly marinated meat and seafood, sometimes accompanied by marinated sauces and vegetable broth.'),
('C07','Juliana', 'Female','3','42','Thai_Food','F19','Tom Yum soup','The famous Thai hot and sour soup, cooked with galangal, sour seeds, lemongrass, shallots, sour lemon, chilli and fish sauce. The most common recipe is tom yum with prawns and straw mushrooms, seasoned with fish sauce and a creamy texture.'),
('C08','Harry','Male', '4','28','Thai_Food','F20','Mango sticky rice','Usually eaten during the mango season, the main ingredients are mango, glutinous rice, and coconut milk. sweet and fresh.'),
('C07','Juliana', 'Female','3','42','Thai_Food','F21','Roast pork neck','This dish is delicious and nutritious. The main raw materials are pork neck, and the main seasonings are salad juice, chili powder, and lemon juice. This dish is made by pouring the ingredients into a pot and stir-frying.'),
('C08','Harry','Male', '4','28','Thai_Food','F22','Coconut Chicken Soup','Also known as Chicken Soup with Coconut Milk, a plate of chicken is simmered slowly in a light coconut broth with plenty of galangal. It is then served with a basic roasted chili sauce as a dipping sauce for a richer flavor.'),
('C07','Juliana', 'Female','3','42','Thai_Food','F23','Thai-style raw shrimp','Fresh prawns are drizzled with chili and garlic flakes and drizzled with a lemony chutney for a refreshing finish with a long aftertaste.'),
('C08','Harry','Male', '4','28','Thai_Food','F24','Papaya salad','A popular dish in Thailand, it tastes sour and spicy, and it is an appetizer. Main ingredients: green papaya, pepper, lime, peanuts, coriander, carrot.'),
('C01','Abigail','Female','4','30','Chinese_Food','F25','Mapo Tofu','The main ingredients are tofu, minced beef or pork, bean paste, and peppercorns. It was created by Mrs. Chen Liu, the proprietress of the small restaurant. Because Chen Lius face has pockmarks, she is called Chen Mapo, and the roasted tofu she invented is called "Mapo Tofu"'),
('C02','Terry','Male','''5','35','Chinese_Food','F26','Peking duck','Beijing Roast Duck has distinct fatness and thinness and is moderately fresh and tender. The roasted duck is cut into small pieces with a knife, called "sliced duck". Served with shredded green onion, shredded cucumber, and sweet pasta sauce, it is served in a pancake roll.'),
('C01','Abigail','Female','4','30','Chinese_Food','F27','Spicy chicken','A typical Sichuan dish, the chicken is tender, spicy, and fragrant. I drooled after eating the fragrant hemp, so it was very popular, so I had the famous "saliva chicken" to enjoy'),
('C02','Terry','Male','''5','35','Chinese_Food','F28','Braised Pork','It has a mellow taste, oily but not greasy, and full of color and flavor. It is a Chinese home-style food made from pork and soy sauce as the main raw materials.'),
('C01','Abigail','Female','4','30','Chinese_Food','F29','Poached Chicken with Chili Sauce','Sichuan famous cold dish, with different spices and tender chicken, makes people drool just thinking about it, so it has the alias of "saliva chicken"'),
('C02','Terry','Male','''5','35','Chinese_Food','F30','Osmanthus Egg','Golden in color and delicious. Even more amazing is that it does not stick to plates, chopsticks, and teeth. So, it is called "three non-stick"');


-- 資料表結構 `Orderlist`
--

CREATE TABLE `Orderlist` (
  `pid` varchar(10) NOT NULL DEFAULT '',
  `date` date NOT NULL DEFAULT '0000-00-00',
  `numbers` varchar(5) NOT NULL DEFAULT '',
  `points` varchar(10) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- 資料表索引 `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`pid`);

-- 資料表索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`);

-- 資料表索引 `Orderlist`
--
ALTER TABLE `Orderlist`
  ADD PRIMARY KEY (`pid`);
