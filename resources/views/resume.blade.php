<!-- Resume Subpage -->
<section data-id="resume" class="animated-section">
    <div class="page-title">
        <h2>Resume</h2>
    </div>

    <div class="section-content">

        <div class="row">
        <div class="col-xs-12 col-sm-7">
            @if (!empty($etudes))
            <div class="block-title">
            <h3>Education</h3>
            </div>
            
            <div class="timeline timeline-second-style clearfix">
                @foreach ($etudes as $etude)
                    
                
                <div class="timeline-item clearfix">
                    <div class="left-part">
                    <h5 class="item-period">{{ $etude->start_year}} - {{ $etude->end_year}}</h5>
                    <span class="item-company">{{ $etude->insitute}}</span>
                    </div>
                    <div class="divider"></div>
                    <div class="right-part">
                    <h4 class="item-title">{{ $etude->formation}}</h4>
                    <p>{!! $etude->descriptif !!}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @endif

            <div class="white-space-50"></div>
            @if (!empty($experiences))

            <div class="block-title">
            <h3>Experience</h3>
            </div>

            <div class="timeline timeline-second-style clearfix">
                @foreach ($experiences as $experience)
                    <div class="timeline-item clearfix">
                        <div class="left-part">
                            <h5 class="item-period">{{$experience->start_date}} - {{$experience->end_date}}</h5>
                            <span class="item-company">{{$experience->company}}</span>
                        </div>
                        <div class="divider"></div>
                        <div class="right-part">
                            <h4 class="item-title">{{$experience->role}}</h4>
                            <p>{!! $experience->description !!}</p>
                        </div>
                    </div>
                    
                @endforeach
            </div>
            @endif

        </div>

        <!-- Skills & Certificates -->
        <div class="col-xs-12 col-sm-5">
          
            <div class="white-space-10"></div>
            @foreach ($skills as $key=>$skill)
                 <!-- Coding Skills -->
                <div class="block-title">
                    <h3>{{$key}} <span>Skills</span></h3>
                </div>
                <div class="skills-info skills-second-style">
                    <!-- Skill 5 -->
                    <div class="skill clearfix">
                        <h4>{{$skill['name']}}</h4>
                        <div class="skill-value">{{$skill['percentage']}}%</div>
                    </div>
                    <div class="skill-container skill-5">
                        <div class="skill-percentage"></div>
                    </div>
                    <!-- End of Skill 5 -->
                </div>
                    <!-- End of Coding Skills -->
    
            @endforeach
           
         

            <div class="white-space-10"></div>
            @if (!empty($capacities))
                <!-- Knowledges -->
                <div class="block-title">
                <h3>Knowledges</h3>
                </div>

                <ul class="knowledges">
                    @foreach ($capacities as $capacity)
                    <li>{{ $capacity->name}}</li>
                    @endforeach            
                </ul>
                <!-- End of Knowledges -->
            @endif
        </div>
        <!-- End of Skills & Certificates -->
        </div>

        <div class="white-space-50"></div>
        @if (!empty($certifications))
            <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="block-title">
                        <h3>Certificates</h3>
                        </div>
                    </div>
                    </div>
                    
            <div class="row">
                @foreach ($certifications as $certification)
                        <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="certificate-item clearfix">
                        <div class="certi-logo">
                            <img src="{{ Voyager::image( $certification->image ) }}" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                            <div class="certi-title">
                            <h4>{{$certification->name}}</h4>
                            </div>
                            <div class="certi-date">
                            <span>{{$certification->obtention_date}}</span>
                            </div>
                            <div class="certi-company">
                            <span></span>
                            </div>
                        </div>
                        </div>
                    </div>  
                @endforeach
            </div>
                <!-- End of Certificates -->   
        @endif

        <!-- Certificates -->
       
    </div>  
</section>
<!-- End of Resume Subpage -->