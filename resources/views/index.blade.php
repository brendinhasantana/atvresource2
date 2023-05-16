
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
    <div class="row">
        @if (session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
    </div>
    <h2>Seus Produtos</h2>
    @foreach ($products as $product)  
    <p>ID:{{$product['id']}}</p>
    <p>Produto:{{$product['nome']}}</p>
    <p>Uso:{{$product['uso']}}</p>
    <form action="{{Route('products.destroy',['product'=>$product['id']])}}" method='POST'>
        @csrf
        @method('DELETE')
        <input type="submit" value='excluir'>
    </form>
    @endforeach

    <p>Cadastrar uma <a href="{{Route('products.create')}}">maquiagem</a>  </p>
</body> 
</html>     