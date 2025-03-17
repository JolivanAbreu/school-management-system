<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="../../css/Aluno/CAluno.css">

    <title>Gerenciamento de Alunos</title>
</head>

<body>

    <!-- NAVBAR -->
    <header>

        <div class="Navbar">

            <a href="#" class="Logo">Logo</a>
            <div class="Hamburger" onclick="toggleMenu()">☰</div>
            <ul class="Nav-menu">
                <li class="Nav-item"><a href="#">Institucional <i
                            class="uil uil-angle-down"></i> </a>
                    <ul>
                        <li><a href="#">Calendario Educacional</a></li>
                        <li><a href="#">Grandes Conquistas</a></li>
                        <li><a href="#">Sedes</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </li>
                <li class="Nav-item"><a href="#">Educação <i
                            class="uil uil-angle-down"></i>
                    </a>
                    <ul>
                        <li><a href="#">Educação Infantil</a></li>
                        <li><a href="#">Educação Fundamental I</a></li>
                        <li><a href="#">Educação Fundamental II</a></li>
                        <li><a href="#">Ensino Médio</a></li>
                    </ul>
                </li>
                <li class="Nav-item"><a href="#">Contatos <i
                            class="uil uil-angle-down"></i>
                    </a>
                    <ul>
                        <li><a href="#">Ramais</a></li>
                        <li><a href="#">Ouvidoria</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                    </ul>
                </li>
                <li class="Nav-item"><a href="./Admin.php"
                        class="Nav-item">Tela Inicial</a></li>
            </ul>

        </div>

    </header>
    <!-- NAVBAR -->

    <!-- CADASTRO -->
    <div class="Cadastro">
        <section class="Alunos">
            <h2 class="H2Aluno"><i class="fas fa-user"></i> Cadastro de Alunos</h2>
            <form action="../../php/Aluno/CAluno.php" method="POST" class="AlunosForm">

                <label for="alunoNome" class="LabelAluno">Nome:</label>
                <input type="text" name="nome" id="alunoNome" class="InputAlunos" required>

                <label for="alunoCpf" class="LabelAluno">CPF:</label>
                <input type="text" name="cpf" id="alunoCpf" class="InputAlunos" required>

                <label for="alunoEmail" class="LabelAluno">Email:</label>
                <input type="email" name="email" id="alunoEmail" class="InputAlunos" required>

                <label for="alunoDataNascimento" class="LabelAluno">Data de Nascimento:</label>
                <input type="date" name="data_nascimento" id="alunoDataNascimento" class="InputAlunos" required>

                <label for="alunoSenha" class="LabelAluno">Senha:</label>
                <input type="password" name="senha" id="alunoSenha" class="InputAlunos" required>

                <button type="submit" class="ButtonAlunos"><i class="fas fa-plus-circle"></i> Adicionar Aluno</button>
            </form>
        </section>
    </div>
    <!-- CADASTRO -->

    <!-- VISUALIZAÇÃO DE ALUNOS -->

    <?php include('../../php/Aluno/LAluno.php'); ?>

    <!-- VISUALIZAÇÃO DE ALUNOS -->

    <!-- BOTÃO DE ROLAGEM -->
    <button id="voltar">
        <i class="fa-solid fa-caret-up"></i>
    </button>

    <script src="../../js/index.js"></script>
</body>

</html>