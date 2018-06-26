# Builder

Padrão para criação de objetos complexos.

Esse padrão se divide em basicamente 4 camadas:

1 - Product: O produdo complexo a ser criado.

2 - Abstract Builder: Interface/Classe abstrata que serve como contrato para as variações de product.

3 - Builder: Classes concretas para implementar o abstract builder e construir um produto de acordo com os dados internos.

4 - Director: Classe responsável por criar um objeto utilizando uma das implementações da abstract builder.