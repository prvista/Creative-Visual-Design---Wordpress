
    <footer class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer__text">

                        <div class="icons">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-youtube"></i></li>
                                <li><i class="fa-solid fa-envelope"></i></li>
                            </ul>
                        </div>



                        <p>Baloc Road, Brgy San Ignacio San Pablo City, Laguna 400</p>

                        <p>©CREATIVEVISUALDESIGNS 2022</p>
                    </div>
                </div>
            </div>
    </footer>

<?php wp_footer()?>

            <script>

            let tl = gsap.timeline();

            tl.from('.branding', {opacity: 0 ,x:'-20px', duration: 2})
            .from('.header__nav', {opacity: 0 ,x:'20px', duration: 2})



            let homeBanner = gsap.timeline();

            homeBanner.from('.homeBanner', {opacity: 0 ,y:'30px', duration: 2})
            .from('.homeAbout', {transform: rotate(360deg), duration: 2})
            // .from('.header__nav', {opacity: 0 ,x:'20px', duration: 2})

            </script>

</body>
</html>






   