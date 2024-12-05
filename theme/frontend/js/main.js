var GUI = (function () {
    var menu = function () {
        var menuCategoryFixed = document.querySelector(".header-menu-sidebar");
        
        if (menuCategoryFixed) {
            document.querySelectorAll(".toggle-menu-category-fixed, .bg-layout-over").forEach(function (element) {
                element.addEventListener("click", function () {
                    menuCategoryFixed.classList.toggle("active");
                    document.body.classList.toggle("no-scroll");
                    document.querySelector(".bg-layout-over").classList.toggle("active");
                });
            });
        }
    };

    var openSearchModal = () => {
        if (document.querySelector(".modal-search"))
        {
          var btns = document.querySelectorAll(".btn-show-form-search, .btn-close-search")
          btns.forEach((btn) => {
            btn.addEventListener("click", function () {
              document.querySelector(".modal-search").classList.toggle("active")
            })
          })
        }
      }

      var swiperBannerTop = function () {
        if (document.querySelector('.swiper-banner-top'))
        {
          document.querySelectorAll('.swiper-banner-top').forEach(swiper => {
            new Swiper(swiper, {
              slidesPerView: 1,
              loop: true,
              spaceBetween: 24,
              autoplay: {
                delay: 2500,
                disableOnInteraction: false,
              },
              navigation: {
                nextEl: swiper.querySelector('.swiper-button-banner-top-next'),
                prevEl: swiper.querySelector('.swiper-button-banner-top-prev'),
              },
            });
          })
        }
      }
    
      var swiperProductSaleHome = function () {
        if (document.querySelector('.swiper-product-sale-home'))
        {
          new Swiper('.swiper-product-sale-home', {
              slidesPerView: 1,
              initialSlide: 1,
              navigation: {
              nextEl: '.swiper-button-product-sale-next',
              prevEl: '.swiper-button-product-sale-prev',
            },
             breakpoints: {
              1600:{
                slidesPerView:5,
              },
              1280: {
                slidesPerView: 4,
              },
              768: {
                slidesPerView: 3,
              },
              576: {
                slidesPerView: 2,
              },
          },
          });
        }
      }

      var swiperTopicHotHome = function () {
        if (document.querySelector('.swiper-topic-hot-home'))
        {
          new Swiper('.swiper-topic-hot-home', {
              slidesPerView: 1,
              spaceBetween: 20,
              initialSlide: 1,
              navigation: {
              nextEl: '.swiper-button-topic-hot-next',
              prevEl: '.swiper-button-topic-hot-prev',
            },
             breakpoints: {
             
              768: {
                slidesPerView: 2,
              },
          },
          });
        }
      }

      var swiperProductDetail = function () {
        var swiperpdmain;
        if (document.querySelector('.swiper-product-detail'))
        {
          swiperpdmain= new Swiper('.swiper-product-detail', {
              slidesPerView: 1,
              spaceBetween: 20,
              initialSlide: 1,
              watchSlidesProgress: true,
              navigation: {
                nextEl: ".swiper-button-pd-next",
                prevEl: ".swiper-button-pd-prev",
            },
          });
        }
        if (document.querySelector('.swiper-product-detail-bottom'))
          {
          new Swiper(".swiper-product-detail-bottom", {
            slidesPerView: 5,
            spaceBetween: 10,
            slideToClickedSlide: true,
            thumbs: {
              swiper: swiperpdmain,
            },
          });
        }
      }

      var swiperProductCompatible = function () {
        if (document.querySelector('.swiper-compatible-products'))
        {
          new Swiper('.swiper-compatible-products', {
              slidesPerView: 1,
              initialSlide: 1,
              navigation: {
              nextEl: '.swiper-button-compatible-products-next',
              prevEl: '.swiper-button-compatible-products-prev',
            },
             breakpoints: {
              1600:{
                slidesPerView:5,
              },
              1280: {
                slidesPerView: 4,
              },
              768: {
                slidesPerView: 3,
              },
              576: {
                slidesPerView: 2,
              },
          },
          });
        }
      }
      var swiperProductCare = function () {
        if (document.querySelector('.swiper-care-products'))
        {
          new Swiper('.swiper-care-products', {
              slidesPerView: 1,
              initialSlide: 1,
              navigation: {
              nextEl: '.swiper-button-care-products-next',
              prevEl: '.swiper-button-care-products-prev',
            },
             breakpoints: {
              1600:{
                slidesPerView:5,
              },
              1280: {
                slidesPerView: 4,
              },
              768: {
                slidesPerView: 3,
              },
              576: {
                slidesPerView: 2,
              },
          },
          });
        }
      }
    return {
        _: function () {
            menu();
            openSearchModal();
            swiperBannerTop();
            swiperProductSaleHome();
            swiperTopicHotHome();
            swiperProductDetail();
            swiperProductCompatible();
            swiperProductCare();
        },
    };
})();

document.addEventListener("DOMContentLoaded", function () {
    GUI._();
});


const dropdownButton = document.getElementById('dropdown-button-product-detail');
        const dropdownMenu = document.getElementById('dropdown-menu-product-detail');
        const searchInput = document.getElementById('search-input-product-detail');
        let isOpen = false; // Set to true to open the dropdown by default
        
        // Function to toggle the dropdown state
        function toggleDropdown() {
          isOpen = !isOpen;
          dropdownMenu.classList.toggle('hidden', !isOpen);
        }
        
        // Set initial state
        toggleDropdown();
        
        dropdownButton.addEventListener('click', () => {
          toggleDropdown();
        });
        
        // Add event listener to filter items based on input
        searchInput.addEventListener('input', () => {
          const searchTerm = searchInput.value.toLowerCase();
          const items = dropdownMenu.querySelectorAll('a');
        
          items.forEach((item) => {
            const text = item.textContent.toLowerCase();
            if (text.includes(searchTerm)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
    