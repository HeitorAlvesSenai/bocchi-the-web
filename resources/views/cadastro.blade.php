@extends("index")
@section("conteudo")
    <header id="header">
        <h1>STARRY - Painel Admin</h1>
        <nav>
            <a href="#cadastro-show">Novo Show</a>
            <a href="#cadastro-ingresso">Novo Ingresso</a>
        </nav>
    </header>

    <main>
        <div class="logo-container">
            <img src="{{ asset('assets/images/Kessoku_Band_Logo.jpg') }}" alt="Kessoku_Band_Logo" class="site-logo">
        </div>

        <section id="cadastro-show">
            <h2>Gerenciar Agenda: Cadastrar Novo Show</h2>
            <div class="content show">
                <p>Utilize o formulário abaixo para adicionar uma nova data de apresentação na agenda oficial da banda.</p>
                
                <form action="#" method="POST" class="formulario-contato">
                    {{-- @csrf --}}
                    
                    <div class="form-group">
                        <label for="show-data">Data do Show:</label>
                        <input type="date" id="show-data" name="data_show" required>
                    </div>

                    <div class="form-group">
                        <label for="show-cidade">Cidade / Estado:</label>
                        <input type="text" id="show-cidade" name="cidade" placeholder="Ex: Belo Horizonte - MG" required>
                    </div>

                    <div class="form-group">
                        <label for="show-local">Local / Casa de Shows:</label>
                        <input type="text" id="show-local" name="local" placeholder="Ex: STARRY BH" value="STARRY" required>
                    </div>

                    <div class="form-group">
                        <label for="show-horario">Horário de Abertura dos Portões:</label>
                        <input type="time" id="show-horario" name="horario_abertura" required>
                    </div>

                    <div class="form-group">
                        <label for="show-status">Status do Evento:</label>
                        <select id="show-status" name="status" required>
                            <option value="confirmado" selected>Confirmado / Ingressos Aberto</option>
                            <option value="esgotado">Esgotado</option>
                            <option value="adiado">Adiado</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-enviar">Publicar Show na Agenda ⚡</button>
                </form>
            </div>
        </section>

        <section id="cadastro-ingresso">
            <h2>Gerenciar Vendas: Cadastrar Lote de Ingressos</h2>
            <div class="content show">
                <p>Defina os valores, setores e a quantidade de bilhetes disponíveis para os shows cadastrados.</p>
                
                <form action="#" method="POST" class="formulario-contato">
                    {{-- @csrf --}}
                    
                    <div class="form-group">
                        <label for="ingresso-show-id">Selecionar o Show Alvo:</label>
                        <select id="ingresso-show-id" name="show_id" required>
                            <option value="" disabled selected>Escolha o show correspondente...</option>
                            <option value="1">10/06 - Belo Horizonte (STARRY BH)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ingresso-preco">Preço Unitário (R$):</label>
                        <input type="number" id="ingresso-preco" name="preco" step="0.01" min="0.00" placeholder="0.00" required>
                    </div>

                    <div class="form-group">
                        <label for="ingresso-quantidade">Quantidade Disponível (Carga total do Lote):</label>
                        <input type="number" id="ingresso-quantidade" name="quantidade_total" min="1" max="50" placeholder="Maximo: 50" required>
                    </div>

                    <div class="form-group">
                        <label for="ingresso-limite">Limite de Ingressos por CPF:</label>
                        <input type="number" id="ingresso-limite" name="limite_por_cpf" min="1" max="10" value="4" required>
                    </div>

                    <div class="form-group">
                        <label for="ingresso-descricao">Benefícios / Descrição do Setor:</label>
                        <textarea id="ingresso-descricao" name="descricao" rows="4" placeholder="Ex: Inclui copo exclusivo da Kessoku Band e entrada prioritária..."></textarea>
                    </div>

                    <button type="submit" class="btn-enviar" style="background-color: #3330e4;">Liberar Lote de Ingressos 🎫</button>
                </form>
            </div>
        </section>
    </main>
@endsection
