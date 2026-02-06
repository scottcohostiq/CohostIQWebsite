<?php require_once __DIR__ . '/includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sign up for CohostIQ and start managing your vacation rentals more efficiently. Free tier available.">
    <title>Sign Up - CohostIQ</title>
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
                    <a href="index.php">Home</a>
                    <a href="index.php#about">About</a>
                    <a href="features.php">Features</a>
                    <a href="#pricing" class="active">Pricing</a>
                    <a href="faq.php">FAQ</a>
                </div>
                <div class="nav-actions">
                    <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
                    <a href="#waitlist" class="btn btn-primary">Join Waitlist</a>
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
            <a href="#pricing">Pricing</a>
            <a href="faq.php">FAQ</a>
            <a href="https://cohostiq.app/login.php" class="btn btn-outline">Log In</a>
            <a href="#waitlist" class="btn btn-primary">Join Waitlist</a>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Sign Up</span>
            </nav>
            <h1 class="page-header-title">Join the CohostIQ Waitlist</h1>
            <p class="page-header-description">
                We're building something great. Be the first to know when we launch.
            </p>
        </div>
    </section>

    <!-- Sign Up Section -->
    <section class="signup-section">
        <div class="container">
            <div class="signup-grid">
                <div class="signup-info">
                    <h2>Why Choose CohostIQ?</h2>
                    <p>We built CohostIQ because we couldn't find tools that handled the operational side of property management. Your PMS handles guests - we handle everything else.</p>

                    <div class="signup-benefits">
                        <div class="signup-benefit">
                            <div class="signup-benefit-icon">&#9989;</div>
                            <div class="signup-benefit-text">
                                <h4>Free Tier Available</h4>
                                <p>Start with 1 property completely free. All core features included.</p>
                            </div>
                        </div>
                        <div class="signup-benefit">
                            <div class="signup-benefit-icon">&#128640;</div>
                            <div class="signup-benefit-text">
                                <h4>Quick Setup</h4>
                                <p>Guided onboarding gets you up and running in under 30 minutes.</p>
                            </div>
                        </div>
                        <div class="signup-benefit">
                            <div class="signup-benefit-icon">&#128279;</div>
                            <div class="signup-benefit-text">
                                <h4>PMS Integration</h4>
                                <p>Connect to Hospitable and other PMS platforms to enhance your operations.</p>
                            </div>
                        </div>
                        <div class="signup-benefit">
                            <div class="signup-benefit-icon">&#128200;</div>
                            <div class="signup-benefit-text">
                                <h4>Scale Instantly</h4>
                                <p>Adding a property used to take 1-2 hours of setup. Now it's instant - grow without growing your workload.</p>
                            </div>
                        </div>
                    </div>

                    <div style="background: #f8fafc; border-radius: 12px; padding: 24px; margin-top: 30px;">
                        <h4 style="margin-bottom: 16px; color: #1d2144;">What's Included:</h4>
                        <ul style="display: flex; flex-direction: column; gap: 12px;">
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>PMS integration & reservation sync</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>Maintenance ticketing with item tracking</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>Owner statements & billing</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>Team management & task assignment</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>Reporting & analytics</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>Owner portal access</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="signup-form-container" id="waitlist">
                    <div class="signup-form-header">
                        <div style="background: linear-gradient(135deg, #ff6b6b, #ee5a5a); color: white; display: inline-block; padding: 6px 16px; border-radius: 20px; font-weight: 600; font-size: 12px; margin-bottom: 12px;">Coming Soon</div>
                        <h3>Join the Waitlist</h3>
                        <p>Be the first to know when we launch</p>
                    </div>
                    <div style="text-align: center; padding: 20px 0;">
                        <p style="margin-bottom: 24px; color: #637381;">
                            We're putting the finishing touches on CohostIQ. Enter your email below and we'll notify you as soon as we're ready for you to get started.
                        </p>
                        <form action="mailto:support@cohostiq.com" method="post" enctype="text/plain" style="display: flex; flex-direction: column; gap: 12px;">
                            <input type="email" name="email" placeholder="Enter your email address" required style="width: 100%; padding: 14px 16px; border: 1px solid #e2e8f0; border-radius: 8px; font-size: 16px;">
                            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
                                Join Waitlist
                            </button>
                        </form>
                        <p class="form-note" style="margin-top: 20px;">
                            We'll only email you about the launch. No spam.
                        </p>
                    </div>
                    <div style="border-top: 1px solid #e2e8f0; margin-top: 30px; padding-top: 30px;">
                        <h4 style="text-align: center; margin-bottom: 20px; color: #1d2144;">What Happens Next</h4>
                        <div style="display: flex; flex-direction: column; gap: 16px;">
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: #4a6cf7; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">1</div>
                                <div>
                                    <strong style="color: #1d2144;">Join the Waitlist</strong>
                                    <p style="margin: 4px 0 0; font-size: 14px; color: #637381;">Enter your email above to reserve your spot</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: #4a6cf7; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">2</div>
                                <div>
                                    <strong style="color: #1d2144;">We'll Notify You</strong>
                                    <p style="margin: 4px 0 0; font-size: 14px; color: #637381;">You'll get an email when CohostIQ launches</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: #4a6cf7; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">3</div>
                                <div>
                                    <strong style="color: #1d2144;">Create Your Account</strong>
                                    <p style="margin: 4px 0 0; font-size: 14px; color: #637381;">Quick signup with guided onboarding</p>
                                </div>
                            </div>
                            <div style="display: flex; gap: 16px; align-items: flex-start;">
                                <div style="width: 32px; height: 32px; min-width: 32px; background: #13c296; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 600;">4</div>
                                <div>
                                    <strong style="color: #1d2144;">Start Saving Time</strong>
                                    <p style="margin: 4px 0 0; font-size: 14px; color: #637381;">Get your operations organized from day one</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section section-gray" id="pricing">
        <div class="container">
            <div class="section-header">
                <div style="background: linear-gradient(135deg, #ff6b6b, #ee5a5a); color: white; display: inline-block; padding: 8px 20px; border-radius: 25px; font-weight: 600; font-size: 14px; margin-bottom: 16px;">Coming Soon - Join the Waitlist</div>
                <span class="section-label">Pricing</span>
                <h2 class="section-title">Pay Only for What You Use</h2>
                <p class="section-description">
                    Your first property and market are always free. After that, pay per property and per market - with volume discounts as you grow.
                </p>
            </div>

            <!-- Pricing Tables -->
            <div class="pricing-tables-grid">
                <!-- Per Property Pricing -->
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <div class="pricing-icon pricing-icon-blue">&#127968;</div>
                        <h3>Per Property</h3>
                        <p>First property free, then:</p>
                    </div>
                    <div class="pricing-tiers">
                        <div class="pricing-tier">
                            <span>Properties 2-25</span>
                            <span class="price">$10<span class="unit">/property</span></span>
                        </div>
                        <div class="pricing-tier">
                            <span>Properties 26-50</span>
                            <span class="price">$9<span class="unit">/property</span></span>
                        </div>
                        <div class="pricing-tier">
                            <span>Properties 51-100</span>
                            <span class="price">$8<span class="unit">/property</span></span>
                        </div>
                        <div class="pricing-tier pricing-tier-last">
                            <span>100+ properties</span>
                            <span class="contact">Contact us</span>
                        </div>
                    </div>
                </div>

                <!-- Per Market Pricing -->
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <div class="pricing-icon pricing-icon-green">&#128205;</div>
                        <h3>Per Market</h3>
                        <p>First market free, then:</p>
                    </div>
                    <div class="pricing-tiers">
                        <div class="pricing-tier">
                            <span>Markets 2-5</span>
                            <span class="price">$20<span class="unit">/market</span></span>
                        </div>
                        <div class="pricing-tier pricing-tier-last">
                            <span>5+ markets</span>
                            <span class="contact">Contact us</span>
                        </div>
                    </div>
                    <div class="pricing-note">
                        <p><strong>What's a market?</strong> A geographic area where you operate (e.g., "Branson", "Smoky Mountains", "Gulf Shores")</p>
                    </div>
                </div>
            </div>

            <!-- Example Calculations -->
            <div class="pricing-examples">
                <h3>Example Monthly Costs</h3>
                <div class="pricing-examples-grid">
                    <div class="pricing-example-item">
                        <div class="example-label">1 property, 1 market</div>
                        <div class="example-price">$0</div>
                        <div class="example-calc">Free forever</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">10 properties, 1 market</div>
                        <div class="example-price">$90</div>
                        <div class="example-calc">9 x $10</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">25 properties, 2 markets</div>
                        <div class="example-price">$260</div>
                        <div class="example-calc">24 x $10 + 1 x $20</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">50 properties, 3 markets</div>
                        <div class="example-price">$505</div>
                        <div class="example-calc">24x$10 + 25x$9 + 2x$20</div>
                    </div>
                </div>
            </div>

            <!-- What's Included -->
            <div class="pricing-included">
                <h3>Everything Included on Every Plan</h3>
                <div class="pricing-included-grid">
                    <div class="included-item"><span class="check">&#10003;</span><span>All Airbnb payout methods</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Owner statements & billing</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Maintenance ticketing</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Property item tracking</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Team management</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Reporting & analytics</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Owner portal</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>PMS integrations</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Unlimited team members</span></div>
                </div>
            </div>

            <p class="pricing-enterprise">
                Need more than 100 properties or 5 markets? <a href="mailto:support@cohostiq.com" style="color: #4a6cf7;">Contact us</a> for enterprise pricing.
            </p>
        </div>
    </section>

    <!-- FAQ Preview -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Questions?</span>
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                        <h4>Is there really a free tier?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! Our free tier includes 1 property with all core features. You get a 30-minute onboarding call to get started. The only limitation is no ongoing support - but you have full access to all the tools.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                        <h4>Can I import my existing data?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! CohostIQ supports importing properties and reservations from CSV files. You can also connect to platforms like Hospitable to automatically sync your data.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="this.parentElement.classList.toggle('active')">
                        <h4>What if I need help getting started?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Our guided onboarding process walks you through every step of setting up your account. Free tier users get a 30-minute onboarding call. Paid plans include ongoing email or priority support.
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="faq.php" class="btn btn-outline">View All FAQs</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="index.php" class="logo">
                        <div class="logo-icon">C</div>
                        CohostIQ
                    </a>
                    <p class="footer-description">
                        Operational tools for vacation rental co-hosts and property managers. Billing, maintenance tracking, team management, and reporting that your PMS doesn't provide.
                    </p>
                </div>
                <div class="footer-column">
                    <h4>Product</h4>
                    <div class="footer-links">
                        <a href="features.php">Features</a>
                        <a href="signup.php">Pricing</a>
                        <a href="faq.php">FAQ</a>
                    </div>
                </div>
                <div class="footer-column">
                    <h4>Company</h4>
                    <div class="footer-links">
                        <a href="mailto:support@cohostiq.com">Contact</a>
                        <a href="mailto:support@cohostiq.com">Support</a>
                    </div>
                </div>
                <div class="footer-column">
                    <h4>Legal</h4>
                    <div class="footer-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> CohostIQ. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
