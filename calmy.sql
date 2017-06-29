-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 09:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `calmy`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `comm_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `comm_id`) VALUES
(1, 'Milena', 'I think this article is great mystery!', 1),
(11, 'Jovan Jovanovic', 'ovo je super stvarno', 2),
(15, 'Milica', 'evo novog komentara', 2),
(16, 'Milica', 'evo novog komentara', 2),
(17, 'Jovana', 'Kakve piramide!', 1),
(18, 'Jovana', 'Kakve piramide!', 1),
(19, 'Djole', 'evo novog starog', 1),
(20, 'Dragana Cvet', 'Cao Lepi', 1),
(22, 'Ivana', 'gle gle', 1),
(23, 'Nebojsa', 'Krajnje zanimljivo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `img_title` varchar(200) NOT NULL,
  `img_intro` varchar(200) NOT NULL,
  `img_body` text NOT NULL,
  `img_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_name` varchar(200) NOT NULL,
  `img_id` int(11) NOT NULL,
  `cat_title` varchar(200) NOT NULL,
  `cat_id` int(11) NOT NULL,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id_image`, `img_title`, `img_intro`, `img_body`, `img_date`, `img_name`, `img_id`, `cat_title`, `cat_id`) VALUES
(1, 'The unexplained mystery of the overall precision of the Great Pyramid', 'The mystery of the pyramids', 'It’s 750 feet long at each base, situated along the four cardinal points: North, South, East and West. The ratio of its circumference to its original height is equal to the value of pi: 3.14. Another thing to think about, this is something that’s not supposed to have been known for more than another millennium. Their mathematical and astronomical knowledge, and the acquisition of it remains a complete mystery to modern day scholars.\r\n\r\nThey were also amazing geographers, perhaps one of the greatest mysteries is the fact that the Great Pyramid is positioned exactly at the latitude and longitude lines that contain more land and less sea than any other place on Earth. It’s right in the ‘geographical,’ center of the Earth. This fact alone (out of many) suggest that the builders also knew a great deal about the geography of our planet. It’s hard to imagine they could complete all of this without some sort of aerial view. How this knowledge was obtained remains a mystery. Think about it, how is this possible?\r\n\r\nThe mystery of the pyramids\r\nThere is a meridian running through the pyramids that divides the continents and oceans into two exactly equal halves. How could this be done. Is this, as well as the Pi phenomenon just a coincidence? There are too many coincidences for me to believe it to be so. Not only is the actual construction of the pyramids a great mystery, its mathematical, astronomical and geographical significance and precision is even more of a mystery.\r\n\r\nI think it’s also interesting to note that if you multiply the height of the pyramid by a thousand million, you are left with 98,000,000 miles, which corresponds approximately to the distance between the earth and the sun.\r\n\r\nPrior to the 20th century, there was no other human civilization that could have considered replicating it, or come close to doing so.\r\n\r\nAnother astonishing fact is that the Great Pyramid’s base is at I:43,200 which is a mathematical representation of the northern hemisphere. “In other words, during all the centuries of darkness experienced by Western civilization when knowledge of our planet’s dimensions was lost to us, all we ever really needed to rediscover that knowledge was to measure the height and base perimeter of the Great Pyramid and multiply by 43,200. How likely is this to be an accident?” – Graham Hancock (Fingerprints of the Gods) ', '2017-06-09 12:20:36', 'Ancient-Egypt-The-Mystery-of-the-Great-Pyramid.jpeg', 1, 'Ancient Mysteries', 1),
(2, 'Unexplained Mysteries: The Dyatlov Pass Incident', 'Scarier than Fiction(The Dyatlov Pass Incident)', 'The Dyatlov Pass is located in the Ural Mountains of Western Russia.\r\n\r\nOn February 2, 1959, 9 experienced ski hikers died under extremely strange and somewhat frightening circumstances.\r\n\r\nAt the point of their disappearance, the goal of the ill-fated expedition was to reach Otorten, a mountain that was approximately 6 miles away.\r\n\r\nThe unfortunate hikers never reached their destination. Also, chillingly enough, the word “Otorten” translated from Mansi (indigenous peoples in the area) language, means “Mountain of the dead men.”', '2017-06-09 12:20:36', 'russian-mystery.jpg', 2, 'Mysteries of the world', 2),
(3, 'The Unfortunate Hikers', 'The expedition originally began with ten hikers, and it was led by a 23-year-old man named Igor Dyatlov – )the pass would later be named after him). There were eight men and two women.', 'The two women on the expedition were Zinaida Kolmogorova and Lyudmila Dubinina, and the other men were Alexander Kolevatov, Rusterm Slobodin, Yuri Krivonischenko, Yuri Doroshenko, Nicolai Thibeaux-Brignolle, Alexander Zolotarev, and Yuri Yudin.\r\n\r\nThe hikers were students or recent graduates of Ural Polytechnic Institute, which has since been renamed Ural State Technical University, of which, Boris Yeltsin is an alumni.\r\n\r\nThe Publicly Documented Facts That Led Up To The Incident\r\n\r\nOn the morning of January 27, 1959, the group left Vizhai to begin their trek. Vizhai is the northernmost inhabited settlement in the region.\r\n\r\nOn January 28th, one of the hikers, Yuri Yudin, fell ill and had to turn back. This turned out to be a life-saving turn of events for Mr. Yudin, as he is the sole survivor of the doomed expedition.\r\n\r\nRemaining members of the exbidition recorded the days afterward with diaries and cameras.On January 31, the group began to climb.\r\n\r\nOn February 1st, the hikers reached Kholat Syakhl, the mountain pass that has since been renamed “Dyatlov Pass” since the incident occurred.\r\n\r\nWhen they reached the pass, their plan was to cross over and set-up camp on the other side.\r\n\r\nWeather conditions worsened, a snowstorm ensued, and the hikers lost their direction due to decreasing visibility.\r\n\r\nIn the confusion of being lost, the group discovered that they had hiked to nearly the top of the mountain pass, so they decided to pitch camp where they were, and head out the next day. They never made it past this point.\r\n\r\nOriginal pictures from Dyatlov Pass incident\r\n\r\nThe Frantic Search\r\n\r\nIt was decided beforehand that Igor Dylatov was to send a telegraph on February 12th to the group’s sports club as soon as they reached Vizhai upon their return.\r\n\r\nFebruary 12th came and went, with no communication from the hikers.\r\n\r\nMost people were not alarmed because delays are not uncommon for expeditions – besides, they were nine experienced and capable hikers…\r\n\r\nThe families of the hikers became increasingly concerned in the days that followed.\r\n\r\nOn February 20th, the Ural Polytechnic Institute formed a rescue party consisting of students, and faculty – to no avail.\r\n\r\nEventually, police and army forces mounted a full-scale official search and rescue party for the nine missing hikers', '2017-06-09 12:23:50', 'image1.jpg', 2, 'Mysteries of the world', 2),
(4, 'The Chilling Discovery – A True Horror Not Even Hollywood Could Create', 'A shocking discovery', 'Finally, on February 26, 1959, the exhibition party was discovered. Their camp was abandoned and their tent had been ripped apart from the inside out.\r\n\r\nSome of the bodies of the hikers were found strewn across the slope a short distance away.Others were found farther away, buried beneath the snow in a ravine.\r\n\r\nSome of the hikers were found wearing ripped pieces of clothing that were torn off of other hikers who had died before them, some were missing a shoe or a sock, and some of them were shown to have high doses of radioactive contamination on their clothing.\r\n\r\nTheir bodies showed no visible signs of wounds, yet one of the women was missing her tongue, and autopsies revealed that Nicolai Thibeaux-Brignolle endured fatal skull damage, and the bodies of Alexander Zolotarev, and Lyudmila Dubinina had been fatally struck with a force that can only be compared to a car crash.\r\n\r\nThe rest of the expedition died of exposure (hypothermia).\r\n\r\nThe Inquest and theories of what happened at Dyatlov Pass\r\n\r\nAttack by Mansi tribesmen or others:\r\nThe Mansi were peaceful and hospitable, had no history of attacking visitors and had no reason to threaten the group. Plus there was no track evidence of anyone approaching the tent, no footprints except for those of the hikers was found in the snow in or around the camp.\r\n\r\nAnimal attack:\r\nThere were no tracks. Why would the group abandon the relative security of the tent to run away?\r\n\r\nHigh winds:\r\nWas a member outside and blown into the darkness by strong wind, which led the others to attempt to rescue that person? It is improbable such a large and experienced group would have behaved like that. Strong winds would have been enough to blow away the tent, too.\r\n\r\nAvalanche:\r\nIt is atypical terrain for avalanches and an avalanche would have untethered the tent, it could also explain the internal damage, but not the clothes!\r\n\r\nSecret weapons testing:\r\nNone that has been declared in the area, apparently. Radioactive dispersal would have affected all of the party members and their equipment, not just a few items of clothing. (Eichar fails to mention that lamp wicks at the time were commonly made of ceramic gauze treated with radioactive thorium. They were very fragile and liable to crumble to dust if damaged.) Discoloured skin and hair of the ravine group could be attributable to partial mummification over a period of three months exposed to the elements.\r\n\r\nunexplained Mystery\r\n\r\nThe case was officially closed in 1959, the files were secretly archived, and a few photocopies were finally made available more than 30 years later in the early 1990s.\r\n\r\nThe verdict of the inquest into the mysterious disappearance was that that the hikers died of a “compelling unknown force.”', '2017-06-09 12:23:50', 'image2.jpg', 2, 'Mysteries of the world', 2),
(5, 'Speculations and the Aftermath', 'Shocking discovery – bodies found', 'A journalist by the name of Yuri Yarovoi published a fictionalized account inspired by the mysterious events of the Dyatlov Pass Incident.\r\n\r\nThe book, published in 1967, is called Of the Highest Rank of Complexity.\r\n\r\nYaravoi completed extensive research for his novel, and he attempted to released several previous versions, but they were both declined due to censorship.\r\n\r\nYaravoi died in 1980, and all of his research has since vanished. It is claimed that he had found evidence of extraterrestrial activity in the area at the time of the incident.\r\n\r\nLev Ivanov was one of the police officials who led the case. Ivanov had previously published an article in 1990 where he wrote about receiving reports of strange spherical shapes in the sky during the time of the incident, and possible evidence of aliens.', '2017-06-09 12:24:59', 'image3.jpg', 2, 'Mysteries of the world', 2),
(8, 'Who was Jack The Ripper?', 'AN AUTHOR who claims she has spent millions trying to find out once and for all who Jack the Ripper was says she has reached a definitive conclusion.', 'Patricia Cornwell says that renowned British Impressionist painter Walter Sickert was the notorious mass killer.\r\nCornwell first came up with her Sickert theory 15 years ago, writing about it in her 2002 book Portrait of a Killer: Jack the Ripper &ndash; Case Closed.\r\nShe has now further developed the theory with what she claims is new evidence in her new book Ripper: The Secret Life of Walter Sickert.', '2017-06-19 16:41:28', 'jack1.jpg', 3, 'Crime Mysteries', 3),
(11, 'There has been a great deal of speculation as to the true identity of Jack the Ripper', 'Walter Sickert’s painting Sickert’s Nuit d’ete – or Summer Night – evokes victim Mary Kelly’s death bed scene', 'Police first suspected the Ripper to have been a butcher, due to the way he killed his victims and the fact they were found near the dockyards, where meat was imported into the city.\r\nA book accused Queen Victoria&rsquo;s surgeon, Sir John Williams, of being the killer, as he had a surgery in Whitechapel at the time.\r\nOne controversial theory linked the murders with Queen Victoria&rsquo;s grandson, Prince Albert Victor &ndash; also known as the Duke of Clarence.\r\nCotton merchant James Maybrick was the prime suspect after extracts of his diary appeared to suggest he was the murderer. These were later deemed to have been forged.\r\nAnother suspect was Dorset-born barrister Montague John Druitt, who committed suicide in the Thames shortly after last murder.George Chapman, otherwise known as Seweryn K?osowski, was in the frame after he poisoned three of his wives. He was hanged in 1903.\r\nAaron Kosminski was a police suspect and was admitted to Colney Hatch Lunatic Asylum, where he died.\r\nDr Thomas Neill Cream was hanged after he was found guilty of poisoning four London prostitutes with strychnine.\r\nBizarrely, Alice in Wonderland author Lewis Carroll, was once in the frame. He taught at Christ Church until 1881, which was at the forefront of the Ripper Murder scenery.\r\nLord Randolph Churchill, whose son was Winston Churchill, has also been named as a potential suspect.', '2017-06-19 16:55:31', 'jack2.jpg', 3, 'Crime Mysteries', 3),
(13, 'The Kecksburg, Pennsylvania UFO Crash – Cover up?', 'A UFO crash case that is discussed almost as much as the Roswell crash occurred at Kecksburg, Pennsylvania on December 5, 1965. Eyewitness reports coupled with radar confirmed an anomalous object movi', 'Kalp stated that she saw an object which appeared to be on fire as it crashed into the woods not far from her house in Westmoreland County. She and her children had gotten to within a half-mile of the crash location. They claimed to see an object which looked like a &ldquo;four-pointed star.&rdquo; John Murphy, who worked at WHJB, immediately called the report in to the Pennsylvania State Police, who in turn called Kalp, and set up a meeting with her in Kecksburg.\r\nState Police Search Woods:\r\nMurphy followed his reporter instincts to the site, where he interviewed Kalp and her children for his report. Meanwhile, the State Police were searching the woods for the site of the crash. Murphy was anxiously awaiting a report from the Police regarding their find. Was it a plane? Or something else? When the police emerged from their search, neither Carl Metz nor Paul Shipco, the heads of the search, would reveal any details of their findings.', '2017-06-23 10:35:06', 'Keckburg1.jpg', 4, 'UFO Mysteries', 4),
(14, 'Military Summoned:', 'The only information that the Pennsylvania State Police would release was that they were calling in the U.S.', 'Military to take over. Dissatisfied, but now more intrigued than ever, Murphy phoned the State Police offices in Greensburg, and talked to Captain Dussia. Dussia told him he would have to actually visit the office for an &ldquo;official&rdquo; statement. By the time he reached their offices, the military was already present.\r\n&ldquo;Official&rdquo; Statement: Nothing in the Woods:\r\nIronically, after finding something that was beyond the expertise or security clearance of the State Police, and calling in military forces, the official statement denied finding anything.\r\n&ldquo;The Pennsylvania State Police have made a thorough search of the woods. We are convinced that there is nothing whatsoever in the woods.&rdquo;\r\nNeedless to say, Murphy was stunned. He smelled a cover-up. But, of what?\r\nMilitary Makes Second Trek into Woods:\r\nMurphy called in what news he had to his station. Then he happened to overhear one of the State Policeman who had been on the initial search mention a &ldquo;pulsating blue light.&rdquo; So, there was something in the forest after all. The military, along with Officer Metz was taking a second trek into the woods, even though nothing had been found, officially. Initially, Murphy was allowed to go along, but arriving at the woods edge, he was turned back.\r\nArea Sealed Off:\r\nAt least, Murphy became an eyewitness to the area being sealed off. No one was allowed anywhere near the scene. In a very short period of time, the news of the crash had reached television and newspaper media. The area would soon fill up with people who wanted to get word of what exactly crashed in the Kecksburg woods, and why the military was keeping it to themselves.', '2017-06-23 10:40:43', 'keckburg2.jpg', 4, 'UFO Mysteries', 4),
(15, 'Witnesses Describe UFO:', 'It soon became apparent that the State Police were not the first individuals to go into the woods, According to UFO researcher Stan Gordon, several inquisitive locals had been there before police or m', 'An &ldquo;Unsolved Mystery&rdquo;:\r\nThe U.S. Air Force, after finishing their investigation, issued their &ldquo;official&rsquo; version of what happened. They stated that a meteorite had been responsible for the fiery crash into the woods of Kecksburg. For the most part, this simple explanation seemed to satisfy the general public. Was this the end of the Kecksburg mystery? It might have been had it not been for the &ldquo;Unsolved Mysteries&rdquo; television show. The airing of the Kecksburg segment in the 1990s began an entirely new investigation into the matter.', '2017-06-23 10:42:21', 'keckburg3.jpg', 4, 'UFO Mysteries', 4),
(16, 'What Happened to John Murphy?:', 'It seems that John Murphy, who was so eager to find the truth behind the Kecksburg crash, gave up his battle rather easily.', 'Maybe not. After his death, his widow told a shocking story. She said that her husband was one of the first to the object, and had taken a photograph of the object. This photograph was confiscated by the military, and he was instructed to not reveal any details of what he had seen that day. Should he go against the warning, he would suffer &ldquo;severe consequences.&rdquo;\r\nInterestingly, Project Blue Book&rsquo;s report on the Kecksburg case does confirm that there was a photograph of the object in the woods, but they did not include it in their report, or discuss its source. There are still many unanswered questions to be answered about what crashed into the woods near Kecksburg, Pennsylvania in 1965.Some years later, amid pressure to release the truth about the Kecksburg incident, NASA admitted that they&rsquo;d examined debris from the site and found that it had been a Russian satellite. When ordered by a judge to produce the documentation of their findings, NASA seemed to have misplaced them.\r\nThe only Soviet candidate that remotely fit was Kosmos 96, an acorn-shaped satellite which wasn&rsquo;t nearly as big as the Kecksburg object. Even NASA&rsquo;s chief scientist for orbital debris, Nicholas L. Johnson, stated that Kosmos had nothing to do with the fireball sightings or the crash, which may still turn out to be two separate events. US Space Command also reported that Kosmos crashed in Canada 13 hours before the sightings started.\r\nIn 2003, scientists discovered topless trees leading toward the spot where the object was reportedly found.', '2017-06-23 10:43:19', 'keckburg4.jpg', 4, 'UFO Mysteries', 4);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `msg_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `title`, `email`, `body`, `msg_date`) VALUES
(1, 2, 'Nebojsa Martinovic', 'Novi Title', 'krangmn@gmail.com', 'Neki novi tekst neki novi sadrzaj poruke', '2017-06-09 16:58:21'),
(2, 0, 'Tito', 'Dobar dan', 'nemanja@gmail.com', 'Ostajte mi zdravo', '2017-06-11 11:53:06'),
(3, 1, 'rver', 'rvre', 'kknew@tbrtb', 'trnbyrn', '2017-06-11 11:56:24'),
(4, 1, 'ytntntyt', 'tymnumnmtu', 'kknew@tbrtb', 'yntytnty', '2017-06-11 11:57:08'),
(5, 1, 'Djole Djolic', 'Novo', 'Djole@gmail.com', 'Djole', '2017-06-11 11:59:46'),
(6, 1, 'Nemanja', 'misterija', 'nemanja@gmail.com', 'nova misterija', '2017-06-11 12:12:21'),
(23, 1, 'Jovan', 'janko', 'jovan@gmail.com', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2017-06-11 13:55:27'),
(24, 1, 'janko', 'Novi tekst poruke', 'jovan@gmail.com', 'Ovo je nova poruka od mene', '2017-06-11 14:06:08'),
(25, 1, 'janko', 'Novi tekst poruke', 'jovan@gmail.com', 'Ovo je nova poruka od mene', '2017-06-11 14:27:02'),
(26, 1, 'janko', 'Novi tekst poruke', 'jovan@gmail.com', 'Ovo je nova poruka od mene', '2017-06-11 14:38:13'),
(27, 1, 'Marija', 'Nova message', 'marija@marija.com', 'cao', '2017-06-11 14:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `create_date`) VALUES
(1, 1, 'share 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex eum at veritatis, vel sed optio et provident quae explicabo repellat alias dolores, eaque, quia cumque recusandae quam iure ipsa maxime.', '2017-06-01 15:48:43'),
(19, 0, 'OOP MVC', 'Ovo je jos jedan CMS', '2017-06-19 12:47:44'),
(20, 1, 'Misterije u Srbiji', 'Mislim da se kod nas jako malo ljudi bavi misterijama.', '2017-06-23 15:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`, `admin`) VALUES
(1, 'Nebojsa Martinovic', 'krangmn@gmail.com', '46f3abbdfb8ee9ec637f76f21d53537b', '2017-06-02 11:12:53', 1),
(24, 'Djole Djolic', 'Djole@gmail.com', '0dd31a3667da3986150e4e6c7264d513', '2017-06-19 12:46:43', 0),
(25, 'Milica', 'milica@gmail.com', '2b2054fa4ed8f699df46c7e5dbba08c2', '2017-06-26 13:46:31', 0),
(26, 'Petar', 'pera@gmail.com', '573bd4dc6d2be16aa133869185d04e38', '2017-06-26 16:08:14', 0),
(28, 'Marija', 'marija@marija.com', 'fc366f1facbd9918740d755eaa6e8ed6', '2017-06-26 16:15:04', 0),
(30, 'Jovana', 'jovan@gmail.com', 'ec004e991f106c630b350c459ae62e96', '2017-06-26 16:21:30', 0),
(32, 'janko', 'jovan1@gmail.com', '40bde08cd2ed669a39454d21dc3b5a6d', '2017-06-26 16:38:37', 0),
(33, 'dejan', 'dejan@gmail.com', 'e3b2b2e4536172b3cd41a2a2b35e45dc', '2017-06-26 16:48:14', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
