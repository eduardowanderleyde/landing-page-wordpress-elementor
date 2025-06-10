# Landing Page WordPress + Elementor

Este projeto consiste em uma landing page profissional desenvolvida com WordPress e Elementor, focada em apresentar serviços de engenharia de software.

## 🚀 Tecnologias Utilizadas

- WordPress
- Elementor Pro
- PHP
- HTML5
- CSS3
- JavaScript
- Docker

## 📋 Requisitos

- Docker
- Docker Compose
- Git

## 🔧 Instalação e Execução

1. Clone o repositório:

```bash
git clone https://github.com/eduardowanderleyde/landing-page-wordpress-elementor.git
cd landing-page-wordpress-elementor
```

2. Inicie os containers Docker:

```bash
docker-compose up -d
```

3. Acesse o WordPress:

- Abra <http://localhost:8000> no seu navegador
- Complete a instalação do WordPress

4. Instale o Elementor:

- No painel WordPress, vá em Plugins > Adicionar Novo
- Procure por "Elementor"
- Instale e ative o plugin

5. Ative o tema:

- No painel WordPress, vá em Aparência > Temas
- Ative o tema "Software Engineer Landing"

6. Configure a página inicial:

- Crie uma nova página
- Selecione o template "Página Inicial"
- Publique a página
- Vá em Configurações > Leitura
- Selecione "Uma página estática" e escolha a página criada

## 🎨 Personalização

1. Edite a página inicial com o Elementor:

- Clique em "Editar com Elementor"
- Use os widgets personalizados:
  - Skill Card
  - Project Card
  - Contact Form

2. Personalize as cores e estilos:

- Edite o arquivo `wp-content/themes/software-engineer-landing/style.css`
- Modifique as variáveis CSS no início do arquivo

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 👨‍💻 Autor

Eduardo Wanderley
