
@extends('layout.app')

@section('content-header')
<div class="col-12">
<div class="row">
    <div class="col-lg-12" style="display: flex; gap: 12px">
        <h1>Colaboradores</h1>
    </div>
</div>
</div>
@endsection

@section('content-body')
<div class="row text-right">
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
      <div class="col-12 no-padding-mobile">
          <div class="card">
              <table id="example">
                  <thead>
                    <tr>
                      <th >Nome Completo</th>
                      <th >Email</th>
                      <th >Qnt de Clicks</th>
                      <th >Opções</th>
                    </tr>
                  </thead>
                  <tbody id="body_table_colabs">
                      <tr style="width:100%;">
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Número</td>

                      </tr>

                  </tbody>
              </table>
          </div>
      </div>
  </div>
</section>
@endsection
