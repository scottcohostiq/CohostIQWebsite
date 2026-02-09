/**
 * CohostIQ Marketing Website JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {

    // ============================================
    // Header Scroll Effect
    // ============================================
    const header = document.getElementById('header');

    function handleScroll() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Check initial state

    // ============================================
    // Mobile Menu Toggle (Accessible)
    // ============================================
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileNav = document.getElementById('mobileNav');

    if (mobileMenuBtn && mobileNav) {
        function closeMobileMenu() {
            mobileNav.classList.remove('active');
            mobileMenuBtn.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
        }

        function openMobileMenu() {
            mobileNav.classList.add('active');
            mobileMenuBtn.classList.add('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
        }

        mobileMenuBtn.addEventListener('click', function() {
            var isOpen = mobileNav.classList.contains('active');
            if (isOpen) {
                closeMobileMenu();
            } else {
                openMobileMenu();
            }
        });

        // Close mobile menu when clicking a link
        var mobileLinks = mobileNav.querySelectorAll('a');
        mobileLinks.forEach(function(link) {
            link.addEventListener('click', closeMobileMenu);
        });

        // Close on Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('active')) {
                closeMobileMenu();
                mobileMenuBtn.focus();
            }
        });
    }

    // ============================================
    // FAQ Accordion (Accessible)
    // ============================================
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(function(question) {
        // Make FAQ questions keyboard accessible
        question.setAttribute('role', 'button');
        question.setAttribute('tabindex', '0');

        var faqItem = question.parentElement;
        var answer = faqItem.querySelector('.faq-answer');
        var toggle = question.querySelector('.faq-toggle');
        var isActive = faqItem.classList.contains('active');

        // Set initial ARIA state
        question.setAttribute('aria-expanded', isActive ? 'true' : 'false');
        if (answer) {
            answer.setAttribute('role', 'region');
            answer.id = answer.id || 'faq-answer-' + Math.random().toString(36).substr(2, 9);
            question.setAttribute('aria-controls', answer.id);
        }

        function toggleFaq() {
            var currentlyActive = faqItem.classList.contains('active');
            if (currentlyActive) {
                faqItem.classList.remove('active');
                question.setAttribute('aria-expanded', 'false');
            } else {
                faqItem.classList.add('active');
                question.setAttribute('aria-expanded', 'true');
            }
        }

        question.addEventListener('click', toggleFaq);
        question.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                toggleFaq();
            }
        });
    });

    // ============================================
    // FAQ Category Filter
    // ============================================
    const categoryBtns = document.querySelectorAll('.faq-category-btn');
    const faqItems = document.querySelectorAll('.faq-item');

    categoryBtns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            var category = this.dataset.category;

            // Update active button and aria-pressed
            categoryBtns.forEach(function(b) {
                b.classList.remove('active');
                b.setAttribute('aria-pressed', 'false');
            });
            this.classList.add('active');
            this.setAttribute('aria-pressed', 'true');

            // Filter FAQ items
            faqItems.forEach(function(item) {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // ============================================
    // Smooth Scroll for Anchor Links
    // ============================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');

            // Skip if it's just "#"
            if (href === '#') return;

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const headerHeight = header.offsetHeight;
                const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ============================================
    // Form Validation & Submission
    // ============================================
    const signupForm = document.getElementById('signupForm');

    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(signupForm);
            const data = Object.fromEntries(formData.entries());

            // Basic validation
            const requiredFields = ['firstName', 'lastName', 'email', 'company', 'properties', 'role'];
            let isValid = true;

            requiredFields.forEach(field => {
                const input = signupForm.querySelector(`[name="${field}"]`);
                if (!data[field] || data[field].trim() === '') {
                    isValid = false;
                    input.style.borderColor = '#ff6b6b';
                } else {
                    input.style.borderColor = '#e2e8f0';
                }
            });

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const emailInput = signupForm.querySelector('[name="email"]');
            if (!emailRegex.test(data.email)) {
                isValid = false;
                emailInput.style.borderColor = '#ff6b6b';
            }

            if (!isValid) {
                alert('Please fill in all required fields correctly.');
                return;
            }

            // Simulate form submission
            const submitBtn = signupForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;

            // In production, this would submit to your backend
            setTimeout(() => {
                // Show success message
                signupForm.innerHTML = `
                    <div style="text-align: center; padding: 40px 20px;">
                        <div style="font-size: 4rem; margin-bottom: 20px;">&#127881;</div>
                        <h3 style="margin-bottom: 12px; color: #1d2144;">Welcome to CohostIQ!</h3>
                        <p style="color: #637381; margin-bottom: 24px;">
                            We've sent a confirmation email to <strong>${data.email}</strong>.
                            Check your inbox to complete your registration and start your free trial.
                        </p>
                        <a href="index.html" class="btn btn-primary">Back to Home</a>
                    </div>
                `;
            }, 1500);
        });

        // Remove error styling on input
        signupForm.querySelectorAll('input, select').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.borderColor = '#4a6cf7';
            });
            input.addEventListener('blur', function() {
                if (this.value) {
                    this.style.borderColor = '#e2e8f0';
                }
            });
        });
    }

    // ============================================
    // Animate Elements on Scroll
    // ============================================
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Animate feature cards, audience cards, etc.
    const animatedElements = document.querySelectorAll('.feature-card, .audience-card, .testimonial-card, .benefit-item');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(el);
    });

    // ============================================
    // Stat Counter Animation
    // ============================================
    const statValues = document.querySelectorAll('.stat-value');

    const statObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const text = target.textContent;

                // Extract number and suffix
                const match = text.match(/^([\d.]+)(.*)$/);
                if (match) {
                    const endValue = parseFloat(match[1]);
                    const suffix = match[2];
                    let startValue = 0;
                    const duration = 2000;
                    const increment = endValue / (duration / 16);

                    const counter = setInterval(() => {
                        startValue += increment;
                        if (startValue >= endValue) {
                            target.textContent = text;
                            clearInterval(counter);
                        } else {
                            if (endValue >= 100) {
                                target.textContent = Math.floor(startValue) + suffix;
                            } else {
                                target.textContent = startValue.toFixed(1) + suffix;
                            }
                        }
                    }, 16);
                }

                statObserver.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    statValues.forEach(stat => {
        statObserver.observe(stat);
    });

    // ============================================
    // Chart Bar Animation
    // ============================================
    const chartBars = document.querySelectorAll('.chart-bar');

    const chartObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const bars = entry.target.querySelectorAll('.chart-bar');
                bars.forEach((bar, index) => {
                    const height = bar.style.height;
                    bar.style.height = '0';
                    setTimeout(() => {
                        bar.style.height = height;
                    }, index * 100);
                });
                chartObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const chartContainers = document.querySelectorAll('.preview-chart');
    chartContainers.forEach(container => {
        chartObserver.observe(container);
    });

    // ============================================
    // Cookie Consent Banner
    // ============================================
    var cookieBanner = document.getElementById('cookieConsent');
    var cookieAcceptBtn = document.getElementById('cookieAccept');
    var cookieDeclineBtn = document.getElementById('cookieDecline');

    if (cookieBanner && !localStorage.getItem('cookieConsent')) {
        // Show banner after a short delay
        setTimeout(function() {
            cookieBanner.classList.add('visible');
            cookieBanner.setAttribute('aria-hidden', 'false');
        }, 500);
    }

    function dismissCookieBanner(choice) {
        localStorage.setItem('cookieConsent', choice);
        cookieBanner.classList.remove('visible');
        cookieBanner.setAttribute('aria-hidden', 'true');
    }

    if (cookieAcceptBtn) {
        cookieAcceptBtn.addEventListener('click', function() {
            dismissCookieBanner('accepted');
        });
    }

    if (cookieDeclineBtn) {
        cookieDeclineBtn.addEventListener('click', function() {
            dismissCookieBanner('declined');
        });
    }

    // ============================================
    // Waitlist Form Submission
    // ============================================
    const waitlistForm = document.getElementById('waitlistForm');
    const waitlistSuccess = document.getElementById('waitlistSuccess');

    if (waitlistForm) {
        waitlistForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(waitlistForm);
            const submitBtn = waitlistForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Submitting...';
            submitBtn.disabled = true;

            fetch(waitlistForm.action, {
                method: 'POST',
                body: formData
            })
            .then(function(response) {
                if (response.ok) {
                    waitlistForm.style.display = 'none';
                    waitlistSuccess.style.display = 'block';
                } else {
                    throw new Error('Server error');
                }
            })
            .catch(function() {
                // If the API isn't set up yet, still show success
                // Remove this fallback once the backend is live
                waitlistForm.style.display = 'none';
                waitlistSuccess.style.display = 'block';
            });
        });
    }

});

// ============================================
// Utility Functions
// ============================================

/**
 * Debounce function for performance optimization
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

/**
 * Format phone number as user types
 */
function formatPhoneNumber(input) {
    let value = input.value.replace(/\D/g, '');
    if (value.length > 0) {
        if (value.length <= 3) {
            value = `(${value}`;
        } else if (value.length <= 6) {
            value = `(${value.slice(0, 3)}) ${value.slice(3)}`;
        } else {
            value = `(${value.slice(0, 3)}) ${value.slice(3, 6)}-${value.slice(6, 10)}`;
        }
    }
    input.value = value;
}

// Apply phone formatting if phone input exists
document.addEventListener('DOMContentLoaded', function() {
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function() {
            formatPhoneNumber(this);
        });
    }
});
