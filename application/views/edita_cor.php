<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="page-title">
                    <span class="title">Editar cor</span>
                    <div class="description">Atualizar cor</div>
                </div>                            
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form" action="<?= base_url()?>cor/atualiza" method="POST">
                                    
                                    <input type="hidden" name="id" value="<?php echo $cor[0]->ID; ?>"/>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label>Cor</label>
                                            <small>Obrigatório.</small>
                                            <input type="text" class="form-control" name="nome" placeholder="Informe a cor" value="<?= $cor[0]->NOME ?>" required="">
                                        </div>
                                    </div>                                                                  
                                    <div class="pull-right">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-success"><i class="fa fa-check"></i> Salvar</button>
                                            <a href="<?= base_url('cor')?>" class="btn btn-warning"><i class="fa fa-reply"></i> Cancelar</a>                                        
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