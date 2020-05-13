$(document).ready(() => {
    "use strict";

    const base_url = document.getElementById('base_url').value;

    let dropArea = document.getElementById('drop-area');
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false)
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    dropArea.addEventListener('drop', handleDrop, false);

    function handleDrop(e) {
        let dt = e.dataTransfer;
        let files = dt.files;

        handleFiles(files)
    }

    document.getElementById('files').addEventListener('change', function () {
        handleFiles(this.files)
    });

    function handleFiles(files) {
        let f = [...files];
        f.forEach(previewFile);
    }

    function previewFile(file) {
        const uniqId = Date.now();
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function () {
            let itemContent = `<div class="preview-block-item" id="certificate_${uniqId}">
                                   <img src="${reader.result}" alt="Thumbnail">
                                   <button type="button" class="btn preview-block-item-delete" data-current="certificate_${uniqId}">
                                       <img src="${base_url}/img/delete.svg" alt="delete">
                                   </button>
                               </div>`;
            let gallery = document.getElementById('gallery');
            gallery.insertAdjacentHTML('beforeend', itemContent)
        }
    }

    $(".clients-tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });

    $(document).on('click', '.preview-block-item-delete', function () {
        document.getElementById(this.dataset.current).remove();
        if (this.dataset.id) {
            document.getElementById('delete_certificate').value += this.dataset.id + ',';
        }
    });

    $('.add-language-pair').click(function () {
        let langPrototype = $('#langPrototype').val();
        $('#langTable').append(langPrototype);
        $('.selectpicker').selectpicker();

        $(document).on('click', '.delete-row', function () {
            this.closest('tr').remove()
        })

    });

    $(document).on('click', '.delete-row', function () {
        let prnt = this.closest('tr');
        if (prnt.querySelector('.langId')) {
            let langId = prnt.querySelector('.langId').value;
            document.getElementById('deleteLanguages').value += langId + ",";
        }
        prnt.remove()
    });

    let specialization = document.querySelectorAll('.specialization');

    specialization.forEach(item => {
        item.addEventListener('change', function (e) {
            if ($('.specialization:checked').length > 3) {
                this.checked = false
            }
        })
    });

    document.querySelectorAll('.experience_switch').forEach(item => {

        item.addEventListener('change', switchAction)

    });

    function switchAction() {
        if (this.checked === true) {
            this.value = 1
        } else {
            this.value = 0
        }
    }

    translatorProfile.onsubmit = async (e) => {
        e.preventDefault();

        let response = await fetch(`${base_url}/profile`, {
            method: 'POST',
            body: new FormData(e.target)
        });

        let result = await response.json();
        let messageContainer = document.getElementById('messageContainer');
        messageContainer.innerHTML = '';
        emptyContent('.error-list');

        if (!result.success) {
            for (let key in result.message) {
                if (validator[key]) {
                    validator[key](key + '_errors', result.message[key])
                }
            }
            document.querySelector('.error-item').scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
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
            if (item.innerHTML) {
                item.innerHTML = '';
            }
        })
    }

    const validator = {
        specialization: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        specification: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        linkedin: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        experience: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        resume: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        biography: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                errors.forEach(item => {
                    let Li = createErrorElement(item);
                    contentElement.appendChild(Li)
                });
                return true;
            }
        },
        certificate: function (selector, errors) {
            if (errors.length > 0) {
                let contentElement = document.getElementById(selector);
                let Li = createErrorElement(errors[0].replace('.0', ''));
                contentElement.appendChild(Li);
                return true;
            }
        },
    };

    function createErrorElement(txt) {
        let Li = document.createElement('li');
        Li.className = 'error-item';
        Li.innerText = txt;
        return Li;
    }


});
