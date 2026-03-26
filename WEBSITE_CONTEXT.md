# CohostIQ Marketing Website Context

## Overview
The `/website/` directory contains the public-facing marketing website for CohostIQ, a property management SaaS platform for vacation rental cohosts and property managers.

## File Structure
```
/html/website/
├── index.php          - Homepage with hero, features overview, pricing, testimonials
├── features.php       - Detailed features page
├── signup.php         - Sign-up / get started page
├── faq.php            - Frequently asked questions
├── css/
│   └── website.css    - All styling for the marketing site
└── WEBSITE_CONTEXT.md - This file
```

## Key Messaging
- **Target Audience**: Vacation rental cohosts and property managers
- **Value Proposition**: All-in-one platform to manage properties, owners, finances, and operations
- **Scalability Message**: "Adding a client or property used to mean 1-2 hours minimum with billing and operations, now that is all instant!" - Emphasize how the system helps scale operations with minimal time impact

## Design System
- **Primary Color**: #4a6cf7 (blue)
- **Success/Green**: #10b981
- **Background**: White with subtle gradients
- **Border Radius**: 12-16px for cards
- **Font**: System fonts (clean, modern)
- **Style**: Modern SaaS aesthetic with gradient buttons, card-based layouts, subtle shadows

## CSS Classes (in website.css)
- `.hero-section` - Main hero banner
- `.features-section` - Features grid
- `.pricing-section` - Pricing cards
- `.testimonials-section` - Customer testimonials
- `.cta-section` - Call-to-action blocks
- `.faq-section` - FAQ accordion
- Navigation and footer styles included

## Current Features Highlighted
1. Property Management
2. Owner Portal & Statements
3. Financial Tracking & QuickBooks Integration
4. Reservation Management
5. Maintenance & Tickets
6. Automated Workflows
7. Multi-property scalability

## Pricing Tiers (as currently shown)
- Starter: For small portfolios
- Professional: For growing businesses
- Enterprise: For large operations

## Notes for Updates
- All pages use PHP includes for header/footer consistency
- Mobile responsive design is implemented
- The site emphasizes ease of onboarding and time savings
- Integration capabilities (Hospitable, QuickBooks, etc.) are key selling points

## Related Main App Files
- Main app is in `/html/` (outside of `/website/`)
- App uses similar design language defined in `/html/css/` files
- Shared color scheme and UI patterns for brand consistency
