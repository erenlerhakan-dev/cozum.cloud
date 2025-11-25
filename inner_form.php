<div class="col-lg-5 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">

<form id="inner_form">

<input type="text" name="_name" placeholder="Adınız - Soyadınız" required="">
<input type="text" name="_phone" placeholder="Telefon Numaranız" required="">
<input type="text" name="_email" placeholder="Email Adresiniz" required="">
<input type="text" name="_company" placeholder="Firma Adı" required="">
<textarea rows="2" name="_message" placeholder="Mesajınız"></textarea>

<input name="_serv" value="<?php echo $service; ?>" type="hidden">

<button class="btn btn--primary btn--with-shadow full-width" type="button" id="inner_button">Gönder</button>

</form>

</div>