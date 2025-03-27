# Devops challenge júnior

Objetivo é demonstrar inteligência, capacidade e organização para realizar tarefas básicas para o cargo.

### Critérios de avaliação:

✔ Organização <br>
✔ Esforço <br>
✔ Entrega em si dos 2 Challenges <br>
✔ Documentação da entrega <br>


### → Challenge Ops:
> Iniciar e configurar uma instância do WordPress no Amazon Lightsail <br>
https://lightsail.aws.amazon.com/ls/docs/pt_br/articles/amazon-lightsail-tutorial-launching-and-configuring-wordpress <br>
Fazer da etapa 1 até a 5 somente.

### → Challenge Dev:

[Plugin DevOps Challenge](devops_challenge.php)

### Objetivo
Este plugin WordPress contém 10 erros diferentes que precisam ser identificados e corrigidos. O objetivo é testar suas habilidades de debugging, conhecimento em PHP e WordPress, além da capacidade de resolver problemas de forma estruturada.

## Aspectos Abordados no Desafio

### 1. Manipulação de Variáveis
- Uso correto de variáveis globais
- Inicialização de variáveis
- Escopo de variáveis em funções

### 2. Sintaxe PHP
- Pontuação correta (pontos e vírgulas)
- Formatação de strings
- Ordem correta de parâmetros em funções

### 3. WordPress Core
- Hooks e filtros do WordPress
- Funções nativas do WordPress
- Internacionalização (i18n)

### 4. Frontend
- CSS responsivo
- Formatação HTML
- Compatibilidade RTL (Right-to-Left)

### 5. Boas Práticas
- Organização de código
- Nomenclatura de funções
- Estrutura de plugins WordPress

### Erros Presentes no Código

### 1. Variável Global
**Dica:** Lembre-se de inicializar suas variáveis antes de usá-las

### 2. Uso de Variável Global
**Dica:** Em PHP, quando você quer usar uma variável global dentro de uma função, precisa declará-la explicitamente

### 3. Formatação de String
**Dica:** Strings multiline em PHP precisam de atenção especial na indentação

### 4. Sintaxe Básica
**Dica:** Em PHP, cada instrução precisa terminar com um ponto e vírgula

### 5. Função de Números Aleatórios
**Dica:** A ordem dos parâmetros em funções matemáticas é importante para o resultado esperado

### 6. Hook do WordPress
**Dica:** Hooks do WordPress precisam de um identificador único para funcionar corretamente

### 7. Variável Indefinida
**Dica:** Sempre verifique se uma variável existe antes de usá-la

### 8. Formatação de Texto
**Dica:** Ao usar printf, o número de placeholders deve corresponder ao número de argumentos

### 9. CSS
**Dica:** Verifique a ortografia das palavras em seus estilos CSS

### 10. Hook de CSS
**Dica:** Existem hooks específicos para adicionar CSS no WordPress

### Resultado Esperado
Após corrigir todos os erros, o plugin deve:
- Exibir uma linha aleatória da música "Segure o Tchan" no painel administrativo
- Funcionar corretamente em diferentes idiomas
- Ser responsivo em diferentes tamanhos de tela
- Suportar layouts RTL
- Não gerar erros PHP ou avisos
- Seguir as boas práticas de desenvolvimento WordPress

### Habilidades Avaliadas
- Conhecimento em PHP
- Familiaridade com WordPress
- Capacidade de debugging
- Atenção aos detalhes
- Entendimento de boas práticas
- Resolução de problemas
- Conhecimento de frontend

---

Este desafio foi criado para avaliar candidatos a posições júnior, testando tanto conhecimentos técnicos quanto a capacidade de identificar e resolver problemas de forma estruturada.


## Entrega
1. Efetue o fork deste repositório e crie um branch com o seu nome e sobrenome. (exemplo: fulano-dasilva)
2. Após finalizar o desafio, crie um Pull Request.
3. Aguarde algum contribuidor realizar o review.
4. Dados de acesso do WordPress e Lightsail com tudo configurado e funcionando
5. Prints e url "http://PublicIpAddress/wp-login.php"
6. Documentação completa com prints e código utilizado challenge dev (Opcional)
7. Desenho de arquitetura do challenge ops (Opcional)
8. Plugin informado arrumado e versionado
9. Suba o plugin para a sua instalação WordPress Lightsail e ative o mesmo.

(Dados de acesso devem ser enviados para o email: lucas.costa@apiki.com)

---

## Evidências
1. Plugin antes dá correção.

- Página Principal
<img src="http://44.195.20.22/wp-content/uploads/2025/03/plugin-erro-1.png" alt="Página Principal">

- Painel Administrativo
<img src="http://44.195.20.22/wp-content/uploads/2025/03/plugin-erro-2.png" alt="Painel Administrativo">

2. Plugin depois dá correção.

- Página Principal
<img src="http://44.195.20.22/wp-content/uploads/2025/03/plugin-corrigido-1.png" alt="Página Principal">

- Painel Administrativo
<img src="http://44.195.20.22/wp-content/uploads/2025/03/plugin-corrigido-2.png" alt="Painel Administrativo">

2. Desenho de arquitetura.

- Amazon Lightsail
<img src="http://44.195.20.22/wp-content/uploads/2025/03/arquitetura.png" alt="Amazon Lightsail">

- Login Wordpress
<img src="http://44.195.20.22/wp-content/uploads/2025/03/Captura-de-tela-2025-03-26-214002.png" alt="Login Wordpress">

3. Acesso ao Admin Wordpress.

- URL
http://44.195.20.22/wp-admin

- Login
user

- Senha
O3:gf1st3s5/