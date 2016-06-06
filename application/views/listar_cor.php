<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="page-title">
                    <span class="title">Cores</span>
                    <div class="description">Lista cores cadastradas</div>
                </div>                            
                <div class="card">
                    <div class="card-header">
                        <div class="pull-right">
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="<?= base_url() ?>cor/cadastro" class="btn btn-info"><i class="fa fa-plus"></i> Novo</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="datatable table table-striped dataTable">
                                    <thead>
                                        <tr>
                                            <th>Cor</th>
                                            <th width="8%" >Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($cor as $c) { ?>                                                       
                                            <tr>                                                        
                                                <td><?= $c->NOME; ?></td>
                                                <td>
                                                    <a href="<?= base_url('cor/editar/' . $c->ID) ?>" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                                    <a href=""  class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalDelete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>                                            
                            </div>                                        
                        </div>                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modalDelete" class="modal fade modal-danger" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Deletar</h4>
            </div>
            <div class="modal-body">
                <p>Tem certeza que deseja excluir ?</p>
            </div>
            <div class="modal-footer">
                <a  href="<?= base_url('cor/excluir/' . $c->ID) ?>" class="btn btn-default"  >Sim</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            </div>
        </div>
  </div>
</div>