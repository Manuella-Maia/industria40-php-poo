# Indústria 4.0 com PHP e POO

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![POO](https://img.shields.io/badge/POO-1d2329?style=for-the-badge&logo=php&logoColor=white) ![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white) ![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)

Exercícios e desafios de **PHP** com **Programação Orientada a Objetos**, usando como tema máquinas, sensores e produção industrial. O projeto vai de laços de repetição simples até um painel de monitoramento com herança e polimorfismo.

**Página Web**: https://industria40-php-poo-web.vercel.app/


## Destaque: Painel Industrial 4.0

O [`painel.php`](painel.php) cria cinco objetos `MaquinaIndustrial` em um array, percorre com `foreach` e exibe temperatura, status e necessidade de manutenção. Máquinas em alerta ficam destacadas em vermelho.

## Conceitos praticados

- Laços `for`, `while`, `do...while` e `foreach`
- Arrays simples e associativos
- Classes, objetos, atributos e métodos
- Encapsulamento (`private`, `protected`, `public`)
- Herança (`Maquina` → `MaquinaIndustrial`) e polimorfismo
- Array de objetos
- Estruturas condicionais
- PHP misturado com HTML

## Estrutura de pastas

```
.
├── class/              Classes usadas pelos exercícios e desafios
├── Desafio15/          Variações A, B, C e D
├── docs/               Relatório técnico e prints
├── exercicio01.php ... exercicio12.php
├── desafio16.php
├── desafio17.php
├── desafio18.php
└── painel.php          Desafios 19 e 20
```

Os arquivos que usam classes carregam com `require_once __DIR__ . "/class/NomeDaClasse.class.php";`. Por isso a pasta `class/` precisa ficar ao lado dos exercícios.

## Como executar

Requer **PHP 7.4 ou superior** (usa propriedades tipadas) e um servidor local, como Laragon ou XAMPP.

1. Clone o repositório dentro da pasta do servidor (`www` no Laragon, `htdocs` no XAMPP):
   ```
   git clone https://github.com/SEU-USUARIO/NOME-DESTE-REPOSITORIO.git
   ```
2. Inicie o servidor e abra no navegador, por exemplo:
   - `http://localhost/NOME-DESTE-REPOSITORIO/exercicio01.php`
   - `http://localhost/NOME-DESTE-REPOSITORIO/painel.php`

As saídas usam `<br>` e HTML, então foram feitas para o navegador, não para o terminal.

## Exercícios

| Arquivo | Tema | Conceito |
|---|---|---|
| [exercicio01](exercicio01.php) | Contagem de peças produzidas | `for` |
| [exercicio02](exercicio02.php) | Monitoramento de temperatura | `while` |
| [exercicio03](exercicio03.php) | Inicialização obrigatória de equipamento | `do...while` |
| [exercicio04](exercicio04.php) | Lista de sensores industriais | `foreach` |
| [exercicio05](exercicio05.php) | Controle de estoque automatizado | `foreach` em array associativo |
| [exercicio06](exercicio06.php) | Classe Máquina | Objetos em array |
| [exercicio07](exercicio07.php) | Array de sensores | Classe `Sensor` e alerta |
| [exercicio08](exercicio08.php) | Produção até a meta | `while` |
| [exercicio09](exercicio09.php) | Consumo de energia | Acumulador, média e contador |
| [exercicio10](exercicio10.php) | Relatório de manutenção | Array associativo e `if/else` |
| [exercicio11](exercicio11.php) | Relatório com a classe Equipamento | Objetos e `verificarManutencao()` |
| [exercicio12](exercicio12.php) | Monitoramento de produção | Classe `Producao` com `while` |

## Desafios

| Arquivo | Tema |
|---|---|
| [Desafio15_A](Desafio15/Desafio15_A.php) | Inspeção de 50 produtos (`for`) |
| [Desafio15_B](Desafio15/Desafio15_B.php) | Máquina ligada enquanto a temperatura for menor que 80 (`while`) |
| [Desafio15_C](Desafio15/Desafio15_C.php) | Teste de comunicação (`do...while`) |
| [Desafio15_D](Desafio15/Desafio15_D.php) | Lista de equipamentos (`foreach`) |
| [desafio16](desafio16.php) | Contador com `while` |
| [desafio17](desafio17.php) | Ciclos com `for` |
| [desafio18](desafio18.php) | `foreach` com array de objetos `Sensor` |
| [painel](painel.php) | Desafios 19 e 20: Painel Industrial 4.0 com HTML |

## Classes

| Classe | Função |
|---|---|
| [`Maquina`](class/Maquina.class.php) | Nome, modelo e status de uma máquina |
| [`MaquinaIndustrial`](class/MaquinaIndustrial.class.php) | Estende `Maquina` com setor, temperatura e horas. Alerta acima de 80 °C e manutenção acima de 1000 h |
| [`Sensor`](class/Sensor.class.php) | Tipo, valor e unidade da leitura. Alerta de temperatura acima de 60 |
| [`Equipamento`](class/Equipamento.class.php) | Horas de funcionamento e limite de manutenção |
| [`Producao`](class/Producao.class.php) | Meta de produção e quantidade produzida |

## Documentação

O relatório técnico, com prints e explicações, está na pasta [`docs/`](docs/).

## Autoria

- **Manuella Maia Lopes:** exercícios 07 a 12, desafios 18 a 20 e as classes `MaquinaIndustrial`, `Sensor`, `Equipamento` e `Producao`.
- **Maria Clara de Souza Cerqueira:** exercícios 01 a 06, desafios 15 a 17 e a classe `Maquina`.
