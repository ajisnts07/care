<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required Meta Tag -->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi"
        />
        <meta name="title" content="Belidaging. care" />
        <meta
            name="description"
            content="Belidaging care adalah implementasi virtual costumer service dengan robotic process automation dan kecerdasan buatan"
        />
        <meta name="belidaging, care, rpa, robotic, costumer service" />
        <!-- Title Website -->
        <title>Belidaging. care</title>
        <!-- Favicon Website -->
        <link
            rel="icon"
            href="{{ asset('img/primary-logo.png') }}"
            alt="favicon"
        />
        <!-- Bootstrap Stylesheet -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
        <!-- CSS Stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    </head>
    <body>
        <!-- Yield -->
        @yield('container')

        <!-- Bootstrap Javascript -->
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        <!-- Iconify Javascript -->
        <script
            type="text/javascript"
            src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"
        ></script>
    </body>
</html>
