class ThemeManager {
    constructor() {
        this.theme = 'light';
        this.storageKey = 'theme-preference';
        this.init();
    }

    init() {
        const savedTheme = localStorage.getItem(this.storageKey);
        const systemPreference = this.getSystemTheme();
        
        this.theme = savedTheme || systemPreference;
        this.applyTheme();
        this.setupToggle();
        this.watchSystemPreference();
    }

    getSystemTheme() {
        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }

    applyTheme() {
        const html = document.documentElement;
        const body = document.body;
        
        html.setAttribute('data-theme', this.theme);
        body.setAttribute('data-theme', this.theme);
        
        const toggle = document.getElementById('darkModeToggle');
        if (toggle) {
            const icon = toggle.querySelector('i');
            if (icon) {
                icon.classList.remove('fa-moon', 'fa-sun');
                icon.classList.add(this.theme === 'dark' ? 'fa-sun' : 'fa-moon');
            }
        }
    }

    setupToggle() {
        const toggle = document.getElementById('darkModeToggle');
        if (toggle) {
            toggle.addEventListener('click', (e) => {
                e.preventDefault();
                this.toggleTheme();
            });
        }
    }

    toggleTheme() {
        this.theme = this.theme === 'light' ? 'dark' : 'light';
        localStorage.setItem(this.storageKey, this.theme);
        this.applyTheme();
        this.addToggleAnimation();
    }

    watchSystemPreference() {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            const newTheme = e.matches ? 'dark' : 'light';
            if (!localStorage.getItem(this.storageKey)) {
                this.theme = newTheme;
                this.applyTheme();
            }
        });
    }

    addToggleAnimation() {
        const toggle = document.getElementById('darkModeToggle');
        if (toggle) {
            toggle.classList.add('theme-toggle-active');
            setTimeout(() => toggle.classList.remove('theme-toggle-active'), 600);
        }
    }
}

class FormHandler {
    constructor() {
        this.forms = document.querySelectorAll('form');
        this.init();
    }

    init() {
        this.forms.forEach(form => {
            this.setupFormValidation(form);
            this.setupInputAnimations(form);
        });
    }

    setupFormValidation(form) {
        form.addEventListener('submit', (e) => {
            const inputs = form.querySelectorAll('input[required]');
            let isValid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    this.showValidationError(input);
                    isValid = false;
                } else {
                    this.clearValidationError(input);
                }
            });

            if (!isValid) {
                e.preventDefault();
            }
        });
    }

    setupInputAnimations(form) {
        const inputs = form.querySelectorAll('input');
        
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                this.addInputFocusClass(input);
            });

            input.addEventListener('blur', () => {
                this.removeInputFocusClass(input);
            });

            input.addEventListener('input', () => {
                if (input.hasAttribute('required') && input.value.trim()) {
                    this.clearValidationError(input);
                }
            });
        });
    }

    addInputFocusClass(input) {
        input.closest('.form-group')?.classList.add('form-group-focused');
    }

    removeInputFocusClass(input) {
        if (!input.value) {
            input.closest('.form-group')?.classList.remove('form-group-focused');
        }
    }

    showValidationError(input) {
        const group = input.closest('.form-group');
        if (group) {
            group.classList.add('has-error');
            input.classList.add('is-invalid');
        }
    }

    clearValidationError(input) {
        const group = input.closest('.form-group');
        if (group) {
            group.classList.remove('has-error');
            input.classList.remove('is-invalid');
        }
    }
}

class PageTransitions {
    constructor() {
        this.init();
    }

    init() {
        this.setupPageLoad();
        this.setupLinkTransitions();
        this.setupScrollAnimations();
    }

    setupPageLoad() {
        document.addEventListener('DOMContentLoaded', () => {
            this.animatePageIn();
        });
    }

    animatePageIn() {
        const cards = document.querySelectorAll('.card');
        const alerts = document.querySelectorAll('.alert');
        
        cards.forEach((card, index) => {
            card.style.animationDelay = `${index * 0.1}s`;
        });

        alerts.forEach((alert, index) => {
            alert.style.animationDelay = `${index * 0.1}s`;
        });
    }

    setupLinkTransitions() {
        const links = document.querySelectorAll('a:not([target="_blank"])');
        links.forEach(link => {
            link.addEventListener('mouseenter', (e) => {
                if (!link.classList.contains('nav-link')) {
                    this.addLinkHoverEffect(e.target);
                }
            });
        });
    }

    addLinkHoverEffect(link) {
        link.style.transition = 'all 0.3s ease';
    }

    setupScrollAnimations() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.card, .alert').forEach(el => {
            observer.observe(el);
        });
    }
}

class RippleEffect {
    constructor() {
        this.init();
    }

    init() {
        const buttons = document.querySelectorAll('.btn');
        buttons.forEach(button => {
            button.addEventListener('click', (e) => this.createRipple(e));
        });
    }

    createRipple(e) {
        const button = e.currentTarget;
        const ripple = document.createElement('span');
        
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.classList.add('ripple');

        button.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    }
}

class SmoothScroll {
    constructor() {
        this.init();
    }

    init() {
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                const target = document.querySelector(link.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }
}

class Toast {
    static show(message, type = 'info', duration = 3000) {
        const toast = document.createElement('div');
        toast.className = `toast toast-${type}`;
        toast.textContent = message;
        toast.style.cssText = `
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            background: ${this.getBackground(type)};
            color: white;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
            animation: slideInUp 0.3s ease;
            z-index: 9999;
            max-width: 300px;
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideInUp 0.3s ease reverse';
            setTimeout(() => toast.remove(), 300);
        }, duration);
    }

    static getBackground(type) {
        const colors = {
            success: '#10b981',
            error: '#ef4444',
            warning: '#f59e0b',
            info: '#6366f1'
        };
        return colors[type] || colors.info;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new ThemeManager();
    new FormHandler();
    new PageTransitions();
    new RippleEffect();
    new SmoothScroll();

    console.log('%c🎨 2025 Modern Design System Loaded', 'color: #6366f1; font-size: 16px; font-weight: bold;');
    console.log('%cTheme System: Active', 'color: #10b981; font-size: 12px;');
    console.log('%cForm Validation: Active', 'color: #10b981; font-size: 12px;');
    console.log('%cMicro-interactions: Active', 'color: #10b981; font-size: 12px;');
});

window.onerror = function(msg, url, line, col, error) {
    console.error('Error:', msg);
    return false;
};
