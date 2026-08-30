<?php
$pageTitle = 'Features - CohostIQ';
$pageDescription = 'CohostIQ features for cohosts and property managers: a core of accounting, PMS sync, maintenance, and reporting, plus optional modules for cleaning, AI guest messaging, a unified inbox, upsells, and a branded guest portal.';
$currentPage = 'features';
$pageCanonical = '/features.php';
require_once __DIR__ . '/includes/header.php';

// Small inline badge helpers so the Core / Add-on split reads at a glance.
function ciq_badge_core() {
    return '<span style="display:inline-block; margin-left:10px; padding:3px 11px; background:#e6f9f3; color:#0a9d78; border-radius:20px; font-size:12px; font-weight:600; vertical-align:middle; letter-spacing:0.2px;">Core</span>';
}
function ciq_badge_addon() {
    return '<span style="display:inline-block; margin-left:10px; padding:3px 11px; background:#eef2ff; color:#4a6cf7; border-radius:20px; font-size:12px; font-weight:600; vertical-align:middle; letter-spacing:0.2px;">Add-on module</span>';
}
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Features</span>
            </nav>
            <h1 class="page-header-title">A Rock-Solid Core. Modules You Add As You Grow.</h1>
            <p class="page-header-description">
                Every CohostIQ account runs on the same core: accounting, PMS sync, maintenance, and reporting. From there, switch on the modules you need &mdash; cleaning operations, AI guest messaging, a unified inbox, upsells, and a branded guest portal.
            </p>
        </div>
    </section>

    <!-- Core + Modules Overview -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">How CohostIQ Is Built</span>
                <h2 class="section-title">The Core Does the Money and the Ops. Modules Do the Rest.</h2>
                <p class="section-description">
                    The core is the part that has to be right every month: your books, your reservation data, your repairs, and your reports. Add-on modules bolt on when you want them, and everything a module does still flows back into the core.
                </p>
            </div>

            <!-- The Core -->
            <div style="margin-bottom: 12px; font-weight: 700; color: #0a9d78; text-transform: uppercase; letter-spacing: 0.6px; font-size: 13px;">The Core &mdash; on every account</div>
            <div class="features-grid" style="margin-bottom: 40px;">
                <div class="feature-card">
                    <div class="feature-icon">&#128176;</div>
                    <h3 class="feature-title">Accounting &amp; Owner Billing</h3>
                    <p class="feature-description">
                        Owner statements, per-property fee rules, cohost payout math, and two-way QuickBooks sync. The numbers foot to the penny, the same way, every month.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128279;</div>
                    <h3 class="feature-title">PMS Sync</h3>
                    <p class="feature-description">
                        Reservations and properties sync from Hospitable automatically. Smart lock and thermostat control ride along, included when you connect Hospitable.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128736;</div>
                    <h3 class="feature-title">Maintenance</h3>
                    <p class="feature-description">
                        Track every appliance with warranty dates and repair history, spot repeat offenders, and dispatch tickets to a field-ready mobile app.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128202;</div>
                    <h3 class="feature-title">Reporting</h3>
                    <p class="feature-description">
                        Year-over-year revenue, occupancy, expenses, ADR, and cleaning P&amp;L, with date filters and CSV or PDF export.
                    </p>
                </div>
            </div>

            <!-- Add-on Modules -->
            <div style="margin-bottom: 12px; font-weight: 700; color: #4a6cf7; text-transform: uppercase; letter-spacing: 0.6px; font-size: 13px;">Add-on Modules &mdash; switch on what you need</div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#129529;</div>
                    <h3 class="feature-title">Cleaning Operations</h3>
                    <p class="feature-description">
                        In-house cleaner scheduling, conditional checklists, crews, a mobile app, payroll, and supplies &amp; linens.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#129302;</div>
                    <h3 class="feature-title">AI Guest Messaging</h3>
                    <p class="feature-description">
                        CIQ Concierge drafts or auto-sends guest replies grounded in your real property data, and never invents details.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128241;</div>
                    <h3 class="feature-title">InboxIQ Unified Inbox</h3>
                    <p class="feature-description">
                        Every guest conversation across channels in one installable app, with tickets, presence, and a property calendar.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#127881;</div>
                    <h3 class="feature-title">Upsells &amp; Guest Portal</h3>
                    <p class="feature-description">
                        Sell early check-in, mid-stay cleans, and local experiences, and give guests a branded stay portal with live chat.
                    </p>
                </div>
            </div>

            <p style="text-align: center; color: #637381; font-size: 13px; margin-top: 24px; max-width: 720px; margin-left: auto; margin-right: auto;">
                The core is priced per property. Add-on modules are optional and priced separately &mdash; <a href="https://cohostiq.app/signup/request_demo.php" style="color:#4a6cf7;">talk to us</a> about turning one on.
            </p>
        </div>
    </section>

    <!-- Stack Comparison -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">What Does What</span>
                <h2 class="section-title">CohostIQ vs. The Tools You Already Use</h2>
                <p class="section-description">
                    We're not a PMS replacement. On the cleaning side, we do everything Turno does except run their marketplace, and we add the billing tie-in nobody else has. We're the layer that connects your operations to your owner billing so nothing gets dropped between systems.
                </p>
            </div>
            <?php
            $vendors = ['CohostIQ', 'PMS', 'Breezeway', 'Turno'];
            $rows = [
                ['Reservations and channel management', 'partial', 'full', 'no', 'no'],
                ['Owner statements and billing', 'full', 'no', 'no', 'no'],
                ['Cohost payout credit calculations', 'full', 'no', 'no', 'no'],
                ['Per-property fee rules and pass-throughs', 'full', 'no', 'no', 'no'],
                ['Cleaning job scheduling and dispatch', 'full', 'no', 'full', 'full'],
                ['Conditional checklists (day, guests, pets, season)', 'full', 'no', 'partial', 'no'],
                ['Cleaner marketplace (find new cleaners on demand)', 'no', 'no', 'no', 'full'],
                ['In-house crew payroll', 'full', 'no', 'partial', 'no'],
                ['Maintenance tickets and item tracking', 'full', 'partial', 'full', 'no'],
                ['Supplies and linen tracking', 'full', 'no', 'partial', 'no'],
                ['AI guest messaging grounded in your data', 'full', 'partial', 'no', 'no'],
                ['Guest upsells and a branded stay portal', 'full', 'partial', 'no', 'no'],
                ['Owner-facing portal with statements', 'full', 'partial', 'no', 'no'],
                ['QuickBooks sync for billing', 'full', 'no', 'no', 'no'],
            ];
            function compareMark($val) {
                if ($val === 'full') {
                    return '<span class="compare-mark compare-mark-full" aria-label="Yes">&#10003;</span>';
                } elseif ($val === 'partial') {
                    return '<span class="compare-mark compare-mark-partial" aria-label="Partial">Partial</span>';
                }
                return '<span class="compare-mark compare-mark-none" aria-label="No">&minus;</span>';
            }
            ?>
            <div class="compare-table">
                <div class="compare-header">
                    <div class="compare-feature">Capability</div>
                    <?php foreach ($vendors as $i => $v): ?>
                        <div class="compare-cell <?php echo $i === 0 ? 'compare-cell-cohost' : ''; ?>"><?php echo htmlspecialchars($v); ?></div>
                    <?php endforeach; ?>
                </div>
                <?php foreach ($rows as $i => $r): ?>
                    <div class="compare-row <?php echo $i % 2 === 0 ? 'compare-row-even' : 'compare-row-odd'; ?>">
                        <div class="compare-feature"><?php echo htmlspecialchars($r[0]); ?></div>
                        <?php for ($c = 1; $c <= 4; $c++): ?>
                            <div class="compare-cell" data-vendor="<?php echo htmlspecialchars($vendors[$c - 1]); ?>">
                                <span class="compare-cell-label"><?php echo htmlspecialchars($vendors[$c - 1]); ?></span>
                                <span class="compare-cell-mark"><?php echo compareMark($r[$c]); ?></span>
                            </div>
                        <?php endfor; ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <p style="text-align: center; color: #637381; font-size: 13px; margin-top: 16px;">
                Comparison reflects core product surface area. Many of these tools integrate with CohostIQ rather than competing with it.
            </p>
        </div>
    </section>

    <!-- ===================== THE CORE ===================== -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label" style="color:#0a9d78;">The Core</span>
                <h2 class="section-title">The Part That Has to Be Right Every Month</h2>
                <p class="section-description">
                    Accounting, PMS sync, maintenance, and reporting. This is the foundation every CohostIQ account runs on, and every module feeds back into it.
                </p>
            </div>
        </div>
    </section>

    <!-- Core: PMS Sync + Smart Home -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128279; PMS Sync &amp; Smart Home <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        CohostIQ connects to your existing PMS like Hospitable. We pull in reservation and property data, then add the billing, reporting, cleaning, and team management your PMS doesn't cover. You keep using your PMS for guests, channels, and messaging &mdash; and your smart locks and thermostats come along for the ride.
                    </p>
                    <ul class="feature-detail-list">
                        <li>OAuth connection to Hospitable, with more PMS platforms on the way</li>
                        <li>Automatic reservation sync for accurate billing calculations</li>
                        <li>Editable check-in and check-out times that push back to your PMS</li>
                        <li>Smart lock control with battery alerts and per-lock problem tracking &mdash; included on Hospitable</li>
                        <li>Thermostat control per property &mdash; included on Hospitable</li>
                        <li>Vacant homes re-lock themselves; every unlock is logged</li>
                        <li>Single source of truth for financial and operational data</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div class="dashboard-preview" style="min-height: 250px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="font-weight: 600; color: #1d2144;">PMS Connection</div>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">&#10003; Connected</span>
                        </div>
                        <div style="background: white; border-radius: 8px; padding: 16px; margin-bottom: 12px; border: 1px solid #e2e8f0;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #4a6cf7, #6b8aff); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700;">H</div>
                                <div>
                                    <div style="font-weight: 600; color: #1d2144;">Hospitable</div>
                                    <div style="font-size: 12px; color: #637381;">Last sync: 5 minutes ago</div>
                                </div>
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 12px;">
                            <div style="background: white; border-radius: 8px; padding: 12px; text-align: center; border: 1px solid #e2e8f0;">
                                <div style="font-size: 1.25rem; font-weight: 700; color: #1d2144;">24</div>
                                <div style="font-size: 11px; color: #637381;">Properties Synced</div>
                            </div>
                            <div style="background: white; border-radius: 8px; padding: 12px; text-align: center; border: 1px solid #e2e8f0;">
                                <div style="font-size: 1.25rem; font-weight: 700; color: #1d2144;">156</div>
                                <div style="font-size: 11px; color: #637381;">Reservations</div>
                            </div>
                        </div>
                        <div style="background: white; border-radius: 8px; padding: 12px 14px; border: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <span style="font-size: 18px;">&#128274;</span>
                                <div style="font-size: 13px; color: #1d2144; font-weight: 500;">Lakeside Cabin &mdash; front door</div>
                            </div>
                            <span style="padding: 4px 10px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px;">Locked &middot; 87%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: Billing -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128176; Accounting &amp; Owner Statements <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        Stop spending hours on spreadsheets. CohostIQ automatically generates professional owner statements, tracks expenses, and ensures you never miss a billable item again.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Automatic statement generation from reservation data</li>
                        <li>Customizable fee structures per property or owner</li>
                        <li>Track expenses with receipts and categorization</li>
                        <li>Support for management fees, cleaning fees, and pass-through costs</li>
                        <li>One-time and recurring owner charges, plus owner credits</li>
                        <li>PDF export for easy sharing with owners</li>
                        <li>All Airbnb payout methods: cohost payouts, host-only fees, and split payouts</li>
                        <li>QuickBooks integration so statements post directly without double entry</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; padding: 24px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div>
                                <div style="font-weight: 600; color: #1d2144;">Owner Statement</div>
                                <div style="font-size: 12px; color: #637381;">January 2025, Lakeside Cabin</div>
                            </div>
                            <span style="padding: 6px 14px; background: #4a6cf7; color: white; border-radius: 6px; font-size: 12px;">Download PDF</span>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Gross Revenue</span>
                                <span style="font-weight: 600; color: #1d2144;">$4,850.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Management Fee (15%)</span>
                                <span style="color: #ff6b6b;">-$727.50</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Cleaning Expenses</span>
                                <span style="color: #ff6b6b;">-$360.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Maintenance</span>
                                <span style="color: #ff6b6b;">-$125.00</span>
                            </div>
                            <div style="border-top: 2px solid #1d2144; margin-top: 12px; padding-top: 12px; display: flex; justify-content: space-between;">
                                <span style="font-weight: 700; color: #1d2144;">Owner Payout</span>
                                <span style="font-weight: 700; color: #13c296; font-size: 1.25rem;">$3,637.50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: Airbnb Payouts -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128181; Every Airbnb Payout Method, Handled <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        Airbnb keeps changing how payouts work, and every owner seems to be on a different method. CohostIQ handles all of them. The fee math is right whether your owners are on cohost payouts, host-only fees, or split payouts, with no manual workarounds.
                    </p>
                    <ul class="feature-detail-list">
                        <li><strong>Cohost Payouts:</strong> Airbnb pays you directly, then you pay your owner their share</li>
                        <li><strong>Host-Only Fees:</strong> Airbnb pays the owner, and your management fee is deducted automatically</li>
                        <li><strong>Split Payouts:</strong> Airbnb splits the payout between you and the owner based on your agreement</li>
                        <li>Different owners can be on different methods, and our calculations are correct for each</li>
                        <li>Per-property payout rules so different owners can be on different methods</li>
                        <li>Accurate fee calculations regardless of which method each property uses</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Payout Configuration</span>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">3 Methods Active</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Lakeside Cabin</div>
                                <div style="font-size: 12px; color: #637381;">Owner: John Davis</div>
                            </div>
                            <span style="padding: 4px 12px; background: #e8f4fd; color: #4a6cf7; border-radius: 4px; font-size: 12px; font-weight: 600;">Cohost Payout</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Sunset Villa</div>
                                <div style="font-size: 12px; color: #637381;">Owner: Sarah Kim</div>
                            </div>
                            <span style="padding: 4px 12px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px; font-weight: 600;">Host-Only Fee</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Mountain View</div>
                                <div style="font-size: 12px; color: #637381;">Owner: Mike Torres</div>
                            </div>
                            <span style="padding: 4px 12px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 12px; font-weight: 600;">Split Payout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: QuickBooks -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128218; Two-Way QuickBooks Sync <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        Keep your books in sync without double entry. CohostIQ connects directly to QuickBooks so owner statements, expenses, credits, and payouts flow automatically into your accounting, and changes reconcile both directions. Saves hours every month and keeps the financials accurate.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Automatically sync owner statements and invoices to QuickBooks</li>
                        <li>Credit memos and owner credits recorded automatically, with duplicate protection</li>
                        <li>Map revenue, management fees, and expenses to your QuickBooks chart of accounts</li>
                        <li>Import and categorize QuickBooks expenses back onto owner statements</li>
                        <li>Push owner payouts directly into QuickBooks for clean reconciliation</li>
                        <li>Per-owner and per-property financial records synced automatically</li>
                        <li>Eliminate manual data entry and reduce accounting errors</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: #2CA01C; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 14px;">QB</div>
                                <span style="font-weight: 600; color: #1d2144;">QuickBooks Sync</span>
                            </div>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">&#10003; Connected</span>
                        </div>
                        <div style="padding: 16px 20px;">
                            <div style="font-size: 12px; color: #637381; margin-bottom: 12px;">Recent Sync Activity</div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Owner Statement, Lakeside Cabin</div>
                                        <div style="font-size: 11px; color: #637381;">Invoice #1042 created in QuickBooks</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Owner Credit, Sarah Kim</div>
                                        <div style="font-size: 11px; color: #637381;">Credit memo #204 recorded</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Owner Payout, John Davis</div>
                                        <div style="font-size: 11px; color: #637381;">$3,637.50 recorded as bill payment</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                            </div>
                            <div style="margin-top: 14px; padding-top: 14px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 12px; color: #637381;">Last sync: 2 minutes ago</span>
                                <span style="font-size: 12px; color: #637381;">47 items synced this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: Maintenance -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128736; Maintenance &amp; Property Item Tracking <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        Never let a repair slip through the cracks. Track every appliance and item at each property, identify repeat offenders, and keep a complete maintenance history. Plus, tickets can be auto-created from your existing tools.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Track appliances, furniture, and items per property with purchase dates and warranties</li>
                        <li>Identify repeat offenders, items that keep breaking down</li>
                        <li>Auto-create tickets from Hospitable, HostBuddy, and Turno integrations</li>
                        <li>Assign tasks to maintenance staff or contractors with notifications</li>
                        <li>Link maintenance costs to specific items and properties for accurate billing</li>
                        <li>Complete history log showing all work done on each item</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Property Items</span>
                            <span style="padding: 4px 12px; background: #ff6b6b; color: white; border-radius: 20px; font-size: 12px;">2 Need Attention</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Samsung HVAC Unit</div>
                                <div style="font-size: 12px; color: #637381;">Lakeside Cabin, 4 repairs this year</div>
                            </div>
                            <span style="padding: 4px 12px; background: #ff6b6b; color: white; border-radius: 4px; font-size: 12px;">Repeat Issue</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Hot Tub, Bullfrog A7</div>
                                <div style="font-size: 12px; color: #637381;">Sunset Villa, warranty expires 3/24</div>
                            </div>
                            <span style="padding: 4px 12px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 12px;">Check Warranty</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">LG Washer/Dryer</div>
                                <div style="font-size: 12px; color: #637381;">Mountain View, no issues</div>
                            </div>
                            <span style="padding: 4px 12px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px;">Good</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: Maintenance Mobile App -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128295; Mobile App for Maintenance Crews <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        A field-ready app for in-house maintenance staff and contractors. Tickets show on the technician's phone with full property and item history, so they walk in already knowing what they're working on. They mark complete with photos and parts used, and the cost lands on the right owner statement automatically.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Assigned tickets with property, item, and full repair history on hand</li>
                        <li>Photo uploads of the problem and the completed fix</li>
                        <li>Log parts used, labor hours, and notes per ticket</li>
                        <li>Assigned, geofenced smart-lock unlock and re-lock right on the ticket</li>
                        <li>Push notifications and SMS for new and updated assignments</li>
                        <li>Single sign-on from the manager portal, no separate contractor accounts</li>
                        <li>Costs flow straight to the owner statement with full audit trail</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #1d2144, #2d3361); border-radius: 12px; padding: 28px; color: white;">
                        <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Ticket #1184</div>
                        <div style="font-weight: 700; font-size: 1.25rem; margin-bottom: 4px;">HVAC Not Cooling</div>
                        <div style="font-size: 13px; opacity: 0.8; margin-bottom: 20px;">Lakeside Cabin, Samsung HVAC Unit</div>
                        <div style="background: rgba(255, 107, 107, 0.15); border: 1px solid rgba(255, 107, 107, 0.35); border-radius: 10px; padding: 12px 14px; margin-bottom: 12px;">
                            <div style="font-size: 11px; font-weight: 600; color: #ff9b8a; text-transform: uppercase; letter-spacing: 0.4px; margin-bottom: 4px;">Repeat Issue</div>
                            <div style="font-size: 13px; opacity: 0.9;">4 repairs this year. Last service 47 days ago.</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.1); border-radius: 10px; padding: 14px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 14px;">Photo: thermostat reading</span>
                            <span style="color: #13c296; font-weight: 700;">&#10003;</span>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); border-radius: 10px; padding: 14px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 14px; font-weight: 600;">Log parts: capacitor + labor 1.5 hrs</span>
                            <span style="font-size: 12px; opacity: 0.7;">In progress</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core: Reporting -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128202; Reporting &amp; Analytics <?php echo ciq_badge_core(); ?></h3>
                    <p>
                        Make data-driven decisions with comprehensive reports. Track occupancy, revenue, expenses, and trends across your entire portfolio or drill down to individual properties.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Year-over-year revenue comparison reports</li>
                        <li>Occupancy rate tracking by property and time period</li>
                        <li>Expense breakdown by category and property</li>
                        <li>Average daily rate (ADR) and RevPAR metrics</li>
                        <li>Customizable date ranges and filters</li>
                        <li>Export to CSV or PDF for further analysis</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; padding: 24px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="font-weight: 600; color: #1d2144;">Revenue Comparison</div>
                            <div style="font-size: 12px; color: #637381;">2024 vs 2023</div>
                        </div>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 20px;">
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">$48.2K</div>
                                <div style="font-size: 12px; color: #637381;">This Year</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 12%</div>
                            </div>
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">78%</div>
                                <div style="font-size: 12px; color: #637381;">Occupancy</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 5%</div>
                            </div>
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">$285</div>
                                <div style="font-size: 12px; color: #637381;">Avg/Night</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 8%</div>
                            </div>
                        </div>
                        <div class="preview-chart" style="height: 100px;">
                            <div class="chart-bar" style="height: 50%;"></div>
                            <div class="chart-bar" style="height: 70%;"></div>
                            <div class="chart-bar" style="height: 60%;"></div>
                            <div class="chart-bar" style="height: 85%;"></div>
                            <div class="chart-bar" style="height: 95%;"></div>
                            <div class="chart-bar" style="height: 100%;"></div>
                            <div class="chart-bar" style="height: 90%;"></div>
                            <div class="chart-bar" style="height: 75%;"></div>
                            <div class="chart-bar" style="height: 65%;"></div>
                            <div class="chart-bar" style="height: 80%;"></div>
                            <div class="chart-bar" style="height: 88%;"></div>
                            <div class="chart-bar" style="height: 92%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== ADD-ON MODULES ===================== -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label" style="color:#4a6cf7;">Add-On Modules</span>
                <h2 class="section-title">Switch On What Your Operation Needs</h2>
                <p class="section-description">
                    Optional modules that extend the core. Turn on cleaning operations, AI guest messaging, a unified inbox, upsells, and a branded guest portal &mdash; each priced separately, each feeding right back into your core accounting and reporting.
                </p>
            </div>
        </div>
    </section>

    <!-- Add-on: Cleaning Operations -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#129529; Full Cleaning Operations <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Run your in-house cleaners end to end, or bring in your Turno templates and projects. Either way, cleaning is a first-class part of CohostIQ, and every dollar spent on cleaning lands on the right owner's statement automatically.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Jobs auto-created from reservations and turnover schedules</li>
                        <li>Preferred cleaner ordering per property with automatic assignment</li>
                        <li>Crews with a paid lead and sub members, dispatched as a single unit</li>
                        <li>Reusable templates with spaces, tasks, and sub-tasks</li>
                        <li>Conditional checklists: items appear based on day of week, guest count, pet count, or season</li>
                        <li>Four pay models per template: total job, lead + sub, per hour, or per room</li>
                        <li>Per-cleaner pay overrides by property size, with autosave and bulk fill</li>
                        <li>Inspection triggers and photo audits for new cleaners, long absences, or random checks</li>
                        <li>Provisional holds that block a turnover temporarily and release themselves</li>
                        <li>Direct import from Turno templates with side-by-side compare</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Today's Cleanings</span>
                            <span style="padding: 4px 12px; background: #4a6cf7; color: white; border-radius: 20px; font-size: 12px;">7 Jobs</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Lakeside Cabin</div>
                                <div style="font-size: 12px; color: #637381;">Maria's Crew, 11:00 AM checkout</div>
                            </div>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 4px; font-size: 12px;">In Progress</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Sunset Villa</div>
                                <div style="font-size: 12px; color: #637381;">Auto-assigned, pet stay + deep clean</div>
                            </div>
                            <span style="padding: 4px 12px; background: #e8f4fd; color: #4a6cf7; border-radius: 4px; font-size: 12px;">Accepted</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Mountain View</div>
                                <div style="font-size: 12px; color: #637381;">From Turno, 2 photos uploaded</div>
                            </div>
                            <span style="padding: 4px 12px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px;">Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Cleaning Mobile App -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128241; Mobile App for Cleaners <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        A dedicated mobile app for the people doing the work. Cleaners see their jobs, run the checklist, upload photos, report problems, and track linens. You get a full audit trail behind every turnover.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Job acceptance, timer, and step-by-step checklist</li>
                        <li>Photo uploads tied to specific tasks and rooms</li>
                        <li>Problem and damage reporting back to the manager</li>
                        <li>Linen removal tracking when laundry goes off-site</li>
                        <li>Optional GPS check-in to confirm arrival</li>
                        <li>Single sign-on from the manager portal, no separate accounts</li>
                        <li>Push notifications and SMS alerts with a full audit log</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #1d2144, #2d3361); border-radius: 12px; padding: 28px; color: white;">
                        <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Job 4 of 7 today</div>
                        <div style="font-weight: 700; font-size: 1.25rem; margin-bottom: 4px;">Lakeside Cabin</div>
                        <div style="font-size: 13px; opacity: 0.8; margin-bottom: 20px;">3 bed / 2 bath, pet stay</div>
                        <div style="background: rgba(255,255,255,0.1); border-radius: 10px; padding: 14px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 14px;">Strip beds and bag linens</span>
                            <span style="color: #13c296; font-weight: 700;">&#10003;</span>
                        </div>
                        <div style="background: rgba(255,255,255,0.1); border-radius: 10px; padding: 14px; margin-bottom: 10px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 14px;">Photo: kitchen counters</span>
                            <span style="color: #13c296; font-weight: 700;">&#10003;</span>
                        </div>
                        <div style="background: rgba(255,255,255,0.2); border: 1px solid rgba(255,255,255,0.3); border-radius: 10px; padding: 14px; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 14px; font-weight: 600;">Restock toilet paper (5 rolls)</span>
                            <span style="font-size: 12px; opacity: 0.7;">In progress</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Cleaner Payroll -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128181; Cleaner Pay &amp; Payroll <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Cleaner pay is calculated per job, totaled per pay period, and paid out the way your cleaners actually want to be paid. Cash, check, Venmo, Zelle, PayPal, Stripe, and QuickBooks payroll (coming soon), with quick-pay deep links to skip the typing.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Per-cleaner unpaid balance and full payment history</li>
                        <li>Quick-pay deep links to Venmo and PayPal with cleaner handles on file</li>
                        <li>Pay cleaners through Stripe direct to their bank, or via QuickBooks payroll (coming soon)</li>
                        <li>Crew pay split: lead is paid (1099), sub members are hidden labor</li>
                        <li>Pay matrix view for fast rate changes across cleaners and property sizes</li>
                        <li>Job-level audit of what was earned, when, and who paid it</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0;">
                            <span style="font-weight: 600; color: #1d2144;">Payroll Period</span>
                            <div style="font-size: 12px; color: #637381;">May 15 to May 28</div>
                        </div>
                        <div style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #13c296, #28d6a8); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 13px;">MC</div>
                                <div>
                                    <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Maria's Crew</div>
                                    <div style="font-size: 12px; color: #637381;">12 jobs, Venmo</div>
                                </div>
                            </div>
                            <div style="font-weight: 700; color: #1d2144;">$1,840</div>
                        </div>
                        <div style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #4a6cf7, #6b8aff); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 13px;">JR</div>
                                <div>
                                    <div style="font-weight: 500; color: #1d2144; font-size: 14px;">James R.</div>
                                    <div style="font-size: 12px; color: #637381;">7 jobs, Zelle</div>
                                </div>
                            </div>
                            <div style="font-weight: 700; color: #1d2144;">$945</div>
                        </div>
                        <div style="padding: 14px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #ff6b6b, #ff8787); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600; font-size: 13px;">LK</div>
                                <div>
                                    <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Linda K.</div>
                                    <div style="font-size: 12px; color: #637381;">9 jobs, Stripe</div>
                                </div>
                            </div>
                            <div style="font-weight: 700; color: #1d2144;">$1,215</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Supplies and Linens -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128230; Supplies, Linens, and Restock Automation <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Stop running out of paper towels. Stop losing sheets. CohostIQ tracks every consumable and linen at the property level, scales kits to the size of the home, and triggers a restock job before you hear about it from a guest.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Build reusable supply kits with per-bedroom, per-bathroom, or fixed scaling</li>
                        <li>Property status dashboard with restock progress and low-stock alerts</li>
                        <li>Auto-created supply delivery jobs on turnover or calendar triggers</li>
                        <li>Linen modes per property: on-site, off-site cleaner, vendor service, or mixed</li>
                        <li>Off-site linen checkout tracking with days-out counter</li>
                        <li>Item catalog with master inventory and unit costs</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Property Supply Status</span>
                            <span style="padding: 4px 12px; background: #ff6b6b; color: white; border-radius: 20px; font-size: 12px;">2 Low</span>
                        </div>
                        <div style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                <span style="font-weight: 500; color: #1d2144; font-size: 14px;">Lakeside Cabin</span>
                                <span style="font-size: 12px; color: #ff6b6b;">Restock needed</span>
                            </div>
                            <div style="background: #f1f5f9; height: 6px; border-radius: 3px; overflow: hidden;">
                                <div style="width: 28%; background: #ff6b6b; height: 100%;"></div>
                            </div>
                            <div style="font-size: 11px; color: #637381; margin-top: 6px;">TP 2/10, paper towels 1/4, dish soap empty</div>
                        </div>
                        <div style="padding: 14px 20px; border-bottom: 1px solid #e2e8f0;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                <span style="font-weight: 500; color: #1d2144; font-size: 14px;">Sunset Villa</span>
                                <span style="font-size: 12px; color: #856404;">Watch</span>
                            </div>
                            <div style="background: #f1f5f9; height: 6px; border-radius: 3px; overflow: hidden;">
                                <div style="width: 62%; background: #fbbf24; height: 100%;"></div>
                            </div>
                            <div style="font-size: 11px; color: #637381; margin-top: 6px;">Linens: 4 sets off-site, 6 days out</div>
                        </div>
                        <div style="padding: 14px 20px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
                                <span style="font-weight: 500; color: #1d2144; font-size: 14px;">Mountain View</span>
                                <span style="font-size: 12px; color: #13c296;">Stocked</span>
                            </div>
                            <div style="background: #f1f5f9; height: 6px; border-radius: 3px; overflow: hidden;">
                                <div style="width: 92%; background: #13c296; height: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: AI Guest Messaging (CIQ Concierge) -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#129302; AI Guest Messaging &mdash; CIQ Concierge <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        An AI that answers guests like a member of your team, grounded in your real property data. It drafts replies for you to approve, or sends vetted answers on its own, and it never invents details it can't verify.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Replies grounded in each property's real facts, not guesswork</li>
                        <li>Draft mode for approval, or auto-send mode with quiet-hours awareness</li>
                        <li>Checks live availability before answering booking and extension questions</li>
                        <li>Handles early check-in requests and moves the reservation so the door code updates</li>
                        <li>Company-wide voice and hard-rule guardrails you control</li>
                        <li>Learns per-property facts and pulls from your company SOPs</li>
                        <li>A human can step in at any point, and it never contradicts a teammate's message</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 34px; height: 34px; background: linear-gradient(135deg, #ec4899, #f472b6); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 15px;">&#10024;</div>
                                <span style="font-weight: 600; color: #1d2144;">CIQ Concierge</span>
                            </div>
                            <span style="padding: 4px 12px; background: #e6f9f3; color: #0a9d78; border-radius: 20px; font-size: 12px;">Auto-send on</span>
                        </div>
                        <div style="padding: 16px 20px;">
                            <div style="background: #f1f5f9; border-radius: 12px 12px 12px 2px; padding: 10px 14px; margin-bottom: 10px; max-width: 78%;">
                                <div style="font-size: 13px; color: #1d2144;">Hi! Is early check-in possible for tomorrow? We'll be in town by 11.</div>
                                <div style="font-size: 11px; color: #94a3b8; margin-top: 4px;">Guest &middot; Emma</div>
                            </div>
                            <div style="background: linear-gradient(135deg, #4a6cf7, #6b8aff); color: white; border-radius: 12px 12px 2px 12px; padding: 10px 14px; margin-left: auto; max-width: 82%;">
                                <div style="font-size: 13px;">Good news, Emma &mdash; the cabin is open the night before, so a 12:00 check-in works. I've updated your reservation and your door code is active from noon.</div>
                                <div style="font-size: 11px; opacity: 0.85; margin-top: 4px;">CIQ Concierge &middot; checked availability</div>
                            </div>
                            <div style="margin-top: 14px; padding-top: 12px; border-top: 1px solid #e2e8f0; display: flex; gap: 8px; flex-wrap: wrap;">
                                <span style="padding: 4px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; font-size: 11px; color: #637381;">Grounded in property data</span>
                                <span style="padding: 4px 10px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; font-size: 11px; color: #637381;">Quiet hours aware</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: InboxIQ Unified Inbox -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128241; InboxIQ &mdash; Your Whole Guest Inbox in One App <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Every guest conversation, across every channel, in a single installable app for your team. See who's viewing a thread, spin up a ticket without leaving it, unlock the door from the conversation, and keep operations moving from your phone.
                    </p>
                    <ul class="feature-detail-list">
                        <li>All guest channels in one inbox with brand-colored platform chips</li>
                        <li>Live presence: see who else is viewing or typing in a conversation</li>
                        <li>Create and assign tickets, add notes, and hand off to maintenance inline</li>
                        <li>Property calendar showing cleanings, maintenance, and showings</li>
                        <li>Unlock or lock a smart lock right from the thread</li>
                        <li>CIQ Concierge suggestions built in, with a toggle for auto-send</li>
                        <li>Caller ID pops that match owners, contractors, staff, and guests</li>
                        <li>Installs to the home screen with push notifications by category</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #1d2144, #2d3361); border-radius: 12px; padding: 24px; color: white;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px;">
                            <div style="font-weight: 700; font-size: 1.1rem;">InboxIQ</div>
                            <span style="padding: 3px 10px; background: rgba(255,255,255,0.15); border-radius: 20px; font-size: 11px;">4 unread</span>
                        </div>
                        <div style="background: rgba(255,255,255,0.1); border-radius: 10px; padding: 12px 14px; margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 14px; font-weight: 600;">Emma &middot; Lakeside Cabin</span>
                                <span style="padding: 2px 8px; background: #ff5a5f; border-radius: 4px; font-size: 10px;">Airbnb</span>
                            </div>
                            <div style="font-size: 12px; opacity: 0.85; margin-top: 4px;">Early check-in confirmed &middot; 2 viewing now</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.1); border-radius: 10px; padding: 12px 14px; margin-bottom: 10px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 14px; font-weight: 600;">Marcus &middot; Sunset Villa</span>
                                <span style="padding: 2px 8px; background: #3d67ff; border-radius: 4px; font-size: 10px;">Vrbo</span>
                            </div>
                            <div style="font-size: 12px; opacity: 0.85; margin-top: 4px;">Ticket created: hot tub temperature</div>
                        </div>
                        <div style="display: flex; gap: 8px; margin-top: 14px;">
                            <span style="flex:1; text-align:center; padding: 8px; background: rgba(255,255,255,0.15); border-radius: 8px; font-size: 12px;">&#128274; Unlock</span>
                            <span style="flex:1; text-align:center; padding: 8px; background: rgba(255,255,255,0.15); border-radius: 8px; font-size: 12px;">&#127915; Ticket</span>
                            <span style="flex:1; text-align:center; padding: 8px; background: rgba(255,255,255,0.15); border-radius: 8px; font-size: 12px;">&#10024; Suggest</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Upsells + Guest Portal -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#127881; Upsells &amp; Branded Guest Portal <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Turn stays into revenue and give guests a home base. Offer early check-in, mid-stay cleans, and local experiences, fulfill them through a vendor app, and hand each guest a private, branded portal for their trip.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Sell add-on services and local experiences from a catalog you control</li>
                        <li>A vendor app so partners can accept and fulfill orders</li>
                        <li>Split calculator to price upsells and share revenue cleanly</li>
                        <li>AI inbox flags likely add-on interest for a one-click offer</li>
                        <li>Branded guest stay portal: trip details, house info, and amenities in your colors</li>
                        <li>Live chat with your team, right from the portal</li>
                        <li>Guest-chosen light, dark, or auto theme with your logo linking back to your site</li>
                        <li>Property advisories keep guests and staff on the same page about ongoing issues</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Your Stay &middot; Lakeside Cabin</span>
                            <span style="padding: 4px 12px; background: #f97316; color: white; border-radius: 20px; font-size: 12px;">Guest Portal</span>
                        </div>
                        <div style="padding: 16px 20px;">
                            <div style="font-size: 12px; color: #637381; margin-bottom: 10px;">Make your stay better</div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 14px; background: #f8fafc; border-radius: 8px; margin-bottom: 10px;">
                                <div>
                                    <div style="font-weight: 600; color: #1d2144; font-size: 13px;">Early check-in (12:00 PM)</div>
                                    <div style="font-size: 11px; color: #637381;">Get in early and start the weekend sooner</div>
                                </div>
                                <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 6px; font-size: 12px;">Add $45</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 14px; background: #f8fafc; border-radius: 8px; margin-bottom: 10px;">
                                <div>
                                    <div style="font-weight: 600; color: #1d2144; font-size: 13px;">Mid-stay clean</div>
                                    <div style="font-size: 11px; color: #637381;">Fresh towels and tidy-up on day 3</div>
                                </div>
                                <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 6px; font-size: 12px;">Add $60</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; align-items: center; padding: 12px 14px; background: #f8fafc; border-radius: 8px;">
                                <div>
                                    <div style="font-weight: 600; color: #1d2144; font-size: 13px;">Guided lake pontoon tour</div>
                                    <div style="font-size: 11px; color: #637381;">Local partner &middot; 2 hours</div>
                                </div>
                                <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 6px; font-size: 12px;">Add $180</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Owner Portal -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128274; Secure Owner Portal <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Build trust with complete transparency. Give property owners their own secure login to view reservations, statements, property performance, and maintenance history anytime they want.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Dedicated login for each property owner</li>
                        <li>View upcoming and past reservations</li>
                        <li>Access monthly and annual statements</li>
                        <li>See property performance metrics</li>
                        <li>Review maintenance history and expenses</li>
                        <li>Download attachments and tax documents from their profile</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #1d2144, #2d3361); border-radius: 12px; padding: 24px; color: white;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="width: 50px; height: 50px; background: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4a6cf7; font-weight: 700;">&#127968;</div>
                            <div>
                                <div style="font-weight: 600;">Owner Dashboard</div>
                                <div style="font-size: 12px; opacity: 0.7;">Welcome back, John</div>
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">This Month Revenue</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">$3,240</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">YTD Earnings</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">$28,450</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Upcoming Bookings</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">6</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Occupancy Rate</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">82%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: Team & Vendor Management -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128101; Team, Vendors &amp; Recurring Service Work <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Coordinate your entire team from one platform. Assign roles, manage permissions, schedule cleaners, and run recurring vendor work end to end &mdash; scheduled, fulfilled, billed, and paid &mdash; without leaving CohostIQ.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Role-based permissions (Admin, Manager, Cleaner, Maintenance, etc.)</li>
                        <li>Granular, group-assignable permissions for sensitive actions like door unlocks</li>
                        <li>Assign specific properties to specific team members</li>
                        <li>Track task completion and team performance</li>
                        <li>Vendor/contractor profiles with contact info and rates</li>
                        <li>Recurring service work on a real schedule: twice a week, every other Tuesday, the first Monday of the month, quarterly, or annually</li>
                        <li>Vendors get a Jobs list in the portal they already use &mdash; no extra login seat to buy</li>
                        <li>Vendors close their own visits, with the rate set in advance so closing records the work without setting the pay</li>
                        <li>Several photos per visit, uploaded one at a time so a weak signal at the property doesn't lose the batch</li>
                        <li>Smart-lock access with a server-timed knock gate: the vendor announces, the server holds the unlock for a full minute, and both times are on the record</li>
                        <li>Per-visit owner billing that actually posts the charge</li>
                        <li>One payables screen settles service visits and upsell orders together, because it's one invoice to the vendor</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0;">
                            <span style="font-weight: 600; color: #1d2144;">Team Members</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #4a6cf7, #6b8aff); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">SM</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Sarah Mitchell</div>
                                <div style="font-size: 12px; color: #637381;">Admin</div>
                            </div>
                            <span style="padding: 4px 10px; background: #e8f4fd; color: #4a6cf7; border-radius: 4px; font-size: 11px;">All Properties</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #13c296, #28d6a8); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">MC</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Maria Cleaning</div>
                                <div style="font-size: 12px; color: #637381;">Cleaner</div>
                            </div>
                            <span style="padding: 4px 10px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 11px;">8 Tasks Today</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ff6b6b, #ff8787); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">JH</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Jim's HVAC</div>
                                <div style="font-size: 12px; color: #637381;">Maintenance</div>
                            </div>
                            <span style="padding: 4px 10px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 11px;">2 Active</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add-on: HOA callout -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#127962; HOA Management <?php echo ciq_badge_addon(); ?></h3>
                    <p>
                        Running a homeowners or condo association instead of (or alongside) short-term rentals? CohostIQ has a dedicated association business type with dues billing, elections, violations, a branded member portal, and a daily action center.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Dues and assessment billing with rulesets per unit type, late fees, and online payment by card or bank transfer</li>
                        <li>Board elections with a nomination window, candidate review, and a certified ballot before voting opens</li>
                        <li>Violations with fines, notice tracking, and a member response or appeal workflow</li>
                        <li>Architectural review requests capturing the change, materials, contractor license, and CC&amp;R acknowledgment</li>
                        <li>Buildings and common areas with roof, life-safety, insurance and reserve detail, and inspection due dates</li>
                        <li>Branded member portal with your own logo, colors, and web address</li>
                        <li>Board role appointments (president, treasurer, secretary, ARC chair) with full history</li>
                        <li>Member request queue with detail view, reply, and status workflow</li>
                        <li>Document library with folders and the uploader on record</li>
                        <li>Daily action center: today's calendar, recent activity, and what needs attention</li>
                        <li>Property and member CSV import in a single pass</li>
                    </ul>
                    <p style="margin-top: 16px;">
                        <a href="hoa.php" style="color:#4a6cf7; font-weight:600;">See the HOA module &rarr;</a>
                    </p>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #6d28d9, #8b5cf6); border-radius: 12px; padding: 24px; color: white;">
                        <div style="font-weight: 700; font-size: 1.1rem; margin-bottom: 16px;">HOA Action Center</div>
                        <div style="background: rgba(255,255,255,0.12); border-radius: 10px; padding: 12px 14px; margin-bottom: 10px;">
                            <div style="font-size: 13px; font-weight: 600;">3 member requests waiting</div>
                            <div style="font-size: 12px; opacity: 0.85; margin-top: 2px;">Architectural review &middot; 2 dues questions</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.12); border-radius: 10px; padding: 12px 14px; margin-bottom: 10px;">
                            <div style="font-size: 13px; font-weight: 600;">Board meeting Thursday</div>
                            <div style="font-size: 12px; opacity: 0.85; margin-top: 2px;">Treasurer report due</div>
                        </div>
                        <div style="background: rgba(255,255,255,0.12); border-radius: 10px; padding: 12px 14px;">
                            <div style="font-size: 13px; font-weight: 600;">42 members &middot; 38 properties</div>
                            <div style="font-size: 12px; opacity: 0.85; margin-top: 2px;">Imported from one spreadsheet</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Features Grid -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">And More</span>
                <h2 class="section-title">Additional Capabilities</h2>
                <p class="section-description">
                    CohostIQ is packed with features to handle every aspect of your vacation rental business.
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#128222;</div>
                    <h3 class="feature-title">Caller ID Pops</h3>
                    <p class="feature-description">
                        When the phone rings, CohostIQ shows who's calling, matched against your owners, contractors, staff, and guests.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128221;</div>
                    <h3 class="feature-title">Company SOPs</h3>
                    <p class="feature-description">
                        A role-gated knowledge base for your standard procedures that your team, and Ask CohostIQ, can search.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128179;</div>
                    <h3 class="feature-title">Direct &amp; Partner Bookings</h3>
                    <p class="feature-description">
                        Take bookings outside the OTAs and invoice each partner their own way, through Stripe or QuickBooks.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128179;</div>
                    <h3 class="feature-title">Stripe Payments</h3>
                    <p class="feature-description">
                        Collect direct-booking deposits, charge guests for damages or extra fees, and pay owners out through Stripe.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128196;</div>
                    <h3 class="feature-title">Document Storage</h3>
                    <p class="feature-description">
                        Store leases, contracts, receipts, and property documents securely. Everything in one organized place.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128231;</div>
                    <h3 class="feature-title">Notifications</h3>
                    <p class="feature-description">
                        Email, SMS, and push alerts for reservations, task assignments, maintenance, and cleaning, tuned by category.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128736;</div>
                    <h3 class="feature-title">Purchasing Workflow</h3>
                    <p class="feature-description">
                        Track purchase requests from creation to fulfillment. Know what was ordered, for which property, and who approved it.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128200;</div>
                    <h3 class="feature-title">Instant Scalability</h3>
                    <p class="feature-description">
                        Adding a new property used to take 1-2 hours of setup. With CohostIQ, it's fast. Scale your portfolio without scaling your workload.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Transform Your Property Management?</h2>
                <p class="cta-description">
                    First 2 months are on us when you start your free trial today.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/signup.php" class="btn btn-white btn-lg">Start Free Trial</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
