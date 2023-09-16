<main>
    <form id="cadastoLivro">
        <div class="container-lg">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do usuário</label>
                <input type="text" class="form-control" id="nome" placeholder="Fabricio Meirelis">
            </div>
            <div class="mb-3">
                <label for="cademail" class="form-label">Email</label>
                <input type="email" class="form-control" id="cademail" placeholder="Exemplo@exemplo.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
            </div>
            <div class="mb-3">
                <label for="cadpwd" class="form-label">senha</label>
                <input type="password" class="form-control" id="cadpwd" placeholder="Senha">
            </div>
            <div class="mb-3">
                <label for="nivel" class="form-label">Nivel do usuário</label>
                <br>
                <select class="form-select" id="nivel">
                    <option value="" selected>--Selecione um Nivel--</option>
                    <option value="1">Administrador</option>
                    <option value="2">Gerente</option>
                    <option value="3">Usuário</option>
                </select>
            </div>
            <div class="d-flex  justify-content-end" style="gap: 1em;">
                <input type="button" id="cadastrar" class="btn btn-success" onclick="criarLogin()" value="Cadastrar">
                <a type="button" class="btn btn-danger" onclick="voltar()">Cancelar</a>
            </div>
        </div>
    </form>
</main>