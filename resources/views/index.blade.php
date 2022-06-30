@extends('layout.app')

@section('body')
 <div>
    
        <div class="cards">
            <div class="card">
                <h5 class="card-title">Cadastro de produtos</h5>
                <p class="card-text">aqui voce cadastra todos os seus produtos. Só não se esqueça de criar as categorias</p>
                
                <button>
                    <a href="/produtos" class="link">Cadastre os seus produtos</a>
                </button>
            </div>

            <div class="card">
                <h5 class="card-title">Cadastro de departamentos</h5>
                <p class="card-text">aqui voce cadastra todos os seus produtos. Só não se esqueça de criar as categorias</p>
                <button>
                    <a href="/produtos" class="link">Cadastre os seus produtos</a>
                </button>
                
            </div>
        </div>
    
 </div>
@endsection