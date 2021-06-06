$(document).ready(function(){


    const form = {
        username : document.getElementById("sign-username"),
        password: document.getElementById("sign-password"),
        login: document.getElementById("login"),
        messages: document.getElementById("form-messages")
    }


    $("#login").click(function(e){
        e.preventDefault();
        const request = new XMLHttpRequest();
    
        request.onload = () =>{
            let responseObject = null;
    
            try {
                responseObject = JSON.parse(request.responseText);
            }catch(e){
                console.error('Could not parse JSON !');
            }
    
            if(responseObject){
                handleResponse(responseObject);
            }
        };
    
        const requestData = `username=${form.username.value}&password=${form.password.value}&login=${form.login.value}&messages=${form.messages.value}`;
        
        console.log(requestData);
        request.open('post','includes/login.inc.php');
        request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        request.send(requestData);
    });

    function handleResponse (responseObject){
        if(responseObject.ok && responseObject.user === "administrator"){
            location.href = "homepage.php";
        }
        else if(responseObject.ok && responseObject.user === "cashier one"){
            location.href = "Milktea2.php";
        }
        else if(responseObject.ok && responseObject.user === "cashier two"){
            location.href = "pg2.php";
        }
        else if(responseObject.ok && responseObject.user === "accounting"){
            location.href = "payrollaccountlist2.php";
        }
        else{
            while(form.messages.firstChild){
                form.messages.removeChild(form.messages.firstChild);
            }
    
            responseObject.messages.forEach((message) => {
                const li = document.createElement('li');
                li.textContent = message;
                form.messages.appendChild(li);
                form.messages.style.display = "block";
                form.password.value = '';
            });
    
            
        }
    }
});