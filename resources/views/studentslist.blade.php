<div class="card" >
    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2017/05/11/14/45/book-2304389__340.jpg" alt="Card image cap">
    <div class="card-body">
      <p class="card-text"><h1>Students list</h1></p>
    
        <div class="table-responsive ">  
            <table class="table table-striped">
                <thead class="table-head">
                    <tr>
                        <th scope="col">SystemId</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Field</th>
                        <th scope="col">Operations</th>
                    </tr>
                </thead>
                <tbody >
                    @foreach ($students as $student)
                        <tr >
                        <td>{{ $student->systemid }}</td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->age }}</td>
                        <td style="wordbreak:break-word;">{{ $student->field}}</td>
                        <td>
                            <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
   



