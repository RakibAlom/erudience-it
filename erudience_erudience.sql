-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2022 at 04:49 PM
-- Server version: 10.3.34-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erudience_erudience`
--

-- --------------------------------------------------------

--
-- Table structure for table `background_media`
--

CREATE TABLE `background_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_bg_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievement_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `testimonial_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketplace_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hosting_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_mood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0' COMMENT 'dark = 1, light = 0',
  `editor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `background_media`
--

INSERT INTO `background_media` (`id`, `hero_bg_image`, `hero_bg_video`, `achievement_bg`, `testimonial_bg`, `marketplace_bg`, `products_bg`, `about_bg`, `blog_bg`, `hosting_bg`, `services_bg`, `contact_bg`, `user_bg`, `default_bg`, `bg_mood`, `editor`, `created_at`, `updated_at`) VALUES
(1, 'image/setting/background/IfrhxwJoAiM1CzE6mLGqyFRniUjDO6dMMSjJU08z.jpg', 'image/setting/background/AJfR0vNtLG6SCvKYvg28HrboGZbcyXYJo6Epw78t.mp4', 'image/setting/background/ibjlNvAdfyoCzSTgtXRHVQ8IfCtAtjdO0AMW7pfJ.jpg', 'image/setting/background/NxwsoTv2YwBLsE2goyQY3jhHKDdZCMjiqQOZo3Rh.jpg', 'image/setting/background/9vHBTkgeiQJft4qelZi8Cz7Oet0ZlkKFxClFWvl3.jpg', NULL, 'image/setting/background/rDTXoFVp2ZvJfCIBzOr8A2T4tNdpn6nbyXYY2USV.jpg', 'image/setting/background/O3cxwF89sYVZyEbv1IKOEUZ2Hj6Gc5OR7h1KX2p6.jpg', 'image/setting/background/ct1QIwhUoyxXlkb2CeWQHyyL0a4RXe8fUUCget0k.jpg', 'image/setting/background/FqCiTOZSB77I9jQUCZ8xsyfobVs0RubH9DofmgNg.jpg', 'image/setting/background/dEE3tKVSyFSfLyk11D8KPo4Ik8rJhEKIpUZh7fQH.jpg', 'image/setting/background/Z4bBXrklvXFeo5Z3UqCZUl0mzNru2OVssTU2FMpw.jpg', 'image/setting/background/QbnqUvbJHFm2AE7bJYa2RFan0hYMxu0dHUB76Nw1.jpg', '1', 'ckeditor4', '2022-04-01 08:25:47', '2022-05-28 16:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `basic_shared_hosting_lists`
--

CREATE TABLE `basic_shared_hosting_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_id` bigint(20) UNSIGNED NOT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'special status',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `basic_share_hostings`
--

CREATE TABLE `basic_share_hostings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_bonus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_status` int(11) DEFAULT NULL,
  `f_status` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'active = 1, deactive = 0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `slug`, `body`, `date`, `month`, `year`, `image`, `meta_description`, `keywords`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is the importance of web design for your audience?', 'what-is-the-importance-of-web-design-for-your-audience', '<p>In this blog, we&#39;ll explain why web design is important and provide you with seven must-have design elements for your website. If you need help creating the website of your dreams,&nbsp;<strong><a href=\"https://erudience.com/\" target=\"_blank\">hire us</a></strong>&nbsp;today.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h2><strong>Why web design is important?</strong></h2>\r\n\r\n<p>If you are considering redesigning your website, you may be wondering how important website design is. How is this affecting your audience and your business? Let&#39;s look at five reasons why web design is so important.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>1. Generate the first impression</strong></h2>\r\n\r\n<p>When your audience visits your site, they get their first impression of your business. They will evaluate your business in seconds. In the first few seconds, you want to make a favourable impression on your audience.</p>\r\n\r\n<p>If your website has not attractive or out of date, your visitors will have a negative rating of your company. They won&#39;t find your site attractive, which will discourage them. You will lose potential customers because they will leave your site for a competitor&#39;s site.</p>\r\n\r\n<p>Web design is essential because it influences how your target audience perceives your brand. The impression you make on them could make them stay with you and learn more about your business, or leave you and turn to a competitor. A good website design will help you keep potential customers on your page.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>2.&nbsp;<a href=\"https://webflogy.com/search-engine-optimization-new-technique-strategies/\" target=\"_blank\">Search engine optimization</a>&nbsp;(SEO) strategy</strong></h2>\r\n\r\n<p>Many web design elements and practices affect how you post content on your website, which in turn affects how search engine crawlers crawl and index your site.</p>\r\n\r\n<p>It&#39;s something you can&#39;t mess with. If the basics of your on-page SEO aren&#39;t right from the start, you&#39;re going to have to fight for visibility from the start.</p>\r\n\r\n<p>In addition to how content is posted on your website, some web design elements can have a direct impact on search engine optimization. Web design can be tricky to understand if you&#39;re not familiar with it, but simply put, your code needs to be optimized for SEO.</p>\r\n\r\n<p>The best way to ensure proper web design practices (and subsequent search engine visibility) is to work with a web design agency that knows what they&#39;re doing.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>3. Sets the impression for customer service</strong></h2>\r\n\r\n<p>People can judge what you think of them by looking at your website. Their design gives them an idea of how you see your audience. If you don&#39;t put any effort into your website design, your audience will know that you won&#39;t put in to help them.</p>\r\n\r\n<p>Your website is like a customer service representative. When your website is bright, modern and attractive, your audience will feel more welcome on your page. It gives the impression that you are open and welcoming to new visitors to your site.</p>\r\n\r\n<p>On the other hand, an outdated and unattractive website makes your business look cold and distant. People do not want to conduct business with a firm that does not regard them enough to generate a good first impression.</p>\r\n\r\n<p>Consider your website design to be your company&#39;s digital face. Wouldn&#39;t you want a friendly face to greet and make someone feel welcome if they walked into your actual location? Updated and modern web design is a friendly face to welcome your new visitors.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>4. Builds trust with your audience</strong></h2>\r\n\r\n<p>People don&#39;t trust poorly designed websites. They will not trust your site if it has a poor appearance or if the information appears to be out of date. They may see your website as outdated or unreliable because you don&#39;t have an up-to-date web design.</p>\r\n\r\n<p>Imagine someone who wishes to place a large order with a manufacturing company. They spend a lot of money, which means that if their manufacturing website design doesn&#39;t inspire confidence, they&#39;ll find another company to fulfil your order.</p>\r\n\r\n<p>On the other hand, a professional website shows trust from your audience. You will trust your company and feel comfortable taking a closer look.</p>\r\n\r\n<p>Gaining audience trust is important to keep them on your site. When visitors stay on your website longer, your business has more opportunities to generate those leads.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>5. Your competitors are doing it</strong></h2>\r\n\r\n<p>If you&#39;re looking for a reason why web design matters, here&#39;s an important reason: Your competitors are already using web design. If you want to stay competitive with them, you must use web design for your site.</p>\r\n\r\n<p>You want your website to unique. If you have an old, outdated, low-quality website, your competitors will outsell you. Your well-designed website will perform better than yours.</p>\r\n\r\n<p>It means you are losing potential customers to your competitors. You will bring more potential customers to your site because your site is more attractive.</p>\r\n\r\n<p>Your website design is an opportunity to differentiate yourself from your competitors. When competing with other businesses, you usually obtain the same services and pricing. You require something that distinguishes your company from the competition.</p>\r\n\r\n<p>A well-designed website allows your company to highlight its distinguishing traits. You can show your audience why your business should choose them over your competitors.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>6. Creates consistency</strong></h2>\r\n\r\n<p>When you are trying to create a new lead for your business, you want to build your brand. You want your audience to be familiar with your brand, so they will choose you when they are ready to convert. Online web design is important because it helps to maintain consistency across the site.</p>\r\n\r\n<p>All pages of your website should use the same font, style, and layout. If you use a different layout for each page, your website will not look professional. It also complicates brand awareness because the audience doesn&#39;t know which color to associate with the brand.</p>\r\n\r\n<p>If your website is inconsistent, people will switch from your website to something that looks more professional. By creating a goal-achieving process, you can retain potential customers longer and introduce them to your business. If you redesign your website for this important factor, you will get more leads and conversions in the future.</p>', '01', 'April', '2022', 'image/blog/obouBRMHSvmH6jd8CvDkXSa4BNqamHAQ19ZsWQP8.jpg', 'When your audience visits your site, they get their first impression of your business. They will evaluate your business in seconds. In the first few seconds, you want to make a favourable impression on your audience.', 'importance of web design, importance of website design, importance of web design in digital marketing strategy, benefits of a good website design', 66, 1, '2022-04-01 13:54:29', '2022-06-10 02:21:13'),
(2, 1, 'Search Engine Optimization (SEO) - What is SEO?', 'search-engine-optimization', '<p>Search engine optimization (SEO) refers to the process of improving the organic traffic and ranking of your website on search engines such as Google, Bing, and other search engines. It&nbsp;includes creating high-quality content, monitoring the technical status of your site, getting links from other sites to your site, and maintaining your site&#39;s presence in local search.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>How Do Search Engines Work?</strong></h3>\r\n\r\n<p>Search engines like Google use relatively complex processes (or algorithms) to organize and rank your content. The algorithm considers various ranking factors to determine the ranking of a page.</p>\r\n\r\n<p>That is, search engines get digital content and organize that information into results pages. The ultimate goal is to satisfy people with the results they find on the Search Engine Results Page (SERP).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>How Does SEO Work?</strong></h3>\r\n\r\n<p>SEO is the technology and practice that convinces search engines to recommend content to users like the best, most reliable, and most comprehensive solution to their problems.</p>\r\n\r\n<p>As mentioned above, when Googlebot collects information from a website, it is added to Google&#39;s index. The search engine&#39;s algorithm then compares the index to hundreds of ranking factors and determines where the page will appear in the search engine results page (SERP) based on the user&#39;s query.</p>\r\n\r\n<p>A typical SERP starts with a paid result and then shows organic traffic (traffic based on the quality of the page).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>On-Page SEO</strong></h3>\r\n\r\n<p>Onpage SEO is a way to optimize the content of your web pages. Unlike off-page tactics (see below), you can control these factors. For example, you can update the title tag of your own page&#39;s meta description to create your content.</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Keywords</li>\r\n	<li>Content Creation</li>\r\n	<li>Page speed</li>\r\n	<li>Internal linking</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Off-Page SEO</strong></h3>\r\n\r\n<p>Off-page SEO describes all optimization tactics that apply outside of your web properties. These off-page tactics help search engines and users determine if a site is trustworthy, relevant, and trustworthy.</p>\r\n\r\n<p>Offsite SEO can cover areas such as social media and influencer marketing, but perhaps the most important aspect is link building.</p>\r\n\r\n<p>Link Building is getting links to your site from other websites. The link acts as a distrust resolution. Therefore, getting backlinks from a highly privileged site can increase traffic to the site and increase your privileges.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Content</strong></h3>\r\n\r\n<p>As Bill Gates once said, &quot;content is king.&quot; And that&#39;s still true.</p>\r\n\r\n<p>What does this mean to you from an SEO perspective? The better the content, the more positions you can get in the search results. But what distinguishes bad content from good content? We&#39;ll cover this in this section, but first, we&#39;ll cover some important content areas.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h2><br />\r\n<strong>Meta Titles and Meta Descriptions&nbsp;</strong></h2>\r\n\r\n<p>Often, it&#39;s these areas of the page that determine what Google displays to users in search results.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Meta example</strong></h3>\r\n\r\n<p>An accurate meta title (also known as a title tag) that clearly describes what the content of the page provides to the user is important. This is why users may or may not click on the results.</p>\r\n\r\n<p>Meta titles and meta descriptions are sales texts that attract users and help Google better understand the content and purpose of each page. Be sure to include the main keyword in your meta description as it is useful for both users and search engines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Headings</strong></h3>\r\n\r\n<p>The headline you see when a user visits your site is an important signal to Google. As with the meta title, this should be unique and contain the term you are looking for. Again, this is an important sign for Google and an encouraging one for our users.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Writing Style&nbsp;</strong></h3>\r\n\r\n<p>Simply write it intentionally, not complicated. Write short sentences, break the content into logical chunks, and stay on the topic. This will help the reader solve the problem. Organize your content so that the value it provides is easy to see, understand, and use.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Technical SEO</strong></h3>\r\n\r\n<p>Technical SEO is all about the quality of your website infrastructure and how easy it is to use. Good technical SEO helps Google to easily find content (if necessary), correctly evaluate and index the information found.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Website Architecture</strong></h3>\r\n\r\n<p>Website architecture refers to the way web pages are grouped and organized. Good website architecture prioritizes user experience. If your website is easy to navigate and has robust architecture, users are more likely to spend more time interacting with your website.</p>\r\n\r\n<p>When considering your website&#39;s user experience, it&#39;s important to ensure that your visitors can reach their destination in as few clicks as possible. Plus, it should be easy to get from point A to point B and back to point A. The right structure also makes it easy for Google to crawl and index your website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Link Building</strong></h3>\r\n\r\n<p>Link building is the process of getting links to your website from other websites using hyperlinks. This is one of the most important aspects of SEO because backlinks are a mark of trust or authority for other websites.</p>\r\n\r\n<p>Higher quality linking domains allow Google to trust your site more.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Local SEO</strong></h3>\r\n\r\n<p>Local SEO refers to a set of tactics used to optimize a business&#39;s online presence for a specific search on a local website. For example, if you previously Googled &ldquo;nearby car dealerships,&rdquo; you were searching by location.</p>\r\n\r\n<p>Location-specific queries return results (usually) with three parts that make up a &quot;map packet&quot; or &quot;local packet&quot;:</p>\r\n\r\n<ul style=\"margin-left:40px\">\r\n	<li>Google Maps results</li>\r\n	<li>local business results</li>\r\n	<li>Organic search results</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Social Media</strong></h3>\r\n\r\n<p>This may come as a surprise, but yes, leveraging social media is among SEO best practices. Social media doesn&#39;t directly affect your rankings, but it&#39;s an important off-page SEO tactic that will help your business stand out, expand potential backlink content, and increase your online brand&#39;s exposure in the industry.</p>\r\n\r\n<p>For example, some companies use Instagram-like social profiles to showcase their work culture and to quickly and personally answer (or resolve) customer questions about their products.</p>\r\n\r\n<p>Proper use of these platforms is ideal for brand reputation management and organic advertising. Again, this doesn&#39;t directly affect your site&#39;s ranking, but it can get backlinks and help improve your site&#39;s ranking in SERP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Conclusion&nbsp;</strong></h3>\r\n\r\n<p>If you feel overwhelmed by the amount of SEO information, don&#39;t. We have a way forward for professionals at all levels of SEO experience. SEO is an art and a practice that takes time to learn, and the world of search engines is constantly changing.</p>\r\n\r\n<p>All you need to learn SEO is curiosity and a passion for helping search engines find the information they need.</p>', '01', 'April', '2022', 'image/blog/zkFaUwna15GmHqOCvmGhFegI2qXLtq93OiYMMPne.jpg', 'Search engine optimization (SEO) refers to the process of improving the organic traffic and ranking of your website on search engines such as Google, Bing, and other search engines.', 'seo guide, what is seo?, how does seo work, seo optimization', 62, 1, '2022-04-01 14:00:39', '2022-06-10 02:21:13'),
(3, 1, 'How Web Development makes a business profitable', 'how-web-development-makes-a-business-profitable', '<p>Web Development has been an important step for online business owners in order to build a website and attract customers to their products and services. Web development has been around for quite some time, but it has recently gained a larger and more significant platform for reaching customers. Web development is a process of designing and building websites, from the simple to the complex, and web designers use many tools to achieve a unique look for their site. Software developers are used in the development process to develop and build a website. A web designer works with the software developer to determine what they want the site to do, and how it should function. From there, the software developer uses the information and creates a plan for the layout and design of the site.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><span style=\"color:#000000\">Why does web development matter?</span></strong></h2>\r\n\r\n<p>If you are concerned with your business&#39;s future and don&rsquo;t have a website, you are missing a lot. With the advent of the internet and all the possibilities that website development offers, it is impossible to imagine a business without a website. If you are a new business, you need a website to establish your presence. If you are an old business and your business has a website, then you need to review the website to see if it is up-to-date. If your website is outdated and not mobile-friendly, then you need to hire web development services to develop a better website. Since the internet is a lot of things to a lot of people, it is important to consider a few things before you outsource website development to a web development company.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><span style=\"color:#000000\">What web development is all about?</span></strong></h2>\r\n\r\n<p>Web development is a process in which software is designed, programmed, and tested to achieve a specific result. It is to design and develop software for digital media, including websites and apps. Web development involves computer science and software engineering. As a business owner, you have the need to find a way to make your company profitable.&nbsp;<strong>What is the way to make a company profitable?</strong></p>\r\n\r\n<p>Well, Increasing its revenue is one of the ways. Web development can be one of those ways. In order to develop a profitable website, you first need to understand what it is all about. The way to make a company profitable with web development is to understand that it is not about the money. It is about their work. Web developers work to create functional, engaging and compelling websites. They spend their time and effort in the process of creating the perfect website that is worth the time and money.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With the rapid growth of the Internet, websites have become an integral part of the way many businesses operate. With the increase in website development, the internet has become a successful tool that has allowed many businesses to reach the next level. To be profitable, it is important to know what the basic principles of web development are. They can be summarized in three key points: web development is about building websites, it&#39;s about creativity, and it&#39;s about development cycle.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><span style=\"color:#000000\">How business can get benefit from web development?</span></strong></h2>\r\n\r\n<p>The internet is changing so fast, that businesses have to be quick in order to keep up. Businesses that take the time to understand the latest trends, technologies, and new developments will be able to stay ahead of the market and make their business profitable. Web development is a way for businesses to stay updated, and by providing their customers with the best product, will be able to make sure that they stay profitable. The developers at the company will be able to stay up to date with the latest trends and technological advances that are happening, and they can use that to offer the best product to their customers. The developers will also be able to offer a product that is simple and easy to use, which will allow them to keep customers coming back.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Web development is a field that can help your business. Web development can help your business on many different levels. First, it can help you to build a better website. If you have a website, you can use it to help your business succeed. You can use websites for marketing, and you can use your website to create a better relationship with your customers. If you are looking for a web development company, you can find many different ones that can help your business grow.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><strong><span style=\"color:#000000\">Why do you need a web development agency?</span></strong></h2>\r\n\r\n<p>Business owners are always looking for new ways to make their business profitable. Sometimes, that means bringing in new technology to make it easier for clients to access their services. Web development is one way to make your business profitable. Web development is the implementation of software and hardware to design, build and maintain a website. It is a company that helps business owners to improve their online presence and increase the number of members and customers they have.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Web development is a huge part of the modern business world, and it&#39;s not hard to see why. Web development is a cost-effective and scalable way to create and maintain your website. This allows businesses to maintain their website without having to worry about a high turnover rate due to a lack of a skilled workforce. As web development companies automate more and more processes, the cost to keep up with a website goes down. This means that in the long run, web development is going to be a profitable part of your business. In order to make sure that your company makes money on your website, you need to make sure that you have a web development company that can keep up with your needs as they grow. This is where companies like ours come in. We&nbsp;<a href=\"https://erudience.com/\"><strong>Erudience IT &amp; Solutions</strong></a>&nbsp;have built a large network of talented and experienced developers who can meet your needs and grow with you.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><span style=\"color:#000000\"><strong>Conclusion</strong></span></h2>\r\n\r\n<p>We hope you enjoyed our blog about how web development makes a business profitable. With the right web development services, you can successfully run your business on any platform, including mobile. We are here to help your business succeed with web development services. If you have any questions, please don&#39;t hesitate to&nbsp;<strong><a href=\"https://erudience.com/contact\">contact us</a>.</strong></p>', '01', 'April', '2022', 'image/blog/qTkqkLkhf2h4pHo0On2iz88Zb0sZe1V9f65hjxA4.png', 'Web Development has been an important step for online business owners in order to build a website and attract customers to their products and services. Web development has been around for quite some time, but it has recently gained a larger and more significant platform for reaching customers.', 'web development, web development for business, business growth', 77, 1, '2022-04-01 14:04:36', '2022-06-10 02:21:03'),
(4, 2, 'Social Media Strategies for CEOs | Business Guide 2022', 'social-media-strategies-for-ceos-business-guide-2022', '<p>Social media is an integral part of every corporation, company, and industry, including your own. It&#39;s a great tool, with the power to connect and grow your business like no other. However, it&#39;s also an unpredictable platform, which can be intimidating to the average business person. This is where you come in. As the CEO, you need to be in charge of your company&#39;s social media accounts and guide your employees on how to use this powerful tool. This blog will offer some of the best social media strategies for CEOs.</p>\r\n\r\n<h2>Why do social media matters to CEOs?</h2>\r\n\r\n<p>CEOs are only the individuals within a company who can have a positive impact on the company&#39;s social media presence. The majority of CEOs are appointed by the board of directors of the company they work for. They are tasked with keeping the company up and running and seeing that it runs properly. They are responsible for making sure that the company is profitable and productive. CEOs have a lot on their plate and there are many decisions to be made on a day-to-day basis. CEOs also have to maintain a good relationship with the board of directors, the general public, and other members of the company. A person who holds the title of the chief executive officer may also be called the president, managing director, and chairman of the board.</p>\r\n\r\n<p>Social Media is a juggernaut. It&rsquo;s growing at an exponential rate, and everyone wants a piece of the pie. In fact, it&rsquo;s so big that it&rsquo;s easy for CEOs to get lost in the crowd. This guide will shed light on how to navigate the social media sphere, how to use it to your advantage, and why CEOs should care about social media.</p>\r\n\r\n<h2>Why is it important for CEOs to have a social media strategy?</h2>\r\n\r\n<p>Social media is a useful tool for communication, but it&rsquo;s also a great way to share your company&rsquo;s story. By connecting with your customers on a personal level and treating social media like a resource, you can build relationships, gain insights, and share your expertise. As CEO, you have a huge impact on how your company is perceived, and social media gives you the opportunity to influence your brand&rsquo;s image. According to a study by Forbes Insights, CEOs with a social media strategy enjoy the following benefits: - They are more likely to be considered visionary. - They are more likely to be considered a leader. - Their company is more likely to be considered innovative.</p>\r\n\r\n<p>It&rsquo;s been predicted that by 2022, there will be a total of 3.2 billion social network users around the world. This is a staggering number and it&rsquo;s predicted that this number will continue to grow. This number is much higher than the number of people on Facebook, the largest social network (1.94 billion monthly active users). The market is exploding and if you&rsquo;re not utilizing it, you&rsquo;re missing out on a lot of potential customers. With the number of social network users increasing every year, it&rsquo;s important for CEOs to have a social media strategy</p>\r\n\r\n<h2>How CEO&#39;s can build a strong social media presence?</h2>\r\n\r\n<p>Many CEOs are overlooking the power of social media. Social media platforms like Facebook, Twitter, Instagram, LinkedIn, and Snapchat can be incredibly beneficial to any business, especially when it comes to customer service, brand awareness, and even sales. And while they all have their unique strengths and weaknesses, they also have a few key similarities.</p>\r\n\r\n<p>Social media is a powerful tool to expand your brand and create an image of your company. Social media is always in a state of constant flux, and any company in any industry can benefit from using it. The challenge is that it is a lot to manage. You need to keep track of your company&rsquo;s social media accounts, create and maintain your content, and bring in new followers. It can be a lot to handle. Here are some strategies for CEOs to create a strong social media presence.</p>\r\n\r\n<h2>How to be a digital leader?</h2>\r\n\r\n<p>Self-development is the key to being a digital leader. Organizations are looking for digital leaders to keep them on track in a digital age. It&#39;s not easy to stay ahead in this fast-moving industry. Focused learning is the key to staying ahead. This blog will look at how you can apply different digital skills to your life and become a digital leader.</p>\r\n\r\n<p>The digital world is rapidly growing at an exponential rate. Digital marketing is one of the most dynamic fields. In order to survive in the digital era, businesses need leaders who can guide them through this ever-changing world. This is a blog about how to be a digital leader and the different ways in which a digital leader can come up with an order to help businesses of all sizes.</p>\r\n\r\n<h2>How to make your CEO&#39;s social media strategy effective?</h2>\r\n\r\n<p>When it comes to the world of social media, there are a few things that are certain. One of these is that it is vital for a CEO to have a personal social media presence. According to a recent study conducted by the Harvard Business Review, CEOs can make or break their public image on social platforms. However, many CEOs still shy away from being active on social media, thinking that it will not translate for them and their brand. But this is far from the truth. A CEO&#39;s social media presence can be a great asset to the company, and even help it in achieving its long-term goals.</p>\r\n\r\n<h3><strong>1. Write content that stands out from the crowd</strong></h3>\r\n\r\n<p>Content is one of the most important assets when it comes to marketing for your business. One of the best ways to be successful with your content is to make sure that your content stands out from the crowd. There are a lot of things that you can do to make sure that you are providing the best possible content.</p>\r\n\r\n<h3><strong>2. Get your team to share content</strong></h3>\r\n\r\n<p>We have all been there. You have just published a piece of content, but it just doesn&#39;t seem to be getting the traction you hoped for. You wonder why people don&#39;t share your brand&#39;s content. Maybe it&#39;s time to change your approach.</p>\r\n\r\n<h3><strong>3. Engage and interact with your followers</strong></h3>\r\n\r\n<p>The best thing that you can do to make your social media marketing stand out is to engage and interact with your followers. Many people forget the importance of interacting with their followers. They just think that posting a great picture or sharing a great article is enough. Of course, you have to have great content to post but you also have to have a strategy for engaging with your followers as well. In this blog, I am going to go over some tools that you can use to engage with your followers.</p>\r\n\r\n<h3><strong>4. Build a brand that people recognize</strong></h3>\r\n\r\n<p>Everyone wants their business to be recognized by the customers. But very few business owners know that developing their brand is the only way to achieve that. A brand is the symbol of your business and the first thing that your customers will notice about it. Building a brand is a slow and gradual process but the right brand can do wonders for your business.</p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p>We hope our blog post has been an interesting read. We hope you will continue to read our other blogs to gain further insights on running your business. If you have any questions or would like to speak to us in person about social media strategies for CEOs, please contact us anytime at <strong>erudienceit@gmail.com</strong>. Thank you for visiting our blog, we are always excited to read your comments and ask questions to help us create quality content for our readers.</p>', '04', 'April', '2022', 'image/blog/VvtNWuDLl81UQfWADXAHSKEk37PQ6272HW5tOjOM.png', 'As the CEO, you need to be in charge of your company\'s social media accounts and guide your employees on how to use this powerful tool. This blog will offer some of the best social media strategies for CEOs.', 'socialmediastrategiesforceo\r\nsocialmediaforceo\r\nsocialmedia', 181, 1, '2022-04-04 13:46:45', '2022-06-10 02:20:43'),
(5, 2, 'Best Productivity Tools for Startups and Business Owners', 'best-productivity-tools-for-startups-and-small-business-owners', '<p><!-- wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>No matter how busy your day-to-day is, it&rsquo;s important to find the time to focus on your startup or business. Use these top productivity tools to free up time and deal with marketing, sales, and development in a smart way.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Running a day-to-day business requires employees to juggle multiple tasks and projects, and communicate frequently with different teammates to meet deadlines. Productivity tools, especially those aimed at collaboration and improved communication, make it easier for employees to collaborate and give business owners a macro view of what&#39;s going on.&nbsp;<input alt=\"\" src=\"https://drive.google.com/file/d/1IcsNcIzZeCyhGhiLG1i1TtC9RS_YdB4F/view?usp=sharing\" type=\"image\" /></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:gallery {\"linkTo\":\"none\"} --><!-- wp:image {\"id\":693,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p><!-- /wp:image --><!-- /wp:gallery --><!-- wp:paragraph --></p>\r\n\r\n<p>During the pandemic, productivity and collaboration tools have become essential for companies transitioning their workforce from in-person to remote work. According to the market research and analysis company Gartner, the global collaborative software market is expected to grow by 17% in 2021 and continue its upward trend until 2022.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>To determine the best workplace collaboration productivity software for small businesses with 2 to 50 employees, Select reviewed over 5 applications, focusing on cost, ease of use, easy access across multiple devices, their additional features, and positive user reviews. in the App Store (for iOS) and Google Play (for Android).</p>\r\n\r\n<p><!-- /wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>The top five apps we picked offer either a free version with limited but powerful features or a free trial. They each have at least 1,000 reviews on the App Store and Google Play and a rating of 4 stars (out of 5) or more on both platforms.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>The Best Productivity Software for Collaboration</strong></h3>\r\n\r\n<p><!-- /wp:heading --><!-- wp:list {\"ordered\":true} --></p>\r\n\r\n<ul>\r\n	<li><strong>Best Overall: Asana</strong></li>\r\n	<li><strong>Best for Simple Project Management: Trello</strong></li>\r\n	<li><strong>Best multi-feature: Airtable</strong></li>\r\n	<li><strong>Best value: Evernote</strong></li>\r\n	<li><strong>Best for ease of use: Todoist</strong></li>\r\n</ul>\r\n\r\n<p><!-- /wp:list --><!-- wp:heading --></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>1. <strong>Best overall</strong></strong>: <strong><a href=\"https://asana.com/\">Asana</a></strong></h2>\r\n\r\n<p>Asana is a project management application. Helping businesses track their goals and meet deadlines. Available in web applications and in Android and IOS versions. Standard features include;</p>\r\n\r\n<p><!-- /wp:heading --><!-- wp:gallery {\"linkTo\":\"none\"} --><!-- wp:image {\"id\":683,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p><!-- /wp:image --><!-- /wp:gallery --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Task Management - You can easily break down large tasks into smaller sub-tasks and assign them to individuals to avoid confusion. All tasks remain listed in a single category. You can add start dates and due dates to ensure no deadlines are missed.<br />\r\nIntegration - There is a long list of Asana integrations, including file creation and communication tools. Some of the most useful integrations are Zapier, Google Drive, and Mailchimp.<br />\r\nTeam Management - You can easily create a team and a shared calendar to connect your teammates. By adding teammates as followers, each of them can receive notifications about the progress of a project. Additionally, you can add vendors and contractors as guests for better communication.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>2. Best for simple project management: <a href=\"https://trello.com/\">Trello</a></strong></h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:gallery {\"linkTo\":\"none\"} --><!-- wp:image {\"id\":689,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p><img alt=\"\" src=\"https://webflogy.com/wp-content/uploads/2022/04/Screenshot-4-1-1024x512.png\" />You can add cards and members, set notifications and time limits, and create colorful labels. With the user-friendly interface, your team can work together faster and easier. Here is an official demo to start using Trello:</p>\r\n\r\n<p><!-- /wp:image --><!-- /wp:gallery --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>If you work remotely or are a startup with smaller projects, Trello can be very useful for your needs. It will definitely add to your productivity. The app is also available on Google Play and the Apple Store.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Also, with their free membership, you can have unlimited cards and rosters and only 10 team, boards. If you want more team boards, power-ups, automation, and security and management features, you&#39;ll need to upgrade and pay for your plan.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>3.</strong> <strong>Best multi-feature: <a href=\"https://www.airtable.com/\">Airtable</a></strong></h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:image {\"id\":685,\"width\":840,\"height\":389,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p>In short, Airtable is a platform that makes it easy to build powerful and custom apps. These tools can streamline just about any process, workflow, or project, and best of all, you can build them without ever having to learn how to write a single line of code. (Spoiler alert: that&#39;s what it&#39;s all about.) Our customers use Airtable for everything from tracking interviews to managing large-scale video productions, and thousands of companies use Airtable for their processes. Daily.</p>\r\n\r\n<p><!-- /wp:image --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>So how does a platform help achieve all of this? At its core, Airtable lets you easily create a database of work-critical information, then use it to support the visualizations, processes, and integrations that make a custom app truly unique to you. We know that &quot;creating an app&quot; can seem like a daunting task, but we promise that with this guide, a little effort, and Airtable, you&#39;ll be creating your own tool in no time.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>4.</strong> <strong>Best value: <a href=\"https://evernote.com/\">Evernote</a></strong></h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:image {\"id\":687,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p>Evernote is one of the best note-taking apps with over 225 million users. Although the competition has increased over the past decade, this app is still a favorite among small business owners. Some of the most important features are:</p>\r\n\r\n<p><!-- /wp:image --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Taking Notes - Evernote&#39;s core business is note-taking, and they won&#39;t let you down. Mobile and web platforms are convenient and easy to use. To create a note, click the familiar &quot;+&quot; icon, add a title, type in your recording, and save. Notes can then be shared with other Evernote team members.<br />\r\nWeb Clipper - This feature allows you to clip any exciting or relevant web page with Evernote&#39;s browser extension plugin. The image can be a full-page screenshot or a crop. Perfect for on-the-go SEO and research projects.<br />\r\nOrganization - Store each of your files in a themed notebook. You can then group them into stacks for easy access.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>5.</strong> <strong>Best for ease of use: <a href=\"https://todoist.com/\">Todoist</a></strong></h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:image {\"id\":688,\"sizeSlug\":\"large\",\"linkDestination\":\"none\"} --></p>\r\n\r\n<p><img alt=\"\" src=\"https://webflogy.com/wp-content/uploads/2022/04/Screenshot-1-1-1024x511.png\" />Todoist combines a minimalist user interface with powerful natural language processing and markup capabilities.</p>\r\n\r\n<p>Best natural language processing app. Categorize tasks with due dates, tags, and projects while typing as fast as you think. The balance between strength and flexibility. Projects, tags, filters, and priorities allow you to customize Todoist to fit your personal workflow while being intuitive to learn and use.<br />\r\nAdd quickly from anywhere. Todoist lets you add tasks wherever you are online. Not only is Todoist available on all mobile app stores, but it also offers native apps for Windows and Mac, a Chrome extension, and integrations with Gmail and Outlook.<br />\r\n&nbsp;</p>\r\n\r\n<p><!-- /wp:image --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>Conclusion</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>A productivity tool is a tool that helps you to be more productive, including tools that you can use to keep track of tasks and stay on top of your to-do list. We&#39;ve listed some of the best productivity tools on the market.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>To get the best IT services and solutions, please do <strong><a href=\"https://erudience.com/contact\">Contact Us</a>.</strong></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3>Read More Blogs</h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://erudience.com/blog/social-media-strategies-for-ceos-business-guide-2022\">Social Media Strategies for CEOs | Business Guide 2022</a></li>\r\n	<li><a href=\"https://erudience.com/blog/how-web-development-makes-a-business-profitable\">How Web Development makes a business profitable</a></li>\r\n	<li><a href=\"https://erudience.com/blog/search-engine-optimization\">Search Engine Optimization (SEO) - What is SEO?</a></li>\r\n	<li><a href=\"https://erudience.com/blog/what-is-the-importance-of-web-design-for-your-audience\">What is the importance of web design for your audience?</a></li>\r\n</ul>\r\n\r\n<p><!-- /wp:paragraph --></p>', '10', 'April', '2022', 'image/blog/RjAzhfBRn2Cpv0On4n2JQxwFOXE4K7pRi2hw1nyw.png', NULL, 'best productivity tools for startups, best productivity tools for business, best productivity tools for business owners, best productivity tools', 117, 1, '2022-04-10 15:11:03', '2022-06-10 02:20:43');
INSERT INTO `blogs` (`id`, `user_id`, `title`, `slug`, `body`, `date`, `month`, `year`, `image`, `meta_description`, `keywords`, `views`, `status`, `created_at`, `updated_at`) VALUES
(6, 2, 'Do small businesses need a marketing plan?', 'small-businesses-marketing-plan', '<p><!-- wp:paragraph --></p>\r\n\r\n<p>What should you know when creating a marketing plan for your small business? While there are many methods to choose from, the key is to answer questions specific to your business.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>After all, marketing is what gets your target audience to buy your product or service and make money. But without a marketing strategy, it&#39;s like going to war without weapons.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<h3>Ask yourself the big questions</h3>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<h4>Who are you and what are you doing?</h4>\r\n\r\n<p>First, define your company and your products. Think about and write down all your known strengths and weaknesses.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Next, list all possible business opportunities for your business or products. Next, write down any external or internal challenges ahead of you. This gives you insight into your business.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>After that, you need to either write or revise your mission statement.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Think of your mission statement as your compass. Later, when choosing marketing tactics, you can compare each strategy to this one. Because there are so many marketing tactics out there, it helps to have some guidelines when making tough decisions like where to sell and Who is buying? Where to focus your business efforts. When your mission statement and tactics align, add those tactics to your small business marketing plan.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --></p>\r\n\r\n<h4>Who are your clients?</h4>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>If you haven&#39;t already, you need to dive deep into your target market. It&#39;s essential to be as specific as possible, so your goal is to find out everything about this demographic.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:verse --></p>\r\n\r\n<pre>\r\n<strong>Ask questions like these:</strong></pre>\r\n\r\n<p><!-- /wp:verse --><!-- wp:list --></p>\r\n\r\n<ul>\r\n	<li>Where are they hanging out online?</li>\r\n	<li>What are their general interests?</li>\r\n	<li>What personal and professional goals do you have for yourself?</li>\r\n	<li>Answer these and other relevant questions that come to mind. The answers give you a clear picture of the goal of your marketing plan.</li>\r\n</ul>\r\n\r\n<p><!-- /wp:list --><!-- wp:paragraph --></p>\r\n\r\n<p>And no, not everyone can be your potential customer. This is why it is so important to be as specific as possible. Everyone from ice cream parlours to insurance brokers has unique business personas they use to attract customers.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --></p>\r\n\r\n<h4>Who is your competitor?</h4>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>Now is the time to assess your competitors:</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:list --></p>\r\n\r\n<ul>\r\n	<li><strong>Research the basics:</strong> what do they offer and how do they market it?</li>\r\n	<li><strong>Compare their current strategies to yours:</strong> are they doing anything that can inspire your small business marketing plan?</li>\r\n	<li><strong>Track their marketing efforts over time</strong>: are they inspiring new ideas or helping you find ways to refine your strategy?</li>\r\n</ul>\r\n\r\n<p><!-- /wp:list --><!-- wp:heading --></p>\r\n\r\n<h2>Here are those key factors and some practical advice&nbsp;for a marketing plan</h2>\r\n\r\n<p><!--{C}%3C!%2D%2D%20%2Fwp%3Aparagraph%20%2D%2D%3E--><!--{C}%3C!%2D%2D%20wp%3Aheading%20%2D%2D%3E--></p>\r\n\r\n<p><!--{C}%3C!%2D%2D%20%2Fwp%3Aheading%20%2D%2D%3E--><!--{C}%3C!%2D%2D%20wp%3Alist%20%7B%22ordered%22%3Atrue%7D%20%2D%2D%3E--></p>\r\n\r\n<ol>\r\n	<li>Executive summary</li>\r\n	<li>Mission statement</li>\r\n	<li>Marketing objectives</li>\r\n	<li>SWOT analysis</li>\r\n	<li>Market research</li>\r\n	<li>Market strategy</li>\r\n	<li>Budget</li>\r\n</ol>\r\n\r\n<p><!--{C}%3C!%2D%2D%20%2Fwp%3Alist%20%2D%2D%3E--><!--{C}%3C!%2D%2D%20wp%3Aparagraph%20%2D%2D%3E--></p>\r\n\r\n<p>To help you get the gist, we&#39;ve gone over the basics of a marketing plan, highlighting key insights and best practices with plenty of examples. Think of them as stepping stones to your goal.</p>\r\n\r\n<p><!--{C}%3C!%2D%2D%20%2Fwp%3Aparagraph%20%2D%2D%3E--><!--{C}%3C!%2D%2D%20wp%3Aheading%20%7B%22level%22%3A3%7D%20%2D%2D%3E--></p>\r\n\r\n<p><!--{C}%3C!%2D%2D%20%2Fwp%3Aheading%20%2D%2D%3E--><!--{C}%3C!%2D%2D%20wp%3Aparagraph%20%2D%2D%3E--></p>\r\n\r\n<p>Whether you&#39;re just starting out or you&#39;ve been in business for years, before creating a small business marketing plan, you need to assess where your business is today.</p>\r\n\r\n<h2>1. Executive summary</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>First, you need to start with a marketing plan summary. This section provides essential business information and an overview of what you&#39;ve done, what you plan to do, and how to get there.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>A summary is not to provide detailed information but to set the stage and pique the reader&#39;s interest. Each section of the executive summary is an overview of the information you will detail later in your marketing plan. Although this is the first section of a marketing plan, it is usually written last.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Here&#39;s a great example from Palo Alto Software. The summary for this sample organic bakery marketing plan is short and simple. This is where you want to give readers context and set expectations.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>2. <strong>Mission statement</strong></h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>Are you writing a mission statement for your business? Sometimes it helps to look at sample mission statements from other companies to get a better idea of how to write your own.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>In 30 seconds or less, a good mission statement should define:</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:list --></p>\r\n\r\n<ul>\r\n	<li>What the company does for its customers</li>\r\n	<li>What the company does for its employees</li>\r\n	<li>What the company does for its owners</li>\r\n</ul>\r\n\r\n<p><!-- /wp:list --><!-- wp:paragraph --></p>\r\n\r\n<p>It should be an eloquent and concise paragraph that should be full of meaning and impact. Choose your words wisely - beware of buzzwords, empty phrases, or mission statements that are so generic they could apply to many different businesses. Be clear and concise and you will understand what makes your business unique and interesting.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>It&#39;s tough, but you want to capture what your business stands for in a short, memorable way.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>3. Marketing objectives</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>The following business case gives you a real-world scenario where you can apply your knowledge of marketing objectives.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>You are the Chief Marketing Officer (CMO) at Royal Gloves Inc. Royal Gloves has just completed the production of men&#39;s and women&#39;s winter gloves that can withstand temperatures as low as -60 degrees Celsius. What makes Royal gloves so special is their ability to retain heat, be completely waterproof and keep hands soft and dry.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>In the first quarter, Royal Gloves did not sell as well as expected. Customers who have purchased the product have given very positive feedback, suggesting that there is nothing wrong with the product itself, but perhaps with its marketing campaign. Since Royal Gloves was launched without a marketing budget (the CEO thought the product would be &quot;sold to consumers&quot;), you decide to create a business proposal and define the marketing goals you want the company to set.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><strong>Necessary:</strong></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Using your knowledge of marketing objectives, develop a set of marketing objectives that Royal Gloves will use as the basis for its new campaign to increase the performance of its product.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>4. SWOT analysis</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>SWOT (Strengths, Weaknesses, Opportunities, and Threats) analysis is a framework used to assess a company&#39;s competitive position and develop a strategic plan. The SWOT analysis assesses internal and external factors as well as current and future potential.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>SWOT analysis aims to provide a realistic, factual, and data-backed overview of the strengths and weaknesses of an organization, initiative, or sector. The organization should keep the analysis concise, avoiding preconceived notions or grey areas and focusing instead on real-world contexts. Companies should use it as a guide, not necessarily a recipe.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>In 2015, SWOT analysis of The Coca-Cola Company&#39;s value line identified strengths such as its globally recognized brand, extensive distribution network, and opportunities in emerging markets. However, vulnerabilities and threats such as fluctuating exchange rates, growing public interest in &quot;healthy&quot; beverages, and competition from healthy beverage suppliers have also been identified.2</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>The SWOT analysis prompted Value Line to ask tough questions about Coca-Cola&#39;s strategy, but also to note that the company &quot;will likely remain a leading beverage company&quot; that has provided &quot;a reliable source of revenue&quot; and capital to conservative investors. Warning.&quot;</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Five years later, the SWOT Value Line analysis has proven effective as Coca-Cola remains the 6th best-selling brand in the world (as it was then). Shares of Coca-Cola (trading under the symbol KO) are up more than 60% in the five years since the analysis was completed.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>To get a better picture of a SWOT analysis, consider the example of a fictional organic smoothie company. To better understand how it competes in the smoothie market and what it can do better, it conducted a SWOT analysis. Through this analysis, it was determined that its strengths lie in a good supply of ingredients, personalized customer service, and a strong relationship with suppliers. Some weaknesses were identified in the operation: low product diversification, high turnover rates, and obsolete equipment.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>By examining the impact of the external environment on her business, she identified opportunities in new technologies, untapped demographics, and a cultural shift towards a healthy lifestyle. Threats have also been identified, such as B. crop-damaging winter frosts, a global pandemic, and supply chain failures. In conjunction with other planning techniques, the company has used SWOT analysis to leverage its external strengths and opportunities to eliminate threats and strengthen areas where it is weak.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>5. Market research</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>Use market research to find customers<br />\r\nMarket research combines consumer behaviour and economic trends to validate and improve your business idea.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>It is crucial to understand your customer base from the start. Market research allows you to reduce risk even when your business is just a glimmer in your eye.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Gather demographic information to better understand customer acquisition opportunities and limitations. This may include demographic information about age, wealth, family, interests, or other information relevant to your business.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><strong>Then answer the following questions to get a good picture of your market:</strong></p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:list --></p>\r\n\r\n<ul>\r\n	<li>Demand: Is there a demand for your product or service?</li>\r\n	<li>Market size: How many people would be interested in your offer?</li>\r\n	<li>Economic indicators: what are the income bracket and employment rate?</li>\r\n	<li>Location: Where do your customers live and where can your business go?</li>\r\n	<li>Market saturation: how many similar options are already available to consumers?</li>\r\n	<li>Pricing: What are potential customers paying for these alternatives?</li>\r\n</ul>\r\n\r\n<p><!-- /wp:list --><!-- wp:paragraph --></p>\r\n\r\n<p><br />\r\nThey also want to keep up with the latest small business trends. It is important to have an idea of ​​the specific market share that affects your profits.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>You can conduct market research using existing sources or conduct your own research and reach consumers directly.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Existing sources can save you a lot of time and effort, but the information may not be as specific to your audience as you would like. Use it to answer general, quantifiable questions like industry trends, demographics, and household income. Do your research online or start with our list of market research resources.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>By interviewing consumers themselves, you get a nuanced understanding of your specific target audience. But direct research can be time-consuming and expensive. Use it to answer questions about your business or specific customers, e.g. B. Reactions to your logo, improvements you could make to the shopping experience, and where customers might go instead of your business.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>6. Market strategy</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:heading {\"level\":4} --></p>\r\n\r\n<h4>What is a marketing strategy?</h4>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>A marketing strategy refers to a company&#39;s entire game plan to reach potential consumers and convert them into customers of their products or services. A marketing strategy includes the company&#39;s value proposition, key brand messages, target customer demographics, and other high-level elements. A thorough marketing strategy encompasses the &quot;four Ps&quot; of marketing: product, price, location, and promotion.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading {\"level\":4} --></p>\r\n\r\n<h4>Understand marketing strategies</h4>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>A clear marketing strategy should revolve around the company&#39;s value proposition, which communicates to consumers what the company stands for, how it works, and why it deserves their business.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>This provides marketing teams with a template that should inform their initiatives about all of the company&#39;s products and services. For example, Walmart (WMT) is known as a &quot;cheap every day&quot; discount store, and its operations and marketing are based on that idea.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>7. Budget</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>Many companies make fundamental mistakes when marketing budgets lead to wasted money and missed opportunities.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>&quot;Entrepreneurs often don&#39;t think enough about their marketing,&quot; says Mallika Kazim, BDC Senior Business Advisor specializing in marketing. &quot;A marketing budget is an important tool to understand what you&#39;re doing and how to get better results.&quot;</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Kazim says every business should follow these five steps when planning their marketing budget.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>A marketing budget is essential for your small business at all times. However, knowing where you are on your small business journey can help you make important decisions. Basically, there are two obvious categories that your business can fall into start-up or operation.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Your current startup or expert status affects how much you need for your small business marketing budget. In general, expect to spend more in the startup phase than once you&#39;re up and running.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>For example, Matt&#39;s biggest effort came from the starting phase. He found that in Los Angeles&#39; competitive dog walking scene, a good logo is a key to attracting customers. So he spent most of his original budget on his logo to solidify his brand identity. &quot;I hired a cartoonist to bring my ideas to life and I didn&#39;t skimp,&quot; he said.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<h2>Final Thoughts</h2>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p>A marketing plan for a small business requires research, thought, and strategy. If you follow the steps above, you will surely create a good starting point.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p>Here are three things to note:</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><strong>Have patience:</strong> All marketing plans require a bit of real-world trial and error to perfect.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><strong>Give special attention to existing customers:</strong> A loyal customer base can become a sustainable source of income. Create messages that respond to their interests and reaffirm their trust in you.</p>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:paragraph --></p>\r\n\r\n<p><strong>Aks for (and actually use) customer feedback to make improvements:</strong> Customers want to feel heard. Asking for feedback and actually integrating it into your business shows that you see it as more than just a source of income.</p>\r\n\r\n<p>No matter what you put into your marketing plan for your small business, remember that it&#39;s all about building real relationships. Focus on your strengths and how they can help your customers, and you can&#39;t go wrong!</p>\r\n\r\n<p>You are overwhelmed by your marketing, OutboundEngine is better than a big number from this list of tasks. From writing, creating, and sending email campaigns to tracking open rates and interested leads, we have a team of marketing experts to take care of those important actions while you focus. on the establishment of relations and on your business. Schedule a free demo and see what else we can do for you.</p>\r\n\r\n<h3><strong>Check out more -&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><a href=\"https://erudience.com/blog/best-productivity-tools-for-startups-and-small-business-owners\"><strong>Best Productivity Tools for Startups and Business owners</strong></a></li>\r\n	<li><a href=\"https://erudience.com/blog/social-media-strategies-for-ceos-business-guide-2022\"><strong>Social Media Strategies for CEOs - Business Guide</strong></a></li>\r\n	<li><a href=\"https://erudience.com/blog/how-web-development-makes-a-business-profitable\"><strong>How Web Development makes a Business Profitable</strong></a></li>\r\n</ul>\r\n\r\n<p><!-- /wp:paragraph --><!-- wp:heading --></p>\r\n\r\n<p><!-- /wp:heading --><!-- wp:paragraph --></p>\r\n\r\n<p><!-- /wp:paragraph --></p>', '14', 'May', '2022', 'image/blog/oSv3veVhrwMCH0p8y80USPumB6HeKheThidLNlyE.png', 'What should you know when creating a marketing plan for your small business? While there are many methods to choose from, the key is to answer questions specific to your business.', 'small businesses marketing plan, marketing strategy, marketing advice for small business, marketing plan for small business', 63, 1, '2022-05-14 19:47:16', '2022-06-10 02:20:43');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_id`, `blog_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-04-01 13:54:29', '2022-04-01 13:54:29'),
(3, 1, 3, '2022-04-01 14:04:36', '2022-04-01 14:04:36'),
(6, 2, 2, '2022-04-01 14:07:48', '2022-04-01 14:07:48'),
(8, 3, 4, '2022-04-04 13:48:02', '2022-04-04 13:48:02'),
(18, 3, 5, '2022-04-23 18:21:06', '2022-04-23 18:21:06'),
(28, 3, 6, '2022-05-15 16:42:07', '2022-05-15 16:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `category_blogs`
--

CREATE TABLE `category_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snumber` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_blogs`
--

INSERT INTO `category_blogs` (`id`, `name`, `slug`, `snumber`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Web Application', 'web-application', 1, 1, 0, '2022-04-01 13:52:26', '2022-04-01 13:52:26'),
(2, 'SEO', 'seo', 2, 1, 0, '2022-04-01 13:52:40', '2022-04-01 13:53:32'),
(3, 'Digital Marketing', 'digital-marketing', 3, 1, 0, '2022-04-01 13:53:20', '2022-04-01 13:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `category_courses`
--

CREATE TABLE `category_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snumber` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_courses`
--

INSERT INTO `category_courses` (`id`, `name`, `slug`, `snumber`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Web Application', 'web-application', 1, 1, 0, '2022-04-08 17:06:40', '2022-04-08 17:06:40');

-- --------------------------------------------------------

--
-- Table structure for table `category_portfolios`
--

CREATE TABLE `category_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snumber` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_portfolios`
--

INSERT INTO `category_portfolios` (`id`, `name`, `slug`, `snumber`, `status`, `views`, `created_at`, `updated_at`) VALUES
(1, 'Web Application', 'web-application', 1, 1, 0, '2022-04-01 15:06:37', '2022-04-02 16:13:12'),
(2, 'Software', 'software', 2, 1, 0, '2022-04-01 15:07:38', '2022-04-01 15:07:38'),
(3, 'PHP Scripts', 'php-scripts', 3, 1, 0, '2022-04-01 15:08:01', '2022-04-01 15:08:01'),
(4, 'SEO', 'seo', 4, 1, 0, '2022-04-01 15:08:15', '2022-04-01 15:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `company_intros`
--

CREATE TABLE `company_intros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_sub_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vlist_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keys` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_intros`
--

INSERT INTO `company_intros` (`id`, `hero_title`, `hero_sub_title`, `intro_title`, `intro_sub_title`, `video_thumbnail`, `video_link`, `vlist_1`, `vlist_2`, `vlist_3`, `vlist_4`, `vlist_5`, `vlist_6`, `meta_title`, `meta_des`, `meta_keys`, `meta_img`, `created_at`, `updated_at`) VALUES
(1, 'ERUDIENCE IT', 'Team of Creative Designers & Developers. We Develop Digital Strategies, Products and Services. Architecting secure, efficient and user-friendly applications and systems by writing standard, well-documented and efficient codes to turn ideas into reality.', 'We Can Develop Your Dream', 'Architecting secure, efficient, and user-friendly applications and systems by writing standard, well-documented and efficient codes to turn ideas into reality.', 'image/about/intro/dQjPm6lf0jTxBJt9e5MnBEy06SzWWGC3p9maQYGD.jpg', 'https://www.youtube.com/embed/FsUEEQDL3Yw', 'Industry Standards', 'Premium Quality', 'Unique Innovations', 'After Sales support', 'Custom Development', '40+ Unique Items', 'About - Erudience IT', 'Team of Creative Designers & Developers.', 'erudience it, it institude', 'image/about/intro/MuaMLDqk3yZgjYj35JKrTTA1vDoWAXAeYjPCbdR7.jpg', '2022-04-01 08:47:18', '2022-04-01 08:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `department`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Web Application', 'Mike', 'no-replyPhelf@gmail.com', '81222945531', 'Local SEO for more business', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', NULL, '2022-04-02 10:39:01', '2022-04-02 10:39:01'),
(3, 'Others', 'Mike Dyson', 'no-replyPhelf@gmail.com', '82986371564', 'quality monthly SEO plans', 'Good Day \r\n \r\nI have just checked  erudience.com for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our pricelist here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart enhancing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Dyson\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, '2022-04-05 00:08:51', '2022-04-05 00:08:51'),
(4, 'Website Audit', 'CarlosBup', 'boxesnstuff111@gmail.com', '81154673222', 'BEST Crypto Trading Bots in Apr 2022 in Australia, UK, Canada and Europe', 'New trend in Australia, UK, Canada and Europe. A little-known automated trading crypto exchange is gaining popularity all over the world https://telegra.ph/New-trend-in-Australia-UK-Canada-and-Europe-A-little-known-automated-trading-crypto-exchange-is-gaining-popularity-all-over-the--04-06-4?2by', NULL, '2022-04-06 13:34:03', '2022-04-06 13:34:03'),
(6, 'Others', 'Kalra Anil', 'ka8492317@gmail.com', '87195291311', 'Do you need Funding?', 'Hello, \r\n \r\nI am working directly with a private family portfolio that can provide funding for credible clients with feasible projects. Currently, we have investment funds for viable projects. \r\n \r\nThey are interested in the following: Hospitals, Green energy. Power projects, Agriculture and Real Estate. \r\nThey can also partner with your company on other projects of value. The interest rate and tenure are fantastic. Your response is most anticipated if this is of interest to you. \r\n \r\nKind regards \r\nKalra Anil \r\nUrl: http://euroclear.com \r\nkalra.anil@euroconsults.xyz \r\nFinancial Consultant \r\nWhataspp:447563233563', NULL, '2022-04-08 02:59:29', '2022-04-08 02:59:29'),
(7, 'Website Audit', 'Mike Lawman', 'no-replyPhelf@gmail.com', '84721394978', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your erudience.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Lawman', NULL, '2022-04-08 07:38:05', '2022-04-08 07:38:05'),
(8, 'Web Application', 'Michaelseinc', 'beeonthetop.com@gmail.com', '85286345365', 'Buy Followers, Likes and Views', 'Buy Followers, Likes and Views \r\n \r\nGet Thousands of Followers, Likes, Views and more for all you social media channels. \r\nInstagram, Facebook, Tiktok and more.. \r\n \r\nBoost your sales, and get more leads. \r\nhttps://www.beeonthetop.com', NULL, '2022-04-08 09:04:57', '2022-04-08 09:04:57'),
(9, 'Website Audit', 'DennisSkads', 'marketing@tradeboard.biz', '88413772351', 'Bank accounts', 'Setting up your business in Vanuatu offers unmatched advantages that include but not limited to: \r\n \r\n•	Vanuatu IBCs are tax exempt \r\n•	Domestic taxation is not payable on the net chargeable profits of Exempt and International Companies \r\n•	Vanuatu does not have party in any double taxation treaty with another country \r\n•	It  is not required to hold annual general meetings \r\n•	There is no need to file annual returns \r\n•	The international companies may name natural or legal person as directors, and may be of any nationality \r\n•	There are no exchange controls in Vanuatu \r\n \r\nAt Trade Board Limited, we can help you setup your business in Vanuatu, open local and international corporate  bank accounts and apply for Financial Dealers License (Forex and digital assets) in addition to citizenship and Permanent Residency services in tax haven tropical paradise. \r\n \r\nVisit our website to learn more about our services: \r\nhttps://tradeboard.biz \r\n \r\nOur support team is always available to respond to your inquiries. \r\n \r\nThank You for your time!', NULL, '2022-04-09 09:53:57', '2022-04-09 09:53:57'),
(10, 'SEO', 'Mike Marlow', 'no-replyPhelf@gmail.com', '83974735198', 'Get more dofollow backlinks for erudience.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Marlow\r\n \r\nsupport@digital-x-press.com', NULL, '2022-04-12 08:29:40', '2022-04-12 08:29:40'),
(11, 'Sales Question', 'Alethea Llanes', 'alethea@bulletproofsmtp.org', '06-29466132', 'BulletProofSmtp.org Servers', 'Hello.\r\n\r\nWe are offering Bullet Proof SMTP servers that never get suspended. Email as much as you want.\r\n\r\nDMCA ignored, bulletproof locations, 100% uptime guaranteed, unlimited data transfer, and 24/7/365 support.\r\n\r\n100 Spots available. BulletProofSMTP.org', NULL, '2022-04-13 04:36:29', '2022-04-13 04:36:29'),
(12, 'Others', 'Mike Barrington', 'no-replyPhelf@gmail.com', '88125742972', 'NEW: Semrush Backlinks', 'Howdy \r\n \r\nThis is Mike Barrington\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your erudience.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Barrington\r\n \r\nmike@strictlydigital.net', NULL, '2022-04-20 00:33:46', '2022-04-20 00:33:46'),
(14, 'Website Audit', 'Ronaldunsuh', 'no-replyFleegulkbal@gmail.com', '85246462825', 'A new method of email distribution.', 'Hello!  erudience.com \r\n \r\nWe propose \r\n \r\nSending your commercial proposal through the feedback form which can be found on the sites in the Communication partition. Feedback forms are filled in by our software and the captcha is solved. The advantage of this method is that messages sent through feedback forms are whitelisted. This method raise the chances that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.', NULL, '2022-04-23 23:07:51', '2022-04-23 23:07:51'),
(15, 'Website Audit', 'HenryPeeft', 'lrsgavito1@hotmail.com', '89037874836', 'The success formula is found. Learn more about it.', 'Need cash? Launch this robot and see what it can. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', NULL, '2022-04-24 01:28:54', '2022-04-24 01:28:54'),
(16, 'Others', 'HenryPeeft', 'taylorkinney10@gmail.com', '89030980062', 'Using this Robot is the best way to make you rich.', 'Rich people are rich because they use this robot. https://take-profitnow.life/?u=bdlkd0x&o=x7t8nng', NULL, '2022-04-24 11:15:20', '2022-04-24 11:15:20'),
(17, 'Website Audit', 'HenryPeeft', 'dasilis@hotmail.com', '89032825626', 'Robot is the best way for everyone who looks for financial independence.', 'Still not a millionaire? Fix it now! https://breweriana.it/gotodate/promo', NULL, '2022-04-26 00:06:52', '2022-04-26 00:06:52'),
(18, 'Others', 'HenryPeeft', 'jessica_berryhill6185@yahoo.com', '89032433515', 'Even a child knows how to make money. Do you?', 'This robot can bring you money 24/7. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-08 12:25:01', '2022-05-08 12:25:01'),
(19, 'Web Application', 'HenryPeeft', 'nhlanhlanhlapo6@gmail.com', '89033101902', 'The online income is the easiest ways to make you dream come true.', 'Financial robot is the best companion of rich people. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-08 17:26:40', '2022-05-08 17:26:40'),
(20, 'SEO', 'HenryPeeft', 'volly-ball_chick101@embarqmail.com', '89037564580', 'The best way for everyone who rushes for financial independence.', 'Make yourself rich in future using this financial robot. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-09 02:42:16', '2022-05-09 02:42:16'),
(21, 'Others', 'HenryPeeft', 'ricey_redarmy@ntlworld.com', '89032417612', 'Even a child knows how to make money. This robot is what you need!', 'Earning money in the Internet is easy if you use Robot. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-09 08:01:48', '2022-05-09 08:01:48'),
(22, 'Others', 'HenryPeeft', 'gayu08@yahoo.com', '89033292149', 'Small investments can bring tons of dollars fast.', 'Make thousands of bucks. Financial robot will help you to do it! https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-09 13:05:16', '2022-05-09 13:05:16'),
(23, 'Website Audit', 'JosephgriDs', 'scholtcgs@optusnet.com.au', '88219579248', 'Best NFT For Passive Income - And How To Buy Them', 'How To Earn Passive Income: Play To Earn NFT Games https://telegra.ph/Passive-income-on-NFT-characters-from-1473454-05-08?id39166', NULL, '2022-05-09 15:09:04', '2022-05-09 15:09:04'),
(24, 'SEO', 'HenryPeeft', 'sgaines09@gmail.com', '89030212281', 'Attention! Financial robot may bring you millions!', 'The best way for everyone who rushes for financial independence. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-09 18:39:40', '2022-05-09 18:39:40'),
(25, 'SEO', 'HenryPeeft', 'rjam2308@gmail.com', '89032778794', 'Make money online, staying at home this cold winter.', 'Join the society of successful people who make money here. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-09 23:39:24', '2022-05-09 23:39:24'),
(26, 'Website Audit', 'HenryPeeft', 'lmarie3877@yahoo.com', '89037707993', 'No worries if you are fired. Work online.', 'It is the best time to launch the Robot to get more money. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-10 04:52:10', '2022-05-10 04:52:10'),
(27, 'Others', 'HenryPeeft', 'firepickles@charter.net', '89038848420', 'Everyone can earn as much as he wants suing this Bot.', 'Looking for additional money? Try out the best financial instrument. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-10 09:55:16', '2022-05-10 09:55:16'),
(28, 'SEO', 'JosephgriDs', 'erophilly@live.com.au', '86919292911', 'Quick income from $542806 per week', 'Invest and get from $598009 per month http://yb1c.bagimsiz.click/3c61', NULL, '2022-05-10 11:16:35', '2022-05-10 11:16:35'),
(29, 'Web Application', 'HenryPeeft', 'putralambo@yahoo.com', '89033774289', 'We know how to become rich and do you?', 'Find out about the fastest way for a financial independence. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-10 14:49:29', '2022-05-10 14:49:29'),
(30, 'SEO', 'HenryPeeft', 'kishor_prmr@yahoo.com', '89035712731', 'Feel free to buy everything you want with the additional income.', 'Need money? Earn it without leaving your home. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-11 00:35:06', '2022-05-11 00:35:06'),
(31, 'Others', 'JosephgriDs', 'yara12345@hotmail.com', '89788567943', 'MORE THAN $20,000 PER WEEK!', '$35000 PER WEEK! https://1000usd-for-10-minutes.blogspot.sk/2022/05/how-to-earn-1000-in-10-minutes.html?yes1346134', NULL, '2022-05-11 05:45:28', '2022-05-11 05:45:28'),
(32, 'Website Audit', 'HenryPeeft', 'virgen123@yahoo.com', '89031421921', 'Looking for additional money? Try out the best financial instrument.', 'Make money online, staying at home this cold winter. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-11 19:46:25', '2022-05-11 19:46:25'),
(33, 'Website Audit', 'HenryPeeft', 'sebasvantilborg@hotmail.com', '89034521482', 'Everyone can earn as much as he wants now.', 'Attention! Here you can earn money online! https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-12 00:39:35', '2022-05-12 00:39:35'),
(34, 'SEO', 'Mike Faber', 'no-replyPhelf@gmail.com', '89913185486', 'Get more dofollow backlinks for erudience.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Faber\r\n \r\nsupport@digital-x-press.com', NULL, '2022-05-12 09:02:35', '2022-05-12 09:02:35'),
(35, 'Web Application', 'HenryPeeft', 'ashurii_s@ymail.com', '89035346156', 'Wow! This Robot is a great start for an online career.', 'Making money can be extremely easy if you use this Robot. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-12 16:41:37', '2022-05-12 16:41:37'),
(36, 'SEO', 'HenryPeeft', 'dallas7056@gmail.com', '89031160259', 'Even a child knows how to make money. Do you?', 'The success formula is found. Learn more about it. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-13 07:17:38', '2022-05-13 07:17:38'),
(37, 'Website Audit', 'HenryPeeft', 'no_angel_here73@hotmail.com', '89033659216', 'Wow! This is a fastest way for a financial independence.', 'There is no need to look for a job anymore. Work online. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-13 12:10:08', '2022-05-13 12:10:08'),
(38, 'Web Application', 'HenryPeeft', 'divernon67@inbox.com', '89033288958', 'Make money, not war! Financial Robot is what you need.', 'Just one click can turn you dollar into $1000. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-15 01:43:50', '2022-05-15 01:43:50'),
(39, 'Others', 'HenryPeeft', '110903589@getasiansex.com', '89034242653', 'The online job can bring you a fantastic profit.', 'Trust the financial Bot to become rich. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-15 11:32:45', '2022-05-15 11:32:45'),
(40, 'Others', 'HenryPeeft', 'garoto_27thebest@hotmail.com;2,03568E+13', '89034501976', 'Find out about the easiest way of money earning.', 'Make thousands of bucks. Financial robot will help you to do it! https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-15 16:22:07', '2022-05-15 16:22:07'),
(41, 'SEO', 'HenryPeeft', 'staney.james@gmail.com', '89037396894', 'The online job can bring you a fantastic profit.', 'Your money work even when you sleep. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-16 18:45:29', '2022-05-16 18:45:29'),
(42, 'Others', 'HenryPeeft', 'carolynnmazzei@hotmail.com', '89034272484', 'Your computer can bring you additional income if you use this Robot.', 'This robot will help you to make hundreds of dollars each day. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-17 05:21:06', '2022-05-17 05:21:06'),
(43, 'SEO', 'HenryPeeft', 'zelenia99@yahoo.com', '89030748157', 'The huge income without investments is available, now!', 'Make your computer to be you earning instrument. https://Peeft.187sued.de/gotodate/promo', NULL, '2022-05-17 10:29:52', '2022-05-17 10:29:52'),
(44, 'SEO', 'HenryPeeft', 'diego-munoz23@hotmail.com', '89036130862', 'Attention! Here you can earn money online!', 'Rich people are rich because they use this robot. https://Peeft.187sued.de/gotodate/link', NULL, '2022-05-17 15:40:01', '2022-05-17 15:40:01'),
(45, 'Web Application', 'Mike Blare', 'no-replyPhelf@gmail.com', '85511394111', 'NEW: Semrush Backlinks', 'Hello \r\n \r\nThis is Mike Blare\r\n \r\nLet me present you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your erudience.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Blare\r\n \r\nmike@strictlydigital.net', NULL, '2022-05-17 23:48:11', '2022-05-17 23:48:11'),
(46, 'SEO', 'HenryPeeft', 'guypujk@hotmail.com', '89035117992', 'Thousands of bucks are guaranteed if you use this robot.', 'Make your computer to be you earning instrument. https://Peeft.187sued.de/gotodate/link', NULL, '2022-05-18 01:23:53', '2022-05-18 01:23:53'),
(47, 'SEO', 'JosephgriDs', 'adenakelly6356.ak@gmail.com', '83221679156', 'EARNINGS ON THE INTERNET WITH AN INCOME OF MORE THAN $575660 PER WEEK', 'QUICK INCOME FROM $531655 PER WEEK https://157usd-for-3-minutes.blogspot.mx/p/up-to-5000-per-day.html?id52050', NULL, '2022-05-18 09:11:28', '2022-05-18 09:11:28'),
(49, 'Web Application', 'k76jft kl67roi  uyi 78krds trur https://icloud.com Mi', 'credneckfen1988@mail.ru', 'credneckfen1988@mail.ru', 'jgfh kftuk tfyj fgf https://icloud.com Mi', NULL, NULL, '2022-05-18 13:42:36', '2022-05-18 13:42:36'),
(50, 'SEO', 'HenryPeeft', 'youshouldacilnovesac@gmail.com', '89030931607', 'Financial robot is the best companion of rich people.', 'Everyone can earn as much as he wants now. https://Peeft.187sued.de/gotodate/link', NULL, '2022-05-18 15:59:51', '2022-05-18 15:59:51'),
(51, 'Website Audit', 'HenryPeeft', 'rosa_loli@hotmail.com', '89033594096', 'Check out the newest way to make a fantastic profit.', 'The huge income without investments is available, now! https://Peeft.187sued.de/gotodate/link', NULL, '2022-05-18 21:15:24', '2022-05-18 21:15:24'),
(52, 'Website Audit', 'JosephgriDs', 'rochellefroehlich@gmail.com', '87841981249', '$5000 A DAY!', 'MORE THAN $1500 IN 15 MINUTES! https://telegra.ph/Passive-income-up-to-5000-per-day-05-19?id95196', NULL, '2022-05-19 13:19:41', '2022-05-19 13:19:41'),
(53, 'Web Application', 'HenryPeeft', 'l386k2@yahoo.com', '89030582058', 'Most successful people already use Robot. Do you?', 'Need money? Get it here easily? https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-19 18:01:18', '2022-05-19 18:01:18'),
(54, 'Others', 'HenryPeeft', 'SHOSECLAW@AOL.COM', '89037873597', 'Your money keep grow 24/7 if you use the financial Robot.', 'The huge income without investments is available, now! https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-19 22:51:34', '2022-05-19 22:51:34'),
(55, 'Website Audit', 'JosephgriDs', 'princessytzel14@gmail.com', '88264324696', 'Your site in the TOP of Google in 2 weeks', 'Your site is in the TOP of Google in 2 weeks, safely https://telegra.ph/Your-site-is-in-the-TOP-of-Google-in-2-weeks-safely-05-20-3?id41891', NULL, '2022-05-20 11:40:47', '2022-05-20 11:40:47'),
(56, 'Others', 'HenryPeeft', 'joey.smith88@yahoo.com', '89034408934', 'Making money in the net is easier now.', 'We know how to become rich and do you? https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-21 07:01:52', '2022-05-21 07:01:52'),
(57, 'Web Application', 'HenryPeeft', 'kwsf@sbcglobal.net', '89035362695', 'Looking forward for income? Get it online.', 'Everyone can earn as much as he wants now. https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-21 22:05:05', '2022-05-21 22:05:05'),
(58, 'Others', 'HenryPeeft', 'peza_832002@yahoo.com', '89036141886', 'Attention! Here you can earn money online!', 'Join the society of successful people who make money here. https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-22 03:16:22', '2022-05-22 03:16:22'),
(59, 'Website Audit', 'JosephgriDs', 'lisamlowe1986@gmail.com', '85688643521', 'How to Rank Higher On Google In 2022', 'Improve your site\'s ranking on Google https://telegra.ph/Your-site-is-in-the-TOP-of-Google-in-2-weeks-safely-05-20-3?id91604', NULL, '2022-05-22 08:33:57', '2022-05-22 08:33:57'),
(60, 'Web Application', 'HenryPeeft', 'yldtiger@yahoo.com', '89034996362', 'No need to worry about the future if your use this financial robot.', 'Attention! Financial robot may bring you millions! https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-22 13:05:17', '2022-05-22 13:05:17'),
(61, 'Others', 'HenryPeeft', 'barbhood@ymail.com', '89038537243', 'The online income is your key to success.', 'Start your online work using the financial Robot. https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-22 17:56:13', '2022-05-22 17:56:13'),
(62, 'Website Audit', 'HenryPeeft', 'ronaldanthony@hotmail.com', '89037389560', 'See how Robot makes $1000 from $1 of investment.', 'The financial Robot is your # 1 expert of making money. https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-22 22:49:07', '2022-05-22 22:49:07'),
(63, 'SEO', 'HenryPeeft', 'jiesha_erisari@yahoo.com', '89035715162', 'The best online job for retirees. Make your old ages rich.', 'Make thousands of bucks. Pay nothing. https://Peeft.bookeat.es/gotodate/promo', NULL, '2022-05-23 04:42:01', '2022-05-23 04:42:01'),
(64, 'Web Application', 'HenryPeeft', 'sballard190@sbcglobal.net', '89036786516', 'Need money? Get it here easily! Just press this to launch the robot.', 'The financial Robot is your future wealth and independence. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-23 09:33:20', '2022-05-23 09:33:20'),
(65, 'SEO', 'HenryPeeft', 'yogesh.suthar19@gmail.com', '89030692990', 'This robot will help you to make hundreds of dollars each day.', 'The financial Robot is your # 1 expert of making money. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-23 14:24:07', '2022-05-23 14:24:07'),
(66, 'SEO', 'HenryPeeft', 'esmcdon@optonline.net', '89035589251', 'Make dollars just sitting home.', 'Need cash? Launch this robot and see what it can. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-23 14:40:58', '2022-05-23 14:40:58'),
(67, 'Others', 'HenryPeeft', 'Isodje52@gmail.com', '89033648524', 'Check out the new financial tool, which can make you rich.', 'Financial independence is what this robot guarantees. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-23 14:49:22', '2022-05-23 14:49:22'),
(68, 'Others', 'DavidFaisp', 'ginger.steele71@gmail.com', '89343415742', 'The Best Passive Income Tool From $300 Per Day', 'Bitcoin Era is the best software on the market for automatic earnings on cryptocurrency fluctuations, which has received many positive reviews and awards. \r\nYou don\'t need: \r\n+ understand cryptocurrencies \r\n+ be a trader \r\n+ good at trading \r\nTo start receiving the first income tomorrow, you MUST take 3 simple steps and do nothing else: \r\n1. Register using your personal invitation link: http://7fi.herbalcosomos.shop/26cfc5 \r\n2. Make a deposit to start trading at least $250 \r\n3. In your personal account, click the \"Trade\" button \r\nAfter completing 3 steps, tomorrow you will have at least $300 in your account, which you can transfer to your bank account or bank card. \r\nAlready more than 790,000 people around the world have passive income with the help of our software from $300. \r\nThe greater the amount of money on your personal account in the turnover of trading, the greater the profit, some clients deposited more than $50,000 and their passive income, of course, is more than $30,000 per day. \r\nPassive income will be accrued for life. \r\nHurry up to grab this big piece of the pie: http://m84ni.herbalcosomos.shop/07', NULL, '2022-05-23 17:49:41', '2022-05-23 17:49:41'),
(69, 'Others', 'Charlotte Gabriel', 'charlottegabriel@stayhome.li', '87654798544', 'Online Trading', 'Hello, \r\n \r\nI\'m Charlotte Gabriel, An online trading Coash. I want you to know that online trading (Crypto, Forex and Binary option) is a good thing if you have a good trading strategy, I use to lose a lot of funds in online trading before I got to where I am today. If you need assistance on how to trade and recover back all the money you have lost to your broker and want to be a successful online trader like me, write to me via email below to get an amazing strategy. \r\n \r\nIf you are having problems withdrawing your profit from your Crypto, Forex or Binary option trading account even when you were given a bonus, just contact me, I have worked with some Trade, Regulatory Agencies for 9years, and I have helped a lot of people get back their lost funds from their stubborn brokers successfully and I won\'t stop until I have helped as many as possible. For more info you can contact me via my email address: charlgabriel02@gmail.com \r\n \r\nKind Regards, \r\nCharlotte Gabriel. \r\nTrading Consultant.', NULL, '2022-05-23 21:08:07', '2022-05-23 21:08:07'),
(70, 'Others', 'HenryPeeft', 'williamslaurens@aol.com', '89037151770', 'Make thousands of bucks. Financial robot will help you to do it!', 'Making money can be extremely easy if you use this Robot. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 02:00:10', '2022-05-24 02:00:10'),
(71, 'Web Application', 'HenryPeeft', 'betsygretz@hotmail.com', '89034673618', 'The additional income for everyone.', 'Make thousands every week working online here. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 05:04:11', '2022-05-24 05:04:11'),
(72, 'Web Application', 'HenryPeeft', 'kingboss_09@yahoo.com', '89033558227', 'Only one click can grow up your money really fast.', 'The online financial Robot is your key to success. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 05:27:31', '2022-05-24 05:27:31'),
(73, 'SEO', 'HenryPeeft', 'uncordcow@gmail.com', '89036816420', 'Buy everything you want earning money online.', '# 1 financial expert in the net! Check out the new Robot. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 06:31:40', '2022-05-24 06:31:40'),
(74, 'SEO', 'HenryPeeft', 'hortenziatenzi@yahoo.com', '89030882251', 'We have found the fastest way to be rich. Find it out here.', 'Using this Robot is the best way to make you rich. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 11:06:13', '2022-05-24 11:06:13'),
(75, 'Website Audit', 'HenryPeeft', 'nightlock157@gmail.com', '89039091732', 'Make money, not war! Financial Robot is what you need.', 'The online financial Robot is your key to success. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 11:25:40', '2022-05-24 11:25:40'),
(76, 'Website Audit', 'HenryPeeft', 'chrislater46@hotmail.com', '89033635587', 'The financial Robot is the most effective financial tool in the net!', 'The fastest way to make you wallet thick is here. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 11:26:03', '2022-05-24 11:26:03'),
(77, 'Web Application', 'Josephquilm', 'lucas.vncalves@gmail.com', '86596932919', '1500 Trusted Powerful Links From Google Domains', 'I will create 1500 dofollow anchorless trust powerful links from different Google pages, each page will contain only your link. \r\n \r\nhttps://www.google.com/url?q=https%3A%2F%2Fkwork.com%2Foffpageseo%2F19952492%2F1500-trusted-powerful-links-from-google-domains&sa=D&sntz=1&usg=AOvVaw1HNyyb-hCXW3NpSEeHNpae \r\n \r\nWhat do you get when ordering this kwork: \r\n \r\n1. Maximum Google trust in your site \r\n \r\n2. Grow your site in Google search results for low, mid and sometimes high volume queries \r\n \r\n3. Powerful Backlinks \r\n \r\n4. Advantage over competitors in Google search results \r\n \r\n5. A significant increase in indicators such as DA / PA, for some of our clients, DA increased by 25-50 \r\n \r\n6. A lot of traffic from the Google search engine \r\n \r\nIt is completely safe for your site. \r\n \r\nhttps://www.google.com/url?q=https%3A%2F%2Fkwork.com%2Foffpageseo%2F19952492%2F1500-trusted-powerful-links-from-google-domains&sa=D&sntz=1&usg=AOvVaw1HNyyb-hCXW3NpSEeHNpae', NULL, '2022-05-24 12:31:30', '2022-05-24 12:31:30'),
(78, 'Others', 'HenryPeeft', 'steve@burkroyalty.com', '89038035169', 'Launch the robot and let it bring you money.', 'Check out the newest way to make a fantastic profit. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 16:29:01', '2022-05-24 16:29:01'),
(79, 'SEO', 'HenryPeeft', 'rczmzwtb@privacymailshh.com', '89036671539', 'Learn how to make hundreds of backs each day.', 'Start making thousands of dollars every week. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 16:48:48', '2022-05-24 16:48:48'),
(80, 'Others', 'HenryPeeft', 'Chadhastyped@aol.com', '89034591123', 'Even a child knows how to make $100 today.', 'Make money 24/7 without any efforts and skills. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 19:46:09', '2022-05-24 19:46:09'),
(81, 'SEO', 'HenryPeeft', 'kvarin85@gmail.com', '89033523765', 'This robot can bring you money 24/7.', 'Automatic robot is the best start for financial independence. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 21:25:32', '2022-05-24 21:25:32'),
(82, 'Others', 'HenryPeeft', 'isabemc1112@yahoo.com', '89030619836', 'Online earnings are the easiest way for financial independence.', 'Try out the best financial robot in the Internet. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-24 22:25:46', '2022-05-24 22:25:46'),
(83, 'SEO', 'HenryPeeft', 'hiyrontalon@gmail.com', '89031892289', 'Need money? Earn it without leaving your home.', 'Looking forward for income? Get it online. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 00:40:37', '2022-05-25 00:40:37'),
(84, 'Website Audit', 'HenryPeeft', 'lisarmiller591@gmail.com', '89036034932', 'We know how to increase your financial stability.', 'Everyone can earn as much as he wants suing this Bot. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 04:01:42', '2022-05-25 04:01:42'),
(85, 'SEO', 'HenryPeeft', 'jweaver8547@atlanticbb.net', '89031582832', 'No need to work anymore. Just launch the robot.', 'Make money online, staying at home this cold winter. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 05:33:33', '2022-05-25 05:33:33'),
(86, 'Others', 'HenryPeeft', 'emilysteadman@me.com', '89030597201', 'Need some more money? Robot will earn them really fast.', 'See how Robot makes $1000 from $1 of investment. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 06:43:00', '2022-05-25 06:43:00'),
(87, 'Others', 'HenryPeeft', 'lrds_jeanpierre@yahoo.com', '89036105034', 'Need money? The financial robot is your solution.', 'Only one click can grow up your money really fast. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 09:44:55', '2022-05-25 09:44:55'),
(88, 'Others', 'HenryPeeft', 'e_faubert80@hotmail.com', '89030843945', 'The best online job for retirees. Make your old ages rich.', 'The additional income is available for everyone using this robot. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 10:25:11', '2022-05-25 10:25:11'),
(89, 'Website Audit', 'HenryPeeft', 'semo_20010@ymail.com', '89039790388', 'See how Robot makes $1000 from $1 of investment.', 'Small investments can bring tons of dollars fast. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 11:35:25', '2022-05-25 11:35:25'),
(90, 'Website Audit', 'HenryPeeft', 'dishitianfeng99@hotmail.com', '89033511283', 'Making money can be extremely easy if you use this Robot.', 'Wow! This Robot is a great start for an online career. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 15:29:36', '2022-05-25 15:29:36'),
(91, 'Others', 'JosephgriDs', 'jidori_caname@hotmail.com', '87574741621', 'PEOPLE WORLDWIDE MAKE MONEY ON THE INTERNET FROM $1200 PER DAY WITH HELP SMART SOFTWARE. JOIN NOW', 'SALESMAN, ACCOUNTANT, TAXI DRIVERS WORLDWIDE EARN FROM $1200 IN A DAY VIA SMART SOFTWARE. ACT NOW https://telegra.ph/Income-from-1200-per-day-05-23-5?id91066', NULL, '2022-05-25 16:22:41', '2022-05-25 16:22:41'),
(92, 'Web Application', 'HenryPeeft', 'lavish.liyfe@gmail.com', '89036119258', 'Make dollars staying at home and launched this Bot.', 'The additional income is available for everyone using this robot. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 16:24:33', '2022-05-25 16:24:33'),
(93, 'Others', 'HenryPeeft', 'k.akinmade@aquitanegroup.com', '89032551452', 'The online income is your key to success.', 'Small investments can bring tons of dollars fast. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 21:13:34', '2022-05-25 21:13:34'),
(94, 'SEO', 'HenryPeeft', 'xoairhead@yahoo.com', '89033829237', 'Check out the automatic Bot, which works for you 24/7.', 'Earn additional money without efforts and skills. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-25 21:17:40', '2022-05-25 21:17:40'),
(95, 'Website Audit', 'HenryPeeft', 'tom_mwr@hotmail.com', '89038191871', 'Attention! Here you can earn money online!', 'Making money in the net is easier now. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-26 01:10:04', '2022-05-26 01:10:04'),
(96, 'SEO', 'HenryPeeft', 'cookiee409@Gmail.com', '89032283621', 'The financial Robot is your # 1 expert of making money.', 'Launch the best investment instrument to start making money today. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-26 02:59:30', '2022-05-26 02:59:30'),
(97, 'SEO', 'HenryPeeft', 'simone.alexander5@gmail.com', '89035260030', 'Trust the financial Bot to become rich.', 'Invest $1 today to make $1000 tomorrow. https://Peeft.bookeat.es/gotodate/promotion', NULL, '2022-05-26 06:06:17', '2022-05-26 06:06:17'),
(98, 'Website Audit', 'Mike', 'no-replyPhelf@gmail.com', '81651942515', 'Local SEO for more business', 'Greetings \r\n \r\nWe will increase your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our plans here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency', NULL, '2022-05-26 07:32:53', '2022-05-26 07:32:53'),
(99, 'Website Audit', 'HenryPeeft', 'aqil@yahoo.com', '89034708657', 'The additional income for everyone.', 'Make thousands of bucks. Financial robot will help you to do it! https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 10:11:38', '2022-05-26 10:11:38'),
(100, 'Others', 'HenryPeeft', 'santamonicanewyorkcity@yahoo.com', '89032688126', 'Money, money! Make more money with financial robot!', 'The fastest way to make your wallet thick is found. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 10:58:16', '2022-05-26 10:58:16'),
(101, 'Web Application', 'HenryPeeft', 'michael_mahonjr@yahoo.com', '89033496649', 'Need some more money? Robot will earn them really fast.', 'The online job can bring you a fantastic profit. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 12:47:07', '2022-05-26 12:47:07'),
(102, 'Others', 'HenryPeeft', 'david.cardenas@draftfcb.com', '89037838296', 'Try out the automatic robot to keep earning all day long.', 'The huge income without investments is available. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 15:51:03', '2022-05-26 15:51:03'),
(103, 'Website Audit', 'HenryPeeft', 'Oreo515@aol.com', '89038703987', 'Earn additional money without efforts.', 'Learn how to make hundreds of backs each day. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 15:55:37', '2022-05-26 15:55:37'),
(104, 'Web Application', 'HenryPeeft', 'angelrenn90@sbcglobal.net', '89034723903', 'Make your laptop a financial instrument with this program.', 'Financial independence is what everyone needs. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 20:51:46', '2022-05-26 20:51:46'),
(105, 'Web Application', 'HenryPeeft', 'beettheroot@hotmail.com', '89030482789', 'Thousands of bucks are guaranteed if you use this robot.', 'Check out the new financial tool, which can make you rich. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-26 21:31:43', '2022-05-26 21:31:43'),
(106, 'Others', 'Mike Gilmore', 'no-replyPhelf@gmail.com', '82388897992', 'Strengthen your Domain Authority', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your erudience.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Gilmore', NULL, '2022-05-26 23:00:50', '2022-05-26 23:00:50'),
(107, 'Web Application', 'HenryPeeft', 'fayz15@gmail.com', '89034779256', 'Still not a millionaire? The financial robot will make you him!', 'Have no money? Earn it online. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-27 06:18:23', '2022-05-27 06:18:23'),
(108, 'Others', 'HenryPeeft', 'jet514@yahoo.com', '89031696940', 'Everyone can earn as much as he wants now.', 'Still not a millionaire? Fix it now! https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-27 07:09:50', '2022-05-27 07:09:50'),
(109, 'Others', 'HenryPeeft', 'bobzyc0304@gmail.com', '89030977244', 'Make dollars just sitting home.', 'Looking for an easy way to make money? Check out the financial robot. https://Peeft.battletech-newsletter.de/gotodate/promo', NULL, '2022-05-27 08:13:29', '2022-05-27 08:13:29'),
(110, 'Others', 'HenryPeeft', 'deannix_quieta@yahoo.com', '89030317188', 'Find out about the fastest way for a financial independence.', 'Financial robot is your success formula is found. Learn more about it. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-27 12:27:29', '2022-05-27 12:27:29'),
(111, 'SEO', 'HenryPeeft', 'yugobpowerliftingguy875@ironmantriathlon', '89033109019', 'Attention! Financial robot may bring you millions!', 'The online income is the easiest ways to make you dream come true. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-27 15:14:30', '2022-05-27 15:14:30'),
(112, 'SEO', 'HenryPeeft', 'ml_uct@yahoo.com', '89039020864', 'Even a child knows how to make money. Do you?', 'Make your money work for you all day long. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-27 15:56:44', '2022-05-27 15:56:44'),
(113, 'Others', 'HenryPeeft', 'SANDEEP.MONDAL2009@gmail.com', '89036199922', 'There is no need to look for a job anymore. Work online.', 'Have no money? It’s easy to earn them online here. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-28 19:05:22', '2022-05-28 19:05:22'),
(114, 'Website Audit', 'HenryPeeft', 'pulapula2009157@hotmail.com', '89039042858', 'The additional income for everyone.', 'Launch the robot and let it bring you money. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-28 22:26:46', '2022-05-28 22:26:46'),
(115, 'Others', 'HenryPeeft', 'purkinjie@yahoo.com', '89033026394', 'Making money in the net is easier now.', 'One click of the robot can bring you thousands of bucks. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 00:56:16', '2022-05-29 00:56:16'),
(116, 'Others', 'HenryPeeft', '897558652@163.com', '89039613794', 'Earn additional money without efforts.', 'Feel free to buy everything you want with the additional income. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 01:00:31', '2022-05-29 01:00:31'),
(117, 'Others', 'HenryPeeft', 'jens7062@live.com', '89038471468', 'The online income is your key to success.', 'Join the society of successful people who make money here. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 03:24:03', '2022-05-29 03:24:03'),
(118, 'Web Application', 'HenryPeeft', 'sam_in_da_hoose@hotmail.com', '89033171514', 'Wow! This Robot is a great start for an online career.', 'Everyone can earn as much as he wants now. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 05:55:50', '2022-05-29 05:55:50'),
(119, 'Others', 'HenryPeeft', 'dodonegm@yahoo.com', '89033087500', 'No need to stay awake all night long to earn money. Launch the robot.', 'Everyone can earn as much as he wants now. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 08:18:18', '2022-05-29 08:18:18'),
(120, 'Website Audit', 'HenryPeeft', 'lorrieclanton@yahoo.com', '89030680520', 'The best online job for retirees. Make your old ages rich.', 'Try out the best financial robot in the Internet. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 17:43:49', '2022-05-29 17:43:49'),
(121, 'Web Application', 'HenryPeeft', 'tayfunus@hotmail.com', '89033535679', 'Check out the automatic Bot, which works for you 24/7.', 'Financial independence is what everyone needs. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-29 18:11:03', '2022-05-29 18:11:03'),
(122, 'Web Application', 'HenryPeeft', 'szeykinam@hotmail.com', '89034256571', 'Make thousands of bucks. Pay nothing.', 'Make money, not war! Financial Robot is what you need. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 05:23:54', '2022-05-30 05:23:54'),
(123, 'SEO', 'HenryPeeft', 'qedodulbynlieta@hotmail.com', '89032441416', 'Feel free to buy everything you want with the additional income.', 'Attention! Financial robot may bring you millions! https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 08:40:11', '2022-05-30 08:40:11'),
(124, 'Others', 'HenryPeeft', 'xestiex@yahoo.com', '89037305962', 'The best online job for retirees. Make your old ages rich.', 'Looking for additional money? Try out the best financial instrument. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 09:24:08', '2022-05-30 09:24:08'),
(125, 'Others', 'HenryPeeft', 'dukeofnukes@hotmail.com', '89031287689', 'Small investments can bring tons of dollars fast.', 'Small investments can bring tons of dollars fast. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 16:42:44', '2022-05-30 16:42:44'),
(126, 'Web Application', 'HenryPeeft', 'yakirbn1@gmail.com', '89036070654', 'Try out the best financial robot in the Internet.', 'Financial robot is the best companion of rich people. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 16:45:14', '2022-05-30 16:45:14'),
(127, 'Others', 'HenryPeeft', 'rajusn9@gmail.com', '89038109473', 'Financial independence is what this robot guarantees.', 'Need money? The financial robot is your solution. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-30 21:38:15', '2022-05-30 21:38:15'),
(128, 'Web Application', 'Mike Crossman', 'no-replyPhelf@gmail.com', '84223432392', 'whitehat monthly SEO plans', 'Greetings \r\n \r\nI have just took an in depth look on your  erudience.com for  the current search visibility and saw that your website could use an upgrade. \r\n \r\nWe will improve your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our plans here, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart improving your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Crossman\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de', NULL, '2022-05-31 00:37:05', '2022-05-31 00:37:05'),
(129, 'Web Application', 'HenryPeeft', 'sad_-but-_true@hotmail.com', '89033623237', 'The best online job for retirees. Make your old ages rich.', 'Earning money in the Internet is easy if you use Robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 04:04:44', '2022-05-31 04:04:44'),
(130, 'Others', 'HenryPeeft', 'robertio12@hotmail.com', '89034766508', 'Let your money grow into the capital with this Robot.', 'Making money can be extremely easy if you use this Robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 04:09:53', '2022-05-31 04:09:53'),
(131, 'Website Audit', 'HenryPeeft', 'brebreface420@yahoo.com', '89039842135', 'Robot is the best solution for everyone who wants to earn.', 'Looking for an easy way to make money? Check out the financial robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 09:41:10', '2022-05-31 09:41:10'),
(132, 'Website Audit', 'HenryPeeft', 'Harshvirparmar@gmail.com', '89033328024', 'The huge income without investments is available.', 'The best way for everyone who rushes for financial independence. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 09:48:05', '2022-05-31 09:48:05'),
(133, 'SEO', 'HenryPeeft', 'pro.vip.group.102@gmail.com', '89039543190', 'Earn additional money without efforts and skills.', 'Make $1000 from $1 in a few minutes. Launch the financial robot now. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 14:08:36', '2022-05-31 14:08:36'),
(134, 'Others', 'HenryPeeft', 'd.r.u.gstore.egh.y@gmail.com', '89037737493', 'Make money online, staying at home this cold winter.', 'Everyone who needs money should try this Robot out. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 14:37:41', '2022-05-31 14:37:41'),
(135, 'SEO', 'HenryPeeft', 'lynn@lbcmarketing.com', '89034601615', 'The financial Robot is your future wealth and independence.', 'Making money can be extremely easy if you use this Robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 15:14:06', '2022-05-31 15:14:06'),
(136, 'Others', 'HenryPeeft', 'tutor11@163.com', '89030992823', 'Watch your money grow while you invest with the Robot.', 'Even a child knows how to make money. Do you? https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-05-31 20:47:35', '2022-05-31 20:47:35'),
(137, 'Website Audit', 'HenryPeeft', 'tolla62.mb@gmail.com', '89033200383', 'The financial Robot is the most effective financial tool in the net!', 'The financial Robot works for you even when you sleep. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 00:10:27', '2022-06-01 00:10:27'),
(138, 'Web Application', 'HenryPeeft', 'djdaugherty@stny.rr.com', '89031271154', 'Make your laptop a financial instrument with this program.', 'Make your laptop a financial instrument with this program. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 05:13:32', '2022-06-01 05:13:32'),
(139, 'Web Application', 'HenryPeeft', 'rstoutman@yahoo.com', '89030546123', 'Earn additional money without efforts and skills.', 'No need to work anymore while you have the Robot launched! https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 08:06:26', '2022-06-01 08:06:26'),
(140, 'SEO', 'HenryPeeft', '1a53582601@nedt.com', '89035955969', 'The financial Robot is your future wealth and independence.', 'Start making thousands of dollars every week. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 10:05:59', '2022-06-01 10:05:59'),
(141, 'Others', 'HenryPeeft', 'adrianinho-47@hotmail.com', '89030306578', 'Looking for an easy way to make money? Check out the financial robot.', 'Start making thousands of dollars every week just using this robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 13:38:30', '2022-06-01 13:38:30'),
(142, 'Web Application', 'HenryPeeft', 'shadia_deeb@yahoo.com', '89033151065', 'The online income is the easiest ways to make you dream come true.', 'Buy everything you want earning money online. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 14:57:11', '2022-06-01 14:57:11'),
(143, 'Website Audit', 'HenryPeeft', 'rainyting@hotmail.com', '89031353982', 'Need money? Earn it without leaving your home.', 'Even a child knows how to make $100 today with the help of this robot. https://Peeft.battletech-newsletter.de/Peeft', NULL, '2022-06-01 15:08:27', '2022-06-01 15:08:27');
INSERT INTO `contacts` (`id`, `department`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(144, 'Web Application', 'Zuki Chang', 'info.meiwa@via.tokyo.jp', '88776471376', 'Company Representative Agent Request', 'Hello, \r\n \r\nIf you are based in the United States of America, Meiwa Corporation Co, Ltd urgently needs you to serve as her Spokesperson/Financial Coordinator for its clients in the United States. It\'s a part-time job with a good pay and will only take a few minutes of your time daily, and it will not bring any conflict of interest in case you are working with another company. If interested, contact email: info@meiwacorporations.com \r\n \r\n \r\nBest Regards \r\nZuki Chang \r\nMeiwa Corporation co.Ltd. \r\n3-chome, Chiyoda-ku, \r\nTokyo 100-8311, Japan', NULL, '2022-06-01 21:10:50', '2022-06-01 21:10:50'),
(145, 'Website Audit', 'HenryPeeft', 'RookTessa9292@o2.pl', '89032453393', 'The success formula is found. Learn more about it.', 'Start making thousands of dollars every week just using this robot. https://Peeft.bode-roesch.de/Peeft', NULL, '2022-06-03 04:24:22', '2022-06-03 04:24:22'),
(146, 'Website Audit', 'Joseph', 'donotreply@donotreply.com', '555-555-5555', 'Go Fish Is New Type of Investor', 'Go Fish wants to invest into your eCommerce site. https://www.GoFishCapital.com', NULL, '2022-06-07 21:15:06', '2022-06-07 21:15:06'),
(147, 'Others', 'Mike Campbell', 'no-replyPhelf@gmail.com', '85135851685', 'Get more dofollow backlinks for erudience.com', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Campbell\r\n \r\nsupport@digital-x-press.com', NULL, '2022-06-08 21:03:47', '2022-06-08 21:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_status` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `slug`, `details`, `cost`, `discount`, `teacher`, `duration`, `start_date`, `end_date`, `image`, `views`, `keywords`, `meta_description`, `f_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Design Bangla Course - Basic to Advance', 'basic-to-advance-web-design', '<h1 style=\"text-align:center\"><strong>WEB DESIGN COURSE MODULE</strong></h1>\r\n\r\n<h3><br />\r\n<strong>INTRODUCTION OF WEB TECHNOLOGIES</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Careers in Web Technologies</p>\r\n\r\n<p style=\"margin-left:40px\">2. How Websites are working</p>\r\n\r\n<p style=\"margin-left:40px\">3. Domain hosting and Server</p>\r\n\r\n<p style=\"margin-left:40px\">4. About Static and Dynamic Websites</p>\r\n\r\n<p style=\"margin-left:40px\">5. Environment Setup</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>HTML (HYPERTEXT MARK UP LANGUAGE)</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Introduction of Languages</p>\r\n\r\n<p style=\"margin-left:40px\">2. Version in HTML</p>\r\n\r\n<p style=\"margin-left:40px\">3. Rules and basic Syntax in HTML</p>\r\n\r\n<p style=\"margin-left:40px\">4. HTML Elements ,attributes and Values</p>\r\n\r\n<p style=\"margin-left:40px\">5. HTML Elements  Formatting Elements  Image related Elements  Listing Elements</p>\r\n\r\n<p style=\"margin-left:40px\">6. Anchor Tag  Hyper-Links  Email Links  Named Anchor Links</p>\r\n\r\n<p style=\"margin-left:40px\">7. IFrames</p>\r\n\r\n<p style=\"margin-left:40px\">8. Media Tags</p>\r\n\r\n<p style=\"margin-left:40px\">9. Lists</p>\r\n\r\n<p style=\"margin-left:40px\">10. Stretcher Designing Tags</p>\r\n\r\n<p style=\"margin-left:40px\">11. Formatting Tags Tables</p>\r\n\r\n<p style=\"margin-left:40px\">12.Divs &amp; Section (table less designing)</p>\r\n\r\n<p style=\"margin-left:40px\">13. Form Related elements and attributes</p>\r\n\r\n<p style=\"margin-left:40px\">14. Meta Tags</p>\r\n\r\n<p style=\"margin-left:40px\">15. Linking external scripts to HTML document</p>\r\n\r\n<p style=\"margin-left:40px\">16. Favicon</p>\r\n\r\n<p style=\"margin-left:40px\">17. Other important Tags</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>CSS (Cascading Style Sheets)</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Basic Introduction to CSS</p>\r\n\r\n<p style=\"margin-left:40px\">2. Advantages with CSS in HTML documents</p>\r\n\r\n<p style=\"margin-left:40px\">3. Types of CSS  Inline CSS  Internal CSS  External CSS</p>\r\n\r\n<p style=\"margin-left:40px\">4. Selectors in CSS  Type Selector  ID Selector  Class Selector  Nesting</p>\r\n\r\n<p style=\"margin-left:40px\">Selector  Child Selector  Attribute Selector  Other useful Selectors</p>\r\n\r\n<p style=\"margin-left:40px\">5. CSS Basic Syntax</p>\r\n\r\n<p style=\"margin-left:40px\">6. CSS Properties  Type Properties  Background Properties  Block Properties</p>\r\n\r\n<p style=\"margin-left:40px\"> Border Properties  Box Properties  List Properties  Positioning</p>\r\n\r\n<p style=\"margin-left:40px\">Properties  Max height &amp;width, Min height &amp;width Properties.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Bootstrap</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Introduction.</p>\r\n\r\n<p style=\"margin-left:40px\">2. Download &amp; Setup.</p>\r\n\r\n<p style=\"margin-left:40px\">3. Customize.</p>\r\n\r\n<p style=\"margin-left:40px\">4. Layout.</p>\r\n\r\n<p style=\"margin-left:40px\">5. Content.</p>\r\n\r\n<p style=\"margin-left:40px\">6. Forms.</p>\r\n\r\n<p style=\"margin-left:40px\">7. Components.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>PLANNING A BASIC WEBSITE</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Client Requirement Analysis</p>\r\n\r\n<p style=\"margin-left:40px\">2. Planning Subpages and Categories</p>\r\n\r\n<p style=\"margin-left:40px\">3. Basic Guidelines while planning Sites</p>\r\n\r\n<p style=\"margin-left:40px\">4. Choosing Good Styles &amp; Sizes for Templates</p>\r\n\r\n<p style=\"margin-left:40px\">5. How to distribute work responsibilities as per requirement?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Others</strong></h3>\r\n\r\n<p style=\"margin-left:40px\"> Basic knowledge of JavaScript (ES6).</p>\r\n\r\n<p style=\"margin-left:40px\"> Using JQuery</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>WordPress Theme Customization</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Introduction.</p>\r\n\r\n<p style=\"margin-left:40px\">2. Setup environment.</p>\r\n\r\n<p style=\"margin-left:40px\">3. Install WordPress.</p>\r\n\r\n<p style=\"margin-left:40px\">4. Theme installation.</p>\r\n\r\n<p style=\"margin-left:40px\">5. Plugin installation.</p>\r\n\r\n<p style=\"margin-left:40px\">6. Post &amp; Category.</p>\r\n\r\n<p style=\"margin-left:40px\">7. Blog project creation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>WEB HOSTING</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Introduction to Web Hosting</p>\r\n\r\n<p style=\"margin-left:40px\">2. Types of domains</p>\r\n\r\n<p style=\"margin-left:40px\">3. Hosting types</p>\r\n\r\n<p style=\"margin-left:40px\">4. Control panel management  Creating Emails  Making sub-domains</p>\r\n\r\n<p style=\"margin-left:40px\">5. Installing CMS  Other useful options in Panel</p>\r\n\r\n<p style=\"margin-left:40px\">6. Uploading &amp; downloading files</p>\r\n\r\n<p style=\"margin-left:40px\">7. Site management</p>\r\n\r\n<p style=\"margin-left:40px\">8. Configure Domain names and Hosting panels</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Extra RESOURCES You Will Get FROM US</strong></h3>\r\n\r\n<p style=\"margin-left:40px\">1. Premium WordPress themes.</p>\r\n\r\n<p style=\"margin-left:40px\">2. Premium WordPress Plugins.</p>\r\n\r\n<p style=\"margin-left:40px\">&nbsp;</p>', 'Free', NULL, 'Sufian Jalali', '36 Minutes', '1st April 2022', NULL, 'image/course/MWw6OqWzi8j50PVO51yBVE8lY0KBaUOORWQuHrrP.png', 0, 'web design course, bangla web design course, basic to advance web design course, erudience web design course, erudience it, erudience course', 'Basic to Advance Web Design By Erudience IT', NULL, 1, '2022-04-08 17:15:27', '2022-04-08 19:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `category_id`, `course_id`, `created_at`, `updated_at`) VALUES
(6, 1, 1, '2022-04-08 19:38:24', '2022-04-08 19:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `course_classes`
--

CREATE TABLE `course_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_classes`
--

INSERT INTO `course_classes` (`id`, `course_id`, `title`, `video_link`, `details`, `duration`, `date`, `views`, `status`, `created_at`, `updated_at`) VALUES
(51, 1, 'Setup Environment & Learning Structure', 'https://www.youtube.com/embed/IG0uCAmx4cY', NULL, '36 minutes', '2022-04-08', 0, 1, '2022-05-18 14:07:36', '2022-05-18 14:07:36'),
(52, 1, 'HTML Elements & Attributes', 'https://www.youtube.com/embed/ydG1HFWRz2A', NULL, '1 hour 13 minutes', '2022-04-10', 0, 1, '2022-05-18 14:07:36', '2022-05-18 14:07:36'),
(53, 1, 'Form Elements & Introducing Bootstrap', 'https://www.youtube.com/embed/APG2IL8FvVM', NULL, '1 hour 19 minutes', '2022-04-12', 0, 1, '2022-05-18 14:07:36', '2022-05-18 14:07:36'),
(54, 1, 'Website Design from Scratch', 'https://www.youtube.com/embed/B645t5BR7Ec', NULL, '1 hour 34 minutes', '2022-05-14', 0, 1, '2022-05-18 14:07:36', '2022-05-18 14:07:36'),
(55, 1, 'Ongoing Project', 'https://www.youtube.com/embed/FJhP03mfN_k', NULL, '56 minutes 8 seconds', '2022-05-18', 0, 1, '2022-05-18 14:07:36', '2022-05-18 14:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `course_users`
--

CREATE TABLE `course_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'How does digital marketing help local and small businesses attract more customers?', '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\">Digital marketing helps local and small businesses attract more customers by increasing their visibility online. When people search for businesses or products online, they are more likely to find businesses that have a strong online presence. By creating a website and using social media, local and small businesses can reach a larger audience and attract more customers. Additionally, digital marketing can help businesses to target specific audiences through paid advertising, such as Google AdWords or Facebook Ads. By targeting potential customers who are most likely to be interested in what they have to offer, businesses can increase the chances of conversion and attract more customers.</span></span></span></span></p>', 1, '2022-04-09 00:43:11', '2022-04-09 00:43:11'),
(2, 'How can technical advancement help your small business to grow?', '<p>Technical advancement can help your small business to grow in many ways. The most obvious way is by providing you with new and improved tools to help you work more efficiently and effectively. For example, new software can help you automate tasks or keep better track of your inventory. New hardware can make it easier for you to connect with customers and partners. In addition, technical advances can also help you reach new markets and tap into new customer segments. For example, if you sell products online, new technology can help you reach a global audience. Finally, technical advances can also help you improve your customer service and support. For example, if you use live chat on your website, you can provide immediate assistance to customers who have questions or need help.</p>', 1, '2022-04-09 00:44:01', '2022-04-09 00:44:01'),
(3, 'How do I get accurate small business advice and strategy?', '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\">There are a few things you can do to get accurate small business advice and strategy:</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\"><strong>1. Research your options -&nbsp;</strong>When it comes to small business advice and strategy, there are a lot of options out there. Be sure to research your options and find the one that best suits your needs.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\"><strong>2. Ask for recommendations -</strong>&nbsp;If you know someone who has a successful small business, ask them for recommendations on where to get accurate advice and strategy.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\"><strong>3. Check out online resources</strong> -&nbsp;There are a lot of great online resources available for small businesses. Be sure to check out these resources and find the ones that best fit your needs.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Roboto,sans-serif\"><span style=\"color:#282829\"><span style=\"background-color:#ffffff\"><strong>4. Hire a consultant</strong> -&nbsp;If you want the most accurate and up-to-date advice and strategy, consider hiring a consultant. A good consultant will be able to provide you with the latest information and help you create a custom plan for your business.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-04-09 00:46:20', '2022-04-09 00:46:20'),
(4, 'How Can A Local Small Business Increase Foot Traffic?', '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">There are many tactics to this, but one thing that is certain is that a small business has to reach out more than a large company. Here are two smart ways anyone, big or small, can increase foot traffic.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">1) Tell customers and your neighborhood about your promotional campaigns, opening hours or discounts you&rsquo;re offering at the moment. You can do it using channels like email marketing or text message marketing. Make sure that all of your offers have some sort of offer ID so buyers can mix them up and buy the wrong product by mistake.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">2) Take pictures often and share them on social media platforms like Facebook and Instagram at the locations they were captured with words related to the picture so they are easier to find on those platforms with an appropriate.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-04-09 00:47:43', '2022-04-09 00:47:43'),
(5, 'How do I gain quick SEO wins and maximize business impact with a small team?', '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">You can outsource some tasks to third parties to free up your time and resources. Social Ads and instant articles from Google are some of the recommended tools for those in a small team.</span></span></span></span></p>\r\n\r\n<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">You should also learn about systematic planning and outline strategies for achieving your goals such as building trust with customers. Putting more thought into considerations of scale, accessibility, site design and intentional UX will also be beneficial during the page development process.</span></span></span></span></p>\r\n\r\n<p>&nbsp;</p>', 1, '2022-04-09 00:48:09', '2022-04-09 00:48:09'),
(6, 'Why do so many small businesses fail?', '<p><span style=\"font-size:11.5pt\"><span style=\"font-family:Arial\"><span style=\"color:#000000\"><span style=\"background-color:#ffffff\">Small businesses fail because they don&#39;t know how to leverage the right growth channels. In order to continue growing, you need to be in touch with your customers and have a plan of how you are going to engage them. If your customers start going to competitors instead of you, it&#39;s over. At the beginning, especially for an online business, it is critical to get as many people as possible and get their information so that you can communicate with them in the future. Cold calling can be an effective way of doing this. The more people that start using your app or website and give you their information, the better off your business will be in the future.</span></span></span></span></p>', 1, '2022-04-09 00:48:25', '2022-04-09 00:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `get_quotes`
--

CREATE TABLE `get_quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `s_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `get_quote_lists`
--

CREATE TABLE `get_quote_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `get_quote_id` bigint(20) UNSIGNED NOT NULL,
  `list` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hero_slogans`
--

CREATE TABLE `hero_slogans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slogan_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hero_slogans`
--

INSERT INTO `hero_slogans` (`id`, `slogan_title`, `slogan_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'We Develop Digital Software, Products and Services.', 'Creating fusion of visual design and technology to make awesome products that feel great on every desktop and mobile device also perform efficiently with minimum resource utilization and maximum performance.', 1, '2022-04-01 13:27:00', '2022-04-01 13:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `information_setups`
--

CREATE TABLE `information_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hero_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unique_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_project` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `happy_clients` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supported_staff` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `daily_solution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quora_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discord_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information_setups`
--

INSERT INTO `information_setups` (`id`, `title`, `hero_title`, `email`, `phone_1`, `phone_2`, `address`, `fb_link`, `year_experience`, `unique_project`, `total_project`, `happy_clients`, `supported_staff`, `service_time`, `certificate`, `daily_solution`, `twitter_link`, `quora_link`, `linkedin_link`, `instagram_link`, `youtube_link`, `github_link`, `pinterest_link`, `telegram_link`, `whatsapp_link`, `discord_link`, `description`, `keywords`, `short_about`, `copyright`, `logo`, `footer_logo`, `favicon`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'Erudience IT & Solutions', 'Creative Innovation For Digital Solution', 'erudienceit@gmail.com', '01788358314', NULL, 'Sylhet, Bangladesh', 'https://www.facebook.com/erudience', '4+', '20+', '60+', '80+', '6', '24/7', '7', '20+', NULL, 'https://www.quora.com/profile/Erudience-IT', 'https://www.linkedin.com/company/erudience-it-agency/', 'https://www.instagram.com/erudience/', 'https://www.youtube.com/channel/UCbslgAhGK6aMuu0nlPNi5Fw', NULL, 'https://www.pinterest.com/erudienceit', NULL, NULL, NULL, 'Welcome to Erudience IT & Solutions Agency, your number one source for all things related to IT Industry. We\'re dedicated to giving you the very best of IT Solutions with a focus on quality and real-world problem solutions.', 'it institute, software company, digital marketing agency, seo analyzer, web application development, wordpress development, ecommerce website', 'We\'re dedicated to giving you the very best of IT Solutions with a focus on quality and real-world problem solutions.', 'Copyright @ Erudience IT 2022, All Rights Reserved', 'image/setting/y8pmKpH0xhFg3U6bgnOF4AlqsdZAGmHt4vC0Fqwi.png', 'image/setting/UmEfuZl6qt5aDmKskeNHvbkAGeeaafz5bPSsW9c0.png', 'image/setting/mi7S6NWJM9WaJnseJYo8DEqGH5guSvhzyNHtfn1o.png', 'image/setting/Ov34XUJpfa0ayLIFdZrCF84HH3qyltZi6QVTotHA.jpg', '2022-04-01 08:25:47', '2022-04-15 23:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `licence_infos`
--

CREATE TABLE `licence_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `licence_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `licence_infos`
--

INSERT INTO `licence_infos` (`id`, `licence_info`, `views`, `created_at`, `updated_at`) VALUES
(1, '<h2><strong>License Information</strong></h2>\r\n\r\n<p>At Erudience, accessible from https://erudience.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Erudience and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Erudience. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the&nbsp;<a href=\"https://www.privacypolicygenerator.info/\">Free Privacy Policy Generator</a>.</p>', 0, '2022-04-01 14:25:34', '2022-04-01 14:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_22_180031_create_user_details_table', 1),
(6, '2022_03_23_112458_create_information_setups_table', 1),
(7, '2022_03_23_152948_create_background_media_table', 1),
(8, '2022_03_23_182511_create_hero_slogans_table', 1),
(9, '2022_03_24_071505_create_testimonials_table', 1),
(10, '2022_03_24_085918_create_project_clients_table', 1),
(11, '2022_03_24_134518_create_skill_brands_table', 1),
(12, '2022_03_24_161719_create_work_galleries_table', 1),
(13, '2022_03_24_161720_create_category_blogs_table', 1),
(14, '2022_03_25_060246_create_blogs_table', 1),
(15, '2022_03_25_060247_create_blog_categories_table', 1),
(16, '2022_03_26_084226_create_company_intros_table', 1),
(17, '2022_03_26_105941_create_our_stories_table', 1),
(18, '2022_03_26_134014_create_our_timelines_table', 1),
(19, '2022_03_26_141322_create_our_services_table', 1),
(20, '2022_03_26_153442_create_our_skills_table', 1),
(21, '2022_03_26_183642_create_privacies_table', 1),
(22, '2022_03_26_191328_create_terms_table', 1),
(23, '2022_03_26_194334_create_refund_policies_table', 1),
(24, '2022_03_26_200046_create_licence_infos_table', 1),
(25, '2022_03_26_211705_create_faqs_table', 1),
(26, '2022_03_27_080340_create_get_quotes_table', 1),
(27, '2022_03_27_083115_create_get_quote_lists_table', 1),
(28, '2022_03_27_102905_create_basic_share_hostings_table', 1),
(29, '2022_03_27_144405_create_basic_shared_hosting_lists_table', 1),
(30, '2022_03_28_073749_create_category_portfolios_table', 1),
(31, '2022_03_28_073750_create_portfolios_table', 1),
(32, '2022_03_28_073751_create_portfolio_categories_table', 1),
(33, '2022_03_30_150959_create_social_shares_table', 1),
(34, '2022_03_30_224549_create_category_courses_table', 1),
(35, '2022_03_30_225254_create_courses_table', 1),
(36, '2022_03_30_230939_create_course_classes_table', 1),
(37, '2022_03_31_143245_create_course_users_table', 1),
(38, '2022_03_31_143429_create_course_categories_table', 1),
(39, '2022_04_01_125841_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `m_status` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `title`, `slug`, `slogan`, `body`, `image`, `meta_description`, `keywords`, `views`, `m_status`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Responsive Web Design', 'responsive-web-design', 'A solution for your web application design focused on creativity and usability, ease of use, and navigation.', '<p>A solution for your web application design focused on creativity and usability, ease of use, and navigation.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Our service is about creating an incredible website for your business.</strong>&nbsp;&nbsp; &nbsp;</h3>\r\n\r\n<ul>\r\n	<li>Our professional designer will design a logo for your business.</li>\r\n	<li>Our Web Designers will do the perfect UI &amp; UX design for your website.</li>\r\n	<li>Our Web Developers will code the website in a way you or your team can easily maintain it from the admin dashboard.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services we provide?</strong>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>100% unique design</li>\r\n	<li>100% Quality Work</li>\r\n	<li>Validated W3C</li>\r\n	<li>Professional and Creative Design</li>\r\n	<li>Source files for better development</li>\r\n	<li>If needed, then we can also help a developer</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience. We create modern, clean, and elegant creative designs with a strong focus on user experience and usability.</strong></p>', 'image/about/our-service/nRZmzPYKpWo776ApQfCOdn4Pt4q5FjcbKan83ZoL.png', 'Responsive web design, or RWD, is a matter of planning and coding a website to render well on a variety of devices, from the smallest mobile phone to the largest desktop computer.', 'responsive web design, web design service, web design service in bangladesh, web design service in sylhet, web designer in sylhet, best web designer in bangladesh, web design agency in bangladesh', 0, 1, 1, '2022-04-08 21:46:41', '2022-04-08 22:12:06'),
(6, 'Web Application Development', 'web-application-development', 'Web application development is the process of developing a web-based software application.', '<p>If you&#39;re looking to build a website, you might want to consider the benefits of outsourcing it to an experienced backend developer. There are a lot of benefits to working with a professional web design company. This blog will show you how our backend developers can help you build a professional website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services we provide -</strong>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>Frontend development&nbsp;</li>\r\n	<li>Backend development&nbsp;</li>\r\n	<li>SEO Optimized Structure</li>\r\n	<li>Ecommerce online store with payment gateways</li>\r\n	<li>High-Quality Code with fully Responsive Design</li>\r\n	<li>Easy to use admin panel and User Manual to manage your website later.</li>\r\n	<li>Social media integration and Google Analytics Installation</li>\r\n	<li>Secure architecture with no security issues and bugs</li>\r\n	<li>Uploading and Configuring your final Website to your domain</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Why choose us?</strong></h3>\r\n\r\n<ul>\r\n	<li>10 Years of Experience in this industry</li>\r\n	<li>Lifetime Premium Support</li>\r\n	<li>Quick Communication, Regular Updates</li>\r\n	<li>Free Consultation</li>\r\n	<li>Money-back guaranty</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'image/about/our-service/upM5QLRGI0z4Nz8oAM1pMRjkexy229v7fRPJR45w.png', 'Web application development is the process of developing a web-based software application.', 'web development, web development service, web development service in bangladesh, web development service in sylhet, web developer in sylhet, best web developer in bangladesh, web development agency in bangladesh', 0, 1, 1, '2022-04-08 22:24:09', '2022-04-08 22:30:06'),
(7, 'WordPress Development', 'wordpress-development', 'We provide high-quality WordPress Development and designing services at economical prices.', '<p>We serve our experience for your business to grow effectively worldwide. We provide all kinds of WordPress services with a strong focus on&nbsp;<strong>WordPress SEO</strong>.&nbsp;Our WordPress developers work on all of our projects with absolute devotion and perfection, we will help you to get your site up and running.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Here are the services we will provide you :</strong></h3>\r\n\r\n<ul>\r\n	<li>Professional and responsive WP website&nbsp;</li>\r\n	<li>Customization &amp; WordPress Development</li>\r\n	<li>Premium themes and plugins&nbsp;</li>\r\n	<li>Get any kind of custom WordPress design&nbsp;</li>\r\n	<li>3rd party API/ services integration&nbsp;</li>\r\n	<li>Highly Focus on typography, usability, and user- experience&nbsp;</li>\r\n	<li>WP Blog, Business, complex e-commerce management&nbsp;&nbsp;</li>\r\n	<li>E-commerce and various payment gateways integration in website&nbsp;</li>\r\n	<li>Fully SEO and speed optimized&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Why choose us?</strong>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>&nbsp;Our designs convert your site visitors into your customers!&nbsp;</li>\r\n	<li>&nbsp;Deliver the right product for your business.&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'image/about/our-service/LYM0sLpoyiwGsXkqUZql7Drp8W6WU53YoGuqCR8X.png', 'We provide high-quality WordPress Development and designing services at economical prices. We have extensive experience developing WordPress themes and plugins and have implemented many of such solutions for numerous business needs.', 'wordpress development, wordpress development service, wordpress development service in bangladesh, wordpress development service in sylhet, wordpress developer in sylhet, best wordpress developer in bangladesh, web development agency in bangladesh', 0, 1, 1, '2022-04-08 22:48:36', '2022-04-08 22:48:36'),
(8, 'Search Engine Optimization', 'search-engine-optimization', 'Search Engine Optimization is the process of adapting web pages, online marketing, and internet advertising so that a website is more likely to be found by search engines.', '<p>Google has a number of different ways in which it is able to deliver organic search results. You might have noticed that for every search you make, the top match varies. In fact, Google has been so good at engaging users that the search engine has become the first choice. But, if you want your site to rank well on the first page, it is not that simple. That&rsquo;s where we came in. We provide&nbsp;<a href=\"https://www.fiverr.com/erudience_it/seoservices-onpageoptimization-audit-contentwriting-blogwriting-keywordresearch\"><strong><u>professional monthly SEO services.</u></strong></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services we provide -&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Niche based content writing with proper keyword research</li>\r\n	<li>High CPC keyword research</li>\r\n	<li>KGR keyword research</li>\r\n	<li>Complete On-page and Off-page optimization</li>\r\n	<li>Technical SEO</li>\r\n	<li>Website Audit&nbsp;</li>\r\n	<li>Create high-quality backlinks&nbsp;</li>\r\n	<li>Competitor Analysis</li>\r\n	<li>Creative and professional Content writing&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Why choose us?</strong>&nbsp;</h3>\r\n\r\n<ul>\r\n	<li>We provide quality full monthly SEO services</li>\r\n	<li>ZERO plagiarism in content writing&nbsp;</li>\r\n	<li>Keyword Golden Ratio check</li>\r\n	<li>An audit report of website and content</li>\r\n	<li>Regular Updates</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'image/about/our-service/C0narnD3KWk6R8RTlgNE2zhKWHan83id5HVp57Wm.png', 'Search Engine Optimization is the process of adapting web pages, online marketing, and internet advertising so that a website is more likely to be found by search engines.', 'search engine optimization, monthly seo services, monthly professional seo services, seo services in bangladesh, seo agency in bangladesh', 0, 1, 1, '2022-04-08 23:07:29', '2022-04-08 23:07:29'),
(9, 'Keyword Research', 'keyword-research', 'Keyword research is the most important aspect of on-line marketing.', '<p><strong>In-depth Keyword research</strong> is an essential part of a successful online business. It helps you find out what people are searching for and tailor your website/blog content to meet that demand. The more targeted your efforts are, the more likely they will successfully <strong>generate revenue and traffic</strong>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Many entrepreneurs spend a lot of time and money on a professional website only to find that they&#39;re not getting sufficient traffic from Google &amp; Co. The reason: Search Engines reward pages with higher rankings if they target a well-researched focus keyword. That&rsquo;s why <strong>SEO should be your priority</strong>. Eliminate the guesswork from your digital marketing strategy and don&#39;t waste your money and energy on creating content that no one will see.</p>\r\n\r\n<p>Then let me tell you that you need solid research. For that, proper SEO research is necessary to survive and distinguish your digital existence. If you want to grow your business and rank on the top search engine result page then let us&nbsp;help you to simplify SEO keyword strategy so, you can see quick results.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>SEO Keyword Research:</strong></h3>\r\n\r\n<ul>\r\n	<li>Handpicked the best 300 to 1200 Kw&#39;s ( Depending on your niche )&nbsp; &nbsp;</li>\r\n	<li>High Volume &amp; Long-tail Kw&#39;s</li>\r\n	<li>Low SEO Difficulty ( Very Easy to Rank)&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Related KW&#39;s and Questions&nbsp; &nbsp;</li>\r\n	<li>Cost Per Click (CPC)</li>\r\n	<li>Delivery in Less Time&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Competitor Analysis:</strong></h3>\r\n\r\n<ul>\r\n	<li>Complete Analysis of Top 3 to Top 10 Competitors</li>\r\n	<li>Competitor&#39;s Weaknesses</li>\r\n	<li>Competitor&#39;s Organic Kw&#39;s&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Competitor&#39;s Organic Traffic</li>\r\n	<li>Competitor&#39;s Backlinks</li>\r\n	<li>Competitor&#39;s Top Page</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>What Do I Need To Start? </strong>&nbsp;&nbsp; &nbsp;</h3>\r\n\r\n<ul>\r\n	<li>Your Niche</li>\r\n	<li>Targeted Country&nbsp; &nbsp;</li>\r\n	<li>Top Competitors (if any)</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'image/about/our-service/b4LBQ6vjINTikBbKimAA0b4U0YtSCRA67GaitVGn.png', 'Keyword research is the most important aspect of on-line marketing because it allows you to specifically target your market, helps to build your brand, increases your website traffic, and is the foundation of off-site search engine optimization techniques.', 'seo keyword research, keyword research for business, keyword research for seo, on page seo, off page seo, keyword research services, search engine optimization, monthly seo services, monthly professional seo services, seo services in bangladesh, seo agency in bangladesh', 0, 1, 1, '2022-04-08 23:26:28', '2022-04-08 23:51:40'),
(10, 'Website Audit', 'website-audit', 'Website Audit helps you improve your website\'s on-page SEO, speed, and security.', '<p><strong>If your website has any technical problems, they could be impacting many things.&nbsp;&nbsp; &nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>Your Position In Google</li>\r\n	<li>How Quick Your Site Loads On Phones</li>\r\n	<li>Getting New Customers</li>\r\n	<li>Making More Money</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>What You&#39;ll Get from us?</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1. Technical SEO Audit And Analysis, including:</strong>&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<ul>\r\n	<li>List of 301 redirects</li>\r\n	<li>List of 404 errors on the website</li>\r\n	<li>robots.txt recommendations</li>\r\n	<li>Sitemap optimization suggestions</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>2.</strong>&nbsp;<strong>On-page website SEO Analysis, including:</strong>&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<ul>\r\n	<li>List of Duplicate H1 Tags, Multiple H1 Tags, and Missing H1 Tags.&nbsp; &nbsp;&nbsp;</li>\r\n	<li>List of overly Long Meta Titles, Missing Meta Titles, and Duplicate Meta Titles.</li>\r\n	<li>List of overly Long Meta Descriptions, Missing Meta Descriptions, and Duplicate meta Descriptions.</li>\r\n	<li>List of overly Large images to compress.</li>\r\n	<li>List of Images missing ALT Tags.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. <strong>Competitor SEO Analysis, including:</strong></p>\r\n\r\n<ul>\r\n	<li>List of backlinks your competitors have with their metrics</li>\r\n	<li>Benchmark Analysis with one of your competitors</li>\r\n	<li>List of Competitor Keywords</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>4. <strong>Off-page Backlinks Analysis, including:</strong></p>\r\n\r\n<ul>\r\n	<li>List of backlinks your website has with their metrics</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Our SEO audit looks at, but is not limited to:</strong></h3>\r\n\r\n<ul>\r\n	<li>Domain Analysis, Internal Site Problems</li>\r\n	<li>Potential technical and code issues</li>\r\n	<li>META Issues (page title and description errors)</li>\r\n	<li>Broken Links Check</li>\r\n	<li>Mobile optimization</li>\r\n	<li>Image analysis</li>\r\n	<li>Site loading test</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience. We do research &amp;&nbsp;analyze&nbsp;Technical SEO, find website issues and fix all of the errors and issues and make your website.</strong></p>\r\n\r\n<p>&nbsp;</p>', 'image/about/our-service/4pVtSbMEV4LdJXzmdzwZMNxvCC0FMkmPGlCRMtNF.jpg', 'Website Audit helps you improve your website\'s on-page SEO, speed, and security. Includes a free website audit tool and other useful tools to help you boost your rankings and traffic.', 'website audit, seo services, search engine optimization, monthly seo services, monthly professional seo services, seo services in bangladesh, seo agency in bangladesh', 0, 1, 1, '2022-04-08 23:46:51', '2022-04-09 00:04:56'),
(11, 'Content Writing', 'content-writing', 'Content writing includes advertising and marketing text, sales or promotional content, white papers and ebooks, website production or blog posts, and many more.', '<p>Everyone knows that creating SEO optimized content is key to ranking highly in search engines. But not enough people know that it&rsquo;s not only about speaking to search engines, you still need to write stuff that people want to actually read!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>That&rsquo;s where we&nbsp;come in!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We have&nbsp;expert creative content writers, we&nbsp;know how to balance ranking highly in search engines with content that delights your readers. We will create blog posts optimized for search through careful SEO that will help you boost traffic to your site and increase sales!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>What you will get from us:</strong></h3>\r\n\r\n<ul>\r\n	<li>Articles and blogs are written for your website</li>\r\n	<li>SEO based content</li>\r\n	<li>Search Engine Optimized</li>\r\n	<li>Well Researched</li>\r\n	<li>Plagiarism-Free Content</li>\r\n	<li>On-Time Delivery&nbsp;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>We will deliver:</strong></h3>\r\n\r\n<ul>\r\n	<li>Compendious, cohesive sentences that capture and retain the reader&#39;s attention.</li>\r\n	<li>SEO optimized, keyword research included.</li>\r\n	<li>Engaging blog posts that your readers will love.</li>\r\n	<li>Free of grammar and spelling errors.</li>\r\n	<li>Optimised formatting.</li>\r\n	<li>No plagiarism - will pass Copyscape.</li>\r\n	<br />\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience. We are eligible to serve you the perfect and SEO friendly content for your website.</strong></p>', 'image/about/our-service/Y6qEOrnvDyoJr1w82EIi5GH5L6UfJQtsMlhjGxwc.png', 'Content writing is a vast field having many sub-fields. Content writing includes advertising and marketing text, sales or promotional content, white papers and ebooks, website production or blog posts, and many more.', 'content writing services, content writer, content writer agency, content writing agency in bangladesh, website audit, seo services, search engine optimization, monthly seo services, monthly professional seo services, seo services in bangladesh, seo agency in bangladesh', 0, 1, 1, '2022-04-09 00:12:16', '2022-04-09 00:27:48'),
(12, 'YouTube SEO', 'youtube-seo', 'Our teams work together to help you succeed on YouTube.', '<p>Without optimizing your video&nbsp;<strong>SEO on YouTube</strong>, users will struggle to find your video. To increase your watch time and visibility, you need to work in tandem with the algorithm.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SEO is important for your youtube channel because it can help your videos rank higher in search results, helping you to get more views. By optimizing your videos for search, you can make sure that the right people see your content and that your videos are reaching the right audience.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Here is an overview of our&nbsp;services: </strong></h3>\r\n\r\n<ul>\r\n	<li>Video &amp; Channel tags</li>\r\n	<li>RANKING (add on)</li>\r\n	<li>Default upload settings</li>\r\n	<li>Description enhancements</li>\r\n	<li>Metadata alignment</li>\r\n	<li>Feature content</li>\r\n	<li>Hashtags &amp; high-quality keywords</li>\r\n	<li>Optional Custom HD Thumbnails (increase CTR)</li>\r\n	<li>Chapters (timestamps)</li>\r\n	<li>Recommend Cards &amp; End Screens</li>\r\n</ul>\r\n\r\n<h3><strong>PLUS:</strong></h3>\r\n\r\n<ul>\r\n	<li>Channel Tags</li>\r\n	<li>Channel Art</li>\r\n	<li>Playlist overview</li>\r\n	<li>Posting schedule and strategy</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1) <strong>On-page Video SEO</strong> - Optimization of&nbsp;title, description, tags, and a few other important settings.</p>\r\n\r\n<p>2) <strong>Off-page SEO</strong> - Backlinks, Social Signals.. resulting in more traffic to your video and improving the ranking.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>How we do it:</strong></h3>\r\n\r\n<ul>\r\n	<li>We will research keywords and implement those on your channel/videos which will help you to reach organic traffic.</li>\r\n	<li>We will also create backlinks and social signals to give a fine push in ranking.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We are Erudience, an experienced team&nbsp;and we&nbsp;use whitehat SEO methods&nbsp;to help your videos rank higher and reach a larger audience. We&nbsp;will research keywords based on your video/channel and&nbsp;optimize the metadata of your videos, including the title, description, and tags&nbsp;in the best way possible. We are eligible to serve you the best YouTube SEO Service and help you to grow your channel and spread your content worldwide.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>PLEASE <a href=\"https://erudience.com/contact\">CONTACT US</a> TO PLACE YOUR ORDER</strong></p>\r\n\r\n<p>&nbsp;</p>', 'image/about/our-service/hWHZEAkie5O8idRraU7fZQN6BVDB66fUvmqPC0Ge.png', 'Our teams work together to help you succeed on YouTube. Discover practical, actionable strategies that are helping creators grow and engage subscribers', 'youtube seo, youtube services, web development, web development service, web development service in bangladesh, web development service in sylhet, web developer in sylhet, best web developer in bangladesh, web development agency in bangladesh\r\nwebsite audit, seo services, search engine optimization, monthly seo services, monthly professional seo services, seo services in bangladesh, seo agency in bangladesh', 0, 1, 1, '2022-04-09 00:19:12', '2022-04-10 14:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `our_skills`
--

CREATE TABLE `our_skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `la_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'line-awesome icons',
  `status` int(11) NOT NULL DEFAULT 1,
  `s_status` int(11) DEFAULT NULL,
  `f_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_skills`
--

INSERT INTO `our_skills` (`id`, `name`, `caption`, `la_icon`, `status`, `s_status`, `f_status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'Best PHP Framework in World', 'lab la-laravel', 1, NULL, 1, '2022-04-01 16:24:01', '2022-04-01 16:24:01'),
(2, 'PHP', 'Most Popular Language for Web', 'lab la-php', 1, NULL, 1, '2022-04-01 16:25:01', '2022-04-01 16:25:01'),
(3, 'MySQL', 'Most popular Database', 'las la-database', 1, NULL, 1, '2022-04-01 16:25:59', '2022-04-01 16:25:59'),
(4, 'JavaScript', 'Browser based language', 'lab la-js-square', 1, NULL, 1, '2022-04-01 16:27:15', '2022-04-01 16:27:15'),
(5, 'HTML', 'HyperText Markup language', 'lab la-html5', 1, NULL, 1, '2022-04-01 16:28:38', '2022-04-01 16:28:38'),
(6, 'CSS', 'Style sheet for markup language', 'lab la-css3-alt', 1, NULL, 1, '2022-04-01 16:29:23', '2022-04-01 16:29:23'),
(7, 'Bootstrap', 'Commonly used CSS framework', 'lab la-bootstrap', 1, NULL, 1, '2022-04-01 16:30:20', '2022-04-01 16:30:20'),
(8, 'WordPress', 'Most popular CMS for PHP', 'lab la-wordpress', 1, NULL, 1, '2022-04-01 16:30:52', '2022-04-01 16:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `our_stories`
--

CREATE TABLE `our_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_timelines`
--

CREATE TABLE `our_timelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_timelines`
--

INSERT INTO `our_timelines` (`id`, `title`, `date`, `details`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Journey', '2021', 'We start our journey at 2021. On that time we just have a dream and name. we planning to provide web application service on local market. We just have a domain name only, nothing else.', 'image/about/our-timeline//muVYpvxfZjw5fzsLshbLbFjWDkuhEpAe2O5oBXpd.jpg', 1, '2022-04-01 14:34:07', '2022-04-01 14:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `demo_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technology` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `r_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lu_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `slug`, `body`, `demo_link`, `price`, `client`, `image`, `version`, `technology`, `status`, `r_date`, `lu_date`, `views`, `meta_description`, `keywords`, `created_at`, `updated_at`) VALUES
(1, 'StorialTech - Blog of News & Technology', 'storialtech-blog-of-news-and-technology', '<p>StorialTech - Blog of news and technology is a multi-platform blog website. You can read news, review technology, and stories, improve skills from tutorials and download web scripts and premium sources.</p>\r\n\r\n<p>Project Premium Design HTML Template &amp; Development By Laravel PHP Framework.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Requirement of StorialTech:</strong></p>\r\n\r\n<ol>\r\n	<li>A Blog Platform System.</li>\r\n	<li>Tutorial Content Platform System.</li>\r\n	<li>Source Sharing Platform.</li>\r\n	<li>Visitors Can Read Story From StorialTech.</li>\r\n	<li>W3School Validation Coding.</li>\r\n	<li>Google Adsense Approval Blog.</li>\r\n	<li>Use Can log in &amp; Comment System.</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>', 'https://www.storialtech.com/', '$900', 'Rakib Alom', 'image/portfolio/y5NoXUMPk0yqcar4045CXYbI5TUWkQZRhJVBmySz.jpg', '2.6', 'Html, Css, Bootstrap, JavaScript, PHP Laravel Framework, MySQL', 1, '28th January 2020', 'January 2022', 0, 'StorialTech - Blog of news and technology is a multi-platform blog website. You can read news, review technology, and stories, improve skills from tutorials and download web scripts and premium sources.', 'storialtech, erudience development portfolio, erudienceit, erudience it company', '2022-04-01 15:32:43', '2022-04-01 15:32:43'),
(2, 'Farmers Market Asia Inventory', 'farmers-market-asia-inventory', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By Laravel PHP Framework. Farmers Market Asia is a large-scale business platform website in Bangladesh. Anyone&nbsp;can be a member of their community through their website. We also have integrated some more essential features which help their prospects find them online very easily.&nbsp;</p>\r\n\r\n<p><strong>Requirements of &quot;Farmers Market Asia&quot;</strong>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Subscription System Integrations&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Data calculation system&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Sale History&nbsp;&nbsp;</li>\r\n	<li>Candidate, Employers, Admin Dashboard&nbsp;&nbsp;</li>\r\n	<li>Monthly Sales Report</li>\r\n	<li>Trending jobs, Newsletters, Blogs</li>\r\n	<li>Google Adsense Approval.</li>\r\n	<li>Users Can log in &amp; Comment on Systems</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>\r\n\r\n<ol>\r\n</ol>', 'https://farmers-market.asia/', '$450', 'FMA Company', 'image/portfolio/xwNN2d3ighFlvposwUFBfeQXmRkaHtOjT6DMg9Ko.png', NULL, 'React, Express JS, Mongo DB, Node', 1, '18th December 2021', '5th April 2022', 0, NULL, 'Web development, inventory management system,', '2022-04-04 16:02:52', '2022-04-04 18:23:41'),
(3, 'Desh Buy', 'desh-buy', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By Laravel PHP Framework. This is a Personal portfolio website. Anyone&nbsp;can be a member of their community through their website. We also have integrated some more essential features which help their prospects find them online very easily.&nbsp;</p>\r\n\r\n<p><strong>Requirements of this website</strong></p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page</li>\r\n	<li>Personal post share&nbsp;&nbsp;</li>\r\n	<li>Multiple Image option&nbsp;</li>\r\n	<li>Portfolio section</li>\r\n	<li>Smart sliders&nbsp;</li>\r\n	<li>Newsletters, Blogs&nbsp; &nbsp;&nbsp;</li>\r\n	<li>Personal CV&nbsp;</li>\r\n	<li>Google Adsense Approval</li>\r\n	<li>Users Can log in &amp; Comment on Systems</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'https://erudience.com', '$450', 'Desh Buy Company LTD', 'image/portfolio/Jm4TYzFPSnRE2Pw3clBM0UlG0uAevs12cBVSsk2I.png', NULL, 'Laravel, PHP, MySQL', 1, NULL, NULL, 0, NULL, 'PHP/Laravel, eCommerce website', '2022-04-04 18:37:04', '2022-04-04 18:57:21'),
(4, 'Sustainable Development Goals', 'sustainable-development-goals', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By WordPress. The Division for Sustainable Development Goals (DSDG) in the United Nations Department of Economic and Social Affairs (UNDESA) acts as the Secretariat for the SDGs, providing substantive support and capacity-building for the goals and their related thematic issues, including water, energy, climate, oceans, urbanization, transport, science and technology, the Global Sustainable Development Report (GSDR), partnerships and Small Island Developing States.</p>\r\n\r\n<p><strong>Requirements for &quot;Sustainable Development Goals&quot;</strong></p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page</li>\r\n	<li>Subscription System Integration&nbsp;&nbsp; &nbsp;&nbsp;</li>\r\n	<li>User and&nbsp;Admin Dashboard&nbsp;&nbsp;</li>\r\n	<li>Category, Goals, Companies</li>\r\n	<li>Trending jobs, Newsletters, Blogs</li>\r\n	<li>Google Adsense Approval.</li>\r\n	<li>Users Can log in &amp; Comment System.</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>\r\n\r\n<ol><br />\r\n	&nbsp;\r\n</ol>', 'https://erudience.com', '$250', 'Fardin Muktadir', 'image/portfolio/7mmLRvfY0UJw9Ehni0LQiF73ODlBLjrV7FfFP0Vj.png', NULL, 'React, Express JS, Mongo DB, Node', 1, '18th December 2021', '5th April 2022', 0, NULL, 'WordPress website', '2022-04-04 19:10:53', '2022-04-04 19:13:44'),
(5, 'PoetsPedia', 'poetspedia', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By Laravel PHP Framework. PoetsPedia&nbsp;is a News and Writer&#39;s&nbsp;biography&nbsp;website in Bangladesh but they serve worldwide content. Anyone&nbsp;can be a member of their community through their website. We also have integrated some more essential features which help their prospects find them online very easily.&nbsp;</p>\r\n\r\n<p><strong>Requirements of &quot;PoetsPedia&quot;</strong>&nbsp;&nbsp; &nbsp;</p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page&nbsp; &nbsp;</li>\r\n	<li>Writer&#39;s profile and information&nbsp;</li>\r\n	<li>Create a profile features&nbsp;</li>\r\n	<li>Write articles&nbsp;</li>\r\n	<li>Search articles&nbsp;via category&nbsp;</li>\r\n	<li>Trending writers, Newsletters, Blogs</li>\r\n	<li>Google Adsense Approval.</li>\r\n	<li>Users Can log in &amp; Comment System.</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>\r\n\r\n<p>&nbsp;</p>', 'https://poetspedia.com/', '$350', 'Ahmed Saleh', 'image/portfolio/ejwNtacZNOIkJwR0aOX03d8mdvj2DKnxrzUbUTzk.png', NULL, 'Laravel, PHP, MySQL', 1, '18th December 2021', '2th April 2022', 0, NULL, NULL, '2022-04-04 19:15:07', '2022-04-04 19:18:26'),
(6, 'JobWord  - Job Portal Website', 'jobword--job-portal-website', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By Laravel PHP Framework. JobWord is a Job Portal website in Austria where people get hired and employers post their jobs. Anyone&nbsp;can be a member of their community through their website. We also have integrated some more essential features which help their prospects find them online very easily.&nbsp;</p>\r\n\r\n<p><strong>Requirements for &quot;Jobword&quot;</strong></p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page</li>\r\n	<li>Subscription System Integration&nbsp;</li>\r\n	<li>Job posting features&nbsp;</li>\r\n	<li>Apply for jobs as a candidate&nbsp;</li>\r\n	<li>Candidate, Employers, Admin Dashboard&nbsp;&nbsp;</li>\r\n	<li>Search jobs via category&nbsp;</li>\r\n	<li>Trending jobs, Newsletters, Blogs</li>\r\n	<li>Google Adsense Approval.</li>\r\n	<li>Users Can log in &amp; Comment System.</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'https://erudience.com', '$450', 'OSI Group', 'image/portfolio/v3SBdd2w8rjALzDFd90wC1HSts1zAQJ33LYLYsCo.png', NULL, 'React, Express JS, Mongo DB, Node', 1, '12th December 2019', '5th April 2021', 0, NULL, NULL, '2022-04-04 19:22:03', '2022-04-04 19:24:26'),
(7, 'Edu Tech Global', 'edu-tech-global', '<p>This project has been built with Premium HTML Design Template and&nbsp;Developed&nbsp;By Laravel PHP Framework. Edu Tech Global is an IT training institute in Hobiganj where they train people&nbsp;about technology. You can be a member of their community through their website. We also have integrated some more essential features which help their prospects find them online very easily.&nbsp;</p>\r\n\r\n<p><strong>Requirements for&nbsp;&quot;Edu Tech Global&quot;</strong></p>\r\n\r\n<ol>\r\n	<li>A clean UI/UX design &amp; web page</li>\r\n	<li>Subscription System Integration&nbsp;</li>\r\n	<li>Source Sharing Platform.</li>\r\n	<li>Visitors can read their case studies&nbsp;</li>\r\n	<li>Courses&nbsp;</li>\r\n	<li>Pricing Plan&nbsp;</li>\r\n	<li>Teachers Page, Event, FAQ&nbsp;&nbsp;</li>\r\n	<li>Google Adsense Approval</li>\r\n	<li>Users Can log in &amp; Comment System.</li>\r\n	<li>Good &amp; User-Friendly Admin Dashboard.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>We&#39;re Erudience, a freelance team with years of experience in this IT industry. We hope you enjoy our services as much as we enjoy offering them to you.</strong></p>', 'https://erudience.com', '$350', 'Mohit Miah', 'image/portfolio/hXFg2YxSQ0ARnYuAkz694hgwDtuQUEm0yYrgFRO3.png', NULL, 'Laravel, PHP, MySQL', 1, '12th December 2019', '5th April 2021', 0, NULL, NULL, '2022-04-04 19:26:39', '2022-04-04 19:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `portfolio_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `category_id`, `portfolio_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-04-01 15:32:43', '2022-04-01 15:32:43'),
(10, 2, 2, '2022-04-04 18:23:42', '2022-04-04 18:23:42'),
(11, 1, 2, '2022-04-04 18:23:42', '2022-04-04 18:23:42'),
(13, 1, 3, '2022-04-04 18:57:21', '2022-04-04 18:57:21'),
(15, 2, 4, '2022-04-04 19:13:44', '2022-04-04 19:13:44'),
(17, 1, 5, '2022-04-04 19:18:26', '2022-04-04 19:18:26'),
(19, 1, 6, '2022-04-04 19:24:26', '2022-04-04 19:24:26'),
(21, 1, 7, '2022-04-04 19:28:32', '2022-04-04 19:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `privacy`, `views`, `created_at`, `updated_at`) VALUES
(1, '<h1>Privacy Policy</h1>\r\n\r\n<p>At Erudience, accessible from https://erudience.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Erudience and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Erudience. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the&nbsp;<a href=\"https://www.privacypolicygenerator.info/\">Free Privacy Policy Generator</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Information we collect</h2>\r\n\r\n<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>\r\n\r\n<p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>\r\n\r\n<p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>How we use your information</h2>\r\n\r\n<p>We use the information we collect in various ways, including to:</p>\r\n\r\n<ul>\r\n	<li>Provide, operate, and maintain our website</li>\r\n	<li>Improve, personalize, and expand our website</li>\r\n	<li>Understand and analyze how you use our website</li>\r\n	<li>Develop new products, services, features, and functionality</li>\r\n	<li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>\r\n	<li>Send you emails</li>\r\n	<li>Find and prevent fraud</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>Erudience follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services&#39; analytics. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users&#39; movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Cookies and Web Beacons</h2>\r\n\r\n<p>Like any other website, Erudience uses &#39;cookies&#39;. These cookies are used to store information including visitors&#39; preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users&#39; experience by customizing our web page content based on visitors&#39; browser type and/or other information.</p>\r\n\r\n<p>For more general information on cookies, please read&nbsp;<a href=\"https://www.generateprivacypolicy.com/#cookies\">the Cookies article on Generate Privacy Policy website</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Google DoubleClick DART Cookie</h2>\r\n\r\n<p>Google is one of a third-party vendor on our site. It also uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to www.website.com and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google ad and content network Privacy Policy at the following URL &ndash;&nbsp;<a href=\"https://policies.google.com/technologies/ads\">https://policies.google.com/technologies/ads</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Advertising Partners Privacy Policies</h2>\r\n\r\n<p>You may consult this list to find the Privacy Policy for each of the advertising partners of Erudience.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Erudience, which are sent directly to users&#39; browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that Erudience has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>Erudience&#39;s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers&#39; respective websites.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>CCPA Privacy Rights (Do Not Sell My Personal Information)</h2>\r\n\r\n<p>Under the CCPA, among other rights, California consumers have the right to:</p>\r\n\r\n<p>Request that a business that collects a consumer&#39;s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>\r\n\r\n<p>Request that a business delete any personal data about the consumer that a business has collected.</p>\r\n\r\n<p>Request that a business that sells a consumer&#39;s personal data, not sell the consumer&#39;s personal data.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>GDPR Data Protection Rights</h2>\r\n\r\n<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>\r\n\r\n<p>The right to access &ndash; You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>\r\n\r\n<p>The right to rectification &ndash; You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>\r\n\r\n<p>The right to erasure &ndash; You have the right to request that we erase your personal data, under certain conditions.</p>\r\n\r\n<p>The right to restrict processing &ndash; You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to object to processing &ndash; You have the right to object to our processing of your personal data, under certain conditions.</p>\r\n\r\n<p>The right to data portability &ndash; You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>\r\n\r\n<p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Children&#39;s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>Erudience does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>', 0, '2022-04-01 14:24:23', '2022-04-01 14:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `project_clients`
--

CREATE TABLE `project_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `f_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_clients`
--

INSERT INTO `project_clients` (`id`, `name`, `logo`, `status`, `f_status`, `created_at`, `updated_at`) VALUES
(1, 'StorialTech', 'image/gallery/client-logo//VMABymTDIetG3Izy9PHNxcfkBvOGpSvn5EqLgEO0.png', 1, 1, '2022-04-01 22:31:54', '2022-04-01 22:31:54'),
(2, 'WebFlogy', 'image/gallery/client-logo//6d7NU7EzKaigeR2cvpgrQWS4M5mdEsbhRpBDyEpH.png', 1, 1, '2022-04-01 22:38:15', '2022-04-01 22:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `refund_policies`
--

CREATE TABLE `refund_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refund_policy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refund_policies`
--

INSERT INTO `refund_policies` (`id`, `refund_policy`, `views`, `created_at`, `updated_at`) VALUES
(1, '<h2>Refund Policy</h2>\r\n\r\n<p>At Erudience, accessible from https://erudience.com/, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by Erudience and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in Erudience. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the&nbsp;<a href=\"https://www.privacypolicygenerator.info/\">Free Privacy Policy Generator</a>.</p>', 0, '2022-04-01 14:24:59', '2022-04-01 14:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `skill_brands`
--

CREATE TABLE `skill_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `f_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill_brands`
--

INSERT INTO `skill_brands` (`id`, `name`, `logo`, `status`, `f_status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'image/gallery/skill-brand//L5POsXNxt2yCfEXOBDrHrwJ5gzX2hHKUR1xETW18.png', 1, 1, '2022-04-01 16:12:15', '2022-04-01 16:12:15'),
(2, 'PHP', 'image/gallery/skill-brand//yyQ54zr7cZElwc42nF82k0VMSAMtLmcaEjnn531B.png', 1, 1, '2022-04-01 16:12:42', '2022-04-01 16:12:42'),
(3, 'WordPress', 'image/gallery/skill-brand//m6pzGbvz57bcNVYqM9AM3sYszR9VGZ2MVekqoqEL.png', 1, 1, '2022-04-01 16:13:33', '2022-04-01 16:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `social_shares`
--

CREATE TABLE `social_shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_shares`
--

INSERT INTO `social_shares` (`id`, `title`, `link_code`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/sharer.php?u=', 'lab la-facebook-f', 1, '2022-04-02 17:11:03', '2022-04-02 17:11:03'),
(2, 'Twitter', 'https://twitter.com/intent/tweet?url=', 'lab la-twitter', 1, '2022-04-02 17:15:48', '2022-04-02 17:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `terms`, `views`, `created_at`, `updated_at`) VALUES
(1, '<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to Erudience!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of Erudience IT &amp; Solutions &#39;s Website, located at https://erudience.com/.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use Erudience if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing Erudience, you agreed to use cookies in agreement with the Erudience IT &amp; Solutions &#39;s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, Erudience IT &amp; Solutions and/or its licensors own the intellectual property rights for all material on Erudience. All intellectual property rights are reserved. You may access this from Erudience for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n\r\n<ul>\r\n	<li>Republish material from Erudience</li>\r\n	<li>Sell, rent or sub-license material from Erudience</li>\r\n	<li>Reproduce, duplicate or copy material from Erudience</li>\r\n	<li>Redistribute content from Erudience</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the&nbsp;<a href=\"https://www.privacypolicies.com/blog/sample-terms-conditions-template/\">Terms And Conditions Template</a>.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Erudience IT &amp; Solutions does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Erudience IT &amp; Solutions ,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Erudience IT &amp; Solutions shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>Erudience IT &amp; Solutions reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n	<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n	<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n	<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n	<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant Erudience IT &amp; Solutions a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n	<li>Government agencies;</li>\r\n	<li>Search engines;</li>\r\n	<li>News organizations;</li>\r\n	<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n	<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n	<li>commonly-known consumer and/or business information sources;</li>\r\n	<li>dot.com community sites;</li>\r\n	<li>associations or other groups representing charities;</li>\r\n	<li>online directory distributors;</li>\r\n	<li>internet portals;</li>\r\n	<li>accounting, law and consulting firms; and</li>\r\n	<li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Erudience IT &amp; Solutions ; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Erudience IT &amp; Solutions . Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n	<li>By use of our corporate name; or</li>\r\n	<li>By use of the uniform resource locator being linked to; or</li>\r\n	<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.</li>\r\n</ul>\r\n\r\n<p>No use of Erudience IT &amp; Solutions &#39;s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n	<li>limit or exclude our or your liability for death or personal injury;</li>\r\n	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>', 0, '2022-04-01 14:14:09', '2022-04-01 15:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rabid', 'customer service is very excellent and I love your software. I give it a 100% for your e-wallet, I have to give some one credit when they deserve it and you have earned it, wish you all the best with a lot of sales and success.', 1, '2022-04-01 13:40:34', '2022-04-01 13:40:34'),
(2, 'Robert', 'Everyone who but this website please be appreciative by giving this guys 5 stars.Very well design clean code and Fast, accurate support service.I must give you more than 5 star so you have 100 stars from me, well done guys keep up with your good work and very well recommended !!!', 1, '2022-04-01 13:41:21', '2022-04-01 13:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` int(11) NOT NULL DEFAULT 1 COMMENT 'user = 1, moderator = 2, editor = 3, admin = 5, superadmin = 99, blockuser = 0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `name`, `phone`, `country`, `birthdate`, `gender`, `image`, `email`, `utype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rakibalom', 'rakibalom', 'Rakib Alom', '', '', '', 'male', NULL, 'rakibalom17@gmail.com', 99, NULL, '$2y$10$uFmbkxlTfTQ7fhZzWa/PBO7yvHX6NppAk/gL/kiL9yRicDHhFHkTu', 'JIJyt5T8pfikXmqcCuS52QN8F04CRQZ9zKGGMkrScJTZnJk6ggcZXDCssy0e', '2022-04-01 08:25:46', '2022-04-01 08:25:46'),
(2, 'erudienceit', 'erudienceit', 'Erudience IT', '+880 1788358314', 'Bangladesh - BD', NULL, NULL, NULL, 'erudienceit@gmail.com', 99, NULL, '$2y$10$BN5V.0LRBrckTmubAiHR2Ow9Igrn4nLhwgvSfdvg2eXOKgXSMibvu', 'vtrAMwoR3wH1QWlIvaGgtfZkTPdj5oRIpgCg9KQCn0dEHK2Ad0Nv58Ggdnyp', '2022-04-01 22:01:01', '2022-04-01 22:01:01'),
(3, 'bishalpaul', 'bishalpaul', 'Bishal Paul', '+880 01788358314', 'Bangladesh - BD', NULL, NULL, 'image/user/KKE5xdfvFbYLNJ9RpDhTAMX09r1MBVuG7z3ypyF0.jpg', 'Vishalpaul.s1999@gmail.com', 99, NULL, '$2y$10$hwYQIMjOTc.HixoP5orbRO3PQw86e.A0BvwoNbYgCcPs6Qiuq1GCC', '7NtAAN0MVpNnEbkDT6kRktdA0oYFykCZZ8evaeUoCriHcWGbFAXUSo78oHH1', '2022-05-19 12:10:06', '2022-05-19 12:11:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_galleries`
--

CREATE TABLE `work_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `f_status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `background_media`
--
ALTER TABLE `background_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_shared_hosting_lists`
--
ALTER TABLE `basic_shared_hosting_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basic_shared_hosting_lists_basic_id_foreign` (`basic_id`);

--
-- Indexes for table `basic_share_hostings`
--
ALTER TABLE `basic_share_hostings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_categories_category_id_foreign` (`category_id`),
  ADD KEY `blog_categories_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `category_blogs`
--
ALTER TABLE `category_blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_blogs_name_unique` (`name`);

--
-- Indexes for table `category_courses`
--
ALTER TABLE `category_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_courses_name_unique` (`name`);

--
-- Indexes for table `category_portfolios`
--
ALTER TABLE `category_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_portfolios_name_unique` (`name`);

--
-- Indexes for table `company_intros`
--
ALTER TABLE `company_intros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_categories_category_id_foreign` (`category_id`),
  ADD KEY `course_categories_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_classes`
--
ALTER TABLE `course_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_classes_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_users`
--
ALTER TABLE `course_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_users_course_id_foreign` (`course_id`),
  ADD KEY `course_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_quotes`
--
ALTER TABLE `get_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_quote_lists`
--
ALTER TABLE `get_quote_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `get_quote_lists_get_quote_id_foreign` (`get_quote_id`);

--
-- Indexes for table `hero_slogans`
--
ALTER TABLE `hero_slogans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information_setups`
--
ALTER TABLE `information_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `licence_infos`
--
ALTER TABLE `licence_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_skills`
--
ALTER TABLE `our_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_stories`
--
ALTER TABLE `our_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_timelines`
--
ALTER TABLE `our_timelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolios_slug_unique` (`slug`);

--
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_categories_category_id_foreign` (`category_id`),
  ADD KEY `portfolio_categories_portfolio_id_foreign` (`portfolio_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_clients`
--
ALTER TABLE `project_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refund_policies`
--
ALTER TABLE `refund_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_brands`
--
ALTER TABLE `skill_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_shares`
--
ALTER TABLE `social_shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `work_galleries`
--
ALTER TABLE `work_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `background_media`
--
ALTER TABLE `background_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basic_shared_hosting_lists`
--
ALTER TABLE `basic_shared_hosting_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `basic_share_hostings`
--
ALTER TABLE `basic_share_hostings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category_blogs`
--
ALTER TABLE `category_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_courses`
--
ALTER TABLE `category_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_portfolios`
--
ALTER TABLE `category_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company_intros`
--
ALTER TABLE `company_intros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_classes`
--
ALTER TABLE `course_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `course_users`
--
ALTER TABLE `course_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `get_quotes`
--
ALTER TABLE `get_quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `get_quote_lists`
--
ALTER TABLE `get_quote_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hero_slogans`
--
ALTER TABLE `hero_slogans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `information_setups`
--
ALTER TABLE `information_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `licence_infos`
--
ALTER TABLE `licence_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `our_skills`
--
ALTER TABLE `our_skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `our_stories`
--
ALTER TABLE `our_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_timelines`
--
ALTER TABLE `our_timelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_clients`
--
ALTER TABLE `project_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `refund_policies`
--
ALTER TABLE `refund_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skill_brands`
--
ALTER TABLE `skill_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_shares`
--
ALTER TABLE `social_shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_galleries`
--
ALTER TABLE `work_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basic_shared_hosting_lists`
--
ALTER TABLE `basic_shared_hosting_lists`
  ADD CONSTRAINT `basic_shared_hosting_lists_basic_id_foreign` FOREIGN KEY (`basic_id`) REFERENCES `basic_share_hostings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD CONSTRAINT `blog_categories_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_blogs` (`id`);

--
-- Constraints for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD CONSTRAINT `course_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_courses` (`id`),
  ADD CONSTRAINT `course_categories_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_classes`
--
ALTER TABLE `course_classes`
  ADD CONSTRAINT `course_classes_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_users`
--
ALTER TABLE `course_users`
  ADD CONSTRAINT `course_users_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `get_quote_lists`
--
ALTER TABLE `get_quote_lists`
  ADD CONSTRAINT `get_quote_lists_get_quote_id_foreign` FOREIGN KEY (`get_quote_id`) REFERENCES `get_quotes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD CONSTRAINT `portfolio_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category_portfolios` (`id`),
  ADD CONSTRAINT `portfolio_categories_portfolio_id_foreign` FOREIGN KEY (`portfolio_id`) REFERENCES `portfolios` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
