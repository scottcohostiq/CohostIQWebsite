<?php
$pageTitle = 'Integrations & Partners - CohostIQ';
$pageDescription = 'CohostIQ integrates with Hospitable, QuickBooks, Airbnb, Turno, HostBuddy, Quo, and more. Connect your existing tools and streamline your vacation rental operations.';
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
                <a href="https://hospitable.com" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/hospitable.png" alt="Hospitable" height="48"></a>
                <a href="https://www.airbnb.com" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/airbnb.png" alt="Airbnb" height="48"></a>
                <a href="https://quickbooks.intuit.com" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/quickbooks.png" alt="QuickBooks" height="48"></a>
                <a href="https://turno.com" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/turno.png" alt="Turno" height="48"></a>
                <a href="https://www.hostbuddy.ai" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/hostbuddy.png" alt="HostBuddy" height="48"></a>
                <a href="https://stripe.com" target="_blank" rel="noopener noreferrer"><img src="https://cohostiq.app/img/integrations/stripe.png" alt="Stripe" height="48"></a>
                <img src="https://cohostiq.app/img/integrations/quo.png" alt="Quo" height="48">
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
                            <img src="https://cohostiq.app/img/integrations/hospitable.png" alt="Hospitable logo" height="54">
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
                        <a href="https://hospitable.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit Hospitable &rarr;</a>
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
                            <img src="https://cohostiq.app/img/integrations/airbnb.png" alt="Airbnb logo" height="48">
                        </div>
                        <p>Every Airbnb payout method — cohost payouts, host-only fees, and split payouts. Switch methods mid-month without breaking your billing.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Cohost Payouts</span>
                            <span class="capability-tag">Host-Only Fees</span>
                            <span class="capability-tag">Split Payouts</span>
                            <span class="capability-tag">Auto Overage Calc</span>
                        </div>
                        <a href="https://www.airbnb.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit Airbnb &rarr;</a>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Full Support</div>
                        <div class="integration-card-logo-wrap">
                            <img src="https://cohostiq.app/img/integrations/vrbo.png" alt="VRBO logo" height="48">
                        </div>
                        <p>Import reservations via iCal feeds. Track VRBO bookings alongside Airbnb for unified owner statements and reporting across all channels.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">iCal Sync</span>
                            <span class="capability-tag">Cross-Channel Reporting</span>
                            <span class="capability-tag">Unified Statements</span>
                        </div>
                        <a href="https://www.vrbo.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit VRBO &rarr;</a>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Full Support</div>
                        <div class="integration-card-logo-wrap" style="min-height: 48px; display: flex; align-items: center;">
                            <div style="background: linear-gradient(135deg, #f59e0b, #d97706); color: white; font-weight: 800; font-size: 1.1rem; padding: 10px 24px; border-radius: 8px;">Direct Bookings</div>
                        </div>
                        <p>Direct bookings sync through Hospitable alongside your Airbnb and VRBO reservations. All bookings flow into the same billing and reporting engine.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Via Hospitable</span>
                            <span class="capability-tag">Unified Billing</span>
                            <span class="capability-tag">All Channels Combined</span>
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
                            <img src="https://cohostiq.app/img/integrations/quickbooks.png" alt="QuickBooks logo" height="54">
                        </div>
                        <p>Automatically sync owner statements, expenses, and payouts to QuickBooks. Map to your chart of accounts, push invoices, and keep your books clean without manual data entry.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Statement Sync</span>
                            <span class="capability-tag">Expense Mapping</span>
                            <span class="capability-tag">Payout Reconciliation</span>
                            <span class="capability-tag">Chart of Accounts</span>
                            <span class="capability-tag">Per-Owner Records</span>
                        </div>
                        <a href="https://quickbooks.intuit.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit QuickBooks &rarr;</a>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Active</div>
                        <div class="integration-card-logo-wrap">
                            <img src="https://cohostiq.app/img/integrations/stripe.png" alt="Stripe logo" height="48">
                        </div>
                        <p>Secure subscription billing powered by Stripe. PCI-compliant payment processing for your CohostIQ subscription with all major credit cards accepted.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">PCI Compliant</span>
                            <span class="capability-tag">All Major Cards</span>
                            <span class="capability-tag">Auto Billing</span>
                        </div>
                        <a href="https://stripe.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit Stripe &rarr;</a>
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
                            <img src="https://cohostiq.app/img/integrations/turno.png" alt="Turno logo" height="48">
                        </div>
                        <p>Cleaning issues flagged in Turno automatically create maintenance tickets in CohostIQ. No more missed repairs from turnover reports.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Auto Tickets</span>
                            <span class="capability-tag">Cleaning Reports</span>
                            <span class="capability-tag">Property Item Linking</span>
                        </div>
                        <a href="https://turno.com" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit Turno &rarr;</a>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="https://cohostiq.app/img/integrations/hostbuddy.png" alt="HostBuddy logo" height="48">
                        </div>
                        <p>Guest messages flagged in HostBuddy automatically create maintenance tickets in CohostIQ. Catch issues the moment a guest reports them.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Auto Tickets</span>
                            <span class="capability-tag">Guest Messages</span>
                            <span class="capability-tag">Message Context</span>
                        </div>
                        <a href="https://www.hostbuddy.ai" target="_blank" rel="noopener noreferrer" class="integration-card-link">Visit HostBuddy &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Phone & Communications -->
    <section class="section">
        <div class="container">
            <div class="integration-category">
                <div class="integration-category-header">
                    <span class="section-label">Phone &amp; Communications</span>
                    <h2 class="section-title">Know Who's Calling Before You Pick Up</h2>
                    <p>Connect your business phone through Quo and every incoming call pops the caller right on your screen, matched against your CohostIQ data.</p>
                </div>
                <div class="integrations-grid">
                    <div class="integration-card integration-card-featured">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Live Integration</div>
                        <div class="integration-card-logo-wrap">
                            <img src="https://cohostiq.app/img/integrations/quo.png" alt="Quo logo" height="54">
                        </div>
                        <p>When the phone rings, CohostIQ pops a rich caller card on screen. It matches the number to your owners, contractors, and staff first, then your guests, and pulls up their stay details, property operations, and call history so you're up to speed before you say hello. Toggle pop-ups on or off from your dashboard whenever you need quiet.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Incoming Call Pop</span>
                            <span class="capability-tag">Caller Matching</span>
                            <span class="capability-tag">Stay &amp; Property Context</span>
                            <span class="capability-tag">Call History</span>
                            <span class="capability-tag">SMS Notifications</span>
                            <span class="capability-tag">Do Not Disturb Toggle</span>
                        </div>
                        <a href="https://cohostiq.app/signup/request_demo.php" class="integration-card-link">See Quo in a demo &rarr;</a>
                    </div>
                    <div class="integration-card">
                        <div class="integration-card-status"><span class="status-dot status-live"></span> Built In</div>
                        <div class="integration-card-logo-wrap" style="min-height: 54px; display: flex; align-items: center; justify-content: center;">
                            <span style="font-size: 2rem;"><?php echo ciq_icon('smartphone'); ?></span>
                        </div>
                        <h4>InboxIQ Awareness</h4>
                        <p>Call pops surface right inside the InboxIQ app too, so your team sees who's calling and the guest's reservation on any screen, not just the desktop dashboard.</p>
                        <div class="integration-capabilities">
                            <span class="capability-tag">Mobile Call Pops</span>
                            <span class="capability-tag">On Every Screen</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Request Integration -->
    <section class="section section-gray">
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
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-white btn-lg">Request a Demo</a>
                    <a href="signup.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
