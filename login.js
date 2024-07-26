const signupbutton = document.getElementById('signupbutton')
const loginbutton = document.getElementById('loginbutton')
const signinform = document.getElementById('login')
const signupform = document.getElementById('signup')

signupbutton.addEventListener('click',function() {
   signinform.style.display="none";
  signupform.style.display="content";
})

signupbutton.addEventListener('click',function(){
    signinform.style.display="content";
    signupform.style.display="none";
})