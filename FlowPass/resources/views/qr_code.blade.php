@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Bater Ponto</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <a href="{{ route('welcome') }}" class="nav"><h1>FLOWPASS</h1></a>
            </div>
            <nav>
                <a href="{{ route('segunda.pagina') }}" class="rotas"><strong>FALE COM UM ESPECIALISTA  </strong></a>
                <a href="#"><strong>BENEFÍCIOS  </strong></a></li>
                <a href="#"><strong>Perfil  </strong></a></li>
            </nav>
        </div>
    </header>
    
  <div class="pontada">
    <h1>Registro de Ponto</h1>
    <input type="text" id="nome" placeholder=" Digite seu nome">
    <input type="text" id="chapa" placeholder=" Digite o número da chapa">
    <button class="botao2" onclick="baterPonto()">Bater Ponto</button>

    <h2>Quem já bateu ponto:</h2>
    <div id="listaPonto" class="ponto-lista"></div>
  </div>

  <script>
    const lista = [];

    function baterPonto() {
      const nomeInput = document.getElementById("nome");
      const chapaInput = document.getElementById("chapa");
      const nome = nomeInput.value.trim();
      const chapa = chapaInput.value.trim();

      if (nome === "" || chapa === "") {
        alert("Preencha todos os campos.");
        return;
      }

      const jaExiste = lista.find(item => item.chapa === chapa);
      if (jaExiste) {
        alert(`A chapa ${chapa} já bateu ponto (${jaExiste.nome}).`);
        nomeInput.value = "";
        chapaInput.value = "";
        return;
      }

      const dataHora = new Date();
      const ponto = {
        nome: nome,
        chapa: chapa,
        dataHora: dataHora.toLocaleString()
      };

      lista.push(ponto);
      atualizarLista();

      nomeInput.value = "";
      chapaInput.value = "";
    }

    function atualizarLista() {
      const listaPonto = document.getElementById("listaPonto");
      listaPonto.innerHTML = "";

      lista.forEach(ponto => {
        const div = document.createElement("div");
        div.className = "pessoa";
        div.innerHTML = `
          <strong>${ponto.nome}</strong>
          <span>Chapa: ${ponto.chapa}</span>
          <span>Data/Hora: ${ponto.dataHora}</span>
        `;
        listaPonto.appendChild(div);
      });
    }
  </script>
  
  <footer>
    <p>FlowPass &copy; 2025</p>
</footer>
</body>
</html>