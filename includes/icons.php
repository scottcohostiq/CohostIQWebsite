<?php
/**
 * CohostIQ Icon Sprite
 *
 * Single source of truth for every UI icon on the marketing site.
 * Icons are 24x24, stroke-based, and inherit their colour from the
 * surrounding text via currentColor.
 *
 * Usage in a template:
 *     <?php echo ciq_icon('wrench'); ?>
 *     <?php echo ciq_icon('check', 'icon-success'); ?>
 *
 * Sizing: .ciq-icon is 1em square, so an icon takes the font-size of
 * whatever contains it. A container that used to set font-size: 2rem
 * for an emoji renders a 2rem icon with no extra CSS.
 *
 * ciq_icon_sprite() must be output once per page — includes/header.php
 * does this immediately after <body>. Adding an icon means adding one
 * entry to CIQ_ICON_PATHS; nothing else changes.
 */

/**
 * Path geometry for every icon, keyed by name. 24x24 viewBox.
 */
function ciq_icon_paths(): array
{
    static $paths = [

        // ── Money & billing ──────────────────────────────────────────
        'wallet' => '<path d="M19 8V6.5A1.5 1.5 0 0 0 17.5 5H5a2 2 0 0 0 0 4h14a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7"/><circle cx="16.5" cy="14" r="1.2"/>',
        'banknote' => '<rect x="2.5" y="6" width="19" height="12" rx="2"/><circle cx="12" cy="12" r="2.5"/><path d="M6 12h.01M18 12h.01"/>',
        'credit-card' => '<rect x="2.5" y="5" width="19" height="14" rx="2.5"/><path d="M2.5 10h19"/><path d="M6.5 14.5h3"/>',

        // ── Data & reporting ─────────────────────────────────────────
        'bar-chart' => '<path d="M3 21h18"/><rect x="5" y="12" width="3.5" height="6" rx="1"/><rect x="10.25" y="7" width="3.5" height="11" rx="1"/><rect x="15.5" y="10" width="3.5" height="8" rx="1"/>',
        'trending-up' => '<polyline points="3 17 9.5 10.5 13.5 14.5 21 7"/><polyline points="15 7 21 7 21 13"/>',

        // ── Property ─────────────────────────────────────────────────
        'home' => '<path d="M3 10.5 12 3l9 7.5"/><path d="M5.5 9.5V20a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V9.5"/>',
        'building' => '<path d="M4 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"/><path d="M16 9h3a2 2 0 0 1 2 2v10"/><path d="M2.5 21h19"/><path d="M8 7h1.5M12 7h1.5M8 11h1.5M12 11h1.5M8 15h1.5M12 15h1.5"/>',
        'key' => '<circle cx="8" cy="15" r="4"/><path d="M10.8 12.2 21 2"/><path d="M17.5 5.5 20 8"/><path d="M14.8 8.2l2.5 2.5"/>',

        // ── Work & maintenance ───────────────────────────────────────
        'wrench' => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94z"/>',
        'hammer' => '<path d="M15 12l-8.5 8.5a2.1 2.1 0 0 1-3-3L12 9"/><path d="M12.5 6.5 16 3l5 5-3.5 3.5z"/><path d="M11 8l5 5"/>',
        'spray' => '<path d="M9 8.5h5a2 2 0 0 1 2 2V19a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2z"/><path d="M11 8.5V4h3"/><path d="M18.5 5h.01M20.5 8h.01M18.5 11h.01"/>',
        'package' => '<path d="M21 8.5v7a2 2 0 0 1-1 1.73l-7 4a2 2 0 0 1-2 0l-7-4A2 2 0 0 1 3 15.5v-7a2 2 0 0 1 1-1.73l7-4a2 2 0 0 1 2 0l7 4A2 2 0 0 1 21 8.5z"/><polyline points="3.3 7.5 12 12.5 20.7 7.5"/><path d="M12 12.5V22"/>',
        'clipboard' => '<path d="M9 3.5h6v3H9z"/><path d="M15 5h2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h2"/><path d="M9 12h6M9 16h4"/>',

        // ── Documents ────────────────────────────────────────────────
        'file' => '<path d="M14 2.5H7a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7.5z"/><polyline points="14 2.5 14 7.5 19 7.5"/>',
        'file-text' => '<path d="M14 2.5H7a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7.5z"/><polyline points="14 2.5 14 7.5 19 7.5"/><path d="M8.5 12.5h7M8.5 16.5h5"/>',

        // ── Communication ────────────────────────────────────────────
        'mail' => '<rect x="2.5" y="5" width="19" height="14" rx="2.5"/><polyline points="3.5 7.5 12 13 20.5 7.5"/>',
        'phone' => '<path d="M21 16.9v2.4a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 1.1 3.6 2 2 0 0 1 3.1 1.4h2.4a2 2 0 0 1 2 1.7c.1.9.35 1.8.7 2.6a2 2 0 0 1-.45 2.1L6.6 9.1a16 16 0 0 0 6 6l1.3-1.15a2 2 0 0 1 2.1-.45c.83.35 1.7.6 2.6.7a2 2 0 0 1 1.7 2z"/>',
        'smartphone' => '<rect x="6" y="2.5" width="12" height="19" rx="2.5"/><path d="M10.5 18.5h3"/>',

        // ── Platform ─────────────────────────────────────────────────
        'link' => '<path d="M10 13a5 5 0 0 0 7.5.5l3-3a5 5 0 0 0-7-7l-1.7 1.7"/><path d="M14 11a5 5 0 0 0-7.5-.5l-3 3a5 5 0 0 0 7 7l1.7-1.7"/>',
        'refresh' => '<path d="M20.5 12a8.5 8.5 0 0 1-14.6 6"/><path d="M3.5 12a8.5 8.5 0 0 1 14.6-6"/><polyline points="18 2.5 18.2 6.2 14.5 6.4"/><polyline points="6 21.5 5.8 17.8 9.5 17.6"/>',
        'lock' => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7a4 4 0 0 1 8 0v3.5"/>',
        'bot' => '<rect x="4" y="8" width="16" height="12" rx="3"/><path d="M12 8V4.8"/><circle cx="12" cy="3.6" r="1.2"/><path d="M9 13h.01M15 13h.01"/><path d="M9.5 16.5h5"/>',
        'sparkle' => '<path d="M12 3l1.9 5.1L19 10l-5.1 1.9L12 17l-1.9-5.1L5 10l5.1-1.9z"/><path d="M18.4 15.6l.7 2 2 .7-2 .7-.7 2-.7-2-2-.7 2-.7z"/>',
        'rocket' => '<path d="M12 2.8c2.9 2.2 4.6 5.6 4.6 9.3l-1.9 4.4H9.3L7.4 12.1C7.4 8.4 9.1 5 12 2.8z"/><circle cx="12" cy="9.5" r="1.9"/><path d="M9.3 16.5 7 19.7l2.7-.5M14.7 16.5l2.3 3.2-2.7-.5"/>',

        // ── People ───────────────────────────────────────────────────
        'users' => '<path d="M16 20v-1.5a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4V20"/><circle cx="9" cy="7.5" r="3.5"/><path d="M22 20v-1.5a4 4 0 0 0-3-3.87"/><path d="M16.5 4.2a4 4 0 0 1 0 7.1"/>',
        'briefcase' => '<rect x="2.5" y="7.5" width="19" height="12.5" rx="2"/><path d="M8.5 7.5V5.5a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v2"/><path d="M2.5 13h19"/>',

        // ── Misc ─────────────────────────────────────────────────────
        'gift' => '<rect x="3" y="8.5" width="18" height="4" rx="1"/><path d="M4.5 12.5V19a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-6.5"/><path d="M12 8.5V21"/><path d="M12 8.5S10.5 3 8 3a2.5 2.5 0 0 0 0 5.5zM12 8.5S13.5 3 16 3a2.5 2.5 0 0 1 0 5.5z"/>',
        'ticket' => '<path d="M3 8.5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v2a2 2 0 0 0 0 4v2a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-2a2 2 0 0 0 0-4z"/><path d="M13 6.5v2M13 11v2M13 15.5v2"/>',
        'check' => '<polyline points="4.5 12.5 9.5 17.5 19.5 6.5"/>',
    ];

    return $paths;
}

/**
 * The hidden <symbol> definitions. Output once per page, after <body>.
 */
function ciq_icon_sprite(): string
{
    $out = '<svg xmlns="http://www.w3.org/2000/svg" style="display:none" aria-hidden="true">';
    foreach (ciq_icon_paths() as $name => $geometry) {
        $out .= '<symbol id="ciq-' . $name . '" viewBox="0 0 24 24">' . $geometry . '</symbol>';
    }
    return $out . '</svg>';
}

/**
 * Render one icon.
 *
 * @param string $name  key from ciq_icon_paths()
 * @param string $class extra class names, space separated
 * @param string $label accessible label; omit for purely decorative icons,
 *                      which are hidden from screen readers instead
 */
function ciq_icon(string $name, string $class = '', string $label = ''): string
{
    if (!isset(ciq_icon_paths()[$name])) {
        return ''; // unknown icon: render nothing rather than a broken reference
    }

    $classAttr = 'ciq-icon' . ($class !== '' ? ' ' . htmlspecialchars($class) : '');

    $a11y = $label !== ''
        ? ' role="img" aria-label="' . htmlspecialchars($label) . '"'
        : ' aria-hidden="true" focusable="false"';

    return '<svg class="' . $classAttr . '"' . $a11y
         . ' fill="none" stroke="currentColor" stroke-width="1.75"'
         . ' stroke-linecap="round" stroke-linejoin="round">'
         . '<use href="#ciq-' . $name . '"/></svg>';
}
