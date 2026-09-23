import './tattvahShow.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';
import './../../src-utilities/country';

//copy link to clipboard
function fallbackCopyTextToClipboard(text) {
    var textArea = document.createElement('textarea');
    textArea.value = text;

    document.body.appendChild(textArea);
    textArea.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
    } catch (err) {
        console.error('Oops, unable to copy', err);
    }

    document.body.removeChild(textArea);
}

async function copyTextToClipboard(text) {
    try {
        await navigator.clipboard.writeText(text);
    } catch (err) {
        console.error('Failed to copy text:', err);
    }
}

function showCopyAlert() {
    let copied_text = document.querySelector('.copied_text');
    setTimeout(() => {
        copied_text.style.opacity = 1;
    }, 0);

    setTimeout(() => {
        copied_text.style.opacity = 0;
    }, 2000);
}

let copylink = document.getElementById('copylink');
copylink.addEventListener('click', function (e) {
    let urldata = window.location.href;
    if (!navigator.clipboard) {
        fallbackCopyTextToClipboard(urldata);
        showCopyAlert();
        return;
    }
    copyTextToClipboard(urldata);
    showCopyAlert();
});
