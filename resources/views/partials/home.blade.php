<!-- Home Start -->
<div class="home pt-3 pt-lg-5">
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row gap-2 gap-lg-0">
            <!-- Col-sm-7 -->
            <div class="col-sm-7">
                <!-- Badge-role -->
                <div
                    class="badge-role bg-white p-2 rounded-5 shadow-sm d-inline-block"
                >
                    <div class="badge rounded-5 py-2">
                        <p class="text-white">Pembeli</p>
                    </div>
                </div>
                <!-- Welcome Text -->
                <h1 class="mt-4 mt-lg-5">Selamat siang,</h1>
                <h1>Ada yang bisa kami bantu?</h1>
                <!-- Form -->
                <form action="#" method="post">
                    <!-- Input Group -->
                    <div class="input-group mt-3 shadow-sm rounded-3 p-2">
                        <input
                            type="text"
                            class="form-control border-0"
                            id="search"
                            placeholder="Ketik kata kunci (misal:promosi)"
                            autocomplete="off"
                            required
                        />
                        <button class="btn border-0 rounded-3" type="submit">
                            <iconify-icon
                                class="text-secondary"
                                inline
                                icon="material-symbols:search"
                                width="24"
                            ></iconify-icon>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Col-sm-5 -->
            <div class="col-sm-5 order-first order-lg-2">
                <img
                    class="img-fluid"
                    src="{{ asset('svg/costumer.svg') }}"
                    alt="costumer"
                />
            </div>
        </div>
        <!-- Carousel Alert -->
        <div
            class="carousel alert alert-warning border-warning slide fade show col-sm-10"
            data-bs-ride="true"
            id="carousel-alert"
            role="alert"
        >
            <!-- Carousel Indicators -->
            <div class="carousel-indicators mb-0">
                <button
                    type="button"
                    data-bs-target="#carousel-alert"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carousel-alert"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
            </div>
            <!-- Carousel Inner -->
            <div class="carousel-inner mb-2">
                <!-- Carousel Item -->
                <div class="carousel-item active">
                    <iconify-icon
                        inline
                        icon="mdi:warning-octagon-outline"
                        width="16"
                    ></iconify-icon>
                    <div class="d-inline">
                        Pengiriman SiCepat wilayah jabodetabek berpotensi
                        mengalami keterlambatan karena kendala operasional
                        status pengiriman.
                    </div>
                </div>
                <!-- Carousel Item -->
                <div class="carousel-item">
                    <iconify-icon
                        inline
                        icon="mdi:warning-octagon-outline"
                        width="16"
                    ></iconify-icon>
                    <div class="d-inline">
                        GopayLater Cicil by Findaya hanya bisa digunakan untuk
                        transaksi baru sampai 12 Desember 2022. Ikuti informasi terbaru selanjutnya.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home End -->
