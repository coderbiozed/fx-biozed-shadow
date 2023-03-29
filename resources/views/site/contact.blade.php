@include ('layouts.header')


<section class="">
    <div class="container">
        <div class="row">
            <div class="con_ma_inn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class='sec_top mt-0'>
                            <h1 class='sec_head'><span class='br_sp'>Contact</span> us<span class='c_lp'>!</span></h1>
                            <p class='sec_desc'>Fill up the form and our will get back to you within 24hrs.</p>
                            <p class='sec_desc'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo labore officiis distinctio tempore magni dolor earum architecto dolorem odio et. Repudiandae vel
                            explicabo laboriosam, nostrum voluptatibus ipsa earum deleniti amet corrupti. Cupiditate eius sequi repellat quae quisquam.</p>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div>
                            <form action="{{ route('contact.send')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-xl-5">
                                        <div class='co_sh_col'>
                                            <div class='ft_sc_ma'>
                                              <h4>Get us here</h4>
                                              <div class='ft_sc_ics'>
                                                  <a href="/" class='fb'><i class="fa-brands fa-facebook-f"></i></a>
                                                  <a href="/" class='ig'><i class="fa-brands fa-instagram"></i></a>
                                                  <a href="/" class='li'><i class="fa-brands fa-linkedin-in"></i></a>
                                                  <a href="/" class='pt'><i class="fa-brands fa-pinterest"></i></a>
                                                  <a href="/" class='tw'><i class="fa-brands fa-twitter"></i></a>
                                              </div>
                                            </div>
                
                                            <div class='_me'>
                                              <div class='_svg'>
                                                <i class="fa-regular fa-clock"></i>
                                              </div>
                                              <div>
                                                <h5 class='m-0'>Our office hour</h5>
                                                <p class='m-0'>Mon - Fri, 9AM - 7PM</p>
                                              </div>
                                            </div>
                                            
                                            <div class='_me'>
                                              <div class='_svg'>
                                                <i class="fa-regular fa-envelope"></i>
                                              </div>
                                              <div>
                                                  <h5 class='m-0'>contact@topasiafx.com</h5>
                                                  <p class="m-0">Send us a mail</p>
                                              </div>
                                            </div>
                
                                            <div class='_me'>
                                              <div class='_svg'>
                                                <i class="fa-brands fa-whatsapp"></i>
                                              </div>
                                              <div>
                                                  <h5 class='m-0'>09656454155</h5>
                                                  <p class="m-0">Call or message in whatsapp</p>
                                              </div>
                                            </div>
                
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-7">
                                        <div class="co_sh_col">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <h4>Leave a message</h4>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class='f_in_ali'>
                                                        <label for="f_name" >First name</label>
                                                        <input type="text"  name="first_name"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class='f_in_ali'>
                                                        <label for="l_name">Last name</label>
                                                        <input type="text" name="last_name"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class='f_in_ali'>
                                                        <label for="email">Your email</label>
                                                        <input type="email" name="email" id="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class='f_in_ali'>
                                                        <label for="phone">Your number</label>
                                                        <input type="text" name="phone_number" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class='f_in_ali'>
                                                        <label for="location">Your location</label>
                                                        <input type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class='f_in_ali'>
                                                        <label for="message">Your message</label>
                                                        <textarea name="message" id="" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button class="bl_card_btn cont_sub_btn" type="submit">Submit <span class='c_lp'><i class="fa-regular fa-circle-right"></i></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class='cont_ri'>
                            <h4>Our diections</h4>
                            <iframe class='con_if' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3677.9535111384785!2d89.53816381549724!3d22.804186430175864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9aaa83158fe3%3A0xeb2d28b2fc31c5ae!2sSow%20Dream!5e0!3m2!1sen!2sbd!4v1666509258225!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title='our direction map'></iframe>                                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include ('layouts.footer')