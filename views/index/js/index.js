/*==================== SHOW NAVBAR ====================*/
const showMenu = (headerToggle, navbarId) => {
    const toggleBtn = document.getElementById(headerToggle),
        nav = document.getElementById(navbarId)

    // Validate that variables exist
    if (headerToggle && navbarId) {
        toggleBtn.addEventListener('click', () => {
            // We add the show-menu class to the div tag with the nav__menu class
            nav.classList.toggle('show-menu')
            // change icon
            toggleBtn.classList.toggle('bx-x')
        })
    }
}
showMenu('header-toggle', 'navbar')

/*==================== LINK ACTIVE ====================*/
const linkColor = document.querySelectorAll('.nav__link')

function colorLink() {
    linkColor.forEach(l => l.classList.remove('active'))
    this.classList.add('active')
}

linkColor.forEach(l => l.addEventListener('click', colorLink))


function login() {
    const login = document.getElementById('email').value
    const senha = document.getElementById('pwd').value
    const data = [login, senha]

    axios.post(BASEURL + "index/login", data).then((res) => {
        // console.log(res.data)
        window.location.href = BASEURL + "index";
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