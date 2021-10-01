<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>GRH</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
}


.box-container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh;  
}
/* .row
{
    background-color:red;
   
} */

.btn{
    width: 100%;
    height: 100%;
    padding: 1rem;
    cursor: pointer;
    border: 0;
    background-color: #1a73e8;
    color: #fff;
    box-shadow: 2px 2px 12px rgba(0,0,0,.2);
    border-radius: .5rem;
}
/* .formulaire{
    width: 450px;
    background-color: #f8f9fa;
    height: auto;
    padding: 4rem 2rem;
    box-shadow:  2px 2px 2px rgba(0,0,0,.2);
    border-radius: 1rem;
}
.form_title{
    font-size: 1rem;
    text-align: center;
    padding-bottom: 1rem;
} */


</style>
<body>
    
    <div class="container">
        <div class="box-container">
        
            <h1>Bienvenue dans votre plateforme </h1>
            <br><br><hr>
            <div class="row">
                <a href=" {{ route('login') }}">
                    <input type="button" value="Connectez-vous" class="btn">
                </a>
            </div>
    
        </div>
    </div>
</body>
</html>