<x-layout>

    <h1>Contatore</h1>

    @livewire('counter')

    <h1>Titolo</h1>

    @livewire('form')

    <form action="#" method="post">

        <input type="text" name="titolo" id="titolo" placeholder="Titolo">

        <input type="submit" value="Aggiungi">

    </form>

</x-layout>