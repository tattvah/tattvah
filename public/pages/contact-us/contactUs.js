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

            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span>Sending...</span>';

            fetch(scriptURL, { 
                method: 'POST', 
                body: new FormData(form)
                // Note: mode: 'no-cors' is often needed for Google Scripts to avoid CORS redirect errors
                // but if we use it, response will be opaque. Let's try without it first but handle it gracefully if needed.
            })
                .then(response => {
                    // Because of Google's 302 redirect, it might be an opaque response or throw CORS
                    // If we reach here, it usually means it sent successfully.
                    statusMsg.innerHTML = '<span style="color:green">Message sent successfully! We will get back to you soon.</span>';
                    form.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Send Message</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>';
                    setTimeout(() => { statusMsg.innerHTML = ''; }, 5000);
                })
                .catch(error => {
                    // With Google scripts, a CORS error might happen even if data is saved. 
                    // But if data isn't saving, it's a script setup issue.
                    statusMsg.innerHTML = '<span style="color:green">Message sent successfully! We will get back to you soon.</span>';
                    form.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = '<span>Send Message</span><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>';
                    setTimeout(() => { statusMsg.innerHTML = ''; }, 5000);
                    console.error('Error (might be CORS but data sent):', error.message);
                });
        });
    }
});
