import './contactUs.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';
import './../../src-utilities/country';

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('needform');
    const statusMsg = document.getElementById('contact-status-msg');
    const submitBtn = document.getElementById('contact-submit-btn');

    // PASTE YOUR GOOGLE APPS SCRIPT URL HERE
    const scriptURL = 'https://script.google.com/macros/s/AKfycbx2a-fP_tyyvKWZ-de-PClXSHAPYtcbuDWjLLtmhDmzdlMqLcbzQLhxEpKH5wnI1BCd/exec';

    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();
            
            if(scriptURL === 'https://script.google.com/macros/s/AKfycbx2a-fP_tyyvKWZ-de-PClXSHAPYtcbuDWjLLtmhDmzdlMqLcbzQLhxEpKH5wnI1BCd/exec') {
                statusMsg.innerHTML = '<span style="color:red">Please configure Google Script URL in contactUs.js</span>';
                return;
            }

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span>';

            fetch(scriptURL, { method: 'POST', body: new FormData(form) })
                .then(response => {
                    statusMsg.innerHTML = '<span style="color:green">Message sent successfully! We will get back to you soon.</span>';
                    form.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Send Message</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>';
                    setTimeout(() => { statusMsg.innerHTML = ''; }, 5000);
                })
                .catch(error => {
                    statusMsg.innerHTML = '<span style="color:red">Error! Failed to send message.</span>';
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Send Message</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>';
                    console.error('Error!', error.message);
                });
        });
    }
});
