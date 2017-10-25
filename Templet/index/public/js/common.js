$(document).ready(function(){
  $('.the-nav').cbFlyout();
  $('.banquan').html('Powered by YOHO167').attr('href','http://www.yoho167.com')
  // $('.banquan').on('click',function(e) {
  // 	e.preventDefault()
  // })
  $('#gratuity-alert-btn').click(function(e){
    OpenGratuityAlert()
    e.stopPropagation();
  })

  $('.gratuity-alert-mask').click(function(e){
    CloseGratuityAlert()
    e.stopPropagation();
  })

  //关闭按钮关闭弹窗
  $('.close-btn').click(function(e){
    CloseGratuityAlert()
    e.stopPropagation();
  })

  function OpenGratuityAlert(){
    $('.gratuity-alert-box').removeClass('flipOutX');
    $('.gratuity-alert-mask').fadeIn(400)
    setTimeout(function(){
      $('.gratuity-alert-box').css('display','block').addClass('flipInX');
    },50)
    // document.querySelector('body').style.overflow = 'hidden';
  }

  function CloseGratuityAlert(){
    $('.gratuity-alert-box').removeClass('flipInt').addClass('flipOutX');
    setTimeout(function(){
      $('.gratuity-alert-box').css('display','none')
      $('.gratuity-alert-mask').fadeOut(1)
    },600)
    // document.querySelector('body').style.overflow = '';
  }

});

//导航选中处理
var urlstr = location.href;
//pop数组最后一个
var iurl = "../index/"+urlstr.split('/').pop();
console.log(iurl)
if(urlstr.split('/').pop() == 'index.html'){
  $("[href='../index.html']").addClass('curs')
}else{
  var aMenu = $("#menu a");
  for(var i=0;i<aMenu.length;i++){
      if(aMenu.eq(i).attr('href') == iurl){
        console.log(aMenu.eq(i).attr('href'))
        aMenu.eq(i).addClass('curs').parents('.dropdown').find(">a").addClass('curs')
      }
  }
}
