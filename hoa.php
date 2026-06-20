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
                Stop juggling spreadsheets, email chains, and paper ballots. CohostIQ gives your board one platform for dues, maintenance, member communication, and financials.
            </p>
            <div style="margin-top: 30px; display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-primary btn-lg">Request a Demo</a>
                <a href="signup.php" class="btn btn-outline btn-lg">View Pricing</a>
            </div>
        </div>
    </section>

    <!-- Who It's For -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Built For</span>
                <h2 class="section-title">From 20-Unit Condos to 500-Home Communities</h2>
                <p class="section-description">
                    Whether you're a self-managed board, a property management company handling multiple associations, or a community manager doing it all — CohostIQ adapts to how you work.
                </p>
            </div>
            <div class="problems-grid">
                <div class="problem-card">
                    <h4>Homeowner Associations</h4>
                    <p>Single-family home communities with shared common areas, landscaping, and amenities. Track dues, enforce CC&Rs, and keep homeowners informed.</p>
                </div>
                <div class="problem-card">
                    <h4>Condo Associations</h4>
                    <p>Multi-unit buildings with shared infrastructure — elevators, lobbies, parking, pools. Manage assessments, reserve funds, and vendor contracts from one place.</p>
                </div>
                <div class="problem-card">
                    <h4>Management Companies</h4>
                    <p>Manage multiple associations under one account. Each community gets its own billing, portal, and reporting — your team sees everything in one dashboard.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Features -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Core Features</span>
                <h2 class="section-title">Everything Your Board Needs, Nothing It Doesn't</h2>
            </div>

            <!-- Dues & Financial Management -->
            <div class="feature-detail" id="dues">
                <div class="feature-detail-content">
                    <span class="section-label">Billing</span>
                    <h3>Dues &amp; Assessment Billing</h3>
                    <p>
                        Set up monthly, quarterly, or annual dues with flexible rulesets per unit type or lot size. Special assessments for one-time projects. Late fees auto-applied. Every charge flows into owner statements and QuickBooks automatically.
                    </p>
                    <ul class="feature-list">
                        <li>Recurring dues with customizable schedules</li>
                        <li>Special assessments for capital projects</li>
                        <li>Auto-generated owner/member statements</li>
                        <li>Late fee automation</li>
                        <li>QuickBooks sync — no double entry</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>Dues Rulesets</span>
                    </div>
                </div>
            </div>

            <!-- Member Portal -->
            <div class="feature-detail feature-detail-reverse" id="portal">
                <div class="feature-detail-content">
                    <span class="section-label">Member Experience</span>
                    <h3>Member Portal</h3>
                    <p>
                        Homeowners and unit owners get their own secure login to view statements, submit maintenance requests, download documents, and stay up to date on community activity. No more "can you email me my balance?" messages.
                    </p>
                    <ul class="feature-list">
                        <li>Statement history and balance tracking</li>
                        <li>Submit and track maintenance requests</li>
                        <li>Download shared documents and meeting minutes</li>
                        <li>View community calendar and announcements</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>Member Portal</span>
                    </div>
                </div>
            </div>

            <!-- Board Management -->
            <div class="feature-detail" id="board">
                <div class="feature-detail-content">
                    <span class="section-label">Governance</span>
                    <h3>Board Management</h3>
                    <p>
                        Track board roles — president, treasurer, secretary, at-large members — with appointment dates and full history. Know who served when, and make transitions seamless when terms end.
                    </p>
                    <ul class="feature-list">
                        <li>Role appointments with start and end dates</li>
                        <li>Complete board history and term tracking</li>
                        <li>Dedicated board Action Center dashboard</li>
                        <li>Today's calendar, recent activity, and items needing attention</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>Board Roles</span>
                    </div>
                </div>
            </div>

            <!-- Maintenance -->
            <div class="feature-detail feature-detail-reverse" id="maintenance">
                <div class="feature-detail-content">
                    <span class="section-label">Operations</span>
                    <h3>Maintenance &amp; Work Orders</h3>
                    <p>
                        Members submit requests through the portal. Your team triages, assigns, schedules, and tracks every ticket to resolution. Route optimization gets your maintenance crew through the day efficiently.
                    </p>
                    <ul class="feature-list">
                        <li>Member-submitted requests with status tracking</li>
                        <li>Property item tracking (HVAC, elevators, pool equipment)</li>
                        <li>Drag-and-drop day planner with driving routes</li>
                        <li>Multi-day project support</li>
                        <li>Full repair history per asset</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>Work Orders</span>
                    </div>
                </div>
            </div>

            <!-- Document Management -->
            <div class="feature-detail" id="documents">
                <div class="feature-detail-content">
                    <span class="section-label">Records</span>
                    <h3>Document Management</h3>
                    <p>
                        Store and share governing documents, meeting minutes, financial reports, and community notices. Members access what they need from the portal — no more digging through email threads or Dropbox folders.
                    </p>
                    <ul class="feature-list">
                        <li>Upload and organize CC&Rs, bylaws, and rules</li>
                        <li>Share meeting minutes and board resolutions</li>
                        <li>Members download documents from the portal</li>
                        <li>Attach documents to properties and member profiles</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>Documents</span>
                    </div>
                </div>
            </div>

            <!-- Reporting & QuickBooks -->
            <div class="feature-detail feature-detail-reverse" id="reporting">
                <div class="feature-detail-content">
                    <span class="section-label">Financials</span>
                    <h3>Reporting &amp; QuickBooks Sync</h3>
                    <p>
                        Year-over-year financial reports, expense tracking, and tax records — all exportable to CSV or PDF. QuickBooks integration pushes statements, dues, and expenses automatically so your books stay clean without manual data entry.
                    </p>
                    <ul class="feature-list">
                        <li>Revenue, expense, and assessment reports</li>
                        <li>Per-member and per-property financial records</li>
                        <li>QuickBooks auto-sync for statements and expenses</li>
                        <li>CSV and PDF exports</li>
                    </ul>
                </div>
                <div class="feature-detail-visual">
                    <div class="feature-visual-placeholder">
                        <span>QuickBooks Sync</span>
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
                    CohostIQ's onboarding wizard adapts to HOA and COA workflows. No PMS to connect, no reservations to import — just your properties and members.
                </p>
            </div>
            <div class="integration-flow">
                <div class="integration-flow-step">
                    <div class="integration-flow-number">1</div>
                    <h4>Import Your Community</h4>
                    <p>Upload a single CSV with your properties and members. CohostIQ creates everything in one pass.</p>
                </div>
                <div class="integration-flow-arrow" aria-hidden="true">&rarr;</div>
                <div class="integration-flow-step">
                    <div class="integration-flow-number">2</div>
                    <h4>Set Up Dues</h4>
                    <p>Configure your dues rulesets — monthly, quarterly, or annual. Set amounts by unit type or lot size.</p>
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

    <!-- Use Cases -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Use Cases</span>
                <h2 class="section-title">How Associations Use CohostIQ</h2>
            </div>
            <div class="integrations-grid integrations-grid-3">
                <div class="integration-card">
                    <h4>Self-Managed HOA Boards</h4>
                    <p>Volunteer board members wearing multiple hats. CohostIQ replaces the treasurer's spreadsheet, the secretary's email chain, and the president's sticky notes with one organized platform.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Dues Billing</span>
                        <span class="capability-tag">Meeting Minutes</span>
                        <span class="capability-tag">Member Portal</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Condo Building Management</h4>
                    <p>High-rise or mid-rise buildings with shared systems — elevators, fire panels, parking garages. Track every asset, schedule preventive maintenance, and keep unit owners in the loop through the portal.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Asset Tracking</span>
                        <span class="capability-tag">Work Orders</span>
                        <span class="capability-tag">Reserve Planning</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Multi-Community Management</h4>
                    <p>Property management companies handling 5, 10, or 50 associations. Each community gets its own billing and portal, but your team manages everything from a single dashboard.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Multi-Association</span>
                        <span class="capability-tag">Centralized Reporting</span>
                        <span class="capability-tag">Team Management</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Annual Meeting &amp; Voting</h4>
                    <p>Prepare election materials, distribute ballots, and record results. Store voting records alongside meeting minutes so your governance trail is always complete and auditable.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Document Storage</span>
                        <span class="capability-tag">Meeting Records</span>
                        <span class="capability-tag">Board Elections</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Common Area Maintenance</h4>
                    <p>Pools, clubhouses, landscaping, parking lots — every shared space tracked as an asset with maintenance history. Schedule seasonal work, assign vendors, and stay ahead of repairs.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Asset Management</span>
                        <span class="capability-tag">Vendor Assignment</span>
                        <span class="capability-tag">Seasonal Scheduling</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Financial Transparency</h4>
                    <p>Members want to know where their money goes. Auto-generated statements, QuickBooks-synced books, and downloadable reports make every dollar accountable — no board member chasing spreadsheets.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Member Statements</span>
                        <span class="capability-tag">QuickBooks Sync</span>
                        <span class="capability-tag">Audit Trail</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What Sets Us Apart -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Why CohostIQ</span>
                <h2 class="section-title">Not Another Bloated HOA Platform</h2>
                <p class="section-description">
                    Most HOA software was built in 2005 and hasn't changed since. CohostIQ is a modern platform that handles operations and financials without the complexity tax.
                </p>
            </div>
            <div class="problems-grid">
                <div class="problem-card">
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <span>Before CohostIQ</span>
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
                            <span>Before CohostIQ</span>
                            <p>Maintenance requests come in via email, text, phone calls, and hallway conversations. Half get lost.</p>
                        </div>
                        <div class="problem-after">
                            <span>With CohostIQ</span>
                            <p>Members submit requests through the portal. Every request is tracked with status, assignment, and resolution history.</p>
                        </div>
                    </div>
                </div>
                <div class="problem-card">
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <span>Before CohostIQ</span>
                            <p>Year-end financials take weeks. The accountant re-keys everything from bank statements. Numbers never match the first time.</p>
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
                    <a href="signup.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">View Pricing</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
