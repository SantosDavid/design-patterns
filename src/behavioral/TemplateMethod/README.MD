# Template Method

Esse padrão define uma classe abstrata que possuí operações comuns a outras classes.

Algumas operações são iguais, e por isso são implementadas na classe base.

Outras são específicas e implementadas nas classes que a estendem.

Geralmente existe um método público na classe abstrata que é responsável por chamar todos os outros na sua devida sequência.

Pode-se criar um hook method caso alguma classe filha possua alguma operação especifica.

Camadas:

1 - Classe abstrata: Base do algoritmo.

2 - Subclasses: Classes que extendem a classe abstrata e implementam a parte que varia.