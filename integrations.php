<?php
$pageTitle = 'Integrations & Partners - CohostIQ';
$pageDescription = 'CohostIQ integrates with Hospitable, QuickBooks, Airbnb, Turno, HostBuddy, and more. Connect your existing tools and streamline your vacation rental operations.';
$currentPage = 'integrations';
$pageCanonical = '/integrations.php';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Integrations</span>
            </nav>
            <h1 class="page-header-title">Integrations & Partners</h1>
            <p class="page-header-description">
                CohostIQ connects to the tools you already use so you can manage everything from one platform.
            </p>
        </div>
    </section>

    <!-- Integration Categories -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Connected Ecosystem</span>
                <h2 class="section-title">Built to Work With Your Stack</h2>
                <p class="section-description">
                    We don't replace your PMS or your accounting software. We sit on top of them and handle the operational layer they don't cover.
                </p>
            </div>

            <!-- PMS Integrations -->
            <div class="integration-category">
                <div class="integration-category-header">
                    <h3>Property Management Systems</h3>
                    <p>Connect your PMS to automatically sync properties and reservations into CohostIQ.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card integration-card-featured">
                        <div class="integration-card-badge">Live</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #4a6cf7, #6b8aff);">H</div>
                        <h4>Hospitable</h4>
                        <p>Full OAuth integration. Properties, reservations, and guest data sync automatically. CohostIQ enhances Hospitable with billing, owner statements, and operational tools it doesn't provide.</p>
                        <ul class="integration-features">
                            <li>Automatic property &amp; reservation sync</li>
                            <li>Real-time data updates</li>
                            <li>OAuth secure connection</li>
                            <li>Auto-create maintenance tickets from guest messages</li>
                        </ul>
                    </div>
                    <div class="integration-card integration-card-coming">
                        <div class="integration-card-badge integration-card-badge-soon">Coming Soon</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #637381, #8a9bae);">+</div>
                        <h4>More PMS Platforms</h4>
                        <p>We're actively building integrations with additional Property Management Systems. Have a PMS you'd like us to support?</p>
                        <a href="mailto:support@cohostiq.com" class="btn btn-outline" style="margin-top: 16px; font-size: 14px; padding: 10px 20px;">Request an Integration</a>
                    </div>
                </div>
            </div>

            <!-- Booking Channels -->
            <div class="integration-category">
                <div class="integration-category-header">
                    <h3>Booking Channels &amp; Payout Methods</h3>
                    <p>CohostIQ supports all major booking platforms and handles the complex payout math so you don't have to.</p>
                </div>
                <div class="integrations-grid integrations-grid-3">
                    <div class="integration-card">
                        <div class="integration-card-badge">Supported</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #FF5A5F, #FF385C);">A</div>
                        <h4>Airbnb</h4>
                        <p>Full support for every Airbnb payout method — cohost payouts, host-only fees, and split payouts. Switch methods mid-month without breaking your billing.</p>
                        <ul class="integration-features">
                            <li>All payout methods supported</li>
                            <li>Cohost payout overage auto-calculated</li>
                            <li>Per-property payout rules</li>
                            <li>Seamless method transitions</li>
                        </ul>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-badge">Supported</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #1a3e72, #2d5ba4);">V</div>
                        <h4>VRBO</h4>
                        <p>Import reservations via iCal feeds. Track VRBO bookings alongside Airbnb for unified owner statements and reporting across all channels.</p>
                        <ul class="integration-features">
                            <li>iCal reservation sync</li>
                            <li>Unified cross-channel reporting</li>
                            <li>Combined owner statements</li>
                        </ul>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-badge">Supported</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #f59e0b, #d97706);">D</div>
                        <h4>Direct Bookings</h4>
                        <p>Manually add or CSV-import reservations from direct booking channels. All bookings flow into the same billing and reporting engine.</p>
                        <ul class="integration-features">
                            <li>CSV import</li>
                            <li>Manual reservation entry</li>
                            <li>iCal feed support</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Accounting & Payments -->
            <div class="integration-category">
                <div class="integration-category-header">
                    <h3>Accounting &amp; Payments</h3>
                    <p>Eliminate double entry. CohostIQ pushes financial data directly into your accounting software.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card integration-card-featured">
                        <div class="integration-card-badge">Live</div>
                        <div class="integration-card-logo" style="background: #2CA01C;">QB</div>
                        <h4>QuickBooks</h4>
                        <p>Automatically sync owner statements, expenses, and payouts to QuickBooks. Map to your chart of accounts, push invoices, and keep your books clean without manual data entry.</p>
                        <ul class="integration-features">
                            <li>Owner statements sync as invoices</li>
                            <li>Expenses mapped to your chart of accounts</li>
                            <li>Payout reconciliation</li>
                            <li>Per-owner and per-property records</li>
                            <li>Eliminates manual data entry</li>
                        </ul>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-badge">Supported</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #635bff, #7a73ff);">S</div>
                        <h4>Stripe</h4>
                        <p>Secure subscription billing powered by Stripe. Your CohostIQ subscription is managed through Stripe for reliable, PCI-compliant payment processing.</p>
                        <ul class="integration-features">
                            <li>PCI-compliant payment processing</li>
                            <li>All major credit cards accepted</li>
                            <li>Automatic subscription management</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Operations & Cleaning -->
            <div class="integration-category">
                <div class="integration-category-header">
                    <h3>Operations &amp; Cleaning</h3>
                    <p>Connect your cleaning and guest communication tools to auto-create maintenance tickets and keep your operations running smoothly.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card">
                        <div class="integration-card-badge">Live</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #06b6d4, #0891b2);">T</div>
                        <h4>Turno</h4>
                        <p>Cleaning issues flagged in Turno automatically create maintenance tickets in CohostIQ. No more missed repairs from turnover reports.</p>
                        <ul class="integration-features">
                            <li>Auto-create tickets from cleaning reports</li>
                            <li>Issue details carry over automatically</li>
                            <li>Link cleaning issues to property items</li>
                        </ul>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-badge">Live</div>
                        <div class="integration-card-logo" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">HB</div>
                        <h4>HostBuddy</h4>
                        <p>Guest messages flagged in HostBuddy automatically create maintenance tickets in CohostIQ. Catch issues the moment a guest reports them.</p>
                        <ul class="integration-features">
                            <li>Auto-create tickets from guest messages</li>
                            <li>Guest-reported issues captured instantly</li>
                            <li>Ticket includes message context</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">How It Works</span>
                <h2 class="section-title">Your PMS Handles Guests. We Handle Everything Else.</h2>
                <p class="section-description">
                    CohostIQ isn't another PMS. It's the operational layer that connects to your existing tools and fills the gaps they leave behind.
                </p>
            </div>
            <div class="integration-flow">
                <div class="integration-flow-step">
                    <div class="integration-flow-number">1</div>
                    <h4>Connect Your PMS</h4>
                    <p>Link Hospitable (or import via CSV/iCal) to bring in your properties and reservations.</p>
                </div>
                <div class="integration-flow-arrow" aria-hidden="true">&rarr;</div>
                <div class="integration-flow-step">
                    <div class="integration-flow-number">2</div>
                    <h4>CohostIQ Does the Work</h4>
                    <p>Billing, owner statements, maintenance tracking, and team management — all automated.</p>
                </div>
                <div class="integration-flow-arrow" aria-hidden="true">&rarr;</div>
                <div class="integration-flow-step">
                    <div class="integration-flow-number">3</div>
                    <h4>Sync to QuickBooks</h4>
                    <p>Statements, expenses, and payouts flow into your accounting automatically. No double entry.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Request Integration -->
    <section class="section">
        <div class="container">
            <div style="max-width: 700px; margin: 0 auto; text-align: center;">
                <h2 style="margin-bottom: 16px;">Don't See Your Tool?</h2>
                <p style="color: #637381; margin-bottom: 30px;">
                    We're constantly building new integrations. If there's a tool you rely on that you'd like to see connected to CohostIQ, let us know.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:support@cohostiq.com" class="btn btn-primary">
                        Request an Integration
                    </a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline">
                        Request a Demo
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Connect Your Tools?</h2>
                <p class="cta-description">
                    Start with 2 months free. No contracts, cancel anytime.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/waitlist.php" class="btn btn-white btn-lg">Join Waitlist</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
