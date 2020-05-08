<script type="text/javascript" src="{{asset('js/fontawesome.js')}}"></script>
<script type="text/javascript" src="{{asset('js/a076d05399.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stack('bottom_js')
