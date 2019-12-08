
<!-- LIBRARY JS-->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/libs/detect-browser/browser.js')}}"></script>
<script src="{{ asset('assets/libs/smooth-scroll/jquery-smoothscroll.js')}}"></script>
<script src="{{ asset('assets/libs/wow-js/wow.min.js')}}"></script>
<script src="{{ asset('assets/libs/slick-slider/slick.min.js')}}"></script>
<script src="{{ asset('assets/libs/selectbox/js/jquery.selectbox-0.2.js')}}"></script>
<script src="{{ asset('assets/libs/please-wait/please-wait.min.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
<!--script(src="assets/libs/parallax/jquery.data-parallax.min.js")-->
<!-- MAIN JS-->
<script src="{{ asset('assets/js/main.js')}}"></script>
<!-- LOADING JS FOR PAGE-->

<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.full.js" integrity="sha256-11NHM7fic+NUo/7Q21YmYgynxVS3PqOnvlU9iFp7NdQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/i18n/ar.js" integrity="sha256-7C04tHVSSMGTsiJpUEiMfhf+Xn4rRDqc3893SHtqTpg=" crossorigin="anonymous"></script>
@if (Session::has('success'))
<script>
        $.notify("{{Session::get('success')}}", "success");

</script>
    
@endif

@yield('script')

<script>
var logo_str = '{{ asset('assets/images/logo/logo-black-color-1.png')}}';
        window.loading_screen = window.pleaseWait(
        {
                logo: logo_str,
                backgroundColor: '#fff',
                loadingHtml: "<div class='spinner sk-spinner-wave'><div class='rect1'></div><div class='rect2'></div><div class='rect3'></div><div class='rect4'></div><div class='rect5'></div></div>",
        });
</script>
</body>

</html>
