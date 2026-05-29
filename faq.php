<?php
$pageTitle = 'FAQ - CohostIQ';
$pageDescription = 'Frequently asked questions about CohostIQ - onboarding, features, pricing, and support.';
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
                "text": "Yes! Your first 2 calendar months are completely free with all core features. You get a 30-minute onboarding call to get started."
            }
        },
        {
            "@type": "Question",
            "name": "How long does onboarding take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Most users complete the core onboarding in 15-30 minutes. This includes adding your company information, setting up properties, configuring fee structures, and inviting team members."
            }
        },
        {
            "@type": "Question",
            "name": "How does CohostIQ integrate with my PMS?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "CohostIQ connects directly to Property Management Systems like Hospitable to pull in your property and reservation data for billing, owner statements, reporting, and team management."
            }
        },
        {
            "@type": "Question",
            "name": "How do owner statements work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "CohostIQ automatically generates owner statements based on your reservations, fee structures, and logged expenses. Statements can be downloaded as PDFs and synced to QuickBooks."
            }
        },
        {
            "@type": "Question",
            "name": "Is there a contract or commitment?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "No long-term contracts! Monthly plans are billed month-to-month and you can cancel anytime."
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
                            Signing up is easy! Visit our <a href="signup.php">Sign Up page</a>, fill out the form with your information, and you'll have instant access. Start with 2 months free — limited time offer. Our guided onboarding gets you up and running in under 30 minutes.
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
                            Yes! Your first 2 calendar months are completely free with all core features — it's our limited time launch offer. You'll get a 30-minute onboarding call to get you up and running. After your trial, pay per property with volume discounts as you grow.
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
                            All you need is an email address to create your account. During onboarding, you'll add your properties, set up your fee structures, and optionally import existing reservations. Our guided setup process walks you through each step.
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
                            Yes! CohostIQ is designed to scale with your business. Whether you manage 5 properties or 500, our platform adapts to your needs. Smaller operators benefit from organized workflows and time savings, while larger operations appreciate the team management and advanced reporting features.
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
                            Most users complete the core onboarding in 15-30 minutes. This includes adding your company information, setting up properties, configuring fee structures, and inviting team members. Importing historical reservations may take additional time depending on how much data you have.
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
                            Some steps can be skipped and completed later, while others are required to proceed. For example, you must add at least one property before setting up owners. However, you can skip the QuickBooks integration and come back to it anytime. The system will guide you on which steps are required.
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
                            CohostIQ supports multiple ways to import reservations:
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>CSV Import</strong> - Upload a spreadsheet with your reservation data</li>
                                <li><strong>iCal Sync</strong> - Connect to Airbnb, VRBO, or other platforms that provide iCal feeds</li>
                                <li><strong>Manual Entry</strong> - Add reservations one at a time if needed</li>
                            </ul>
                            We provide templates and detailed instructions for each method during onboarding.
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
                            During onboarding, only the admin (the person who created the account) can complete the setup steps. Other team members who are invited will see a "Setup in Progress" page until the admin completes onboarding and clicks "Go Live." Once live, team members will have access based on their assigned roles.
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
                            Absolutely! Everything you set up during onboarding can be modified later. You can add more properties, change fee structures, update team member roles, and adjust settings anytime from your dashboard. Onboarding just gives you a structured way to get started.
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
                            CohostIQ connects directly to Property Management Systems like Hospitable to pull in your property and reservation data. This allows us to enhance your operations with powerful billing, owner statements, reporting, and team management features that your PMS doesn't provide. You keep using your PMS for guest communication and channel management while CohostIQ handles the operational and financial side.
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
                            CohostIQ's maintenance system goes beyond simple ticketing. You can track every appliance, piece of furniture, and item at each property with purchase dates and warranty information. When issues arise, you'll quickly identify "repeat offenders" - items that keep breaking down and may need replacement.
                            <br><br>
                            Tickets can be created manually or <strong>auto-generated from Hospitable, HostBuddy, and Turno</strong> integrations. Assign tickets to your maintenance staff or contractors, who receive notifications and can update status as they work. All maintenance costs are linked to specific items and properties for accurate owner billing.
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
                            CohostIQ automatically generates owner statements based on your reservations, fee structures, and logged expenses. Each statement shows gross revenue, management fees, cleaning fees, maintenance costs, and the net payout. Statements can be downloaded as PDFs and shared with owners. If you connect QuickBooks, statements can flow directly into your accounting.
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
                            The Owner Portal gives property owners their own secure login to view information about their properties. Owners can see upcoming reservations, review past statements, track property performance, and view maintenance history. This transparency builds trust and reduces the time you spend fielding owner questions.
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
                            CohostIQ includes a variety of reports:
                            <ul style="margin-top: 12px; padding-left: 20px;">
                                <li><strong>Revenue Reports</strong> - Track income by property, owner, or time period</li>
                                <li><strong>Occupancy Reports</strong> - See booking rates and identify gaps</li>
                                <li><strong>Year-over-Year Comparison</strong> - Compare performance across years</li>
                                <li><strong>Expense Reports</strong> - Analyze spending by category</li>
                                <li><strong>Tax Reports</strong> - Generate tax-related summaries</li>
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
                            Yes! CohostIQ uses role-based permissions. You can assign users to roles like Admin, Manager, Cleaner, Maintenance, Purchasing, and CSR. Each role has specific permissions that determine what they can see and do. You can also assign specific properties to team members so they only see what's relevant to their work.
                        </div>
                    </div>
                </div>

                <!-- Billing -->
                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>What payment methods do you accept?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            We accept all major credit cards (Visa, Mastercard, American Express, Discover) for monthly subscriptions. For annual plans or enterprise agreements, we can also accept bank transfers. Contact our sales team for custom billing arrangements.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>Can I change plans later?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! You can upgrade or downgrade your plan at any time. When you upgrade, you'll get immediate access to additional features and the price difference will be prorated. When you downgrade, the change takes effect at the start of your next billing cycle.
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
                            No long-term contracts! Monthly plans are billed month-to-month and you can cancel anytime. We also offer annual plans at a discounted rate for those who prefer to pay yearly. Enterprise customers may have custom terms based on their specific needs.
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
                            If you cancel your subscription, you'll have access until the end of your current billing period. After that, your account will be deactivated but your data is retained for 90 days in case you decide to return. You can request a full data export at any time before or after cancellation.
                        </div>
                    </div>
                </div>

                <div class="faq-item" data-category="billing">
                    <div class="faq-question">
                        <h4>Do you offer discounts for annual billing?</h4>
                        <div class="faq-toggle">+</div>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            Yes! Annual billing comes with a 15% discount compared to monthly pricing. When you choose annual billing, you pay for 10 months and get 12 months of service. This is a great option if you're committed to using CohostIQ long-term.
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
                    <a href="mailto:support@cohostiq.com" class="btn btn-primary">
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
                    Start your free trial today — first 2 months are on us.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/signup.php" class="btn btn-white btn-lg">Start Free Trial</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
