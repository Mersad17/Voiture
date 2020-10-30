
<?php
$file= 'test.txt';
$prenom=$_GET["prenom"];
$nom=$_GET["nom"];
$email=$_GET["email"];
$addres=$_GET["addres"];
$code=$_GET["code"];
$tel=$_GET["tel"];
$donnee=array($prenom,$nom,$email,$addres,$code,$tel);
file_put_contents($file, implode(' ',$donnee).PHP_EOL,FILE_APPEND | LOCK_EX);

?>

<div id="formulaire">

<form action="https://gmail.us17.list-manage.com/subscribe/post?u=7c32fcc31113687802278dc5a&amp;id=7625c31e3b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
    <div id="mc_embed_signup_scroll">
    <h2>Subscribe</h2>

    <input type="radio" name="gender" id="gerderMr" checked/><label for="genderMr">M</label>
    <input type="radio" name="gender" id="gerderMme"/><label for="genderMme">Mme</label>
    
<div class="nom_prenom">
    <input type="text" name="FNAME"  value="<?php echo $_GET["prenom"]?>" placeholder="Votre prénom" id="mce-FNAME"/>
</div>

<div class="nom_prenom">
    <input type="text" name="LNAME" value="<?php echo $_GET["nom"]?>" placeholder="Votre nom" id="mce-LNAME" required/>
</div>

<div class="email_tel">
    <input type="email" name="EMAIL" value="<?php echo $_GET["email"]?>" placeholder="Votre e-mail" id="mce-EMAIL" required/>
</div>

<div class="email_tel">
    <input type="tel" name="PHONE" value="<?php echo $_GET["tel"]?>" id="phone" pattern="[0-9]{10}" placeholder="Votre numéro de téléphone" id="mce-PHONE"/>
</div>

<div class="adresse_code">
    <input type="text" name="ADRESS" value="<?php echo $_GET["addres"]?>" placeholder="Votre adresse" id="mce-ADRESS"/>
</div>

<div class="adresse_code">
    <input type="text" name="CODE" value="<?php echo $_GET["code"]?>" placeholder="Votre code postal" id="mce-CODE"/>
</div>

    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7c32fcc31113687802278dc5a_7625c31e3b" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<script type="text/javascript">
    document.getElementById('mc-embedded-subscribe-form').submit();
    
  
</script>
