<?php
$pageTitle = 'Features - CohostIQ';
$pageDescription = 'Explore CohostIQ\'s powerful features for vacation rental management - reservations, maintenance, billing, reporting, and more.';
$currentPage = 'features';
$pageCanonical = '/features.php';
require_once __DIR__ . '/includes/header.php';
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb">
                <a href="index.php">Home</a>
                <span>/</span>
                <span>Features</span>
            </nav>
            <h1 class="page-header-title">Powerful Features for Modern Property Management</h1>
            <p class="page-header-description">
                Discover how CohostIQ enhances your PMS with powerful billing, team coordination, maintenance tracking, and reporting features.
            </p>
        </div>
    </section>

    <!-- Feature 1: PMS Integration -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128279; PMS Integration & Enhanced Operations</h3>
                    <p>
                        CohostIQ connects to your existing Property Management System like Hospitable to supercharge your operations. We pull in your reservation data and enhance it with powerful billing, reporting, and team management features your PMS doesn't provide.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Seamless connection to Hospitable and other PMS platforms</li>
                        <li>Automatic reservation sync for accurate billing calculations</li>
                        <li>Enhanced reporting beyond what your PMS offers</li>
                        <li>Keep using your PMS for guest communication and channel management</li>
                        <li>Add operational tools your PMS is missing</li>
                        <li>Single source of truth for financial and operational data</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div class="dashboard-preview" style="min-height: 250px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="font-weight: 600; color: #1d2144;">PMS Connection</div>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">&#10003; Connected</span>
                        </div>
                        <div style="background: white; border-radius: 8px; padding: 16px; margin-bottom: 12px; border: 1px solid #e2e8f0;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #4a6cf7, #6b8aff); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700;">H</div>
                                <div>
                                    <div style="font-weight: 600; color: #1d2144;">Hospitable</div>
                                    <div style="font-size: 12px; color: #637381;">Last sync: 5 minutes ago</div>
                                </div>
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                            <div style="background: white; border-radius: 8px; padding: 12px; text-align: center; border: 1px solid #e2e8f0;">
                                <div style="font-size: 1.25rem; font-weight: 700; color: #1d2144;">24</div>
                                <div style="font-size: 11px; color: #637381;">Properties Synced</div>
                            </div>
                            <div style="background: white; border-radius: 8px; padding: 12px; text-align: center; border: 1px solid #e2e8f0;">
                                <div style="font-size: 1.25rem; font-weight: 700; color: #1d2144;">156</div>
                                <div style="font-size: 11px; color: #637381;">Reservations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 2: Maintenance -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128736; Maintenance & Property Item Tracking</h3>
                    <p>
                        Never let a repair slip through the cracks. Track every appliance and item at each property, identify repeat offenders, and keep a complete maintenance history. Plus, tickets can be auto-created from your existing tools.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Track appliances, furniture, and items per property with purchase dates and warranties</li>
                        <li>Identify "repeat offenders" - items that keep breaking down</li>
                        <li>Auto-create tickets from Hospitable, HostBuddy, and Turno integrations</li>
                        <li>Assign tasks to maintenance staff or contractors with notifications</li>
                        <li>Link maintenance costs to specific items and properties for accurate billing</li>
                        <li>Complete history log showing all work done on each item</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Property Items</span>
                            <span style="padding: 4px 12px; background: #ff6b6b; color: white; border-radius: 20px; font-size: 12px;">2 Need Attention</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Samsung HVAC Unit</div>
                                <div style="font-size: 12px; color: #637381;">Lakeside Cabin - 4 repairs this year</div>
                            </div>
                            <span style="padding: 4px 12px; background: #ff6b6b; color: white; border-radius: 4px; font-size: 12px;">Repeat Issue</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Hot Tub - Bullfrog A7</div>
                                <div style="font-size: 12px; color: #637381;">Sunset Villa - Warranty expires 3/24</div>
                            </div>
                            <span style="padding: 4px 12px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 12px;">Check Warranty</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">LG Washer/Dryer</div>
                                <div style="font-size: 12px; color: #637381;">Mountain View - No issues</div>
                            </div>
                            <span style="padding: 4px 12px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px;">Good</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 3: Billing -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128176; Automated Billing & Owner Statements</h3>
                    <p>
                        Stop spending hours on spreadsheets. CohostIQ automatically generates professional owner statements, tracks expenses, and ensures you never miss a billable item again.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Automatic statement generation from reservation data</li>
                        <li>Customizable fee structures per property or owner</li>
                        <li>Track expenses with receipts and categorization</li>
                        <li>Support for management fees, cleaning fees, and pass-through costs</li>
                        <li>PDF export for easy sharing with owners</li>
                        <li>All Airbnb payout methods supported - cohost payouts, host-only fees, and split payouts</li>
                        <li>QuickBooks integration for seamless accounting</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; padding: 24px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div>
                                <div style="font-weight: 600; color: #1d2144;">Owner Statement</div>
                                <div style="font-size: 12px; color: #637381;">January 2025 - Lakeside Cabin</div>
                            </div>
                            <span style="padding: 6px 14px; background: #4a6cf7; color: white; border-radius: 6px; font-size: 12px;">Download PDF</span>
                        </div>
                        <div style="border-top: 1px solid #e2e8f0; padding-top: 16px;">
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Gross Revenue</span>
                                <span style="font-weight: 600; color: #1d2144;">$4,850.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Management Fee (15%)</span>
                                <span style="color: #ff6b6b;">-$727.50</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Cleaning Expenses</span>
                                <span style="color: #ff6b6b;">-$360.00</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                                <span style="color: #637381;">Maintenance</span>
                                <span style="color: #ff6b6b;">-$125.00</span>
                            </div>
                            <div style="border-top: 2px solid #1d2144; margin-top: 12px; padding-top: 12px; display: flex; justify-content: space-between;">
                                <span style="font-weight: 700; color: #1d2144;">Owner Payout</span>
                                <span style="font-weight: 700; color: #13c296; font-size: 1.25rem;">$3,637.50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 3b: Airbnb Payouts -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128181; Every Airbnb Payout Method, Handled</h3>
                    <p>
                        Airbnb keeps changing how payouts work, and every owner seems to be on a different method. CohostIQ supports all of them - and makes switching between methods seamless so your billing never breaks.
                    </p>
                    <ul class="feature-detail-list">
                        <li><strong>Cohost Payouts:</strong> Airbnb pays you directly, then you pay your owner their share</li>
                        <li><strong>Host-Only Fees:</strong> Airbnb pays the owner, and your management fee is deducted automatically</li>
                        <li><strong>Split Payouts:</strong> Airbnb splits the payout between you and the owner based on your agreement</li>
                        <li>Switch an owner from one method to another mid-month without breaking your billing</li>
                        <li>Per-property payout rules - different owners, different methods, no problem</li>
                        <li>Accurate fee calculations regardless of which method each property uses</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-weight: 600; color: #1d2144;">Payout Configuration</span>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">3 Methods Active</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Lakeside Cabin</div>
                                <div style="font-size: 12px; color: #637381;">Owner: John Davis</div>
                            </div>
                            <span style="padding: 4px 12px; background: #e8f4fd; color: #4a6cf7; border-radius: 4px; font-size: 12px; font-weight: 600;">Cohost Payout</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Sunset Villa</div>
                                <div style="font-size: 12px; color: #637381;">Owner: Sarah Kim</div>
                            </div>
                            <span style="padding: 4px 12px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 12px; font-weight: 600;">Host-Only Fee</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Mountain View</div>
                                <div style="font-size: 12px; color: #637381;">Owner: Mike Torres</div>
                            </div>
                            <span style="padding: 4px 12px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 12px; font-weight: 600;">Split Payout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 3c: QuickBooks Integration -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128218; QuickBooks Integration for Owners</h3>
                    <p>
                        Keep your books in sync without double entry. CohostIQ connects directly to QuickBooks so your owner statements, expenses, and payouts flow automatically into your accounting - saving you hours every month and keeping your financials accurate.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Automatically sync owner statements and invoices to QuickBooks</li>
                        <li>Map revenue, management fees, and expenses to your QuickBooks chart of accounts</li>
                        <li>Push owner payouts directly into QuickBooks for clean reconciliation</li>
                        <li>Expense categorization carries over - no reclassifying in QuickBooks</li>
                        <li>Per-owner and per-property financial records synced automatically</li>
                        <li>Eliminate manual data entry and reduce accounting errors</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                            <div style="display: flex; align-items: center; gap: 12px;">
                                <div style="width: 36px; height: 36px; background: #2CA01C; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-weight: 700; font-size: 14px;">QB</div>
                                <span style="font-weight: 600; color: #1d2144;">QuickBooks Sync</span>
                            </div>
                            <span style="padding: 4px 12px; background: #13c296; color: white; border-radius: 20px; font-size: 12px;">&#10003; Connected</span>
                        </div>
                        <div style="padding: 16px 20px;">
                            <div style="font-size: 12px; color: #637381; margin-bottom: 12px;">Recent Sync Activity</div>
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Owner Statement - Lakeside Cabin</div>
                                        <div style="font-size: 11px; color: #637381;">Invoice #1042 created in QuickBooks</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Maintenance Expense - HVAC Repair</div>
                                        <div style="font-size: 11px; color: #637381;">$450 posted to Repairs & Maintenance</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; align-items: center; padding: 10px 14px; background: #f8fafc; border-radius: 8px;">
                                    <div>
                                        <div style="font-weight: 500; color: #1d2144; font-size: 13px;">Owner Payout - John Davis</div>
                                        <div style="font-size: 11px; color: #637381;">$3,637.50 recorded as bill payment</div>
                                    </div>
                                    <span style="color: #13c296; font-size: 12px;">&#10003; Synced</span>
                                </div>
                            </div>
                            <div style="margin-top: 14px; padding-top: 14px; border-top: 1px solid #e2e8f0; display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-size: 12px; color: #637381;">Last sync: 2 minutes ago</span>
                                <span style="font-size: 12px; color: #637381;">47 items synced this month</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 4: Team Management -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128101; Team & Vendor Management</h3>
                    <p>
                        Coordinate your entire team from one platform. Assign roles, manage permissions, schedule cleaners, and communicate with contractors - all without leaving CohostIQ.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Role-based permissions (Admin, Manager, Cleaner, Maintenance, etc.)</li>
                        <li>Automatic cleaning task creation from reservations</li>
                        <li>Assign specific properties to specific team members</li>
                        <li>Track task completion and team performance</li>
                        <li>Vendor/contractor profiles with contact info and rates</li>
                        <li>Mobile-friendly for field staff</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; overflow: hidden;">
                        <div style="padding: 16px 20px; border-bottom: 1px solid #e2e8f0;">
                            <span style="font-weight: 600; color: #1d2144;">Team Members</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #4a6cf7, #6b8aff); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">SM</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Sarah Mitchell</div>
                                <div style="font-size: 12px; color: #637381;">Admin</div>
                            </div>
                            <span style="padding: 4px 10px; background: #e8f4fd; color: #4a6cf7; border-radius: 4px; font-size: 11px;">All Properties</span>
                        </div>
                        <div style="padding: 12px 20px; border-bottom: 1px solid #e2e8f0; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #13c296, #28d6a8); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">MC</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Maria Cleaning</div>
                                <div style="font-size: 12px; color: #637381;">Cleaner</div>
                            </div>
                            <span style="padding: 4px 10px; background: #d4edda; color: #155724; border-radius: 4px; font-size: 11px;">8 Tasks Today</span>
                        </div>
                        <div style="padding: 12px 20px; display: flex; align-items: center; gap: 12px;">
                            <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #ff6b6b, #ff8787); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-weight: 600;">JH</div>
                            <div style="flex: 1;">
                                <div style="font-weight: 500; color: #1d2144; font-size: 14px;">Jim's HVAC</div>
                                <div style="font-size: 12px; color: #637381;">Maintenance</div>
                            </div>
                            <span style="padding: 4px 10px; background: #fff3cd; color: #856404; border-radius: 4px; font-size: 11px;">2 Active</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 5: Reporting -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128202; Powerful Reporting & Analytics</h3>
                    <p>
                        Make data-driven decisions with comprehensive reports. Track occupancy, revenue, expenses, and trends across your entire portfolio or drill down to individual properties.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Year-over-year revenue comparison reports</li>
                        <li>Occupancy rate tracking by property and time period</li>
                        <li>Expense breakdown by category and property</li>
                        <li>Average daily rate (ADR) and RevPAR metrics</li>
                        <li>Customizable date ranges and filters</li>
                        <li>Export to CSV or PDF for further analysis</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: white; border-radius: 12px; padding: 24px;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                            <div style="font-weight: 600; color: #1d2144;">Revenue Comparison</div>
                            <div style="font-size: 12px; color: #637381;">2024 vs 2023</div>
                        </div>
                        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; margin-bottom: 20px;">
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">$48.2K</div>
                                <div style="font-size: 12px; color: #637381;">This Year</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 12%</div>
                            </div>
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">78%</div>
                                <div style="font-size: 12px; color: #637381;">Occupancy</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 5%</div>
                            </div>
                            <div style="text-align: center; padding: 16px; background: #f8fafc; border-radius: 8px;">
                                <div style="font-size: 1.5rem; font-weight: 700; color: #1d2144;">$285</div>
                                <div style="font-size: 12px; color: #637381;">Avg/Night</div>
                                <div style="font-size: 12px; color: #13c296;">&#8593; 8%</div>
                            </div>
                        </div>
                        <div class="preview-chart" style="height: 100px;">
                            <div class="chart-bar" style="height: 50%;"></div>
                            <div class="chart-bar" style="height: 70%;"></div>
                            <div class="chart-bar" style="height: 60%;"></div>
                            <div class="chart-bar" style="height: 85%;"></div>
                            <div class="chart-bar" style="height: 95%;"></div>
                            <div class="chart-bar" style="height: 100%;"></div>
                            <div class="chart-bar" style="height: 90%;"></div>
                            <div class="chart-bar" style="height: 75%;"></div>
                            <div class="chart-bar" style="height: 65%;"></div>
                            <div class="chart-bar" style="height: 80%;"></div>
                            <div class="chart-bar" style="height: 88%;"></div>
                            <div class="chart-bar" style="height: 92%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature 6: Owner Portal -->
    <section class="feature-detail">
        <div class="container">
            <div class="feature-detail-content">
                <div class="feature-detail-text">
                    <h3>&#128274; Secure Owner Portal</h3>
                    <p>
                        Build trust with complete transparency. Give property owners their own secure login to view reservations, statements, property performance, and maintenance history anytime they want.
                    </p>
                    <ul class="feature-detail-list">
                        <li>Dedicated login for each property owner</li>
                        <li>View upcoming and past reservations</li>
                        <li>Access monthly and annual statements</li>
                        <li>See property performance metrics</li>
                        <li>Review maintenance history and expenses</li>
                        <li>Download tax documents and reports</li>
                    </ul>
                </div>
                <div class="feature-detail-image">
                    <div style="background: linear-gradient(135deg, #1d2144, #2d3361); border-radius: 12px; padding: 24px; color: white;">
                        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 24px;">
                            <div style="width: 50px; height: 50px; background: white; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #4a6cf7; font-weight: 700;">&#127968;</div>
                            <div>
                                <div style="font-weight: 600;">Owner Dashboard</div>
                                <div style="font-size: 12px; opacity: 0.7;">Welcome back, John</div>
                            </div>
                        </div>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">This Month Revenue</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">$3,240</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">YTD Earnings</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">$28,450</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Upcoming Bookings</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">6</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 16px; border-radius: 8px;">
                                <div style="font-size: 12px; opacity: 0.7; margin-bottom: 4px;">Occupancy Rate</div>
                                <div style="font-size: 1.25rem; font-weight: 700;">82%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- More Features Grid -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <span class="section-label">And More</span>
                <h2 class="section-title">Additional Capabilities</h2>
                <p class="section-description">
                    CohostIQ is packed with features to handle every aspect of your vacation rental business.
                </p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">&#128231;</div>
                    <h3 class="feature-title">Email Notifications</h3>
                    <p class="feature-description">
                        Stay informed with automatic email alerts for new reservations, task assignments, maintenance updates, and more.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128241;</div>
                    <h3 class="feature-title">iPhone App</h3>
                    <p class="feature-description">
                        Manage tickets, owners, and operations on the go with our native iPhone app. Android coming soon.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128196;</div>
                    <h3 class="feature-title">Document Storage</h3>
                    <p class="feature-description">
                        Store leases, contracts, receipts, and property documents securely. Everything you need in one organized place.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128176;</div>
                    <h3 class="feature-title">Expense Tracking</h3>
                    <p class="feature-description">
                        Log expenses with receipts, categorize by type, and automatically include them in owner statements.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128736;</div>
                    <h3 class="feature-title">Purchasing Workflow</h3>
                    <p class="feature-description">
                        Track purchase requests from creation to fulfillment. Know what was ordered, for which property, and who approved it.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128218;</div>
                    <h3 class="feature-title">QuickBooks Sync</h3>
                    <p class="feature-description">
                        Automatically push owner statements, expenses, and payouts to QuickBooks. No more double entry or manual reconciliation.
                    </p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">&#128200;</div>
                    <h3 class="feature-title">Instant Scalability</h3>
                    <p class="feature-description">
                        Adding a new property used to take 1-2 hours of setup. With CohostIQ, it's instant. Scale your portfolio without scaling your workload.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Ready to Transform Your Property Management?</h2>
                <p class="cta-description">
                    Start your free trial today — first 2 months are on us.
                </p>
                <div class="cta-buttons">
                    <a href="https://cohostiq.app/signup/register.php" class="btn btn-white btn-lg">Start Free Trial</a>
                    <a href="https://cohostiq.app/signup/request_demo.php" class="btn btn-outline btn-lg" style="border-color: white; color: white;">Request a Demo</a>
                </div>
            </div>
        </div>
    </section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
