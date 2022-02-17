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
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <title>Consulta de Produtos - CRUD Teste</title>
</head>
<body>
  <section>
    <div class="center">
      <h1>Produtos - App Teste</h1>
      <div class="btns_cima">
        <div class="a_novo">
          <a href="/relatorio"><div class="btn_novo">
            RELATÓRIO
          </div></a>
          <div class="a_novo1">
          <a href="/cadastro"><div class="btn_novo">
            NOVO PRODUTO
          </div></a>
        </div>
      </div>

      <table class="table table-hover">
        <th>SKU</th>
        <th>PRODUTO</th>
        <th>ESTOQUE</th>
        <th>GERENCIAR</th>

        @foreach ($produtos as $produto)
        <tr>
          <td>{{ $produto->SKU }}</td>
          <td>{{ $produto->nome }}</td>
          <td class="qnt">
            <a href="{{ route('editar.list', $produto->id)}}" class="a_alterar">
              <div class="btn_menos">
                -
              </div>
            </a>
            {{ $produto->quantidade }}
            <a href="{{ route('editar.list2', $produto->id)}}" class="a_alterar">
              <div class="btn_mais">
                +
              </div>
            </a>
          </td>
          <td>
            <div class="manager">
              <a href="{{ route('atualizar', $produto->id) }}"><ion-icon name="build"></ion-icon></a>

              <form action="{{ route('destroy', $produto->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="trashbutton"><ion-icon name="trash" class="trash"></ion-icon></button>
              </form>
            </div>
          </td>
        </tr>
        @endforeach

      </table>

    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>

</html>