<form wire:submit.prevent="save">
      <label class="input input-bordered flex items-center gap-2">
        <b>Nombre</b>
        <input type="text" class="grow" placeholder="Grado en Ingeniería Aeroespacial" wire:model.blur="nombre" />
    </label>

    <div>
        @error('nombre') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>

    <label class="input input-bordered flex items-center gap-2">
        <b>Abreviatura</b>
        <input type="text" class="grow" placeholder="GIA" wire:model.blur="abreviatura" />
    </label>
    <div>
        @error('abreviatura') <span class="alert alert-error">{{ $message }}</span> @enderror
    </div>

    <button class="btn btn-active btn-primary" type="submit">Guardar</button>
</form>

