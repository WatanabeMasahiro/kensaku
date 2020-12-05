$(function() {


  f_locationEvery_menubar();
  f_locationHref_koushin();
  f_locationHref_sakuzyo();
  f_locationSearch_none();
  f_locationDetail_syousai();
  // f_locationHref_syousai();
  f_existNone();
  f_paginater();
  f_returnPage();
  f_clickConfirm();
  f_topreturn();
  f_lowerLimit_100data();
  f_confsendIdnum_koushinSakuzyo();
  f_flashingWarning();
  f_registerBtn();


  function f_locationEvery_menubar() {
    if( location.pathname == "/kensaku/home2" ||
        location.pathname == "/kensaku/home3" ||
        location.pathname == "/kensaku/home4" ||
        location.pathname == "/kensaku/home5") {
          $('.menuOpens').find($('.homes'))
              .css('background-color', '#008600')
              .css('color', '#000A99');
    }
    $('.menuOpens').find('a').each(function(){
      var a_Href = $(this).attr('href');
      var url_Path = location.pathname;
      if ( a_Href == url_Path ) {
        $(this).css('background-color', '#008600')
               .css('color', '#000A99');
      }
    });
  }


  function f_locationHref_koushin() {
    f_hensyumae_toggle();    // f_hensyumae_toggle()
    if(location.pathname == "/kensaku/koushin") {
      var parm_val = location.search.split('=');
        $('.contentsIdNum').each(function() {
          if ( parm_val[1] == $(this).text() ) {
            $('.numExist').text('exist').hide();
          }
        });
        if ($('.numExist').text() != 'exist') {
          $('#secretContents').hide().delay(100).queue( function() {
            alert('登録しているデータの、ID番号を入力して下さい。');
            history.back();
          });
        }
      $('.menuOpens').find('a').each(function(){
        var a_Href = $(this).attr('href');
        if ( a_Href == "/kensaku/koushin/confirm" ) {
          $(this).css('background-color', '#008600')
                .css('color', '#000A99');
        }
      });
    }
  }


  function f_hensyumae_toggle() {    // f_hensyumae_toggle()
    $('#hensyumae-title').hover(function() {
      $(this).css('opacity', 0.7);
    }, function() {
      $(this).css('opacity', 1);
    });

    $('.d-hide').hide();
    var flg = "off";

    $('#hensyumae-title').on('click', function() {
      if(flg == "off") {
        $('.d-hide').fadeIn('slow');
        $('#hensyumae-title')
        .css('border-bottom', 'solid 0px rgba(0, 0, 0, 0.5)')
        .css('border-radius', '10px 10px 0 0');
        $('.fas').removeClass('fa-angle-double-down');
        $('.fas').addClass('fa-angle-double-up');
        flg = "on";
      } else {
        $('.d-hide').fadeOut('slow');
        $('#hensyumae-title')
        .css('border-bottom', 'solid 5px rgba(0, 0, 0, 0.5)')
        .css('border-radius', '10px 10px 10px 10px');
        $('.fas').removeClass('fa-angle-double-up');
        $('.fas').addClass('fa-angle-double-down');
        flg = "off";
      }
    });
  }


  function f_locationHref_sakuzyo() {
    if(location.pathname == "/kensaku/sakuzyo") {
      var parm_val = location.search.split('=');
        $('.contentsIdNum').each(function() {
          if ( parm_val[1] == $(this).text() ) {
            $('.numExist').text('exist').hide();
          }
        });
        if ($('.numExist').text() != 'exist') {
          $('#secretContents').hide().delay(100).queue( function() {
            alert('登録しているデータの、ID番号を入力して下さい。');
            history.back();
          });
        }
      $('.menuOpens').find('a').each(function(){
        var a_Href = $(this).attr('href');
        if ( a_Href == "/kensaku/sakuzyo/confirm" ) {
          $(this).css('background-color', '#008600')
                .css('color', '#000A99');
        }
      });
    }
  }


  function f_locationSearch_none() {
    if( location.search.split('=')[1] == "" ) {
      location.href = location.href.replace( /\?.*$/, "" );
    };
  }


  function f_locationDetail_syousai() {
    $('.recordData').on('click', function() {
      var syousai_id = $(this).find('.syousaiLink').text();
      location.href = '/kensaku/syousai?detail_id=' + syousai_id;
    });
  }

  // function f_locationHref_syousai() {
  //   if(location.pathname == "/kensaku/syousai") {
  //     var parm_val = location.search.split('=');
  //       $('.contentsIdNum').each(function() {
  //         if ( parm_val[1] == $(this).text() ) {
  //           $('.numExist').text('exist').hide();
  //         }
  //       });
  //       if ($('.numExist').text() != 'exist') {
  //         $('#secretContents').hide().delay(100).queue( function() {
  //           alert('登録しているデータの、ID番号を入力して下さい。');
  //           window.location.href = '/kensaku/home1';
  //         });
  //       }
  //   }
  // }


  function f_existNone() {
    if( !($('#existRecord_A')[0]) ) {
      $('#existTable_A').hide();
      $('#existNone_p_A').text("検索データが見つかりません。");
    }

    // if( !($('#existRecord_B')[0]) ) {
    //   $('#recordTable_B').hide();
    //   $('#existNone_p_B').text("検索データが見つかりません。");
    // }
  }


  function f_paginater() {
    var paginate1 = $('.paginate1').attr('href');
    var paginate2 = $('.paginate2').attr('href');
    var paginate3 = $('.paginate3').attr('href');
    var paginate4 = $('.paginate4').attr('href');
    var paginate5 = $('.paginate5').attr('href');

    $('.paginate1').on('click', function( event ) {
      event.preventDefault();
      $('#formGet').attr('action', paginate1 );
      $('#formSubmit').click();
    });

    $('.paginate2').on('click', function( event ) {
      event.preventDefault();
      $('#formGet').attr('action', paginate2 );
      $('#formSubmit').click();
    });

    $('.paginate3').on('click', function( event ) {
      event.preventDefault();
      $('#formGet').attr('action', paginate3 );
      $('#formSubmit').click();
    });

    $('.paginate4').on('click', function( event ) {
      event.preventDefault();
      $('#formGet').attr('action', paginate4 );
      $('#formSubmit').click();
    });

    $('.paginate5').on('click', function( event ) {
      event.preventDefault();
      $('#formGet').attr('action', paginate5 );
      $('#formSubmit').click();
    });


    var issetCount = $('.issetCount').text();
    if (issetCount == false) {
      var regDatas =  $.trim( $('.regDatas').text() );
      var issetCount_div = $('.issetCount_div').length;
      if ( regDatas == 0 ) {
        $('.noset-table').hide();
        $('.noset-p').text("登録データがありません。");
      }
      if ( regDatas <= 20 ) {
        $('.paginate2').unwrap().remove();
        $('.paginate3').unwrap().remove();
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
        if ( issetCount_div == true){
          $('.paginate2').unwrap().remove();
          $('.paginate3').unwrap().remove();
          $('.paginate4').unwrap().remove();
          $('.paginate5').unwrap().remove();
        }
      } else if ( regDatas <= 40 ) {
        $('.paginate3').unwrap().remove();
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
        if ( issetCount_div == true){
          $('.paginate2').unwrap().remove();
          $('.paginate3').unwrap().remove();
          $('.paginate4').unwrap().remove();
          $('.paginate5').unwrap().remove();
        }
      } else if ( regDatas <= 60 ) {
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
        if ( issetCount_div == true){
          $('.paginate2').unwrap().remove();
          $('.paginate3').unwrap().remove();
          $('.paginate4').unwrap().remove();
          $('.paginate5').unwrap().remove();
        }
      } else if ( regDatas <= 80 ) {
        $('.paginate5').unwrap().remove();
        if ( issetCount_div == true){
          $('.paginate2').unwrap().remove();
          $('.paginate3').unwrap().remove();
          $('.paginate4').unwrap().remove();
          $('.paginate5').unwrap().remove();
        }
      } else if (regDatas <= 100) {
        if ( issetCount_div == true){
          $('.paginate2').unwrap().remove();
          $('.paginate3').unwrap().remove();
          $('.paginate4').unwrap().remove();
          $('.paginate5').unwrap().remove();
        }
      }
    } else {
      if (issetCount <= 20 ) {
        $('.paginate2').unwrap().remove();
        $('.paginate3').unwrap().remove();
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
      } else if ( issetCount <= 40 ) {
        $('.paginate3').unwrap().remove();
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
      } else if ( issetCount <= 60 ) {
        $('.paginate4').unwrap().remove();
        $('.paginate5').unwrap().remove();
      } else if ( issetCount <= 80 ) {
        $('.paginate5').unwrap().remove();
      }
    }
  }


  function f_returnPage() {
    var issetCount = $('.issetCount').text();
    var recData = $('.recordData').children('td').text();
    if (location.pathname == '/kensaku/home2') {
      if (issetCount == false) {
        if (!recData) {
          if(!alert('データが２１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      } else {
        if (issetCount <= 20) {
          if(!alert('検索データが２１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      }
    }

    if (location.pathname == '/kensaku/home3') {
      if (issetCount == false) {
        if (!recData) {
          if(!alert('データが４１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      } else {
        if (issetCount <= 40) {
          if(!alert('検索データが４１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      }
    }

    if (location.pathname == '/kensaku/home4') {
      if (issetCount == false) {
        if (!recData) {
          if(!alert('データが６１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      } else {
        if (issetCount <= 60) {
          if(!alert('検索データが６１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      }
    }

    if (location.pathname == '/kensaku/home5') {
      if (issetCount == false) {
        if (!recData) {
          if(!alert('データが８１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      } else {
        if (issetCount <= 80) {
          if(!alert('検索データが８１以上見つからないため、このページを表示できません。\n前のページに戻ります。')) {
            history.back();
          }
        }
      }
    }
  }


  function f_clickConfirm() {
    $('#confirmSub_touroku').on('click', ()=> {
      if (!confirm("データを登録しますか??" )) {
        return false;
      }
    });

    $('#confirmSub_koushin').on('click', ()=> {
      if (!confirm("データを更新しますか??" )) {
        return false;
      }
    });

    $('#confirmSub_sakuzyo').on('click', ()=> {
      if (!confirm("データを削除しますか??" )) {
        return false;
      }
    });

    $('.taikaiBtn').on('click', ()=> {
      if (!confirm('退会すると、登録している\nすべてのデータが削除されます。')) {
        return false;
      }
      if (!confirm("退会しますか??" )) {
        return false;
      }
    });

    $('.logout-links').on('click', function() {
      event.preventDefault();
      if (!confirm("ログアウトしますか？" )) {
        return false;
      }
      document.getElementById('logout-form').submit();
    });
  }


  function f_topreturn() {
    $('.topReturn').on('click', ()=> {
      $('html, body').animate({'scrollTop': 0}, 800);
    });
  }


  function f_lowerLimit_100data() {
    if(location.pathname == "/kensaku/touroku") {
      var userInfoCount = $('#userInfoCount').text();
      if (userInfoCount >= 100) {
        alert('データ数は１００までしか登録できません。');
        window.location.href = '/kensaku/home1';
      }
    }
  }

  
  function f_confsendIdnum_koushinSakuzyo() {
    $('#k_conf_send').on('click', function( event ) {
      var num_val = $('#k_conf_num').val();
      $('.contentsIdNum').each(function() {
        if ( num_val == $(this).text() ) {
          $('.numExist').text('exist').hide();
        }
      });
      if ($('.numExist').text() != 'exist') {
        event.preventDefault();
        alert('登録しているデータの、ID番号を入力して下さい。');
        if (window.location.href == '/kensaku/koushin/confirm') {
          window.location.href = '/kensaku/koushin/confirm';
        } else if (window.location.href == '/kensaku/sakuzyo/confirm') {
          window.location.href = '/kensaku/sakuzyo/confirm';
        }
      }
    });
  }


  function f_flashingWarning() {
    setInterval(function(){
      $('.flashingWarning').fadeOut(1200).fadeIn(1800);
    },1000);
  }


  function f_registerBtn() {
    $('.registerBtn').on('click', function() {
      window.confirm("入力したユーザー情報で、すぐにWebサービスサイトへログインします。\n登録しますか？");
    });
  }


});
