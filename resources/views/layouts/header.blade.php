<!-- Header Start -->
<header>
    <!-- Navbar Start -->
    <div class="navbar navbar-expand-lg ps-2 bg-white">
        <!-- Container Fluid -->
        <div class="container-fluid">
            <!-- Navbar Brand -->
            <div
                class="navbar-brand d-flex justify-content-center align-items-center"
            >
                <!-- A Href -->
                <a href="#">
                    <img
                        src="{{ asset('img/secondary-logo.png') }}"
                        alt="navbar-brand"
                        width="40"
                        height="40"
                    />
                    <h3 class="d-inline ms-1">Belidaging.</h3>
                    <div class="badge pt-0 rounded-5">
                        <p class="fw-bold">care</p>
                    </div>
                </a>
            </div>
            <!-- Navbar Toggler -->
            <!-- <a href="#" class="btn toggler border-0" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                <iconify-icon
                    inline
                    style="color: #6c757d"
                    icon="heroicons-solid:menu-alt-4"
                    width="40"
                ></iconify-icon>
            </a> -->
            <!-- Offcanvas -->
            <div
                class="offcanvas offcanvas-end"
                tab-index="-1"
                id="sidebar"
                aria-labelledby="sidebar"
            >
                <!-- Offcanvas Header -->
                <div class="offcanvas-header">
                    <!-- Button Close -->
                    <button
                        class="btn text-reset border-0 ms-auto"
                        type="button"
                        data-bs-dismiss="offcanvas"
                        aria-label="close"
                    >
                        <iconify-icon
                            inline
                            style="color: #6c757d"
                            icon="eva:close-outline"
                            width="40"
                        ></iconify-icon>
                    </button>
                </div>
                <!-- Offcanvas Body -->
                <div class="offcanvas-body">
                    <!-- Navbar Nav -->
                    <div class="navbar-nav ms-auto">
                        <!-- Yield -->
                        @yield('nav-item')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
</header>
<!-- Header End -->
