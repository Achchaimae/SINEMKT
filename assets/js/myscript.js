// login pop up
    function login() {
        let login = prompt("Please enter your email:", "");
        if(ValidateEmail(login)==true){
            let mdp = prompt("Please enter your password:", "");
            if (mdp == null || mdp == "") {
                alert("Please enter your password");
            } else {
                window.location.href = "?login=" + login + "&mdp=" + mdp;
                
            }
        }
        
      }
// end login pop up
// validate email regex
function ValidateEmail(login) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(login))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
