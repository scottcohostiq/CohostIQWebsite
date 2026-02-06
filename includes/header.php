<?php
/**
 * CohostIQ Marketing Website - Security Headers
 *
 * Lightweight header file for public marketing pages.
 * No session/auth required - just security headers.
 */

// Prevent caching of dynamic content
if (!headers_sent()) {
    header("Cache-Control: public, max-age=3600"); // Cache for 1 hour (marketing pages are static)
    header("Pragma: cache");
}

// Content Security Policy - strict but allows Google Fonts
header("Content-Security-Policy: "
    . "default-src 'self'; "
    . "script-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
    . "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; "
    . "font-src 'self' https://fonts.gstatic.com; "
    . "img-src 'self' data: https:; "
    . "connect-src 'self'; "
    . "object-src 'none'; "
    . "frame-ancestors 'none'; "
    . "base-uri 'self'; "
    . "form-action 'self' https://cohostiq.app;"
);

// Prevent MIME type sniffing
header("X-Content-Type-Options: nosniff");

// Set content type
header("Content-Type: text/html; charset=UTF-8");

// Prevent Clickjacking
header("X-Frame-Options: DENY");

// Enable XSS Protection (legacy browsers)
header("X-XSS-Protection: 1; mode=block");

// Referrer Policy - don't leak full URL to external sites
header("Referrer-Policy: strict-origin-when-cross-origin");

// Permissions Policy - restrict browser features we don't need
header("Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=()");

// HSTS - enforce HTTPS (commented out for dev, enable in production)
// header("Strict-Transport-Security: max-age=31536000; includeSubDomains; preload");
?>
