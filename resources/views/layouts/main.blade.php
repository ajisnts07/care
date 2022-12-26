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
        <script>
            function scrollToTop() {
                window.scrollTo({ top: 0, behavior: "smooth" });
            }
        </script>
    </head>
    <body>
        <!-- Yield -->
        @yield('container')

        <!-- Scroll To Top -->
        <div class="position-fixed bottom-0 end-0 translate-middle d-none" onclick="scrollToTop()" id="back-to-up" style="cursor:pointer">
            <iconify-icon icon="material-symbols:arrow-circle-up" width="40"></iconify-icon>
        </div>

        <!-- Bootstrap Javascript -->
        <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
        <!-- Iconify Javascript -->
        <script
            type="text/javascript"
            src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"
        ></script>
    </body>
</html>
