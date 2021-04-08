<section id="banner-contato">
    <div class="block-title-banner uk-position-large uk-position-center-left ">
        <h1 class="uk-heading-medium">Como podemos ajudar?</h1>
    </div>
</section>

<section id="form-area">
    <div class="uk-container uk-padding">
        <div class="block-title uk-text-center">
            <h1 class="uk-heading-small">Precisa de mais informações?</h1>
            <div class="spacing-lg"></div>
            <p>Preencha seus dados e nós entramos em contato com você!</p>
        </div>
        <div class="spacing"></div>
        <div class="form-area uk-padding">
            <div class="tab">
                <button class="tablinks active" onclick="openContact(event, 'Mensagem')"><i class="fas fa-envelope-open-text"></i>&nbsp; Envie uma Mensagem</button>
                <button class="tablinks" onclick="openContact(event, 'Parceiro')"><i class="fas fa-briefcase"></i>&nbsp; Seja um Parceiro</button>
                <button class="tablinks" onclick="openContact(event, 'TrabalheConosco')"><i class="fas fa-user"></i>&nbsp; Trabalhe Conosco</button>
            </div>

            <!-- Tab content -->
            <div id="Mensagem" class="tabcontent">
                <div class="spacing-lg"></div>
                <form class="uk-grid-small" type="hidden" method="POST" action="api/enviar.php" uk-grid>
                    <input type="hidden" value="form1" name="dont-display">
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Nome *</label>
                        <input class="uk-input" name="name" type="text" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">E-mail Corporativo *</label>
                        <input class="uk-input" type="email" name="email" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Telefone *</label>
                        <input class="uk-input" name="telefone" type="tel" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Cargo *</label>
                        <input class="uk-input" name="cargo" type="text" required>
                    </div>
                    <div class="uk-width-1-1@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Como podemos ajudar? *</label>
                        <textarea class="uk-textarea" name="mensagem" rows="5" required></textarea>
                    </div>
                    <div class="btn-enviar uk-text-center">
                        <button class="uk-button uk-button-default" type="submit" id="btn">Enviar</button>
                    </div>
                </form>
            </div>

            <div id="Parceiro" class="tabcontent">
                <div class="spacing-lg"></div>
                <form class="uk-grid-small" method="POST" action="api/enviar.php" enctype="multipart/form-data" uk-grid>
                    <input type="hidden" value="form2" name="dont-display">
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Nome *</label>
                        <input class="uk-input" type="text" name="name" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Telefone *</label>
                        <input class="uk-input" type="tel" name="telefone" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">E-mail Corporativo *</label>
                        <input class="uk-input" type="email" name="email" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Razão Social *</label>
                        <input class="uk-input" type="text" name="razao-social" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">CNPJ *</label>
                        <input class="uk-input" type="text" name="cnpj" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Endereço *</label>
                        <input class="uk-input" type="text" name="endereco" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">LinkedIn *</label>
                        <input class="uk-input" type="text" name="linkedin" required>
                    </div>
                    <div class="uk-margin file" uk-margin>
                        <div uk-form-custom="target: true">
                            <input type="file" name="arquivo">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecione Arquivo" disabled>
                        </div>
                        <button class="uk-button uk-button-default">Enviar</button>
                    </div>
                </form>
            </div>

            <div id="TrabalheConosco" class="tabcontent">
                <div class="spacing-lg"></div>
                <form class="uk-grid-small" method="POST" action="api/enviar.php" enctype="multipart/form-data" uk-grid>
                    <input type="hidden" value="form3" name="dont-display">
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Nome *</label>
                        <input class="uk-input" type="text" name="name" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Telefone *</label>
                        <input class="uk-input" type="text" name="telefone" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Cidade *</label>
                        <input class="uk-input" type="text" name="cidade" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">Estado *</label>
                        <input class="uk-input" type="text" name="estado" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">E-mail *</label>
                        <input class="uk-input" type="text" name="email" required>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-bottom">
                        <label class="uk-margin-bottom">LinkedIn *</label>
                        <input class="uk-input" type="text" name="linkedin" required>
                    </div>
                    <div class="uk-margin" uk-margin>
                        <div uk-form-custom="target: true">
                            <input type="file" name="arquivo">
                            <input class="uk-input uk-form-width-medium" type="text" placeholder="Selecione Arquivo" disabled>
                        </div>
                        <button class="uk-button uk-button-default">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>