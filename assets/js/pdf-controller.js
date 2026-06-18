

const tabs = document.querySelectorAll('.pdf-tab');
const frame = document.getElementById('pdfFrame');
const downloadLink = document.getElementById('pdfDownload');

tabs.forEach(tab => {

    tab.addEventListener('click', () => {

        tabs.forEach(btn => btn.classList.remove('active'));

        tab.classList.add('active');

        const pdfUrl = tab.dataset.pdf;

        frame.src = pdfUrl;
        downloadLink.href = pdfUrl;

    });

});

