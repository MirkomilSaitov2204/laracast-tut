<x-layouts>
    <x-section>

        <x-form method="GET" action="/">
            <div class="form-group">
                <label for="">Mike</label>
                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-info">Submit</button>
        </x-form>

        <form action="/" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-info">DElete</button>
        </form>

    </x-section>
</x-layouts>
