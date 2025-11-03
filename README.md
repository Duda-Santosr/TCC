# 🌐 TechLife  

## 📖 Descrição da Empresa  
A **TechLife** é uma **empresa fictícia de tecnologia com propósito social**, criada **para fins educacionais** no curso Técnico em Desenvolvimento de Sistemas do **SENAI A. Jacob Lafer**.  
Este projeto foi desenvolvido pelos alunos como parte do **Projeto Integrador**, simulando o funcionamento real de uma empresa de tecnologia voltada para o impacto social.  

A *TechLife* desenvolve soluções inovadoras para **saúde, educação e inclusão digital**, transformando desafios em oportunidades e utilizando a tecnologia como ferramenta de **impacto positivo** para a comunidade.  

- **Missão:** Desenvolver e aplicar soluções tecnológicas inovadoras que promovam o bem-estar da comunidade, contribuindo para avanços nas áreas da saúde, educação e inclusão social.  
- **Visão:** Ser referência em inovação tecnológica com impacto social, reconhecida por transformar setores essenciais em espaços mais acessíveis, humanos e inclusivos.  
- **Proposta de Valor:** Oferecer soluções acessíveis, eficientes e humanizadas, unindo tecnologia e impacto social para melhorar a qualidade de vida das pessoas.  

---

## 🛠 Tecnologias e Ferramentas Utilizadas  
- **Design e Identidade Visual:** Figma, Canva  
- **Desenvolvimento Web:** Laravel (PHP), Bootstrap  
- **Banco de Dados:** MySQL  
- **Controle de Versão:** Git e GitHub  
- **Prototipagem:** Figma  
- **Metodologia de Trabalho:** SCRUM com Kanban  

---

## 📊 Estratégia de Mercado  

- 🎯 **Público-Alvo:** Hospitais públicos e filantrópicos, clínicas de pequeno e médio porte, ONGs, secretarias de saúde e instituições educacionais.  
- 💼 **Análise de Mercado:**  
  O setor de tecnologia na saúde cresce cerca de **15% ao ano no Brasil** (Ministério da Saúde, 2022).  
  Um dos principais concorrentes é a **MV Sistemas**, que oferece soluções completas, porém com custos altos (R$ 50.000 a R$ 200.000/ano).  
- 🚀 **Oportunidade:**  
  A TechLife posiciona-se como uma alternativa **acessível e escalável**, voltada a instituições de **baixo recurso**, com foco em simplicidade, eficiência e impacto social.  
- 💡 **Diferencial:** Soluções de baixo custo, com fácil implementação e treinamento incluso.  

---

## 📁 Passo a Passo da Criação  

1. **Conceito da Marca**  
   - Definição de missão, visão e valores.  
   - Criação do logotipo e paleta de cores.  

2. **Pesquisa de Mercado**  
   - Estudo de tendências em tecnologia na saúde e educação.  
   - Análise de concorrência (MV Sistemas).  

3. **Design da Identidade Visual**  
   - Logotipo, paleta cromática e tipografia.  
   - Guia de estilo visual.  

4. **Estratégia de Posicionamento e Preços**  
   - Preços acessíveis adaptáveis ao porte da instituição.  
   - Marketing digital e conteúdo educacional.  

5. **Plano de Ação e Divulgação**  
   - Materiais educativos (blog, e-books, estudos de caso).  
   - Presença em redes sociais e contato direto com prefeituras e ONGs.  

---

# 🩺 TriÁgil  

## 💡 Introdução  
O **TriÁgil** é o principal projeto da **TechLife**: um **Sistema Web de Pré-Triagem Inteligente** voltado para clínicas e hospitais de pequeno e médio porte.  
Seu objetivo é **organizar o fluxo de pacientes**, **classificar automaticamente a gravidade clínica** e **otimizar os recursos humanos**, reduzindo filas e tempos de espera.  

> ⚙️ **Importante:** O sistema *TriÁgil* é uma **proposta fictícia**, criada **para fins acadêmicos**, representando uma aplicação realista das tecnologias aprendidas durante o curso.  

---

## 🧠 Problemática  
Clínicas e hospitais de pequeno porte enfrentam:  
- Longas filas e triagens manuais;  
- Falta de priorização de atendimentos;  
- Escassez de pessoal técnico e infraestrutura digital;  
- Dificuldade de análise de dados clínicos e administrativos.  

---

## ⚙️ Solução Proposta  
O *TriÁgil* resolve essas questões com um **sistema online de triagem** que:  
- Classifica pacientes em níveis de prioridade (*verde*, *amarelo*, *vermelho*);  
- Fornece **códigos únicos de atendimento**;  
- Exibe **cards dinâmicos** de pacientes em tempo real;  
- Permite **login e gerenciamento por funcionários**;  
- Inclui **guia de primeiros socorros** para pacientes;  
- É acessível em **desktop, tablet e smartphone**.  

---

## 🎯 Objetivos  

### Objetivo Geral  
Desenvolver um sistema digital de pré-triagem que classifique pacientes por gravidade e otimize o fluxo de atendimento em clínicas e hospitais.  

### Objetivos Específicos  
- Criar formulário de pré-triagem digital;  
- Implementar algoritmo de classificação automática;  
- Criar dashboards de gerenciamento para pacientes e funcionários;   

---

## 🧠 Metodologia  
A equipe adotou a **metodologia ágil SCRUM**, com acompanhamento visual em **Kanban**.  
- Entregas contínuas e reuniões semanais;  
- Planejamento colaborativo;  
- Revisões e retrospectivas ao final de cada ciclo.  

As tarefas foram organizadas nas colunas: “A Fazer”, “Em Progresso” e “Concluído”, garantindo acompanhamento do progresso e equilíbrio das responsabilidades.  

---

## 🧾 Requisitos  

### Requisitos Funcionais  
- Cadastro/login de pacientes e funcionários;  
- Formulário de triagem com perguntas guiadas;  
- Classificação automática de risco;  
- Código único de atendimento;  
- Atualização de status (“Aguardando”, “Em Atendimento”, “Concluído”);  
- Painel de gerenciamento de pacientes e consultórios.  

### Requisitos Não Funcionais  
- Resposta em até 2 segundos;  
- Disponibilidade 24/7;  
- Estrutura modular e escalável;  
- Interface responsiva e acessível;  
- Compatibilidade com outros sistemas hospitalares;  
- Segurança e registro de logs (LGPD).  

---

## 🧰 Desenvolvimento Técnico  

O sistema foi desenvolvido com **Laravel**, seguindo a arquitetura **MVC (Model–View–Controller)**:  
- **Model:** Gerencia as entidades *Paciente*, *Funcionário* e *Triagem*;  
- **View:** Interfaces construídas com **Blade** e **Bootstrap**;  
- **Controller:** Lógica de autenticação, triagem, priorização e gerenciamento.  

**Banco de Dados:** MySQL  
**Autenticação:** Guards separados para pacientes e funcionários.  

---

## 🧪 Testes e Validação  
Foram realizados testes funcionais e de interface para garantir:  
- Login e cadastro corretos;  
- Classificação automática de risco;  
- Persistência e exibição dos dados no painel;  
- Responsividade em diferentes tamanhos de tela.  

Além disso, foram executados testes de desempenho e segurança (CSRF e XSS).  

---

## 📈 Resultados Esperados  
- Redução significativa no tempo de triagem e espera;  
- Maior eficiência no gerenciamento de pacientes;  
- Otimização de recursos humanos e físicos;  
- Melhoria na qualidade do atendimento inicial;  
- Acesso democratizado à tecnologia na saúde pública.  

---

## 📞 Contato  
**TechLife – Inovação com Propósito Social**  
📩 *E-mail*: comercial@techlife.com  
🌐 *Site*: [www.techlife.com.br](http://www.techlife.com.br)  

---

## 👥 Integrantes do Projeto  
- Ana Lauren Dourado Pereira  
- Isabela Paiola  
- Laura Araujo Dutra dos Santos  
- Livia Lyandra de Almeida Lima  
- Lucas Comparini Pegoraro  
- Maria Eduarda dos Santos Rosa  
- Sarah Veiga Dantas  
- Yasmin Lopes Borba  

---

## 🎓 Nota Final  
> Este repositório faz parte de um **projeto educacional** desenvolvido no **Curso Técnico em Desenvolvimento de Sistemas – SENAI A. Jacob Lafer (2025)**.  
> A empresa **TechLife** e o sistema **TriÁgil** são **fictícios**, criados exclusivamente para fins **acadêmicos e de demonstração prática**, aplicando os conhecimentos adquiridos em **planejamento, design, marketing e desenvolvimento web (Laravel + Bootstrap)**.  
