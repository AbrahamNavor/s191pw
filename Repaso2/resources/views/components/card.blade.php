<div class="container mt-5">

    @if(session('exito'))
    <x-alert tipo="success">{{ session('exito') }} </x-alert>
    @endif

    @if(session('exito'))
    <script>
        alertify.success('Todo correcto: Libro "{{ exito('$libro') }}" guardado');
    </script>
@endif

    <div class="card mx-auto mt-5" style="max-width: 600px;">
        <div class="card-body">
            <form action="{{ route('rutaconfirmaenvio') }}" method="POST" class="form-container w-100">
                @csrf
                <h1 class="text-center">{{ $titulo }}</h1>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" name="txtisbn" value="{{ old('txtisbn') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
                </div>
                <div class="form-group">
                    <label for="titulo">{{ __('Titulo') }}:</label>
                    <input type="text" name="txttitulo" value="{{ old('txttitulo') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
                </div>
                <div class="form-group">
                    <label for="autor">{{ __('Autor') }}:</label>
                    <input type="text" name="txtautor" value="{{ old('txtautor') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txtautor') }}</small>
                </div>
                <div class="form-group">
                    <label for="paginas">{{ __('Paginas') }}:</label>
                    <input type="number" name="txtpaginas" value="{{ old('txtpaginas') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txtpaginas') }}</small>
                </div>
                <div class="form-group">
                    <label for="año">{{ __('Año') }}:</label>
                    <input type="number" name="txtaño" value="{{ old('txtaño') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txtaño') }}</small>
                </div>
                <div class="form-group">
                    <label for="editorial">{{ __('Editorial') }}:</label>
                    <input type="text" name="txteditorial" value="{{ old('txteditorial') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txteditorial') }}</small>
                </div>
                <div class="form-group">
                    <label for="email_editorial">{{ __('Email de') }}Email de Editorial:</label>
                    <input type="email" name="txtemail" value="{{ old('txtemail') }}" class="form-control">
                    <small class="text-danger fst-italic">{{ $errors->first('txtemail') }}</small>
                </div>
                <button type="submit" class="btn btn-success w-100">{{ $boton }}</button>
            </form>
        </div>
    </div>
</div>