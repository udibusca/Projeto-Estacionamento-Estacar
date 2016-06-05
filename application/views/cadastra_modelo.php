<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="page-title">
                    <span class="title">Novo modelo</span>
                    <div class="description">Cadastrar novo modelo</div>
                </div>                            
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form" action="<?= base_url()?>modelo/cadastrar" method="POST">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Fabricante</label>
                                            <small>Obrigatório.</small>
                                            <input type="text" class="form-control" name="fabricante" placeholder="Informe o nome do fabricante" required="">
                                        </div>
                                    </div>                                    
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <small>Obrigatório.</small>
                                            <input type="text" class="form-control" name="modelo" placeholder="Informe o nome do modelo" required="">
                                        </div>
                                    </div>                                                                    
                                    <div class="pull-right">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-success"><i class="fa fa-check"></i> Salvar</button>
                                            <a href="<?= base_url('modelo')?>"  class="btn btn-warning"><i class="fa fa-reply"></i> Cancelar</a>                                        
                                        </div>
                                    </div>
                                </form> 
                            </div>                                        
                        </div>                                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            