'use script';

document.addEventListener('DOMContentLoaded', () => {
    function formatDateTime(date) {
        const options = {
            weekday: 'long', year: 'numeric', month: 'long', day: 'numeric',
            hour: '2-digit', minute: '2-digit', second: '2-digit'
        };
        return date.toLocaleDateString('en-US', options);
    }

    const lastLoginTimeElement = document.getElementById('last-login-time');
    const now = new Date();
    lastLoginTimeElement.textContent = formatDateTime(now);
});

const statusSelect = document.getElementById('status');

    statusSelect.addEventListener('change', function() {

        statusSelect.style.backgroundColor = 'transparent'; 

        const selectedValue = statusSelect.value;

        switch(selectedValue) {
            case 'pending':
                statusSelect.style.backgroundColor = 'red';
                break;
            case 'ongoing':
                statusSelect.style.backgroundColor = 'orange';
                break;
            case 'done':
                statusSelect.style.backgroundColor = 'green';
                break;
            default:
                statusSelect.style.backgroundColor = 'white';
        }
    });
