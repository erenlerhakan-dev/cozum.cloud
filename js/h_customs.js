$('.h_firstcap').keyup(function(evt){
var txt = $(this).val();
$(this).val(txt.replace(/^(.)|\s(.)/g, function($1){ return $1.toUpperCase( ); }));
});

function h_isNumber(evt) {
evt = (evt) ? evt : window.event;
var charCode = (evt.which) ? evt.which : evt.keyCode;
if (charCode > 31 && (charCode < 48 || charCode > 57)) { return false; }
return true;
}

var e = document.querySelector(".cookiealert"),
t = document.querySelector(".acceptcookies");
e && (e.offsetHeight, function(e) {
for (var t = "acceptCookies=", n = decodeURIComponent(document.cookie).split(";"), a = 0; a < n.length; a++) {
for (var o = n[a];
" " === o.charAt(0);) o = o.substring(1);
if (0 === o.indexOf(t)) return o.substring(t.length, o.length)
}
return ""
}() || e.classList.add("show"), t.addEventListener("click", function() {
! function(e, t, n) {
var a = new Date;
a.setTime(a.getTime() + 31536e6);
var o = "expires=" + a.toUTCString();
document.cookie = "acceptCookies=true;" + o + ";path=/"
}(), e.classList.remove("show"), window.dispatchEvent(new Event("acceptCookies"))
}));