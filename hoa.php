<?php
$pageTitle = 'HOA & COA Management Software - CohostIQ';
$pageDescription = 'CohostIQ for homeowner and condo associations: dues billing and online payments, board elections with certified ballots, violations and architectural review, buildings and common areas, automatic duty discovery from your governing documents, a branded member portal, and QuickBooks sync.';
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
                <a href="#hoa-pricing" class="btn btn-outline btn-lg">How Pricing Works</a>
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
                    <h4>Branded Member Portal</h4>
                    <p>Homeowners get a secure login to view their balance, pay dues, submit requests, vote, read announcements, and download documents. Each community gets its own logo, colors, welcome text, and web address &mdash; and you choose which sections members can see.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Your Logo &amp; Colors</span>
                        <span class="capability-tag">Custom Domain</span>
                        <span class="capability-tag">Announcements</span>
                        <span class="capability-tag">Section Toggles</span>
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
                    <p>Members submit requests through the portal. Your team triages, assigns, and tracks every ticket, with drag-and-drop scheduling and a full repair history per asset — so you know what has already been fixed on that roof before you approve the next quote.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Request Queue</span>
                        <span class="capability-tag">Asset Tracking</span>
                        <span class="capability-tag">Drag-and-Drop Scheduling</span>
                        <span class="capability-tag">Repair History</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Automated Duty Discovery &amp; Scheduling</h4>
                    <p>Upload your CC&amp;Rs, meeting minutes, a vendor contract, a reserve study, or an inspection report, and CohostIQ reads it and pulls out what someone actually has to do &mdash; the annual backflow inspection, the quarterly board meeting, the reserve contribution &mdash; with the due date, how often it repeats, and the section it came from. Accept the ones that matter as duties and dismiss the rest, then turn a duty into a schedule that repeats or a work order for your team. When a document states a rule but never says when to enforce it, CohostIQ tells you what's missing and suggests the duty you'd need.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Reads Your Documents</span>
                        <span class="capability-tag">Finds Dates &amp; Recurrence</span>
                        <span class="capability-tag">Cites the Section</span>
                        <span class="capability-tag">Accept or Dismiss</span>
                        <span class="capability-tag">Becomes a Schedule</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Member Duties &amp; Recurring Work</h4>
                    <p>Assign a duty to a homeowner or a board member and CohostIQ emails them and puts it in their portal task list with a due date. Duties that need proof — an insurance certificate, a signed acknowledgment — stay open until the document is actually uploaded. Recurring work runs on a real schedule: twice a week, every other Tuesday, the first Monday of the month, quarterly, or annually.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Assigned Duties</span>
                        <span class="capability-tag">Due Dates</span>
                        <span class="capability-tag">Email Notifications</span>
                        <span class="capability-tag">Proof of Completion</span>
                        <span class="capability-tag">Recurring Schedules</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Document Management</h4>
                    <p>Store CC&amp;Rs, bylaws, meeting minutes, financial reports, and community notices in folders you organize yourself. Every upload records who added it — board member or homeowner — so the file history still makes sense months later. Members download what they need from the portal.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Folders</span>
                        <span class="capability-tag">CC&amp;Rs &amp; Bylaws</span>
                        <span class="capability-tag">Uploader On Record</span>
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
                <div class="integration-card">
                    <h4>Board Elections &amp; Voting</h4>
                    <p>Run a real election, not just a poll. Open a nomination window, let members put their own name forward, review each candidate, then certify the ballot before voting opens. Set seat counts, who may run, who may vote, a quorum, and an optional dues-current requirement. Ballots are encrypted and results release on your schedule.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Nomination Window</span>
                        <span class="capability-tag">Candidate Review</span>
                        <span class="capability-tag">Ballot Certification</span>
                        <span class="capability-tag">Encrypted Ballots</span>
                        <span class="capability-tag">Quorum Tracking</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Violations &amp; Compliance</h4>
                    <p>Log a violation against a property, attach a fine, and track it from first notice through resolution. Members see their own violations in the portal, so nobody argues about whether they were told.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Fines</span>
                        <span class="capability-tag">Notice Tracking</span>
                        <span class="capability-tag">Status History</span>
                        <span class="capability-tag">Member Visibility</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Meetings &amp; Announcements</h4>
                    <p>Schedule meetings with a date, location or virtual link, and a published agenda. Attach the minutes document when it's ready. Post announcements straight to the portal so the whole community sees the same message.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Agendas</span>
                        <span class="capability-tag">Attached Minutes</span>
                        <span class="capability-tag">Portal Announcements</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Buildings &amp; Common Areas</h4>
                    <p>Track the physical community, not just a list of addresses. Each building carries its own structure, roof, life-safety, utility, and insurance and reserve detail, with its units assigned to it. Amenities — pool, elevator, clubhouse, parking — are tracked community-wide or per building, with inspection and permit dates that stay quiet until something is actually due. Open a work order directly against a building or an amenity.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Building Records</span>
                        <span class="capability-tag">Roof &amp; Life Safety</span>
                        <span class="capability-tag">Insurance &amp; Reserves</span>
                        <span class="capability-tag">Inspection Due Dates</span>
                        <span class="capability-tag">Bulk Setup</span>
                    </div>
                </div>
                <div class="integration-card">
                    <h4>Online Dues Payments</h4>
                    <p>Members pay dues by card or bank transfer directly from the portal, powered by Stripe. Set up reminder rules &mdash; so many days before the due date, or after the grace period ends &mdash; and they send themselves.</p>
                    <div class="integration-capabilities">
                        <span class="capability-tag">Card &amp; Bank Transfer</span>
                        <span class="capability-tag">Stripe Powered</span>
                        <span class="capability-tag">Automated Reminders</span>
                        <span class="capability-tag">Payment History</span>
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
                <span class="section-label">Pricing</span>
                <h2 class="section-title">Priced for Your Community, Not a Sales Quota</h2>
                <p class="section-description">
                    Pricing is based on the number of units in your community. No setup fee, no per-user
                    charge, no minimum portfolio size, and no 60-day implementation before you can use it.
                </p>
            </div>

            <div class="price-grid-4">
                <div class="integration-card price-tier">
                    <div class="price-tier-name">Starter</div>
                    <div class="price-tier-amount">$59<span>/mo</span></div>
                    <p class="price-tier-units">Up to 25 units</p>
                    <p class="price-tier-compare">
                        Works out to
                        <span class="price-tier-rate">$2.36 per unit</span>
                        at 25 units.
                    </p>
                </div>
                <div class="integration-card price-tier">
                    <div class="price-tier-name">Small</div>
                    <div class="price-tier-amount">$99<span>/mo</span></div>
                    <p class="price-tier-units">26 &ndash; 50 units</p>
                    <p class="price-tier-compare">
                        Works out to
                        <span class="price-tier-rate">$1.98 per unit</span>
                        at 50 units.
                    </p>
                </div>
                <div class="integration-card price-tier integration-card-featured">
                    <div class="price-tier-name">Growing</div>
                    <div class="price-tier-amount">$169<span>/mo</span></div>
                    <p class="price-tier-units">51 &ndash; 100 units</p>
                    <p class="price-tier-compare">
                        Works out to
                        <span class="price-tier-rate">$1.69 per unit</span>
                        at 100 units.
                    </p>
                </div>
                <div class="integration-card price-tier">
                    <div class="price-tier-name">Mid-Size</div>
                    <div class="price-tier-amount">$249<span>/mo</span></div>
                    <p class="price-tier-units">101 &ndash; 200 units</p>
                    <p class="price-tier-compare">
                        Works out to
                        <span class="price-tier-rate">$1.25 per unit</span>
                        at 200 units.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 28px;">
                <p style="color: var(--body-color); font-size: 0.95rem; margin-bottom: 10px;">
                    Your cost per unit drops as the community grows.
                </p>
                <p style="color: var(--body-color); font-size: 0.95rem;">
                    <strong>Over 200 units, or managing several associations?</strong>
                    <a href="https://cohostiq.app/signup/request_demo.php">Get a quote</a> &mdash; we price larger
                    portfolios individually, and we&rsquo;ll show you the comparison against whatever you&rsquo;re
                    using now.
                </p>
            </div>

            <div class="integrations-grid integrations-grid-3" style="margin-top: 44px;">
                <div class="integration-card">
                    <h4>No Feature Tiers</h4>
                    <p>Every association gets the whole toolset &mdash; dues billing, the branded member portal, board elections, violations, architectural review, buildings and common areas, duty discovery from your documents, meetings, maintenance, reporting, and QuickBooks sync. Nothing is held back for a higher plan.</p>
                </div>
                <div class="integration-card">
                    <h4>Keep Your Accountant</h4>
                    <p>CohostIQ syncs to QuickBooks. Enterprise platforms typically expect you to move onto their own ledger, which means retraining your treasurer and your CPA at the same time.</p>
                </div>
                <div class="integration-card">
                    <h4>No Setup Fee</h4>
                    <p>Onboarding fees of $200 to $1,000 are normal in this category, on top of a month or two of implementation. You upload one CSV and go live the same afternoon.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 36px;">
                <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-primary btn-lg">Request a Demo</a>
                <p style="color: var(--body-color); font-size: 0.9rem; margin-top: 16px;">
                    Guided onboarding included. No contracts, cancel anytime.
                </p>
            </div>
        </div>
    </section>

    <!-- Before/After -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Why CohostIQ</span>
                <h2 class="section-title">What Changes on Day One</h2>
                <p class="section-description">
                    Most associations aren&rsquo;t running bad software. They&rsquo;re running a spreadsheet,
                    an inbox, and someone&rsquo;s memory.
                </p>
            </div>
            <div class="problems-grid">

                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon" aria-hidden="true">&#128179;</div>
                        <h3>Collecting the dues</h3>
                        <p class="problem-subtitle">Who paid, who didn&rsquo;t, and what the treasurer has to do about it</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">A spreadsheet</div>
                            <ul class="problem-list">
                                <li>The treasurer tracks every unit by hand</li>
                                <li>Payments arrive as checks, transfers, and cash</li>
                                <li>Late fees get applied when someone remembers</li>
                                <li>&ldquo;What&rsquo;s my balance?&rdquo; is a phone call</li>
                                <li>Year-end means re-keying it all for the CPA</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">One ledger</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Dues billed automatically on your schedule</li>
                                <li>Members pay by card or bank transfer in the portal</li>
                                <li>Late fees applied by rule, not by memory</li>
                                <li>Members check their own balance any time</li>
                                <li>QuickBooks stays in sync, so year-end is a formality</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon" aria-hidden="true">&#128295;</div>
                        <h3>Getting things fixed</h3>
                        <p class="problem-subtitle">From &ldquo;I mentioned it to the president at the mailboxes&rdquo; to a tracked work order</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">Wherever it landed</div>
                            <ul class="problem-list">
                                <li>Requests arrive by email, text, phone, and hallway</li>
                                <li>Half of them never get written down</li>
                                <li>No record of what was already repaired</li>
                                <li>The same complaint gets reported three times</li>
                                <li>Vendors arrive unsure what they came for</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">One queue</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Members submit through the portal</li>
                                <li>Every request has a status and an owner</li>
                                <li>Full repair history per building and amenity</li>
                                <li>Work orders open against the structure itself</li>
                                <li>Recurring service runs on a real schedule</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon" aria-hidden="true">&#128499;</div>
                        <h3>Running the association</h3>
                        <p class="problem-subtitle">Elections, minutes, and the obligations buried in documents nobody rereads</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">Paper and inboxes</div>
                            <ul class="problem-list">
                                <li>Ballots counted by hand at the annual meeting</li>
                                <li>Minutes live in the secretary&rsquo;s sent folder</li>
                                <li>CC&amp;Rs sit in a shared drive, or a filing cabinet</li>
                                <li>Nobody is certain which version is current</li>
                                <li>Deadlines written into the covenants go unnoticed</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">On the record</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Encrypted online ballots with quorum tracking</li>
                                <li>A certified candidate list before voting opens</li>
                                <li>Documents in folders, with the uploader named</li>
                                <li>Members download what they need themselves</li>
                                <li>CohostIQ reads your documents and surfaces the duties in them</li>
                            </ul>
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
                    No contracts, no setup fee, cancel anytime.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-white btn-lg">Request a Demo</a>
                    <a href="#hoa-pricing" class="btn btn-outline btn-lg" style="border-color: white; color: white;">How Pricing Works</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
