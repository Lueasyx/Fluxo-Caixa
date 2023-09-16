<main>
    <form id="Lancamento">
        <div class="container-lg">
            <div class="mb-3">
                <label for="valor" class="form-label">Valor do Lançamento</label>
                <input type="number" class="form-control" id="valor" placeholder="">
            </div>
            <div class="mb-3">
                <label for="fluxo" class="form-label">Fluxo do Lançamento</label>
                <br>
                <select class="form-select" id="fluxo">
                    <option value="1">Entrada</option>
                    <option value="2">Saída</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo do Lançamento</label>
                <br>
                <select class="form-select" id="tipo">
                    <option value="1">Lucro Mensal</option>
                    <option value="2">Recebimento de Empréstimos</option>
                    <option value="3">Empréstimos Banco</option>
                    <option value="4">Pagamento de Funcionários</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="obs" class="form-label">Observações</label>
                <br>
                <textarea class="form-control" placeholder="Comente aqui..." id="obs" style="height: 100px"></textarea>
            </div>
            <div class="d-flex justify-content-end" style="gap: 1em;">
                <button type="button" class="btn btn-success" onclick="fazerLancamento()">Lançar</button>
                <input type="button" class="btn btn-danger" value="Cancelar">
            </div>
        </div>
    </form>
</main>