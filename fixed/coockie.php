<script>
    $(document).ready(function() {
        function setCookie(name, exdays) {
            name = "Cookie MHS"
            date = new Date(); //  criando o COOKIE com a data atual
            date.setTime(date.getTime() + (exdays * 24 * 60 * 60 * 1000));
            expires = date.toUTCString();
            value = "TESTE123";
            document.cookie = name + "=" + value + "; expires=" + expires + "; path=/";

        } //função universal para criar cookie
        getCookie();

        function getCookie() {
            var c_name = document.cookie; // listando o nome de todos os cookies
            if (c_name != undefined && c_name.length > 0) // verificando se o mesmo existe
            {
                var posCookie = c_name.indexOf("Cookie MHS"); // checando se existe o cookieSeuNome 
                if (posCookie >= 0) //se existir o cookie mostra um alert no browser
                {
                    $(".box-cookies").hide()

                } else
                    $(".box-cookies").show()

            }
        }
        $("#cookie1").click(function() {
            setCookie()
            $(".box-cookies").hide()
        })
    })
</script>
<div class="box-cookies">
    <p class="msg-cookies">Este site usa cookies para garantir que você obtenha a melhor experiência.</p>
    <button id="cookie1" class="btn-cookies">Aceitar!</button>
</div>