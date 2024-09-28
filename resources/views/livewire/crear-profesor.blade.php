<form wire:submit.prevent="save">
    <label class="input input-bordered flex items-center gap-2">
        <b>Nombre</b>
        <input type="text" class="grow" placeholder="Primero" wire:model.blur="nombre" />
    </label>

    <div>
        @error('nombre') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>

    falta filtro por titulacion

    <label class="input input-bordered flex items-center gap-2">
        <b>Curso</b>
        <select class="select w-full max-w-xs" wire:model.blur="curso_id" >
            @foreach(App\Models\Curso::all() as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nombre }}</option>
            @endforeach
        </select>
    </label>
    <div>
        @error('curso_id') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>


    <button class="btn btn-active btn-primary" type="submit">Guardar</button>
</form>
