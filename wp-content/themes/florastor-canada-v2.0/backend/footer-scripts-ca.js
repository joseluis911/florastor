
$('.collapse').on('show.bs.collapse', 
  function(){
    $(this).parent().find(".glyphicon-triangle-right").removeClass("glyphicon-triangle-right").addClass("glyphicon-triangle-bottom");
}).on('hide.bs.collapse', 
  function(){
    $(this).parent().find(".glyphicon-triangle-bottom").removeClass("glyphicon-triangle-bottom").addClass("glyphicon-triangle-right");
});

//Holds a reference to the YouTube player
var ik_player;

function onYouTubeIframeAPIReady() {
  //creates the player object
  ik_player = new YT.Player('ik_player_iframe');             
  //console.log('Video API is loaded');              
  //subscribe to events
  ik_player.addEventListener("onReady", "onYouTubePlayerReady");
  ik_player.addEventListener("onStateChange", "onYouTubePlayerStateChange");
}
function onYouTubePlayerStateChange(event) {
  switch (event.data) {
    case YT.PlayerState.UNSTARTED:
      //console.log('unstarted');
      // ga('send', 'event', 'Homepage', 'video - click');
      break;
    case YT.PlayerState.ENDED:
      //console.log('ended');
      break;
    case YT.PlayerState.PLAYING:
      //console.log('playing');
      ga('send', 'event', 'Homepage Video Play - CA', 'video - playing');
      break;
    case YT.PlayerState.PAUSED:
      //console.log('paused');
      break;
    case YT.PlayerState.BUFFERING:
      //console.log('buffering');
      // ga('send', 'event', 'Homepage', 'video - buffering');
      break;
    case YT.PlayerState.CUED:
      //console.log('video cued');
      break;
  }
}

$('#placeholder').addClass('hidden');
$('#header-img').fadeIn(1000).removeClass('hidden');

// Highlight current navbar tab //  
switch (window.location.pathname) {     
case '/about/':
    $('#about').addClass('active')
    break;      
case '/products/':
    $('#products').addClass('active')
    break;
case '/coupons/':
    $('#coupons').addClass('active')
    break;
case '/where-to-buy/':
    $('#purchase').addClass('active')
    break;
case '/faqs/':
    $('#faq').addClass('active')
    break;
case '/contact/':
    $('#contact').addClass('active')
    break;
}//switch

function retailer_costco_ca(){
  ga('send', 'event', 'Retailer - Costco.ca', 'click');
  ga('send', 'event', 'Retailer link click - CA', 'click');
}
function retailer_well_ca(){
  ga('send', 'event', 'Retailer - Well.ca', 'click');
  ga('send', 'event', 'Retailer link click - CA', 'click');
}
function retailer_london_drugs(){
  ga('send', 'event', 'Retailer - LondonDrugs.ca', 'click');
  ga('send', 'event', 'Retailer link click - CA', 'click');
}
function coupon_4(){
  ga('send', 'event', 'Coupons Page', 'click - 4 dollar coupon');
  try {
    __adroll.record_user({"adroll_segments": "abb544bf"});
} catch(err) {}
}
function coupon_6(){
  ga('send', 'event', 'Coupons Page', 'click - 6 dollar coupon');
  try {
    __adroll.record_user({"adroll_segments": "c16a4d17"});
} catch(err) {}
}
function submit_coupons_email(){
  ga('send', 'event', 'Coupons Page', 'click - submit email');
}

adroll_adv_id = "4HRU7B75W5HTTMHBIMKT7Y";
adroll_pix_id = "GG4MFALFPVB25I4NZZGMHM";
(function () {
    var _onload = function(){
        if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
        if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
        var scr = document.createElement("script");
        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
        scr.setAttribute('async', 'true');
        scr.type = "text/javascript";
        scr.src = host + "/j/roundtrip.js";
        ((document.getElementsByTagName('head') || [null])[0] ||
            document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
    };
    if (window.addEventListener) {window.addEventListener('load', _onload, false);}
    else {window.attachEvent('onload', _onload)}
}());