// *** BEGIN JANRAIN CODE ***

(function() {
    if (typeof window.janrain !== 'object') window.janrain = {};
    if (typeof window.janrain.settings !== 'object') window.janrain.settings = {};

// SET TOKEN URL:
  // local:
    janrain.settings.tokenUrl = window.location.protocol + "//" + window.location.host + '/tokenURL.php';
  // live:
    // janrain.settings.tokenUrl = 'http://www.amandaryman.com/apitest/tokenURL.php';

    function isReady() { janrain.ready = true; };
    if (document.addEventListener) {
      document.addEventListener("DOMContentLoaded", isReady, false);
    } else {
      window.attachEvent('onload', isReady);
    }

    var e = document.createElement('script');
    e.type = 'text/javascript';
    e.id = 'janrainAuthWidget';

    if (document.location.protocol === 'https:') {
      e.src = 'https://rpxnow.com/js/lib/aryman-login/engage.js';
    } else {
      e.src = 'http://widget-cdn.rpxnow.com/js/lib/aryman-login/engage.js';
    }

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(e, s);
})();

// *** END JANRAIN CODE ***



// *** BEGIN IPSUM CODE ***


var defaultText = "Those tons are nothing more than muscles. A gruesome tea is a sneeze of the mind. However, the pint of a plasterboard becomes an erstwhile ferryboat. A frontier whorl without kangaroos is truly a kilometer of senile innocents. <br><Br>A trigonometry is an unsapped help. The events could be said to resemble earthen quits. We can assume that any instance of a flavor can be construed as a dragging retailer. Burly waies show us how strangers can be silks.";
// $('#ipsum').html(defaultText);

// var url = "http://metaphorpsum.com/sentences/4?callback=?";
// $.get(url, function(ipsum) {
//   console.log(ipsum);
// });

var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
  if (xhr.readyState === 4){
    document.getElementById('ipsum').innerHTML
    = xhr.responseText;
    console.log(xhr.responseText);
  }
};
xhr.open('GET', 'http://metaphorpsum.com/sentences/4');
function sendAJAX(){
  xhr.send();
};











// $.getJSON(url, function(ipsum) {
//   	if (ipsum && ipsum.length > 0) {
//   		$("#ipsum").html('');
//   		for (var i = 0; i < ipsum.length; i++)
//   			$("#ipsum").append('<p>' + ipsum[i] + '</p>');
//   		$("#ipsum").show();
//   	}
//   });


// $.getJSON('http://baconipsum.com/api/?callback=?',
// 	{ 'type':'meat-and-filler', 'start-with-lorem':'1', 'paras':'3' },
//   	function(baconGoodness)
//   {
//   	if (baconGoodness && baconGoodness.length > 0)
//   	{
//   		$("#ipsum").html('');
//   		for (var i = 0; i < baconGoodness.length; i++)
//   			$("#ipsum").append('<p>' + baconGoodness[i] + '</p>');
//   		$("#ipsum").show();
//   	}
//   });
