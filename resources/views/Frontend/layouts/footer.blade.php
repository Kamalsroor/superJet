
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
<script src="{{ asset('assets/js/pages/home-page.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
@if (Session::has('success'))
<script>
        $.notify("{{Session::get('success')}}", "success");

</script>
    
@endif

@yield('script')
</body>

</html>
