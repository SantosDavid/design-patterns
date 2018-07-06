# Strategy

Esse padrão define uma interface para uma família de algoritmos.

De modo que você possa alterar em tempo de execução a estratégia utilizada.

Camadas:

1 - Context: classe responsável por criar e manter uma instância da estratégia.

2 - InterfaceStrategy - Abstração responsável por definir os metódos comuns a todas as estrátegias.

3 - Strategy - Classe concreta responsável por implementar a InterfaceStrategy.