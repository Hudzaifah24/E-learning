
<script src="script.js"></script>
<script>
    document.getElementById("hamburger").onclick = function toggleMenu() {
        const navToggle = document.getElementsByClassName("toggle");
        for (let i = 0; i < navToggle.length; i++) {
            navToggle.item(i).classList.toggle("hidden");
        }
    };
</script>
<script>
    AOS.init();
</script>
<script>
    new Splide( '.splide', {
        type   : 'loop',
        perPage: 3,
        perMove: 1,
    } ).mount();

    new Splide( '#splide', {
        type   : 'loop',
    } ).mount();
</script>
