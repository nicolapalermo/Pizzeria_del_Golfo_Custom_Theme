const navSlide = () => {
	const burger = document.querySelector(".burger");
	const nav = document.querySelector(".main-navigation");
	const navLinks = document.querySelectorAll("#primary-menu .menu-item");

	burger.addEventListener("click", () => {
		// Toggle nav
		nav.classList.toggle("nav-active");

		// Animate links
		navLinks.forEach((link, index) => {
			if (link.style.animation) {
				setTimeout(() => {
					link.style.animation = "";
				}, 500);
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index /
					7 +
					0.3}s`;
			}
		});

		// Burger animation
		burger.classList.toggle("toggle");
	});

	if (window.matchMedia("(max-width: 768px)").matches) {
		const navLinksA = document.querySelectorAll(
			"#primary-menu .menu-item a"
		);
		navLinksA.forEach(link => {
			link.addEventListener("click", function(e) {
				e.preventDefault();
				nav.classList.toggle("nav-active");
				const href = this.href;
				setTimeout(() => {
					window.location = href;
				}, 300);
			});
		});
	}
};

const metaViewport = () => {
	const viewheight = window.innerHeight;
	const viewwidth = window.innerWidth;
	const viewport = document.querySelector("meta[name=viewport]");
	viewport.setAttribute(
		"content",
		`height=${viewheight}, width=${viewwidth}, initial-scale=1`
	);
};

metaViewport();

navSlide();