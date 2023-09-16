/*=============== Criar Login ===============*/

function criarLogin() {
    const nome = document.getElementById("nome").value;
    const email = document.getElementById("cademail").value;
    const senha = document.getElementById("cadpwd").value;
    const nivel = document.getElementById("nivel").value;
    const data = [nome, email, senha, nivel]


    const dataJson = JSON.stringify(data)
    // console.log(dataJson)

    axios.post(BASEURL + "Cadastrar/cadNewUser", dataJson).then((res) => {
        // console.log(res);

        if (res.data['num'] == 0) {
            alert(res.data['texto']);
        } else {
            alert(res.data['texto']);
        }

    })

    nome.innerHTML += '';
    email.innerHTML += '';
    senha.innerHTML += '';
}

function voltar() {
    window.location.href = BASEURL + "index";
}

function logout() {
    const data = document.getElementById('logout');

    // console.log(data)
    axios.post(BASEURL + "index/logout", data).then((res) => {
        // console.log(res.data)

        window.location.href = BASEURL + "index";
    })
}