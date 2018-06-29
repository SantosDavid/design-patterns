# Facade

Esse padrão é recomendado para casos que o código é altamente aclopado.

Quando para realizar uma operação é necessário chamar vários métodos de diferentes classes em uma ordem especifíca.

Considere que pode ser necessário realizar essa operação em outras pates do sistema.

É ai que entra o padrão Facade, como o nome diz ele é uma "fachada" para abstrair essa complexidade.

Criamos a classe Facade e realizamos essas chamadas em sequências em apenas um lugar, facilitando assim a manutenabilidade da nossa aplicação.