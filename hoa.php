<?php
$pageTitle = 'HOA & COA Management Software - CohostIQ';
$pageDescription = 'CohostIQ for homeowner and condo associations: dues billing, board management, member portal, maintenance tracking, document storage, QuickBooks sync, and more.';
$currentPage = 'hoa';
$pageCanonical = '/hoa.php';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>HOA &amp; COA Management</span>
            </nav>
            <h1 class="page-header-title">HOA &amp; COA Management That Actually Works</h1>
            <p class="page-header-description">
                One platform for dues, maintenance, member communication, and financials. No spreadsheets. No email chains. No paper ballots.
            </p>
            <div style="margin-top: 30px; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-primary btn-lg">Request a Demo</a>
                <a href="#hoa-pricing" class="btn btn-outline btn-lg">View Pricing</a>
            </div>
        </div>
    </section>

    <!-- Who It's For -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Built For</span>
                <h2 class="section-title">From 20-Unit Condos to 500-Home Communities</h2>
            </div>
            <div class="integrations-grid integrations-grid-3">
                <div class="integration-card">
                    <h4>Homeowner Associations</h4>
                    <p>Single-family communities with shared common areas, landscaping, and amenities. Track dues, manage requests, and keep homeowners informed.</p>
                </div>
                <div class="integration-card">
                    <h4>Condo Associations</h4>
                    <p>Multi-unit buildings with shared infrastructure — elevators, lobbies, parking, pools. Manage assessments, reserve funds, and vendor contracts.</p>
                </div>
                <div class="integration-card">
                    <h4>Management Companies</h4>
                    <p>Multiple associations under one account. Each community gets its own billing, portal, and reporting — your team sees everything in one dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Features - Compact Grid -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Core Features</span>
                <h2 class="section-title">Everything Your Board Needs</h2>
            </div>
            <div class="integrations-grid">
                <div class="integration-card">
                    <h4>Dues &amp; Assessment Billing</h4>
                    <p>Monthly, quarterly, or annual dues with flexible rulesets per unit type. Special assessments for capital projects. Late fees auto-applied. Every charge flows into statements and QuickBooks.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Recurring Dues</span>
                        <span class="capability-tag">Special Assessments</span>
                        <span class="capability-tag">Late Fees</span>
                        <span class="capability-tag">Auto Statements</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Member Portal</h4>
                    <p>Homeowners get a secure login to view statements, submit maintenance requests, download documents, and check community updates. No more "can you email me my balance?" messages.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Statements</span>
                        <span class="capability-tag">Requests</span>
                        <span class="capability-tag">Documents</span>
                        <span class="capability-tag">Calendar</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Board Management</h4>
                    <p>Track board roles — president, treasurer, secretary — with appointment dates and full history. Dedicated Action Center with today's calendar, recent activity, and items needing attention.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Role Tracking</span>
                        <span class="capability-tag">Term History</span>
                        <span class="capability-tag">Action Center</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Maintenance &amp; Work Orders</h4>
                    <p>Members submit requests through the portal. Your team triages, assigns, and tracks every ticket. Route optimization, drag-and-drop scheduling, and full repair history per asset.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Request Queue</span>
                        <span class="capability-tag">Asset Tracking</span>
                        <span class="capability-tag">Day Planner</span>
                        <span class="capability-tag">Repair History</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Document Management</h4>
                    <p>Store CC&amp;Rs, bylaws, meeting minutes, financial reports, and community notices. Members download what they need from the portal — no more Dropbox folders or email chains.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">CC&amp;Rs &amp; Bylaws</span>
                        <span class="capability-tag">Meeting Minutes</span>
                        <span class="capability-tag">Portal Access</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Reporting &amp; QuickBooks Sync</h4>
                    <p>Financial reports, expense tracking, and tax records — all exportable. QuickBooks integration pushes statements, dues, and expenses automatically. Year-end is a formality.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Financial Reports</span>
                        <span class="capability-tag">QuickBooks Sync</span>
                        <span class="capability-tag">CSV &amp; PDF Export</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Onboarding -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Getting Started</span>
                <h2 class="section-title">Up and Running in an Afternoon</h2>
                <p class="section-description">
                    No PMS to connect, no reservations to import — just your properties and members.
                </p>
            </div>
            <div class="integration-flow">
                <div class="integration-flow-step">
                    <div class="integration-flow-number">1</div>
                    <h4>Import Your Community</h4>
                    <p>Upload one CSV with your properties and members. CohostIQ creates everything in a single pass.</p>
                </div>
                <div class="integration-flow-arrow" aria-hidden="true">&rarr;</div>
                <div class="integration-flow-step">
                    <div class="integration-flow-number">2</div>
                    <h4>Set Up Dues</h4>
                    <p>Configure dues rulesets — monthly, quarterly, or annual. Set amounts by unit type or lot size.</p>
                </div>
                <div class="integration-flow-arrow" aria-hidden="true">&rarr;</div>
                <div class="integration-flow-step">
                    <div class="integration-flow-number">3</div>
                    <h4>Invite Your Board</h4>
                    <p>Add board members, assign roles, and open the member portal. Your community is live.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing -->
    <section class="section" id="hoa-pricing">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Simple Pricing</span>
                <h2 class="section-title">One Price. Every Feature. No Surprises.</h2>
                <p class="section-description">
                    No feature gating, no per-transaction fees, no module upsells. Every plan includes the full platform.
                </p>
            </div>
            <div class="integrations-grid integrations-grid-3">
                <div class="integration-card" style="text-align: center;">
                    <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Small</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--dark); line-height: 1;">$49<span style="font-size: 1rem; font-weight: 500; color: var(--body-color);">/mo</span></div>
                    <p style="margin: 12px 0 0; font-size: 0.9rem; color: var(--body-color);">Up to 50 units</p>
                    <div style="margin: 20px 0; padding-top: 20px; border-top: 1px solid var(--border-color); text-align: left;">
                        <ul class="feature-list" style="font-size: 0.85rem;">
                            <li>All core features</li>
                            <li>Member portal</li>
                            <li>Dues &amp; assessment billing</li>
                            <li>Board management</li>
                            <li>Maintenance tracking</li>
                            <li>Document storage</li>
                            <li>QuickBooks sync</li>
                        </ul>
                    </div>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline" style="width: 100%;">Get Started</a>
                </div>
                <div class="integration-card integration-card-featured" style="text-align: center;">
                    <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Mid-Size</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--dark); line-height: 1;">$99<span style="font-size: 1rem; font-weight: 500; color: var(--body-color);">/mo</span></div>
                    <p style="margin: 12px 0 0; font-size: 0.9rem; color: var(--body-color);">51 – 200 units</p>
                    <div style="margin: 20px 0; padding-top: 20px; border-top: 1px solid var(--border-color); text-align: left;">
                        <ul class="feature-list" style="font-size: 0.85rem;">
                            <li>Everything in Small</li>
                            <li>Multi-community support</li>
                            <li>Advanced reporting</li>
                            <li>Team management</li>
                            <li>Route optimization</li>
                            <li>Priority support</li>
                        </ul>
                    </div>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-primary" style="width: 100%;">Get Started</a>
                </div>
                <div class="integration-card" style="text-align: center;">
                    <div style="font-size: 0.85rem; font-weight: 600; color: var(--primary); text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">Large</div>
                    <div style="font-size: 2.5rem; font-weight: 800; color: var(--dark); line-height: 1;">$179<span style="font-size: 1rem; font-weight: 500; color: var(--body-color);">/mo</span></div>
                    <p style="margin: 12px 0 0; font-size: 0.9rem; color: var(--body-color);">201 – 500 units</p>
                    <div style="margin: 20px 0; padding-top: 20px; border-top: 1px solid var(--border-color); text-align: left;">
                        <ul class="feature-list" style="font-size: 0.85rem;">
                            <li>Everything in Mid-Size</li>
                            <li>Unlimited communities</li>
                            <li>Bulk operations</li>
                            <li>Dedicated onboarding</li>
                            <li>Custom reporting</li>
                        </ul>
                    </div>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline" style="width: 100%;">Get Started</a>
                </div>
            </div>
            <p style="text-align: center; color: var(--body-color); font-size: 0.9rem; margin-top: 24px;">
                500+ units? <a href="https://cohostiq.app/signup/request_demo.php">Contact us</a> for custom pricing. All plans include 2 months free.
            </p>
        </div>
    </section>

    <!-- Before/After -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Why CohostIQ</span>
                <h2 class="section-title">Not Another Bloated HOA Platform</h2>
            </div>
            <div class="problems-grid">
                <div class="problem-card">
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <span>Before</span>
                            <p>Treasurer tracks dues in Excel. Secretary emails minutes. President texts the maintenance guy. Nobody knows who paid.</p>
                        </div>
                        <div class="problem-after">
                            <span>With CohostIQ</span>
                            <p>Dues auto-billed, statements generated, maintenance tracked, documents shared — all in one platform with a member portal.</p>
                        </div>
                    </div>
                </div>
                <div class="problem-card">
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <span>Before</span>
                            <p>Maintenance requests come via email, text, phone, and hallway conversations. Half get lost.</p>
                        </div>
                        <div class="problem-after">
                            <span>With CohostIQ</span>
                            <p>Members submit requests through the portal. Every request tracked with status, assignment, and resolution history.</p>
                        </div>
                    </div>
                </div>
                <div class="problem-card">
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <span>Before</span>
                            <p>Year-end financials take weeks. The accountant re-keys everything from bank statements.</p>
                        </div>
                        <div class="problem-after">
                            <span>With CohostIQ</span>
                            <p>QuickBooks syncs automatically. Statements, expenses, and dues flow in real-time. Year-end is a formality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Modernize Your Association?</h2>
                <p class="cta-description">
                    Start with 2 months free. No contracts, cancel anytime.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-white btn-lg">Request a Demo</a>
                    <a href="#hoa-pricing" class="btn btn-outline btn-lg" style="border-color: white; color: white;">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
