<div class="card">
    <div class="card-header">
        Incluir Funcionário
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label  for="nome" class="form-label">Nome</label>
              <input require type="text"
                class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder="Nome Completo">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input require type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="exemplo@host.com">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Salvar">

            <a href="?controller=funcionario&action=inicio" class="btn btn-danger">Cancelar</a>

        </form>
      
    </div>
</div>