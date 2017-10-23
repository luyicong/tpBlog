$(document).ready(function(){
  $('.the-nav').cbFlyout();
  $('.banquan').html('Powered by YOHO167').attr('href','http://www.yoho167.com')
  // $('.banquan').on('click',function(e) {
  // 	e.preventDefault()
  // })
});
var urlstr = location.href;
//alert((urlstr + '/').indexOf($(this).attr('href')));
var urlstatus=false;
$("#menu a").each(function () {
  if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
    $(this).addClass('curs'); urlstatus = true;
  } else {
    $(this).removeClass('curs');
  }
});
if (!urlstatus) {$("#menu a").eq(0).addClass('curs'); }
