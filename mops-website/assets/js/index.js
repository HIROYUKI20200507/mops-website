const ham = $('#js-hamburger')
const nav = $('#js-nav')
const item = $('.js-item')
ham.on('click', function () {
  //ハンバーガーメニューをクリックしたら
  ham.toggleClass('active') // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active') // ナビゲーションメニューにactiveクラスを付け外し
})

item.on('click', function () {
  //ハンバーガーメニューをクリックしたら
  ham.toggleClass('active') // ハンバーガーメニューにactiveクラスを付け外し
  nav.toggleClass('active') // ナビゲーションメニューにactiveクラスを付け外し
})
