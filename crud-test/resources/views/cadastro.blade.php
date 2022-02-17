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
  <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
  <title>Cadastro de Produtos - CRUD Teste</title>
</head>
<body>
  <section>
    
    <h2>Cadastro de Produtos - CRUD Teste</h2>
    
    <div class="center">
      
      <form action="{{ route('store')}}" method="post">
        @csrf
        <label for="">SKU (Código):</label>
        <input type="text" name="SKU">
        <br>
        <label for="">Nome do Produto:</label>
        <input type="text" name="nome">
        <br>
        <label for="">Quantidade:</label>
        <input type="number" name="quantidade">
        <br>
        <input type="hidden" name="sistema" value="Local">
        <input type="submit" value="Cadastrar Produto">
      </form>

      <div class="btn_voltar">
        <a href="{{ route('index') }}" class="a_btn">
        <div>
          VOLTAR
      </div></a>
    
    </div>
  </section>
</body>
</html>