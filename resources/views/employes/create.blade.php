@extends('layouts.user')
    <link rel="stylesheet" href="{{ asset('css/formulaire.css') }}">
@section('content')
   
<main> 
        <div class="mon-container">
            <!-- <h3>Publier une offre d'emploi</h3> -->
            <!-- <div class="rows">
                <div class="colonne">
                    <label for="" >Vous avez déjà un compte ?</label>
                </div>
                <div class="colonne">
                    <input type="button" value="Connectez-vous" class="btnConnect">
                </div>
            </div> -->
           
            <!-- <p id="compte">Si vous n’avez pas encore de compte vous pouvez en créer un ci-dessous en saisissant votre adresse e-mail ou identifiant.</p> -->

            <div class="form-container">
                <form action="" class="formulaire">
                    <p id="title">Informations personnelles</p>
                    <p id="title">Etape 1</p>
                    <div class="row-12">
                        <div class="colonne">
                            <label for="">Prénom</label>
                            <input type="text" name="prenom" id="prenom">
                        </div>
                        <div class="colonne">
                            <label for="">Nom</label>
                            <input type="text" name="nom" id="nom">
                        </div>
                        <div class="colonne">
                            <label for="">Date de Naissance</label>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="colonne">
                            <label for="">Lieu de Naissance</label>
                            <input type="text" name="lieu" id="lieu">
                        </div>
                        
                    </div>
                    <!-- <div class="row-12">
                        <div class="colonne">
                            <label for="">Date de Naissance</label>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="colonne">
                            <label for="">Lieu de Naissance</label>
                            <input type="text" name="lieu" id="lieu">
                        </div>
                    </div> -->
                     <!-- 2 etape -->
                     <p id="title">Etape 2</p>
                    <!-- <p id="trait"></p> -->
                    <div class="row-12">
                        <div class="colonne">
                            <label for="">Mariage</label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="O">Oui</option>
                                <option value="N">Non</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Sexe</label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="M">Masculin</option>
                                <option value="F">Feminin</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Nombre d'enfants</label>
                            <input type="number" name="nbrEnfant" id="nbrEnfant">
                        </div>
                    </div>
                     <!-- 3 etape -->
                    <p id="title">Etape 3</p>

                    <div class="row-12">
                        <div class="colonne">
                            <label for="">Service</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div class="colonne">
                            <label for="">Date d'Emploi </label>
                            <input type="date" name="date" id="date">
                        </div>
                        <div class="colonne">
                            <label for="">Diplome </label>
                            <input type="diplome" name="diplome" id="diplome">
                        </div>
                      
                    </div>
                    
                    <!-- 4 etape -->
                    <p id="title">Etape 4 : Informations du Poste</p>

                    <div class="row-12">
                       
                        <div class="colonne">
                            <label for="">Catégorie du poste </label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="cdd">Accueil - Réception</option>
                                <option value="cdi">Administration</option>
                                <option value="stage">Génie Civil</option>
                                <option value="cdi">Infographie et Web Design</option>
                                <option value="stage">Marketing</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Poste </label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="">Poste 1</option>
                                <option value="">Poste 2</option>
                                <option value="">Poste 3</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Contrat </label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="cdd">CDD</option>
                                <option value="cdi">CDI</option>
                                <option value="stage">Stage</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Mouvement</label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="">Mouvement 1</option>
                                <option value="">Mouvement 2</option>
                                <option value="">Mouvement 3</option>
                            </select>
                        </div>
                        <div class="colonne">
                            <label for="">Bulletin </label>
                            <select name="" id="" class="select-choice" >
                                <option value="null" disabled selected></option>
                                <option value="">Bulletin 1</option>
                                <option value="">Bulletin 2</option>
                                <option value="">Bulletin 3</option>
                            </select>
                        </div>
                      
                    </div>
                    <!-- btn valider -->
                    <input type="button" value="Enregistrer" class="btnEnreg">
                </form>
            </div>
        </div>
    </main> 


    <script>
        // jquery
        $(document).ready(function(){
            $('ul li a').click(function(){
                $('li a').removeClass("actived");
                $(this).addClass("actived");
            });
        });
    </script>

@endsection