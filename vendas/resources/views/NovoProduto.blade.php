@extends('layout.app', ["current" => "produtos"])

@section('body')

<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeCategoria">Nome do Produto</label>
                <input type="text" class="form-control" name="nome" 
                       id="nomeProduto" placeholder="Nome">
            </div>            
            <div class="form-group">
                <label for="produtoQuantidade">Quantidade</label>
                <input type="number" class="form-control" name="quantidade" 
                       id="quantiadeProduto" placeholder="Quantidade">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Preço</label>
                <input type="text" class="form-control" name="preco" 
                       id="precoProduto" placeholder="Preço">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Comissão</label>
                <input type="text" class="form-control" name="comissao" 
                       id="comissaoProduto" placeholder="Comissão">
            </div>
            <div class="form-group">
                <label for="nomeCategoria">Classificação</label>
                <select class="form-control" name="classificacao"> 
                            <option value="5"> 5 - Estrelas </option>
                            <option value="4"> 4 - Estrelas </option>
                            <option value="3"> 3 - Estrelas </option>
                            <option value="2"> 2 - Estrelas </option>
                            <option value="1"> 1 - Estrelas </option>
                </select>
            </div>
            <div class="form-group">
                        <label for="url" class="control-label">Imagem</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="url" placeholder="url" name="image">
                        </div>
                    </div>   
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>

@endsection