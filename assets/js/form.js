setTimeout(() => {
    const alerts = document.querySelectorAll('.alert');

    alerts.forEach(alert => {
        alert.style.opacity = '0';
        alert.style.transition = '0.4s';

        setTimeout(() => {
            alert.remove();
        }, 400);
    });

}, 5000);