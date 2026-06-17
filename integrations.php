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

    <!-- Logo Strip -->
    <section class="section" style="padding: 40px 0;">
        <div class="container">
            <div class="partner-logo-strip">
                <img src="img/integrations/hospitable.svg" alt="Hospitable" width="160" height="48">
                <img src="img/integrations/airbnb.svg" alt="Airbnb" width="140" height="48">
                <img src="img/integrations/quickbooks.svg" alt="QuickBooks" width="160" height="48">
                <img src="img/integrations/turno.svg" alt="Turno" width="130" height="48">
                <img src="img/integrations/hostbuddy.svg" alt="HostBuddy" width="160" height="48">
                <img src="img/integrations/stripe.svg" alt="Stripe" width="130" height="48">
            </div>
        </div>
    </section>

    <!-- How It Fits Together -->
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

    <!-- PMS Integrations -->
    <section class="section">
        <div class="container">
            <div class="integration-category">
                <div class="integration-category-header">
                    <span class="section-label">Property Management</span>
                    <h2 class="section-title">PMS Integrations</h2>
                    <p>Connect your PMS to automatically sync properties and reservations into CohostIQ.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card integration-card-featured">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/hospitable.svg" alt="Hospitable logo" width="180" height="54">
                        </div>
                        <p>Full OAuth integration. Properties, reservations, and guest data sync automatically. CohostIQ enhances Hospitable with billing, owner statements, and operational tools it doesn't provide.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Auto Sync</span>
                            <span class="capability-tag">OAuth</span>
                            <span class="capability-tag">Properties</span>
                            <span class="capability-tag">Reservations</span>
                            <span class="capability-tag">Guest Data</span>
                            <span class="capability-tag">Ticket Creation</span>
                        </div>
                    </div>
                    <div class="integration-card integration-card-coming">
                        <div class="integration-card-status"><span class="status-dot status-soon"></span> Coming Soon</div>
                        <div class="integration-card-logo-wrap" style="min-height: 54px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 2.5rem; color: #a0aec0;">+</span>
                        </div>
                        <h4>More PMS Platforms</h4>
                        <p>We're actively building integrations with additional Property Management Systems. Have a PMS you'd like us to support?</p>
                        <a href="mailto:support@cohostiq.app" class="btn btn-outline" style="margin-top: 16px; font-size: 14px; padding: 10px 20px;">Request an Integration</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Channels -->
    <section class="section section-gray">
        <div class="container">
            <div class="integration-category">
                <div class="integration-category-header">
                    <span class="section-label">Booking Channels</span>
                    <h2 class="section-title">Every Payout Method, Handled</h2>
                    <p>CohostIQ supports all major booking platforms and handles the complex payout math so you don't have to.</p>
                </div>
                <div class="integrations-grid integrations-grid-3">
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Full Support</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/airbnb.svg" alt="Airbnb logo" width="160" height="48">
                        </div>
                        <p>Every Airbnb payout method — cohost payouts, host-only fees, and split payouts. Switch methods mid-month without breaking your billing.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Cohost Payouts</span>
                            <span class="capability-tag">Host-Only Fees</span>
                            <span class="capability-tag">Split Payouts</span>
                            <span class="capability-tag">Auto Overage Calc</span>
                        </div>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Full Support</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/vrbo.svg" alt="VRBO logo" width="140" height="48">
                        </div>
                        <p>Import reservations via iCal feeds. Track VRBO bookings alongside Airbnb for unified owner statements and reporting across all channels.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">iCal Sync</span>
                            <span class="capability-tag">Cross-Channel Reporting</span>
                            <span class="capability-tag">Unified Statements</span>
                        </div>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Full Support</div>
                        <div class="integration-card-logo-wrap" style="min-height: 48px; display: flex; align-items: center;">
                            <div style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; font-weight: 800; font-size: 1.1rem; padding: 10px 24px; border-radius: 8px;">Direct Bookings</div>
                        </div>
                        <p>Manually add or CSV-import reservations from direct booking channels. All bookings flow into the same billing and reporting engine.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">CSV Import</span>
                            <span class="capability-tag">Manual Entry</span>
                            <span class="capability-tag">iCal Feeds</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accounting & Payments -->
    <section class="section">
        <div class="container">
            <div class="integration-category">
                <div class="integration-category-header">
                    <span class="section-label">Accounting &amp; Payments</span>
                    <h2 class="section-title">Eliminate Double Entry</h2>
                    <p>CohostIQ pushes financial data directly into your accounting software.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card integration-card-featured">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/quickbooks.svg" alt="QuickBooks logo" width="180" height="54">
                        </div>
                        <p>Automatically sync owner statements, expenses, and payouts to QuickBooks. Map to your chart of accounts, push invoices, and keep your books clean without manual data entry.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Statement Sync</span>
                            <span class="capability-tag">Expense Mapping</span>
                            <span class="capability-tag">Payout Reconciliation</span>
                            <span class="capability-tag">Chart of Accounts</span>
                            <span class="capability-tag">Per-Owner Records</span>
                        </div>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Active</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/stripe.svg" alt="Stripe logo" width="140" height="48">
                        </div>
                        <p>Secure subscription billing powered by Stripe. PCI-compliant payment processing for your CohostIQ subscription with all major credit cards accepted.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">PCI Compliant</span>
                            <span class="capability-tag">All Major Cards</span>
                            <span class="capability-tag">Auto Billing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Operations & Cleaning -->
    <section class="section section-gray">
        <div class="container">
            <div class="integration-category">
                <div class="integration-category-header">
                    <span class="section-label">Operations &amp; Cleaning</span>
                    <h2 class="section-title">Auto-Create Tickets From Your Existing Tools</h2>
                    <p>Connect your cleaning and guest communication tools to automatically create maintenance tickets in CohostIQ.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/turno.svg" alt="Turno logo" width="150" height="48">
                        </div>
                        <p>Cleaning issues flagged in Turno automatically create maintenance tickets in CohostIQ. No more missed repairs from turnover reports.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Auto Tickets</span>
                            <span class="capability-tag">Cleaning Reports</span>
                            <span class="capability-tag">Property Item Linking</span>
                        </div>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="img/integrations/hostbuddy.svg" alt="HostBuddy logo" width="170" height="48">
                        </div>
                        <p>Guest messages flagged in HostBuddy automatically create maintenance tickets in CohostIQ. Catch issues the moment a guest reports them.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Auto Tickets</span>
                            <span class="capability-tag">Guest Messages</span>
                            <span class="capability-tag">Message Context</span>
                        </div>
                    </div>
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
                    <a href="mailto:support@cohostiq.app" class="btn btn-primary">
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
