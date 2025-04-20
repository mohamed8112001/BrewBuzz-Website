EcoTrail Project Documentation 

1. Overview 

The EcoTrail website is a platform designed designed to promote eco-friendly travel and outdoor adventures. It allows users to explore curated trip packages, register accounts, log in for personalized features, and contact the team for bookings or inquiries. The website emphasizes a responsive, user-friendly interface with secure user authentication, smooth animations, and a modern design suitable for both desktop and mobile users. 

Objectives 

Showcase eco-tourism packages such as forest hikes, mountain adventures, and beach retreats. 

Provide secure user authentication (registration, login, logout) using PHP sessions. 

Ensure a seamless, responsive design with intuitive navigation. 

Enhance user engagement through animations (AOS, GSAP) and interactive elements. 

Target Audience 

Users: Travelers seeking sustainable travel experiences. 

Developers: Those maintaining or extending the platform. 

Administrators: Managing user data or trip offerings. 

 

 

 

 

 

 

2. Website Structure 

The EcoTrail website consists of several PHP pages, each serving a specific purpose, connected by a consistent navigation bar. 

Page 

File 

Description 

Home 

index.php 

Landing page with a hero section, trip packages, and navigation bar. 

About 

about.php 

Information about EcoTrail’s mission, vision, and team. 

Contact 

contact.php 

Form for users to send inquiries or book trips. 

Login 

login.php 

Authentication page for users to log in with email and password. 

Register 

register.php 

Form for new users to create accounts with name, email, and password. 

Logout 

logout.php 

Script to end user sessions and redirect to the home page. 

Navigation Bar 

Location: Fixed at the top of all pages. 

Features:  

Logo: Links to index.php with the text “EcoTrail”. 

Menu Items: Home (index.php), About (about.php), Contact (contact.php). 

Authentication:  

Logged In: Displays the user’s name (e.g., “أحمد”) and a “تسجيل الخروج” (Logout) button linking to logout.php. 

Logged Out: Shows “تسجيل الدخول” (Login) and “تسجيل جديد” (Register) links. 

Responsive Design:  

Desktop: Menu items displayed inline with hover effects (underline animation). 

Mobile: Hamburger menu toggles a slide-in menu with animated transitions. 

Implementation: Uses PHP to check $_SESSION['user_id'] for authentication status, with CSS and JavaScript for styling and interactivity. 

Code Snippet (Navigation from index.php): 

php 

Copy 

<?php session_start(); ?> <nav> <div class="container"> <a href="index.php" class="logo" data-aos="fade-right">EcoTrail</a> <button id="menu-toggle" class="hamburger"> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path> </svg> </button> <ul class="desktop-menu" data-aos="fade-left"> <li><a href="index.php">الرئيسية</a></li> <li><a href="about.php">من نحن</a></li> <li><a href="contact.php">تواصل معنا</a></li> <?php if (isset($_SESSION['user_id'])): ?> <li class="user-info"> <span class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span> <button class="logout-btn" onclick="window.location.href='logout.php'">تسجيل الخروج</button> </li> <?php else: ?> <li><a href="login.php">تسجيل الدخول</a></li> <li><a href="register.php">تسجيل جديد</a></li> <?php endif; ?> </ul> </div> <div id="mobile-menu" class="mobile-menu hidden"> <button id="close-menu" class="close-menu"> <svg fill="none" stroke="currentColor" viewBox="0 0 24 24"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path> </svg> </button> <ul> <li><a href="index.php">الرئيسية</a></li> <li><a href="about.php">من نحن</a></li> <li><a href="contact.php">تواصل معنا</a></li> <?php if (isset($_SESSION['user_id'])): ?> <li><span class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></span></li> <li><button class="logout-btn" onclick="window.location.href='logout.php'">تسجيل الخروج</button></li> <?php else: ?> <li><a href="login.php">تسجيل الدخول</a></li> <li><a href="register.php">تسجيل جديد</a></li> <?php endif; ?> </ul> </div> </nav> 

Explanation: 

PHP Logic: The if (isset($_SESSION['user_id'])) condition determines whether to show the user’s name and logout button or login/register links. 

CSS: Flexbox (.user-info) aligns the user name and logout button; media queries hide the hamburger menu on desktop. 

JavaScript: Toggles the mobile menu with AOS animations for smooth transitions. 

3. Key Functionality 

3.1 User Authentication 

Explanation: The website supports user registration, login, and logout, using PHP sessions and a MySQL database for secure data management. 

Registration (register.php):  

Users provide name, email, and password. 

Passwords are hashed using password_hash() for security. 

Data is stored in the users table. 

Redirects to login.php on success. 

Login (login.php):  

Users enter email and password. 

Credentials are verified using password_verify(). 

Sets $_SESSION['user_id'] and $_SESSION['user_name'], then redirects to index.php. 

Logout (logout.php):  

Clears session data using session_unset() and session_destroy(). 

Redirects to index.php. 

Logout Issue: 

Problem: You reported that the logout button wasn’t working (20 April 2025). The issue was due to a missing session_start() at the top of index.php, which prevented $_SESSION['user_id'] from being accessed, so the logout button didn’t appear. 

Fix: Added <?php session_start(); ?> to index.php and ensured CSS styles for .logout-btn were included (see updated index.php, 20 April 2025). 

Verification: After login, the navigation bar should display the user’s name and a red logout button. Clicking it triggers logout.php, which clears the session and redirects to index.php. 

Code Snippet (Logout, logout.php): 

php 

Copy 

<?php session_start(); session_unset(); session_destroy(); header("Location: index.php"); exit; ?> 

3.2 Responsive Design 

Desktop: Navigation bar displays inline menu items; packages section uses a 3-column grid. 

Tablet: Packages section uses a 2-column grid. 

Mobile: Hamburger menu toggles a slide-in menu; packages section uses a 1-column grid. 

Implementation: CSS media queries at 640px, 768px, and 1024px breakpoints, with JavaScript for menu toggling. 

Code Snippet (Media Queries): 

css 

Copy 

@media (min-width: 640px) { .packages-grid { grid-template-columns: repeat(2, 1fr); } } @media (min-width: 768px) { .desktop-menu { display: flex; } .hamburger { display: none; } .packages-grid { grid-template-columns: repeat(3, 1fr); } } 

3.3 Animations 

AOS (Animate on Scroll): Applied to navigation items, package cards, and hero content (e.g., data-aos="fade-left"). 

GSAP: Animates the hero title (.animate-hero) and package cards (.animate-card) on load and scroll. 

Purpose: Enhances visual appeal and user engagement. 

Code Snippet (Animations): 

javascript 

Copy 

AOS.init({ duration: 800, once: true, easing: 'ease-in-out', }); gsap.from(".animate-hero", { opacity: 0, y: 50, duration: 1, delay: 0.5 }); gsap.from(".animate-card", { opacity: 0, y: 50, duration: 1, stagger: 0.3, scrollTrigger: { trigger: "#packages" } }); 

3.4 Trip Packages 

Location: index.php (Packages section). 

Details: Displays three static trips (forest, mountains, beach) with images, descriptions, prices, and “Book Now” links to contact.php. 

Future Enhancement: Store packages in a database for dynamic loading. 

Code Snippet (Packages): 

html 

Copy 

<section id="packages" class="packages"> <h2>باقات الرحلات</h2> <div class="packages-grid"> <div class="package-card animate-card"> <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e" alt="غابة"> <div class="package-card-content"> <h3>رحلة الغابات الخضراء</h3> <p>استمتع بالتنزه في الغابات الكثيفة واكتشف الحياة البرية.</p> <p class="price">250 دولار / 3 أيام</p> <a href="contact.php">احجز الآن</a> </div> </div> <!-- Additional cards --> </div> </section> 

4. Technical Details 

4.1 Technologies Used 

Frontend:  

HTML5, CSS3, JavaScript. 

AOS for scroll animations (https://unpkg.com/aos@next/dist/aos.css, https://unpkg.com/aos@next/dist/aos.js). 

GSAP for advanced animations (https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js). 

Backend:  

PHP 7.4+ for server-side logic and session management. 

MySQL for user data storage. 

Hosting Requirements:  

Web server (e.g., Apache) with PHP support. 

MySQL database. 

Local testing: XAMPP or WAMP. 

4.2 Database Schema 

The website uses a MySQL database (ecotrail_db) with one table: 

Table: users 

sql 

Copy 

CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ); 

Fields:  

id: Unique user identifier. 

name: User’s full name for display. 

email: Unique login identifier. 

password: Hashed password. 

created_at: Account creation timestamp. 

4.3 Session Management 

Initialization: session_start() at the top of all PHP files to access $_SESSION. 

Variables:  

$_SESSION['user_id']: User’s ID from the users table. 

$_SESSION['user_name']: User’s name for navigation display. 

Security: Uses htmlspecialchars() to prevent XSS when displaying $_SESSION['user_name']. 

4.4 File Structure 

text 

Copy 

/ecotrail/ ├── config.php # Database connection settings ├── index.php # Home page ├── about.php # About page ├── contact.php # Contact form ├── login.php # Login page ├── register.php # Registration page ├── logout.php # Logout script 

5. Setup Instructions 

5.1 Prerequisites 

XAMPP/WAMP or a web server with PHP and MySQL. 

MySQL database (ecotrail_db). 

Text editor (e.g., VS Code). 

5.2 Local Setup 

Install XAMPP:  

Download and install from https://www.apachefriends.org. 

Start Apache and MySQL from the XAMPP control panel. 

Set Up Database:  

Open phpMyAdmin (http://localhost/phpmyadmin). 

Create a database named ecotrail_db. 

Run the users table SQL (see Section 4.2). 

Configure Database:  

Create config.php:  

php 

Copy 

<?php $host = 'localhost'; $db = 'ecotrail_db'; $user = 'root'; $pass = ''; try { $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); } catch (PDOException $e) { echo "Connection failed: " . $e->getMessage(); } ?> 

Deploy Files:  

Place all PHP files in C:\xampp\htdocs\ecotrail (or equivalent). 

Ensure file permissions allow session writing. 

Test the Website:  

Open http://localhost/ecotrail/index.php. 

Register a new account via register.php. 

Log in via login.php and verify the user name and logout button in the navigation. 

Test the logout button to ensure redirection to index.php. 

5.3 Server Deployment 

Upload files to a web server via FTP. 

Import ecotrail_db to the server’s MySQL. 

Update config.php with server database credentials. 

Test all pages and functionalities. 

6. Troubleshooting 

6.1 Logout Button Issues 

Problem: Logout button doesn’t appear or work (reported 20 April 2025). Solutions: 

Button Not Visible:  

Ensure session_start() is at the top of index.php and other pages. 

Verify login.php sets $_SESSION['user_id'] and $_SESSION['user_name']:  

php 

Copy 

$_SESSION['user_id'] = $user['id']; $_SESSION['user_name'] = $user['name']; 

Debug sessions by adding:  

php 

Copy 

var_dump($_SESSION); 

If empty, check login.php or session save path permissions. 

Button Doesn’t Redirect:  

Ensure logout.php exists and contains:  

php 

Copy 

<?php session_start(); session_unset(); session_destroy(); header("Location: index.php"); exit; ?> 

Enable error reporting:  

php 

Copy 

ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 

Check for output before header() (e.g., whitespace). 

Styling Issues:  

Verify CSS for .logout-btn:  

css 

Copy 

.logout-btn { background-color: #dc2626; color: white; padding: 0.5rem 1rem; border: none; border-radius: 0.25rem; } 

6.2 Blank Page Issues 

Enable error reporting (see above). 

Check for syntax errors or missing files (e.g., config.php). 

Ensure no output before header() calls in logout.php or login.php. 

6.3 Database Connection Issues 

Verify config.php credentials. 

Ensure ecotrail_db and users table exist. 

Check MySQL service is running in XAMPP. 

7. Future Enhancements 

Dynamic Packages: Store trip data in a database for scalability. 

User Dashboard: Allow users to view bookings or manage profiles. 

Logout Feedback: Display “تم تسجيل الخروج بنجاح” after logout using query parameters:  

php 

Copy 

header("Location: index.php?logout=success"); 

Security:  

Add CSRF tokens to forms. 

Implement rate limiting for login attempts. 

SEO: Optimize meta tags and images for search engines. 

8. Contact 

For issues or contributions, use the contact.php form or email support@ecotrail.com. 

Last Updated: 20 April 2025 

Show in sidebar 

Explanations of Key Components 

Navigation Bar:  

Purpose: Provides consistent access to all pages and authentication options. 

Logic: PHP checks $_SESSION['user_id'] to toggle between logged-in and logged-out states. 

Responsive: Uses media queries and JavaScript for desktop/mobile adaptability. 

Example: The logout button appears only when $_SESSION['user_id'] is set, styled in red for visibility. 

User Authentication:  

Registration: Stores hashed passwords for security. 

Login: Sets session variables for personalization. 

Logout: Clears sessions and redirects, fixed by adding session_start() to index.php. 

Security: Uses htmlspecialchars() to prevent XSS. 

Responsive Design:  

Breakpoints: 640px, 768px, 1024px for layout adjustments. 

Mobile Menu: Slide-in menu enhances usability on small screens. 

Animations:  

AOS: Scroll-based animations for engagement. 

GSAP: Smooth transitions for hero and package sections. 

Trip Packages:  

Current: Static cards with links to contact.php. 

Future: Database-driven for scalability. 

Troubleshooting:  

Logout Fix: Addressed missing session_start() and ensured CSS styling. 

Debugging: Steps to verify sessions, files, and errors. 

Memories Used 

19 April 2025: Reused logout.php code and navigation logic from about.php for consistency. 

20 April 2025: Incorporated the logout fix (adding session_start() to index.php) and CSS styles for .logout-btn. 

28 February 2025: Tailored explanations to your PHP experience, ensuring technical clarity. 

Comparison to First Documentation 

Structure: Mirrors the first Markdown documentation (20 April 2025) with sections for Overview, Structure, Functionality, Technical Details, Setup, Troubleshooting, and Enhancements. 

Depth: Expanded explanations, especially for logout functionality, and included more code snippets for clarity. 

Focus: Emphasized the logout issue and its resolution, as it was a key concern. 

Updates: Reflects the latest index.php (with session_start()) and ensures consistency across pages. 

 
