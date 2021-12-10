<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-success" href="?controller=funcionario&action=criar" role="button">Criar</a>
    </div>
    <div class="card-body">
        
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($funcionarios as $funcionario){ ?>
                <tr>
                    <td scope="row"><?php echo $funcionario->id?> </td>
                    <td><?php echo $funcionario->nome?> </td>
                    <td><?php echo $funcionario->email?> </td>
                    <td>
                        <div class="btn-group" role="group" aria-label="">
                            <a href="?controller=funcionario&action=editar&id=<?php echo $funcionario->id?>" class="btn btn-info">Editar</a>
                            <a href="?controller=funcionario&action=deletar&id=<?php echo $funcionario->id?>" class="btn btn-danger">Deletar</a>
                        </div>
                    </td>
                    
                </tr>
           <?php } ?>
        
       
    </tbody>
</table>
    </div>
    
</div>


