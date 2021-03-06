<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/adicionar.css') }}">
  <title>Adicionar ao Estoque - CRUD Teste</title>
</head>
<body>
  <section>
    <h2>Adicionar ao Estoque - CRUD Teste</h2>

    <div class="center">
      <h3>DADOS DO PRODUTO</h3>
      <div class="info">
        <label>{{ $id->SKU }}</label>
        <label>{{ $id->nome }}</label>
        <label>QUANTIDADE ATUAL: {{ $id->quantidade }}</label>
      </div>

        <form class="add" action="{{ route('increment', ['id' => $id->id]) }}" method="post">
          @csrf
          @method('PUT')
          <h4>ADICIONAR</h4>
          <p>Insira a quantidade a ser adicionada ao estoque.</p>
          <input type="number" name="quantidade">
          <br>
          <input type="submit" value="Adicionar quantidade">
        </form>

        <div class="btn_voltar">
          <a href="{{ route('index') }}" class="a_btn">
          <div>
            VOLTAR
        </div></a>
      </div>
    </div>
  </section>
</body>
</html>