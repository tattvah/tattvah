import './tattvahShows.scss';
import './../../src-utilities/header';
import './../../src-utilities/footer';
import './../../src-utilities/country';


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

function showCopyAlert(element) {
    let copied_text = element.querySelector('.copied_text');
    if (copied_text) {
        setTimeout(() => {
            copied_text.style.opacity = 1;
        }, 0);

        setTimeout(() => {
            copied_text.style.opacity = 0;
        }, 2000);
    }
}

// Add event listener to all elements with the class `copylink`
document.querySelectorAll('.copylink').forEach(copylink => {
    copylink.addEventListener('click', function (e) {
        e.preventDefault();
        // Get the value from the `data-link` attribute of the clicked element
        let urldata = e.currentTarget.getAttribute('data-link');
        if (!navigator.clipboard) {
            fallbackCopyTextToClipboard(urldata);
            showCopyAlert(e.currentTarget);
            return;
        }
        copyTextToClipboard(urldata);
        showCopyAlert(e.currentTarget);
    });
});



let tabs = document.getElementsByClassName('tabs');
for (let index = 0; index < tabs.length; index++) {
    const tabs_element = tabs[index];
    tabs_element.addEventListener('click', function (e) {
        const target = e.currentTarget;
        const select_active = document.querySelector('.tabs.active');
        select_active.classList.remove('active');
        target.classList.add('active');

        let cards_ative = document.querySelector('.cards.active');
        cards_ative.classList.remove('active');
        let add_active = document.querySelector(
            ".cards[data-attr='" + target.getAttribute('data-attr') + "']",
        );
        add_active.classList.add('active');
    });
}

let mobile_tabs_active = document.querySelectorAll('.mobile_tabs.active')[0];
mobile_tabs_active.addEventListener('click', function (e) {
    let target = e.currentTarget;
    if (target.parentNode.classList.contains('active')) {
        target.parentNode.classList.remove('active');
    } else {
        target.parentNode.classList.add('active');
    }
});

let mobile_tabs = document.getElementsByClassName('mobile_tabs');
for (let index = 0; index < mobile_tabs.length; index++) {
    const mobile_tabs_element = mobile_tabs[index];
    mobile_tabs_element.addEventListener('click', function (e) {
        if (e.currentTarget.classList.contains('active') == false) {
            let get_data = e.currentTarget.getAttribute('data-attr');
            let old_text = mobile_tabs_active.children[0].innerText;
            mobile_tabs_active.children[0].innerText =
                e.currentTarget.innerText;
            e.currentTarget.innerText = old_text;
            e.currentTarget.setAttribute('data-attr', old_text);

            //find div and show data of id
            let cards_ative = document.querySelector('.cards.active');
            cards_ative.classList.remove('active');
            let add_active = document.querySelector(
                ".cards[data-attr='" + get_data + "']",
            );

            add_active.classList.add('active');
            document
                .querySelector('.mobilenav-tabs.active')
                .classList.remove('active');
        }
    });
}