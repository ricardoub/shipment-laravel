<div class="row">
    <div class="col">
        <table class="table table-sm table-hover">
            <thead class="">
                <tr class="table-active">
                    <th scope="col" class="col-1 text-center">ID</th>
                    <th scope="col" class="col-4 col-md-2 col-lg-2">Nome</th>
                    <th scope="col" class="col-4 col-md-3 col-lg-3 d-none d-sm-table-cell">Email</th>
                    <th scope="col" class="col-1 col-md-1 col-lg-1 text-center">Escopo</th>
                    <th scope="col" class="col-2 col-md-2 col-lg-3 col-xl-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row" class="text-center">{{$user->id}}</th>
                    <td >{{$user->name}}</td>
                    <td class="d-none d-sm-table-cell">{{$user->email}}</td>
                    <td class="text-center">{{$user->record_scope}}</td>
                    <td class="text-center">
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <div class="btn-group ml-auto" role="group" aria-label="Actions">
                                <a class="btn btn-sm btn-primary"  role="button"
                                    href="{{ route('users.show', $user->id) }}">
                                    <i class="far fa-folder-open"></i>
                                    <span class="d-none d-lg-inline mrl-2">
                                        {{ __('Exibir') }}
                                    </span>
                                </a>
                                <a class="btn btn-sm btn-primary"  role="button"
                                    href="{{ route('users.edit', $user->id) }}">
                                    <i class="far fa-edit"></i>
                                    <span class="d-none d-lg-inline mrl-2">
                                        {{ __('Alterar') }}
                                    </span>

                                    <input type="hidden" name="_method" value="DELETE">
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                    <span class="d-none d-lg-inline mrl-2">
                                        {{ __('Excluir') }}
                                    </span>
                                </button>
                            </div>
                        </form>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
