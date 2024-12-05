<?php include "header.php"; ?>

<section class="banner_top">
    <div class="swiper swiper-banner-top">
        <div class="swiper-wrapper swiper-wrapper-banner-top">
            <div class="swiper-slide swiper-slide-banner-top">
                <a href="chitietsanpham.php" title="">
                    <img src="theme/frontend/images/banner_slide1.png" alt="">
                </a>
            </div>

            <div class="swiper-slide swiper-slide-banner-top">
                <a href="chitietsanpham.php" title="">
                    <img src="theme/frontend/images/banner_slide2.png" alt="">
                </a>
            </div>
            <div class="swiper-slide swiper-slide-banner-top">
                <a href="chitietsanpham.php" title="">
                    <img src="theme/frontend/images/banner_slide3.png" alt="">
                </a>
            </div>
            <div class="swiper-slide swiper-slide-banner-top">
                <a href="chitietsanpham.php" title="">
                    <img src="theme/frontend/images/banner_slide4.png" alt="">
                </a>
            </div>
        </div>

        <div class="swiper-button-banner-top-prev absolute top-1/2 -translate-y-1/2 left-[5px] z-[1]">
            <span class="rounded-full p-[3px] flex justify-center items-center bg-[#869791]  transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-left  text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>

            </span>
        </div>
        <div class="swiper-button-banner-top-next absolute top-1/2 -translate-y-1/2 right-[5px] z-[1]">
            <span class="rounded-full p-[3px] flex justify-center items-center bg-[#869791] transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-right  text-white">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </span>
        </div>
    </div>
</section>

<!-- Producr sale -->
<section class="product-sale-home mb-[1.875rem]">
    <div class="container">
        <div>
            <div class="py-[12px] mb-[5px]">
                <h2 class="text-[1rem] border-solid border-l-[5px] border-l-[#fe5f00] pl-[15px] text-[#555] font-[600]">TOP sản phẩm khuyến mãi HOT</h2>
            </div>
            <div class="flex border-solid border-[1px] border-[#fe5f00]">
                <div class="swiper swiper-product-sale-home w-full">
                    <div class="swiper-wrapper">
                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_1.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_2.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_3.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="py-[5px] flex-grow mb-auto text-[#008000] text-[12px]">Tặng: Giá cực sốc</p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_4.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_5.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_1.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                            <div class="swiper-slide flex">
                                <a href="chitietsanpham.php" title="" class="h-full flex flex-col items items-center p-[15px]">
                                    <div class="c-img pt-[100%] mb-[0.625rem] w-full">
                                        <img src="theme/frontend/images/sp_2.png" alt="">
                                    </div>
                                    <h3 class="py-[5px] text-[#1d537f] font-[600] text-[0.8125rem] mb-auto">Bosch PUC61KAA5E</h3>
                                    <p class="flex py-[5px] text-[#c2c1c2]">
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                        <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>


                                    </p>
                                    <p class="text-cl-main font-[600] mt-4 text-[1.25rem]">9.190.000₫</p>
                                    <p class="flex-grow py-[5px] mb-auto text-[#008000] font-[12px]"></p>
                                    <button class="px-[10px] py-[5px] rounded-[5px] text-center text-[#fff] font-[600] uppercase cursor-pointer  bg-gradient-to-t from-[#ffa103] to-[#fb7d0f] hover:bg-gradient-to-t hover:from-[#ffa103] hover:to-[#edb88a]">Xem ngay</button>
                                </a>
                            </div>

                    </div>

                    <div class="swiper-button-product-sale-prev absolute top-1/2 -translate-y-1/2 left-[5px] z-[1]">
                        <span class="rounded-full p-[3px]  flex justify-center items-center bg-[#869791]  transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-left  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>

                        </span>
                    </div>
                    <div class="swiper-button-product-sale-next absolute top-1/2 -translate-y-1/2 right-[5px] z-[1]">
                        <span class="rounded-full p-[3px] flex justify-center items-center bg-[#869791] transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-right  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- topic hot home -->
<section class="topic-hot-home mb-[1.875rem]">
    <div class="container">
        <div>
            <div class="py-[12px] mb-[5px]">
                <h2 class="text-[1rem] border-solid border-l-[5px] border-l-[#fe5f00] pl-[15px] text-[#555] font-[600]">TOP chủ đề quan tâm</h2>
            </div>
            <div class="swiper swiper-topic-hot-home">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="theme/frontend/images/topichot_3.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="theme/frontend/images/topichot_1.png" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="theme/frontend/images/topichot_2.png" alt="">
                    </div>
                </div>

                <div class="swiper-button-topic-hot-prev absolute top-1/2 -translate-y-1/2 left-[5px] z-[1]">
                        <span class="rounded-full p-[3px]  flex justify-center items-center bg-[#869791]  transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-left  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                            </svg>

                        </span>
                    </div>
                    <div class="swiper-button-topic-hot-next absolute top-1/2 -translate-y-1/2 right-[5px] z-[1]">
                        <span class="rounded-full p-[3px] flex justify-center items-center bg-[#869791] transition-all duration-300 hover:bg-[#cccc] group border-2 border-[#869791] hover:border-[#cccc]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 fa-chevron-right  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                    </div>
            </div>
        </div>
    </div>
</section>

<!-- product -->
 <section class="home-block-product">
   <div class="container">
    <div class="grid xl:grid-cols-2 grid-cols-1 gap-y-[1.875rem]">
        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Bếp từ</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Bosch</a>
                        </li>
                        <li>
                            <a href="#" alt="">Chefs</a>
                        </li>
                        <li>
                            <a href="#" alt="">Teka</a>
                        </li>
                        <li>
                            <a href="#" alt="">Malloca</a>
                        </li>
                        <li>
                            <a href="#" alt="">Bếp đôi</a>
                        </li>
                        <li>
                            <a href="#" alt="">Bếp Đức</a>
                        </li>
                        <li>
                            <a href="#" alt="">Tất cả</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-items flex md:flex-nowrap flex-wrap justify-between gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product1.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product2.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product3.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Hút mùi</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Bosch</a>
                        </li>
                        <li>
                            <a href="#" alt="">Arber</a>
                        </li>
                        <li>
                            <a href="#" alt="">Faster</a>
                        </li>
                        <li>
                            <a href="#" alt="">Cata</a>
                        </li>
                        <li>
                            <a href="#" alt="">Teka</a>
                        </li>
                        <li>
                            <a href="#" alt="">Tất cả</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product_4.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product_5.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product_6.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Lò nướng</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Bosch</a>
                        </li>
                        <li>
                            <a href="#" alt="">Malloca</a>
                        </li>
                        <li>
                            <a href="#" alt="">Teka</a>
                        </li>
                        <li>
                            <a href="#" alt="">Tất cả</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product7.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product8.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product9.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Lò vi sóng</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Bosch</a>
                        </li>
                        <li>
                            <a href="#" alt="">Malloca</a>
                        </li>
                        <li>
                            <a href="#" alt="">Teka</a>
                        </li>
                        <li>
                            <a href="#" alt="">Tất cả</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product10.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product11.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product12.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Máy rửa bát</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Bosch</a>
                        </li>
                        <li>
                            <a href="#" alt="">Malloca</a>
                        </li>
                        <li>
                            <a href="#" alt="">Tất cả</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product13.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product14.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product15.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Máy giặt sấy Bosch</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Xem thêm</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product16.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product17.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product18.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Tủ lạnh Bosch</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            <a href="#" alt="">Xem thêm</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product18.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product19.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product20.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>

        <div>
            <div class="flex flex-col sm:flex-row gap-y-[5px] justify-between px-[0.9375rem] py-[0.75rem] md:py-[1.25rem] box-shadow-product bg-[#fff] mb-[3px]">
                <h2 class="text-[#555] font-[600] text-[1rem]">Chậu rửa</h2>
                <div class="product-category-home-block">
                    <ul>
                        <li>
                            
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="product-items flex justify-between flex-wrap md:flex-nowrap gap-y-[0.9375rem]">
                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product22.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>

                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product23.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product ">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>
                </a>

                <a href="#" title="" class="items  h-full w-full box-shadow-product pt-[1.875rem] md:pt-0">
                    <div class="flex flex-col items-center">
                        <div class="c-img md:pt-[100%]  w-full pt-[50%]">
                            <img src="theme/frontend/images/product24.png" alt="">
                        </div>
                        <div class="product-company-items">
                            <img src="theme/frontend/images/product_com.png" alt="">
                        </div>
                        <h3 class="uppercase text-[0.875rem] text-[#666]">Bosch PPI82560MS</h3>
                        <div class="flex items-center justify-center mt-[5px]">
                            <span class="flex text-yellow-600 star-rate-product">
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                                <?php @include('theme/frontend/template/svgs/iconstar.php'); ?>
                            </span>
                            <span class="text-[#00a7e9] border-l-[2px] border-[#00a7e9] pl-[0.625rem] ml-[0.625rem] text-[14px]"> (106 đánh giá)</span>
                        </div>
                        <p class="py-[0.625rem] text-cl-main text-[1.125rem] font-[600]">10.390.000₫</p>
                    </div>
                    <div class="flex border-t-[1px] border-t-[#ddd]">
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666] border-r-[1px] border-r-[#ddd]">
                            Xem hàng
                        </button>
                        <button class="uppercase cursor-pointer bg-[#fff] hover:bg-[#ededed] w-full py-[0.625rem] text-[0.875rem] text-[#666]">Mua hàng</button>
                    </div>

                </a>
            </div>
        </div>
    </div>
   </div>
 </section>

 <!-- thương hiệu -->
 <section class="label-company">
    <div class="container">
        <div class="md:px-[8%] mb-[1.25rem] flex flex-col justify-center items-center">
            <div class="border-label-company-top"></div>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label2.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label3.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label4.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label5.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label6.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label7.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label8.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label9.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label10.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label11.png" alt="">
                </a>
                <a href="#" title="" class="label-company-items flex items-center justify-center m-[5%] box-shadow-product p-[3px] bg-[#fff] border-[1px] border-solid border-[#eee] h-[80px] ">
                    <img src="theme/frontend/images/label12.png" alt="">
                </a>
            </div>
            <div class="border-label-company-bottom"></div>
        </div>
    </div>
 </section>

 <section class="news-home">
    <div class="container">
        <div class="mt-[5rem] mb-[0.625rem]">
            <div class="grid md:grid-cols-2 xl:grid-cols-4 grid-cols-1 gap-x-[2%] grid-rows-1 news-container-home">
                <div class="flex flex-col news-items-home">
                    <div class="flex items-center justify-between">
                        <p class="flex items-center gap-x-[6px]" >
                            <span class="text-cl-secondary"><?php @include('theme/frontend/template/svgs/iconstar.php') ?></span>
                            <span class="uppercase font-[600] text-[0.875rem] text-[#666]">Tin tức</span>
                        </p>
                        <p class="text-[#1d537f] text-[0.875rem]">Xem thêm...</p>
                    </div>
                    <a href="#" title="" class="items">
                        <div class="c-img w-full h-[12.5rem]">
                            <img src="theme/frontend/images/imgnew.png" alt="">
                        </div>
                    </a>
                    <div class="flex-grow flex flex-col">
                        <h3 class="text-[1.125rem] h-full text-justify text-[#666] mt-[1.25rem] ">Re- Opening Bếp Nam Dương 29 Xã Đàn</h3>
                        <p class="line-clamp-3 h-full text-[13px] text-justify text-[#333]">RE-OPENING Bếp Nam Dương 29 Xã Đàn - ĐẾN LÀ CÓ QUÀ Thiết bị bếp Bosch chỉ từ 3.xxx - Nhận ngay quà tặng khi tới thăm showroom</p>
                        <a href="#" title="" class="text-[#1d537f] inline-block text-[14px] my-[10px]">Tìm hiểu thêm </a>
                    </div>

                </div>

                <div class="flex flex-col news-items-home">
                    <div class="flex items-center justify-between">
                        <p class="flex items-center gap-x-[6px]" >
                            <span class="text-cl-secondary"><?php @include('theme/frontend/template/svgs/iconstar.php') ?></span>
                            <span class="uppercase font-[600] text-[0.875rem] text-[#666]">Tin tức</span>
                        </p>
                        <p class="text-[#1d537f] text-[0.875rem]">Xem thêm...</p>
                    </div>
                    <a href="#" title="" class="items">
                        <div class="c-img w-full h-[12.5rem]">
                            <img src="theme/frontend/images/imgnew.png" alt="">
                        </div>
                    </a>
                    <div class="flex-grow flex flex-col">
                        <h3 class="text-[1.125rem] h-full text-justify text-[#666] mt-[1.25rem] ">Re- Opening Bếp Nam Dương 29 Xã Đàn</h3>
                        <p class="line-clamp-3 h-full text-[13px] text-justify text-[#333]">RE-OPENING Bếp Nam Dương 29 Xã Đàn - ĐẾN LÀ CÓ QUÀ Thiết bị bếp Bosch chỉ từ 3.xxx - Nhận ngay quà tặng khi tới thăm showroom</p>
                        <a href="#" title="" class="text-[#1d537f] inline-block text-[14px] my-[10px]">Tìm hiểu thêm </a>
                    </div>

                </div>

                <div class="flex flex-col news-items-home">
                    <div class="flex items-center justify-between">
                        <p class="flex items-center gap-x-[6px]" >
                            <span class="text-cl-secondary"><?php @include('theme/frontend/template/svgs/iconstar.php') ?></span>
                            <span class="uppercase font-[600] text-[0.875rem] text-[#666]">Tin tức</span>
                        </p>
                        <p class="text-[#1d537f] text-[0.875rem]">Xem thêm...</p>
                    </div>
                    <a href="#" title="" class="items">
                        <div class="c-img w-full h-[12.5rem]">
                            <img src="theme/frontend/images/imgnew.png" alt="">
                        </div>
                    </a>
                    <div class="flex-grow flex flex-col">
                        <h3 class="text-[1.125rem] h-full text-justify text-[#666] mt-[1.25rem] ">Re- Opening Bếp Nam Dương 29 Xã Đàn</h3>
                        <p class="line-clamp-3 h-full text-[13px] text-justify text-[#333]">RE-OPENING Bếp Nam Dương 29 Xã Đàn - ĐẾN LÀ CÓ QUÀ Thiết bị bếp Bosch chỉ từ 3.xxx - Nhận ngay quà tặng khi tới thăm showroom</p>
                        <a href="#" title="" class="text-[#1d537f] inline-block text-[14px] my-[10px]">Tìm hiểu thêm </a>
                    </div>

                </div>

                <div class="flex flex-col news-items-home">
                    <div class="flex items-center justify-between">
                        <p class="flex items-center gap-x-[6px]" >
                            <span class="text-cl-secondary"><?php @include('theme/frontend/template/svgs/iconstar.php') ?></span>
                            <span class="uppercase font-[600] text-[0.875rem] text-[#666]">Tin tức</span>
                        </p>
                        <p class="text-[#1d537f] text-[0.875rem]">Xem thêm...</p>
                    </div>
                    <a href="#" title="" class="items">
                        <div class="c-img w-full h-[12.5rem]">
                            <img src="theme/frontend/images/imgnew.png" alt="">
                        </div>
                    </a>
                    <div class="flex-grow flex flex-col">
                        <h3 class="text-[1.125rem] h-full text-justify text-[#666] mt-[1.25rem] ">Re- Opening Bếp Nam Dương 29 Xã Đàn</h3>
                        <p class="line-clamp-3 h-full text-[13px] text-justify text-[#333]">RE-OPENING Bếp Nam Dương 29 Xã Đàn - ĐẾN LÀ CÓ QUÀ Thiết bị bếp Bosch chỉ từ 3.xxx - Nhận ngay quà tặng khi tới thăm showroom</p>
                        <a href="#" title="" class="text-[#1d537f] inline-block text-[14px] my-[10px]">Tìm hiểu thêm </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>

<!-- Đăng ký tư vấn -->
 <section class="bg-[#800d10] ">
    <div class="container ">
        <div class="flex flex-col items-center justify-center py-[3.125rem]">
           <div class="text-center text-[#fff] mb-[3.75rem]">
            <h5 class="text-[1.375rem] sm:text-[1.875rem]">Đăng ký để nhận thông tin ưu đãi</h5>
            <p class="text-[0.9375rem]">Cập nhật tin tức và các sản phẩm mới nhất, ưu đãi đặc quyền của chúng tôi</p>
           </div>
           <form class="grid lg:flex gap-x-[1.875rem] w-full lg:justify-center gap-y-[1.25rem]">
            <input type="text"   placeholder="Tên" class=" p-[15px] bg-transparent text-[#fff] text-[14px] border-b-[1px] border-b-[#ddd] placeholder-[#fff]">
            <input type="text"   placeholder="Số điện thoại" class="p-[15px] bg-transparent text-[#fff] text-[14px] border-b-[1px] border-b-[#ddd] placeholder-[#fff]">
            <input type="email"  placeholder="Email" class="p-[15px] text-[14px] bg-transparent text-[#fff] border-b-[1px] border-b-[#ddd] placeholder-[#fff]">
            <button class="bg-[#a64747] mt-[1.25rem] lg:mt-0 border-solid border-[2px] block border-orange-400 uppercase py-[0.625rem] px-[2.5rem] text-[#fff] text-[0.875rem]">Đăng ký</button>

           </form>

        </div>
    </div>
 </section>

<?php include "footer.php"; ?>