$(document).ready(() => {
    "use strict";

    const base_url = document.getElementById('base_url').value;

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

});
