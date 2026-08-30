<?php
$pageTitle = 'FAQ - CohostIQ';
$pageDescription = 'Frequently asked questions about CohostIQ: onboarding, features, pricing, and support.';
$currentPage = 'faq';
$pageCanonical = '/faq.php';
$pageSchema = '{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Is there a free trial?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Your first 2 calendar months are completely free with all core features. You also get a 30-minute onboarding call to help you get up and running."
            }
        },
        {
            "@type": "Question",
            "name": "How long does onboarding take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most users finish the required onboarding steps in 15 to 30 minutes. The guided wizard has 13 steps total, 5 are required to go live and 8 are optional and can be completed anytime after."
            }
        },
        {
            "@type": "Question",
            "name": "How does CohostIQ integrate with my PMS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "CohostIQ connects to your PMS like Hospitable to pull in properties and reservations. You keep using your PMS for guests, channels, and messaging. CohostIQ adds owner billing, cohost payout math, cleaning operations, maintenance, supplies, and the QuickBooks sync your PMS does not provide."
            }
        },
        {
            "@type": "Question",
            "name": "How does CohostIQ handle cohost payouts?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "CohostIQ supports 5 cohost payout methods: Cleaning Only, Cleaning Plus a Percentage, Percentage Excluding Cleaning, Percentage Including Cleaning, and Fixed per Booking. For each reservation we calculate the right commission, the right cleaning credit, and the right owner credit automatically."
            }
        },
        {
            "@type": "Question",
            "name": "How do owner statements work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Owner statements generate from reservations, your payment rulesets, and any logged expenses. Each statement shows gross revenue, management fees, cleaning fees, maintenance, and the net payout. PDFs can be downloaded and shared, and statements can post directly to QuickBooks as invoices."
            }
        },
        {
            "@type": "Question",
            "name": "Is there a contract or commitment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. Pricing is month to month with no long-term contract, and you can cancel anytime."
            }
        }
    ]
}';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>FAQ</span>
            </nav>
            <h1 class="page-header-title">Frequently Asked Questions</h1>
            <p class="page-header-description">
                Find answers to common questions about CohostIQ, onboarding, features, and more.
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
        <div class="container">
            <!-- Category Filters -->
            <div class="faq-categories" role="group" aria-label="Filter FAQ by category">
                <button class="faq-category-btn active" data-category="all" aria-pressed="true">All Questions</button>
                <button class="faq-category-btn" data-category="getting-started" aria-pressed="false">Getting Started</button>
                <button class="faq-category-btn" data-category="onboarding" aria-pressed="false">Onboarding</button>
                <button class="faq-category-btn" data-category="features" aria-pressed="false">Features</button>
                <button class="faq-category-btn" data-category="billing" aria-pressed="false">Billing</button>
            </div>

            <div class="faq-list">
                <!-- Getting Started -->
                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h4>How do I sign up for CohostIQ?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Visit our <a href="signup.php">Sign Up page</a>, fill out the form with your information, and you'll have instant access. Your first 2 months are free (limited time launch offer), and our guided onboarding gets you up and running in under 30 minutes.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h4>Is there a free trial?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Your first 2 calendar months are completely free with all core features (limited time launch offer). You'll also get a 30-minute onboarding call to help you get up and running. After your trial, pay per property with volume discounts as you grow.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h4>What do I need to get started?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            All you need is an email address to create your account. During onboarding, you'll set up your locations, define your payment rulesets, add properties (via PMS import, CSV, or manual entry), and optionally import historical reservations. The guided wizard walks you through each step with a worked example so you know what to enter.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h4>Is CohostIQ suitable for my business size?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. CohostIQ scales with your business. Whether you manage 5 properties or 500, the platform adapts to your needs. Smaller operators benefit from organized workflows and time savings; larger operations rely on the team management, cleaning operations, and reporting features. Volume pricing means cost per property drops as you grow.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="getting-started">
                    <div class="faq-question">
                        <h4>What business types does CohostIQ support?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            CohostIQ supports short-term rentals (STR), mid-term rentals (MTR), small hotels, and homeowner associations (HOA). The onboarding wizard adapts to the type you pick: HOA companies skip PMS connection and reservation import, for example, and get dues rulesets instead of payment rulesets. Most of the platform (billing, reporting, owner/member portal, QuickBooks sync) works for all four.
                        </div>
                    </div>
                </div>

                <!-- Onboarding -->
                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>How long does onboarding take?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Most users finish the 5 required steps in 15 to 30 minutes. That includes locations, payment rulesets, importing properties, and the final review to go live. Optional steps like importing historical reservations, taxes, cohost rules, team members, and QuickBooks can be done during onboarding or anytime after.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>What are the onboarding steps?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Our guided wizard walks you through 13 steps. 5 are required to go live; the rest you can skip and return to anytime. Each step includes a worked example so you know what to enter.
                            <ol style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>Welcome</strong> (required). Quick orientation to what's ahead.</li>
                                <li><strong>Locations</strong> (required). Set up your Market, City, and Community structure. Drives tax rates, reporting, and who can see which properties.</li>
                                <li><strong>Connect PMS</strong> (optional). Link Hospitable or your other PMS so properties and reservations sync automatically.</li>
                                <li><strong>QuickBooks</strong> (optional). Connect QuickBooks and import existing owners, products, and vendors.</li>
                                <li><strong>Payments</strong> (optional). Connect Stripe for direct-booking deposits, damage charges, and owner payouts.</li>
                                <li><strong>Payment Rules</strong> (required). Define how owners are billed: management commissions, cleaning passthroughs, pet fee splits, per-stay fees, and more.</li>
                                <li><strong>Properties</strong> (required). Import from your PMS, upload a CSV, or add manually. Assign each property to a payment ruleset.</li>
                                <li><strong>Taxes</strong> (optional). Per-jurisdiction rates with effective dates, plus platform handling (who collects, who remits, by channel).</li>
                                <li><strong>Import Reservations</strong> (optional). Backfill historical bookings so you get year-over-year reporting and complete tax records from day one.</li>
                                <li><strong>Cohost Rules</strong> (optional). Configure your Airbnb cohost payout method per property. 5 methods supported: Cleaning Only, Cleaning + %, % excluding Cleaning, % including Cleaning, or Fixed per Booking.</li>
                                <li><strong>Users</strong> (optional). Invite team members with role-scoped access (Manager, Maintenance, Cleaner, etc.).</li>
                                <li><strong>Company Settings</strong> (optional). Company name, logo, timezone, and contact info that appears on owner statements and notifications.</li>
                                <li><strong>Review &amp; Go Live</strong> (required). Review everything and activate your account.</li>
                            </ol>
                            <p style="margin-top: 12px;">Most users finish the required steps in 15 to 30 minutes. The optional steps can be done whenever you're ready.</p>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>Can I skip onboarding steps and come back later?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Of the 13 onboarding steps, 5 are required (Welcome, Locations, Payment Rules, Properties, and Go Live). The other 8 are optional and can be picked up later from Settings. For example, connecting QuickBooks, importing reservation history, configuring cohost rules, and inviting team members can all wait until you're ready. The wizard marks each step required or optional so you know what's needed to go live.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>How do I import my existing reservations?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            CohostIQ supports several import methods:
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>PMS import (recommended).</strong> Once you've connected Hospitable or your other PMS, you can pull historical reservations straight from the source. Set the start date as far back as possible and the importer handles the rest.</li>
                                <li><strong>CSV import.</strong> Upload a spreadsheet of reservation data using our template.</li>
                                <li><strong>Manual entry.</strong> Add reservations one at a time if you have just a handful.</li>
                            </ul>
                            The more history you import, the more useful the year-over-year reports and tax summaries become. New reservations sync automatically from your PMS going forward.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>What if I'm not the admin? What do my team members see?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            During onboarding, only the admin (the person who created the account) can complete the setup steps. Other team members invited during onboarding will see a "Setup in Progress" page until the admin completes onboarding and clicks Go Live. Once live, team members have access based on their assigned roles.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="onboarding">
                    <div class="faq-question">
                        <h4>Can I edit my settings after onboarding is complete?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. Everything you set up during onboarding can be modified later. Add more properties, change payment rulesets, update team member roles, and adjust settings anytime from your dashboard. Onboarding just gives you a structured way to get started.
                        </div>
                    </div>
                </div>

                <!-- Features -->
                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>How does CohostIQ integrate with my PMS?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            CohostIQ connects to your PMS (Hospitable, with others on the way) to pull in properties and reservations. You keep using your PMS for guests, channels, listings, and messaging. CohostIQ adds the things your PMS doesn't do: owner billing, cohost payout math, cleaning operations, maintenance with property item tracking, supplies and linens, and the QuickBooks sync to tie everything together.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>How does the maintenance ticketing system work?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Maintenance in CohostIQ is built around the items at each property. Every appliance, hot tub, HVAC unit, and major furnishing is tracked with purchase dates, warranties, and full repair history. When something breaks for the third time, you see it instantly as a repeat offender so you can stop pouring money into a unit that needs replacement.
                            <br><br>
                            Tickets can be created manually or <strong>auto-generated from Hospitable, HostBuddy, and Turno</strong>. Assignments go out by push notification and SMS, and your maintenance crew works the ticket from the <strong>mobile maintenance app</strong> (separate from the cleaning app). They log parts, hours, and photos on the phone. Costs flow straight to the right owner's statement with a full audit trail.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>How do owner statements work?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Owner statements generate from reservations, your payment rulesets, and any logged expenses. Each statement shows gross revenue, management fees, cleaning fees, maintenance, supplies, and the net payout. Owners can view statements directly through the owner portal, and you can download PDFs. If you connect QuickBooks, statements post directly as invoices and credit memos with no double entry.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>What is the Owner Portal?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            The Owner Portal gives each property owner their own secure login to view their properties. Owners can see upcoming reservations, review past statements, track property performance, and view maintenance history. Transparency builds trust and cuts down on owner emails asking the same questions every month.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>What reports are available?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            CohostIQ includes a range of reports:
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>Revenue reports.</strong> Track income by property, owner, or time period.</li>
                                <li><strong>Occupancy reports.</strong> See booking rates and identify gaps.</li>
                                <li><strong>Year-over-year comparison.</strong> Compare performance across years.</li>
                                <li><strong>Expense reports.</strong> Analyze spending by category.</li>
                                <li><strong>Cleaning P&amp;L.</strong> Cleaner pay vs. cleaning fees collected, with property and cleaner leaderboards.</li>
                                <li><strong>Tax reports.</strong> Per-jurisdiction summaries based on your tax setup.</li>
                            </ul>
                            All reports can be filtered by date range and exported to CSV or PDF.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>Can I customize user permissions?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. CohostIQ uses role-based permissions. Common roles include Admin, Manager, Cleaner, Maintenance, Purchasing, and CSR. Each role has specific permissions for what users can see and do. You can also limit team members to specific properties or locations so they only see what's relevant to their work.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>What does the cleaning module do?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            CohostIQ runs cleaning operations end to end. Jobs are auto-created from reservations and assigned to your preferred cleaner or crew per property. Templates support reusable checklists with conditional tasks (different items based on day of week, guest count, pet count, or season), and 4 different pay models per template (total job, lead + sub, per hour, or per room).
                            <br><br>
                            Cleaners work the job from the mobile cleaning app: timer, step-by-step checklist, photo uploads tied to tasks, problem reporting, and linen tracking when laundry goes off-site. Cleaner pay is calculated per job, totaled per pay period, and paid via cash, check, Venmo, Zelle, PayPal, Stripe, or QuickBooks payroll (coming soon). The cleaning cost flows straight to the right owner's statement.
                            <br><br>
                            If you use Turno, you can import their templates and pull in completed Turno projects for reporting.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>How does CohostIQ handle Airbnb cohost payouts?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Cohost payout math is the reason a lot of cohosts find us. Airbnb pays you a percentage of the entire booking (or the booking minus cleaning), plus the cleaning fee. Your actual commission is usually a percentage of base rent only, and the cleaning fee Airbnb passes through includes a 15.5% host fee on top of the real cleaning cost. The result: Airbnb overpays you, and you owe the owner a credit on every reservation.
                            <br><br>
                            CohostIQ supports 5 payout methods to match however your platform pays you: Cleaning Only, Cleaning + a percentage, Percentage Excluding Cleaning, Percentage Including Cleaning, or Fixed per Booking. For each reservation we calculate the right commission, the right cleaning credit, and the right owner credit automatically. No spreadsheets, no reverse-engineering payouts, no missed credits.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>Are there mobile apps for cleaners and maintenance?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes. CohostIQ ships two separate mobile apps (progressive web apps, no app store install needed):
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>Cleaning app.</strong> Cleaners see their jobs, run the checklist, upload photos, report problems, track linens going off-site, and check in with optional GPS. Pay is tracked per job.</li>
                                <li><strong>Maintenance app.</strong> Technicians get assigned tickets with full property and item history, log parts and labor, upload before/after photos, and close tickets from the field.</li>
                            </ul>
                            Both apps use single sign-on from the manager portal (no separate accounts) and produce a complete audit trail behind every job.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>Does CohostIQ have AI features?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes, but on rails. Owner billing, cohost payouts, and statement math run on deterministic rules so the dollars are always right. AI shows up where it actually helps:
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>Ask CohostIQ.</strong> A built-in assistant grounded in your real data. Ask "what was Sunset Villa's revenue last March?" or "any open maintenance at Lakeside?" and get answers from your portfolio. It can also create maintenance tickets straight from the conversation.</li>
                                <li><strong>CohostIQ MCP (in development).</strong> Our own Model Context Protocol server, so you can connect Claude, ChatGPT, or Cursor to your CohostIQ data for fuzzy queries while the deterministic billing rules keep your statements safe.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="features">
                    <div class="faq-question">
                        <h4>How does CohostIQ handle supplies and linens?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Supplies are tracked per property. You build reusable supply kits with scaling rules (per bedroom, per bathroom, or fixed), and CohostIQ auto-creates a restock job when stock runs low or on a turnover trigger. The property status dashboard shows you at a glance which properties need supplies and which are good.
                            <br><br>
                            Linens are handled per property too. You set the mode (on-site, off-site cleaner, vendor service, or mixed), and when laundry goes off-site, the cleaning app tracks the checkout with a days-out counter so nothing gets lost.
                        </div>
                    </div>
                </div>

                <!-- Billing -->
                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>How does pricing work?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            For vacation rental and short-term rental portfolios, CohostIQ uses volume-based per-property pricing. The more properties you have, the lower the per-property rate, and volume discounts apply automatically as you add properties, so there's nothing to upgrade or downgrade manually. See the <a href="signup.php#pricing">pricing page</a> for current tiers.
                            <br><br>
                            Homeowner and condo associations are priced differently &mdash; by unit count, as a flat monthly rate. See <a href="hoa.php#hoa-pricing">HOA &amp; COA pricing</a>.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>What payment methods do you accept?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We accept all major credit cards (Visa, Mastercard, American Express, Discover) through Stripe. Contact us at <a href="mailto:support@cohostiq.app">support@cohostiq.app</a> if you need custom billing arrangements.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>Is there a contract or commitment?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            No long-term contract. Pricing is month to month and you can cancel anytime from your account settings.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>What happens to my data if I cancel?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            If you cancel your subscription, you'll have access until the end of your current billing period. After that, your account is deactivated but your data is retained for 90 days in case you decide to return. You can request a full data export at any time before or after cancellation.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Still Have Questions -->
    <section class="section section-gray">
        <div class="container">
            <div style="max-width: 700px; margin: 0 auto; text-align: center;">
                <h2 style="margin-bottom: 16px;">Still Have Questions?</h2>
                <p style="color: #637381; margin-bottom: 30px;">
                    Can't find the answer you're looking for? Our support team is here to help.
                </p>
                <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:support@cohostiq.app" class="btn btn-primary">
                        &#128231; Email Support
                    </a>
                    <a href="https://cohostiq.app/signup/signup.php" class="btn btn-outline">
                        Start Free Trial
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Get Started?</h2>
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
