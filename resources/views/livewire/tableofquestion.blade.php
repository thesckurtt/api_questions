<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Título da pergunta</th>
            <th scope="col">Data de criação</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
            <th scope="row">{{$question->id}}</th>
            <td>{{$question->question_name}}</td>
            <td>{{$question->date}}</td>
            <td class="d-flex justify-content-center" style="gap: 10px">
                <button type="button" class="btn btn-success"><i class="fa-solid fa-circle-info"></i></button>
                <button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
