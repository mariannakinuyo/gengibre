<?php wp_footer(); ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a class="opacity" href="<?php bloginfo('siteurl'); ?>">
                    <img class="logo-footer" src="<?php bloginfo('template_url'); ?>/src/images/logo-branco.svg" alt="">
                </a>
            </div>
            <div class="col-lg-6 col-12 redes-footer justify-content-end">
                <a class="contato" href="mailto:contato@gengibre.org?subject=contato">Contato</a>
                <?php
                wp_nav_menu( array( 'menu' => 'footer', 'container' => FALSE, 'menu_class' => 'menu-footer', 'menu_id' => false ) );
                ?>
                <!-- <div class="redes">
                    <a class="opacity" href=""><div class="facebook"><span></span></div></a>
                    <a class="opacity" href=""><div class="twitter"><span></span></div></a>
                    <a class="opacity" href=""><div class="whatsapp"><span></span></div></a>
                    <a class="opacity" href=""><div class="telegram"><span></span></div></a>
                </div> -->
            </div>
            <div class="col-12">
                <a class="contato" href="mailto:contato@gengibre.org?subject=contato">
                    <p class="small">contato@gengibre.org</p>
                </a>
                <p class="small">© 2021 GENgiBRe. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="<?php bloginfo('template_url') ?>/src/js/script.js"></script>
<?php
$lang = get_bloginfo("language");
if ( $lang === 'fr-FR' ) {
?>
    <script>
    var purecookieTitle="Cookies",
    purecookieDesc="Ce site utilise des cookies pour vous offrir une meilleure expérience. En poursuivant votre navigation, vous acceptez l'utilisation de cookies.",
    purecookieLink='<a href="" target="_blank"></a>',
    purecookieButton="Continuer";
    function pureFadeIn(e,o){
        var i=document.getElementById(e);
        i.style.opacity=0,
        i.style.display=o||"block",
        function e(){
            var o=parseFloat(i.style.opacity);
            (o+=.02)>1||(i.style.opacity=o,
            requestAnimationFrame(e))
        }()
    }
            
    function pureFadeOut(e){
        var o=document.getElementById(e);
        o.style.opacity=1,
        function e(){
            (o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)
        }()
    }
    function setCookie(e,o,i){
        var t="";if(i){
            var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()
        }document.cookie=e+"="+(o||"")+t+"; path=/"
    }
    function getCookie(e){
        for(var o=e+"=",
        i=document.cookie.split(";"),
        t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);
        if(0==n.indexOf(o))
        return n.substring(o.length,n.length)}
        return null}
        function eraseCookie(e){
            document.cookie=e+"=; Max-Age=-99999999;"
        }
        function cookieConsent(){
            getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};
    </script>

<?php } else { ?>
    <script>
    var purecookieTitle="Cookies",
    purecookieDesc="Este site utiliza cookies para te proporcionar uma melhor experiência. Ao continuar navegando, você aceita o uso de cookies.",
    purecookieLink='<a href="" target="_blank"></a>',
    purecookieButton="Prosseguir";
    function pureFadeIn(e,o){
        var i=document.getElementById(e);
        i.style.opacity=0,
        i.style.display=o||"block",
        function e(){
            var o=parseFloat(i.style.opacity);
            (o+=.02)>1||(i.style.opacity=o,
            requestAnimationFrame(e))
        }()
    }
            
    function pureFadeOut(e){
        var o=document.getElementById(e);
        o.style.opacity=1,
        function e(){
            (o.style.opacity-=.02)<0?o.style.display="none":requestAnimationFrame(e)
        }()
    }
    function setCookie(e,o,i){
        var t="";if(i){
            var n=new Date;n.setTime(n.getTime()+24*i*60*60*1e3),t="; expires="+n.toUTCString()
        }document.cookie=e+"="+(o||"")+t+"; path=/"
    }
    function getCookie(e){
        for(var o=e+"=",
        i=document.cookie.split(";"),
        t=0;t<i.length;t++){for(var n=i[t];" "==n.charAt(0);)n=n.substring(1,n.length);
        if(0==n.indexOf(o))
        return n.substring(o.length,n.length)}
        return null}
        function eraseCookie(e){
            document.cookie=e+"=; Max-Age=-99999999;"
        }
        function cookieConsent(){
            getCookie("purecookieDismiss")||(document.body.innerHTML+='<div class="cookieConsentContainer" id="cookieConsentContainer"><div class="cookieTitle"><a>'+purecookieTitle+'</a></div><div class="cookieDesc"><p>'+purecookieDesc+" "+purecookieLink+'</p></div><div class="cookieButton"><a onClick="purecookieDismiss();">'+purecookieButton+"</a></div></div>",pureFadeIn("cookieConsentContainer"))}function purecookieDismiss(){setCookie("purecookieDismiss","1",7),pureFadeOut("cookieConsentContainer")}window.onload=function(){cookieConsent()};
    </script>
<?php } ?>
</body>
</html>