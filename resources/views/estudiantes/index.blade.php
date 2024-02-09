@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection('css')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Estudiantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div>  
                        @can('crear-estudiantes')
                        <a class="btn btn-warning mb-3" href="{{ route('estudiantes.create') }}">Despachar</a>
                        @endcan
                        <a class="btn btn-danger mb-3" href="{{ route('estudiantes.pdf') }}">PDF</a>
                            </div>
                            
                        <table id="estudiantes" class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Apellido</th>
                                    <th style="color:#fff;">Año</th>
                                    <th style="color:#fff;">Seccion</th> 
                                    <th style="color:#fff;">Despacho</th>
                                    <th style="color:#fff;">Fecha</th>
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td style="display: none;">{{ $estudiante->id }}</td>                                
                                <td>{{ $estudiante->nombre }}</td>
                                <td>{{ $estudiante->apellido }}</td>
                                <td>{{ $estudiante->año }}</td>
                                <td>{{ $estudiante->seccion }}</td>
                                <td>{{ $estudiante->estado }}</td>
                                <td>{{ $estudiante->created_at }}</td>
                                <td>
                                    <!-- <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">                                        
                                        @can('editar-estudiantes')
                                        <a class="btn btn-info" href="{{ route('estudiantes.edit',$estudiante->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-estudiantes')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form> -->
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"></script>

<script>
    
    $('#estudiantes').DataTable( {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
    }

} );
</script>
@endsection('js')

@endsection

