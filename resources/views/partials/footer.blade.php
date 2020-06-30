<!-- start footer  -->
<footer>
    <div class="footer_container">
        <div class="footer_1_block">
            <img class="footerLogo" src="{{asset('img/logo.png')}}"/>
            <p> {{__('global.textFooter1')}}</p>
            <div class="footer_5_block">
                <div class="footerLiAndSoc">
                    <div class="soc">
                        <a href="#" target="_blank"><img src="{{asset('img/ln.png')}}" alt="linked"/></a>
                        <a href="#" target="_blank"><img src="{{asset('img/twitter-t.png')}}" alt="twitter"/></a>
                        <a href="#" target="_blank"><img src="{{asset('img/fb.png')}}" alt="facebook"/></a>
                        <a href="#" target="_blank"><img src="{{asset('img/insta.png')}}" alt="instagram"/></a>
                    </div>
                </div>
            </div>
            <div class="copyright">{{__('global.textFooter2')}}· TalkCounsel, LLC.</div>
        </div>
        <div class="footer_2_block to-right">
            <a href="{{ route('find_a_job') }}">{{__('global.findJob')}}</a>
            <a href="{{ route('our_lawyers') }}">Find A Lawyer</a>
            <a href="">{{__('global.specializations')}}</a>
            <a href="">{{__('global.keyFeatures')}}</a>
        </div>
        <div class="footer_2_block">
            <a href="{{route('about_us')}}">{{__('global.about')}}</a>
            <a href="{{route('how_it_works')}}">{{__('global.howItWorks')}}</a>
            <a href="{{ route('terms') }}">Terms Of Use</a>
            <a href="">Blog</a>
        </div>
        <div class="footer_2_block">
            <a href="#">Careers</a>
            <a href="{{ route('privacy_policy') }}">Privacy &#38; Policy</a>
            <a href="#">Press</a>
            <a href="#">Contact Us</a>
        </div>
    </div>
</footer>
