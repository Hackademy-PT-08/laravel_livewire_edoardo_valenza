<div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <input type="text" wire:model="title" placeholder="Titolo" value="{{$title}}">

    <textarea wire:model="content" cols="30" rows="10" placeholder="Contenuto">{{$content}}</textarea>

    <input type="button" wire:click="update" value="Modifica">

    <input type="button" wire:click="destroy" value="Elimina">

    <p style="color: {{$color}};">{{$message}}</p>
</div>