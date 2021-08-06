@extends('layout.app')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-lg-12" style="display: flex; gap: 12px">
                <h1>Colaboradores</h1>
            </div>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_colaboradores">
                Adicionar colaborador
            </button>
        </div>
    </div>

    <!-- Basic table -->
    <section id="multilingual-datatable">
        <div class="row">

            <div class="col-12 no-padding-mobile">
                <div class="card">
                    @if ($alertFm = Session::get('success'))
                        <div class="row">
                            <div class="col-md-5">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $alertFm }}</strong>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($alertFm = Session::get('error'))
                        <div class="row">
                            <div class="col-md-5">
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $alertFm }}</strong>
                                </div>
                            </div>
                        </div>
                    @endif
                    <table id="colabs-table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Qnt de Clicks</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody id="body_table_colabs">
                            @foreach ($collaborators as $collaborator)
                                <tr style="width:100%;">
                                    <td>{{ $collaborator->name ?? '' }}</td>
                                    <td>{{ $collaborator->phone ?? 'sem email' }}</td>
                                    <td class="d-flex justify-content-center align-items-center">
                                        <h5 class="mr-1">{{ $collaborator->count }}</h5>
                                        <button class="ml-1 btn btn-outline-warning rounded-circle btn-icon"
                                            data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Resetar Clicks" data-id="">
                                            <i data-feather='refresh-ccw'></i>
                                        </button>
                                    </td>
                                    <td class="">
                                        <div class="row last-td">
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class=" btn-outline-primary rounded-circle btn-icon "
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Dá Play/Pause no Colaborador" data-id="">
                                                <!--<i data-feather='play'></i>-->
                                                <i data-feather='pause'></i>
                                            </button>
                                            <!--</div>-->
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-outline-danger rounded-circle btn-icon"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Deletar Colaborador" data-id=""
                                                onclick="destroy({{ $collaborator->id }})">
                                                <i data-feather='trash-2'></i>
                                            </button>
                                            <!--</div>-->
                                            <!-- <div class="col-md-4 col-flex">-->
                                            <button class="btn btn-outline-info rounded-circle btn-icon"
                                                data-toggle="tooltip" data-placement="top" title=""
                                                data-original-title="Ver Colaborador" data-id="">
                                                <i data-feather='info'></i>
                                            </button>
                                            <!--</div>-->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        function destroy(id) {
            $.ajax({
                type: "DELETE",
                dataType: "json",
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                url: 'colaboradores/' + id,
                success: function(response) {
                    location.reload();
                }
            });
        }
    </script>
@endsection
