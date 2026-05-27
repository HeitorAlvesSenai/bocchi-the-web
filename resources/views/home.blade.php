@extends("index")
@section("conteudo")
    <main>
        <div class="logo-container">
            <img src="assets/images/Kessoku_Band_Logo.jpg" alt="Kessoku_Band_Logo" class="site-logo">
        </div>
        <section id="inicio">
            <h2>Início</h2>
            <div class="content">
            <h1>Bem-vindo ao universo da Kessoku Band!</h1>
            <p>Aqui você encontra tudo sobre nossa música, nossos integrantes e os momentos que nos conectam com fãs ao redor do mundo.</p>

            <h3>🎶 Últimos Lançamentos</h3>
            <p>Descubra o álbum Kessoku Band, que conquistou o público com faixas como Seishun Complex e Distortion!!.</p>
            <p>Explore o mini-álbum Re:Kessoku Band, com colaborações inéditas e novas sonoridades.</p>

            <h3>👩‍🎤 Conheça os Integrantes</h3>
            <p><strong class="hitori">Hitori Gotoh</strong> - guitarra principal e compositora.</p>
            <p><strong class="nijika">Nijika Ijichi</strong> - baterista e líder.</p>
            <p><strong class="ryo">Ryo Yamada</strong> - baixista criativa.</p>
            <p><strong class="ikuyo">Ikuyo Kita</strong> - vocalista e guitarra rítmica.</p>

            <h3>📺 Experiência Multimídia</h3>
            <p>Assista aos nossos videoclipes e performances ao vivo.</p>
            <p>Acompanhe novidades e bastidores exclusivos.</p>

            <h3>🌍 Conexão Global</h3>
            <p>Milhões de fãs já acompanham a Kessoku Band em plataformas digitais.</p>
            <p>Junte-se à nossa comunidade e compartilhe a paixão pelo j-rock e pelo rock alternativo.</p>
            </div>
        </section>

        <section id="sobre">
            <h2>Sobre</h2>
            <div class="content">
            <h1>Sobre nós</h1>
            <p>A Kessoku Band é um grupo japonês de rock alternativo que ganhou enorme destaque nos últimos anos, especialmente após o lançamento de seu álbum de estreia em 2022.</p>
            <p>O nome “Kessoku” significa “união” ou “ligação”, refletindo a proposta da banda de transmitir conexão e energia através da música.</p>

            <h3>🎸 Formação e Integrantes</h3>
            <ul>
                <li><strong class="hitori">Hitori Gotoh</strong> - guitarrista principal e compositora, conhecida por riffs marcantes e estilo introspectivo.</li>
                <li><strong class="nijika">Nijika Ijichi</strong> - baterista e líder da banda, responsável pela coesão rítmica e pela organização dos projetos.</li>
                <li><strong class="ryo">Ryo Yamada</strong> - baixista, com forte influência de rock alternativo e linhas de baixo criativas.</li>
                <li><strong class="ikuyo">Ikuyo Kita</strong> - guitarrista rítmica e vocalista, trazendo energia e carisma para as apresentações.</li>
            </ul>

            <h3>🎶 Discografia e Sucessos</h3>
            <p>Álbum “Kessoku Band” (2022): contém 14 faixas, incluindo Seishun Complex e Distortion!!. O disco vendeu mais de 100 mil cópias físicas e recebeu o Disco de Ouro da RIAJ.</p>
            <p>Mini-álbum “Re:Kessoku Band” (2024): trouxe novas composições e colaborações, como Boku to Sangenshoku, feita em parceria com a marca I LOHAS.</p>
            <p>Colaborações: artistas renomados como Ai Higuchi, ZAQ e Maguro Taniguchi (KANA-BOON) participaram da composição de algumas músicas.</p>

            <h3>📺 Impacto Cultural</h3>
            <p>O grupo rapidamente conquistou espaço nas paradas japonesas e internacionais, com milhões de streams em plataformas digitais.</p>
            <p>Suas músicas misturam influências de rock alternativo, pop rock e elementos de j-rock, criando uma sonoridade moderna e acessível.</p>
            <p>A estética visual da banda combina apresentações ao vivo com videoclipes que exploram tanto cenários urbanos quanto temáticas juvenis.</p>

            <h3>🔑 Diferenciais</h3>
            <p>Energia juvenil: letras que abordam amizade, insegurança e superação.</p>
            <p>Reconhecimento da crítica: destaque em premiações e listas de melhores álbuns de 2022.</p>
            <p>Expansão internacional: crescente base de fãs fora do Japão, especialmente na América Latina e Europa.</p></p>
            </div>
        </section>

        <section id="servico">
            <h2>Serviços</h2>
            <div class="content">
            <h3>🎤 Agenda de Shows</h3>
            <p>Confira os próximos dias disponíveis para apresentações da Kessoku Band no Starry:</p>
            
            <ul class="agenda-shows">
                <li>10/06 - Belo Horizonte</li>
            </ul>

            <h3>🎫 Compras de Ingressos</h3>
            <p>Aqui você pode comprar os ingressos da casa de shows Starry.</p>
            <a href="/compras" class="btn-enviar" style="text-decoration: none; display: inline-block; margin-top: 10px;">Garantir meu Ingresso ⚡</a>
            </div>
        </section>


        <section id="contato">
            <h2>Contato</h2>
            <div class="content">
                <p>Quer trocar uma ideia, fazer uma proposta de show no STARRY ou enviar mensagens de apoio para as meninas? Deixe sua mensagem abaixo!</p>
                
                <form action="#" method="POST" class="formulario-contato">
                    {{-- Nota: Se for disparar para uma rota Laravel real depois, não esqueça do @csrf --}}
                    
                    <div class="form-group">
                        <label for="nome">Seu Nome:</label>
                        <input type="text" id="nome" name="nome" placeholder="Insira o seu nome..." required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail de Contato:</label>
                        <input type="email" id="email" name="email" placeholder="seu-email@exemplo.com..." required>
                    </div>

                    <div class="form-group">
                        <label for="assunto">Assunto:</label>
                        <select id="assunto" name="assunto" required>
                            <option value="" disabled selected>Selecione um assunto...</option>
                            <option value="falar-com-banda">Mensagem para as integrantes (Fan Mail)</option>
                            <option value="shows">Agendamento de Shows / Eventos</option>
                            <option value="imprensa">Imprensa e Parcerias Comerciais</option>
                            <option value="suporte">Problemas com Ingressos / Loja</option>
                            <option value="outro">Outros Assuntos</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Sua Mensagem:</label>
                        <textarea id="mensagem" name="mensagem" rows="6" placeholder="Escreva aqui..." required></textarea>
                    </div>

                    <button type="submit" class="btn-enviar">Enviar Mensagem 🎸</button>
                </form>
            </div>
        </section>
    </main>
@endsection
