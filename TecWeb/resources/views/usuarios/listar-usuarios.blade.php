<link href="{{ asset('/css/tarjetas.css') }}" rel="stylesheet">
<div class="titulo-lista">
    <h1>Lista de usuarios</h1>
</div>
<div class="contenedor-tarjetas">
    @foreach ($usuarios as $usuario)
        <div class="tarjeta-usuario">
            <div class="seccion-inferior">
                <div>
                    <strong>Matricula: </strong>
                    <span>{{$usuario->matricula}}</span>
                </div>
                <div>
                    <strong>Nombre: </strong>
                    <span>{{$usuario->nombre}}</span>
                </div>
                <div>
                    <strong>Apellido paterno: </strong>
                    <span>{{$usuario->apellidoPaterno}}</span>
                </div>
                <div>
                    <strong>Apellido materno: </strong>
                    <span>{{$usuario->apellidoMaterno}}</span>
                </div>
                <div>
                    <strong>Fecha Nacimiento: </strong>
                    <span>{{$usuario->fechaNacimiento}}</span>
                </div>
                <div>
                    <strong>Correo: </strong>
                    <span>{{$usuario->correo}}</span>
                </div>
                <div>
                    <strong>Celular: </strong>
                    <span>{{$usuario->celular}}</span>
                </div>
                <div>
                    <strong>Calle: </strong>
                    <span>{{$usuario->calle}}</span>
                </div>
                <div>
                    <strong>Colonia: </strong>
                    <span>{{$usuario->colonia}}</span>
                </div>
                <div>
                    <strong>Codigo postal: </strong>
                    <span>{{$usuario->codigoPostal}}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>
