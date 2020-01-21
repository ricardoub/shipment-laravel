<div class="row">
    <div class="col">
        <table class="table table-sm table-hover">
            <thead class="">
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col" class="d-none d-sm-table-cell">Email</th>
                    <th scope="col">Escopo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td >{{$user->name}}</td>
                    <td  class="d-none d-sm-table-cell">{{$user->email}}</td>
                    <td >{{$user->record_scope}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
