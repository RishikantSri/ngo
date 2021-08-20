@include('frontend.layouts.top')
<body>
    
    <div class="page-wrapper">

     

        @include('frontend.layouts.navigation')

      
        @include('frontend.layouts.banner')
        
        @include('frontend.layouts.service-one')
        
        @include('frontend.layouts.volunteers')
       
        @include('frontend.layouts.causes')
      
        @include('frontend.layouts.blog')

        @include('frontend.layouts.contactus')

        @include('frontend.layouts.footer')

       

    </div><!-- /.page-wrapper -->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- /.scroll-to-top -->
    @include('frontend.layouts.footer-scripts')
    
</body>

</html>