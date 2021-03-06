<h1>Cadastar post</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store')}}" method="POST">
    @csrf
    <input type="text" name="title" id="title" value="{{ old('title') }}">
    <textarea name="content" id="content" cols="30" rows="4">{{ old('content') }}</textarea>
    <button type="submit">Enviar</button>
</form>