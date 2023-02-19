<form action="{{route('comments.show',$post)}}" class="flex flex-col max-w-4xl">
    @csrf
    @if (@isset($item->id))
    <input type="hidden" name='parent_id' value="{{$item->id}}">
    @else

    @endif

    <div class=" ">

        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Comentar</label>
        <textarea id="message" rows="4" name="description"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
            placeholder="Deja tu comentario..."></textarea>


    </div>

    @auth()
    <button type="
submit" class="  p-2 bg-light_blue rounded-md text-white ">Enviar comentario</button>

    @else
    <a href="/login">Enviar comentario</a>
    @endauth

</form>