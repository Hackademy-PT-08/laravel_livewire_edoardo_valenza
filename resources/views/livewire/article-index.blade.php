<div>
    
    <input type="text" wire:model="search" placeholder="Cerca articoli">

    @foreach ($articles as $article)

        <h2>{{$article->title}}</h2>

        <p>{{$article->content}}</p>
        
    @endforeach

</div>
