
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">

</head>
<body>
    <h1>Makes be </h1>
    <h2>Seus Produtos</h2>
    @foreach ($products as $product)  
    <p>ID:{{$product['id']}}</p>
    <p>Produto:{{$product['nome']}}</p>
    <p>Uso:{{$product['uso']}}</p>
    @endforeach

    <button>Editar</button>
    <button>Excluir</button>
    <button>Criar</button>
</body> 
</html>