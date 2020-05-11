<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--start bootstrap-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">

    <!--end bootstrap-->

    <!-- select 2 -->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet"/>
    <!-- select 2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/translatorProfile.css') }}">
    <title>Translate.io</title>
</head>

<body>

@include('translators.partials.header')

@yield('content')


<!--start myProfile-->
<section id="myProfile">

</section>
<!--end myProfile-->


<!--start footer-->

<footer>

</footer>

<!--end footer-->


<!--start scripts-->
<script src="{{ asset('js/jquery-3.4.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>

<!-- select 2 -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- select 2 -->
<script>
    let dropArea = document.getElementById('drop-area');
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false)
    })

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    dropArea.addEventListener('drop', handleDrop, false)

    function handleDrop(e) {
        let dt = e.dataTransfer
        let files = dt.files

        handleFiles(files)
    }

    function handleFiles(files) {
        let f = [...files];
        f.forEach(previewFile);
    }

    function previewFile(file) {
        let reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onloadend = function () {
            let itemContent = `<div class="preview-block-item" id="certificate_{{ time() }}">
                                   <img src="${reader.result}" alt="Thumbnail">
                                   <button type="button" class="btn preview-block-item-delete" data-current="certificate_{{ time() }}">
                                       <img src="{{ asset('img/delete.svg') }}" alt="delete">
                                   </button>
                               </div>`;
            let gallery = document.getElementById('gallery');
            gallery.insertAdjacentHTML('beforeend', itemContent)
        }
    }


    $(".clients-tags").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    })

    $(document).on('click', 'button.preview-block-item-delete', function () {
        document.getElementById(this.dataset.current).remove();
        if (this.dataset.id) {
            document.getElementById('delete_certificate').value += this.dataset.id + ',';
        }
    })

    $('.add-language-pair').click(function () {
        let langPrototype = $('#langPrototype').val();
        $('#langTable').append(langPrototype);
        $('.selectpicker').selectpicker();

        $(document).on('click','.delete-row',function () {
            this.closest('tr').remove()
        })

    });

    $(document).on('click','.delete-row',function () {
        let prnt = this.closest('tr');
        if  (prnt.querySelector('.langId')){
            let langId = prnt.querySelector('.langId').value;
            document.getElementById('deleteLanguages').value += langId+",";
        }
        prnt.remove()
    })
</script>
<!--end scripts-->

</body>

</html>
