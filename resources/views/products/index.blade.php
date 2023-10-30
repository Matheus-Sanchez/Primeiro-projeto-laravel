<h1>Listagem de Produtos</h1>
@foreach ($products as $products)
    <a href="{{ route('posts.show', $post->id) }}">
        <h2>{{ $post->title }}</h2>
    </a>
    <p>{{ $post->content }}</p>
    <hr>
    @endforeach

<a href="{{ route('posts.create') }}">Adicionar novo produto</a>