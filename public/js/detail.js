$(document).ready((function(){var e=$("#product-detail-gallery-thumbnails .product-detail-gallery-thumbnail-item"),l=$("#product-detail-gallery"),t=function(l){e.each((function(e,t){$(t).removeClass("active"),l===e&&$(t).addClass("active")}))};$("#product-detail-gallery").lightGallery({selector:".product-detail-gallery-item",getCaptionFromTitleOrAlt:!1}),l.slick({draggable:!1,arrows:!0,prevArrow:'<button class="slick-prev" aria-label="Predchádzajúci"><svg class="icon"><use xlink:href="#sprite-chevron-left"></use></svg></button>',nextArrow:'<button class="slick-next" aria-label="Nasledujúci"><svg class="icon"><use xlink:href="#sprite-chevron-right"></use></svg></button>'}),l.on("beforeChange",(function(e,l,a,i){t(i)})),e.each((function(e,t){$(t).on("click",(function(t){t.preventDefault(),l.slick("slickGoTo",e)}))})),t(l.slick("slickCurrentSlide"))}));