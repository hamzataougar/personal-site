              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>{!! $profile->about !!}</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value">{{$profile->age}}</span>
                          </li>

                          <li>
                            <span class="title">Residence</span>
                            <span class="value">{{$profile->residence}}</span>
                          </li>

                          <li>
                            <span class="title">Address</span>
                            <span class="value">{{$profile->address}}</span>
                          </li>

                          <li>
                            <span class="title">E-mail</span>
                            <span class="value">{{$profile->email}}</span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value">{{$profile->phone}}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                 
                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="testimonials owl-carousel">
                        <!-- Testimonial 1 -->
                        @foreach ($testimonials as $testimonial)
                          <div class="testimonial">
                            <div class="img">
                            <img src="{{ Voyager::image( $testimonial->image ) }}" alt="{{$testimonial->name}}">
                            </div>
                            <div class="text">
                              <p>{!!$testimonial->message!!}</p>
                            </div>
  
                            <div class="author-info">
                              <h4 class="author">{{$testimonial->name}}</h4>
                              <h5 class="company">{{$testimonial->role}} - {{$testimonial->company}}</h5>
                              <div class="icon">
                                <i class="fas fa-quote-right"></i>
                              </div>
                            </div>
                          </div>
                          <!-- End of Testimonial 1 -->
  
                        @endforeach
                       
                      </div>
                    </div>
                  </div>
                  <!-- End of Testimonials -->

                  <div class="white-space-50"></div>

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Cilents</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="clients owl-carousel">
                        @foreach ($clients as $client)
                          <div class="client-block">
                          <a href="{{$client->link}}" target="_blank" title="{{$client->name}}">
                              <img src="{{ Voyager::image( $client->logo ) }}" alt="Logo">
                            </a>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <!-- End of Clients -->

                  <div class="white-space-50"></div>

                  {{-- <!-- Pricing -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="fw-pricing clearfix row">
                        
                        <div class="fw-package-wrap col-md-6 ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Silver</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>
                            
                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                            </div>

                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                          </div>
                        </div>
     
                        <div class="fw-package-wrap col-md-6 highlight-col ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Gold</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>

                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            
                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                            <div class="fw-default-row">Donec non diam</div>
                            <div class="fw-default-row"></div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- End of Pricing --> --}}

                  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fun <span>Facts</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Happy Clients</h4>
                        <span class="fun-fact-block-value">578</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Working Hours</h4>
                        <span class="fun-fact-block-value">4,780</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Awards Won</h4>
                        <span class="fun-fact-block-value">15</span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>
                  </div>
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->