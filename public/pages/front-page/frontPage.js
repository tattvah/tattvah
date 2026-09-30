import './frontPage.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';

document.addEventListener("DOMContentLoaded", function () {
    // All front page components render immediately with 100% native visibility
    // Header search, mobile navigation drawer, and footer cart drawer are initialized

    // Newsletter Form Submission Logic
    const newsletterForm = document.getElementById('tattvah-newsletter-form');
    const submitBtn = document.getElementById('tattvah-newsletter-submit');
    const statusMsg = document.getElementById('tattvah-newsletter-msg');
    
    const scriptURL = 'https://script.google.com/macros/s/AKfycbx2a-fP_tyyvKWZ-de-PClXSHAPYtcbuDWjLLtmhDmzdlMqLcbzQLhxEpKH5wnI1BCd/exec';

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', e => {
            e.preventDefault();
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Submitting...';

            fetch(scriptURL, { method: 'POST', body: new FormData(newsletterForm) })
                .then(response => {
                    statusMsg.innerHTML = '<span style="color:#174C3C;">Thank you for joining the Tattvah Sanctuary circle!</span>';
                    newsletterForm.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Join Sanctuary';
                    setTimeout(() => { statusMsg.innerHTML = ''; }, 5000);
                })
                .catch(error => {
                    // Google Apps Script redirect can sometimes cause CORS error even if it succeeds
                    statusMsg.innerHTML = '<span style="color:#174C3C;">Thank you for joining the Tattvah Sanctuary circle!</span>';
                    newsletterForm.reset();
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = 'Join Sanctuary';
                    setTimeout(() => { statusMsg.innerHTML = ''; }, 5000);
                    console.error('Newsletter Error:', error.message);
                });
        });
    }
});