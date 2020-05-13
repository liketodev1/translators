$(document).ready(()=>{
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

    document.getElementById('files').addEventListener('change',function () {
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
            let itemContent = `<div class="preview-block-item" id="certificate_${ uniqId }">
                                   <img src="${reader.result}" alt="Thumbnail">
                                   <button type="button" class="btn preview-block-item-delete" data-current="certificate_${ uniqId }">
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
        item.addEventListener('change',function (e) {
            if ($('.specialization:checked').length > 3){
               this.checked = false
            }
        })
    });

    document.querySelectorAll('.experience_switch').forEach(item => {

        item.addEventListener('change',switchAction)

    });

    function switchAction() {
        if (this.checked === true){
            this.value = 1
        }else{
            this.value = 0
        }
    }


});
