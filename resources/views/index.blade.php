<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site fan para trabalho escolar</title>
    <link rel="stylesheet" href="assets/styles/style.css" />
</head>
<body>
    <header id="header">
        <h1>Kessoku Band</h1>
        <nav>
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servico">Serviços</a>
            <a href="#contato">Contato</a>
        </nav>
    </header>

    @yield("conteudo")

    <footer id="footer" class="hidden">
        <p>&copy; 2026 - Kessoku Band</p>
        <p>&copy; 2026 - starry</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>