@include('inc.header');  <!-- this is to include header.blade.php-->
<!--making of forms-->
   <div class="container ">
        <div class=>
            <div class="col-s12-m4 ">
            <!--to insert the data we use post method and action is
                so we have to make a controller fuction and route
            -->
                
                 <form  class="form-horizontal" method="POST" action="{{url('/insert')}}">
                        {{csrf_field()}} 
                        <!--we have to do the validation -->
                    <fieldset >
                        <legend >Laravel Crud </legend>
                            <!--validation-->
                            <!-- @if(count($errors)>0)
                                @foreach($errors->all() as $error )
                                    <div class="alert alert-danger">
                                        {{$error}}
                                    </div>
                                    @endforeach
                            @endif -->

                            <!--
                                in here error we use title and description
                                so name should be title and description is essential
                            -->
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title">
                        <!--name is essential when error handling-->
                        </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <textarea class="form-control" placeholder="description" cols="30" rows="3" name='description'></textarea>
                        <!--description is essential  for name when error handling-->

                        <!--other wise it will give all errors -->
                        </div>
                        
                        
                       
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </fieldset>
                </form>
                <a href="{{url('/')}}" class="btn btn-primary">back </a>
            </div>
        </div>
   </div>
   <br> <!--this is use for space-->
@include("inc.footer");

   