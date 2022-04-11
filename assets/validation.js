function checkFName(input){
    var validFName = /^[\w'\-,.][^0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
    var checkInput = document.getElementById('fname').value;
    if(!checkInput.match(validFName)){
        document.getElementById('fnameHelp').innerHTML = 'This is not a valid first name!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('fnameHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkLName(input){
    var validFName = /^[\w'\-,.][^0-9_!¡?÷?¿\/\\+=@#$%ˆ&*(){}|~<>;:[\]]{2,}$/;
    var checkInput = document.getElementById('lname').value;
    if(!checkInput.match(validFName)){
        document.getElementById('lnameHelp').innerHTML = 'This is not a valid last name!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('lnameHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkEmail(input){
    var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var checkInput = document.getElementById('email').value;
    if(!checkInput.match(validEmail)){
        document.getElementById('emailHelp').innerHTML = 'This is not a valid email!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('emailHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkPNumber(input){
    var validEmail = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/;
    var checkInput = document.getElementById('pnumber').value;
    if(!checkInput.match(validEmail)){
        document.getElementById('pnumberHelp').innerHTML = 'This is not a valid phone number!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('pnumberHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkDOB(input){
    var validEmail = /^(0?[1-9]|1[0-2])\/([0-2]?[1-9]|[1-3][01])\/\d{4}$/;
    var checkInput = document.getElementById('dob').value;
    if(!checkInput.match(validEmail)){
        document.getElementById('dobHelp').innerHTML = 'This is not a valid date of birth!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('dobHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkContactMethod(input){
    var validEmail = /^[Ee]mail$|^[Pp]hone$/;
    var checkInput = document.getElementById('contactmethod').value;
    if(!checkInput.match(validEmail)){
        document.getElementById('contactmethodHelp').innerHTML = 'Please enter E(e)mail or P(p)hone for your preferred contact method!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('contactmethodHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}

function checkComment(input){
    var validComment = /[A-Za-z][^\.:]*[\.:]/gm;
    var checkInput = document.getElementById('comment').value;
    if(!checkInput.match(validComment)){
        document.getElementById('commentHelp').innerHTML = 'This is not a valid comment!';
        $("#submit").removeClass('btn-success');
        $("#submit").addClass('btn-danger');
        $("#submit").prop("disabled", true);
    }else{
        document.getElementById('commentHelp').innerHTML = 'Looks good!';
        $("#submit").removeClass('btn-danger');
        $("#submit").addClass('btn-success');
        $("#submit").prop("disabled", false);
    }
}