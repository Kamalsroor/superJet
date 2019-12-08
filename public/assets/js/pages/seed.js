$(function(e){



    $("#seed-form").submit(function(e) {    
        e.preventDefault(); 
        var form = $(this);
        var url = form.attr('action');
        $.ajax({
            type: 'POST',
            url: url,
            data: form.serialize(),
            dataType: 'json',
            success: function(data)
            {
                $('.body-wrapper, .theme-setting').addClass('loaded');
                window.loading_screen.finish();
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                    
                )
                console.log(data);
                var url = document.location.origin+'/seedinfo/'+data.id;
                console.log(url);
                setTimeout(function() {
                    window.location.href = url;
                }, 2000);
            },
            error: function (error) {
                $('.body-wrapper, .theme-setting').addClass('loaded');
                window.loading_screen.finish();
                console.log();
                if (error.responseJSON.error == "unauthenticated") {
                    $('.login-modal').modal('show');
                }
            },
            beforeSend: function(){
                $('.body-wrapper, .theme-setting').removeClass('loaded');
                window.loading_screen = window.pleaseWait(
                {
                        logo: logo_str,
                        backgroundColor: '#fff',
                        loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
                });
            }
        });
    });
});
