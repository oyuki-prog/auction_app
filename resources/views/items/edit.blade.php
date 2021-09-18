<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>商品更新フォーム</h1>
    <form action="/items/{{ $item->id }}" method="POST">
        @csrf
        @method('PATCH')
        <p>
            <label for="name">商品名</label>
            <input type="text" name="name" value="{{ $item->name }}">
        </p>
        <p>
            <label for="description">商品詳細</label>
            <input type="text" name="description" value="{{ $item->description }}">
        </p>
        <p>
            <label for="price">価格</label>
            <input type="text" name="price" value="{{ $item->price }}">
        </p>
        <p>
            <label for="seller">出品者</label>
            <input type="text" name="seller" value="{{ $item->seller }}">
        </p>
        <p>
            <label for="email">電子メール</label>
            <input type="text" name="email" value="{{ $item->email }}">
        </p>
        <p>
            <label for="image_url">商品画像URL</label>
            <input type="text" name="image_url" value="{{ $item->image_url }}">
        </p>

        <input type="submit" value="更新">
    </form>
</body>
</html>
