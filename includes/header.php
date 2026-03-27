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
 *   $pageCanonical   - (optional) canonical URL path e.g. '/features.php'
 *   $pageSchema      - (optional) JSON-LD structured data string
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
    . "connect-src 'self' https://cohostiq.app; "
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
if (!isset($pageCanonical)) $pageCanonical = '';
if (!isset($pageSchema)) $pageSchema = '';

// Base URL for canonical/OG tags
$siteUrl = 'https://www.cohostiq.com';
$canonicalUrl = $siteUrl . ($pageCanonical ?: ('/' . basename($_SERVER['SCRIPT_NAME'])));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta name="robots" content="index, follow">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="CohostIQ">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- Organization Schema (all pages) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "CohostIQ",
        "url": "<?php echo $siteUrl; ?>",
        "description": "Operational tools for vacation rental co-hosts and property managers.",
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "support@cohostiq.com",
            "contactType": "customer support"
        },
        "sameAs": []
    }
    </script>
<?php if ($pageSchema): ?>
    <script type="application/ld+json">
    <?php echo $pageSchema; ?>
    </script>
<?php endif; ?>
</head>
<body>
    <!-- Skip to main content (ADA) -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Header -->
    <header class="header" id="header" role="banner">
        <div class="container">
            <nav class="nav" role="navigation" aria-label="Main navigation">
                <a href="index.php" class="logo" aria-label="CohostIQ - Home">
                    <div class="logo-icon" aria-hidden="true">C</div>
                    CohostIQ
                </a>
                <div class="nav-links">
                    <a href="index.php"<?php echo $currentPage === 'home' ? ' class="active" aria-current="page"' : ''; ?>>Home</a>
                    <a href="index.php#about">About</a>
                    <a href="features.php"<?php echo $currentPage === 'features' ? ' class="active" aria-current="page"' : ''; ?>>Features</a>
                    <a href="signup.php#pricing"<?php echo $currentPage === 'signup' ? ' class="active" aria-current="page"' : ''; ?>>Pricing</a>
                    <a href="faq.php"<?php echo $currentPage === 'faq' ? ' class="active" aria-current="page"' : ''; ?>>FAQ</a>
                </div>
                <div class="nav-actions">
                    <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-secondary">Request a Demo</a>
                    <a href="https://cohostiq.app/signup/signup.php" class="btn btn-primary">Start Free Trial</a>
                </div>
                <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobileNav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
        <div class="mobile-nav" id="mobileNav" role="navigation" aria-label="Mobile navigation">
            <a href="index.php">Home</a>
            <a href="index.php#about">About</a>
            <a href="features.php">Features</a>
            <a href="signup.php#pricing">Pricing</a>
            <a href="faq.php">FAQ</a>
            <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
            <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-secondary">Request a Demo</a>
            <a href="https://cohostiq.app/signup/signup.php" class="btn btn-primary">Start Free Trial</a>
        </div>
    </header>

    <main id="main-content">
