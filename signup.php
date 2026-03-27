<?php
$pageTitle = 'Sign Up - CohostIQ';
$pageDescription = 'Sign up for CohostIQ. Vacation rental operations management with billing, maintenance tracking, team management, and reporting. First 2 months free.';
$currentPage = 'signup';
$pageCanonical = '/signup.php';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Sign Up</span>
            </nav>
            <h1 class="page-header-title">Get Started with CohostIQ</h1>
            <p class="page-header-description">
                Start with 2 months free. No contracts, cancel anytime.
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
                                <h4>2 Months Free</h4>
                                <p>Your first 2 calendar months are on us. All core features included. Limited time offer.</p>
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
                                <span>All Airbnb payout methods supported</span>
                            </li>
                            <li style="display: flex; align-items: center; gap: 10px;">
                                <span style="color: #13c296;">&#10003;</span>
                                <span>QuickBooks integration</span>
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

                <div class="signup-form-container" id="signup">
                    <div class="signup-form-header">
                        <div style="background: linear-gradient(135deg, #4a6cf7, #6b8aff); color: white; display: inline-block; padding: 6px 16px; border-radius: 20px; font-weight: 600; font-size: 12px; margin-bottom: 12px;">2 Months Free</div>
                        <h3>Start Your Free Trial</h3>
                        <p>Your first 2 months are completely free. Our guided onboarding gets you up and running in under 30 minutes.</p>
                    </div>
                    <div style="padding: 20px 0; text-align: center;">
                        <a href="https://cohostiq.app/signup/signup.php" class="btn btn-primary btn-lg" style="width: 100%; display: block;">
                            Start Free Trial
                        </a>
                        <p class="form-note" style="margin-top: 16px; text-align: center;">
                            First 2 months free — limited time offer. No contracts, cancel anytime.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="section section-gray" id="pricing">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Pricing</span>
                <h2 class="section-title">Simple Per-Property Pricing</h2>
                <p class="section-description">
                    Start with 2 months free, then pay per property — with volume discounts as you grow.
                </p>
            </div>

            <!-- Pricing Table -->
            <div style="max-width: 600px; margin: 0 auto;">
                <div class="pricing-card">
                    <div class="pricing-card-header">
                        <div class="pricing-icon pricing-icon-blue">&#127968;</div>
                        <h3>Per Property / Month</h3>
                        <p>Your rate is based on your total property count:</p>
                    </div>
                    <div class="pricing-tiers">
                        <div class="pricing-tier">
                            <span>1-25 properties</span>
                            <span class="price">$10<span class="unit">/each</span></span>
                        </div>
                        <div class="pricing-tier">
                            <span>26-50 properties</span>
                            <span class="price">$9<span class="unit">/each</span></span>
                        </div>
                        <div class="pricing-tier">
                            <span>51-100 properties</span>
                            <span class="price">$8<span class="unit">/each</span></span>
                        </div>
                        <div class="pricing-tier pricing-tier-last">
                            <span>101+ properties</span>
                            <span class="price">$7.25<span class="unit">/each</span></span>
                        </div>
                    </div>
                    <div class="pricing-note">
                        <p><strong>Volume pricing:</strong> Pricing uses graduated tiers. For example, 55 properties = 25 × $10 + 25 × $9 + 5 × $8 = $465/mo.</p>
                    </div>
                </div>
            </div>

            <!-- Example Calculations -->
            <div class="pricing-examples">
                <h3>Example Monthly Costs</h3>
                <div class="pricing-examples-grid">
                    <div class="pricing-example-item">
                        <div class="example-label">5 properties</div>
                        <div class="example-price">$50</div>
                        <div class="example-calc">5 x $10/ea</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">10 properties</div>
                        <div class="example-price">$100</div>
                        <div class="example-calc">10 x $10/ea</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">25 properties</div>
                        <div class="example-price">$250</div>
                        <div class="example-calc">25 x $10/ea</div>
                    </div>
                    <div class="pricing-example-item">
                        <div class="example-label">50 properties</div>
                        <div class="example-price">$475</div>
                        <div class="example-calc">25 x $10 + 25 x $9</div>
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
                    <div class="included-item"><span class="check">&#10003;</span><span>QuickBooks integration</span></div>
                    <div class="included-item"><span class="check">&#10003;</span><span>Unlimited team members</span></div>
                </div>
            </div>

            <p class="pricing-enterprise">
                Have questions about pricing? <a href="mailto:support@cohostiq.com" style="color: #4a6cf7;">Contact us</a> - we're happy to help.
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
                    <div class="faq-question">
                        <h4>Is there really a free trial?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! Your first 2 calendar months are completely free with all core features — it's our limited time launch offer. You'll get a 30-minute onboarding call to get you up and running. After your trial, pay per property with volume discounts.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
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
                    <div class="faq-question">
                        <h4>What if I need help getting started?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Our guided onboarding process walks you through every step of setting up your account. All users get a 30-minute onboarding call. Paid plans include ongoing email or priority support.
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="faq.php" class="btn btn-outline">View All FAQs</a>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
