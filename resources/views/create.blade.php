<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/chota@latest">
</head>
<body>
    <h1>Adicione uma make</h1>
    
    <form action="{{Route('products.store')}}" method='POST'>
    @csrf

        <div>
            <label for="title">ID do produto</label>
            <input type="number" id="id" name="id">
        </div>
        <div>
            <label for="title">Produto</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="title">Uso</label>
            <input type="text" id="uso" name="uso">
        </div>
        <input type="submit" value='create'>
    </form>
</body>
</html>