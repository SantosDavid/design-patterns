# Adapter

O propósito desse padrão é criar um adaptador, para que classes com diferentes interfaces consigam se comunicar.

Esse padrão se divide em 4 camadas:

1 - Adaptae: Elemento a ser adaptado, como por exemplo: uma classe legada, ou uma classe de uma biblioteca.

2 - Taget: Interface que sera usada pelo client, abstrai a implementação do elemento adaptae. 

3 - Client: Elemento que irá utilizar o adaptador, e não irá possuir nenhum conhecimento da implementação do elemento adaptae.

4 - Adapter: Classe que implementa a interface target e usará internamente o elemento adaptae.

# Exemplo

Para esse exemplo considere a classe PayPal como integrante de uma biblioteca. 

Para evitar que mudanças na biblioteca causem efeitos colaterais no código, foi utilizado o padrão adapter. 

Caso ocorra qualquer mudança na biblioteca será necessário realizar a mudança em apenas um lugar.