<?Php
   // Essa variável armazena o conteúdo que calcula a idade de uma pessoa à partir da data de nascimento. Esse cálculo é feito pela própria base de dados.
   $idade = "YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(data_nascimento)))"; 
   
   // Essas variváveis recebem o valor do filtro. Mais tarde, esses dados serão convertidos em query para que o filtro possa funcionar.
   isset($_GET["idadeMinima"]) ? $idadeMinima = $_GET["idadeMinima"] : $idadeMinima = 16;
   isset($_GET["idadeMaxima"]) ? $idadeMaxima = $_GET["idadeMaxima"] : $idadeMaxima = 100;
   isset($_GET["genero"]) ? $genero = $_GET["genero"] : $genero = "a";
   isset($_GET["ordenar"]) ? $ordem = $_GET["ordenar"] : $ordem = 'nome';
   isset($_GET["curso"]) ? $curso = $_GET["curso"] : $curso = '0';
   isset($_GET["cidade"]) ? $cidade = $_GET["cidade"] : $cidade = '';
   
   // Essa é a conexão com a base de dados.
   $conexao = mysqli_connect("localhost", "root", "", "talentos");
   if (!$conexao) {
       echo "Erro ao conectar-se com a base de dados.";
   }
   
   ?>
<html>
   <head>
      <meta charset='UTF-8'>
      <title>Buscar candidatos</title>
      <style>
         
      </style>
   </head>
   <body>
      <div class='conjunto'>
         <div class='busca'>
            <form method='GET'>
               <h2>Filtro</h2>
			   			   
               <label for='genero'>Gênero</label>
               <select name='genero' id='genero'>
                  <option value="a">Homens e Mulheres</option>
                  <option value="h">Somente homens</option>
                  <option value="m">Somente mulheres</option>
               </select>
               <br>
			   
               <label for='idadeMinima'>Idade mínima:</label>
               <input type='number' name='idadeMinima' id='idadeMinima' placeholder='Min' min='16' max='100' value="<?= $idadeMinima ?>">
			   <br>
               
			   <label for='idadeMaxima'>Idade máxima:</label>
               <input type='number' name='idadeMaxima' id='idadeMaxima' placeholder='Max' min='16' max='100' value="<?= $idadeMaxima ?>">
			   <br>
			   
               <label for='curso'>Curso</label>
               <select name='curso' id='curso'>
                  <option value='0'>Qualquer curso...</option>
                  <?Php
                     $resultCurso = mysqli_query($conexao, "SELECT * FROM curso");
                     while ($printCurso = mysqli_fetch_array($resultCurso)) {
                     	echo "<option value='$printCurso[curso_id]'>$printCurso[curso]</option>";
                     }
                     ?>
               </select>
			   <br>
			   
               <label for='cidade'>Cidade</label>
               <select name='cidade' id='cidade'>
                  <option value=''>Qualquer uma...</option>
                  <?Php
                     $resultCidade = mysqli_query($conexao, "SELECT cidade FROM endereco");
                     while ($printCidade = mysqli_fetch_array($resultCidade)) {
                     	echo "<option value='$printCidade[cidade]'>$printCidade[cidade]</option>";
                     }
                     ?>
               </select>
               <br>
			   
               <label for='ordenar'>Ordenar por</label>
               <select name='ordenar' id='ordenar'>
                  <option value='nome'>Nome</option>
                  <option value='idade'>Idade</option>
               </select>
               <br>
               <br>
			   
               <button type='submit'>Filtrar</button>
            </form>
			
         </div>
         <div class='resultados'>
            <?Php
               
			   //Se o valor dos filtros for padrão, então ele não adicionará condições à pesquisa.
			   // Por exemplo: Se não for escolhido um gênero em específico, ou seja "$genero = 'a'", o pedaço da query responsável pela busca não será inserido na query.
               ($genero != "a") ? $generoBusca = "AND genero LIKE '$genero'" : $generoBusca = ''; 
               ($curso != '0') ? $cursoBusca = "AND curso_id = $curso" : $cursoBusca = '';
               ($cidade != '') ? $cidadeBusca = "AND endereco.cidade LIKE '$cidade'" : $cidadeBusca = '';
                // A ordenação da busca recebe obrigatoriamente o valor
				$ordemBusca = "ORDER BY $ordem";				
				
				// Essa é a query responsável pela busca na base, note que várias variáveis estão inseridas dentro dela. Essas variáveis contém (ou não) os valores necessários pra efetuar a busca.
				$sqlQuery  = "SELECT candidato.nome,candidato.sobrenome,$idade AS idade,endereco.cidade,endereco.endereco_id FROM candidato INNER JOIN endereco WHERE $idade >= $idadeMinima AND $idade <= $idadeMaxima AND endereco.endereco_id = candidato.endereco_id $generoBusca $cidadeBusca $cursoBusca $ordemBusca";
				$resultado = mysqli_query($conexao, $sqlQuery);
                while ($imprime = mysqli_fetch_array($resultado)) {
                   echo "<div class='candidato'>";
                   echo "$imprime[nome] $imprime[sobrenome] <br> $imprime[idade] Anos <br> $imprime[cidade]";
                   echo "</div> <br> ";
                }
               
               //echo $sqlQuery; // Imprimir na tela a query que é executada, a fim de encontrar erros apenas.
               
               ?>
         </div>
      </div>
   </body>
</html>
<?Php
   mysqli_close($conexao); 
   ?>