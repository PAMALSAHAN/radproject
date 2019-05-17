@include('inc.header'); 
<div class="container">
    <div class="row">
                <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="">

                <!--to collect data from the model-->
                    @if(count($articles)>0)
                        @foreach($articles->all() as $article)
                    
                <tr class="table-active">
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->description}}</td>
                <td>
                    
                     <a href=""><button type="button" class="btn btn-info">view</button></a> 
                    <a href=""><button type="button" class="btn btn-success">edit</button></a>
                    <a href=""><button type="button" class="btn btn-danger">delete</button></a>

                    <!--
                        
                        after creating buttons have to create the 
                        controller in the cmd so write in 
                        command line:
                        php artisan make:controller CreatesController
                        
                        app->Http=>controllers=> maked controller

                        then we have to create a model
                        php artisan make:model modelname -m

                        database->migrations->..

                        php artisan migrate
                        if there is an error please follow
                        stack overflow it has it 
                        by changing the code plese drop down
                        all tables in the data base and 
                        run php artisan migrate in the cmd
                        then it will make four tables

                    -->
                </td>
                </tr>
                    @endforeach
                @endif
            </tbody>
            </table> 
    </div>
</div>
@include("inc.footer");

   