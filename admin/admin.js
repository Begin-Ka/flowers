// Form enter //

function login($db,$login,$password) {

//Обязательно нужно провести валидацию логина и пароля, чтобы исключить вероятность инъекции//

//Запрос в базу данных

   $loginResult = mysqli_query($db,"SELECT * FROM userlist WHERE login='$login'AND password='$password' AND admin='1'");

   if(mysqli_num_rows($loginResult) == 1) {  //Если есть совпадение,возвращается true

                   return true;

   } else {//Если такого пользователя не существует, данные стираются,а возвращается false

                    unset($_SESSION['login'],$_SESSION['password']);

                    return false;

 }

}

if(isset($_POST['login']) && isset($_POST['password'])) {

$_SESSION['login'] = $_POST['login'];

$_SESSION['password'] = $_POST['password'];

}

if(isset($_SESSION['login']) && isset($_SESSION['password'])) {

if(login($db,$_SESSION['login'],$_SESSION['password'])) {//Попытка авторизации

   //Тут будут проходить все операции

   $echo = null; //Обнуление переменной, чтобы удалить из вывода форму авторизации

}

}