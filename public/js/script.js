$(function () {

    // $("#_active").addClass('d-flex');
    $('#lawyer').addClass('d-flex');

    $('.tab-button').click(function () {

        let tab = $(this).attr('data-tab');
        console.log(tab);
        if (tab == 'client') {
            $('#lawyer').removeClass('d-flex');
            $('#lawyer').addClass('d-none');
            $('#client').addClass('d-flex');

            $('#client').addClass('active');
            $('#client').addClass('show');

            $('#lawyer').removeClass('active');
            $('#lawyer').removeClass('show');

            $('#_pasive').addClass('active show');
            $('#_active').removeClass('active show');

        }
        else if (tab == 'lawyer') {
            $('#client').removeClass('d-flex');
            $('#client').addClass('d-none');
            $('#lawyer').addClass('d-flex');

            $('#lawyer').addClass('active');
            $('#lawyer').addClass('show');

            $('#client').removeClass('active');
            $('#client').removeClass('show');

            $('#_active').addClass('active show');
            $('#_pasive').removeClass('active show');


        }
        return false;
    });


});

$(document).ready(function () {
    $(".login").click(function () {
        $("#login_modal").modal("show");
    });

    $('#loginForm').submit(function (e) {
            e.preventDefault();

            let data = {
                _token: e.target.querySelector('input[type="hidden"]').value,
                email: e.target.email.value,
                password: e.target.password.value,
                remember: e.target.remember.checked,

            };

            $.ajax({
                method:'post',
                url:'/login',
                dataType:'json',
                data: data,
                success: function (response) {
                    if (!response){
                        location.reload();
                    }
                },
                error: function (response) {
                    console.log(response.responseJSON.message);
                }
            })
    })
});
