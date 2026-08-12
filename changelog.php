<?php
$pageTitle = 'What\'s New - CohostIQ';
$pageDescription = 'Recently shipped features and improvements to CohostIQ. Plain English, no engineering jargon.';
$currentPage = 'changelog';
$pageCanonical = '/changelog.php';
$pageNoindex = true; // Internal-only page, not linked from nav/footer

/**
 * Maintained as part of regular website updates. To add new entries, prepend
 * to the $entries array. Source of truth: git log in the CohostIQ app repo.
 *
 * Each entry:
 *   - date:     'YYYY-MM-DD' (used for sorting + month grouping)
 *   - category: 'cleaning|maintenance|hoa|onboarding|billing|integrations|ai|owners|core'
 *   - title:    Short, user-facing headline (no engineering jargon)
 *   - body:     Optional one-sentence explanation (plain English)
 *   - hidden:   Set to true to keep an entry out of public view without deleting it
 *
 * Default visibility: every entry shows unless hidden = true.
 */
$entries = [
    // ================== August 2026 ==================
    ['date' => '2026-08-12', 'category' => 'core', 'title' => 'Editable check-in and check-out times that push back to your PMS',
     'body' => 'Change a stay\'s check-in or check-out time in CohostIQ and it updates the reservation in Hospitable automatically.'],

    ['date' => '2026-08-11', 'category' => 'ai', 'title' => 'InboxIQ: your whole guest inbox in one mobile app',
     'body' => 'Every guest conversation across channels in a single installable app, with tickets, cleaning status, a property calendar, and who-else-is-viewing awareness.'],

    ['date' => '2026-08-11', 'category' => 'integrations', 'title' => 'Unlock the door right from the guest conversation',
     'body' => 'Lock or unlock a smart lock straight from the thread or the property sheet, and vacant homes re-lock themselves automatically.'],

    ['date' => '2026-08-10', 'category' => 'owners', 'title' => 'Issue owner credits that sync to QuickBooks',
     'body' => 'Apply a credit to an owner, net it into their statement, and record the matching credit memo in QuickBooks in one step.'],

    ['date' => '2026-08-04', 'category' => 'integrations', 'title' => 'Caller ID that knows who\'s calling',
     'body' => 'When the phone rings, CohostIQ pops the caller\'s identity — owner, contractor, staff, or guest — matched against your data.'],

    ['date' => '2026-08-01', 'category' => 'guest', 'title' => 'Branded guest stay portal with live chat',
     'body' => 'Guests get a private link to their trip details, house info, and a live chat with your team, in your colors and logo.'],

    ['date' => '2026-08-01', 'category' => 'billing', 'title' => 'Direct and partner bookings with their own invoicing',
     'body' => 'Take bookings outside the OTAs and invoice each partner their own way, through Stripe or QuickBooks.'],

    // ================== July 2026 ==================
    ['date' => '2026-07-31', 'category' => 'billing', 'title' => 'Deeper two-way QuickBooks sync',
     'body' => 'Invoices, credit memos, deposits, and expense imports now flow both directions more reliably, with duplicate protection.'],

    ['date' => '2026-07-22', 'category' => 'integrations', 'title' => 'Fine-grained door-lock permissions',
     'body' => 'Decide exactly who can unlock which properties, with every guest-present unlock logged and ticketed.'],

    ['date' => '2026-07-13', 'category' => 'core', 'title' => 'Company SOPs your team and assistant can search',
     'body' => 'Store your standard operating procedures in a role-gated knowledge base that Ask CohostIQ can pull from to answer staff questions.'],

    ['date' => '2026-07-12', 'category' => 'cleaning', 'title' => 'Provisional holds on the calendar',
     'body' => 'Place a temporary check-in block while you sort out a turnover, and it releases itself automatically when it\'s no longer needed.'],

    // ================== June 2026 ==================
    ['date' => '2026-06-29', 'category' => 'guest', 'title' => 'Property advisories for guests',
     'body' => 'Post an ongoing-issue notice (hot tub down, road work) so guests and your team see the same heads-up.'],

    ['date' => '2026-06-29', 'category' => 'cleaning', 'title' => 'Photo audit for turnover templates',
     'body' => 'Catch redundant or missing end-of-clean photos before they become a problem, template by template.'],

    ['date' => '2026-06-29', 'category' => 'ai', 'title' => 'CIQ Concierge can send clean replies on its own',
     'body' => 'Turn on auto-send and vetted guest replies go out by themselves, respecting quiet hours, with a human always able to step in.'],

    ['date' => '2026-06-22', 'category' => 'guest', 'title' => 'Upsells: sell add-on services and experiences to guests',
     'body' => 'Offer early check-in, mid-stay cleans, and local experiences, with a vendor app to fulfill and a split calculator to price them.'],

    ['date' => '2026-06-20', 'category' => 'integrations', 'title' => 'Thermostat control per property',
     'body' => 'See and set property thermostats alongside your smart locks, included when you connect Hospitable.'],

    ['date' => '2026-06-18', 'category' => 'ai', 'title' => 'CIQ Concierge: AI guest messaging that answers like your team',
     'body' => 'Grounded in your real property data, it drafts or auto-sends guest replies, checks live availability, and handles early check-in requests, never inventing details.'],

    ['date' => '2026-06-18', 'category' => 'integrations', 'title' => 'Smart lock control comes to CohostIQ',
     'body' => 'Manage your properties\' smart locks from CohostIQ, with battery alerts and per-lock problem tracking, included when you connect Hospitable.'],

    // ================== May 2026 ==================
    ['date' => '2026-05-31', 'category' => 'maintenance', 'title' => 'Driving routes on the Day Planner map',
     'body' => 'Your tech\'s day now shows the actual driving route between stops, not straight lines.'],

    ['date' => '2026-05-31', 'category' => 'core', 'title' => 'Sidebar redesign with collapsible icon rail',
     'body' => 'Cleaner navigation, grouped Company Admin into four sub-sections, with your company logo in the top bar.'],

    ['date' => '2026-05-30', 'category' => 'maintenance', 'title' => 'Optimize My Day auto-bundles same-property tickets',
     'body' => 'When you have multiple tickets at one property, the planner groups them together so you only drive there once.'],

    ['date' => '2026-05-30', 'category' => 'owners', 'title' => 'Owners can download attachments from their portal',
     'body' => 'Documents shared on an owner profile are now downloadable directly from the portal.'],

    ['date' => '2026-05-29', 'category' => 'maintenance', 'title' => 'Optimize My Day picks the right tech for every ticket',
     'body' => 'One-click button builds a full day for your maintenance crew, weighing each tech\'s skills, location, and existing schedule.'],

    ['date' => '2026-05-29', 'category' => 'cleaning', 'title' => 'Cleaners can review their past jobs',
     'body' => 'New job history in the PWA Earnings page lets cleaners look back at what they\'ve worked on.'],

    ['date' => '2026-05-29', 'category' => 'hoa', 'title' => 'HOA board role appointments with full history',
     'body' => 'Track who served as president, treasurer, secretary, etc. with start and end dates and a complete history.'],

    ['date' => '2026-05-28', 'category' => 'onboarding', 'title' => 'Connect Stripe during onboarding',
     'body' => 'STR companies can now connect Stripe in the guided setup, enabling direct-booking deposits, damage charges, and owner payouts from day one.'],

    ['date' => '2026-05-28', 'category' => 'hoa', 'title' => 'HOA Managers land in the portal on login',
     'body' => 'No more landing on the admin dashboard. HOA Managers go straight to their dedicated portal.'],

    ['date' => '2026-05-28', 'category' => 'billing', 'title' => 'Stripe Connect self-recovery',
     'body' => 'If a Stripe account gets orphaned during setup, CohostIQ auto-recreates it with a one-click Start Over option.'],

    ['date' => '2026-05-27', 'category' => 'hoa', 'title' => 'HOA member requests system',
     'body' => 'Members file requests from their portal; admins get a queue with detail view, reply, and status workflow.'],

    ['date' => '2026-05-27', 'category' => 'maintenance', 'title' => 'Per-technician "Home" stop on routes',
     'body' => 'Each tech\'s home address anchors the start and end of their day. No more routes that ignore where the day actually begins.'],

    ['date' => '2026-05-27', 'category' => 'hoa', 'title' => 'HOA daily Action Center',
     'body' => 'Replaces the generic dashboard for HOA boards: today\'s calendar, recent activity, and what needs attention.'],

    ['date' => '2026-05-26', 'category' => 'hoa', 'title' => 'HOA property + member CSV import',
     'body' => 'Upload one spreadsheet and CohostIQ creates properties and members in a single pass.'],

    ['date' => '2026-05-26', 'category' => 'maintenance', 'title' => 'Multi-day maintenance tickets',
     'body' => 'A single ticket can now span multiple days on the Day Planner, perfect for projects that take more than an afternoon.'],

    ['date' => '2026-05-26', 'category' => 'maintenance', 'title' => 'Mobile-friendly Day Planner',
     'body' => 'Compact toolbar, route-as-button, bottom-sheet modals, and fat tap targets. The Day Planner works on a phone now.'],

    ['date' => '2026-05-25', 'category' => 'maintenance', 'title' => 'Bundle same-property tickets after drop',
     'body' => 'Drag a ticket onto the timeline and CohostIQ offers to bundle it with other open tickets at the same property.'],

    ['date' => '2026-05-23', 'category' => 'cleaning', 'title' => 'Manual payroll: record off-system payments',
     'body' => 'Paid a cleaner in cash or with a check outside the system? Record it against the right job for a clean audit trail.'],

    ['date' => '2026-05-21', 'category' => 'cleaning', 'title' => 'Cleaner invite emails include PWA install steps',
     'body' => 'New cleaners now get step-by-step instructions for installing the mobile app the first time they log in.'],

    ['date' => '2026-05-21', 'category' => 'core', 'title' => 'Impersonate user (admin tool)',
     'body' => 'Support can now temporarily view CohostIQ as another user (with explicit permission) to help diagnose issues faster.'],

    ['date' => '2026-05-19', 'category' => 'cleaning', 'title' => 'My Day timeline in the cleaning PWA',
     'body' => 'Cleaners see their schedule grouped above bundles and loose tickets, with a Next Stop sheet after closing each job.'],

    ['date' => '2026-05-19', 'category' => 'maintenance', 'title' => 'Drag-and-drop maintenance scheduling',
     'body' => 'Drag tickets onto the day timeline; drive time is respected automatically before and after each block.'],

    ['date' => '2026-05-18', 'category' => 'maintenance', 'title' => 'Day Planner: Optimize button (initial release)',
     'body' => 'First version of the route optimizer, using nearest-neighbor ordering for the day\'s stops.'],

    ['date' => '2026-05-18', 'category' => 'cleaning', 'title' => 'Cleaning alerts surface site-wide',
     'body' => 'Time-sensitive cleaning issues now appear across the whole app, not just on the Operations tab.'],

    ['date' => '2026-05-16', 'category' => 'integrations', 'title' => 'Hospitable reviews now sync into CohostIQ',
     'body' => 'Property reviews from Hospitable flow into CohostIQ so you can read them alongside your operational data.'],

    ['date' => '2026-05-15', 'category' => 'owners', 'title' => 'Owner role: cleaning visibility tuned',
     'body' => 'Owners see scheduled and cancelled cleanings on their calendar without seeing internal cleaning details.'],

    ['date' => '2026-05-14', 'category' => 'cleaning', 'title' => 'Compare-to-Turno workflow',
     'body' => 'Side-by-side editor for bringing Turno checklists into CohostIQ templates with explicit placement on every row.'],

    ['date' => '2026-05-13', 'category' => 'onboarding', 'title' => 'Guided onboarding v2 with worked examples',
     'body' => '13-step wizard with a real-world example narrative for every step, so you know what to enter instead of guessing.'],

    ['date' => '2026-05-13', 'category' => 'cleaning', 'title' => 'Help modals throughout cleaning pages',
     'body' => 'Inline help on Cleaning Settings, Payroll, Cleaner Pay, Linens, Reports, Crews, and template setup.'],

    ['date' => '2026-05-12', 'category' => 'cleaning', 'title' => 'Cleaning Crews (lead + sub members)',
     'body' => 'Persistent crews with a paid lead and hidden-pay sub members. Lead can hand off a job to a sub from the PWA.'],

    ['date' => '2026-05-12', 'category' => 'cleaning', 'title' => 'Cleaners prompted to set up pay methods',
     'body' => 'First-time login in the PWA walks cleaners through adding their Venmo, Zelle, or other payment handles.'],

    // ================== April 2026 ==================
    ['date' => '2026-05-01', 'category' => 'ai', 'title' => 'Ask CohostIQ + MCP foundation',
     'body' => 'Built-in assistant grounded in your real data, plus the start of our own MCP server work.'],

    ['date' => '2026-04-30', 'category' => 'cleaning', 'title' => 'Linens management',
     'body' => 'On-site, off-site cleaner, vendor service, or mixed handling per property. Off-site linens tracked with a days-out counter.'],

    ['date' => '2026-04-28', 'category' => 'cleaning', 'title' => 'Cleaning PWA polish',
     'body' => 'Faster job acceptance, clearer status badges, and improved offline handling for cleaners in the field.'],

    ['date' => '2026-04-26', 'category' => 'cleaning', 'title' => 'Inspection triggers',
     'body' => 'Configurable inspection requirements for new cleaners, long absences, and random audits.'],

    ['date' => '2026-04-21', 'category' => 'core', 'title' => 'Reporting overhaul',
     'body' => 'Year-over-year revenue, occupancy, expense, tax, and cleaning P&L reports with date filters and CSV/PDF export.'],

    ['date' => '2026-04-21', 'category' => 'owners', 'title' => 'Owner portal expanded',
     'body' => 'Owners see statements, upcoming reservations, performance, and maintenance history from one secure login.'],

    ['date' => '2026-04-20', 'category' => 'core', 'title' => 'Tax setup and pacing reports',
     'body' => 'Per-jurisdiction tax rates with effective dates, platform handling rules, and a pacing report for booking trends.'],

    ['date' => '2026-04-19', 'category' => 'cleaning', 'title' => 'Cleaner pay matrix',
     'body' => 'Set per-cleaner pay overrides by property size in a fast-fill matrix view. Blank cells fall back to template defaults.'],

    ['date' => '2026-04-14', 'category' => 'cleaning', 'title' => 'Cleaning module launched',
     'body' => 'Full cleaning operations: jobs auto-created from reservations, preferred cleaner assignment, templates with conditional checklists, and a mobile PWA for cleaners.'],

    ['date' => '2026-04-12', 'category' => 'cleaning', 'title' => 'Supplies management',
     'body' => 'Per-property supply kits with scaling rules. Low stock triggers an auto-created restock job before guests notice.'],

    ['date' => '2026-04-11', 'category' => 'cleaning', 'title' => 'Reusable cleaning templates',
     'body' => 'Templates with spaces, tasks, and sub-tasks, plus four pay models per template (total job, lead + sub, per hour, or per room).'],

    ['date' => '2026-04-08', 'category' => 'maintenance', 'title' => 'Property items + maintenance tracking',
     'body' => 'Track every appliance, hot tub, HVAC, and major furnishing per property with warranty dates and full repair history. Spot repeat offenders instantly.'],

    ['date' => '2026-04-08', 'category' => 'integrations', 'title' => 'HostBuddy integration',
     'body' => 'Maintenance tickets can be auto-created from HostBuddy, joining the existing Hospitable and Turno integrations.'],

    ['date' => '2026-04-07', 'category' => 'billing', 'title' => 'Stripe integration',
     'body' => 'Stripe Connect support for collecting direct-booking deposits and charging guests for damages or extra fees.'],

    ['date' => '2026-04-02', 'category' => 'owners', 'title' => 'Owner charges and tax assignment',
     'body' => 'Create one-time and recurring owner charges with line-item billing; assign taxes to the right jurisdictions per property.'],

    ['date' => '2026-03-31', 'category' => 'core', 'title' => 'HOA and Hotel business types',
     'body' => 'Beyond STR and MTR cohosting, CohostIQ now supports homeowner associations and small hotels with dedicated flows.'],

    ['date' => '2026-03-31', 'category' => 'core', 'title' => 'Dashboard and accounting foundation',
     'body' => 'Initial release with the dashboard, owner-statement generation, payment rulesets, and multi-business-type architecture.'],
];

// Category metadata
$categories = [
    'cleaning'     => ['label' => 'Cleaning',     'color' => '#13c296'],
    'maintenance'  => ['label' => 'Maintenance',  'color' => '#4a6cf7'],
    'hoa'          => ['label' => 'HOA',          'color' => '#8b5cf6'],
    'onboarding'   => ['label' => 'Onboarding',   'color' => '#f59e0b'],
    'billing'      => ['label' => 'Billing',      'color' => '#635bff'],
    'integrations' => ['label' => 'Integrations', 'color' => '#0ea5e9'],
    'ai'           => ['label' => 'AI',           'color' => '#ec4899'],
    'guest'        => ['label' => 'Guest',        'color' => '#f97316'],
    'owners'       => ['label' => 'Owners',       'color' => '#10b981'],
    'core'         => ['label' => 'Core',         'color' => '#64748b'],
];

require_once __DIR__ . '/includes/header.php';

// Filter out hidden entries
$visible = array_filter($entries, fn($e) => empty($e['hidden']));

// Sort newest first
usort($visible, fn($a, $b) => strcmp($b['date'], $a['date']));

// Group by month
$byMonth = [];
foreach ($visible as $e) {
    $key = substr($e['date'], 0, 7); // YYYY-MM
    $byMonth[$key][] = $e;
}
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>What's New</span>
            </nav>
            <h1 class="page-header-title">What's New</h1>
            <p class="page-header-description">
                A plain-English log of features we've shipped. We update it as we go.
            </p>
        </div>
    </section>

    <!-- Changelog -->
    <section class="section">
        <div class="container">
            <div class="changelog-list">
                <?php foreach ($byMonth as $monthKey => $items):
                    $monthLabel = date('F Y', strtotime($monthKey . '-01'));
                ?>
                    <div class="changelog-month">
                        <div class="changelog-month-label"><?php echo htmlspecialchars($monthLabel); ?></div>
                        <div class="changelog-month-items">
                            <?php foreach ($items as $item):
                                $cat = $categories[$item['category']] ?? ['label' => $item['category'], 'color' => '#64748b'];
                            ?>
                                <article class="changelog-item">
                                    <div class="changelog-item-head">
                                        <span class="changelog-badge" style="background: <?php echo $cat['color']; ?>15; color: <?php echo $cat['color']; ?>;"><?php echo htmlspecialchars($cat['label']); ?></span>
                                        <h3 class="changelog-item-title"><?php echo htmlspecialchars($item['title']); ?></h3>
                                    </div>
                                    <?php if (!empty($item['body'])): ?>
                                        <p class="changelog-item-body"><?php echo htmlspecialchars($item['body']); ?></p>
                                    <?php endif; ?>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Want to See It In Action?</h2>
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
