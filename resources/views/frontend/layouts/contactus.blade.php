
         <section class="service-one" id="contatti">
            <div class="container">
                <div class="block-title text-center">
                    <div class="block-title__text"><span>{{$section5and6->Contact_Heading}}</span></div><!-- /.block-title__text -->
                </div><!-- /.block-title -->
               
                <div class="row" id="contatti">
                    <div class="container mt-1" >

                        <div class="row" style="height:100px;">
                        <div class="col-md-4 maps" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217877.63860542348!2d-100.58712485077561!3d31.432357713958105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8657e583a53b7191%3A0x827e3d0b3754c742!2sSan%20Angelo%2C%20TX%2C%20USA!5e0!3m2!1sen!2sit!4v1629453971534!5m2!1sen!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-md-5">
                           
                           
                        <form action="{{ route('contact') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             @method('POST')
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="fa fa-times"></i>
                                </button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="profile-header">
                               
                               <div class="">
                               @if(session()->has('message'))
                               <div>
                                   <div class="alert alert-success alert-dismissible" role="alert">
                                       <button type="button" class="close" data-dismiss="alert">
                                           <i class="fa fa-times"></i>
                                       </button>
                                       <strong>Success !</strong> {{ session()->get('message') }}
                                   </div>
                               </div>
                       
                               @endif
                               </div>
                               
                           </div>
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control mt-2" placeholder="Name" required>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control mt-2" placeholder="Phone" >
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mt-2" placeholder="Email" >
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="number" name="address" class="form-control mt-2" placeholder="Address" >
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message" rows="3" ></textarea>
                                </div>
                                </div>
                                <div class="col-12">
                                <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                    Subscribe News Letter
                                    </label>
                                </div>
                                </div>
                                </div>
                                <div class="col-12">
                                <button class="btn btn-light" type="submit">Submit</button>
                                </div>
                            </div>
                            </form>

                          
                           
                        </div>
                        <div class="col-md-3">
                        <div class="text-white">
                            <h2 class="text-uppercase mt-1 font-weight-bold">{{$section5and6->Contact_Name}}</h2>

                            <i class="fa fa-phone mt-3"></i> <a href="tel:+">{{$section5and6->Contact_phone1}}</a><br>
                            <i class="fa fa-phone mt-3"></i> <a href="tel:+">{{$section5and6->Contact_phone2}}</a><br>
                            <i class="fa fa-envelope mt-3"></i> <a href="">{{$section5and6->Contact_email}}</a><br>
                            <i class="fa fa-globe mt-3"></i>{{$section5and6->Contact_address1}}<br>
                            <i class="fa fa-globe mt-3"></i>{{$section5and6->Contact_address2}}<br>
                           
                            </div>       
                        </div>

                        </div>
                    </div>
                </div>


               <!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-one -->
 