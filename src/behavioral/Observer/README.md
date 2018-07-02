# Observer

Esse padrão é recomendado para casos em que existe uma relação de 1 para n.

Quando uma alteração em um objeto resulta na chamada de vários outros objetos.

Estrutura:

1 - Subject Contract: Interface implementada pela classe que representa o 1 na relação.

2 - Observer Contract: Interface implementada por todas as classes n na relação.

3 - Subject: Classe que implementa a interface Subject Contract, responsável por notificar uma nova atualização de alguma propriedade.

4 - Observer: Classe que realiza alguma ação quando existe alguma mudança no objeto Subject.