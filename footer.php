<style>

    :root {
            --dark: #1a2332;
            --bg-dark: #121212;
        }
         .footer {
            background-color: var(--dark);
            color: white;
            padding: 30px 0 20px;
            border-radius:100px 0px 0px 0px ;
        }

         .footer img {
            height: 45px; 
            border-radius:10px;
            width:30%;
        }
        
        /* Desktop screens */

        /* MOBILE/SMALL SCREENS (<=991.98px) */
        @media (max-width: 991.98px) {
            .footer img {
                width:50%;
                margin-left:20px;
            }
        }
</style>
    <!-- Footer -->
    <footer class="footer" style="background-color: var(--dark);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 footer">
                    <img src="logo/ebucryptic.png" alt="">
                    <p>Your comprehensive guide to understanding and mastering cryptocurrency and blockchain technology.</p>
                    <p>Reach out to Us via our social handle</p>
                    <div class="social-links">
                        <!-- <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a> -->
                        <a href="#" class="text-light" id="joincommunity"><i class="bi bi-facebook"></i>Facebook</a><br>
                        <!-- <a href="#" class="text-light me-3"><i class="bi bi-linkedin"></i></a> -->
                        <a href="#" class="text-light"><i class="bi bi-youtube"></i>Youtube</a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4 mt-4">
                    <h5>Courses</h5>
                    <ul class="list-unstyled">
                        <li><a href="crypto.php" class="text-light text-decoration-none">Cryptocurrency</a></li>
                        <li><a href="index.php" class="text-light text-decoration-none">Forex</a></li>
                        <li><a href="nft.php" class="text-light text-decoration-none">NFTs</a></li>
                        <li><a href="trading.php" class="text-light text-decoration-none">Trading Masterclass</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Airdrops</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4  mt-4">
                    <h5>For sponsorship, promotion and personal mentorship</h5>
                    <p>Reach out to us on whatsapp via:</p>
                    <div class="input-group" id="contact">
                        <input type="email" class="form-control text-center" placeholder="+234-8127594675" disabled>
                        <!-- <button class="btn btn-accent bg-primary" type="button">Subscribe</button> -->
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0">&copy; <?=date("Y");?> EbuCryptic. All rights reserved.</p>
            </div>
        </div>
    </footer>
