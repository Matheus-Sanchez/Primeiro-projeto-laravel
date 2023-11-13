<h1>Listagem de Produtos</h1>
@foreach ($products as $product)
    <a href="{{ route('products.show', $product->id) }}">
        <h2>{{ $product->name }}</h2>
    </a>
    <p>{{ $product->description }}</p>
    <hr>
@endforeach

<a href="{{ route('products.create') }}">Adicionar novo produto</a>
