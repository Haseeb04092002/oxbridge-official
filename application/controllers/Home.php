<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function course_data($course_name = '')
	{
		$course_data = array();

		if ($course_name == 'basic_web_coding') {
			$course_data['title'] = 'Coding Web Development';
			$course_data['short_description'] = 'Learn the fundamentals of web development by building responsive and interactive websites using HTML, CSS, JavaScript, and Bootstrap. This course introduces core front-end development concepts, debugging techniques, and hands-on projects to help you start coding with confidence.';
			$course_data['long_description'] = 'The Basic Web Development & Coding course is designed for beginners who want to understand how modern websites are built from scratch. This course covers essential front-end technologies, starting with HTML for structure, CSS for styling, and JavaScript for interactivity. You will also learn how to create responsive layouts using Bootstrap, enabling your websites to work seamlessly across devices. Throughout the course, students are introduced to real-world debugging techniques, helping them identify and fix common coding errors efficiently. Practical, project-based learning is emphasized, allowing learners to apply concepts by building multiple front-end projects such as landing pages, forms, interactive components, and small apps. By the end of the course, learners will have a strong foundation in front-end web development, understand how different technologies work together, and gain the confidence to continue learning advanced web technologies or start small freelance and personal projects.';
			$course_data['duration'] = '2 Months';
			$course_data['lectures'] = '40'; // increased
			$course_data['quizzes'] = '10';  // increased
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 12,000 Monthly';
			$course_data['teacher'] = 'Haseeb ur Rehman';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'web-4.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Front-end Designing',
				'HTML, CSS & JavaScript',
				'Calculator App',
				'Image Gallery App',
				'To-Do List App',
				'Music Player App'
			);

			$course_data['projects'] = array(
				'Personal Portfolio Website',
				'Responsive Blog Layout',
				'To-Do List App',
				'Image Gallery App',
				'Calculator & Music Player App'
			);

			$course_data['outcomes'] = array(
				'Understand and use HTML to structure web pages with proper semantic elements.',
				'Apply CSS to style websites and create responsive layouts.',
				'Add JavaScript functionality to make web pages interactive.',
				'Build mobile-friendly websites using Bootstrap components and grid system.',
				'Identify and fix common front-end bugs while completing multiple web development projects.',
				'Develop small real-world web applications like calculators, to-do lists, and image galleries.'
			);

			$course_data['curriculum'] = array(
				"Introduction & Course Overview",
				"VS Code Extensions & Setup",
				"HTML & CSS Basics",
				"Elements, Tags & CSS Selectors - Part 1",
				"Elements, Tags & CSS Selectors - Part 2",
				"CSS Properties, Attributes & Forms",
				"CSS Properties, Attributes & Lists",
				"Comments, Images & Tables",
				"CSS Media Queries & Responsive Design",
				"Bootstrap 5 – Part 1",
				"Bootstrap 5 – Part 2",
				"Flexbox & Grid Layout",
				"Firefox Dev Tools & Extensions",
				"Week 1 Revision & Exercises",
				"JavaScript Variables & Data Types",
				"Conditional Statements & Loops",
				"Operators, Arrays & Methods",
				"Functions & Events",
				"DOM Manipulation – Part 1",
				"DOM Manipulation – Part 2",
				"DOM Events & Listeners",
				"Creating UI Components",
				"Form Validation & Error Handling",
				"JavaScript Project: To-Do List App",
				"JavaScript Project: Calculator App",
				"Templates & Use of GPT – Part 1",
				"Templates & Use of GPT – Part 2",
				"Image Gallery Web App",
				"Music Player UI Web App",
				"Advanced Bootstrap & Responsiveness",
				"Debugging & Problem Solving Techniques",
				"Week 4 Revision & Exercises",
				"Portfolio Website Project",
				"Blog Layout Project",
				"Integration of JS Components into Websites",
				"Final Project: Full Website with Apps",
				"Testing & Debugging Final Project",
				"Final Project Review & Submission"
			);

			return $course_data;
		}

		if ($course_name == 'basic_web_non_coding') {
			$course_data['title'] = 'Code-less Web Designing';
			$course_data['short_description'] = 'Learn how to create professional websites without coding using WordPress. This course covers website building, customization, SEO basics, security, and real-world projects using themes, plugins, and page builders.';
			$course_data['long_description'] = 'The Non-Coding Web Development course is designed for beginners and non-technical learners who want to build complete, professional websites without writing code. Using WordPress as the core platform, this course teaches how to design, customize, and manage websites through themes, plugins, and visual page builders like Elementor and Gutenberg. Students will learn how to create pages, blogs, forms, and basic e-commerce websites, manage users and media, improve website performance, and apply essential SEO and security practices. The course focuses on hands-on learning through practical website projects, including a full business website and blog setup. By the end of the course, learners will be able to confidently build, deploy, and manage WordPress websites for personal use, clients, or freelance projects.';
			$course_data['duration'] = '2 Months';
			$course_data['lectures'] = '40'; // increased
			$course_data['quizzes'] = '10';  // increased
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 12,000 Monthly'; // updated price
			$course_data['teacher'] = 'Haseeb ur Rehman';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'web-3.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'WordPress Website Building',
				'Themes & Plugins',
				'Elementor Page Builder',
				'Live Website Deployment',
				'SEO Basics & Optimization',
				'Website Security & Backup'
			);

			$course_data['projects'] = array(
				'Custom WordPress Website',
				'Blog & Business Website',
				'E-Commerce Mini Project'
			);

			$course_data['outcomes'] = array(
				'Understand how websites work using WordPress without coding.',
				'Create and manage pages, posts, menus, and media content.',
				'Build responsive websites using themes and page builders.',
				'Apply basic SEO, security, and performance optimization techniques.',
				'Deploy and manage a complete live WordPress website.',
				'Build an e-commerce or business website using WordPress.'
			);

			$course_data['curriculum'] = array(
				"Introduction to Web & WordPress",
				"Installing WordPress Locally & on Live Server",
				"WordPress Dashboard Overview",
				"Creating Pages & Posts",
				"Themes Installation & Customization",
				"Menus & Widgets Setup",
				"Build Basic Website Structure",
				"Plugins Introduction",
				"Must-Have Plugins Setup",
				"Gutenberg Editor Basics",
				"Elementor Page Builder Basics",
				"Advanced Elementor Techniques",
				"Media & File Management",
				"Users & Roles Management",
				"Full Practice Website",
				"WordPress General Settings",
				"Backup & Restore WordPress",
				"Customizer In-Depth",
				"Creating Forms & Contact Pages",
				"SEO Basics & Meta Optimization",
				"Performance Optimization & Caching",
				"WordPress Security Basics",
				"Using Free Templates & Demo Layouts",
				"Custom Homepage Project",
				"Creating a Blog & Single Post Design",
				"Basic E-Commerce with WooCommerce",
				"Product Setup & Payment Integration",
				"Advanced E-Commerce Features",
				"Basic Website Deployment",
				"Website Migration (Local to Live)",
				"Full Website Project",
				"Testing & Fixing Issues",
				"Creating Landing Pages",
				"Integrating Social Media & Analytics",
				"Email Marketing Integration",
				"Portfolio Website Project",
				"Client Website Project",
				"Final Project Submission",
				"Review & Q/A Sessions"
			);

			return $course_data;
		}

		if ($course_name == 'ms_office') {
			$course_data['title'] = 'Microsoft Office Course';
			$course_data['short_description'] = 'Learn essential computer and Microsoft Office skills including Word, Excel, and PowerPoint. This course focuses on document creation, data handling, and professional presentations for students and beginners.';
			$course_data['long_description'] = 'The Microsoft Office Course is designed for beginners and students with a minimum education level of Class 5 who want to develop essential computer skills for academic, professional, and everyday use. This one-month course covers the fundamentals of Microsoft Word, Excel, and PowerPoint in a simple and practical manner. Students will learn how to create and format documents, design professional presentations, and manage data using spreadsheets. The course emphasizes hands-on practice, helping learners gain confidence in document editing, slide creation, basic formulas, and data organization. By the end of the course, learners will be able to efficiently use Microsoft Office tools for school work, office tasks, and basic professional requirements.';
			$course_data['duration'] = '1 Month';
			$course_data['lectures'] = '20';
			$course_data['quizzes'] = '5';
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 5,000 Monthly';
			$course_data['teacher'] = 'Haseeb ur Rehman';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'office-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Microsoft Word Basics',
				'Microsoft Excel Fundamentals',
				'PowerPoint Presentations',
				'Office Productivity Skills',
			);

			$course_data['projects'] = array(
				'Professional Word Document',
				'Excel Data Sheet & PowerPoint Presentation'
			);

			$course_data['outcomes'] = array(
				'Create and format professional documents using Microsoft Word.',
				'Design clear and engaging presentations using PowerPoint.',
				'Enter, format, and manage data using Microsoft Excel.',
				'Apply basic formulas, sorting, and filtering in spreadsheets.',
				'Use Microsoft Office tools confidently for academic and office tasks.'
			);

			$course_data['curriculum'] = array(
				"Introduction to Word",
				"Creating & Saving Documents",
				"Editing & Navigating Documents",
				"Using Templates",
				"Text Formatting",
				"Working with Fonts & Colors",
				"Paragraph Alignment & Spacing",
				"Bullets & Numbered Lists",
				"Find & Replace Text",
				"Printing & Page Setup",
				"Introduction to PowerPoint",
				"Creating & Saving Presentations",
				"Adding & Formatting Slides",
				"Working with Text Boxes",
				"Fonts, Colors & Paragraphs",
				"Bullets & Numbered Lists",
				"Slide Layouts & Templates",
				"Inserting Images & Shapes",
				"Slide Transitions",
				"Printing & Export Options",
				"Introduction to Excel & Interface",
				"Creating & Saving Workbooks",
				"Entering & Editing Data",
				"Selecting & Formatting Cells",
				"Rows, Columns & Cell Management",
				"Basic Formulas & Functions",
				"Copy, Paste & Fill Handle",
				"Formatting Worksheets",
				"Page Layout & Printing",
				"Sorting & Filtering Data"
			);

			return $course_data;
		}

		if ($course_name == 'seo') {
			$course_data['title'] = 'Search Engine Optimization (SEO)';
			$course_data['short_description'] = 'Master modern Search Engine Optimization techniques including On-Page, Off-Page, and Technical SEO. Learn how to rank websites, analyze competitors, and optimize for search engines using real-world strategies.';
			$course_data['long_description'] = 'The Search Engine Optimization (SEO) Course is a comprehensive two-month program designed for students with a minimum education level of Class 8 who want to learn how search engines work and how to rank websites effectively. This course covers mid-level to advanced SEO concepts, including keyword research, content optimization, technical SEO, and link-building strategies. Students will gain hands-on experience with industry-standard SEO tools such as Google Search Console, Google Analytics, Ahrefs, SEMrush, and Moz. The course emphasizes practical learning through real website audits, competitor analysis, performance tracking, and a final capstone project. By the end of the course, learners will be able to plan, execute, and manage SEO strategies for blogs, business websites, and client projects confidently.';
			$course_data['duration'] = '2 Months';
			$course_data['lectures'] = '60'; // increased proportionally
			$course_data['quizzes'] = '10'; // increased proportionally
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 10,000 Monthly'; // updated price
			$course_data['teacher'] = 'Usman Ali';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'seo-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'On-Page SEO Optimization',
				'Off-Page SEO & Link Building',
				'Technical SEO & Audits',
				'SEO Tools & Analytics',
				'Advanced SEO Strategies',
				'Content Strategy & Blogging Techniques'
			);

			$course_data['projects'] = array(
				'SEO Audit & Optimization Project',
				'Capstone SEO Strategy for a Real Website',
				'Competitor Analysis & SEO Reporting'
			);

			$course_data['outcomes'] = array(
				'Perform advanced keyword research and competitor analysis.',
				'Optimize website content using on-page SEO best practices.',
				'Identify and fix technical SEO issues affecting rankings.',
				'Build high-quality backlinks and manage off-page SEO strategies.',
				'Analyze SEO performance using analytics and reporting tools.',
				'Plan and execute a complete SEO strategy for any website.'
			);

			$course_data['curriculum'] = array(
				"Introduction to SEO & Algorithm Updates",
				"Keyword Research: Basics to Advanced",
				"Competitor Analysis & Gap Identification",
				"On-Page SEO: Meta Tags, Titles & Descriptions Optimization",
				"On-Page SEO: Headers, Content Structure & LSI Keywords",
				"URL Structure & Internal Linking Strategies",
				"Image SEO & Multimedia Optimization",
				"Mobile SEO: AMP, Mobile-Friendly Design & Page Speed",
				"User Experience & Engagement Metrics (Bounce Rate, CTR)",
				"SEO Content Strategy & Blog Optimization",
				"Technical SEO: Site Audit & Crawlability",
				"Robots.txt, XML Sitemaps & Canonical Tags",
				"Structured Data & Schema Markup",
				"Page Speed Optimization & Core Web Vitals",
				"HTTPS, SSL & Secure Website Best Practices",
				"Off-Page SEO: Backlink Strategy & Link Building Techniques",
				"Social Signals & Online Brand Reputation",
				"Local SEO: Google My Business & Citations",
				"Technical SEO Tools: Google Search Console & Analytics",
				"SEO Reporting & KPI Tracking",
				"Advanced Keyword Research & SERP Analysis",
				"Competitor Backlink Analysis & Outreach",
				"Content Gap & Topic Clustering Strategy",
				"Advanced On-Page SEO: Content Optimization & NLP Techniques",
				"Advanced Technical SEO: Crawl Budget, Pagination & Hreflang",
				"SEO Automation Tools & Plugins (Ahrefs, SEMrush, Moz)",
				"Voice Search & Mobile-First SEO Strategies",
				"Analytics Deep Dive: Traffic, Conversions & Funnel Analysis",
				"SEO Audits: Identifying & Fixing SEO Issues",
				"Capstone Project: SEO Optimization Plan for a Real Website",
				"Advanced Link-Building Campaigns & Outreach",
				"Content Marketing & Guest Blogging Strategy",
				"SEO for E-commerce & Product Pages",
				"International SEO & Multilingual Optimization",
				"SEO Maintenance: Monitoring, Reporting & Updates"
			);

			return $course_data;
		}

		if ($course_name == 'full_stack') {
			$course_data['title'] = 'Full Stack Web Development';
			$course_data['short_description'] = 'Become a full stack web developer by learning React JS, PHP, Laravel, and SQL. This course focuses on real-world projects, database-driven applications, and complete frontend-to-backend development.';
			$course_data['long_description'] = 'The Full Stack Web Development Course is an intensive 3-month program designed for students with a minimum education level of Class 10 who want to build complete, dynamic, and database-driven web applications. This course covers both frontend and backend development using modern and industry-relevant technologies including React JS, PHP, Laravel, and SQL databases. Students begin with PHP fundamentals and backend concepts, progress to frontend development with React, and then move into advanced backend development using Laravel and MySQL. The course emphasizes hands-on learning through multiple practice projects, CRUD applications, authentication systems, and a final capstone project that integrates React frontend with a Laravel backend. By the end of the course, learners will be able to design, develop, deploy, and maintain full stack web applications suitable for freelance work, internships, or junior developer roles.';
			$course_data['duration'] = '3 Months';
			$course_data['lectures'] = '75'; // increased
			$course_data['quizzes'] = '12';  // increased
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 12,000 Monthly'; // updated
			$course_data['teacher'] = 'Haseeb ur Rehman';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'web-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'React JS Frontend Development',
				'PHP & Laravel Backend',
				'SQL Database Management',
				'Full Stack Projects',
				'Authentication & Authorization',
				'Deployment & Optimization'
			);

			$course_data['projects'] = array(
				'React + PHP CRUD Application',
				'Full Stack Capstone Project (React + Laravel)',
				'User Management System',
				'Mini E-commerce Full Stack App',
				'Portfolio & Blog Integration'
			);

			$course_data['outcomes'] = array(
				'Build responsive frontend applications using React JS.',
				'Develop backend applications using PHP and Laravel framework.',
				'Design and manage databases using SQL and MySQL.',
				'Create full stack applications with authentication and CRUD features.',
				'Deploy, test, and optimize complete web applications.',
				'Work on real-world projects and integrate front-end with back-end efficiently.'
			);

			$course_data['curriculum'] = array(
				// PHP Basics
				"PHP Syntax & Basics",
				"Variables & Data Types in PHP",
				"Conditions, Loops & Operators",
				"Arrays, Functions & Strings",
				"Form Handling (GET/POST)",
				"Sessions & Cookies",
				"PHP Mini Project 1",
				"PHP OOP: Classes & Objects",
				"Inheritance & Access Modifiers",
				"PHP File Handling & Validation",
				"Error Handling in PHP",
				"PHP Mini Project 2",

				// SQL & Database
				"Install MySQL & phpMyAdmin",
				"Database Design & ERD",
				"SQL Basics: SELECT, INSERT, UPDATE, DELETE",
				"Joins: INNER, LEFT, RIGHT, FULL",
				"Primary & Foreign Keys, Indexes",
				"Advanced SQL Queries & Aggregations",
				"SQL Practice: CRUD Operations",
				"SQL Mini Project: Blog Database",
				"SQL Mini Project: E-commerce Database",

				// React Frontend
				"React Setup & Folder Structure",
				"Components, Props & JSX",
				"State Management with useState",
				"Lifecycle Methods & useEffect Hook",
				"Conditional Rendering & Lists",
				"React Router & Navigation",
				"Forms & Event Handling",
				"Styling React Components",
				"Mini React UI Project",
				"React CRUD App Project",
				"React Authentication & API Integration",
				"React Mini E-commerce Frontend",
				"React Project: Portfolio Website",

				// PHP + MySQL Projects
				"Practice Project: PHP + MySQL CRUD",
				"Practice Project: User Registration/Login",
				"Practice Project: Blog Application",
				"Practice Project: Mini E-commerce Cart",
				"Practice Project: Task Management System",

				// Laravel Backend
				"Install Laravel & Project Setup",
				"Laravel Routing Basics",
				"Controllers & Views",
				"Blade Templating Engine",
				"Migrations & Models",
				"Eloquent ORM Basics",
				"Form Handling & Validation",
				"Authentication: Login & Registration",
				"Authorization & Middleware",
				"Laravel Project: Blog CRUD",
				"Laravel Project: Task Management CRUD",
				"Laravel Project: Mini E-commerce CRUD",
				"Laravel Project: Portfolio Backend",
				"API Development & Integration",
				"Laravel Testing & Debugging",
				"Advanced Laravel Features & Best Practices",

				// Full Stack Integration
				"React Frontend + Laravel Backend Integration",
				"Full Stack Project: User Dashboard App",
				"Full Stack Project: Mini E-commerce App",
				"Full Stack Project: Portfolio Website",
				"Capstone Project: Final Full Stack App",
				"Deployment: Host Laravel & React App",
				"Testing, Debugging & Optimization",
				"Project Review & Final Assessment",
				"Revision & Q/A Sessions",
				"Additional Practice & Challenges",
				"Final Exam"
			);

			return $course_data;
		}

		if ($course_name == 'mobile_app') {
			$course_data['title'] = 'Mobile App Development';
			$course_data['short_description'] = 'Learn to develop fully functional mobile applications using Flutter, Dart, Firebase, and MySQL. Master UI/UX design and build real-world projects from scratch.';
			$course_data['long_description'] = 'This 3-month Mobile App Development course is designed for students who want to learn modern mobile development using Flutter and Dart. The program covers UI/UX design principles, Firebase integration, MySQL database management, and app deployment. Students will complete hands-on projects, including real-time apps, e-commerce apps, and chat applications, gaining practical experience and building a portfolio. By the end of this course, learners will be able to design, develop, and deploy professional mobile applications for Android and iOS.';
			$course_data['duration'] = '3 Months';
			$course_data['lectures'] = '60';
			$course_data['quizzes'] = '10';
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 12,000 Monthly';
			$course_data['teacher'] = 'Haseeb ur Rehman';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'app-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Flutter & Dart Basics',
				'UI/UX Design & Prototyping',
				'Firebase Realtime Database & Auth',
				'MySQL Database Integration',
				'State Management & App Architecture',
				'App Deployment & Publishing',
			);

			$course_data['projects'] = array(
				'Personal Portfolio App',
				'E-commerce Shopping App',
				'Real-Time Chat Application',
				'Task Management & To-Do App'
			);

			$course_data['outcomes'] = array(
				'Design interactive mobile interfaces with Flutter.',
				'Develop apps using Dart programming language.',
				'Integrate Firebase services for authentication and real-time databases.',
				'Connect apps to MySQL databases for backend storage.',
				'Implement state management and clean app architecture.',
				'Deploy apps on Android and iOS app stores.'
			);

			$course_data['curriculum'] = array(
				// Month 1: Flutter & Dart Basics
				"Introduction to Mobile App Development",
				"Setting up Flutter & Dart Environment",
				"Dart Basics: Variables, Functions & Classes",
				"Flutter Widgets: Stateless & Stateful",
				"Layouts in Flutter: Row, Column, Stack",
				"Container, Padding, Margin & Alignment",
				"Text, Image & Icon Widgets",
				"Buttons & Gesture Detection",
				"Navigation & Routing in Flutter",
				"Flutter Forms & Input Widgets",
				"Lists & Grid Views",
				"Flutter Animations & Transitions",
				"Stateful Widgets & State Management Basics",
				"Debugging & Error Handling in Flutter",
				"Building a Simple Portfolio App",
				// Month 2: Firebase & Database Integration
				"Introduction to Firebase & its Services",
				"Firebase Authentication: Email & Social Login",
				"Realtime Database Basics",
				"CRUD Operations with Firebase",
				"Firestore Database Introduction",
				"Firebase Storage & Uploading Files",
				"Firebase Security Rules",
				"Integrating Firebase with Flutter Apps",
				"MySQL Database Basics",
				"Connecting Flutter Apps to MySQL",
				"Backend API with PHP & MySQL",
				"REST API Integration in Flutter",
				"Push Notifications with Firebase Cloud Messaging",
				"Form Validation & Data Management",
				"Project: E-commerce Shopping App",
				// Month 3: Advanced Flutter & UI Design
				"Advanced Flutter Widgets",
				"State Management with Provider",
				"State Management with Bloc/Cubit",
				"UI/UX Design Principles for Mobile Apps",
				"Animations & Transitions Advanced",
				"Handling Permissions & Device Features",
				"Maps & Geolocation Integration",
				"Camera & Media Features",
				"Testing & Debugging Flutter Apps",
				"App Optimization & Performance Tips",
				"Publishing Apps on Google Play Store",
				"Publishing Apps on Apple App Store",
				"Real-Time Chat App with Firebase",
				"Task Management App with Local Storage & MySQL",
				"Capstone Project: Complete App Development from Idea to Deployment"
			);

			return $course_data;

			return $course_data;
		}

		if ($course_name == 'digital_marketing') {
			$course_data['title'] = 'Digital Marketing';
			$course_data['short_description'] = 'Learn the fundamentals and practical strategies of digital marketing including Google Ads, Meta Ads, TikTok Ads, LinkedIn Marketing, and SEO. Grow businesses online with measurable results.';
			$course_data['long_description'] = 'This 2-month Digital Marketing course is designed for beginners and professionals who want to master online advertising and SEO. The program covers Google Ads, Meta Ads, TikTok Ads, LinkedIn Marketing, and basic SEO techniques. Students will learn campaign setup, targeting strategies, ad creation, analytics, and performance tracking. Hands-on projects ensure learners gain practical experience running real ad campaigns and optimizing marketing strategies. By the end of the course, learners will be able to plan, execute, and analyze digital marketing campaigns across multiple platforms.';
			$course_data['duration'] = '2 Months';
			$course_data['lectures'] = '40';
			$course_data['quizzes'] = '5';
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 10,000 Monthly';
			$course_data['teacher'] = 'Usman Ali';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'digital-marketing-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Google Ads Campaigns & Optimization',
				'Meta Ads (Facebook & Instagram) Strategies',
				'TikTok Ads & Influencer Marketing',
				'LinkedIn Marketing for Professionals',
				'Basic SEO & Website Optimization',
			);

			$course_data['projects'] = array(
				'Create a Google Ads Campaign for a Product',
				'Launch Meta Ads for a Business Page',
				'TikTok Ads Campaign with Targeted Audience',
				'LinkedIn Marketing & Lead Generation Campaign',
				'SEO Optimization for a Website'
			);

			$course_data['outcomes'] = array(
				'Plan and execute campaigns on Google, Meta, TikTok, and LinkedIn.',
				'Understand ad targeting, budgeting, and bidding strategies.',
				'Optimize websites and content for basic SEO.',
				'Analyze campaign performance using analytics tools.',
				'Develop practical skills to run digital marketing projects effectively.'
			);

			$course_data['curriculum'] = array(
				// Week 1-2: Introduction & SEO Basics
				"Introduction to Digital Marketing & Platforms Overview",
				"Understanding Target Audience & Buyer Personas",
				"Digital Marketing Funnel & Strategy Planning",
				"Website Basics & SEO Introduction",
				"Keyword Research & On-Page SEO Basics",
				"Content Optimization & Blogging for SEO",
				"Google Search Console & Analytics Setup",
				"Basic Link Building & SEO Reporting",
				// Week 3-4: Google Ads
				"Google Ads Account Setup & Dashboard Overview",
				"Search Ads Campaign Creation",
				"Display Ads & Remarketing Strategies",
				"Google Ads Keyword Research & Bidding",
				"Ad Copywriting & Extensions",
				"Performance Tracking & Optimization",
				"Conversion Tracking & ROI Analysis",
				"Hands-on Project: Google Ads Campaign",
				// Week 5-6: Meta Ads (Facebook & Instagram)
				"Meta Ads Manager Overview",
				"Creating Ads for Facebook & Instagram",
				"Audience Targeting & Custom Audiences",
				"Budgeting & Bidding Strategies for Meta Ads",
				"Ad Creatives & Copywriting",
				"Performance Analysis & Optimization",
				"Hands-on Project: Meta Ads Campaign",
				// Week 7: TikTok Ads
				"TikTok Ads Manager Introduction",
				"Creating Engaging TikTok Ads",
				"Audience Targeting & Trends Analysis",
				"Performance Measurement & Optimization",
				"Hands-on Project: TikTok Ads Campaign",
				// Week 8: LinkedIn Marketing & Wrap-Up
				"LinkedIn Marketing Basics & Business Profiles",
				"Creating Ads & Sponsored Content",
				"Lead Generation Campaigns",
				"Analytics & Campaign Optimization",
				"Final Project: Multi-Platform Digital Marketing Campaign"
			);

			return $course_data;
		}

		if ($course_name == 'daraz_seller') {
			$course_data['title'] = 'Daraz Seller';
			$course_data['short_description'] = 'Learn to sell successfully on Daraz Marketplace. Master product listing, keyword optimization, Daraz Ads, and store management to grow your online business.';
			$course_data['long_description'] = 'This 3-month Daraz Seller course is designed for aspiring online entrepreneurs who want to start and grow their business on Daraz. Students will learn how to create effective product listings, optimize keywords for search visibility, run Daraz Ads campaigns, manage inventory, and enhance store performance. The course emphasizes practical experience through real product listing exercises, ad campaigns, and store management projects. By the end of the course, learners will be capable of managing a professional Daraz store and boosting sales efficiently.';
			$course_data['duration'] = '3 Months';
			$course_data['lectures'] = '60';
			$course_data['quizzes'] = '8';
			$course_data['difficulty'] = 'Beginner To Advance';
			$course_data['price'] = 'Rs 12,000 Monthly';
			$course_data['teacher'] = 'Muhammad Hasnain';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'e-commerce-2.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Product Listing Optimization',
				'Keyword Research & SEO for Daraz',
				'Daraz Ads Campaign Management',
				'Store Management & Inventory Control',
				'Sales Growth Strategies',
			);

			$course_data['projects'] = array(
				'Create & Optimize 10 Product Listings',
				'Run Daraz Ads Campaign for a Product',
				'Manage Inventory & Store Dashboard',
				'Final Project: Complete Daraz Store Setup & Marketing'
			);

			$course_data['outcomes'] = array(
				'List and optimize products for higher visibility.',
				'Conduct keyword research for Daraz search optimization.',
				'Plan and run effective Daraz Ads campaigns.',
				'Manage store inventory, orders, and performance reports.',
				'Develop practical skills to run a successful Daraz store.'
			);

			$course_data['curriculum'] = array(
				// Month 1: Product Listing & Keywords
				"Introduction to Daraz Marketplace & Seller Policies",
				"Creating a Daraz Seller Account",
				"Understanding Daraz Seller Center Dashboard",
				"Product Categories & Listing Guidelines",
				"Product Title & Description Optimization",
				"Keyword Research for Daraz Products",
				"Using Tags & Attributes Effectively",
				"Pricing Strategies & Discounts",
				"Product Images & Multimedia Optimization",
				"Hands-on Project: Create Product Listings",
				"Analyzing Competitors on Daraz",
				"Product Variations & Bundles",
				"Inventory Setup & Stock Management",
				"Customer Reviews & Feedback Management",
				"Optimization Checklist for Product Listings",
				// Month 2: Daraz Ads & Promotions
				"Introduction to Daraz Ads & Sponsored Products",
				"Creating Ad Campaigns on Daraz",
				"Budgeting & Bidding Strategies",
				"Target Audience & Performance Metrics",
				"Optimizing Ad Copy & Creatives",
				"Monitoring & Reporting Campaign Performance",
				"Running Promotions & Deals on Daraz",
				"Understanding Flash Sales & Campaign Events",
				"Hands-on Project: Daraz Ads Campaign",
				"Analyzing Campaign ROI & Sales Metrics",
				"Re-targeting & Upselling Strategies",
				"Daraz Analytics Dashboard Overview",
				"Improving Product Visibility & Conversion Rates",
				"Handling Returns & Refunds Effectively",
				"Customer Engagement Strategies",
				// Month 3: Store Management & Advanced Strategies
				"Advanced Store Management Techniques",
				"Order Fulfillment & Logistics",
				"Inventory Forecasting & Stock Alerts",
				"Store Branding & Customer Experience",
				"Handling Queries & Customer Support",
				"Managing Multi-Product Listings",
				"Cross-Selling & Upselling Techniques",
				"Sales Tracking & Performance Reporting",
				"Case Study: Successful Daraz Store Setup",
				"Final Project: Launch & Manage Complete Daraz Store",
				"Optimizing Store for Long-Term Growth",
				"Analyzing Market Trends & Competitor Strategies",
				"Automation Tools & Apps for Daraz Sellers",
				"Tips for Scaling Your Online Business",
				"Course Wrap-Up & Certification Preparation"
			);

			return $course_data;
		}

		if ($course_name == 'graphic_design') {
			$course_data['title'] = 'Graphic Designing';
			$course_data['short_description'] = 'Learn professional graphic designing using Illustrator, Photoshop, and Canva Pro. Build stunning designs and create a strong portfolio to showcase your skills.';
			$course_data['long_description'] = 'This 3-month Graphic Designing course is designed for beginners and aspiring designers who want to master digital design tools and techniques. Students will learn Adobe Illustrator, Photoshop, and Canva Pro to create logos, social media graphics, marketing materials, and more. The course emphasizes hands-on projects, advanced design techniques, and portfolio building to prepare learners for freelance work or professional opportunities. By the end of the course, students will have a complete portfolio showcasing their design skills and creativity.';
			$course_data['duration'] = '3 Months';
			$course_data['lectures'] = '60'; // increased
			$course_data['quizzes'] = '8';   // increased
			$course_data['difficulty'] = 'Beginner to Advance';
			$course_data['price'] = 'Rs 10,000 Monthly'; // updated
			$course_data['teacher'] = 'Taha Mehmood';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'graphic-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Adobe Illustrator Basics & Logo Design',
				'Photoshop Editing & Creative Graphics',
				'Canva Pro Templates & Marketing Materials',
				'Advanced Design Techniques',
				'Branding & Visual Identity',
				'Portfolio Building & Personal Branding'
			);

			$course_data['projects'] = array(
				'Logo Design Project',
				'Social Media Graphics & Banner Design',
				'Marketing Collateral using Canva Pro',
				'Branding & Identity Project',
				'Final Portfolio Compilation'
			);

			$course_data['outcomes'] = array(
				'Create professional logos, banners, and graphics.',
				'Master Adobe Illustrator, Photoshop, and Canva Pro.',
				'Develop creative visual content for social media and marketing.',
				'Apply advanced design and branding techniques.',
				'Build a complete portfolio to showcase design skills.',
				'Gain practical experience with real-world design projects.'
			);

			$course_data['curriculum'] = array(
				// Week 1-3: Illustrator Basics
				"Introduction to Graphic Designing & Tools Overview",
				"Adobe Illustrator Interface & Workspace Setup",
				"Creating Shapes, Lines & Paths",
				"Logo Design Fundamentals",
				"Typography & Text Effects",
				"Vector Graphics & Illustration Techniques",
				"Color Theory & Palettes",
				"Using Brushes & Patterns",
				"Illustrator Hands-on Project: Logo Design",
				"Exporting & File Formats for Web & Print",
				"Advanced Illustrator Techniques: Gradients, Masks & Effects",
				"Illustrator Mini Project: Icon Set Design",

				// Week 4-6: Photoshop Basics
				"Adobe Photoshop Interface & Tools",
				"Photo Editing & Retouching Techniques",
				"Working with Layers, Masks & Filters",
				"Image Manipulation & Compositing",
				"Creating Social Media Graphics",
				"Text Effects & Typography in Photoshop",
				"Advanced Selection & Pen Tool Techniques",
				"Hands-on Project: Marketing Banner Design",
				"Photo Optimization for Web & Social Media",
				"Exporting & Saving Files in Photoshop",
				"Photoshop Mini Project: Poster & Flyer Design",
				"Creative Photoshop Effects: Double Exposure, Overlay, Textures",

				// Week 7-9: Canva Pro & Branding
				"Introduction to Canva Pro & Templates",
				"Creating Social Media Posts & Ads",
				"Marketing Collateral: Flyers, Brochures & Posters",
				"Brand Kits & Consistent Design",
				"Combining Canva & Photoshop/Illustrator Skills",
				"Visual Identity & Branding Principles",
				"Advanced Canva Techniques & Templates",
				"Portfolio Design Principles & Layouts",
				"Client Mock Projects & Presentation Tips",
				"Freelancing & Career Opportunities in Graphic Design",
				"Hands-on Project: Complete Branding Kit",
				"Final Project: Complete Graphic Design Portfolio"
			);

			return $course_data;
		}

		if ($course_name == 'ai_kids') {
			$course_data['title'] = 'AI Creativity for Kids';
			$course_data['short_description'] = 'A fun and creative AI course for kids to learn AI art, animation, video creation, voice generation, character building, and AI-powered storytelling.';
			$course_data['long_description'] = 'The AI Creativity Course for Kids is a 2-week hands-on program designed to introduce children to the exciting world of Artificial Intelligence through creativity and imagination. Kids will learn how to create AI-generated art, animations, videos, voices, characters, and stories using safe and easy AI tools. This course focuses on creativity, confidence, and digital skills while encouraging kids to think innovatively. By the end of the course, students will create their own AI-powered characters, animated stories, and videos.';

			// UPDATED
			$course_data['duration'] = '2 Weeks';
			$course_data['lectures'] = '8';

			// SAME
			$course_data['quizzes'] = '3';
			$course_data['difficulty'] = 'Beginner (Kids Friendly)';
			$course_data['price'] = 'Rs 2,000 Monthly';
			$course_data['teacher'] = 'Usman Ali';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'ai-kids-2.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'AI Art & Drawing',
				'AI Animation & Video Creation',
				'AI Voice & Character Creation',
				'AI Storytelling & Creativity',
			);

			$course_data['projects'] = array(
				'Create AI Art Gallery',
				'Animated AI Character Project',
				'AI Voice & Talking Character',
				'Final AI Story Video Project'
			);

			$course_data['outcomes'] = array(
				'Understand what AI is in a fun and simple way.',
				'Create AI-generated art and animations.',
				'Design AI characters with voice and personality.',
				'Create short AI videos and digital stories.',
				'Boost creativity, imagination, and confidence.'
			);

			// UPDATED CURRICULUM (2 Weeks – 8 Lectures)
			$course_data['curriculum'] = array(
				// Week 1: AI Basics & Art (4 Lectures)
				"Introduction to Artificial Intelligence for Kids",
				"How AI Works (Simple & Fun Explanation)",
				"AI Art Tools Overview & Image Creation",
				"Project: Create AI Art Gallery",

				// Week 2: Animation, Voice & Storytelling (4 Lectures)
				"Introduction to AI Animation & Video Creation",
				"Creating Simple AI Animations & Videos",
				"AI Voice & Talking Character Creation",
				"Final Project: AI Story with Art, Voice & Animation"
			);

			return $course_data;
		}


		if ($course_name == 'local_ecommerce') {
			$course_data['title'] = 'Local E-Commerce - Shopify';
			$course_data['short_description'] = 'Learn how to build and manage a local e-commerce business using Shopify. Master store setup, product hunting, theme customization, and app integrations.';
			$course_data['long_description'] = 'This 2-month Local E-Commerce course is designed for students and entrepreneurs who want to start and grow a local online business using Shopify. The course covers complete Shopify store setup, local product hunting, pricing strategies, theme customization, and essential app integrations. Students will gain hands-on experience by building a fully functional Shopify store and managing real products. By the end of the course, learners will be able to launch, manage, and optimize a professional local e-commerce store confidently.';
			$course_data['duration'] = '2 Months';
			$course_data['lectures'] = '40';
			$course_data['quizzes'] = '5';
			$course_data['difficulty'] = 'Beginner to Advance';
			$course_data['price'] = 'Rs 12,000 Monthly';
			$course_data['teacher'] = 'Muhammad Hasnain';
			$course_data['teacher_image'] = 'Haseeb ur Rehman';
			$course_data['course_card_image'] = 'e-commerce-1.jpeg';
			$course_data['course_banner_image'] = 'Haseeb ur Rehman';

			$course_data['short_content'] = array(
				'Shopify Store Setup & Configuration',
				'Local Product Hunting & Pricing',
				'Theme Customization & Branding',
				'Shopify Apps Integration',
				'Order & Store Management',
			);

			$course_data['projects'] = array(
				'Complete Shopify Store Setup',
				'Local Product Listing & Pricing Project',
				'Theme Customization & Branding Project',
				'Final Project: Launch a Local E-Commerce Store'
			);

			$course_data['outcomes'] = array(
				'Set up a professional Shopify store from scratch.',
				'Find and list profitable local products.',
				'Customize Shopify themes for branding and usability.',
				'Integrate essential Shopify apps for sales and automation.',
				'Manage orders, customers, and store performance effectively.'
			);

			$course_data['curriculum'] = array(
				// Month 1: Shopify & Product Hunting
				"Introduction to Local E-Commerce & Business Models",
				"Understanding Shopify & Platform Overview",
				"Creating a Shopify Account & Store Setup",
				"Shopify Dashboard & Settings Configuration",
				"Payment Gateways & Shipping Setup",
				"Local Product Hunting Strategies",
				"Supplier Selection & Product Validation",
				"Pricing Strategy & Profit Calculation",
				"Product Listing Optimization",
				"Hands-on Project: Add Products to Store",
				"Collections & Navigation Setup",
				"Local Market Research & Competitor Analysis",
				"Legal Basics & Local Business Compliance",
				"Customer Trust & Store Policies",
				"Mid-Course Store Review",
				// Month 2: Theme, Apps & Store Management
				"Shopify Themes Overview & Selection",
				"Theme Customization Basics",
				"Homepage & Product Page Design",
				"Branding: Colors, Fonts & Logo Placement",
				"Mobile Optimization & UX Best Practices",
				"Essential Shopify Apps Overview",
				"Apps for Payments, Reviews & Upselling",
				"Order Management & Fulfillment Process",
				"Customer Management & Support",
				"Analytics & Sales Reports",
				"Store Optimization & Conversion Rate Basics",
				"Security & Backup Best Practices",
				"Store Maintenance & Updates",
				"Scaling Local E-Commerce Business",
				"Final Project: Launch & Optimize Local Shopify Store"
			);

			return $course_data;
		}
	}

	public function courses()
	{
		$basic_web_coding = '';
		$basic_web_non_coding = '';
		$ms_office = '';
		$full_stack = '';
		$seo = '';
		$mobile_app = '';
		$digital_marketing = '';
		$daraz_seller = '';
		$ai_kids = '';
		$local_ecommerce = '';

		$basic_web_coding = $this->course_data('basic_web_coding');
		$basic_web_non_coding = $this->course_data('basic_web_non_coding');
		$ms_office = $this->course_data('ms_office');
		$full_stack = $this->course_data('full_stack');
		$seo = $this->course_data('seo');
		$mobile_app = $this->course_data('mobile_app');
		$digital_marketing = $this->course_data('digital_marketing');
		$graphic_design = $this->course_data('graphic_design');
		$daraz_seller = $this->course_data('daraz_seller');
		$ai_kids = $this->course_data('ai_kids');
		$local_ecommerce = $this->course_data('local_ecommerce');

		$this->load->view(
			'pages/courses',
			array(
				'basic_web_coding' => $basic_web_coding,
				'basic_web_non_coding' => $basic_web_non_coding,
				'ms_office' => $ms_office,
				'seo' => $seo,
				'mobile_app' => $mobile_app,
				'digital_marketing' => $digital_marketing,
				'graphic_design' => $graphic_design,
				'daraz_seller' => $daraz_seller,
				'ai_kids' => $ai_kids,
				'local_ecommerce' => $local_ecommerce,
				'full_stack' => $full_stack
			)
		);
	}

	public function course_details($course_name)
	{
		$course_data = array();

		$course_data = $this->course_data($course_name);

		$this->load->view('pages/course_details', $course_data);
	}

	public function ai_for_kids()
	{
		$course_name = 'ai_kids';
		$course_data = array();

		$course_data = $this->course_data($course_name);

		$this->load->view('pages/course_details', $course_data);
		// $this->load->view('pages/ai_for_kids');
	}
	
	public function google_review()
	{
		$place_id = "ChIJadZR-addIDkRCnZXqwOjPbA";
        redirect("https://search.google.com/local/writereview?placeid=".$place_id);
	}

	public function index()
	{
		$basic_web_coding = '';
		$basic_web_non_coding = '';
		$ms_office = '';
		$full_stack = '';
		$seo = '';
		$mobile_app = '';
		$digital_marketing = '';
		$daraz_seller = '';
		$ai_kids = '';
		$local_ecommerce = '';

		$basic_web_coding = $this->course_data('basic_web_coding');
		$basic_web_non_coding = $this->course_data('basic_web_non_coding');
		$ms_office = $this->course_data('ms_office');
		$full_stack = $this->course_data('full_stack');
		$seo = $this->course_data('seo');
		$mobile_app = $this->course_data('mobile_app');
		$digital_marketing = $this->course_data('digital_marketing');
		$graphic_design = $this->course_data('graphic_design');
		$daraz_seller = $this->course_data('daraz_seller');
		$ai_kids = $this->course_data('ai_kids');
		$local_ecommerce = $this->course_data('local_ecommerce');

		$this->load->view(
			'pages/home',
			array(
				'basic_web_coding' => $basic_web_coding,
				'basic_web_non_coding' => $basic_web_non_coding,
				'ms_office' => $ms_office,
				'seo' => $seo,
				'mobile_app' => $mobile_app,
				'digital_marketing' => $digital_marketing,
				'graphic_design' => $graphic_design,
				'daraz_seller' => $daraz_seller,
				'ai_kids' => $ai_kids,
				'local_ecommerce' => $local_ecommerce,
				'full_stack' => $full_stack
			)
		);
	}


	public function enroll()
	{
		$course_data = json_decode($this->input->post('course_data'), true);

		// Course Info
		$title      = $course_data['title'];
		$duration   = $course_data['duration'];
		$lectures   = $course_data['lectures'];
		$difficulty = $course_data['difficulty'];
		$price      = $course_data['price'];
		$teacher    = $course_data['teacher'];

		// Admin WhatsApp Number
		$number1 = "923038708733";

		// Message Format
		$message =
			"============\n" .
			"*COURSE REQUEST*\n" .
			"============\n\n" .
			"Course = $title\n" .
			"Duration = $duration\n" .
			"Lectures = $lectures\n" .
			"Level = $difficulty\n" .
			"Teacher = $teacher\n" .
			"Price = $price";

		redirect("https://wa.me/$number1?text=" . urlencode($message));
	}
	
	public function send_whatsapp()
    {
        // Get form data
        $name    = $this->input->post('name');
        $phone   = $this->input->post('phone');
        $subject = $this->input->post('subject');
        $address = $this->input->post('address');
        $message = $this->input->post('message');
        
        $admin_number = "923038708733";

        // WhatsApp Message
        $whatsapp_message =
            "============\n" .
            "*Customer Message*\n" .
            "============\n\n" .
            "Name: $name\n" .
            "Phone: $phone\n" .
            "Subject: $subject\n" .
            "Address: $address\n\n" .
            "Message:\n$message";

        // Redirect to WhatsApp
        redirect(
            "https://wa.me/" . $admin_number .
            "?text=" . urlencode($whatsapp_message)
        );
    }


	public function about()
	{
		$this->load->view('pages/about');
	}

	public function coming_soon()
	{
		$this->load->view('pages/coming_soon');
	}

	public function careers()
	{
		$this->load->view('pages/careers');
	}



	public function events()
	{
		$this->load->view('pages/events');
	}

	public function contact()
	{
		$this->load->view('pages/contact');
	}
	
	public function gallery()
	{
		$this->load->view('pages/gallery');
	}

	public function faqs()
	{
		$this->load->view('pages/faq');
		// $this->load->view('pages/faq-2');
	}

	public function portfolio()
	{
		$this->load->view('pages/portfolio');
		// $this->load->view('pages/faq-2');
	}
}
