<?php
/**
 * CohostIQ Marketing Website - Shared Header
 *
 * Sets security headers, outputs <head>, and renders navigation.
 *
 * Pages should set these variables before including this file:
 *   $pageTitle       - The <title> tag content
 *   $pageDescription - The meta description content
 *   $currentPage     - One of: 'home', 'features', 'faq', 'signup'
 */

// Security Headers
if (!headers_sent()) {
    header("Cache-Control: public, max-age=3600");
    header("Pragma: cache");
}

header("Content-Security-Policy: "
    . "default-src 'self'; "
    . "script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
    . "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
    . "font-src 'self' https://fonts.gstatic.com; "
    . "img-src 'self' data: https:; "
    . "connect-src 'self'; "
    . "object-src 'none'; "
    . "frame-ancestors 'none'; "
    . "base-uri 'self'; "
    . "form-action 'self' https://cohostiq.app;"
);

header("X-Content-Type-Options: nosniff");
header("Content-Type: text/html; charset=UTF-8");
header("X-Frame-Options: DENY");
header("X-XSS-Protection: 1; mode=block");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=()");
// header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");

// Defaults
if (!isset($pageTitle)) $pageTitle = 'CohostIQ';
if (!isset($pageDescription)) $pageDescription = 'CohostIQ - Operational tools for vacation rental co-hosts and property managers.';
if (!isset($currentPage)) $currentPage = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="logo">
                    <div class="logo-icon">C</div>
                    CohostIQ
                </a>
                <div class="nav-links">
                    <a href="index.php"<?php echo $currentPage === 'home' ? ' class="active"' : ''; ?>>Home</a>
                    <a href="index.php#about">About</a>
                    <a href="features.php"<?php echo $currentPage === 'features' ? ' class="active"' : ''; ?>>Features</a>
                    <a href="signup.php#pricing"<?php echo $currentPage === 'signup' ? ' class="active"' : ''; ?>>Pricing</a>
                    <a href="faq.php"<?php echo $currentPage === 'faq' ? ' class="active"' : ''; ?>>FAQ</a>
                </div>
                <div class="nav-actions">
                    <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
                    <a href="signup.php#waitlist" class="btn btn-primary">Join Waitlist</a>
                </div>
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
        <div class="mobile-nav" id="mobileNav">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="features.php">Features</a>
            <a href="signup.php#pricing">Pricing</a>
            <a href="faq.php">FAQ</a>
            <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
            <a href="signup.php#waitlist" class="btn btn-primary">Join Waitlist</a>
        </div>
    </header>
