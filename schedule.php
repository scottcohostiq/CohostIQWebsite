<?php
$pageTitle = 'Schedule a Demo - CohostIQ';
$pageDescription = 'Book a live demo of CohostIQ. See how we handle billing, owner statements, maintenance tracking, and more for vacation rental managers.';
$currentPage = 'schedule';
$pageCanonical = '/schedule.php';
$pageNoindex = true;
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Schedule a Demo</span>
            </nav>
            <h1 class="page-header-title">You're In — Let's Book Your Demo</h1>
            <p class="page-header-description">
                Pick a time that works for you. We'll walk you through CohostIQ and answer any questions about your setup.
            </p>
        </div>
    </section>

    <!-- Calendar Embed -->
    <section class="section">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <iframe src="https://calendar.google.com/calendar/appointments/schedules/AcZssZ33TBBMakDIMnZ0Hn-DVGaDKnK9e0wwtEiWbjOk6VPl3CGNDIYrksHpuhVjKXGVHQZU6tgSw13h?gv=true" style="border: 0; border-radius: 12px;" width="100%" height="600" frameborder="0"></iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Not Ready to Book?</h2>
                <p class="cta-description">
                    Explore our features or check out pricing first.
                </p>
                <div class="cta-buttons">
                    <a href="features.php" class="btn btn-white btn-lg">View Features</a>
                    <a href="signup.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
