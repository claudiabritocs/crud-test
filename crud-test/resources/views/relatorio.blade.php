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
  <link rel="stylesheet" href="{{ asset('css/relatorio.css') }}">
  <title>Relatório Diário de Estoque - CRUD Teste</title>
</head>
<body>
  <section>
    <div class="cabeçalho">
      <h1>RELATÓRIO DE MOVIMENTAÇÃO DE ESTOQUE</h1>
      <h2>{{ date('d/m/Y', strtotime($dia1)) }}</h2> 
      <div class="calendario">
        <form action="{{ route('dia.update') }}" method="post">
          @csrf
          @method('PUT')
          <input type="date" name="dia" id="dia">
          <input type="submit" value="Escolher Data">
        </form>
      </div>
    </div>

    <h3>PRODUTOS INSERIDOS</h3>
    <div class="table1">
      <table class="table table-hover">
        <th>SKU</th>
        <th>PRODUTO</th>
        <th>ESTOQUE</th>
        <th>TIPO</th>
        <th>SISTEMA</th>

        @foreach ($relatorios as $relatorio)
        <tr>
          <td>{{ $relatorio->SKU }}</td>
          <td>{{ $relatorio->nome }}</td>
          <td>{{ $relatorio->quantidade }}</td>
          <td>{{ $relatorio->tipo }}</td>
          <td>{{ $relatorio->sistema }}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <h3>PRODUTOS RETIRADOS</h3>
    <div class="table1">
      <table class="table table-hover">
        <th>SKU</th>
        <th>PRODUTO</th>
        <th>ESTOQUE</th>
        <th>TIPO</th>
        <th>SISTEMA</th>

        @foreach ($relatorios2 as $relatorio)
        <tr>
          <td>{{ $relatorio->SKU }}</td>
          <td>{{ $relatorio->nome }}</td>
          <td>{{ $relatorio->quantidade }}</td>
          <td>{{ $relatorio->tipo }}</td>
          <td>{{ $relatorio->sistema }}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <h3>PRODUTOS ABAIXO DA QUANTIDADE IDEAL</h3>
    <div class="table1">
      <table class="table table-hover">
        <th>SKU</th>
        <th>PRODUTO</th>
        <th class="red">ESTOQUE</th>

        @foreach ($relatorios3 as $relatorio)
        <tr>
          <td>{{ $relatorio->SKU }}</td>
          <td>{{ $relatorio->nome }}</td>
          <td class="red">{{ $relatorio->quantidade }}</td>
        </tr>
        @endforeach
      </table>
    </div>

    <div class="btn_voltar">
        <a href="{{ route('index') }}" class="a_btn">
          <div>
            VOLTAR
          </div></a>
      </div>

  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>