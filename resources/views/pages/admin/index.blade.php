@extends('layout.app')
@section('content')
    <div class="col-12 mb-2">

                <h3 class="text-center" >Área Administrativa</h3>

    </div>
    <div class="row text-right mb-2">
        <div class="col-md-4 ml-auto">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#modal_colaboradores">
                Adicionar colaborador
            </button>
        </div>
    </div>

  <!-- Basic table -->
<section id="multilingual-datatable">
  <div class="row">
    <div class="col-12">
        <h4 class="mb-2">Lista de Clientes</h4>
    </div>
      <div class="col-12 no-padding-mobile">
          <div class="card">
              <table id="admin-table">
                  <thead>
                    <tr>
                      <th class="" >Nome Completo</th>
                      <th class="" >Email</th>
                      <th class="" >Qnt de Clicks</th>
                      <th class="options" style="max-width: 180px !important">Opções</th>
                    </tr>
                  </thead>
                  <tbody id="body_table_colabs">
                      <tr style="width:100%;">
                        <td>Nome</td>
                        <td>mikewade2k16@gmail.com</td>
                        <td>Número</td>
                        <td>
                            <div class="row last-td">
                               <!-- <div class="col-md-4 col-flex">-->
                                    <button class=" btn btn-primary rounded-circle btn-icon "
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar Colaborador"
                                    data-id="">
                                        <i data-feather='edit'></i>
                                    </button>
                                <!--</div>-->
                                <!-- <div class="col-md-4 col-flex">-->
                                    <button class="btn btn-warning rounded-circle btn-icon"
                                    data-toggle="tooltip" data-placement="top" title="" data-original-title="Deletar Colaborador"
                                        data-id="">
                                        <i data-feather='trash-2'></i>
                                    </button>
                                <!--</div>-->
                                <!-- <div class="col-md-4 col-flex">-->
                                    <button class="btn btn-info rounded-circle btn-icon"   data-target="#modal_info_client"
                                    data-toggle="modal" data-placement="top" title="" data-original-title="Ver Colaborador"
                                        data-id="">
                                        <i data-feather='info'></i>
                                    </button>
                                <!--</div>-->
                            </div>


                        </td>
                      </tr>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>

<!-- Modais -->
<div class="modal fade" id="modal_info_client" tabindex="-1" aria-labelledby="modal_colaboradores" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id=""> Cadastrar Novo Colaborador </h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body">

        <form method="POST" action="">
            @csrf

            <div class="form-group">
            <label for="name">Nome</label>

            <input type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Nome e Sobrenome" required>
            </div>

            <div class="form-group">
            <label for="message">Mensagem</label>

            <input type="text"
                    class="form-control"
                    id="message"
                    name="message"
                    placeholder="ex: Olá, John!" required>
            </div>

            <div class="form-group">
            <label for="phone">Telefone</label>

            <input type="text"
                    class="form-control"
                    id="phone"
                    name="phone"
                    placeholder="ex: 21911112222" required>
            </div>

            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-block">
                Adicionar
            </button>
            </div>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection
