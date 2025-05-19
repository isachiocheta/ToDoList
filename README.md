# 📋 To-Do List em PHP

Um simples site de To-Do List (lista de tarefas) desenvolvido em PHP, com suporte a operações de **criar**, **ler**, **atualizar** e **deletar** (CRUD), utilizando MySQL para armazenamento dos dados.

## 📸 Interface

![image](https://github.com/user-attachments/assets/23b87f0e-e1a5-40ac-9455-01e06bb79742)

## 🚀 Funcionalidades

- ✅ Adicionar novas tarefas  
- 📝 Editar tarefas existentes  
- 🗑️ Remover tarefas  
- 📃 Listar todas as tarefas cadastradas  
- 📌 Marcar tarefas como concluídas ou pendentes  

## 🛠️ Tecnologias utilizadas

- PHP 7+
- MySQL
- HTML5 e CSS3
- Bootstrap (opcional para estilização)
- PDO para conexão com o banco de dados

## 📦 Requisitos

- Servidor local (XAMPP)
- PHP instalado
- MySQL
- Navegador web

## ⚙️ Instalação

1. Clone este repositório:
   ```bash
   git clone https://github.com/isachiocheta/ToDoList.git
   ```

2. Mova a pasta para o diretório do seu servidor local:
   ```bash
   C:\xampp\htdocs\todo-list-php
   ```

3. Importe o banco de dados:
   - Acesse o **phpMyAdmin**
   - Crie um banco de dados chamado `todolist`
   - Importe o arquivo `todolist.sql` (incluso no projeto)

4. Configure a conexão com o banco de dados:
   - No arquivo `config/conexao.php`, edite as informações conforme seu ambiente:

   ```php
   $host = 'localhost';
   $dbname = 'todolist';
   $usuario = 'root';
   $senha = '';
   ```

5. Acesse o projeto no navegador:
   ```
   http://localhost/todo-list-php/
   ```

## 📁 Estrutura do Projeto

```
todo-list-php/
├── config/
│   └── conexao.php
├── public/
│   └── index.php
├── tarefas/
│   ├── criar.php
│   ├── editar.php
│   ├── excluir.php
├── views/
│   ├── header.php
│   ├── footer.php
│   └── form_tarefa.php
├── assets/
│   └── style.css
├── README.md
└── todolist.sql
```

## ✍️ Autor

Desenvolvido por Isabela Chiocheta  
📧 Email: isabelachiocheta@gmail.com 

---

📌 **Licença**: Este projeto está licenciado sob a [MIT License](LICENSE).
