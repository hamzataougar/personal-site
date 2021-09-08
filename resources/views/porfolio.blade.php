<section data-id="portfolio" class="animated-section">

        <!-- Portfolio Subpage -->
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          @foreach ($categories as $category)
                           <li>
                           <a class="filter btn btn-sm btn-link" data-group="{{$category->category}}">{!! $category->category !!}</a>
                            </li>
                              
                          @endforeach
                        
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">
                          @foreach ($projects as $project)
                        <figure class="item lbaudio" data-groups='["category_all", "{{$project->category}}"]'>
                              <div class="portfolio-item-img">
                                <img src="{{ Voyager::image( $project->logo ) }}" alt="{{$project->name}}" title="{{$project->name}}" />
                              <a href="{{$project->link}}" title="{{$project->name}}"></a>
                              </div>
  
                            <i class="{{$project->icon}}"></i>
                              <h4 class="name">{{$project->name}}</h4>
                              <span class="category">{{$project->category}}</span>
                            </figure>
                              
                          @endforeach    
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->
