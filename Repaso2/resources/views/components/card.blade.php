<div class="card mx-auto mt-5" style="max-width: 600px;">
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <form action="{{ route('rutaconfirmaenvio') }}" method="POST" class="form-container w-100">
                @csrf
                <h1 class="text-center">{{$titulo}}</h1>
                <div class="form-group">
                    <label for="isbn">ISBN:</label>
                    <input type="text" name="txtisbn" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" name="txttitulo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" name="txtautor" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="paginas">Páginas:</label>
                    <input type="number" name="txtpaginas" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="año">Año:</label>
                    <input type="number" name="txtaño" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="editorial">Editorial:</label>
                    <input type="text"  name="txteditorial" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email_editorial">Email de Editorial:</label>
                    <input type="email" name="txtemail" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-success w-100">{{$boton}}</button>
            </form>
        </div>
    </div>
</div>