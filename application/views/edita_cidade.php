<div class="container-fluid">
    <div class="side-body">
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <div class="page-title">
                    <span class="title">Editar cidade</span>
                    <div class="description">Atualizar cidade</div>
                </div>                            
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form" action="<?= base_url()?>cidade/atualiza" method="POST">
                                    
                                    <input type="hidden" name="CODIGO" value="<?php echo $cidades[0]->CODIGO; ?>"/>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <small>Obrigatório.</small>
                                            <input type="text" class="form-control" name="nome" placeholder="Informe o nome da cidade" value="<?= $cidades[0]->NOME ?>" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <label>UF</label>
                                            <small>Obrigatório.</small>
                                            <input type="text" class="form-control" name="uf" placeholder="Informe o estado da cidade" value="<?= $cidades[0]->UF ?>" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">                                                        
                                        <div class="form-group">
                                            <label>Pais</label>
                                            <small>Obrigatório</small>
                                            <input type="text" class="form-control" name="pais" placeholder="Informe o pais da cidade" value="<?= $cidades[0]->PAIS ?>" required="">
                                        </div>
                                    </div>                                                                     
                                    <div class="pull-right">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary btn-success"><i class="fa fa-check"></i> Salvar</button>
                                            <a href="<?=  base_url('cidade')?>" class="btn btn-warning"><i class="fa fa-reply"></i> Cancelar</a>                                        
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