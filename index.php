<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cod3r - Curso Desenvolvimento Web com PHP 7</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <!-- MEU CSS -->
    <link rel="stylesheet" href="recursos/css/estilo.css">
</head>
<body>   
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
        
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo roxo">
                    <h3>4.Controle01</h3>
                    <ul>                
                        <li>
                            <a href="exercicio.php?dir=controle01&file=if_else">
                                IF_Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=operadores_relacionais">Operadores Relacionais</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=desafio_pi">Desafio PI</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=operadores_logicos">Operadores Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=desafio_operadores_logicos">Desafio Op. Lógicos</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=operador_ternario">Operador Ternário</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=controle01&file=switch">Switch</a>
                        </li>
                    </ul>
                </div>                                
                <div class="modulo azul">
                    <h3>3. Variáveis</h3>
                    <ul>                                             
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=basico">Básico</a>
                        </li>                      
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_equacao">Desafio Equação</a>
                        </li> 
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a>
                        </li>  
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=variaveldevariavel">Variáveis Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio Variáveis</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor_Referência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=variaveis&file=constante">Constante</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>2. Tipos Básicos</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=int">Inteiro</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=float">Float</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=aritmeticas">Aritméticas</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=desafio_precedencia">Desafio Precedência</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=string">String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=desafio_string">Desafio String</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=booleano">Booleano</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=tiposBasicos&file=conversoes">Conversão</a>
                        </li>
                    </ul>
                </div>
                <div class="modulo verde">
                    <h3>1. Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">Olá PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=html">Integração HTML</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=css">Integração CSS</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=comentarios">Comentários PHP</a>
                        </li>
                        <li>
                            <a href="exercicio.php?dir=basico&file=desafio">Desafio</a>
                        </li>                        
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS - <?php echo date('Y'); ?>
    </footer>
</body>
</html>