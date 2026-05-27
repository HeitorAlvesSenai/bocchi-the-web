@extends("index")
@section("conteudo")
    <header id="header">
        <h1>Kessoku Band - Ingressos</h1>
        <nav>
            <a href="/">Voltar</a>
            <a href="#comprar">Comprar</a>
        </nav>
    </header>

    <main>
        <div class="logo-container">
            <img src="assets/images/Kessoku_Band_Logo.jpg" alt="Kessoku_Band_Logo" class="site-logo">
        </div>

        <section id="comprar">
            <h2>Garantir Ingressos (STARRY)</h2>
            <div class="content show"> <h1>Próximo Show Disponível</h1>
                <p>Prepare-se para ouvir os riffs das nossas guitarristas e a energia que te espera no palco ao vivo na icônica casa de shows STARRY!</p>
                
                <div class="ticket-info-box">
                    <h3>📅 10/06 - Belo Horizonte</h3>
                    <p><strong>Abertura dos portões:</strong> 18:00 | <strong>Início do Show:</strong> 20:00</p>
                    <p><strong>Local:</strong> Filial STARRY BH</p>
                </div>

                <hr style="border: 0; height: 1px; background: #ccc; margin: 20px 0;">

                <form action="#" method="POST" class="formulario-contato">
                    {{-- @csrf --}}
                    
                    <div class="form-group">
                        <label for="nome-comprador">Nome Completo:</label>
                        <input type="text" id="nome-comprador" name="nome" placeholder="Digite seu nome..." required>
                    </div>

                    <div class="form-group">
                        <label for="email-comprador">E-mail para envio do Ingresso:</label>
                        <input type="email" id="email-comprador" name="email" placeholder="seu-email@exemplo.com..." required>
                    </div>

                    <div class="form-group">
                        <label for="tipo-ingresso">Setor / Tipo de Ingresso:</label>
                        <select id="tipo-ingresso" name="tipo_ingresso" required>
                            <option value="" disabled selected>Selecione a modalidade...</option>
                            <option value="pista-inteira">Pista (Inteira) - R$ 120,00</option>
                            <option value="pista-meia">Pista (Meia-Entrada / Estudante) - R$ 60,00</option>
                            <option value="vip-starry">VIP STARRY (Inclui brinde exclusivo da Banda) - R$ 250,00</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" id="quantidade" name="quantidade" min="1" max="4" value="1" required>
                        <small style="color: #666; font-size: 0.85rem;">Máximo de 4 ingressos por CPF.</small>
                    </div>

                    <div class="form-group">
                        <label for="metodo-pagamento">Forma de Pagamento:</label>
                        <select id="metodo-pagamento" name="metodo_pagamento" required>
                            <option value="" disabled selected>Escolha como pagar...</option>
                            <option value="pix">PIX (Aprovação Imediata)</option>
                            <option value="credito">Cartão de Crédito</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-enviar">Avançar para o Pagamento 🎫</button>
                </form>
            </div>
        </section>
    </main>
@endsection
