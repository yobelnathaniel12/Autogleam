<nav>
    <div class="logo">
        <a href="#"> <img src="image/autogleam_logo.png" alt="logo"> AUTOGLEAM </a>
    </div>
    <div class="toggle">
        <a href="#"> <ion-icon name="menu-outline"></ion-icon> </a>
    </div>
    <ul class="menu">
        <li> <a href="/"> Home </a></li>
        <li> <a href="#"> Product </a></li>
        <li> <a href="#"> Services </a></li>
        <li> <a href="/about_us"> About Us </a></li>
        <li> <a href="#"> Our Customer </a></li>
    </ul>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>


<script>

    $(function() {
        $(".toggle").on("click", function() {
            if($(".menu").hasClass("active")) {
                $(".menu").removeClass("active");
                $(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
            }
            else {
                $(".menu").addClass("active");
            }
        })
    });

</script>


