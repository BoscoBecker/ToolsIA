document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.section');
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, options);

    sections.forEach(section => {
        section.classList.add('hidden');
        observer.observe(section);
    });

    // Move the event listener here
    const searchInput = document.getElementById('searchTools');
    if (searchInput) {
        searchInput.addEventListener('input', searchTools);
    }

    // Add scroll effect for hero card
    const heroCard = document.querySelector('.hero-card');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 10) {
            heroCard.classList.add('scrolled');
        } else {
            heroCard.classList.remove('scrolled');
        }
    });

    // Track current section for the search label
    const searchLabel = document.querySelector('.search-label');
    const defaultSearchText = "";
    
    function updateSearchLabel() {
        // Only show section label when scrolled
        if (window.scrollY <= 10) {
            searchLabel.textContent = defaultSearchText;
            return;
        }
        
        // Find which section is currently in view
        let currentSection = '';
        let maxVisibility = 0;
        
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            
            // Calculate how much of the section is visible
            const visibleHeight = Math.min(rect.bottom, windowHeight) - Math.max(rect.top, 0);
            const visibilityRatio = visibleHeight / section.offsetHeight;
            
            if (visibilityRatio > maxVisibility && visibilityRatio > 0.3) {
                maxVisibility = visibilityRatio;
                currentSection = section.querySelector('h2').textContent;
            }
        });
        
        // Update the search label
        if (currentSection) {
            searchLabel.textContent = `Seção: ${currentSection}`;
        } else {
            searchLabel.textContent = defaultSearchText;
        }
    }
    
    // Update on scroll
    window.addEventListener('scroll', updateSearchLabel);
    
    // Initial update
    updateSearchLabel();
});

function searchTools() {
    const searchInput = document.getElementById('searchTools');
    const searchTerm = searchInput.value.toLowerCase().trim();
    const cards = document.querySelectorAll('.card');
    const sections = document.querySelectorAll('.section');

    if (searchTerm === '') {
        cards.forEach(card => card.style.display = '');
        sections.forEach(section => section.style.display = '');
        return;
    }

    cards.forEach(card => {
        try {
            const titleEl = card.querySelector('h3');
            const descEl = card.querySelector('p');
            const linkEl = card.querySelector('a');

            const title = titleEl ? titleEl.textContent.toLowerCase() : '';
            const description = descEl ? descEl.textContent.toLowerCase() : '';
            const link = linkEl ? linkEl.textContent.toLowerCase() : '';
            const url = linkEl ? linkEl.href.toLowerCase() : '';
            
            // Search for partial matches in words
            const searchWords = searchTerm.split(/\s+/);
            const matches = searchWords.every(word => 
                title.includes(word) || 
                description.includes(word) || 
                link.includes(word) || 
                url.includes(word)
            );

            card.style.display = matches ? 'block' : 'none';
        } catch (error) {
            console.warn('Error processing card:', error);
            card.style.display = 'none';
        }
    });

    // Show/hide sections based on visible cards
    sections.forEach(section => {
        const visibleCards = Array.from(section.querySelectorAll('.card')).some(card => 
            card.style.display !== 'none'
        );
        section.style.display = visibleCards ? 'block' : 'none';
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const backToTopButton = document.querySelector('.back-to-top');
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    });
    
    // Scroll to top when clicked
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const langToggle = document.getElementById('langToggle');
    
    if (langToggle) {
        const langText = langToggle.querySelector('.lang-text');
        
        // Set initial button text based on current language
        const currentLang = document.documentElement.getAttribute('lang') || 'pt';
        langText.textContent = currentLang === 'pt' ? 'EN' : 'PT';
        
        langToggle.addEventListener('click', function() {
            const currentLang = document.documentElement.getAttribute('lang') || 'pt';
            const newLang = currentLang === 'pt' ? 'en' : 'pt';
            
            // Create or update the lang parameter in the URL
            const url = new URL(window.location);
            url.searchParams.set('lang', newLang);
            
            // Navigate to the new URL
            window.location.href = url.toString();
        });
    }
});

function addCopyButtons() {
    const cards = document.querySelectorAll('.card');
    
    cards.forEach(card => {
        const link = card.querySelector('a.card-button').href;
        const copyBtn = document.createElement('button');
        copyBtn.className = 'copy-link-btn';
        copyBtn.innerHTML = `
            <svg viewBox="0 0 24 24">
                <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/>
            </svg>
            Copy Link
        `;
        
        copyBtn.addEventListener('click', (e) => {
            e.preventDefault();
            navigator.clipboard.writeText(link);
            copyBtn.textContent = 'Copied!';
            setTimeout(() => {
                copyBtn.innerHTML = `
                    <svg viewBox="0 0 24 24">
                        <path d="M16 1H4c-1.1 0-2 .9-2 2v14h2V3h12V1zm3 4H8c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h11c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 16H8V7h11v14z"/>
                    </svg>
                    Copy Link
                `;
            }, 2000);
        });
        
        card.appendChild(copyBtn);
    });
}

// Call the function when the document is loaded
document.addEventListener('DOMContentLoaded', addCopyButtons);