@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endsection('css')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Profesores</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">  
                
            
                        @can('crear-profesores')
                        <a class="btn btn-warning mb-3" href="{{ route('profesores.create') }}">Despachar</a>
                        @endcan
                        <a class="btn btn-danger mb-3" href="{{ route('profesores.pdf') }}">PDF</a>
            
                        <table id="profesores" class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre</th>
                                    <th style="color:#fff;">Apellido</th>
                                    <th style="color:#fff;">Materia</th> 
                                    <th style="color:#fff;">Despacho</th>
                                    <th style="color:#fff;">Fecha</th>                                     
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($profesores as $profesore)
                            <tr>
                                <td style="display: none;">{{ $profesore->id }}</td>                                
                                <td>{{ $profesore->nombre }}</td>
                                <td>{{ $profesore->apellido }}</td>
                                <td>{{ $profesore->materia}}</td>
                                <td>{{ $profesore->estado }}</td>
                                <td>{{ $profesore->created_at }}</td>
                                <td>
                                    <!-- <form action="{{ route('profesores.destroy',$profesore->id) }}" method="POST">                                        
                                        @can('editar-profesores')
                                        <a class="btn btn-info" href="{{ route('profesores.edit',$profesore->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-profesores')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan -->
                                    </form>
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
    </section>
    @section('js')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json"></script>

<script>
    $('#profesores').DataTable( {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
    }

} );
</script>
</script>
@endsection('js')
@endsection


