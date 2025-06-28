<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        
        body {
            font-family: Arial, sans-serif ;
            display: flex ;
            flex-direction: column ;
            align-items: center ;
                
        }
        fieldset{
            border-radius: 10px ;
            background-color:#ff971a ;
            border:  5px ridge #ed5411 ;
            margin-left: 30px ;
            padding: 15px ;
            box-shadow: 10px px 10px 0 #ff971a(78, 233, 104, 0.493) ;
        }
        .lg{
            font-size: 22px ;
            font-weight: bold ;
            text-decoration: blink ;
        }
        #n1{
            display: flex ;
            flex-direction: column ;
            align-items: center ;
        }
        #row1{
            background-color:#ff971a;
            border:  5px ridge #ed5411;
            margin-top: 10px;
            margin-left: 312px;
            margin-right: 284px;
            margin-bottom: 20px;
            padding: 15px;
        }
        #row2{
            display: flex;
            justify-content: center;
        }
        #row22{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        #row3{
            display: flex;
        }
        #fin{
            
        }
        legend{
            border: 2px groove #ed5411;
            border-radius: 10px;
            padding:px;
            margin-left: 2px;
            margin-right: 2px;
            background-color: #ff971a;
            font-weight: bold;
            font-style: italic;
        }
        select{
            background-color: rgb(255, 255, 255);
            border: 2px solid rgb(255, 255, 255);
            border-radius: 10px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-left: 10px;
            margin-right: 10px;
            cursor: pointer;
        }
        .txt{
            background-color: #ff971a(28, 114, 28, 0.884);
            border: 2px solid rgb(255, 255, 255);
            border-radius: 10px;
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 2px;
            padding-bottom: 2px;
            margin-left: 10px;
            margin-right: 10px;
            color: rgb(0, 0, 0);
        }
        .btn{
            background-color: #ed5411 ;
            border: 2px solid rgb(255, 255, 255) ;
            border-radius: 10px ;
            padding-left: 5px ;
            padding-right: 5px ;
            padding-top: 2px ;
            padding-bottom: 2px ;
            margin-left: 10px ;
            margin-right: 10px ;
            color: white ;
            cursor: pointer ;
        }
        ::placeholder{
            color: rgb(143, 141, 141) ;
        }
        #topbar{
            background: white;
            display: flex ;
            flex-direction: row-reverse ;
            justify-content: start ;
            align-items: center ;
            width: 100% ;
            padding: 10px  20px ;
            margin-top: px ;
            position: fixed;
            box-shadow: 0 0 10px rgba(248, 113, 3, 0.938) ;
        }
        .item1{
            margin: 20px ;
            font-size: 16px ;
            color: rgb(49, 49, 49) ;
            font-weight: bold ;
            cursor: pointer ;
        }
        #acc{
            display: flex ;
            flex-direction: row ;
            justify-content: space-between ;d
            align-items: center ;
            margin-left: 100px ;
        }
        #acc div{
            margin: 15px;
            cursor: pointer;
            border-radius: 10px;
            background-color: #ed5411;
            padding: 5px 10px;
            font-size: 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        #logo{
            margin-right: 50px;
            margin-left: 30px;
        }
        .item1:hover,#cntc,a:hover{
            color: #ed5411;
        }
        #sign_in:hover,#log_in:hover{
            margin: 14px;
            cursor: pointer;
            border: 1px solid #ed5411;
            border-radius: 10px;
            color: #ed5411;
            padding: 5px 10px;
            font-size: 20px;
            background-color: white;
            font-weight: bold;
            cursor: pointer;
         }
         form{
            margin-top: 100px;
            margin-bottom: 10px;
            background-color: #ed531109;
            width: 100%;
         }
         a{
            text-decoration: none;
            padding: 0 ;
            margin: 0;
            color: black;
        }
        /* ----------------------------------------------------------------------------------------------------------- */
        footer {
            background-color: #ed5411;
            color: #fff;
            text-align: center;
            bottom: 0;
            width: 100%;
            }
        
        table{
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body >
<nav id="topbar">
        <div id="acc">
            <div id="sign_in"><a href="signin.html">Inscription</a></div> 
            <div id="log_in"><a href="login.html">Connexion</a></div> 
        </div> 
        <div class="item1"><a href="Aceuille.html"> Principale</a></div> 
        <div id="qsn" class="item1"><a href="qsn.html">Qui somme nous ?</a></div> 
        <div class="item1"  ><a  href="contacter.php" id="cntc">Contacter nous</a> </div> 
        <div class="item1"><a href="professors.html"> Nos enseignant</a></div> 
        <div class="item1" ><a href="./contenu.html" id="contenu">Notre contenu</a> </div> 
        <img  id="logo" src="./logo-site.png" alt="3alamni">

    </nav>
    
        <form action="" method="POST">
            <div id="n1">
            <fieldset id="row1">
                <legend class="lg"> Votre Demande </legend>
                <label for="ob">Sélectionner l'objet de votre demande </label>
                <select name="ob"id="ob" class="txt">
                    <option value="question">Demande d'information génearle</option>
                    <option value="probleme">Problème technique</option>
                    <option value="suggestion" selected>Suggestion</option>
                </select>
            </fieldset>
            <div id="row2">
            <fieldset id="row21" >
                
                    
                <legend class="lg">Vos coordonnes </legend>
                <table>
                    <tr>
                        <td><label for="nom">Nom</label></td>
                        <td><input type="text" class="txt" name="nom" id="nom" placeholder="Nom" required ></td>
                    </tr>
                     <tr>
                        <td><label for="prenom">Prénom</label></td>
                        <td><input type="text" class="txt" name="prenom" id="prenom" placeholder="Prénom" required ></td>
                    </tr>
                    <tr>
                        <td>Sexe </td>
                        <td><input type="radio"  name="sexe" value="homme">
                        <label for="homme">Homme</label></td>
                        <td><input type="radio"  name="sexe" value="femme">
                        <label for="femme">Femme</label><br></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" class="txt"name="email" id="email" placeholder="example@gmail.com"></td>
                    </tr>
                    <tr>
                        <td><label for="adresse">Adresse</label></td>
                        <td><input type="text" class="txt" name="adresse" id="adresse" placeholder="Votre adresse"></td>
                    </tr>
                    <tr>
                        <td> Ville</td>
                        <td>
                        <select name="ville" id="ville" class="txt">
                            <option value="ariana">Ariana</option>
                            <option value="beja">Beja</option>
                            <option value="ben_arous">Ben Arous</option>
                            <option value="bizerte" >Bizerte</option>
                            <option value="gabes">Gabes</option>
                            <option value="gafsa">Gafsa</option>
                            <option value="jendouba">Jendouba</option>
                            <option value="kairouan">Kairouan</option>
                            <option value="kasserine">Kasserine</option>
                            <option value="kebili">Kebili</option>
                            <option value="kef">Kef</option>
                            <option value="mahdia">Mahdia</option>
                            <option value="manouba">Manouba</option>
                            <option value="medenine">Medenine</option>
                            <option value="monastir" selected>Monastir</option>
                            <option value="nabeul">Nabeul</option>
                            <option value="sfax">Sfax</option>
                            <option value="sidi bouzid">Sidi Bouzid</option>
                            <option value="siliana">Siliana</option>
                            <option value="sousse">Sousse</option>
                            <option value="tataouine">Tataouine</option>
                            <option value="tozeur">Tozeur</option>
                            <option value="tunis">Tunis</option>
                            <option value="zaghouan">Zaghouan</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="code_postal">Code Postal</label></td>
                        <td><input type="text" class="txt" name="code_postal" id="code_postal" placeholder="Code Postal"></td>
                    </tr>
                
                    
                <tr>
                <td><label for="tel">Téléphone</label></td>
                <td><input type="tel" class="txt"name="tel" id="tel" placeholder="+216 00 000 000" required></td>
                </tr>
            </table>
           
            </fieldset>
            <fieldset id="row22">
                <legend class="lg">Message</legend>
                
                <textarea name="message" id="message" class="txt" placeholder="Votre message" rows="18" cols="20"></textarea><br>
                <div>
                <input type="reset"  class="btn" value="Supprimer tous" id="reset">
                <input type="submit" name="submit" class="btn" value="Envoyer" id="submit">
                </div>
            </fieldset>
            </div>
        </form>
        <p id="row3" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif, Courier, monospace;">Pour toute demande spécifique, vous pouvez également nous contacter par email à &nbsp; <a href="mailto:bechir.zammouri@ensi-uma.tn">contacter.nous@3allemni.tn</a></p>
        
    
    <div id="fin">
        <table>
            <caption>Résaux sociaux</caption>
            <tr> 
            <td> <a href="https://www.facebook.com/bachir.zamouri.9/"><img src="./contacter nous/facebook.png"alt="Facebook"></a></td>
            <td> <a href="https://www.instagram.com/bechir__7/?hl=fr"><img src="./contacter nous/insta.png" alt="instagram"></a></td>
            <td> <a href="https://twitter.com/BachirZamouri"><img src="./contacter nous/twit.png" alt="Twitter"></a></td>
            <td>  <a href="https://twitter.com/Cristiano?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img  src="./contacter nous/in.png" alt="Linkedin"></a></td>
            </tr>
        </table>

    </div>
        </div>
        
        <footer>
            <p>&copy; 2024 Site 3alamni.tn . Tous droits réservés.</p>
        </footer>
</body>
</html>
<!--  code d'isnertion de donnes dans la base  -->
<?php
require 'connectiondb.php';

if(isset($_POST["submit"])){
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
 
  $sexe = $_POST["sexe"];
  $email = $_POST["email"];
  $adresse = $_POST["adresse"];
  $ville = $_POST["ville"];
  $code_postal = $_POST["code_postal"];
  $num_tel = $_POST["tel"];
  $demande = $_POST["ob"];
  $message = $_POST["message"];
 
  

  $query = "INSERT INTO coordonnes VALUES('$nom', '$prenom', '$sexe', '$email', '$adresse', '$ville', '$code_postal', '$num_tel', '$demande', '$message')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Les données ont été insérées avec succès.'); </script>
  ";
}
?>