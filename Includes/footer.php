<footer>
        <p class="copyright-text"> <a style="text-decoration: none; color: var(--black);" href="https://bitranium.com"><?php echo $lang['copy-right'] ?> - 2023</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let dayNight = document.querySelector('.dayNight')
        let menuToggle = document.querySelector('.menuToggle')
        let body = document.querySelector('body')
        let navbar = document.querySelector('.navbar')

        dayNight.onclick = function () {
            body.classList.toggle('dark')
            dayNight.classList.toggle('active')
        }

        menuToggle.onclick = function () {
            menuToggle.classList.toggle('active')
            navbar.classList.toggle('active')
        }
    </script>
    <script>
        try {
            fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function (response) {
                return true;
            }).catch(function (e) {
                var carbonScript = document.createElement("script");
                carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CE7DC2JW&placement=wwwcssscriptcom";
                carbonScript.id = "_carbonads_js";
                document.getElementById("carbon-block").appendChild(carbonScript);
            });
        } catch (error) {
            console.log(error);
        }
    </script>
</body>


</html>