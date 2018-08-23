<style>
    .usuario{
        margin-left: 25px;
        margin-top: 8px;
        font-size: 16px;
        color: #000;
        font-weight: bold;
        margin-right: 22px;
        float: right;
    }

    .usuario-informacoes-sair{
        color: #ffd21b;
        font-size: 20px;
    }
    .usuario-informacoes-sair:hover{
        color: #000;
    }
</style>
<div id="usuario-informacoes-container">
    <ul class="usuario-informacao">
        <div class="usuario">
            <span>Olá,&nbsp;</span>
            <span style="color: red"><?php echo $row_usu_info['usuario_nome']; ?></span>
            <span style="color: red"><?php echo $row_usu_info['usuario_sobrenome']; ?> , &nbsp;</span>
            <a href="./controles/tratativas.php?logout=1" class="usuario-informacoes-sair"><i class="fas fa-sign-out-alt"></i></a>
            <br>    
            <span style="font-size: 12px; float: right;">Seja bem vindo ao nosso Sistema.</span>
        </div>
    </ul>
</div>
