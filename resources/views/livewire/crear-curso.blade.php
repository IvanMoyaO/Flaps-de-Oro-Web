<form wire:submit.prevent="save">
    <label class="input input-bordered flex items-center gap-2">
        <b>Nombre</b>
        <input type="text" class="grow" placeholder="Primero" wire:model.blur="nombre" />
    </label>

    <div>
        @error('nombre') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>

    <label class="input input-bordered flex items-center gap-2">
        <b>Abreviatura</b>
        <input type="text" class="grow" placeholder="1º" wire:model.blur="abreviatura" />
    </label>
    <div>
        @error('abreviatura') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>


    <label class="input input-bordered flex items-center gap-2">
        <b>Titulación</b>
        <select class="select w-full max-w-xs" wire:model.blur="titulacion_id" >
            @foreach(App\Models\Titulacion::all() as $titulacion)
                <option value="{{ $titulacion->id }}">{{ $titulacion->abreviatura }}</option>
            @endforeach
        </select>
    </label>
    <div>
        @error('titulacion_id') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-active btn-primary" type="submit">Guardar</button>
</form>
