<form wire:submit="updateQuestion">
    <div class="form-group">
        <label>Nome da questão</label>
        <input type="text" class="form-control" placeholder="lorem ipsum dolor sit amet?" wire:model='question_name'>
    </div>
    <div class="form-group">
        <label>Texto da questão</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" style="resize: none" maxlength="500" wire:model='question_text'></textarea>
    </div>
    <div class="form-group">
        <label>Opção A</label>
        <input type="text" class="form-control" placeholder="lorem ipsum dolor sit amet?" wire:model='question_alternative_01'>
    </div>
    <div class="form-group">
        <label>Opção B</label>
        <input type="text" class="form-control" placeholder="lorem ipsum dolor sit amet?" wire:model='question_alternative_02'>
    </div>
    <div class="form-group">
        <label>Opção C</label>
        <input type="text" class="form-control" placeholder="lorem ipsum dolor sit amet?" wire:model='question_alternative_03'>
    </div>
    <div class="form-group">
        <label>Opção D</label>
        <input type="text" class="form-control" placeholder="lorem ipsum dolor sit amet?" wire:model='question_alternative_04'>
    </div>

    <div class="form-group">
        <label>Opção correta</label>
        <select class="form-control" wire:model='question_alternative_correct'>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
        </select>
    </div>
    <div style="display: flex; justify-content: flex-end">
        <button type="submit" class="btn btn-success" wire:submit.prevent='teste'>Cadastrar</button>
    </div>
</form>
