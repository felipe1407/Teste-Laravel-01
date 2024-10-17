
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <title>Pagina Home - Super Gestão</title>
</head>
<body>
    <header>
    <ul>
        <li>
            <a href="{{ route('site.home')}}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site.sobrenos')}}">Sobre nós</a>
        </li>         
        <li>
            <a href="{{ route('site.contato')}}">Contato</a>
        </li>
    
    </ul>
</header>

<div class="conteudo-pagina">
    <div class="titulo-pagina">
        <h1>Seja bem vindo</h1>
    </div>

    <div class="informacao-pagina">
        <div class="contato-principal">

<section>
    <form>
            <label for="name">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="motivo">Qual o motivo do contato:</label>

   <select class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="">Dúvida</option>
        <option value="">Elogio</option>
        <option value="">Reclamação</option>
        </select>

    <label for="mensagem">Preencha aqui a sua mensagem:</label>
    <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

    <button type="submit">Enviar</button>
  </form>

</section>

        </div>
    </div>
</div>

<div class="rodape">
    <div class="redes-sociais">
        <h2>Redes sociais</h2>
        <img src="{{ asset ('img/facebook.png')}}">
        <img src="{{ asset ('img/linkedin.png')}}">
        <img src="{{ asset ('img/youtube.png')}}">
    </div>
    <div class="area-contato">
        <h2>Contato</h2>
        <span>(11) 3333-4444</span>
        <br>
        <span>supergestao@dominio.com.br</span>
    </div>
    <div class="localizacao">
        <h2>Localização</h2>
        <img src="{{ asset ('img/mapa.png')}}">
    </div>
</div>





             
          
    
    
</body>
</html>
   
    
