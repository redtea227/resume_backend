# 個人履歷表前後台串接實作
Demo link http://220.128.133.15/s1100217/resume/
<hr>
<h3>前台技術</h3>
• Boostrap5 RWD設計<br>
• typewriter 打字機/aos.js 視覺滾差/slick 輪播js套件<br>
<pre>
  $.get('api/typewriter.php', (res) => {

  typewriter
    .pauseFor(200)
    .typeString(`<span id='slogan'>${res.first}.</span>`)
    .typeString(`<br><span style='font-size:37px;'>${res.second}</span><br><span>${res.third}</span>`)
    .pauseFor(1000)
    .start();

}, 'JSON')
</pre>
• formspree表單功能<br>
• spy()滾動軸監控搭配顯示效果<br>
<pre>
const spy = function () {
  const nowat = $(window).scrollTop();

  $("section").each(function () {
    const
      id = $(this).attr('id'),
      offset = $(this).offset().top - $("#rogerMenu").innerHeight() - 1,
      // slide正常( - $("#rogerMenu").innerHeight() - 1)
      height = $(this).innerHeight();
    // console.log(id);

    if (offset <= nowat && nowat < offset + height) {
      // console.log(id);
      $("#rogerMenu a").removeClass('active');
      $(`#rogerMenu a[href='#${id}']`).addClass('active')
    }
  });
}
</pre>
<hr>
<h3>後台技術</h3>
• Session判斷登入導回首頁<br>
<pre>
  if (!isset($_SESSION['login'])) {
  to("index.php");
}
</pre>
• 訪客模式 disable submit button<br>
<pre>
  ($_SESSION['login'] != 'roger')?'disabled':'';
</pre>
• 後台切版 以do傳值帶入分類內容<br>
<pre>
  $do = (isset($_GET['do'])) ? $_GET['do'] : 'bg';
  $file = "backend/" . $do . ".php";
  // 先判斷檔案是否存在
  if (file_exists($file)) {
    include $file;
  } else {
    include "backend/bg.php";
  }
</pre>
• base檔整合資料庫CRUD操作<br>
• Post表單加入input hidden判斷id/table<br>
• 打字機內容json_encode回傳前端
<pre>
  $ty=$Typewriter->find(['sh'=>1]);
  echo json_encode($ty);
</pre>
