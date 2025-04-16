document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const resultsDiv = document.getElementById('results');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = new FormData(form);
        
        try {
            const response = await fetch('/api/filter-services', {
                method: 'POST',
                body: formData
            });
            
            const data = await response.json();
            displayResults(data);
        } catch (error) {
            console.error('Error:', error);
        }
    });

    function displayResults(services) {
        resultsDiv.innerHTML = services.map(service => `
            <div class="service-card">
                <h3>${service.name}</h3>
                <p>السعر: $${service.price} للفرد</p>
                <button class="btn-book" data-id="${service.id}">احجز الآن</button>
            </div>
        `).join('');
    }
});