<?php include DIR . 'view/components/breadcumb.php'; ?>
<?php breadcrum("Contact US");
?>
 <!--==============================
Contact Area  
==============================-->
<div class="space" id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                 <div class="map-sec">
                    <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d121001.77440469847!2d73.69429716790233!3d18.605326183043122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bc2b9fc10597c2b%3A0x23d0472376824d1d!2sAshoka%20Society%20Rd%2C%20near%20phornix%20hospital%2C%20Hanuman%20Nagar%2C%20Sambhaji%20Nagar%2C%20Thergaon%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411033!3m2!1d18.6053441!2d73.7766989!5e0!3m2!1sen!2sin!4v1743058406205!5m2!1sen!2sin"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
                </div>
                <div class="col-xl-6">
                 <div class="map-sec">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sthemeholy!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                     </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 mb-30 mb-xl-0">
                    <div class="me-xxl-5 mt-60">
                        <div class="title-area mb-25">
                            <h2 class="border-title h3">Have Any Questions?</h2>
                        </div>
                        
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Branch 1</p>
                                <a href="https://www.google.com/maps" class="contact-feature_link"> Perfection Academy,<br> ashoka society road, <br>thergoan,pune-411033</a>
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Branch 2</p>
                                <a href="https://www.google.com/maps" class="contact-feature_link"> Perfection Academy,<br>near HP petrol pump,<br>Marunji, pune-57</a>
                                
                            </div>
                        </div>
                        <div class="contact-feature">
                            <div class="contact-feature-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="contact-feature_label">Phone Number</p>
                                <a href="tel:+919730210105" class="contact-feature_link">Mobile:<span>(+91) - 97302 - 10105</span></a>
                                <a href="tel:+91702033530" class="contact-feature_link">Phone: <span>(+91) - 70203 - 3530</span></a>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="contact-form-wrap" data-bg-src="assets/img/bg/contact_bg_1.png">
                        <span class="sub-title">Contact With Us!</span>
                        <h2 class="border-title">Get in Touch</h2>
                        
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="name" id="name" placeholder="Your Name*">
                                        <i class="fal fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control style-white" name="email" id="email" placeholder="Email Address*">
                                        <i class="fal fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="subject" id="subject" class="single-select nice-select form-select style-white">
                                            <option value="" disabled selected hidden>Select Standard *</option>
                                            <option value="Web Design">5th - 8th CBSE | State Board</option>
                                            <option value="Web Development">9th - 10th CBSE | State Board</option>
                                            <option value="Engine Diagnostics">11th - 12th Science</option>
                                            <option value="Digital Marketing">11th - 12th Commerce</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control style-white" name="number" id="number" placeholder="Phone Number*">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group ">
                                        <textarea name="message" id="message" cols="30" rows="3" class="form-control style-white" placeholder="Write Your Message*"></textarea>
                                        <i class="fal fa-pen"></i>
                                    </div>
                                </div>
                                <div class="form-btn col-12 mt-10">
                                    <button class="th-btn">Send Message<i class="fas fa-long-arrow-right ms-2"></i></button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>