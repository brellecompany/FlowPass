<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fale com Especialistas | Flowpass</title>
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
                    <li><a href="#"><strong>BENEFÍCIOS</strong></a></li>
                    <li><a href="#"><strong>CADASTRE-SE</strong></a></li>
                    <li><a href="#"><strong>SOBRE NÓS</strong></a></li>
                </ul>
            </nav>
        </div>
    </header>

<h1>Fale com Especialistas</h1>

<h2>Nossos Especialistas</h2>
<div class="especialistas">
  <div class="especialista">
    <h3>Sarah Campos Andrade</h3>
    <p><strong>Email:</strong> sarah.campos21@gmail.com</p>
    <p><strong>Telefone:</strong> (12) 99140-9126</p>
  </div>

  <div class="especialista">
    <h3>Catharina Silva Passos</h3>
    <p><strong>Email:</strong> catharinapassos_0@gmail.com</p>
    <p><strong>Telefone:</strong> (12) 99881-6522</p>
  </div>

  <div class="especialista">
    <h3>Henrico Costa Felício</h3>
    <p><strong>Email:</strong> henricocf@gmail.com</p>
    <p><strong>Telefone:</strong> (12) 98823-1678</p>
  </div>
</div>

<form action="#" method="post">
  <h2>Envie uma mensagem</h2>

  <label for="nome">Seu nome</label>
  <input type="text" id="nome" name="nome" required>

  <label for="email">Seu e-mail</label>
  <input type="email" id="email" name="email" required>

  <label for="assunto">Escolha um especialista</label>
  <select id="assunto" name="assunto" required>
    <option value="">Selecione</option>
    <option value="fernanda">Sarah Campos Andrade</option>
    <option value="lucas">Catharina Silva Passos</option>
    <option value="juliana">Henrico Costa Felício</option>
  </select>

  <label for="mensagem">Mensagem</label>
  <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

  <button type="submit">Enviar Mensagem</button>

</form>
</div>
<footer>
<p>FlowPass &copy; 2025</p>
</footer>
</body>
</html>
