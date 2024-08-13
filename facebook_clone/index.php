<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.o">
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    <link rel="shortcut icon" href="./assets/img/icons8facebook.png" type="image/x-icon">
    <title>Login Facebook</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>facebook</h2>
            </div><!--logo-->
            <form method="post" class="form-login">
                <div class="form-element">
                    <p>E-mail ou telefone:</p>
                    <input type="email" required>
                </div><!--form-element-->
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" required>
                </div><!--form-element-->
                <div class="form-element">
                    <input type="submit" name="acao" value="Enviar">
                </div><!--form-element-->
            </form><!--form-login-->
            <div class="clear"></div>
        </div><!--center-->
    </header>
    
    <main>
        <section class="section-main">
            <div class="center">
                <div class="img-pessoas">
                    <img src="./assets/img/imglogin.png" alt="">
                </div><!--img-pessoas-->
                <div class="cadastro">
                    <h2>Abra sua conta</h2>
                    <h3>É gratuito e sempre será!</h3>
                    <form action="" class="ciar-conta">
                        <div class="input-cadastro">
                            <input type="text" placeholder="Nome" required>
                        </div><!--input-cadastro-->
                        <div class="input-cadastro">
                            <input type="text" placeholder="Sobrenome" required>
                        </div><!--input-cadastro-->
                        <div class="input-cadastro3">
                            <input type="email" placeholder="Email" required>
                        </div><!--input-cadastro3-->
                        <div class="input-cadastro3">
                            <input type="password" placeholder="Nova senha" required>
                        </div><!--input-cadastro3-->
                        <div class="input-cadastro3">
                            <h3>Data de nascimento:</h3>
                            <select name="nascimento-dia" id="" class="nascimento">
                                <?php
                                for($i = 1; $i <= 31; $i++){

                                ?>
                                <option value="<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </option>
                                <?php } ?>
                            </select>

                            <select name="nascimento-mes" id="" class="nascimento">
                                <option value="0">Junho</option>
                            </select>
                            <select name="nascimento-ano" id="" class="nascimento">
                                <?php
                                for($i = 1950; $i <= 2024; $i++){

                                ?>
                                <option value="<?php echo $i; ?>">
                                    <?php echo $i; ?>
                                </option>
                                <?php } ?>
                            </select>
                            <div class="clear"></div>
                        </div><!--input-cadastro3-->
                        <div class="clear"></div>
                        <div class="input-cadastro3">
                            <div class="input-radio">
                                <input type="radio" name="sexo" value="masculino">
                                <h2>Masculino</h2>
                            </div><!--input-radio-->
                            <div class="input-radio"><input type="radio" name="sexo" value="feminino">
                                <h2>Feminino</h2>
                            </div><!--input-radio-->
                            <div class="clear"></div>
                        </div><!--input-cadastro3-->
                        <div class="input-cadastro3">
                            <input type="submit" name="acao" value="Cadastrar-se">
                        </div><!--input-cadastro3-->
                    </form><!--criar-conta-->
                </div><!--cadastro-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--section-mains-->
    </main>
    
    <section class="idiomas">
        <div class="center">
            <a class="selection-linguas" href="#">Português (Brasil)</a>
            <a title="Japanese" href="#">日本語</a>
            <a title="English (US)" href="#">English (US)</a>
            <a title="Spanish" href="#">Español</a>
            <a title="French (France)" href="#">Français (France)</a>
            <a title="Italian" href="#">Italiano</a>
            <a title="German" href="#">Deutsch</a>
            <a title="Arabic" href="#">العربية</a>
            <a title="Hindi" href="#">हिन्दी</a>
            <a title="Simplified Chinese (China)" href="#">中文(简体)</a>
        </div><!--center-->
        <div style="border:0; padding-top:14px;" class="center">
            <a title="Cadastre-se no Facebook" href="#">Cadastre-se</a>
            <a title="Entrar no Facebook" href="#">Entrar</a>
            <a title="Confira o Messenger." href="#">Messenger</a>
            <a title="Facebook Lite para Android." href="#">Facebook Lite</a>
            <a title="Explorar a aba Vídeo" href="#">Vídeos</a>
            <a title="Confira locais populares no Facebook." href="#">Locais</a>
            <a title="Confira os jogos do Facebook." href="#">Jogos</a>
            <a title="Compre e venda no Facebook Marketplace." href="#">Marketplace</a>
            <a title="Saiba mais sobre o Meta Pay" href="#">Meta Pay</a>
        </div><!--center-->
    </section>
</body>

</html>
