<div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Título da pergunta</th>
                <th scope="col">Data de criação</th>
                <th scope="col" style="text-align: center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                    <th scope="row">{{ $question->id }}</th>
                    <td>{{ $question->question_name }}</td>
                    <td>{{ $question->date }}</td>
                    <td class="d-flex justify-content-center" style="gap: 10px">
                        <a href="##" class="btn btn-success px-4" title="Informações"><i
                                class="fa-solid fa-circle-info"></i></a>
                        <a href="##" class="btn btn-warning px-4" title="Editar"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a href="##" class="btn btn-danger px-4" title="Excluir"><i
                                class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> --}}
            @foreach ($paginator[0] as $key => $page)
                <li class="page-item"><a class="page-link" href="{{$page}}">{{$key}}</a></li>
            @endforeach
            {{-- <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
        </ul>
    </nav>
</div>
