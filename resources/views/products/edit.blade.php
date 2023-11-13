<form method="PRODUCTS" action="{{ route('PRODUCTS.update', $products->id) }}">
<h1>Editar Produto: {{ $product->name }}</h1>

<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="price">Preço:</label>
        <input type="text" name="price" value="{{ $product->price }}" class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>

<a href="{{ route('products.index') }}">Voltar para a Listagem de Produtos</a>
