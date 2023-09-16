function fazerLancamento() {
    const valor = document.getElementById("valor").value;
    const fluxo = document.getElementById("fluxo").value;
    const tipo = document.getElementById("tipo").value;
    const obs = document.getElementById("obs").value;

    if (valor.includes(',')) {
        valor.parseInt(valor.replace(',', '.'))
    }

    const data = [valor, fluxo, tipo, obs];

    // console.log(data);
    axios.post(BASEURL + "lancamento/Lancamento", data).then((res) => {
        var resposta = res.data

        if (resposta['num'] == 0) {
            alert(resposta['texto']);
        } else {
            alert(resposta['texto']);
        }
    })
}

function logout() {
    const data = document.getElementById('logout');

    // console.log(data)
    axios.post(BASEURL + "index/logout", data).then((res) => {
        // console.log(res.data)

        window.location.href = BASEURL + "index";
    })
}