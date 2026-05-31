<?php
$pageTitle = 'CohostIQ - Vacation Rental Operations Management';
$pageDescription = 'CohostIQ - Operational tools for vacation rental co-hosts and property managers. Billing, maintenance tracking, team management, and reporting.';
$currentPage = 'home';
$pageCanonical = '/index.php';
$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "CohostIQ",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "description": "Operational tools for vacation rental co-hosts and property managers. Billing, maintenance tracking, team management, and reporting.",
    "offers": {
        "@type": "Offer",
        "price": "10",
        "priceCurrency": "USD",
        "description": "2 months free trial, then volume pricing from $7.25-$10/property/month"
    },
    "featureList": [
        "Owner Billing and Statements",
        "Cohost Payout Math (5 methods)",
        "Cleaning Operations and Crew Payroll",
        "Maintenance and Property Item Tracking",
        "Supplies and Linen Tracking",
        "PMS Integration (Hospitable)",
        "QuickBooks Sync",
        "Mobile Apps for Cleaners and Maintenance",
        "Owner Portal",
        "Ask CohostIQ Assistant"
    ]
}';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <div class="hero-badge" style="background: rgba(74, 108, 247, 0.1); color: #4a6cf7;">
                        New customers get the first 2 months free
                    </div>
                    <h1 class="hero-title">
                        The operations and billing layer for <span>cohosts</span>
                    </h1>
                    <p class="hero-description">
                        Your PMS handles guests. CohostIQ handles everything behind the property: owner billing, cleaning operations, maintenance, supplies, and the cohost payout math nobody else gets right.
                    </p>
                    <div class="hero-buttons">
                        <a href="https://cohostiq.app/signup/signup.php" class="btn btn-primary btn-lg">Start Free Trial</a>
                        <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg">Request a Demo</a>
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

    <!-- Integrations strip -->
    <section class="integrations-strip" aria-label="Integrations">
        <div class="container">
            <p class="integrations-strip-label">Connects with the tools you already use</p>
            <div class="integrations-strip-logos">
                <span>Hospitable</span>
                <span>QuickBooks</span>
                <span>Stripe</span>
                <span>Turno</span>
                <span>HostBuddy</span>
                <span>Airbnb</span>
                <span>VRBO</span>
            </div>
        </div>
    </section>

    <!-- Time Savings Calculator -->
    <section class="section section-gray" id="savings">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">How Much Time Could You Get Back?</h2>
                <p class="section-description">
                    Plug in your portfolio. The math uses the same hourly benchmarks shown in the Common Problems section below.
                </p>
            </div>
            <div class="ts-calc ts-calc-wide">
                <div class="ts-calc-input">
                    <label for="tsProps">Properties</label>
                    <div class="ts-calc-input-row">
                        <input type="range" id="tsPropsSlider" min="1" max="200" value="25" step="1" aria-label="Properties slider">
                        <input type="number" id="tsProps" min="1" max="9999" value="25" aria-label="Properties">
                    </div>
                </div>

                <div class="ts-calc-input">
                    <label for="tsOwners">Owners</label>
                    <div class="ts-calc-input-row">
                        <input type="range" id="tsOwnersSlider" min="1" max="200" value="20" step="1" aria-label="Owners slider">
                        <input type="number" id="tsOwners" min="1" max="9999" value="20" aria-label="Owners">
                    </div>
                </div>

                <div class="ts-calc-toggle">
                    <label class="ts-calc-check">
                        <input type="checkbox" id="tsCohost" checked>
                        <span>Some properties use Airbnb cohost payouts</span>
                    </label>
                </div>

                <div class="ts-calc-results">
                    <div class="ts-calc-row ts-calc-row-manual">
                        <div class="ts-calc-row-label">Manual approach</div>
                        <div class="ts-calc-row-value" id="tsManual">~47 hrs</div>
                        <div class="ts-calc-row-sub">per month on owner billing</div>
                    </div>
                    <div class="ts-calc-row ts-calc-row-cohostiq">
                        <div class="ts-calc-row-label">With CohostIQ</div>
                        <div class="ts-calc-row-value" id="tsCohostiq">~1.3 hrs</div>
                        <div class="ts-calc-row-sub">review and send</div>
                    </div>
                    <div class="ts-calc-row ts-calc-row-saved">
                        <div class="ts-calc-row-label">Time back every month</div>
                        <div class="ts-calc-row-value" id="tsSaved">~45 hrs</div>
                        <div class="ts-calc-row-sub" id="tsSavedSub">that's ~6 working days</div>
                    </div>
                </div>

                <p class="ts-calc-note">Estimates based on benchmarks from the Common Problems section. Your actual numbers will vary with portfolio mix and current process.</p>
            </div>
            <script>
            (function() {
                var propsSlider = document.getElementById('tsPropsSlider');
                var props       = document.getElementById('tsProps');
                var ownSlider   = document.getElementById('tsOwnersSlider');
                var owners      = document.getElementById('tsOwners');
                var cohost      = document.getElementById('tsCohost');
                var manualEl    = document.getElementById('tsManual');
                var ciqEl       = document.getElementById('tsCohostiq');
                var savedEl     = document.getElementById('tsSaved');
                var savedSub    = document.getElementById('tsSavedSub');
                if (!propsSlider) return;

                // Benchmarks pulled from the site's own Common Problems section:
                // 25 properties = 40-55 hours/month manually. Midpoint 47.5 = ~1.9 hrs/property.
                var HRS_PER_PROPERTY_MANUAL = 1.9;
                // Cohost reconciliation adds ~0.3 hrs/property/month per the same breakdown.
                var HRS_PER_PROPERTY_COHOST = 0.3;
                // CohostIQ: ~3 minutes per owner statement review + 30 min monthly review.
                var MIN_PER_OWNER_CIQ = 3;
                var MIN_FIXED_CIQ     = 30;

                function fmtHrs(hrs) {
                    if (hrs < 1) return '~' + Math.round(hrs * 60) + ' min';
                    if (hrs < 10) return '~' + hrs.toFixed(1) + ' hrs';
                    return '~' + Math.round(hrs) + ' hrs';
                }

                function calculate() {
                    var p = Math.max(1, parseInt(props.value, 10) || 1);
                    var o = Math.max(1, parseInt(owners.value, 10) || 1);
                    var cohostOn = cohost.checked;

                    var manualHrs = p * HRS_PER_PROPERTY_MANUAL;
                    if (cohostOn) manualHrs += p * HRS_PER_PROPERTY_COHOST;

                    var ciqMin = (o * MIN_PER_OWNER_CIQ) + MIN_FIXED_CIQ;
                    var ciqHrs = ciqMin / 60;

                    var savedHrs = Math.max(0, manualHrs - ciqHrs);
                    var workingDays = savedHrs / 8;

                    manualEl.textContent = fmtHrs(manualHrs);
                    ciqEl.textContent = fmtHrs(ciqHrs);
                    savedEl.textContent = fmtHrs(savedHrs);

                    var subText;
                    if (workingDays >= 1) {
                        subText = "that's ~" + (workingDays < 10 ? workingDays.toFixed(1) : Math.round(workingDays)) + ' working days';
                    } else {
                        subText = 'reclaimed every month';
                    }
                    savedSub.textContent = subText;
                }

                function syncPair(slider, input) {
                    slider.addEventListener('input', function() {
                        input.value = slider.value;
                        calculate();
                    });
                    input.addEventListener('input', function() {
                        var n = Math.max(1, parseInt(input.value, 10) || 1);
                        if (n <= parseInt(slider.max, 10)) slider.value = n;
                        else slider.value = slider.max;
                        calculate();
                    });
                }
                syncPair(propsSlider, props);
                syncPair(ownSlider, owners);
                cohost.addEventListener('change', calculate);
                calculate();
            })();
            </script>
        </div>
    </section>

    <!-- About / Built by Cohosts -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Built for Cohosts, by Cohosts</h2>
                <p class="section-description">
                    We've been in your shoes. We know the pain of cohost billing because we've lived it.
                </p>
            </div>
            <div class="about-grid">
                <div class="about-text founder-note">
                    <div class="founder-note-header">
                        <img src="images/scott.jpg" alt="Scott, founder of CohostIQ" class="founder-photo" loading="lazy">
                        <div>
                            <div class="founder-greeting">Hi, I'm Scott.</div>
                            <div class="founder-role">Founder, CohostIQ &middot; Cohost at Branson Lakes Lodging with my wife Christene</div>
                        </div>
                    </div>
                    <p>
                        My wife Christene and I cohost 78 vacation rentals through Branson Lakes Lodging. For years, every month started with the same routine: rebuilding the owner billing spreadsheet, manually calculating commissions, reconciling cohost payouts, and chasing the credits Airbnb's math always got slightly wrong.
                    </p>
                    <p>
                        I built CohostIQ to solve those problems for the two of us. There were tools that handled the guest side. Tools for cleaning. Tools for accounting. But nothing connected the operations to the owner billing, and nothing got the cohost payout math right.
                    </p>
                    <p class="about-highlight">
                        Branson Lakes Lodging runs on CohostIQ today. If you've felt the same spreadsheet fatigue, we'd love to help.
                    </p>
                </div>
                <div class="about-features">
                    <h3>We Handle the Billing Complexity</h3>
                    <div class="about-features-list">
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>All Airbnb Payout Methods</strong>
                                <p>Cohost payouts, host-only fees, split payouts. We support them all.</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>Effortless Billing</strong>
                                <p>Handle cohost payouts and host-only fees with ease</p>
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
                                <p>Management fees, cleaning pass-throughs, expense deductions, all automated</p>
                            </div>
                        </div>
                        <div class="about-feature-item">
                            <span class="about-check">&#10003;</span>
                            <div>
                                <strong>QuickBooks Integration</strong>
                                <p>Owner statements, expenses, and payouts sync directly to QuickBooks. No double entry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Common Problems Solved -->
    <section class="section section-gray" id="problems-solved">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Common Problems Solved</span>
                <h2 class="section-title">Sound Familiar?</h2>
                <p class="section-description">
                    Every cohost knows these headaches. Here's how CohostIQ eliminates them.
                </p>
            </div>

            <div class="problems-grid">
                <!-- Problem 1: Monthly Owner Billing -->
                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon">&#128176;</div>
                        <h3>Monthly Owner Billing</h3>
                        <p class="problem-subtitle">25 properties</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">40 to 55+ hours/month</div>
                            <ul class="problem-list">
                                <li>Pull reservations from PMS (6 to 8 hrs)</li>
                                <li>Calculate commissions per property (6 to 8 hrs)</li>
                                <li>Reconcile cohost payouts (8 to 12 hrs)</li>
                                <li>Generate owner statements (6 to 8 hrs)</li>
                                <li>Handle disputes and corrections (4 to 6 hrs)</li>
                                <li>Update spreadsheets and email owners (8 to 10 hrs)</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">~30 minutes</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Reservations sync automatically from PMS</li>
                                <li>Commissions calculated per payment ruleset</li>
                                <li>Cohost payout credits handled automatically</li>
                                <li>Owner statements generated in one click</li>
                                <li>All history tracked, disputes resolved instantly</li>
                                <li>Owners access statements via their portal</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Problem 2: Guest Reports AC Broken -->
                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon">&#128295;</div>
                        <h3>Guest Reports AC Broken Mid-Stay</h3>
                        <p class="problem-subtitle">Emergency maintenance</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">Chaos</div>
                            <ul class="problem-list">
                                <li>Search for HVAC vendor contact info</li>
                                <li>No idea if it's under warranty</li>
                                <li>No record of past repairs</li>
                                <li>Forget to charge owner for the repair</li>
                                <li>Owner disputes the charge months later</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">Handled Instantly</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Ticket auto-created from guest message</li>
                                <li>Warranty info on file for every item</li>
                                <li>Repair history shows it's a repeat offender</li>
                                <li>Cost automatically added to owner statement</li>
                                <li>Full audit trail, no disputes</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Problem 3: Onboarding a New Owner -->
                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon">&#127968;</div>
                        <h3>Onboarding a New Owner's Property</h3>
                        <p class="problem-subtitle">Adding a new client</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">1 to 2 hours of setup</div>
                            <ul class="problem-list">
                                <li>Create new spreadsheet tabs for the property</li>
                                <li>Manually add to each tool you use</li>
                                <li>Set up billing formulas from scratch</li>
                                <li>Hope you don't break existing formulas</li>
                                <li>No owner visibility until you send a PDF</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">Minutes</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Import property from PMS in one click</li>
                                <li>Assign a payment ruleset, billing is configured</li>
                                <li>Items and appliances tracked from day one</li>
                                <li>Owner portal active immediately</li>
                                <li>Ready to manage on the first reservation</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Problem 4: Same-Day Turnover -->
                <div class="problem-card">
                    <div class="problem-card-header">
                        <div class="problem-icon">&#129529;</div>
                        <h3>Coordinating a Same-Day Turnover</h3>
                        <p class="problem-subtitle">Cleaning, supplies, and pay</p>
                    </div>
                    <div class="problem-comparison">
                        <div class="problem-before">
                            <div class="problem-label problem-label-before">Without CohostIQ</div>
                            <div class="problem-time-highlight problem-time-bad">Texts &amp; spreadsheets</div>
                            <ul class="problem-list">
                                <li>Text cleaners to confirm who is taking the job</li>
                                <li>No central checklist, no proof of completion</li>
                                <li>Cleaner asks for supplies by text, you forget to order</li>
                                <li>Track cleaner pay in a separate spreadsheet</li>
                                <li>Forget to bill the owner for the cleaning</li>
                            </ul>
                        </div>
                        <div class="problem-after">
                            <div class="problem-label problem-label-after">With CohostIQ</div>
                            <div class="problem-time-highlight problem-time-good">Automatic</div>
                            <ul class="problem-list problem-list-solved">
                                <li>Job created from the reservation, preferred cleaner auto-assigned</li>
                                <li>Cleaner uses the mobile app with photos and checklist</li>
                                <li>Low supplies trigger a restock job automatically</li>
                                <li>Pay is tracked per job, paid via Venmo, Zelle, check, Stripe, or QuickBooks payroll (coming soon)</li>
                                <li>Cleaning cost flows straight to the owner statement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cohost Payout Problem Callout -->
            <div class="payout-callout">
                <div class="payout-callout-header">
                    <h3>&#9888;&#65039; The Cohost Payout Problem</h3>
                    <p>If you use Airbnb's cohost payouts, you already know this headache.</p>
                </div>
                <div class="payout-callout-content">
                    <div class="payout-example">
                        <div class="payout-example-header">Example: $1,000 Booking at 20% Commission</div>
                        <div class="payout-example-grid">
                            <div class="payout-example-item">
                                <div class="payout-example-label">Airbnb pays cohost</div>
                                <div class="payout-example-value payout-example-bad">$270</div>
                                <div class="payout-example-note">20% of ALL fees ($1,350 gross)</div>
                            </div>
                            <div class="payout-example-item">
                                <div class="payout-example-label">Actual commission owed</div>
                                <div class="payout-example-value payout-example-good">$200</div>
                                <div class="payout-example-note">20% of gross rent only ($1,000)</div>
                            </div>
                            <div class="payout-example-item payout-example-result">
                                <div class="payout-example-label">Owner credit needed</div>
                                <div class="payout-example-value">$70</div>
                                <div class="payout-example-note">Per reservation, every single time</div>
                            </div>
                        </div>
                    </div>
                    <p class="payout-callout-bottom">
                        <strong>CohostIQ calculates this automatically</strong> for every reservation and applies the credit to each owner's statement. No spreadsheets. No guessing. No missed credits.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits -->
    <section class="section" id="benefits">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Save Time, Save Money, Stay Organized</h2>
                <p class="section-description">
                    The operational backbone for your portfolio.
                </p>
            </div>
            <div class="benefits-grid">
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
    </section>

    <!-- Features Overview -->
    <section class="section" id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Everything You Need to Run Your Rentals</h2>
                <p class="section-description">
                    Reservations, maintenance, cleaning, billing, reporting. The whole operational layer in one place.
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#128176;</div>
                    <h3 class="feature-title">Owner Billing &amp; Statements</h3>
                    <p class="feature-description">
                        Per-property fee rules, expense pass-throughs, recurring charges, and management fees. Statements generate themselves from synced reservations.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128181;</div>
                    <h3 class="feature-title">Cohost Payout Math</h3>
                    <p class="feature-description">
                        Every Airbnb payout method handled: cohost payouts, host-only fees, split payouts. Owner credits calculated per reservation. Different owners on different methods, no spreadsheet workarounds.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#129529;</div>
                    <h3 class="feature-title">Cleaning Operations</h3>
                    <p class="feature-description">
                        Jobs auto-created from reservations. Preferred cleaner assignment, mobile checklists with photos, conditional task lists, and cleaner payroll. Cleaning costs flow straight to the owner statement.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128736;</div>
                    <h3 class="feature-title">Maintenance &amp; Items</h3>
                    <p class="feature-description">
                        Track every appliance with warranty dates and repair history. Spot repeat offenders. Auto-create tickets from Hospitable, HostBuddy, and Turno.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128230;</div>
                    <h3 class="feature-title">Supplies &amp; Linens</h3>
                    <p class="feature-description">
                        Kit-based supply scaling per property. Auto-restock jobs when stock runs low. Off-site linen checkout tracking so nothing goes missing.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128279;</div>
                    <h3 class="feature-title">PMS Integration</h3>
                    <p class="feature-description">
                        Connect to Hospitable and other PMS platforms. Reservations and properties sync automatically. Keep using your PMS for guests, channels, and messaging.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128218;</div>
                    <h3 class="feature-title">QuickBooks Sync</h3>
                    <p class="feature-description">
                        Owner statements, expenses, and payouts post to QuickBooks automatically. Mapped to your chart of accounts. No double entry, no reclassifying.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128274;</div>
                    <h3 class="feature-title">Owner Portal</h3>
                    <p class="feature-description">
                        Owners log in to view statements, upcoming reservations, performance, and maintenance history. Cuts down on owner email threads.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Where CohostIQ Fits -->
    <section class="section section-gray" id="stack">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Where CohostIQ Fits</span>
                <h2 class="section-title">We Don't Replace Your PMS. We Fill the Gap Behind It.</h2>
                <p class="section-description">
                    Most tools cover one slice of the cohost workflow. CohostIQ ties operations to the owner statement so every cleaning, repair, supply, and payout lands on the right bill automatically.
                </p>
            </div>
            <div class="fit-grid">
                <div class="fit-card">
                    <div class="fit-card-name">Your PMS</div>
                    <div class="fit-card-tag">Hospitable, Guesty, OwnerRez</div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-handles">Handles</div>
                        <div class="fit-card-text">Listings, channels, guest messaging, pricing, reservations.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-gap">Gap</div>
                        <div class="fit-card-text fit-card-text-muted">Owner billing, cohost payout credits, per-owner fee rules, operations beyond guest comms.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-us">CohostIQ</div>
                        <div class="fit-card-text">We pull reservations from your PMS and run the business behind the property.</div>
                    </div>
                </div>

                <div class="fit-card">
                    <div class="fit-card-name">Breezeway</div>
                    <div class="fit-card-tag">Operations platform</div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-handles">Handles</div>
                        <div class="fit-card-text">Cleaning and maintenance scheduling, inspections, task management.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-gap">Gap</div>
                        <div class="fit-card-text fit-card-text-muted">Owner statements, cohost payout math, QuickBooks reconciliation, payroll for your crews.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-us">CohostIQ</div>
                        <div class="fit-card-text">We run operations and tie every cost directly to the owner who owes it.</div>
                    </div>
                </div>

                <div class="fit-card">
                    <div class="fit-card-name">Turno</div>
                    <div class="fit-card-tag">Cleaner marketplace</div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-handles">Handles</div>
                        <div class="fit-card-text">A marketplace for finding new cleaners on demand.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-gap">Gap</div>
                        <div class="fit-card-text fit-card-text-muted">Conditional checklists, crew lead and sub pay splits, in-house payroll, supplies, linens, and owner billing.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-us">CohostIQ</div>
                        <div class="fit-card-text">A full Turno replacement for the operations side, plus the billing tie-in Turno doesn't do. Keep Turno for the marketplace if you want, we import the projects.</div>
                    </div>
                </div>

                <div class="fit-card">
                    <div class="fit-card-name">QuickBooks Alone</div>
                    <div class="fit-card-tag">Accounting only</div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-handles">Handles</div>
                        <div class="fit-card-text">General ledger, taxes, P&amp;L, bank reconciliation.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-gap">Gap</div>
                        <div class="fit-card-text fit-card-text-muted">Pulling reservations, calculating fees, cohost payout credits, per-property splits.</div>
                    </div>
                    <div class="fit-card-section">
                        <div class="fit-card-label fit-card-label-us">CohostIQ</div>
                        <div class="fit-card-text">We do the calculations, then push clean invoices and bills into QuickBooks.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- AI / MCP Positioning -->
    <section class="section ai-section" id="ai-mcp">
        <div class="container">
            <div class="section-header">
                <span class="section-label ai-section-label">AI &amp; MCP</span>
                <h2 class="section-title ai-section-title">AI Is Great For Guest Messages. Not For Your Owner Statement.</h2>
                <p class="section-description ai-section-description">
                    New MCP integrations let an LLM operate your PMS in plain English. Powerful for fuzzy work. Wrong tool for the deterministic work that has to be right, the same way, every single month.
                </p>
            </div>

            <div class="ai-compare-grid">
                <div class="ai-compare-card">
                    <div class="ai-compare-label ai-compare-label-fuzzy">Where MCP and AI Agents Shine</div>
                    <ul class="ai-compare-list">
                        <li><span class="ai-bullet ai-bullet-fuzzy">&#9679;</span> Drafting guest replies and review responses</li>
                        <li><span class="ai-bullet ai-bullet-fuzzy">&#9679;</span> Suggesting pricing tweaks and copy edits</li>
                        <li><span class="ai-bullet ai-bullet-fuzzy">&#9679;</span> Summarizing portfolio activity</li>
                        <li><span class="ai-bullet ai-bullet-fuzzy">&#9679;</span> Open-ended questions about your data</li>
                    </ul>
                </div>
                <div class="ai-compare-card">
                    <div class="ai-compare-label ai-compare-label-rules">Where Deterministic Rules Win</div>
                    <ul class="ai-compare-list">
                        <li><span class="ai-bullet ai-bullet-rules">&#10003;</span> Cohost payout credits, calculated correctly every reservation</li>
                        <li><span class="ai-bullet ai-bullet-rules">&#10003;</span> Per-property fee structures applied without drift</li>
                        <li><span class="ai-bullet ai-bullet-rules">&#10003;</span> Owner statement totals that foot to the penny</li>
                        <li><span class="ai-bullet ai-bullet-rules">&#10003;</span> Pet fees, cleaning, and taxes allocated by rule, not by guess</li>
                        <li><span class="ai-bullet ai-bullet-rules">&#10003;</span> "Oops, I forgot to implement that rule" doesn't happen</li>
                    </ul>
                </div>
            </div>

            <div class="ai-inside-block">
                <div class="ai-inside-label">Where AI Fits Inside CohostIQ</div>
                <div class="ai-inside-grid">
                    <div class="ai-inside-card">
                        <h4 class="ai-inside-title">Ask CohostIQ</h4>
                        <p class="ai-inside-text">Built-in assistant grounded in your actual data. Ask "what was Sunset Villa's revenue last March?" or "any open maintenance at Lakeside?" and get real answers. Spot a problem mid-conversation? It can create the maintenance ticket for you.</p>
                    </div>
                    <div class="ai-inside-card">
                        <h4 class="ai-inside-title">CohostIQ MCP <span class="ai-inside-badge">In Development</span></h4>
                        <p class="ai-inside-text">Our own MCP server is in active development. Connect Claude, ChatGPT, or Cursor to your CohostIQ data for the fuzzy queries while the deterministic billing rules keep your statements safe.</p>
                    </div>
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
                    <div class="audience-icon">&#128188;</div>
                    <h3 class="audience-title">Co-Hosts</h3>
                    <p class="audience-description">
                        Take the chaos out of co-hosting. Track maintenance, manage billing, and keep owners informed.
                    </p>
                    <ul class="audience-features">
                        <li>Maintenance ticketing & tracking</li>
                        <li>Automated owner statements</li>
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

    <!-- Why CohostIQ -->
    <section class="section section-gray" id="why">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Why CohostIQ</span>
                <h2 class="section-title">Finally, Operations That Scale With You</h2>
                <p class="section-description">
                    We built CohostIQ because we couldn't find tools that handled the operational side of property management. Your PMS handles guests. We handle everything else.
                </p>
            </div>
            <div style="max-width: 800px; margin: 0 auto; text-align: center;">
                <p style="font-size: 1.125rem; color: #637381; margin-bottom: 24px;">
                    Every new client or property used to mean hours of setup. Configuring billing, setting up statements, onboarding into your systems. With CohostIQ, that setup is instant. <strong style="color: #1d2144;">Scale your portfolio without scaling your workload.</strong>
                </p>
                <p style="font-size: 1.125rem; color: #637381;">
                    Stop spending hours on invoicing every month. Stop tracking expenses in spreadsheets. Get the time back to grow your business and take care of your owners.
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
                    Stop letting operational overhead hold back your growth. Start your free trial today.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/signup.php" class="btn btn-white btn-lg">Start Free Trial</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
