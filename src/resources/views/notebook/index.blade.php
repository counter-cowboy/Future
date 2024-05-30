<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Notebook</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
</div>
<div class="col-6">
    <table class="table table-striped col-4 mt-5">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FIO</th>
            <th scope="col">Company</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Birthday</th>
            <th scope="col">Photo</th>
        </tr>
        </thead>
        <tbody>

        @foreach($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}} </th>
                <td>{{$contact->fio}}</td>
                <td> {{$contact->company}}</td>
                <td>{{$contact->phone_number}}></td>
                <td>{{$contact->email}} </td>
                <td>{{$contact->birth_date}} </td>
                <td>{{$contact->photo}} </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
<div class="container mt-5 align-content-center" >{{ $contacts->withQueryString()-> links() }}</div>

</body>
</html>
