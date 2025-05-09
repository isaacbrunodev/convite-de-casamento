# Site de Casamento - Sistema de Confirmação de Presença
O site pode ser visto em https://www.isaacemayzan.site

Este é um sistema web desenvolvido em Laravel para gerenciar confirmações de presença em um casamento. O sistema permite que os convidados confirmem sua presença e indiquem se levarão acompanhantes.
![image](https://github.com/user-attachments/assets/90c515b4-2a62-4131-8e20-4f2dad7816b3)
![image](https://github.com/user-attachments/assets/5fb5fab9-4fc3-47f5-b8a5-f676a756bd64)
![image](https://github.com/user-attachments/assets/7b7d3da1-8fbd-4bec-b7b8-cef6525113a4)

## 🚀 Funcionalidades

- Confirmação de presença online
- Seleção de acompanhantes (limite de 1 a 3)
- Interface intuitiva e responsiva
- Sistema de notificação de confirmação
- Gerenciamento de lista de convidados

## 🛠️ Tecnologias Utilizadas

- Laravel 10.x
- PHP 8.1+
- MySQL
- Livewire
- Docker
- HTML5/CSS3
- JavaScript/jQuery

## 📋 Pré-requisitos

- PHP 8.1 ou superior
- Composer
- Docker e Docker Compose
- Node.js e NPM

## 🔧 Instalação

1. Clone o repositório:
```bash
git clone https://github.com/isaacbrunodev/convite-de-casamento.git
cd convite-de-casamento
```

2. Instale as dependências do PHP:
```bash
composer install
```

3. Copie o arquivo de ambiente:
```bash
cp .env.example .env
```

4. Configure o arquivo .env com suas configurações de banco de dados

5. Inicie os containers Docker:
```bash
docker-compose up -d
```

6. Execute as migrações:
```bash
docker-compose exec app php artisan migrate
```

7. Gere a chave da aplicação:
```bash
docker-compose exec app php artisan key:generate
```

## 🌐 Endpoints da API

### Confirmação de Presença

#### `GET /confirmar-presenca`

```http
GET /confirmar-presenca HTTP/1.1
Host: seu-dominio.com
Accept: text/html
```

**Resposta**
```http
HTTP/1.1 200 OK
Content-Type: text/html

<html>
  <!-- Formulário de confirmação de presença -->
</html>
```

#### `POST /confirmar-presenca`

```http
POST /confirmar-presenca HTTP/1.1
Host: seu-dominio.com
Content-Type: application/json

{
  "nome": "João Silva",
  "acompanhantes": 2
}
```

**Parâmetros**
| Campo | Tipo | Descrição |
|-------|------|-----------|
| nome | string | Nome completo do convidado |
| acompanhantes | integer | Número de acompanhantes (0-3) |

**Resposta de Sucesso**
```json
{
  "status": "success",
  "message": "Presença confirmada com sucesso",
  "data": {
    "nome": "João Silva",
    "acompanhantes": 2,
    "confirmado": true
  }
}
```

### Administração de Convidados

#### `GET /admin/convidados`

```http
GET /admin/convidados HTTP/1.1
Host: seu-dominio.com
Authorization: Bearer {seu-token}
Accept: text/html
```

**Resposta**
```http
HTTP/1.1 200 OK
Content-Type: text/html

<html>
  <!-- Lista de convidados confirmados -->
</html>
```

#### `GET /admin/convidados/{id}`

```http
GET /admin/convidados/123 HTTP/1.1
Host: seu-dominio.com
Authorization: Bearer {seu-token}
Accept: text/html
```

**Parâmetros da URL**
| Parâmetro | Tipo | Descrição |
|-----------|------|-----------|
| id | integer | ID do convidado |

**Resposta**
```http
HTTP/1.1 200 OK
Content-Type: text/html

<html>
  <!-- Detalhes do convidado específico -->
</html>
```

**Códigos de Erro**
| Código | Descrição |
|--------|-----------|
| 401 | Não autorizado - Token inválido ou expirado |
| 403 | Proibido - Sem permissão de administrador |
| 404 | Não encontrado - Convidado não existe |

// ... rest of the existing code ...

## 📦 Estrutura do Banco de Dados

### Tabela: convidados
- `id` (bigint) - Chave primária
- `nome` (varchar) - Nome do convidado
- `confirmado` (boolean) - Status da confirmação
- `acompanhantes` (integer) - Número de acompanhantes
- `created_at` (timestamp) - Data de criação
- `updated_at` (timestamp) - Data de atualização

## 🔐 Variáveis de Ambiente

```env
APP_NAME="Site de Casamento"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=wedding_site
DB_USERNAME=root
DB_PASSWORD=
```

## 📄 Licença

Este projeto está sob a licença MIT - veja o arquivo [LICENSE.md](LICENSE.md) para detalhes.

## ✨ Contribuição

1. Faça o fork do projeto
2. Crie sua feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit suas mudanças (`git commit -m 'Add some AmazingFeature'`)
4. Push para a branch (`git push origin feature/AmazingFeature`)
5. Abra um Pull Request

## 👥 Autores

* **Isaac Bruno** - *Desenvolvimento inicial* - [isaacbrunodev](https://github.com/isaacbrunodev)

## 📞 Suporte

Para suporte, envie um email para isaacbruno1996@gmail.com
