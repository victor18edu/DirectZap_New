 <!-- Modais -->
 <div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
 aria-hidden="true">
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

                     <input type="text" class="form-control" id="name" name="name" placeholder="Nome e Sobrenome"
                         required>
                 </div>

                 <div class="form-group">
                     <label for="message">Mensagem</label>

                     <input type="text" class="form-control" id="message" name="message"
                         placeholder="ex: Olá, John!" required>
                 </div>

                 <div class="form-group">
                     <label for="phone">Telefone</label>

                     <input type="text" class="form-control" id="phone" name="phone"
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

<div class="modal fade" id="pixelModal" tabindex="-1" aria-labelledby="PixelModal" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered ">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal">
                 Adicionar Pixel
             </h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
             <form method="post" action="">
                 @csrf

                 <div class="form-group">
                     <p class="p-1">Insira abaixo seu Pixel</p>

                     <input type="number" class="form-control" id="pixel" name="pixel"
                         placeholder="Ex: 1282707308773467" required>
                 </div>

                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary btn-block">Salvar</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="modal_colaboradores" tabindex="-1" aria-labelledby="modal_colaboradores"
 aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="modal_colaboradores">Colaborador</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
             <form method="POST" action="{{ route('colaboradores.store') }}">
                 @csrf

                 <div class="form-group">
                     <label for="name">Nome</label>

                     <input type="text" class="form-control" id="name" name="name"
                         placeholder="Nome e Sobrenome">
                 </div>

                 <div class="form-group">
                     <label for="message">Mensagem</label>

                     <input type="text" class="form-control" id="message" name="message"
                         placeholder="ex: Olá, John!">
                 </div>

                 <div class="form-group">
                     <label for="phone">Telefone</label>

                     <input type="text" class="form-control" id="phone" name="phone"
                         placeholder="ex: 21911112222">
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

<div class="modal fade" id="distriCod" tabindex="-1" aria-labelledby="distriCod" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal"> Configurações</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
             <form method="POST" action="">
                 @csrf

                 <div class="form-group">
                     <p class="p-1">
                         Olá, insira no campo abaixo o número de vezes que um colaborador será solicitado
                         antes de passar a vez para outro colaborador.
                     </p>

                     <input type="number" class="form-control" id="times" name="times" placeholder="Ex: 1"
                         required>
                 </div>

                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary btn-block">
                         Salvar
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="gerarCod" tabindex="-1" aria-labelledby="gerarCod" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal">Adicionar Código</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
             <form method="POST" action="">
                 @csrf

                 <div class="form-group">
                     <div class="col-md-12">
                         <button type="button" class="btn btn-info btn-block mt-2" id="gera-codigo"
                             onclick="makeCod()">Gerar Código</button>
                     </div>
                 </div>
                 <input type="text" class="form-control" id="code" name="code" value="" placeholder="Ex: dr89f"
                     minlength="1">



                 <div class="modal-footer">
                     <button type="submit" class="btn btn-primary btn-block">
                         Salvar
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="mudarSenha" tabindex="-1" aria-labelledby="mudarSenha" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal">Trocar senha</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">

             <form method="POST" action="">
                 @csrf

                 <div class="form-group">
                     <label for="name">Senha Antiga</label>
                     <input type="password" class="form-control" id="password" name="password"
                         placeholder="Senha antiga">
                 </div>

                 <div class="form-group">
                     <label for="name">Nova Senha</label>
                     <input type="password" class="form-control" id="new-password" name="new-password"
                         placeholder="Senha nova">
                 </div>

                 <div class="form-group">
                     <label for="name">Confirme a Senha</label>
                     <input type="password" class="form-control" id="confirm-password" name="confirm-password"
                         placeholder="Confirme a senha nova">
                 </div>

                 <button type="submit" class="btn btn-primary btn-block">Trocar senha</button>
             </form>
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="ativarConta" tabindex="-1" aria-labelledby="ativarConta" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal">Ativar Conta</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
         </div>
     </div>
 </div>
</div>

<div class="modal fade" id="links" tabindex="-1" aria-labelledby="links" aria-hidden="true">
 <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="configModal">Clique nos Links Para copiar</h5>

             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
         </div>

         <div class="modal-body">
             <form>

                 <div class="form-group">
                     <label for="">Link Facebook Ads</label>
                     <input class="link-copy form-control" id="link-face-ads" target="__blank"
                         style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                         data-placement="top" title="Link Face ads" value="">
                     <button type="button" class="btn btn-primary btn-block" onclick="copyCodFace()">Copiar Link
                         do face ads</button>
                 </div>

                 <div class="form-group">
                     <label for="">Link Parceria</label>
                     <input class="form-control link-copy" id="link-parceria" target="__blank"
                         style="text-decoration: none; font-weight: bold;" href="" data-toggle="tooltip"
                         data-placement="top" title="Link Parceria" value="">
                     <button type="button" class="btn btn-primary btn-block" onclick="copyCodParceria()">Copiar
                         Link De Parceria</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>
