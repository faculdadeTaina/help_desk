<?php
//emitindo para o navegador alguma saida com sessao
/*session_start();
$_SESSION['x']='Oi, sou um valor de sessão';
print_r($_SESSION);
echo '<hr/>';
*/


session_start();
//if(!isset($_SESSION['autenticado']))
//header('Location: index.php?login=erro2');
//echo $_SESSION['autenticado'];


//verificar se ouve autenticação dos usuario
$usuarios_autenticado=false;  
$usuario_id=null;
$usuario_perfil_id=id;
$perfis=array(1=>'Administrativo', 2 => 'Usuário');
 //super global e incrementando o metodo post
 //usuarios do sistema 
 //criando autenticação
 $usuarios_app=array(
    //usuarios testes
    array('id'=> 1,'email'=> 'adm@teste.com.br', 'senha'=> '123456', 'perfil_id'=>1),
    array('id'=> 2,'email'=> 'user@teste.com.br', 'senha'=> 'abcd','perfil_id'=>1),
    array('id'=> 3,'email'=> 'maria@teste.com.br', 'senha'=> 'abcd'.'perfil_id'=>2),
    array('id'=> 4,'email'=> 'jose@teste.com.br', 'senha'=> 'abcd','perfil_id'=>2)
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
            $usuario_id=$user['id'];
            print_r($user);
        }
        //testes de senhas e email

        if( $usuarios_autenticado){
            echo 'Usuario autenticado';
            $_SESSION['autenticado']='SIM';
            $_SESSION['x']='um valor';
            $_SESSION['id']=$usuario_id;
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

