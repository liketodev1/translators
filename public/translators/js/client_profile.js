$(document).ready(() => {
    "use strict";

    const base_url = document.getElementById('base_url').value;
/*
    let specialization = document.querySelectorAll('.specialization');

    specialization.forEach(item => {
        item.addEventListener('change', function (e) {
            if ($('.specialization:checked').length > 3) {
                this.checked = false
            }
        })
    });*/

    function switchAction() {
        if (this.checked === true) {
            this.value = 1
        } else {
            this.value = 0
        }
    }

   clientProfile.onsubmit = async (e) => {
        e.preventDefault();

        let response = await fetch(`${base_url}/profile`, {
            method: 'POST',
            body: new FormData(e.target)
        });

        let result = await response.json();
        let messageContainer = document.getElementById('messageContainer');
        messageContainer.innerHTML = '';
        emptyContent('.error-item');

        if (!result.success) {
            for (let key in result.message) {
                if (result.message[key].length > 0) {
                    $(`#${key}_errors`).append(`<li class="error-item">${result.message[key]}</li>`)
                }
            }
            document.querySelector('.error-item').scrollIntoView({
                behavior: "smooth",
                block: "center",
                inline: "nearest"
            });
        } else {
            messageContainer.innerHTML = `
                <div class="alert alert-success alert-dismissible mb-0 mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                     ${result.message}
                </div>`;
            window.scroll({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    };

    function emptyContent(selector) {
        document.querySelectorAll(selector).forEach(item => {
            if (item) {
                item.remove();
            }
        })
    }


});
