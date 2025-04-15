<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1>FLOWPASS</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#"><strong>FALE COM ESPECIALISTAS</strong></a></li>
                    <li><a href="#"><strong>BENEFÍCIOS</strong></a></li>
                    <li><a href="#"><strong>CADASTRE-SE</strong></a></li>
                    <li><a href="#"><strong>SOBRE NÓS</strong></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="showcase">
        <div class="container">
            <div class="container-flex">
                <div class="text-content">
                    <h1>Sua Central de Gerenciamento de Entrada e Saída Remota</h1>
                    <p><em>O FLOWPASS é o único software pensado para aumentar a performance do controle de acessos para a sua portaria.</em></p>
                    <button class="cta-button"><strong>FALE COM UM ESPECIALISTA</strong></button>
                </div>
                <div class="image-content">
                    <img src="{{ asset('storage/img/mulher.png') }}" alt="Descrição da imagem">
                </div>
            </div>
        </div>
    </section>

    <section id="newsletter">
        <div class="container">
            <h1>Cadastre-se na FlowPass</h1>
            <form>
                <input type="email" placeholder="Insira seu Email...">
                <button type="submit" class="button_1">Subscreva</button>
            </form>
        </div>
    </section>

    <footer>
        <p>FlowPass &copy; 2025</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
</body>
</html>