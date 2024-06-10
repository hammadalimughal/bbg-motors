AOS.init({ once: true })
$(document).ready(function () {
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/') + 1);
  if (filename == "") {
    filename = "index.html"
  }
  $("header .nav-item .nav-link").removeClass("active");
  $(`header .nav-item .nav-link[href="${filename}"]`).addClass("active")
});
$(window).scroll(function (e) {
  var scroll = $(window).scrollTop();
  if (scroll >= 100) {
    $("header").addClass("scroll");
  } else {
    $("header").removeClass("scroll");
  }
});
$('#brands-slider').owlCarousel({
  loop: true,
  margin: 10,
  autoplay: true,
  nav: false,
  dots: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
})
$(document).ready(function () {
  $('#tesimonial-slider').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    nav: true,
    navText: ['<i class="fa-solid fa-arrow-left"></i>', '<i class="fa-solid fa-arrow-right"></i>'],
    items: 1,
    dots: true,
    dotsData: true,
    URLhashListener: true,
  });
});
$(".scroll-to-top").click(function () {
  $("html, body").animate({ scrollTop: 0 }, "slow");
})
$(document).ready(function () {
  let page = 1;
  let maxPages = 5
  $(".page-number").click(function () {
    $(this).siblings().removeClass("active")
    page = $(this).data('page')
    console.log(page)
    $(this).addClass('active')
  })
  $("#nextPage").click(function () {
    if (page < maxPages){
      const curActive = $(this).parents(".pagination").find(".page-number.active")
      $(curActive).removeClass('active')
      $(curActive).next().addClass('active')
      $("#prevPage").removeAttr('disabled')
      page = $(curActive).next().data('page')
    }
    if(page == maxPages){
      $(this).attr('disabled','disabled')
    }else{
      $(this).removeAttr('disabled')
    }
  })
  $("#prevPage").click(function () {
    if (page > 0){
      const curActive = $(this).parents(".pagination").find(".page-number.active")
      $(curActive).removeClass('active')
      $(curActive).prev().addClass('active')
      $("#nextPage").removeAttr('disabled')
      page = $(curActive).prev().data('page')
    }
    if(page == 1){
      $(this).attr('disabled','disabled')
    }else{
      $(this).removeAttr('disabled')
    }
  })
})
$(function () {
  const priceSlider = $("#slider-range").slider({
    range: true,
    min: 0,
    max: 300000,
    values: [0, 300000],
    slide: function (event, ui) {
      // $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      $("#min-amount").val($(priceSlider).slider("values", 0))
      $("#max-amount").val($(priceSlider).slider("values", 1))
    }
  });
  // $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
  //   " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  $("#min-amount").val($(priceSlider).slider("values", 0))
  $("#max-amount").val($(priceSlider).slider("values", 1))
});

// document.addEventListener("DOMContentLoaded", function () {
//   const pages = document.querySelectorAll(".page");
//   const pageNumbers = document.querySelectorAll(".page-number");
//   const prevButton = document.getElementById("prevPage");
//   const nextButton = document.getElementById("nextPage");
//   let currentPage = 0;

//   function showPage(pageNumber) {
//     pages.forEach((page, index) => {
//       if (index === pageNumber) {
//         page.style.display = "block";
//       } else {
//         page.style.display = "none";
//       }
//     });
//   }

//   function updateButtons() {
//     prevButton.disabled = currentPage === 0;
//     nextButton.disabled = currentPage === pages.length - 1;
//   }

//   function setActive() {
//     pageNumbers.forEach((page, index) => {
//       if (currentPage === index) {
//         page.classList.add("active");
//       } else {
//         page.classList.remove("active");
//       }
//     });
//   }

//   pageNumbers.forEach((page, index) => {
//     page.addEventListener("click", function () {
//       showPage(index);
//       currentPage = index;
//       updateButtons();
//       setActive();
//     });
//   });

//   prevButton.addEventListener("click", function () {
//     if (currentPage > 0) {
//       currentPage--;
//       showPage(currentPage);
//       updateButtons();
//       setActive();
//     }
//   });

//   nextButton.addEventListener("click", function () {
//     if (currentPage < pages.length - 1) {
//       currentPage++;
//       showPage(currentPage);
//       updateButtons();
//       setActive();
//     }
//   });

//   showPage(currentPage);
//   updateButtons();
// });
$(document).ready(function () {
  // Event listener for the "Add more pictures" button
  $('#addMorePictures').on('click', function () {
    const container = document.createElement('div')
    $(container).addClass('file-input-wrapper mt-3')
    $(container).append(`<input type="file" class="uploading" id="avatar" name="avatar"
    accept="image/png, image/jpeg" /><button onclick="removeFile(this)" type="button"><i class="fa-solid fa-minus"></i></button>`)
    $("#additionalFilesContainer").append(container)
  });
});
const removeFile = (elem) => {
  $(elem).parents('.file-input-wrapper').remove()
}
$(document).ready(function () {
  var sync1 = $("#sync1");
  var sync2 = $("#sync2");

  sync1.owlCarousel({
      items: 1,
      slideSpeed: 2000,
      nav: true,
      autoplay: false,
      dots: false,
      loop: true,
      responsiveRefreshRate: 200,
      navText: ['<svg width="100%" height="100%" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="100%" height="100%" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
  }).on('changed.owl.carousel', syncPosition);

  sync2
      .on('initialized.owl.carousel', function () {
          sync2.find(".owl-item").eq(0).addClass("current");
      })
      .owlCarousel({
          items: 5,
          dots: false,
          smartSpeed: 200,
          slideSpeed: 500,
          slideBy: 1,
          responsiveRefreshRate: 100
      }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
      var count = el.item.count - 1;
      var current = Math.round(el.item.index - (el.item.count / 2) - .5);

      if (current < 0) {
          current = count;
      }
      if (current > count) {
          current = 0;
      }

      sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
      var onscreen = sync2.find('.owl-item.active').length - 1;
      var start = sync2.find('.owl-item.active').first().index();
      var end = sync2.find('.owl-item.active').last().index();

      if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
      }
      if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
      }
  }

  function syncPosition2(el) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
  }

  sync2.on("click", ".owl-item", function (e) {
      e.preventDefault();
      var number = $(this).index();
      sync1.data('owl.carousel').to(number, 300, true);
  });

  // FancyBox initialization for the first slider
  $(".fancybox").fancybox({
      buttons: [
          'zoom',
          'slideShow',
          'fullScreen',
          'download',
          'thumbs',
          'close'
      ]
  });
});

// about page carousal
$('.about-page-carousel').owlCarousel({
  loop: true,
  margin: 20,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
})

// about page carousal
// faqs//

const items = document.querySelectorAll(".accordion button");

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach(item => item.addEventListener('click', toggleAccordion));