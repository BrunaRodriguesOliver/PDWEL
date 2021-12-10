<table>
   <thead>
      <th>NOME</th>
      <th>PRONTUÁRIO</th>
   </thead>
   <tbody>
      <tr>
        <td>Bruna Rodrigues Oliveira</td>
        <td>SP3031853</td>
      </tr>
   </tbody>
 </table>
 
 <h1>Projeto Final</h1>
 <p>Desenvolvimento de um sistema de gerenciamento de funcionários, onde é possível vizualizar lista de funcionários existentes, realizar cadastro de novos, deletar e editar, utilizando arquitetura MVC. Projto desenvolvido na linguagem PHP.</p>
 
 <h3>Especificações</h3>
 <p>Para que o projeto funcione, é necessário que o banco de dados es as tabelas existam em sua máquina. Para isso é necessário rodas o seguinte script no phpMyAdmin</p>

   ##Para criar o banco de dados <br>
      CREATE DATABASE funcionarios; <br>
   
   ##Para criar a tabela <br>
      CREATE TABLE `funcionario` ( <br>
     `id` int(11) NOT NULL, <br>
     `nome` varchar(200) CHARACTER SET utf8 NOT NULL, <br>
     `email` varchar(200) CHARACTER SET utf8 NOT NULL <br>
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; <br>
