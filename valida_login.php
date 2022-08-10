<?php
//emitindo para o navegador alguma saida com sessao
/*session_start();
$_SESSION['x']='Oi, sou um valor de sessão';
print_r($_SESSION);
echo '<hr/>';
*/
/*
<?php
session_start();
if(!isset($_SESSION['autenticado']))
header('Location: index.php?login=erro2');
echo $_SESSION['autenticado'];
?>
*/
//verificar se ouve autenticação dos usuario
$usuarios_autenticado=false;
 //super global e incrementando o metodo post
 //usuarios do sistema 
 //criando autenticação
 $usuarios_app=array(
    //usuarios testes
    array('email'=> 'adm@teste.com.br', 'senha'=> '123456'),
    array('email'=> 'user@teste.com.br', 'senha'=> 'abcd')

 );
 
 //echo $usuarios_app;

    /*
    echo $_GET['email'];
    echo '<br/>';
    echo $_GET['senha'];
   */
  //incrementando o metodo post
   
    
    //
    foreach($usuarios_app as $user){
       // print_r($user);
       //exbir usuarios
       /* echo 'Usuário app: '. $user['email']. '/'.$user['senha'];
        echo '<br/>';
        echo 'Usuário form:'. $_POST['email'] .'/' .$_POST['senha'];

        echo '<hr>';*/
        //verificar se os dados são iguai
        if($user['email']== $_POST['email'] && $user['senha']== $_POST['senha']){
            $usuarios_autenticado=true;
       
        }
        //testes de senhas e email

        if( $usuarios_autenticado){
            echo 'Usuario autenticado';
            $_SESSION['autenticado']='SIM';
            //redicionar
            header('Location: home.php');
        }else{
            $_SESSION['autenticado']='NAO';
            //echo 'Erro ao autenticar';
            //rendezirar ao usuairo
            header('Location: index.php?login=erro');
        }
   /* echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha'];*/

    }


?>
