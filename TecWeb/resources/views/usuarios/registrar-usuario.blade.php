<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<link href="{{ asset('/css/form.css') }}" rel="stylesheet">
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container-registro mt-5">

    <form method="post" action="{{route('usuarioStorage')}}">

        @csrf

        <div class="form-group form-registro">
            <label>Matricula</label>
            <input type="text" class="form-control {{$errors->has('matricula') ? 'error' : ''}}" name="matricula" id="matricula">

            <!-- Error -->
            @if ($errors->has('matricula'))
            <div class="error">
                {{$errors->first('matricula')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Nombre</label>
            <input type="text" class="form-control {{$errors->has('nombre') ? 'error' : ''}}" name="nombre" id="nombre">

            <!-- Error -->
            @if ($errors->has('nombre'))
            <div class="error">
                {{$errors->first('nombre')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido paterno</label>
            <input type="text" class="form-control {{$errors->has('apellidoPaterno') ? 'error' : ''}}" name="apellidoPaterno" id="apellidoPaterno">

            <!-- Error -->
            @if ($errors->has('apellidoPaterno'))
            <div class="error">
                {{$errors->first('apellidoPaterno')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Apellido materno</label>
            <input type="text" class="form-control {{$errors->has('apellidoMaterno') ? 'error' : ''}}" name="apellidoMaterno" id="apellidoMaterno">

            <!-- Error -->
            @if ($errors->has('apellidoMaterno'))
            <div class="error">
                {{$errors->first('apellidoMaterno')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Fecha Nacimiento</label>
            <input type="date" class="form-control {{$errors->has('fechaNacimiento') ? 'error' : ''}}" name="fechaNacimiento" id="fechaNacimiento">

            <!-- Error -->
            @if ($errors->has('fechaNacimiento'))
            <div class="error">
                {{$errors->first('fechaNacimiento')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Correo</label>
            <input type="email" class="form-control {{$errors->has('correo') ? 'error' : ''}}" name="correo"
                id="correo">

            @if ($errors->has('correo'))
            <div class="error">
                {{$errors->first('correo')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Celular</label>
            <input type="text" class="form-control {{$errors->has('telefono') ? 'error' : ''}}" name="celular" id="celular">

            @if ($errors->has('celular'))
            <div class="error">
                {{$errors->first('celular')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Calle</label>
            <input type="text" class="form-control  $errors->has('calle') ? 'error' : '' " name="calle" id="calle">

            @if ($errors->has('calle'))
            <div class="error">
                {{$errors->first('calle')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Colonia</label>
            <input type="text" class="form-control {{$errors->has('colonia') ? 'error' : ''}}" name="colonia" id="colonia">

            <!-- Error -->
            @if ($errors->has('colonia'))
            <div class="error">
                {{$errors->first('colonia')}}
            </div>
            @endif
        </div>

        <div class="form-group form-registro">
            <label>Codigo postal</label>
            <input type="text" class="form-control {{$errors->has('codigoPostal') ? 'error' : ''}}" name="codigoPostal" id="codigoPostal">

            <!-- Error -->
            @if ($errors->has('codigoPostal'))
            <div class="error">
                {{$errors->first('codigoPostal')}}
            </div>
            @endif
        </div>

        <div class="div-btn-submit">
            <input type="submit" name="send" value="Submit" class="btn-submit">
        </div>
    </form>
</div>
