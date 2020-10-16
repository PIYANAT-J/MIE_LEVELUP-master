<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="icon" type="image/png" href="{{ asset('home/logo/logo_lvp.svg') }}" />
        <title>LEVEL Up &mdash; Website by Multi innovation Engineering</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/level-up.css') }}">
        <link rel="stylesheet" href="{{ asset('home/font/font.css') }}">
        <link rel="stylesheet" href="{{ asset('icon/font_lvp.css') }}">
        <link rel="stylesheet" href="{{ asset('drawer/dist/css/bootstrap-drawer.css') }}">
        <link rel="stylesheet" href="{{ asset('drawer/dist/css/bootstrap-drawer.min.css') }}">
    </head>

    <body>
        <form id="VisaCredit" action="https://paytest.treepay.co.th/total/hubInit.tp" method="post">
            @csrf
            <input type="text" name="order_no" value="{{$data['order_no']}}">
            <input type="text" name="good_name" value="{{$data['good_name']}}">
            <input type="text" name="trade_mony" value="{{$data['trade_mony']}}">
            <input type="text" name="order_first_name" value="{{$data['order_first_name']}}">
            <input type="text" name="order_email" value="{{$data['order_email']}}">
            <input type="text" name="pay_type" value="{{$data['pay_type']}}">
            <input type="text" name="site_cd" value="{{$data['site_cd']}}">
            <input type="text" name="ret_url" value="{{$data['ret_url']}}">
            <input type="text" name="currency" value="{{$data['currency']}}">
            <input type="text" name="user_id" value="{{$data['user_id']}}">
            <input type="text" name="hash_data" value="{{$data['hash_data']}}">
            <input type="button" name="submit" value="Submit" > 
        </form>
    
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('dist/js/popper.min.js') }}"></script>
        <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dist/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('dist/js/aos.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('dist/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('dist/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('dist/js/main.js') }}"></script>
        <script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('drawer/dist/js/bootstrap-drawer.js') }}"></script>
        <script src="{{ asset('drawer/dist/js/bootstrap-drawer.min.js') }}"></script>

        <script>
            $(document).ready(function(){
                // alert('read'); 
                // $('#VisaCredit').submit();
                document.forms["#VisaCredit"].submit();
                // var attrActive = $('#getActive').attr('active');
                // console.log(attrActive);
                // $('#navActive a[href="'+attrActive+'"] button').addClass('active');
            });
        </script>
    </body>
</html>