const accountBtn = document.getElementById('account-btn');
        const loginModal = document.getElementById('login-modal');
        const registerModal = document.getElementById('register-modal');
        const registerLink = document.getElementById('register-link');
        const loginLink = document.getElementById('login-link');
        const closeBtns = document.querySelectorAll('.close-btn');
        
        accountBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
        });
        
        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.style.display = 'none';
            registerModal.style.display = 'flex';
        });
        
        loginLink.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.style.display = 'none';
            loginModal.style.display = 'flex';
        });
        
        closeBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                loginModal.style.display = 'none';
                registerModal.style.display = 'none';
            });
        });
        
        window.addEventListener('click', (e) => {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
            if (e.target === registerModal) {
                registerModal.style.display = 'none';
            }
        });
        
        // Shopping cart functionality (simplified)
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartCount = document.querySelector('.count');
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const currentCount = parseInt(cartCount.textContent);
                cartCount.textContent = currentCount + 1;
            });
        });
        
        // Chat widget
        const chatWidget = document.querySelector('.chat-widget');
        
        chatWidget.addEventListener('click', () => {
            alert('Chat support is available 24/7. How can we help you today?');
        });