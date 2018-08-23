<style>
    a:active{
        color: #000;
    }
    .menu-formatacao{
        font-size: 15px;
        color:#fff;
    }
    .menu-formatacao:hover{
        color: #000;
    }
    #menu-principal{
        text-align: center;
    }

    .fa-home{
        color: #000;
    }
    .fa-question{
        color: 	#000;
    }
    .fa-graduation-cap{
        color: #000;
    }
    .fa-building{
        color: #00FF00;
    }
    .fa-university{
        color: #4B0082;
    }
    .fa-edit{
        color: #000;
    }

</style>
<?php
#Exibe menu configuracoes somente para usuarios administradores
if ($row_usu_info['usuario_perfil'] == 1) {
    echo "<div\ id=\"menu-principal\">";
    echo "<div class =\"row\">";
    echo "<div class =\"col-sm-12\">";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-home\" aria-hidden=\"true\" ></span><span> Home &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-question\" aria-hidden=\"true\" ></span><span> Fapi Talentos &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Currículo &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Visualizar Currículo &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Editar Currículo &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Excluir Currículo &nbsp;</span></a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
} elseif ($row_usu_info['usuario_perfil'] == 2) {
    echo "<div\ id=\"menu-principal\">";
    echo "<div class =\"row\">";
    echo "<div class =\"col-sm-12\">";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-home\" aria-hidden=\"true\" ></span><span> Home &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-question\" aria-hidden=\"true\" ></span><span> Fapi Talentos &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Currículos Cadastrado &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Vagas Cadastradas &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Escolaridade &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Cargos &nbsp;</span></a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
} elseif ($row_usu_info['usuario_perfil'] == 3) {
    echo "<div\ id=\"menu-principal\">";
    echo "<div class =\"row\">";
    echo "<div class =\"col-sm-12\">";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-home\" aria-hidden=\"true\" ></span><span> Home &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-question\" aria-hidden=\"true\" ></span><span> Fapi Talentos &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Vagas &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Gerenciar Vagas &nbsp;</span></a>";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Excluir Vagas &nbsp;</span></a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<div\ id=\"menu-principal\">";
    echo "<div class =\"row\">";
    echo "<div class =\"col-sm-12\">";
    echo "<a href=\"home.php\" class=\"menu-formatacao\"><span class=\"fas fa-home\" aria-hidden=\"true\" ></span><span> Home &nbsp;</span></a>";
    echo "<a href=\"historia.php\" class=\"menu-formatacao\"><span class=\"fas fa-question\" aria-hidden=\"true\" ></span><span> Fapi Talentos &nbsp;</span></a>";
    echo "<a href=\"cadastrarCurriculo.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Currículo &nbsp;</span></a>";
    echo "<a href=\"idioma.php\" class=\"menu-formatacao\"><span class=\"fa fa-edit\" aria-hidden=\"true\" ></span><span> Idiomas &nbsp;</span></a>";
    echo "<a href=\"experiencias.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Experiência &nbsp;</span></a>";
    echo "<a href=\"cursos.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cursos Complementares &nbsp;</span></a>";
    echo "<a href=\"formacao.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Formação &nbsp;</span></a>";
    echo "<a href=\"cadastrarCurso.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Curso &nbsp;</span></a>";
    echo "<a href=\"objetivos.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Objetivo &nbsp;</span></a>";
    echo "<a href=\"cadastroempresa.php\" class=\"menu-formatacao\"><span class=\"fas fa-graduation-cap\" aria-hidden=\"true\" ></span><span> Cadastrar Empresa &nbsp;</span></a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
?>

