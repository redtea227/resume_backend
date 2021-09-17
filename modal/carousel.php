<style>
  .wrap {
    position: relative;
    z-index: 100;
    width: 100%;
    height: 100%;
    padding: 0 60px;
    background: url(https://images.unsplash.com/photo-1485069203392-8e1aeb1ebf02?auto=format&fit=crop&w=1054&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D) center no-repeat;
    -webkit-background-size: cover;
    background-size: cover;
    overflow: hidden;
  }

  .wrap:after {
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, .5);
  }

  .slider {
    position: relative;
    z-index: 200;
    padding: 0 0px;
    margin: 3rem auto;
    max-width: 800px;
    width: 100%;
  }

  .slick-arrow {
    position: absolute;
    top: 50%;
    width: 40px;
    height: 50px;
    line-height: 50px;
    margin-top: -25px;
    border: none;
    background: transparent;
    color: #fff;
    font-family: monospace;
    font-size: 5rem;
    z-index: 300;
    outline: none;
  }

  .slick-prev {
    left: -100px;
    text-align: left;
  }

  .slick-next {
    right: -100px;
    text-align: right;
  }



  .item.slick-slide {
    width: 700px;
    height: 700px !important;
    transition: transform .4s;
    position: relative;
  }

  .slick-slide:after {
    content: '';
    position: absolute;
    z-index: 2;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, .5);
    transition: transform .4s;
  }

  .item.slick-slide {
    transform: scale(0.7) translate(640px);
  }

  .item.slick-slide.slick-center+.slick-slide {
    transform: scale(0.8) translate(-250px);
    z-index: 10;
  }

  .item.slick-slide.slick-center+.slick-slide+.item.slick-slide {
    transform: scale(0.7) translate(-640px);
    z-index: 5;
  }

  .item.slick-slide.slick-active {
    transform: scale(0.8) translate(250px);
  }

  .item.slick-slide.slick-center {
    /* margin: 0 -10%; */
    transform: scale(1);
    z-index: 30;
  }

  .slick-center:after {
    opacity: 0;
  }
</style>

<div class="wrap">
  <div class="slider">

    <div class="item">
      <img src="img/reviews/reviews_1.jpg" alt="reviews_1">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_2.jpg" alt="reviews_2">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_3.jpg" alt="reviews_3">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_4.jpg" alt="reviews_4">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_5.jpg" alt="reviews_5">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_6.jpg" alt="reviews_6">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_10.jpg" alt="reviews_10">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_7.jpg" alt="reviews_7">
    </div>

  </div>
</div>

<script>
  $('.slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    centerMode: true,
    variableWidth: true,
    infinite: true,
    focusOnSelect: true,
    cssEase: 'linear',
    touchMove: true,
    prevArrow: '<button class="slick-prev"> < </button>',
    nextArrow: '<button class="slick-next"> > </button>',

    //         responsive: [                        
    //             {
    //               breakpoint: 576,
    //               settings: {
    //                 centerMode: false,
    //                 variableWidth: false,
    //               }
    //             },
    //         ]
  });


  var imgs = $('.slider img');
  imgs.each(function() {
    var item = $(this).closest('.item');
    item.css({
      'background-image': 'url(' + $(this).attr('src') + ')',
      'background-position': 'center',
      '-webkit-background-size': 'contain',
      'background-size': 'contain',
      'background-repeat': 'no-repeat'
    });
    $(this).hide();
  });
</script>