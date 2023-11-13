<h1>Criar Novo Anúncio</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div>
        <label for="name">Nome do produto:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Conteúdo:</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <button type="submit">Criar Anúncio</button>
</form>

<a href="{{ route('products.index') }}">Voltar para a Listagem de Produtos</a>
