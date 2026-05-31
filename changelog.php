<?php
$pageTitle = 'What\'s New - CohostIQ';
$pageDescription = 'Recently shipped features and improvements to CohostIQ. Curated from our actual development work.';
$currentPage = 'changelog';
$pageCanonical = '/changelog.php';

/**
 * Maintained manually. To add new entries, prepend to the $entries array.
 * Source of truth: git log in the CohostIQ app repo.
 *
 * Each entry: ['date' => 'YYYY-MM-DD', 'category' => 'cleaning|day-planner|hoa|onboarding|stripe|integrations|owner-portal|maintenance|core', 'title' => 'short description']
 *
 * Keep entries plain English. Avoid internal jargon.
 */
$entries = [
    // 2026-05-31
    ['date' => '2026-05-31', 'category' => 'cleaning', 'title' => 'Cleaning PWA: skip-report asks what\'s wrong before filing a maintenance ticket, with one-tap shortcuts for missing supplies and broken items.'],
    ['date' => '2026-05-31', 'category' => 'cleaning', 'title' => 'Cleaning review surfaces every reported problem in the photo lightbox, with step + room context and the ability to open a ticket inline.'],
    ['date' => '2026-05-31', 'category' => 'integrations', 'title' => 'Turno-compare: templates now track who marked them compared and when.'],
    ['date' => '2026-05-31', 'category' => 'integrations', 'title' => 'Hospitable token refresh now flags revoked connections and skips them instead of crashing the sync.'],
    ['date' => '2026-05-31', 'category' => 'day-planner', 'title' => 'Day Planner: Optimize My Day shows the current owner on every row.'],
    ['date' => '2026-05-31', 'category' => 'day-planner', 'title' => 'Day Planner: map shows road-snapped driving route via OSRM.'],
    ['date' => '2026-05-31', 'category' => 'core', 'title' => 'Sidebar: redesigned with collapsible icon rail, grouped Company Admin into 4 sub-sections, and company logo in the top bar.'],

    // 2026-05-30
    ['date' => '2026-05-30', 'category' => 'day-planner', 'title' => 'Day Planner: Optimize My Day auto-bundles same-property tickets when building your route.'],
    ['date' => '2026-05-30', 'category' => 'core', 'title' => 'Property events heads-up: badge on the property card + banner inside the job so techs see relevant events without hunting.'],
    ['date' => '2026-05-30', 'category' => 'owner-portal', 'title' => 'Owner secure profiles: download attachments straight from the portal.'],

    // 2026-05-29
    ['date' => '2026-05-29', 'category' => 'cleaning', 'title' => '"Running late" button on cleaners\' scheduled-today cards in the PWA.'],
    ['date' => '2026-05-29', 'category' => 'day-planner', 'title' => 'Day Planner Phase 2: Optimize My Day button uses a skills-weighted day builder and surfaces why each ticket was skipped.'],
    ['date' => '2026-05-29', 'category' => 'cleaning', 'title' => 'Cleaner job history (Phase 1): cleaners can review their past jobs from the Earnings page.'],
    ['date' => '2026-05-29', 'category' => 'hoa', 'title' => 'HOA: board role appointments with start/end dates and full history.'],
    ['date' => '2026-05-29', 'category' => 'hoa', 'title' => 'HOA: pre-populate common board roles on community create with self-healing seeds.'],

    // 2026-05-28
    ['date' => '2026-05-28', 'category' => 'hoa', 'title' => 'HOA Manager auto-routing on login lands you in the portal instead of admin dashboard.'],
    ['date' => '2026-05-28', 'category' => 'onboarding', 'title' => 'Onboarding V2: Connect Payments (Stripe) surfaced as an optional step for STR companies, with the Welcome checklist updated to mention Stripe banking info.'],
    ['date' => '2026-05-28', 'category' => 'onboarding', 'title' => 'Onboarding V2 properties: require a location on every PMS-imported property and explain why the cleaning-fee field matters.'],
    ['date' => '2026-05-28', 'category' => 'onboarding', 'title' => 'HOA onboarding: new "Set Up Your Team" step, Dues Rulesets moved to the post-Go-Live portal flow.'],
    ['date' => '2026-05-28', 'category' => 'stripe', 'title' => 'Stripe Connect: auto-recreate the account when the stored one is orphaned, plus a "Start over" escape hatch during onboarding.'],
    ['date' => '2026-05-28', 'category' => 'onboarding', 'title' => 'Cleaner welcome email rewritten to be focused, with App Store warning included.'],

    // 2026-05-27
    ['date' => '2026-05-27', 'category' => 'day-planner', 'title' => 'Day Planner: built-in "Home" stop pre-mapped to each tech\'s address, auto-appended at end of route.'],
    ['date' => '2026-05-27', 'category' => 'hoa', 'title' => 'HOA member requests (Phase 1): members file requests from the portal; admins get a queue with detail, reply, and status workflow.'],
];

// Category metadata: label + color class
$categories = [
    'cleaning'      => ['label' => 'Cleaning',     'color' => '#13c296'],
    'day-planner'   => ['label' => 'Day Planner',  'color' => '#4a6cf7'],
    'hoa'           => ['label' => 'HOA',          'color' => '#8b5cf6'],
    'onboarding'    => ['label' => 'Onboarding',   'color' => '#f59e0b'],
    'stripe'        => ['label' => 'Stripe',       'color' => '#635bff'],
    'integrations'  => ['label' => 'Integrations', 'color' => '#0ea5e9'],
    'owner-portal'  => ['label' => 'Owner Portal', 'color' => '#ec4899'],
    'maintenance'   => ['label' => 'Maintenance',  'color' => '#ef4444'],
    'core'          => ['label' => 'Core',         'color' => '#64748b'],
];

require_once __DIR__ . '/includes/header.php';
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
                A curated log of what we've shipped recently. Pulled from our actual development work, not a marketing roadmap.
            </p>
        </div>
    </section>

    <!-- Changelog -->
    <section class="section">
        <div class="container">
            <div class="changelog-list">
                <?php
                // Group by date
                $byDate = [];
                foreach ($entries as $e) {
                    $byDate[$e['date']][] = $e;
                }
                foreach ($byDate as $date => $items):
                    $displayDate = date('F j, Y', strtotime($date));
                ?>
                    <div class="changelog-day">
                        <div class="changelog-day-date"><?php echo htmlspecialchars($displayDate); ?></div>
                        <div class="changelog-day-items">
                            <?php foreach ($items as $item):
                                $cat = $categories[$item['category']] ?? ['label' => $item['category'], 'color' => '#64748b'];
                            ?>
                                <div class="changelog-item">
                                    <span class="changelog-badge" style="background: <?php echo $cat['color']; ?>15; color: <?php echo $cat['color']; ?>;"><?php echo htmlspecialchars($cat['label']); ?></span>
                                    <span class="changelog-text"><?php echo htmlspecialchars($item['title']); ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p style="text-align: center; color: #94a3b8; font-size: 13px; margin-top: 40px;">
                This page is updated periodically. The product ships almost daily; the highlights above are curated.
            </p>
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
