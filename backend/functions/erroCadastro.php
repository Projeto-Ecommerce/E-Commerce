<?php

    if($_GET['erro'] == 1){
        ?>
        <div class="container-display">
            <div class="container">
                <div class="mensagemErro">
                    <p class="tittleError">Erro no cadastro!</p>
                    <p class="msgError">Identificamos um erro no cadastro! O CPF <?= $cpf  </p>
                </div>
            </div>
        </div>

        <?php
    }