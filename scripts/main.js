// Animations
AOS.init({
  anchorPlacement: 'top-left',
  duration: 1000
});

//漢堡選單點擊後收回
$(function () {
  $('.navbar a').on('click', function () {
    $('.navbar-toggler').click();
  });
});

//選單滾動
$("#rogerMenu a").click(function () {
  const who = $(this).attr('href'),
    viewWidth = $(window).innerWidth(),
    val = $(who).offset().top - $("#rogerMenu").innerHeight() + 1;
  // $("html").scrollTop(val);
  if (viewWidth > 960) {
    $("html").animate({
      scrollTop: val
    }, 1000);
  } else {
    $("html").animate({
      scrollTop: val + 200
    }, 1000);
  }
});

//check bg menu
const bgmenu = function () {
  const
    viewWidth = $(window).innerWidth(),
    nowat = $(window).scrollTop(),
    // height = $("#intro").innerHeight(),
    offset = $("#rogerMenu").innerHeight() + 1;

  if (nowat <= offset) { //0~910 menu沒有bg 首區內
    $("#rogerArrow").fadeOut(); //隱藏至頂按鈕

    if (viewWidth > 767) $("#rogerMenu").removeClass('bg-custom'); //大畫面
    else $("#rogerMenu").addClass('bg-custom'); //小畫面
  } else { //在其他主題時
    $("#rogerMenu").addClass('bg-custom');
    $("#rogerArrow").fadeIn();
  }
}



// 網頁滾動時
$(window).scroll(function () {
  // spy();
  bgmenu();
});
// 網頁更改寬度時
$(window).resize(bgmenu);

// spy();
bgmenu();

// typewriter
var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
  loop: false,
  delay: 100,
});

$.get('api/typewriter.php', (res) => {

  typewriter
    .pauseFor(200)
    .typeString(`<span id='slogan'>${res.first}.</span>`)
    .typeString(`<br><span style='font-size:40px;'>${res.second}</span><br><span>${res.third}</span>`)
    .pauseFor(1000)
    .start();

}, 'JSON')

