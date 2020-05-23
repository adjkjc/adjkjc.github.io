<!DOCTYPE html>
<html>
<head>
  <title>Free URL Multiple Location Redirector</title>
  <meta name="description" content="A url rotator. Rotates though the provided URLs.">
  <script type="text/javascript" src="../scripts/google.js">//Google Analytics</script>
</head>
<body>
<div id="content">
  <h3>Free URL Random Location Redirector</h3>
  <p>
  This page aims to create a URL you can use to forward to multiple locations, this could be useful if you want to spread your visitors to different location of your website or different surveys if each has a different link. 
  </p>
  <p>
  The use case this was made for was to join multiple separate Qualtrics surveys into one.
  </p>
  <p>
  This is just done randomly. This means with one link a visitor could end up on different pages.
 </p>
 <p> 
  You will probably want to put the URL in a shortener such as bit.ly.
  </p>
  <p>
  Note: Please include the 'http(s)://' part of the url.
  </p>
  <p>
  <span id="output" style="color:#ff00ff">This is where the URL will appear.</span>
  </p><p>
  <textarea id="textarea" placeholder="Add url on each line."></textarea>
  <br>
  <button onclick="clickbox()">Create link</button>
  </p>
  <p>
  To try to buy a beer from this sometime in the future. For every 5th visitor they will see adverts for 5 seconds.
  </p>
</div>

<script>
// Takes the data from the textbox and formats it.
function clickbox(){
 var urls = document.getElementById("textarea").value.split("\n").join(",");
 document.getElementById("output").innerHTML = window.location.hostname + window.location.pathname + "?a=" + urls;
}

// Forwards to the locations given.
function forward(){
 var search = window.location.search.slice(3).split(",");
 window.location.href = search[Math.floor(search.length * Math.random())];
}

function showAd(){
  document.getElementById("content").innerHTML = "You will be redirected in 5 seconds. These adverts hopefully will get me a beer at one stage. <a onclick='forward()' href='javascript:void(0);'>Or go now!</a><br>This service was provided by <a href='http://niallbunting.com/url-multi-redirect/'>my redirecting service.</a>";
  setTimeout(function(){ forward(); }, 5000);
}

// Checks for the prameters so to forward.
if(window.location.search != ""){
 if(Math.random() > 0.22) {
   forward();
 } else {
   showAd();
 }
}
</script>
<div>
<div id="ntv_1990188"></div>
<script type="text/javascript">
(function(d) {
  var params =
  {
    bvwidgetid: "ntv_1990188",
    bvlinksownid: 1990188,
    rows: 2,
    cols: 4,
    textpos: "below",
    imagewidth: 150,
    mobilecols: 2,
    cb: (new Date()).getTime()
  };
  params.bvwidgetid = "ntv_1990188" + params.cb;
  d.getElementById("ntv_1990188").id = params.bvwidgetid;
  var qs = Object.keys(params).reduce(function(a, k){ a.push(k + '=' + encodeURIComponent(params[k])); return a},[]).join(String.fromCharCode(38));
  var s = d.createElement('script'); s.type='text/javascript';s.async=true;
  var p = 'https:' == document.location.protocol ? 'https' : 'http';
  s.src = p + "://bvadtgs.scdn1.secure.raxcdn.com/bidvertiser/tags/active/bdvws.js?" + qs;
  d.getElementById(params.bvwidgetid).appendChild(s);
})(document);
</script>
</div>
</body>
</html>
