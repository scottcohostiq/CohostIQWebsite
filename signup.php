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
                            First 2 months free (limited time offer). No contracts, cancel anytime.
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
                    Start with 2 months free, then pay per property with volume discounts as you grow.
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
                        <p><strong>Volume pricing:</strong> Pricing uses graduated tiers. For example, 55 properties = 25 &times; $10 + 25 &times; $9 + 5 &times; $8 = $515/mo.</p>
                    </div>
                </div>
            </div>

            <!-- Pricing Calculator -->
            <div class="pricing-calculator" id="pricingCalculator">
                <h3>Estimate Your Monthly Cost</h3>
                <p class="pricing-calculator-sub">Drag the slider or type a property count.</p>

                <div class="pricing-calc-input-row">
                    <input type="range" id="calcSlider" class="pricing-calc-slider"
                           min="1" max="300" value="25" step="1"
                           aria-label="Property count slider">
                    <div class="pricing-calc-input-wrap">
                        <input type="number" id="calcInput" class="pricing-calc-input"
                               min="1" max="9999" value="25"
                               aria-label="Property count">
                        <span class="pricing-calc-input-label">properties</span>
                    </div>
                </div>

                <div class="pricing-calc-result">
                    <div class="pricing-calc-result-main">
                        <div class="pricing-calc-result-value" id="calcTotal">$250</div>
                        <div class="pricing-calc-result-label">per month</div>
                    </div>
                    <div class="pricing-calc-result-meta">
                        <div class="pricing-calc-result-row">
                            <span>Effective rate</span>
                            <strong id="calcEffective">$10.00 / property</strong>
                        </div>
                        <div class="pricing-calc-result-row">
                            <span>Annual</span>
                            <strong id="calcAnnual">$3,000 / year</strong>
                        </div>
                    </div>
                </div>

                <div class="pricing-calc-breakdown" id="calcBreakdown">
                    <div class="pricing-calc-breakdown-label">Tier breakdown</div>
                    <div class="pricing-calc-breakdown-rows" id="calcBreakdownRows"></div>
                </div>

                <p class="pricing-calc-foot">First 2 months are free. After that, you pay only for what you use.</p>
            </div>
            <script>
            (function() {
                var slider     = document.getElementById('calcSlider');
                var input      = document.getElementById('calcInput');
                var totalEl    = document.getElementById('calcTotal');
                var effEl      = document.getElementById('calcEffective');
                var annualEl   = document.getElementById('calcAnnual');
                var rowsEl     = document.getElementById('calcBreakdownRows');
                if (!slider || !input || !totalEl) return;

                // Graduated tiers: [upperBound, rate]
                // Properties 1..25 at $10, 26..50 at $9, 51..100 at $8, 101+ at $7.25
                var tiers = [
                    { upTo: 25,  rate: 10.00, label: '1 to 25'   },
                    { upTo: 50,  rate: 9.00,  label: '26 to 50'  },
                    { upTo: 100, rate: 8.00,  label: '51 to 100' },
                    { upTo: Infinity, rate: 7.25, label: '101+' }
                ];

                function fmt(n) {
                    return '$' + n.toLocaleString('en-US', { minimumFractionDigits: 0, maximumFractionDigits: 2 });
                }

                function calculate(count) {
                    count = Math.max(1, Math.floor(Number(count) || 1));
                    var remaining = count;
                    var prevBound = 0;
                    var total = 0;
                    var breakdown = [];
                    for (var i = 0; i < tiers.length && remaining > 0; i++) {
                        var tier = tiers[i];
                        var capacity = tier.upTo - prevBound;
                        var used = Math.min(remaining, capacity);
                        if (used > 0) {
                            var sub = used * tier.rate;
                            total += sub;
                            breakdown.push({ label: tier.label, count: used, rate: tier.rate, sub: sub });
                        }
                        remaining -= used;
                        prevBound = tier.upTo;
                    }
                    return { count: count, total: total, breakdown: breakdown };
                }

                function render(count) {
                    var r = calculate(count);
                    totalEl.textContent = fmt(r.total);
                    effEl.textContent = fmt(r.total / r.count) + ' / property';
                    annualEl.textContent = fmt(r.total * 12) + ' / year';
                    var html = '';
                    for (var i = 0; i < r.breakdown.length; i++) {
                        var b = r.breakdown[i];
                        html += '<div class="pricing-calc-breakdown-row">'
                            + '<span>' + b.count + ' &times; ' + fmt(b.rate) + ' (' + b.label + ')</span>'
                            + '<strong>' + fmt(b.sub) + '</strong>'
                            + '</div>';
                    }
                    rowsEl.innerHTML = html;
                }

                function syncFromSlider() {
                    input.value = slider.value;
                    render(slider.value);
                }
                function syncFromInput() {
                    var n = Math.max(1, Math.floor(Number(input.value) || 1));
                    if (n > 300) {
                        slider.value = 300;
                    } else {
                        slider.value = n;
                    }
                    render(n);
                }

                slider.addEventListener('input', syncFromSlider);
                input.addEventListener('input', syncFromInput);
                input.addEventListener('blur', function() {
                    var n = Math.max(1, Math.floor(Number(input.value) || 1));
                    input.value = n;
                });

                render(slider.value);
            })();
            </script>

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
                Have questions about pricing? <a href="mailto:support@cohostiq.app" style="color: #4a6cf7;">Contact us</a>, we're happy to help.
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
                            Yes. Your first 2 calendar months are completely free with all core features (limited time launch offer). You'll get a 30-minute onboarding call to help you get up and running. After your trial, pay per property with volume discounts.
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
