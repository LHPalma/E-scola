let body = document.body;

// Botão de Perfil
let profile = document.querySelector(".header .flex .profile");
document.querySelector("#user-btn").onclick = () => {
	profile.classList.toggle("active");
	searchForm.classList.remove("active");
};

// Barra de Pesquisa
let searchForm = document.querySelector(".header .flex .search-form");
document.querySelector("#search-btn").onclick = () => {
	searchForm.classList.toggle("active");
	profile.classList.remove("active");
};

// Barra Lateral
let sideBar = document.querySelector(".side-bar");
document.querySelector("#menu-btn").onclick = () => {
	sideBar.classList.toggle("active");
	body.classList.toggle("active");
};

// Desativa a sidebar e remove o padding do body ao fechar a sidebar
document.querySelector(".side-bar .close-side-bar").onclick = () => {
	sideBar.classList.remove("active");
	body.classList.remove("active");
};

window.onscroll = () => {
	profile.classList.remove("active");
	searchForm.classList.remove("active");

	if (window.innerWidth < 1200) {
		sideBar.classList.remove("active");
		body.classList.remove("active");
	}
};
