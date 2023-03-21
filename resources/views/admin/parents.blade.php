@extends("admin.layout")
@section("main")


<li class="nav-item dropdown">
   
</nav>

<main class="content">
    <div class="container-fluid p-0">



        <div class="row">
            <div class="col-12 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Parents Data</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>


                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">name</th>
                                <th class="d-none d-xl-table-cell">email</th>
                                <th>password</th>
                                <th class="d-none d-md-table-cell">contact Number</th>
                                <th class="d-none d-md-table-cell">city</th>
                                <th class="d-none d-md-table-cell">parent Image</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach($parents as $p)
                            <tr>


                                <td>{{$p->id}}</td>
                                <td class="d-none d-xl-table-cell">{{$p->name}}</td>
                                <td class="d-none d-xl-table-cell">{{$p->email}}</td>
                                <td class="d-none d-xl-table-cell">{{$p->password}}</td>
                                <td><span class="">{{$p->contactNumber}}</span></td>
                                <td class="d-none d-md-table-cell">{{$p->city}}</td>
                                <td class="d-none d-md-table-cell"><img src="./parentImages/{{$p->parentImage}}"
                                        height="62px" width="50px"></td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



        </div>


    </div>
</main>
@endsection