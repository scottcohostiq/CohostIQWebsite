<?php
$pageTitle = 'CohostIQ - Vacation Rental Operations Management';
$pageDescription = 'CohostIQ - Operational tools for vacation rental co-hosts and property managers. Billing, maintenance tracking, team management, and reporting.';
$currentPage = 'home';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge">
                        <span>&#128640;</span> Start Free - No Credit Card Required
                    </div>
                    <h1 class="hero-title">
                        Manage Your Vacation Rentals with <span>Intelligence</span>
                    </h1>
                    <p class="hero-description">
                        Stop juggling spreadsheets and billing headaches. CohostIQ brings all your property management operations into one platform - so you can scale your portfolio without scaling your workload.
                    </p>
                    <div class="hero-buttons">
                        <a href="https://cohostiq.app/auth/signup_email.php" class="btn btn-primary btn-lg">Sign Up Free</a>
                        <a href="features.php" class="btn btn-outline btn-lg">See Features</a>
                    </div>
                </div>
                <div class="hero-image">
                    <div class="hero-dashboard">
                        <div class="dashboard-header">
                            <div class="dashboard-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="dashboard-preview">
                            <div class="preview-stat-row">
                                <div class="preview-stat">
                                    <div class="preview-stat-value">24</div>
                                    <div class="preview-stat-label">Active Properties</div>
                                </div>
                                <div class="preview-stat">
                                    <div class="preview-stat-value">156</div>
                                    <div class="preview-stat-label">Reservations</div>
                                </div>
                                <div class="preview-stat">
                                    <div class="preview-stat-value">$48K</div>
                                    <div class="preview-stat-label">This Month</div>
                                </div>
                            </div>
                            <div class="preview-chart">
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Built by Cohosts -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Our Story</span>
                <h2 class="section-title">Built for Cohosts, by Cohosts</h2>
                <p class="section-description">
                    We've been in your shoes. We know the pain of cohost billing because we've lived it.
                </p>
            </div>
            <div class="about-grid">
                <div class="about-text">
                    <p>
                        After years of managing vacation rentals as cohosts ourselves, we got tired of the spreadsheet chaos. Tracking different payout methods, calculating management fees, generating owner statements - it was eating up hours every month.
                    </p>
                    <p>
                        We built CohostIQ to solve the problems we faced every day. No more guessing which payout method an owner is using. No more manual calculations when someone switches from cohost payouts to host-only fees.
                    </p>
                    <p class="about-highlight">
                        We understand the complexities of cohosting because we live them too.
                    </p>
                </div>
                <div class="about-features">
                    <h3>We Handle the Billing Complexity</h3>
                    <div class="about-features-list">
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>All Airbnb Payout Methods</strong>
                                <p>Cohost payouts, host-only fees, split payouts - we support them all</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>Seamless Transitions</strong>
                                <p>Switch owners from cohost payouts to host-only fees without breaking your billing</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>Per-Property Rules</strong>
                                <p>Different fee structures for different owners? No problem.</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>Automatic Calculations</strong>
                                <p>Management fees, cleaning pass-throughs, expense deductions - all automated</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>QuickBooks Integration</strong>
                                <p>Owner statements, expenses, and payouts sync directly to QuickBooks - no double entry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Overview -->
    <section class="section section-gray" id="features">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Features</span>
                <h2 class="section-title">Everything You Need to Run Your Rentals</h2>
                <p class="section-description">
                    From reservations to maintenance, billing to reporting - CohostIQ handles it all so you can focus on growing your business.
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#128279;</div>
                    <h3 class="feature-title">PMS Integration</h3>
                    <p class="feature-description">
                        Connect to Hospitable and other PMS platforms. We enhance your operations with billing, reporting, and team tools your PMS doesn't provide.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128736;</div>
                    <h3 class="feature-title">Maintenance Tracking</h3>
                    <p class="feature-description">
                        Track appliances and items per property, identify repeat offenders, and auto-create tickets from Hospitable, HostBuddy, and Turno integrations.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128176;</div>
                    <h3 class="feature-title">Automated Billing</h3>
                    <p class="feature-description">
                        Generate owner statements, track expenses, and manage payouts. Supports all Airbnb payout methods and syncs directly to QuickBooks.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128101;</div>
                    <h3 class="feature-title">Team Management</h3>
                    <p class="feature-description">
                        Assign roles, delegate tasks, and coordinate with cleaners, maintenance staff, and property owners seamlessly.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128202;</div>
                    <h3 class="feature-title">Powerful Reporting</h3>
                    <p class="feature-description">
                        Get insights into occupancy rates, revenue trends, and year-over-year comparisons. Make data-driven decisions.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128274;</div>
                    <h3 class="feature-title">Owner Portal</h3>
                    <p class="feature-description">
                        Give property owners secure access to view their statements, reservations, and property performance anytime.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Who It's For -->
    <section class="section" id="audience">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Who It's For</span>
                <h2 class="section-title">Built for Vacation Rental Professionals</h2>
                <p class="section-description">
                    Whether you manage 5 properties or 500, CohostIQ scales with your business.
                </p>
            </div>
            <div class="audience-grid">
                <div class="audience-card">
                    <div class="audience-icon">&#127968;</div>
                    <h3 class="audience-title">Property Managers</h3>
                    <p class="audience-description">
                        Scale your portfolio without scaling your workload. Add new properties instantly and save hours per month on invoicing and operations.
                    </p>
                    <ul class="audience-features">
                        <li>Instant property onboarding</li>
                        <li>Automated owner statements</li>
                        <li>Team task assignment</li>
                        <li>Performance reporting</li>
                    </ul>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">&#128188;</div>
                    <h3 class="audience-title">Co-Hosts</h3>
                    <p class="audience-description">
                        Take the chaos out of co-hosting. Coordinate cleanings, handle maintenance, and keep owners informed.
                    </p>
                    <ul class="audience-features">
                        <li>Cleaning schedules</li>
                        <li>Maintenance coordination</li>
                        <li>Guest communication logs</li>
                        <li>Owner transparency</li>
                    </ul>
                </div>
                <div class="audience-card">
                    <div class="audience-icon">&#127969;</div>
                    <h3 class="audience-title">Rental Owners</h3>
                    <p class="audience-description">
                        Own multiple vacation rentals? Get organized with professional-grade tools without the enterprise price.
                    </p>
                    <ul class="audience-features">
                        <li>Unified reservation view</li>
                        <li>Expense tracking</li>
                        <li>Revenue analytics</li>
                        <li>Vendor management</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="section section-gray" id="benefits">
        <div class="container">
            <div class="benefits-content">
                <div class="benefits-text">
                    <span class="section-label">Benefits</span>
                    <h2 class="section-title">Save Time, Save Money, Stay Organized</h2>
                    <p class="section-description" style="max-width: none;">
                        CohostIQ isn't just software - it's your operational backbone that pays for itself.
                    </p>
                    <div class="benefits-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">&#128200;</div>
                            <div class="benefit-content">
                                <h4>Scale Without the Overhead</h4>
                                <p>Adding a new property used to mean hours of setup for billing and operations, and hours every month. Now setup is instant and ongoing billing takes mere seconds. Grow your portfolio without growing your workload.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">&#128181;</div>
                            <div class="benefit-content">
                                <h4>No More Missed Bills</h4>
                                <p>Track one time and reoccuring owner charges, and maintenance cost. Never forget to bill an owner or miss a reimbursement again. You can even add upcharges for your time and effort!</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">&#128203;</div>
                            <div class="benefit-content">
                                <h4>Complete Organization</h4>
                                <p>Every reservation, task, expense, and document in one place. No more searching through emails and spreadsheets.</p>
                            </div>
                        </div>
                        <div class="benefit-item">
                            <div class="benefit-icon">&#9201;</div>
                            <div class="benefit-content">
                                <h4>Hours Back Every Month</h4>
                                <p>One customer reported saving 30+ hours/month on invoicing alone. That's time you can spend growing your business instead of managing spreadsheets.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="benefits-image">
                    <div class="benefits-card">
                        <div class="benefits-card-header">
                            <span class="benefits-card-title">Time Savings Example</span>
                            <span class="benefits-card-badge">Per Month</span>
                        </div>
                        <div class="savings-display">
                            <div class="savings-amount">30+ hrs</div>
                            <div class="savings-label">Saved on invoicing alone</div>
                        </div>
                        <div class="savings-breakdown">
                            <div class="savings-item">
                                <span class="savings-item-label">Owner statement generation</span>
                                <span class="savings-item-value">Automated</span>
                            </div>
                            <div class="savings-item">
                                <span class="savings-item-label">Owner chargeside tracking</span>
                                <span class="savings-item-value">Centralized</span>
                            </div>
                            <div class="savings-item">
                                <span class="savings-item-label">Missed charges</span>
                                <span class="savings-item-value">Eliminated</span>
                            </div>
                            <div class="savings-item">
                                <span class="savings-item-label">Manual data entry</span>
                                <span class="savings-item-value">Reduced</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why CohostIQ -->
    <section class="section" id="why">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Why CohostIQ</span>
                <h2 class="section-title">Finally, Operations That Scale With You</h2>
                <p class="section-description">
                    We built CohostIQ because we couldn't find tools that handled the operational side of property management. Your PMS handles guests - we handle everything else.
                </p>
            </div>
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.125rem; color: #637381; margin-bottom: 24px;">
                    Every new client or property used to mean hours of setup - configuring billing, setting up statements, onboarding into your systems. With CohostIQ, that setup is instant. <strong style="color: #1d2144;">Scale your portfolio without scaling your workload.</strong>
                </p>
                <p style="font-size: 1.125rem; color: #637381;">
                    Stop spending hours on invoicing every month. Stop tracking expenses in spreadsheets. Get the time back to focus on what matters - growing your business and delighting your owners.
                </p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Scale Your Operations?</h2>
                <p class="cta-description">
                    Stop letting operational overhead hold back your growth. Start free and experience instant property onboarding.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/auth/signup_email.php" class="btn btn-white btn-lg">Sign Up Free</a>
                    <a href="features.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Learn More</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
