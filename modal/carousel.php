<div class="wrap">
  <div class="slider">

    <div class="item">
      <img src="img/reviews/reviews_1.jpg" alt="reviews_1">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_3.jpg" alt="reviews_3">
    </div>
    <div class="item">
      <img src="img/reviews/reviews_2.jpg" alt="reviews_2">
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