 <!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-10" id="hero">
    <div class="th-hero-bg" data-overlay="overlay1" data-opacity="7" data-bg-src="<?=ASSET;?>img/update1/hero/hero_bg_1_1.jpg"></div>
    <div class="container z-index-common">
        <div class="row align-items-center">
            <!-- Left Column - Content -->
            <div class="col-lg-6">
                <div class="hero-content">
                    <span class="hero-subtitle">"Perfection Academy – Learn, Grow, Succeed!"</span>
                    <h1 class="hero-title">Empowering Excellence</h1>
                    <h1 class="hero-title">Unlock Your Potential...</h1>
                    <p class="hero-text">Welcome to Perfection Academy – where excellence meets opportunity!</p>
                    <a href="#" class="th-btn style3" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register Now <i class="fas fa-long-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
            <!-- Right Column - Image -->
            <div class="col-lg-6 text-center">
                <div class="hero-img">
                    <img src="<?=ASSET;?>img/update1/hero/hero_img_1_1.png" alt="hero">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Decorative Shapes -->
    <div class="hero-shape shape1">
        <img src="<?=ASSET;?>img/update1/hero/shape_1_1.png" alt="shape">
    </div>
    <div class="hero-shape shape2">
        <img src="<?=ASSET;?>img/update1/hero/shape_1_2.png" alt="shape">
    </div>
    <div class="hero-shape shape3"></div>
    <div class="ripple-shape">
        <span class="ripple-1"></span><span class="ripple-2"></span>
        <span class="ripple-3"></span><span class="ripple-4"></span>
        <span class="ripple-5"></span><span class="ripple-6"></span>
    </div>
</div>
<!--======== / Hero Section ========-->

<!-- Registration Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register Now</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="register.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-control" id="category" name="category" required>
                            <option value="">-- Select Category --</option>
                            <option value="5th-8th">5th to 8th</option>
                            <option value="9th-10th">9th to 10th</option>
                            <option value="11th-12th-commerce">11th to 12th (Commerce)</option>
                            <option value="11th-12th-science">11th to 12th (Science)</option>
                            <option value="ca-cs-cma">CA | CS | CMA</option>
                            <option value="bcom-bba-mcom-mba">B.COM | BBA | M.COM | MBA</option>
                            <option value="bca-mca">BCA | MCA</option>
                            <option value="spoken-english">Spoken English (Basic & Advanced)</option>
                            <option value="share-market">Share Market & Advanced Share Market</option>
                            <option value="personality-development">Personality Development</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message or query here." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
