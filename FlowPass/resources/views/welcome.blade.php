<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FLOWPASS</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
>>>>>>> a401f27aecdc6b0362d4e0d1464ed03c04e77fe7
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
<<<<<<< HEAD
                    <button class="cta-button"><strong>FALE COM UM ESPECIALISTA</strong></button>
                </div>
                <div class="image-content">
                    <img src="{{ asset('storage/img/mulher.png') }}" alt="Descrição da imagem">
=======
                    <button class="cta-button"><a href="{{ route('segunda.pagina') }}" class="button"><strong>FALE COM UM ESPECIALISTA</strong></a></button>
                </div>
                <div class="image-content">
                    <img src="https://i.pinimg.com/736x/29/60/04/296004fd8736a412a6e0302e5047cfc9.jpg" alt="Descrição da imagem">
>>>>>>> a401f27aecdc6b0362d4e0d1464ed03c04e77fe7
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
<<<<<<< HEAD

=======
>>>>>>> a401f27aecdc6b0362d4e0d1464ed03c04e77fe7
    <footer>
        <p>FlowPass &copy; 2025</p>
    </footer>

    <script src="script.js"></script>
</body>
<<<<<<< HEAD
</html>
</body>
=======
>>>>>>> a401f27aecdc6b0362d4e0d1464ed03c04e77fe7
</html>