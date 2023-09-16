
axios.post(BASEURL + "/relatorio/getRelatorio").then(res => {
    const container = document.querySelector('#container');
    const vazio = document.querySelector('#vazio');
    var relat = res.data;
    // console.log(relat);

    if (relat == '') {
        const card = `<tr>
            <div class="d-flex justify-content-center">
                <h2>Não há relatórios a serem mostrados</h2>
            </div>
        </tr>`;
        vazio.innerHTML += card;
    } else {

    }

    relat.forEach(item => {
        // console.log(item);
        if (item.obs == null) {
            const card = `<tr>
                <th scope="row">${item.sequencia}</th>
                <td>${item.data}</td>
                <td>${item.tipo}</td>
                <td>${item.fluxo}</td>
                <td>${item.valor}</td>
                <td>Não há comentarios</td >
            </tr >`
            container.innerHTML += card;
        } else {
            const card = `<tr>
                    <th scope="row">${item.sequencia}</th>
                    <td>${item.data}</td>
                    <td>${item.tipo}</td>
                    <td>${item.fluxo}</td>
                    <td>${item.valor}</td>
                    <td>${item.obs}</td>
                </tr>`

            container.innerHTML += card;
        }

    })

})

function logout() {
    const data = document.getElementById('logout');

    // console.log(data)
    axios.post(BASEURL + "index/logout", data).then((res) => {
        // console.log(res.data)

        window.location.href = BASEURL + "index";
    })
}