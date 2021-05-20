<header class="flex-all flex-between header box-shadow-re-use">
    <a class="flex-all logo-container" href="/">
        <img src="./../../assets/svg/logo.svg">
        <div class="brand-title text-box-shadow-re-use">AcS</div>
    </a>

    <ul id="list-header" class="flex-all flex-end header-meniu-links">
        <li> <a href="/maintenancemode" class="text-box-shadow-re-use"> Maintenance Mode </a> </li>
        <li> <a href="/chartseditor" class="text-box-shadow-re-use"> Charts Editor</a> </li>
        <li> <a href="/dbeditor" class="text-box-shadow-re-use"> Database Editor </a> </li>
        <li> <a href="/admin" class="text-box-shadow-re-use"> Logout </a> </li>
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