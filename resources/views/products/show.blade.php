<h1>{{ $products->name }}</h1>
    <p>{{ $products->description }}</p>

    <a href="{{ route('products.edit', $products->id) }}">Editar</a>

    <form method="POST" action="{{ route('products.destroy', $products->id) }}" onsubmit="return confirm('Tem certeza de que deseja excluir este produto?')">
        @csrf
        @method('DELETE')
        <button type="submit">Confirmar Exclusão</button>
    </form>

    <a href="{{ route('products.index') }}">Voltar para a Listagem de Produtos</a>