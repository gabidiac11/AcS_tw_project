<header class="flex-all flex-between header box-shadow-re-use">
    <a class="flex-all logo-container" href="/">
        <img src="./../../assets/svg/logo.svg">
        <div class="brand-title text-box-shadow-re-use">AcS</div>
    </a>

    <ul id="list-header" class="flex-all flex-end header-meniu-links">
        <li> <a href="/about" class="text-box-shadow-re-use"> About </a> </li>
        <li> <a href="/search" class="text-box-shadow-re-use"> Search </a> </li>
        <li> <a href="/charts" class="text-box-shadow-re-use"> Charts </a> </li>
        <li> <a href="/maps" class="text-box-shadow-re-use"> Maps </a> </li>
        <li> <a href="/contact" class="text-box-shadow-re-use"> Contact </a> </li>
    </ul>
    <script>
        /**
         * highlight the current page
         */
        (() => {
            const headerLiElements = document.querySelectorAll("#list-header a");

            for (let i = 0; i < headerLiElements.length; i++) {
                if (window.location.pathname.indexOf(headerLiElements[i].getAttribute("href")) === 0) {
                    headerLiElements[i].classList.add("selected");
                    break;
                }
            }
        })()
    </script>
</header>