setTimeout(() => {
    const alerts = document.querySelectorAll('.alert');

    alerts.forEach(alert => {
        alert.style.opacity = '0';
        alert.style.transition = '0.5s';

        setTimeout(() => {
            alert.remove();
        }, 500);
    });

}, 5000);