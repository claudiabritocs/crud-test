<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>Consulta de Produtos - CRUD Teste</title>
</head>
<body>
  <section class="tabelaPrincipal">
    <div class="center">
      
      <div class="cabecalho">
        <h3>SKU</h3>
        <h3>Produto</h3>
        <h3>Estoque</h3>
        <h3>Add/Remover</h3>
      </div>

      <div class="linha">
        <p class="item1">00001</p>
        <p class="item2">Big Bang</p>
        <p class="item3">01</p>
        <div class="item4">
          <a href="">img1</a>
          <a href="">img2</a>
        </div>
      </div>
      
    </div>
  </section>
</body>
</html>

<h1>Hello, world! <a href="{{ __('Log Out') }}">Teste!!!</a></h1>




<!-- https://youtu.be/Nr-WnIK41Rs?t=1659
  @csrf

  <x-dropdown-link :href="route('logout')"
          onclick="event.preventDefault();
                      this.closest('form').submit();">
      {{ __('Log Out') }}
  </x-dropdown-link>
</form> -->