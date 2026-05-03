<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.0/jquery.min.js" integrity="sha512-suUtSPkqYmFd5Ls30Nz6bjDX+TCcfEzhFfqjijfdggsaFZoylvTj+2odBzshs0TCwYrYZhQeCgHgJEkncb2YVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.cozum.cloud/js/crum-mega-menu.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js" integrity="sha512-t1b4SfkxEhXGtSnXlefy5+SYQv6mt9K2ksXxzl3ltyOkEHdCvMcAKJWTay6J7pUfw1W/oW9TybcoE3j044OnaA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://www.cozum.cloud/js/theme-plugins.js"></script>
<script src="https://www.cozum.cloud/js/velocity.min.js"></script>
<script src="https://www.cozum.cloud/js/main.js"></script>
<script src="https://www.cozum.cloud/js/h_customs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

<script>
$("#request_button").click(function() {

$.ajax({
url: "/send_request.php",
type: 'POST',
data: $('#request_form').serialize(),
success: function(response){ 
if (response === "ok") { swal(" ", "Teşekkürler. Mesajınız iletildi. En kısa sürede size dönüş yapacağız.", "success");
$("#request_form")[0].reset();
$("#request_button").attr("disabled", true);
} 
if (response === "name") { swal(" ", "Lütfen adınızı yazın.", "warning"); }
if (response === "emailbad") { swal(" ", "Email adresiniz hatalı. Lütfen kontrol edip tekrar deneyin.", "warning"); }
if (response === "email") { swal(" ", "Lütfen email adresinizi yazın.", "warning"); }
if (response === "phone") { swal(" ", "Lütfen telefon numaranızı yazın.", "warning"); }
if (response === "message") { swal(" ", "Lütfen mesajınızı yazın.", "warning"); }
if (response === "message_short") { swal(" ", "Lütfen daha açıklayıcı bir mesaj yazın.", "warning"); }
if (response === "nok") { swal(" ", "Bir hata oluştu. Lütfen sayfayı yenileyip tekrar deneyin.", "warning"); } }
});

});
</script>

<script>
$("#inner_button").click(function() {

$.ajax({
url: "/send_request.php",
type: 'POST',
data: $('#inner_form').serialize(),
success: function(response){ 
if (response === "ok") { swal(" ", "Teşekkürler. Mesajınız iletildi. En kısa sürede size dönüş yapacağız.", "success");
$("#inner_form")[0].reset();
$("#inner_button").attr("disabled", true);
} 
if (response === "name") { swal(" ", "Lütfen adınızı yazın.", "warning"); }
if (response === "emailbad") { swal(" ", "Email adresiniz hatalı. Lütfen kontrol edip tekrar deneyin.", "warning"); }
if (response === "email") { swal(" ", "Lütfen email adresinizi yazın.", "warning"); }
if (response === "phone") { swal(" ", "Lütfen telefon numaranızı yazın.", "warning"); }
if (response === "message") { swal(" ", "Lütfen mesajınızı yazın.", "warning"); }
if (response === "message_short") { swal(" ", "Lütfen daha açıklayıcı bir mesaj yazın.", "warning"); }
if (response === "nok") { swal(" ", "Bir hata oluştu. Lütfen sayfayı yenileyip tekrar deneyin.", "warning"); } }
});

});
</script>